<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('pis')->nullable();
            $table->string('ctps')->nullable();
            $table->string('titulo')->nullable();
            $table->string('rua');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->enum ('bairro', ['ALTO URUGUAI','BANCO DE AREIA','BNH','CENTRO','CHATUBA','COREIA','COSMORAMA','EDSON PASSOS','JACUTINGA','JUSCELINO','NÃO INFORMADO','ROCHA SOBRINHO','SANTA TERESINHA','SANTO ELIAS','VILA EMIL','VILA NORMA','CRUZEIRO DO SUL'
            ])->nullable(); 
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('telefone_1')->nullable();
            $table->string('telefone_2')->nullable();
            $table->string('indicacao_politica')->nullable();
            $table->string('formacao')->nullable();
            $table->string('user_id')->nullable();
            // esta text o comentarios no banco mudei para varchar 
            $table->text('comentarios')->nullable();
            $table->timestamps()->nullable();
            $table->softDeletes()->nullable();
            $table->string('nascimento_old')->nullable();
            $table->string('sexo');
            $table->integer('encaminhado')->nullable();
            $table->date('dt_encaminhado')->nullable();
            $table->date('nascimento')->nullable();
            $table->tinyInteger('pcd')->nullable();
            $table->string('tipo_deficiencia')->nullable();
            $table->enum('escolaridade',['Fundamental - Incompleto','Fundamental - Completo','Médio - Incompleto','Médio - Completo','Superior - Incompleto','Superior - Completo','Pós-graduação - Incompleto','Pós-graduação - Completo','Mestrado - Incompleto','Mestrado - Completo','Doutorado - Incompleto','Doutorado - Completo'])->nullable();
            $table->tinyInteger('estagio')->nullable();
            $table->string('curso')->nullable();
            $table->enum('periodo',['1º','2º','3º','4º','5º','6º','7º','8º','9º','10º'])->nullable();
            $table->string('curriculo')->nullable();
            $table->enum('raca',['AMARELA','BRANCA','INDÍGENA','NEGRA','PARDA','NÃO DECLARADA']);
            $table->string('email')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculos');
    }
};
