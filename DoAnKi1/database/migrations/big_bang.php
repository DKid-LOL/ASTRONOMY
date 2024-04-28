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
        Schema::create('bigbang', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Initial Singularity'); // Tính đơn điểm ban đầu
            $table->string('Ifnlation'); // Sự bành trướng nhanh chóng
            $table->string('Cooling and Formation of Basic Elements'); // Làm Mát và Hình Thành Các Nguyên Tố Cơ Bản
            $table->string('Formation of Atoms and Molecules'); // Hình Thành Các Nguyên Tử và Phân Tử
            $table->string('Cosmic Microwave Background Radiation (CMB)'); // Bức Xạ Nền Vi sóng vũ Trụ 
            $table->string('Structure Formation'); // Hình Thành Cấu Trúc
            $table->string('Accelerating Expansion'); // Sự Bành Trướng Đang Tăng Tốc
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bigbang');
    }
};
