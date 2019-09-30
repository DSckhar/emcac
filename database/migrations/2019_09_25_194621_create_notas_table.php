<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('boletim', 255);
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
        Schema::dropIfExists('notas');
    }
}
