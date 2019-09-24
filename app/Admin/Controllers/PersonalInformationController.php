<?php

namespace App\Admin\Controllers;

use App\Models\PersonalInformation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use function foo\func;

class PersonalInformationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '账号管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PersonalInformation);

        $grid->column('name','姓名');

        //性别转换
        $sex = [
            'off'  => ['value' => 0, 'text' => '女', 'color' => 'primary'],
            'on' => ['value' => 1, 'text' => '男', 'color' => 'primary'],
        ];
        $grid->column('sex','性别')->switch($sex);

        $grid->column('account','账号');
        $grid->column('nick_name','昵称');
        $grid->column('avatar','图片')->image('http://www.blog.php/uploads/',100);
        $grid->column('birthday','生日');
        $grid->column('mobile','手机号');
        $grid->column('job','职业');
        $grid->column('QQ','QQ号');
        $grid->column('weChat','微信号');
        $grid->column('email','邮箱');
//        $grid->column('skills','技能')->display(function( $lable ) {
//            if ( is_array($lable) ){
//                $list = '';
//                foreach ( $lable as $key => $value ){
//                    return $list .= $value;
//                }
//            }
//        });
//        $grid->column('evaluation_content','教育经历')->display(function( $lable ) {
//            if ( is_array($lable) ){
//                foreach ( $lable as $key => $value ){
//                    return $value;
//                    //return  "学校：". $value['school'];
//                }
//            }
//        });

        // 默认为每页20条
        $grid->paginate(10);

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        //dd($id);
        $show = new Show(PersonalInformation::findOrFail($id));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PersonalInformation);
        // 显示记录id
        $form->display('id', 'ID');

        // 添加text类型的input框
        $form->text('account', '账号')->required();
        $form->password('password', '密码')->required();
        $form->text('nick_name', '昵称')->required();
        $form->image('avatar')->move('/avatar');

        $form->text('name', '姓名')->required();
        $form->radio('sex', '性别')->options(['0' => '女', '1'=> '男'])->default('1');
        $form->date('birthday', '生日');
        $form->mobile('mobile', '手机');
        $form->text('job', '职业');
        $form->text('QQ', 'QQ号');
        $form->text('weChat', '微信号');
        $form->email('email', '邮箱');
        $form->list('skills','技能');
        $form->keyValue('evaluation_content','教育经历')->required();
        $form->tools(function (Form\Tools $tools) {

            // 去掉`查看`按钮
            $tools->disableView();

        });
        return $form;
    }

}
