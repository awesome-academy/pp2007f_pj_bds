<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        return view('pages.du-an.index');
    }

    public function singlePost()
    {
        return view('pages.du-an.singlePost');
    }

    public function thietKeMatBang()
    {
        return view('pages.du-an.thietke_matbang');
    }
}
