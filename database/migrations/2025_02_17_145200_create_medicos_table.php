<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');  // Relación con User
            $table->unsignedBigInteger('especialidad_id');  // Relación con Especialidad
            $table->string('telefono');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('especialidad_id')->references('id')->on('especialidades')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicos');
    }
};
