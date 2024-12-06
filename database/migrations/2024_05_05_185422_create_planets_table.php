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
        $table->string('name')->nullable();
        $table->string('image')->nullable();
        $table->text('description')->nullable();
        $table->float('diameter')->nullable();
        $table->string('atmosphere')->nullable();
        $table->float('distance_from_sun')->nullable();
        $table->float('distance_from_earth')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('planets');
}
};
