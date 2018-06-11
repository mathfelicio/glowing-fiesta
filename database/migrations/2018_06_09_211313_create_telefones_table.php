<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTelefonesTable.
 */
class CreateTelefonesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telefones', function(Blueprint $table) {
            $table->increments('id');
            $table->enum('tipo_telefone', ['fixo', 'celular']);
            $table->string('numero');
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
		Schema::drop('telefones');
	}
}
