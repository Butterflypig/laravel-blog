<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('account',64)->comment('账号');
            $table->string('password',64)->comment('密码');
            $table->string('nick_name',64)->comment('昵称');
            $table->string('avatar',64)->nullable()->comment('头像');
            $table->string('name',64)->comment('姓名');
            $table->tinyInteger('sex')->default(1)->comment('性别');
            $table->date('birthday')->nullable()->comment('生日');
            $table->char('mobile', 11)->nullable()->comment('手机号');
            $table->string('job',64)->nullable()->comment('职业');
            $table->string('QQ',11)->nullable()->comment('QQ号');
            $table->string('weChat',64)->nullable()->comment('微信号');
            $table->string('email',32)->nullable()->comment('邮箱');
            $table->json('skills')->nullable()->comment('技能');
            $table->json('evaluation_content')->nullable()->comment('教育经历');

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
        Schema::dropIfExists('personal_information');
    }
}
