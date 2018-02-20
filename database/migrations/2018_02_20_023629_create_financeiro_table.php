<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanceiroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('financeiro', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->decimal('valor', 10, 2);
          $table->date('dt_pagamento')->nullable()->default(null);
          $table->string('ref_mes',20)->nullable()->default(null);
          $table->string('ano_ref',4)->nullable()->default(null);
          $table->string('descricao',200)->nullable()->default(null);
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
        Schema::drop('pagamento');
    }
}
