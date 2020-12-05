<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Province;
use App\Models\District;
use App\Models\Menu_category;
use App\Models\Post_type;
use App\Models\Ward;
use App\Models\Products;


use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view ('admin.user.index',compact('users'));
    }

    public function create() {

        $provinces = Province::all();
        $districts = District::all();
        return view ('admin.user.create',compact('provinces','districts'));
    }

    public function ajaxDistrict(Request $request) {
        if($request->get('parent_code') == 0) {
            echo view ('admin.user.districtajax');
        }
        $districts = District::where('parent_code',$request->get('parent_code'))->get();

        echo view ('admin.user.districtajax',compact('districts'));
        exit;
    }

    public function ajaxWard(Request $request) {
        $wards = Ward::where('parent_code',$request->get('parent_code'))->get();

        echo view ('admin.user.wardajax',compact('wards'));
        exit;
    }

    
    public function store(Request $request) {
        $user = new User();
        // $disk = Storage::disk('local');
        // dd($path);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->inputPassword;
        $user->fullname = $request->fullname;
        $user->dateofbirth = date('Y-m-d',strtotime($request->dateofbirth));
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->sex = $request->sex;

        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            
            $nameAva = time()."_".$name;
            
            $file->move(config('app.link_users'), $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }
        
        $user->save();
        return view ('admin.user.create');
    }

    public function edit($id) {
        $provinces = Province::all();
        $districts = District::all();
        $user = User::find($id);
        return view ('admin.user.edit',compact('user','provinces','districts'));
    }

    public function update(Request $request,$id) {
        $user = User::findOrFail($id);

        if ($request->hasFile('avatar1')) {
            $file = $request->file('avatar1');
            $name = $file->getClientOriginalName();
            $nameAva = time()."_".$name;
            $file->move(config('app.link_users'), $nameAva);
            $user->avatar = $nameAva;
        }
        else {
            $user->avatar = "";
        }
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->inputPassword;
        $user->fullname = $request->fullname;
        $user->dateofbirth = date('Y-m-d',strtotime($request->dateofbirth));
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->sex = $request->sex;
        $user->save();
        $users = User::all();
        return view ('admin.user.index',compact('users'));
    }

    public function delete(Request $request) {
        $did = $request->get('did');
        $user = User::find($did);
        $user->delete();
    }

    public function post() {

        $post = Products::all();
        $provinces = Province::all();
        $districts = District::all();
        $wards = Ward::all();
        $categories = Menu_category::all();
        $post_types = Post_type::all();
        return view ('admin.user.post',compact('provinces','districts', 'wards', 'post','categories', 'post_types'));
    }

}
