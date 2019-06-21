<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKelasPengajarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Kelas_pengajar', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_kelas', 225)->nullable();
			$table->float('harga_kelas', 10, 0)->nullable();
			$table->float('diskon_harga', 10, 0)->nullable();
			$table->string('kategori_kelas', 11)->nullable();
			$table->text('file_foto', 65535)->nullable();
			$table->text('file_video', 65535)->nullable();
			$table->text('diskripsi', 65535)->nullable();
			$table->integer('id_user')->unsigned()->nullable()->index('UserTo_KelasPengajar');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Kelas_pengajar');
	}

}
