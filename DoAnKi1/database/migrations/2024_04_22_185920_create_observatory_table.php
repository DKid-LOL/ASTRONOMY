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
        Schema::create('observatory', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Telescope'); // kính thiên văn
            $table->string('Dome');
            $table->string('Control room'); // phòng điều khiển
            $table->string('Space telescope'); // kính thiên văn không gian
            $table->string('Data transmission system'); // hệ thống truyền dữ liệu
            $table->string('Radio antenna'); // Ăng-ten radio
            $table->string('Antenna array'); // Mảng ăng-ten
            $table->string('Signal processor'); // Bộ xử lý tín hiệu
            $table->string('Special filter'); // Kính lọc đặc biệt
            $table->string('Spectrum analyzers'); // các thiết bị phân tích phổ
            $table->string('Accurate tracking system'); // hệ thống theo dõi chính xác
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observatory');
    }
};
