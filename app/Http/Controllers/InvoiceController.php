<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class InvoiceController extends Controller
{
    //
    public function saveInvoice(Request $request){

    	//dd($request->all());

    	DB::table('invoices')->insert(['customer_name'=>$request->customer_name, 
    								'company_name'=>$request->company_name,
    								'product'=>$request->product,
    								'quantity'=>$request->quantity,
    								'transport_cost'=>$request->trans_cost,
    								'install_cost'=>$request->install_cost,
    								'payment'=>$request->due_date_status,
    								'due_date'=>$request->due_date
									]);

    return redirect()->route('manage.invoices');

    }

    public function manageInvoices(){

    	$invoice = DB::table('invoices')->get();

    	return view('invoice_table')->with(['invoices'=>$invoice]);

    }



}
	