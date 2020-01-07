<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');/**預約編號*/
            $table->timestamps();/**時間戳記*/
            $table->integer('sheets');/**訂購張數*/
            $table->string('movie_name');/**外來鍵 電影編號*/
            $table->time('section_start_time');/**外來鍵 場次編號*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
