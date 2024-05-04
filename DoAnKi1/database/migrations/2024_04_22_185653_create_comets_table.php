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
        Schema::create('comets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Nucleus');// Hạt nhân
            $table->string('Coma'); // Đám Mây
            $table->text('Tail'); // Đuôi
            $table->string('Hydrogen Envelope'); // Vỏ Hydro
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comets');
    }
};
