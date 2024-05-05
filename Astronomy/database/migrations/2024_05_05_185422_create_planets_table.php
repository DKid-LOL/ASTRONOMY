<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('planets', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('image');
        $table->text('description');
        $table->float('diameter');
        $table->string('atmosphere');
        $table->float('distance_from_sun');
        $table->float('distance_from_earth');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('planets');
}
};
