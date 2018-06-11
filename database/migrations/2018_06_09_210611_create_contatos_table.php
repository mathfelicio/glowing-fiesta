<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateContatosTable.
 */
class CreateContatosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contatos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->date('data_nascimento');
            $table->string('foto')->nullable();

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
		Schema::drop('contatos');
	}
}
