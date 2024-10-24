<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(table: 'consultorio', callback: function (Blueprint $table): void {
            $table->timestamps();
            $table->id(column: "id_consultorio");
            $table->string(column: 'nombre_consultorio',length: 20)->nullable();
            $table->integer(column: 'numero', autoIncrement: 20);
            $table->integer(column: 'piso',autoIncrement: 20);
            $table->string(column: 'area;',length: 50)->unique();
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
        Schema::dropIfExists('consultorio');
    }
}
