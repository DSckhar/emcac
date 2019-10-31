<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo', 30);
            $table->text('descricao');
            $table->date('dInicio');
            $table->time('hInicio');
            $table->date('dTermino');
            $table->time('hTermino');
            $table->string('arquivo')->nullable();
            $table->unsignedBigInteger('idTipoPublicacao');
            $table->foreign('idTipoPublicacao')->references('id')->on('tipo_publicacoes')->onDelete('cascade'); 
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
        Schema::dropIfExists('publicacoes');
    }
}
