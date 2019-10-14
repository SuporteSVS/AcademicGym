<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->bigIncrements('id_Pagamento');
            $table->bigInteger('aluno_Matricula')->unsigned();
            $table->foreign('aluno_Matricula')->
                    references('Matricula')->
                    on('alunos')->
                    onDelete('cascade');
            $table->string('Tipo')->nullable();
            $table->string('DataPag')->nullable();
            $table->string('DataVenc');
            $table->double('Valor', 8,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamentos');
    }
}
