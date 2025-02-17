<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Nombre completo del usuario
            $table->string('email')->unique();  // Correo electrónico único
            $table->string('password');  // Contraseña para el login
            $table->string('role');  // Rol del usuario (admin, doctor, paciente)
            $table->string('telefono')->nullable();  // Teléfono (opcional, útil para pacientes y médicos)
            $table->rememberToken();  // Para mantener la sesión
            $table->timestamps();  // Tiempos de creación y actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
