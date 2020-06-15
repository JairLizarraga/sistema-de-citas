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
            $table->timestamps(); // Crea created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo_atencion');
    }
}
