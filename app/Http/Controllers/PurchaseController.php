<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;
use App\Models\User;
use Auth;

class PurchaseController extends Controller
{
   public function index()
    {
        $users= Purchases::where('invoiced','=', null)->with('user')->distinct('product_id')->get('user_id');

        return view('purchases.index', ['users'=>$users]);
    }

   public function store(Request $request)
    {

        $product = new Purchases;
        $product->user_id =  Auth::user()->id;
        $product->product_id = $request->input('id');
        $product->save();

        return redirect()->route('list-products')->with('alert', 'Compra Exitosa!');
    }

}
