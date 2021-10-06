<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // Redis::del('invoice');
        
        return view('invoice.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $allInvoice = $request->all();
        $size = count($allInvoice['invoice']);

        for ($x = 0; $x <$size; $x++) {
            Invoice::create([
                'client_id'       => $allInvoice['invoice'][$x]['client_id'],
                'date'            => $allInvoice['invoice'][$x]['date'],
                'select_product'  => $allInvoice['invoice'][$x]['select_product'],
                'quantity'        => $allInvoice['invoice'][$x]['quantity'],
                'price'           => $allInvoice['invoice'][$x]['quantity']*$allInvoice['invoice'][$x]['unit_price']
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->delete();
  
        return redirect()->route('invoiceList')  
                        ->with('success','invoice deleted successfully'); 
    }


    // public function saveRedis(Request $request)
    // {
    //     $client_id = Auth::user()->id;
    //     $product = Product::find($request->pID);
    //     $allInvoice = json_decode(Redis::get('invoice'.$client_id), true);

    //     if($allInvoice == null) {
    //         $allInvoice[0] = [
    //             'name'       => $product->name,
    //             'unit_price' => $product->price,
    //             'date'       => $request->dID,
    //             'quantity'   => $request->quantity,
    //         ];
    //         Redis::set('invoice'.$client_id, json_encode($allInvoice));
    //     } 
        
    //     else {
    //         array_push($allInvoice, [
    //             'name'       => $product->name,
    //             'unit_price' => $product->price,
    //             'date'       => $request->dID,
    //             'quantity'   => $request->quantity,
    //         ]);
    //         //dd($allInvoice);
    //         Redis::set('invoice'.$client_id, json_encode($allInvoice));
    //     }

    //    return Redis::get('invoice'.$client_id);
    // }

    // public function seeAllInvoice()
    // {
    //     $client_id = Auth::user()->id;

    //     return Redis::get('invoice'.$client_id);
    // }

    public function invoiceList()
    {
        $invoices = Invoice::all();
        
        return view('invoice.invoice_list',compact('invoices'));
    }
}
