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
        Schema::create('concesionarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->integer('precio');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concesionarios');
    }
};
