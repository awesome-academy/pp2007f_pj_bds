<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\ArticleRepositoryInterface;

class TinTucController extends Controller
{
    //
    // public function index(){
    //     return view('pages.tintucbds.tintuc');
    // }

    public $articleRepo;

    public function __construct(ArticleRepositoryInterface $articleRepo)
    {
        $this->articleRepo = $articleRepo;
    }

    public function tinthitruong()
    {
        return view('pages.tintucbds.tinthitruong');
    }

    public function phantich()
    {
        return view('pages.tintucbds.phantich');
    }

    public function chinhsach()
    {
        return view('pages.tintucbds.chinhsach');
    }
    public function quyhoach()
    {
        return view('pages.tintucbds.quyhoach');
    }
    public function bdsthegioi()
    {
        return view('pages.tintucbds.bdsthegioi');
    }
    public function taichinhbds()
    {
        return view('pages.tintucbds.taichinhbds');
    }


    public function index() {
        $articles=$this->articleRepo->index();
        $recommend = Article::all()->random(8);
        return view("pages.tintucbds.tintuc", compact('articles','recommend'));
    }

    public function searchTinTuc(Request $req) {
        $articles = Article::where('title','LIKE','%'.$req->timtintuc.'%')->orWhere('content','LIKE','%'.$req->timtintuc.'%')->simplePaginate(10);
        $recommend = Article::all()->random(8);


        return view("pages.tintucbds.tintuc", compact('articles','recommend'));

    }

    //Singlepost
    
    public function articles($id) {
        $articles = $this->articleRepo->articles($id);
        $newarticles = Article::orderBy('id', 'desc')->limit(5)->get();
        $sametype = Article::where('type', $articles[0]['type'] )->limit(7)->orderBy('id', 'desc')->get();
        return view("pages.tintucbds.singlepost", compact('articles','newarticles', 'sametype'));
    }

    
    
}
