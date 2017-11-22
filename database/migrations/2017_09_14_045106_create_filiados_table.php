<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiados', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cpf',11);
            $table->string('nome', 100)->nullable()->default(null);
            $table->string('matricula', 50)->nullable()->default(null);
            $table->string('filiacao', 100)->nullable()->default(null);
            $table->date('dt_nascimento')->nullable()->default(null);
            $table->string('rg')->nullable()->default(null);
            $table->string('rg_uf', 45)->nullable()->default(null);
            $table->string('endereco', 191)->nullable()->default(null);
            $table->string('cep', 10)->nullable()->default(null);
            $table->string('cidade', 50)->nullable()->default(null);
            $table->string('uf', 2)->nullable()->default(null);
            $table->string('tel_celular', 45)->nullable()->default(null);
            $table->string('tel_fixo', 45)->nullable()->default(null);
            $table->string('lotacao', 45)->nullable()->default(null);
            $table->string('setor', 45)->nullable()->default(null);
            $table->string('tp_cargo')->nullable()->default(null);
            $table->string('email', 50)->nullable()->default(null)->nullable()->default(null);
            $table->integer('acao_judicial')->comment('0 - NAO 1 - SIM')->nullable()->default(null);
            $table->integer('status')->comment('0 - Desfiliado 1 - Filiado')->nullable()->default(null);
            $table->date('dt_filiacao')->nullable()->default(null);
            $table->dateTime('updated_at')->nullable()->default(null);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('filiados');
    }
}
