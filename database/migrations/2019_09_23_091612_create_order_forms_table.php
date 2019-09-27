<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('address_id')->comment('客户地址id');
            $table->tinyInteger('examine')->default(0)->comment('审核状态：1 确认订单 / 2 拒绝订单 / 0 未审核');
            $table->unsignedBigInteger('courier_number')->nullable()->comment('快递单号');
            $table->unsignedBigInteger('','')->comment('商品表id');


            $table->tinyInteger('status')->default(0)->comment('订单状态：0未完成/1已完成');

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
        Schema::dropIfExists('order_forms');
    }
}
