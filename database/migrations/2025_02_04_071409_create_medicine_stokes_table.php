<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicine_stokes', function (Blueprint $table) {
            $table->id();
            $table->string('batch_id', 100);
            $table->date('expiry_date', 100);
            $table->string('quantity', 100);
            $table->string('mrp', 100);
            $table->string('Rate', 100);
            $table->foreignId('medicine_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete()->after('id');
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_stokes');
    }
};
