<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TelefoneContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telefone_contatos', function(Blueprint $table) {
            $table->integer('telefone_id');
            $table->integer('contato_id');

            $table->foreign('telefone_id')
                ->references('id')->on('telefones');

            $table->foreign('contato_id')
                ->references('id')->on('contatos');

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
        Schema::drop('telefone_contatos');
    }
}
