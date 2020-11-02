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
            $table->string('laudo_pqa')->nullable();
            $table->string('laudo_qi')->nullable();
            $table->string('laudo_qu')->nullable();
            $table->string('laudo_impurezasRemovidas')->nullable();
            $table->string('laudo_produto_inicial')->nullable();
            $table->string('laudo_produto_limpo')->nullable();
            $table->string('laudo_agua_removida')->nullable();
            $table->string('laudo_total_desconto')->nullable();
            $table->string('laudo_produto_armazenado')->nullable();

            $table->string('graoDuro')->nullable();
            $table->string('graoDentado')->nullable();
            $table->string('graoSemiduro')->nullable();
            $table->string('graoAmarelo')->nullable();
            $table->string('graoBranco')->nullable();
            $table->string('graoCores')->nullable();
            $table->string('insetosMortos')->nullable();
            $table->string('atacadosInsetos')->nullable();

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
