<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class DanhbaController extends Controller
{
    //
    public function index(){
        return view ('danhba.nhamoigioi');
=======
use App\Models\Broker;
use App\Models\Business;

class DanhBaController extends Controller
{
    //
    public function index() {
        $brokers = Broker::limit(15)->get();
        return view("pages.danhba.nhamoigioi", compact('brokers'));
    }

    public function index1() {
        $business = Business::limit(18)->get();
        return view ('pages.danhba.doanhnghiep', compact('business'));
    }

    public function singlepost1($id) {
        $brokers = Broker::where('id', '=', $id)->get();
        return view ('pages.danhba.singlepost1', compact('brokers'));
    }

    public function singlepost2($id) {
        $business = Business::where('id', '=', $id)->get();
        return view ('pages.danhba.singlepost2', compact('business'));
>>>>>>> f0dd13add46c8143e900d3131c850e8dd9f045cf
    }
}