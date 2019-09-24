<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_mes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',64)->comment('姓名');
            $table->tinyInteger('sex')->default(1)->comment('性别');
            $table->date('birthday')->nullable()->comment('生日');
            $table->char('mobile', 11)->nullable()->comment('手机号');
            $table->string('job',64)->nullable()->comment('职业');
            $table->string('QQ',11)->nullable()->comment('QQ号');
            $table->string('weChat',64)->nullable()->comment('微信号');
            $table->string('email',32)->nullable()->comment('邮箱');
            $table->json('skills')->nullable()->comment('技能');
            $table->json('company')->nullable()->comment('履历');
            $table->json('evaluation_content')->nullable()->comment('教育经历');
            $table->json('project_experience')->nullable()->comment('项目经验');
            $table->string('position',64)->nullable()->comment('职位');

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
        Schema::dropIfExists('about_mes');
    }
}
