<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SlideFromRequest;
use App\Models\Slide;
class SlideController extends Controller
{
    public function index() {
        $slides =Slide::get();
        return view ('pages.admin.slide', compact('slides'));
    }

    public function create() {
        return view ('pages.admin.CreateSlide');
    }

    public function store(SlideFromRequest $request) {
        $slide = new Slide ();
        $slide->name = $request->get('name');
        $slide->link = $request->get('link');
        $slide->slug = $request->get('slug');
        $slide->type = $request->get('type');
        $slide->width = $request->get('width');
        $slide->height = $request->get('height');
        $slide->order = $request->get('order');

        $mess = "";
        if($slide->save()){
            $mess = "Successful add new slide!";
        }
        
        return view ('pages.admin.CreateSlide', compact('slide'))->with('mess', $mess);
    }
}
