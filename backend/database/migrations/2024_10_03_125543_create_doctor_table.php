<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(table: 'doctor', callback: function (Blueprint $table): void {
            $table->timestamps();
            $table->id(column: "id_doctor");
            $table->string(column: 'nombre_doctor',length: 20);
            $table->string(column: 'apellido_paterno',length: 20);
            $table->string(column: 'apellido_materno',length: 20);
            $table->string(column: 'codigo;',length: 10)->unique();
            $table->string(column: 'especialidad', length: 35);
            $table->string(column: 'direccion', length: 100);
            $table->integer(column: 'canet_identidad', autoIncrement: 8);
            $table->string(column: 'estado', length: 8);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor');
    }
}
