<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClassificacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classificacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pesoAmostra')->nullable();
            $table->string('umidade')->nullable();
            $table->string('impureza')->nullable();
            $table->string('esverdeados')->nullable();
            $table->string('partidosQuebradosAmassados')->nullable();
            $table->string('totalavariados')->nullable();
            $table->string('quantidadeGraosInicial')->nullable();
            $table->string('quantidadeGraosDescontado')->nullable();
            $table->string('quantidadeGraosFinal')->nullable();
            $table->date('dataAtual')->nullable();
            $table->string('queimado')->nullable();
            $table->string('mofado')->nullable();
            $table->string('germinado')->nullable();
            $table->string('fermentado')->nullable();
            $table->string('ardido')->nullable();
            $table->string('danificado')->nullable();
            $table->string('imaturo')->nullable();
            $table->string('choco')->nullable();
            $table->string('gessados')->nullable();
            $table->string('carunchados')->nullable();
            $table->string('brotados')->nullable();
            $table->string('fragmentados')->nullable();
            $table->string('resultTipo')->nullable();
            $table->string('resultGrupo')->nullable();
            $table->string('resultClasse')->nullable();
            $table->unsignedInteger('amostragem')->nullable();
            $table->unsignedInteger('usuario')->nullable();
            $table->foreign('amostragem')->references('id_amos')->on('amostragem');
            $table->foreign('usuario')->references('id')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classificacao');
    }
}
