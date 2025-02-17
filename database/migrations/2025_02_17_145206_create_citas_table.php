<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paciente_id');  // Relación con el paciente
            $table->unsignedBigInteger('medico_id');    // Relación con el médico
            $table->unsignedBigInteger('sala_id');      // Relación con la sala
            $table->dateTime('fecha_hora');              // Fecha y hora de la cita
            $table->string('estado');                    // Estado de la cita (pendiente, confirmada, etc.)
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('medico_id')->references('id')->on('medicos')->onDelete('cascade');
            $table->foreign('sala_id')->references('id')->on('salas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
