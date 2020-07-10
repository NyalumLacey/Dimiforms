<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formularios', function (Blueprint $table) {
            $table->create();
            $table->increments('IDFormulario');
            $table->string('Titulo');
            $table->string('Programa');
            $table->string('IDcreador');
            $table->timestamp('FechaPublicacion');
            $table->string('IDSeccion');
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
        Schema::dropIfExists('formularios');
    }
}
