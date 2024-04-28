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
        Schema::create('Earth', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Forming the Earth'); // hình thành trái đất
            $table->string('Cooling and First Crust Forming'); // làm mát và hình thành lớp vỏ đầu tiên
            $table->string('The Emergence of the Early Ocean and Atmosphere'); // sự xuất hiện của đại dương và khí quyển sơ khai
            $table->string('Development of Living Organisms'); // sự phát triển của sinh vật sống
            $table->string('Continental Separation and Movement'); // sự tách và di chuyển của lục địa
            $table->string('The Development of Diverse Life'); // sự phát triển của đời sống đa dạng
            $table->string('Ice Ages and Warming'); // thời kì băng hà và sự ấm lên
            $table->string('Human Influence'); // sự ảnh hường của con người
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Earth');
    }
};
