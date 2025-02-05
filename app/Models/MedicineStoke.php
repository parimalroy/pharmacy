<?php

namespace App\Models;

use App\Models\Medicine;
use Illuminate\Database\Eloquent\Model;

class MedicineStoke extends Model
{
    protected $guarded =  [];

    public function mediciine()
    {
        return $this->belongsTo(Medicine::class, 'medicine_id');
    }
}
