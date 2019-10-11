<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmaAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turma_alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('idAluno');
            $table->foreign('idAluno')->references('id')->on('alunos')->onDelete('cascade');
            $table->unsignedBigInteger('idTurma');
            $table->foreign('idTurma')->references('id')->on('turmas')->onDelete('cascade');
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
        Schema::dropIfExists('turma_alunos');
    }
}
