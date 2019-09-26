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

        $grid->column('account','账号');
        $grid->column('password','密码');
        $grid->column('nick_name','昵称');
        $grid->column('name','使用者');
        $grid->column('avatar','头像')->image('http://www.blog.php/uploads/',100);

        // 默认为每页20条
        $grid->paginate(10);

        //去掉查看按钮
        $grid->actions(function (Grid\Displayers\Actions $actions) {
            $actions->disableView();

        });

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
        $form->text('name', '使用者')->required();
        $form->text('account', '账号')->required();
        $form->password('password', '密码')->required();
        $form->text('nick_name', '昵称')->required();
        $form->image('avatar')->move('/avatar');

        $form->tools(function (Form\Tools $tools) {

            // 去掉`查看`按钮
            $tools->disableView();
        });

        return $form;
    }

}
