<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha', function (Blueprint $table) {
            $table->timestamps();
            $table->id(column: "id_ficha");
            $table->dateTime(column: 'hora')->nullable();
            $table->date(column: 'fecha')->nullable();
            $table->string(column: 'estudio', length: 30);
            $table->foreignId(column: "id_paciente")->constrained("paciente", "id_paciente");
            $table->foreignId(column: "id_doctor")->constrained("doctor", "id_doctor");
            $table->foreignId(column: "id_consultorio")->constrained("consultorio", "id_consultorio");
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
        Schema::dropIfExists('ficha');
    }
}
