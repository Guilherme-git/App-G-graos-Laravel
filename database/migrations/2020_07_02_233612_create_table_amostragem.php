<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAmostragem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('amostragem', function (Blueprint $table) {
            $table->increments('id_amos');
            $table->date('data');
            $table->string('estado');
            $table->string('pesoAmostragem');
            $table->string('placaCaminhaoAmostragem');
            $table->string('responsavelColeta');
            $table->string('requerente');
            $table->string('tipoGrao');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amostragem');
    }
}
