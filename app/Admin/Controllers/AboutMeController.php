<?php

namespace App\Admin\Controllers;

use App\Models\AboutMe;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AboutMeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '关于';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AboutMe);
        $grid->column('name');
        $grid->column('sex');
        $grid->column('birthday');
        $grid->column('mobile');
        $grid->column('job');
        $grid->column('QQ');
        $grid->column('weChat');
        $grid->column('email');

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
        $show = new Show(AboutMe::findOrFail($id));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AboutMe);

        // 显示记录id
        $form->display('id', 'ID');

        // 添加text类型的input框
        $form->text('name', '姓名')->required();
        $form->radio('sex', '性别')->options(['0' => '女', '1'=> '男'])->default('1');
        $form->date('birthday', '生日');
        $form->mobile('mobile', '手机');
        $form->text('job', '工作');
        $form->text('position', '职位');
        $form->text('QQ', 'QQ号');
        $form->text('weChat', '微信号');
        $form->email('email', '邮箱');
        $form->keyValue('company', '履历');
        $form->list('skills','技能');
        $form->keyValue('skills','教育经历');
        $form->keyValue('skills','项目经验');

        return $form;
    }
}
