<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paciente', function (Blueprint $table) {
            $table->id("id_paciente");
            $table->string(column: 'nombre_paciente',length: 20);
            $table->string(column: 'apellido_paterno',length: 20);
            $table->string(column: 'apellido_materno',length: 20);
            $table->string(column: 'correo_electronico_personal;',length: 50)->unique();
            $table->string(column: 'correo_institucional', length: 50);
            $table->string(column: 'direccion', length: 100);
            $table->string(column: 'tipo_paciente', length: 20);
            $table->integer(column: 'telefono', autoIncrement: 8);
            $table->integer(column: 'canet_identidad', autoIncrement: 8);
            $table->string(column: 'estado', length: 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
