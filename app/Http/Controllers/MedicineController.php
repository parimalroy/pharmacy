<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function medicine_home()
    {
        $madecines = Medicine::all();
        return view('Backend.medicine-home', ['medicines' => $madecines]);
    }

    public function medicine_create()
    {
        return view('Backend.medicine-create');
    }

    public function medicine_store(Request $request)
    {
        $request->validate([
            'medicine_name' => 'required|min:2',
            'packing' => 'required|min:2',
            'generic_name' => 'required|min:2',
            'supplier_name' => 'required|min:2',
        ]);

        $medicine = Medicine::create([
            'medicine_name' => $request->medicine_name,
            'packing' => $request->packing,
            'generic_name' => $request->generic_name,
            'supplier_name' => $request->supplier_name,
            'created_at' => time(),
            'updated_at' => time()

        ]);

        if ($medicine) {
            return redirect()->route('medicine.home')->with('success', 'Medicin added success!');
        } else {
            return redirect()->route('medicine.create')->with('error', 'Medicine added faild!');
        }
    }

    public function medicine_edit($id)
    {
        $medicine = Medicine::find($id);

        return view('Backend.medicine-edit', ['medicine' => $medicine]);
    }

    public function medicine_update(Request $request)
    {
        $request->validate([
            'medicine_name' => 'required|min:2',
            'packing' => 'required|min:2',
            'generic_name' => 'required|min:2',
            'supplier_name' => 'required|min:2',
        ]);

        $medicine = Medicine::where('id', $request->id)
            ->update([
                'medicine_name' => $request->medicine_name,
                'packing' => $request->packing,
                'generic_name' => $request->generic_name,
                'supplier_name' => $request->supplier_name,
            ]);

        if ($medicine) {
            return redirect()->route('medicine.home')->with('success', 'Medicine updated success!');
        } else {
            return redirect()->route('medicine.home')->with('error', 'Medicine upadeted faild!');
        }
    }

    public function medicine_trash(Request $request)
    {
        $trash = Medicine::where('id', $request->id)->delete();
        if ($trash) {
            return redirect()->route('medicine.home')->with('success', 'Medicine deleted success!');
        } else {
            return redirect()->route('medicine.home')->with('error', 'Medicine deleted faild!');
        }
    }
}