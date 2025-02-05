<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier_home()
    {
        $suppliers = Supplier::all();
        return view('Backend.supplier.supplier-home', ['suppliers' => $suppliers]);
    }

    public function supplier_create()
    {
        return view('Backend.supplier.supplier-create');
    }

    public function supplier_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:suppliers',
            'contact_number' => 'required|numeric',
            'supplier_address' => 'required|min:10|max:300',

        ]);
        $supplier = Supplier::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'supplier_address' => $request->supplier_address,
        ]);

        if ($supplier) {
            return redirect()->route('supplier.home')->with('success', 'Supplier added success!');
        }
    }
}