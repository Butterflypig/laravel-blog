<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trade_name',64)->comment('商品名');
            $table->text('commodity_introduction')->nullable()->comment('商品介绍');
            $table->string('commodity_inventory',64)->comment('商品库存');
            $table->decimal('commodity_prices')->comment('商品价格');
            $table->string('commodity_picture',64)->comment('商品图片');
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
        Schema::dropIfExists('commodities');
    }
}
