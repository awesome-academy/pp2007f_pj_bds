<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SlideFromRequest;
use App\Models\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::get();
        return view('pages.admin.slide', compact('slides'));
    }

    public function create()
    {
        return view('pages.admin.createSlide');
    }

    public function store(SlideFromRequest $request)
    {
        $slide = new Slide();
        $slide->name = $request->get('name');
        $slide->link = $request->get('link');
        $slide->slug = $request->get('slug');
        $slide->type = $request->get('type');
        $slide->width = $request->get('width');
        $slide->height = $request->get('height');
        $slide->order = $request->get('order');

        $mess = "";
        if ($slide->save()) {
            $mess = "Successful add new slide!";
        }

        return view('pages.admin.createSlide', compact('slide'))->with('mess', $mess);
    }
    public function edit($id)
    {
        $slide = Slide::find($id);
        return view("pages.admin.editSlide", compact('slide'));
    }

    public function update(SlideFromRequest $request, $id)
    {
        $slide = Slide::find($id);
        $slide->name = $request->get('name');
        $slide->link = $request->get('link');
        $slide->slug = $request->get('slug');
        $slide->type = $request->get('type');
        $slide->width = $request->get('width');
        $slide->height = $request->get('height');
        $slide->order = $request->get('order');
        $slide->save();
        return view("pages.admin.editSlide", compact('slide'))->with("mess", "Edit Slide success!");
    }

    public function delete(Request $request, $id)
    {
        $slide = Slide::find($id);
        $slide->delete();
        return redirect()->route('Slide')->with('slide_del', "Delete Slide Success");
    }
}
