<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_activation', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('token');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_activated')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_activation');
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('is_activated');
      });
    }
}
