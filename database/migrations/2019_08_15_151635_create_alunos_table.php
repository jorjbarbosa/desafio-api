<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id_aluno');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->dateTime('data_criacao');
            $table->string('cep');
            $table->bigInteger('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
