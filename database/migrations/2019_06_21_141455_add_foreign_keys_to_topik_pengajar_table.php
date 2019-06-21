<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTopikPengajarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('topik_pengajar', function(Blueprint $table)
		{
			$table->foreign('id_user', 'topik_pengajar_ibfk_1')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_kelas', 'topik_pengajar_ibfk_2')->references('id')->on('Kelas_pengajar')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('topik_pengajar', function(Blueprint $table)
		{
			$table->dropForeign('topik_pengajar_ibfk_1');
			$table->dropForeign('topik_pengajar_ibfk_2');
		});
	}

}
