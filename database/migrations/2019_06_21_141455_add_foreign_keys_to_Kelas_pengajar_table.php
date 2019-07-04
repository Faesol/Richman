<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKelasPengajarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Kelas_pengajar', function(Blueprint $table)
		{
			$table->foreign('id_user', 'UserTo_KelasPengajar')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Kelas_pengajar', function(Blueprint $table)
		{
			$table->dropForeign('UserTo_KelasPengajar');
		});
	}

}
