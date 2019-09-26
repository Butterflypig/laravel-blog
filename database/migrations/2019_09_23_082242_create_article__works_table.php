<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->comment('作者id');
            $table->string('title',64)->comment('标题');
            $table->text('content')->comment('内容');
            $table->string('images',64)->nullable()->comment('图片');
            $table->string('video',64)->nullable()->comment('视频');
            $table->bigInteger('like')->default(0)->comment('喜欢');
            $table->string('forward',64)->nullable()->comment('转发地址');

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
        Schema::dropIfExists('article__works');
    }
}
