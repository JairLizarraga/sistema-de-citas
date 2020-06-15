<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuloAtencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_atencion', function (Blueprint $table) {
            $table->increments('modulo_id');
            $table->string('modulo_nombre');
            $table->string('modulo_direccion')->nullable();
            $table->string('modulo_telefono')->nullable();
            $table->string('modulo_email')->nullable();
            $table->timestamps();
        });

        
        Schema::create('tramite', function (Blueprint $table) {
            $table->increments('tramite_id');
            $table->string('tramite_nombre');
            $table->string('tramite_requisitos')->nullable();
            $table->timestamps();
        });

        
        Schema::create('ciudadano', function (Blueprint $table) {
            $table->increments('ciudadano_id');
            $table->string('ciudadano_curp', 18);
            $table->string('ciudadano_email');
            $table->timestamps();
        });
        
        
        Schema::create('calendario', function (Blueprint $table) {
            $table->increments('calendario_id');
            $table->dateTime('calendario_fecha');
            $table->timestamps();
        });

        Schema::create('cita', function (Blueprint $table) {
            $table->increments('cita_id');
            $table->unsignedInteger('ciudadano_id');
            $table->foreign('ciudadano_id')->references('ciudadano_id')->on('ciudadano')->onDelete('cascade');
            $table->unsignedInteger('tramite_id');
            $table->foreign('tramite_id')->references('tramite_id')->on('tramite')->onDelete('cascade');
            $table->unsignedInteger('modulo_id');
            $table->foreign('modulo_id')->references('modulo_id')->on('modulo_atencion')->onDelete('cascade');
            $table->unsignedInteger('calendario_id');
            $table->foreign('calendario_id')->references('calendario_id')->on('calendario');
            $table->dateTime('cita_fecha');
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
        Schema::dropIfExists('cita');
        Schema::dropIfExists('modulo_atencion');
        Schema::dropIfExists('tramite');
        Schema::dropIfExists('ciudadano');
        Schema::dropIfExists('calendario');
    }
}
