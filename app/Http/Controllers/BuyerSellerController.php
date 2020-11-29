<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerSeller;
use App\Models\BuyerSellerArea;
use App\Models\ImageDemo;

class BuyerSellerController extends Controller
{
    public function index(Request $request) {

        $buyersellercost=BuyerSeller::all();
        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers'));
    }

    public function seller(Request $request) {
        $buyersellercost = BuyerSeller::where('buyer_seller_catergory_id','>',3)->get();

        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->where('buyer_seller_catergory_id','>',3)->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers'));
    }
    
    public function buyer(Request $request) {
        $buyersellercost = BuyerSeller::where('buyer_seller_catergory_id','<',4)->get();

        $buyerSellers=BuyerSeller::with(['imageDemo','disTrict','buyerSellerArea'])->where('buyer_seller_catergory_id','<',4)->paginate(10);
        
        if ($request->ajax()) {
            return view('pages.canmuacanthue.presult', compact('buyersellercost','buyerSellers'));
        }
        return view ('pages.canmuacanthue.index',compact('buyersellercost','buyerSellers'));
    }

public function post() {
    return view ('pages.canmuacanthue.post');
}


}
