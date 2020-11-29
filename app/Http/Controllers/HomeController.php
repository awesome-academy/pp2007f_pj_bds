<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index() {
        return view('pages.index');
        
    }
}
