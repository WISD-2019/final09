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
            $table->longText('photo_url');/**電影宣傳照網址*/
            $table->longText('introduction');/**電影介紹*/
            $table->Text('director');/**導演*/
            $table->longText('actor');/**演員*/
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
