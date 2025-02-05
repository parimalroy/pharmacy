<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicineStoke;
use Illuminate\Http\Request;

class MedicineStokeController extends Controller
{
    public function medicine_stoke_home()
    {
        $medicinesStokes = MedicineStoke::all();
        return view('Backend.MedicineStoke.medicine-stoke-home', ['medicinesStokes' => $medicinesStokes]);
    }

    public function medicine_stoke_create()
    {
        $medicines = Medicine::all();
        // dd($medicines);
        return view('Backend.MedicineStoke.medicine-stoke-create', ['medicines' => $medicines]);
    }

    public function medicine_stoke_store(Request $request)
    {
        $request->validate([
            'batch_id' => 'required|unique:medicine_stokes',
            'expiry_date' => 'required',
            'quantity' => 'required|numeric',
            'mrp' => 'required|numeric',
            'Rate' => 'required|numeric',
            'medicine_id' => 'required',
        ]);

        $stoke = MedicineStoke::create([
            'batch_id' => $request->batch_id,
            'expiry_date' => $request->expiry_date,
            'quantity' => $request->quantity,
            'mrp' => $request->mrp,
            'Rate' => $request->Rate,
            'medicine_id' => $request->medicine_id,
        ]);

        if ($stoke) {
            return redirect()->route('medicinestoke.home')->with('success', 'Medicin added success!');
        }
    }
}
