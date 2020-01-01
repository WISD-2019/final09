<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');/**電影編號*/
            $table->string('name');/**電影名稱*/
            $table->string('introduction');/**電影介紹*/
            $table->string('director');/**導演*/
            $table->string('actor');/**演員*/
            $table->string('length');/**片長*/
            $table->date('start_date');/**上映日期*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
