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
            $table->date('data_amos');
            $table->string('placa_caminhao_amos');
            $table->string('peso_amos');
            $table->string('estado_amos');
            $table->string('tipo_grao');
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
