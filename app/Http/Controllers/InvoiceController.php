<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Customer;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice_home()
    {
        $invoices = Invoice::get();
        return view('Backend.invoice.invoice-home', ['invoices' => $invoices]);
    }

    public function invoice_create()
    {
        $customers = Customer::get();
        return view('Backend.invoice.invoice-create', ['customers' => $customers]);
    }

    public function invoice_store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'net_total' => 'required |numeric',
            'invoice_date' => 'required',
            'total_amount' => 'required|numeric',
            'total_discount' => 'required|numeric',
        ]);

        $invoice = Invoice::create([
            'customer_id' => $request->customer_id,
            'net_total' => $request->net_total,
            'invoice_date' => $request->invoice_date,
            'total_amount' => $request->total_amount,
            'total_discount' => $request->total_discount,
        ]);
        if ($invoice) {
            return redirect()->route('invoice.home')->with('success', 'Invoice added successfully !');
        }
    }
}