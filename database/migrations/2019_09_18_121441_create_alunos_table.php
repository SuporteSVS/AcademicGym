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
            $table->bigIncrements('Matricula');
            $table->string('Nome');
            $table->string('Identidade')->nullable();
            $table->string('CPF' );
            $table->string('CEP');
            $table->string('Rua');
            $table->string('Numero');
            $table->string('Complemento')->nullable();
            $table->string('Bairro');
            $table->string('Cidade');
            $table->string('UF', 2);
            $table->string('Biometria')->nullable();
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
        Schema::dropIfExists('alunos');
    }
}
