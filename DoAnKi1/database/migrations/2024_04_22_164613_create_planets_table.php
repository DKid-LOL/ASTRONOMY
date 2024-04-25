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
        Schema::create('planets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('size'); // Kích thước (size) không phải là kiểu số, mà là chuỗi ký tự
            $table->string('atmosphere')->nullable(); // Bầu khí quyển
            $table->string('distance_from_sun'); // Khoảng cách từ mặt trời
            $table->string('distance_from_earth'); // Khoảng cách từ trái đất
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planets');
    }
};
