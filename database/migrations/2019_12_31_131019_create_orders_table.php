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
            $table->boolean('is_payed');/**是否付款*/
            $table->boolean('is_canceled');/**是否取消*/
            $table->integer('total');/**總金額*/
            $table->integer('payed_money');/**已付金額*/
            $table->date('canceled_date');/**取消日期時間*/
            $table->dateTime('checkin_time');/**取票時間*/
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
