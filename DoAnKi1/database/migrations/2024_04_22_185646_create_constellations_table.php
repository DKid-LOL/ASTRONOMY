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
        Schema::create('constellations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location'); // vị trí
            $table->string('Outstanding features'); // đặc điểm nổi bật
            $table->string('Other main stars'); // các ngôi sao chính khác
            $table->string('Some attractive astronomical objects'); //một số đối tượng thiên văn hấp dẫn
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constellations');
    }
};
