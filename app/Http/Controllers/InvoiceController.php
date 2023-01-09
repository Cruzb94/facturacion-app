<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Purchases;
use App\Models\Invoices;
use App\Models\Products;
use App\Models\User;
use Auth;

class InvoiceController extends Controller
{
     public function index()
    {
        $invoices= Invoices::all();
        return view('invoices.index', ['invoices'=>$invoices]);
    }

     public function generateInvoice($user_id)
    {

        $purchases= Purchases::where('invoiced','=', null)->where('user_id','=', $user_id)->pluck('id')->toArray();

        $invoice = new Invoices;
        $invoice->purchase_id = json_encode($purchases);
        $invoice->save();

        Purchases::whereIn('id', $purchases)->update(array('invoiced' => 1));

        return redirect()->back()->with('alert', 'Factura generada correctamente!');
    }

    public function show($id)
    {
        $invoice = Invoices::where('id', $id)->first();

        $purchases = Purchases::whereIn('id', json_decode($invoice->purchase_id))->with('product')->with('user')->get();
        
        return view('invoices.show',['purchases'=>$purchases]);
    }

  // return redirect()->route('list-products')->with('alert', 'Compra Exitosa!');
}
