<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTopikPengajarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('topik_pengajar', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul_topik', 50)->nullable();
			$table->text('file_video', 65535)->nullable();
			$table->text('deskripsi', 65535)->nullable();
			$table->text('file_lampiran', 65535)->nullable();
			$table->integer('id_user')->unsigned()->nullable()->index('id_user');
			$table->integer('id_kelas')->unsigned()->nullable()->index('id_kelas');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('topik_pengajar');
	}

}
