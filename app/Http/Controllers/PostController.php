<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Products;
use App\Models\Image;
use App\Models\Ward;
use App\Models\District;
use App\Models\Province;
use App\Models\Post_type;
use App\Models\Menu_category;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function post() {
        $categories = Post_type::all();
        return view('', compact('categories'));
    }

    public function viewPost() {
        $posts = Products::all();
        return view('admin.posts', compact('posts'));
    }

    public function editPost($id) {

        $post = Products::where('id', '=', $id)->first();
        $wards = Ward::all();
        $districts = District::all();
        $provinces = Province::all();
        $types = Post_type::all();
        $images = Image::where('products_id', '=', $id)->get();

        return view('admin.edit_post', compact('post', 'wards', 'districts', 'provinces', 'types', 'images'));
    }

    public function updatePost(Request $request, $id) {
        $post = Products::where('id', '=', $id)->first();
        $post->title = $request->get('title');
        $post->price = $request->get('price');
        $post->area = $request->get('area');
        $post->address = $request->get('address');
        $post->number_of_bedroom = $request->get('bedroom');
        $post->number_of_restroom = $request->get('restroom');
        $post->number_of_floor = $request->get('floor');
        $post->content = $request->get('content');
        $post->post_type_id = $request->get('type');
        $post->provinces_id = $request->get('province');
        $post->districts_id = $request->get('district');
        $post->wards_id = $request->get('ward');
        $edit_mess = "";
        if ($post->save()) {
            $edit_mess = "Successfully Edited!";
        }
        return redirect()->route('editPost', [$id])->with('flash_success', 'Success');
    }
    
    public function deletePost(Request $request)
    {
        $posts = Products::find($request->get('post_id'));
        $posts->delete();
        echo view('admin.posts', compact('posts'));
        exit;
    }

    public function uploadImage(Request $request)
    {
        $product = Products::create($request->all());
        foreach ($request->photos as $photo) {
            $name = $photo->store('photos');
            Image::create([
                'products_id' => $product->id,
                'name' => $name
            ]);
        }
        return 'Upload successful!';
    }

    public function store(Request $request)
    {
        $post = new Products();
        $post->title = $request->get('title');
        $post->type = $request->get('appearance');
        $post->menu_category_id = $request->get('category');
        $post->provinces_id = $request->get('province');
        $post->districts_id = $request->get('district');
        $post->wards_id = $request->get('ward');
        $post->address = $request->get('email');
        $post->area = $request->get('acreage');
        $post->price = $request->get('price');
        $post->unit = $request->get('unit');
        $post->content = $request->get('content');
        $post->number_of_floor = $request->get('floors');
        $post->number_of_bedroom = $request->get('bedrooms');
        $post->post_type_id = $request->get('post_type');
        $post->save();
        return back();
    }
}

