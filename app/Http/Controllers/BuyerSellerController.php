<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerSeller;
use App\Models\Province;
use App\Models\BuyerSellerArea;
use App\Models\ImageDemo;

class BuyerSellerController extends Controller
{
    public function index(Request $request) {

        $buyersellercost=BuyerSeller::all();
        $provinces = Province::all();
        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers','provinces'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers','provinces'));
    }

    public function seller(Request $request) {
        $buyersellercost = BuyerSeller::where('buyer_seller_catergory_id','>',3)->get();
        $provinces = Province::all();
        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->where('buyer_seller_catergory_id','>',3)->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers','provinces'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers','provinces'));
    }
    
    public function buyer(Request $request) {
        $buyersellercost = BuyerSeller::where('buyer_seller_catergory_id','<',4)->get();
        $provinces = Province::all();
        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->where('buyer_seller_catergory_id','<',4)->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers','provinces'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers','provinces'));
    }

    public function post($id) {
        $buyerSeller=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->find($id);
        $buyerSellers=BuyerSeller::all()->where('district_id',$buyerSeller->district_id);
        $provinces = Province::all();

        return view ('pages.canmuacanthue.post',compact('buyerSeller','buyerSellers','provinces'));
    }


}
