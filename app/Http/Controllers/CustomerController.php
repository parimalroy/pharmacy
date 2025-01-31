<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer_home()
    {
        $customers = Customer::all();

        return view('Backend.customer-home', ['customers' => $customers]);
    }

    public function customer_create()
    {
        return view('Backend.customer-create');
    }

    public function customer_store(Request $request)
    {
        $request->validate([
            'name' => 'required| min:3',
            'contact_number' => 'required|numeric',
            'address' => 'required',
            'doctor_name' => 'required| min:3',
            'doctor_address' => 'required',
        ]);

        $customers = Customer::create([
            'name' => $request->name,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'doctor_name' => $request->doctor_name,
            'doctor_address' => $request->doctor_address,
            'created_at' => time(),
            'updated_at' => time()
        ]);
        if ($customers) {
            return redirect()->route('customer.home')->with('success', 'Customer addes successfully!');
        } else {
            return redirect()->route('customer.create')->with('error', 'Customer submited faild!');
        }
    }

    public function customer_edit($id)
    {
        $customer = Customer::find($id);
        return view('Backend.customer-edit', ['customer' => $customer]);
    }

    public function customer_update(Request $request)
    {
        $request->validate([
            'name' => 'required| min:3',
            'contact_number' => 'required|numeric',
            'address' => 'required',
            'doctor_name' => 'required| min:3',
            'doctor_address' => 'required',
        ]);
        $customer = Customer::where('id', $request->update_id)
            ->update([
                'name' => $request->name,
                'contact_number' => $request->contact_number,
                'address' => $request->address,
                'doctor_name' => $request->doctor_name,
                'doctor_address' => $request->doctor_address,
            ]);

        if ($customer) {
            return redirect()->route('customer.home')->with('success', 'Update Success!');
        } else {
            return redirect()->route('customer.home')->with('error', 'Update faild!');
        }
    }

    public function customer_delete(Request $request)
    {

        $customer = Customer::where('id', $request->id)->delete();

        if ($customer) {
            return redirect()->route('customer.home')->with('success', 'Delete Success!');
        } else {
            return redirect()->route('customer.home')->with('error', 'Deleted faild!');
        }
    }
}