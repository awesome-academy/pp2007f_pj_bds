<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view ('admin.user.index',compact('users'));
    }

    public function create() {
        return view ('admin.user.create');
    }

    public function store(Request $request) {
        $user = new User();
        // $disk = Storage::disk('local');
        Storage::disk('local')->put($request->avatar);
        $path = Storage::disk('local')->path($request->avatar);
        // dd($path);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->inputPassword;
        $user->fullname = $request->fullname;
        $user->dateofbirth = date('Y-m-d',strtotime($request->dateofbirth));
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->sex = $request->sex;
        $user->avatar = $path;
        $user->save();
        return view ('admin.user.create',compact('user'));
    }

    public function edit($id) {
        $user = User::find($id);
        return view ('admin.user.edit',compact('user'));
    }

    public function update(Request $request,$id) {
        $user = User::find($id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = $request->inputPassword;
        $user->fullname = $request->fullname;
        $user->dateofbirth = $request->dateofbirth;
        $user->address = $request->address;
        $user->phonenumber = $request->phonenumber;
        $user->sex = $request->sex;
        $user->save();
        return view ('admin.user.edit',compact('user'));
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        $users = User::all();
        return view ('admin.user.index',compact('users'));
    }

}
