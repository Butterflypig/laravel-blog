<?php

namespace App\Admin\Controllers;

use App\Models\WorkExperiences;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ResumeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '履历';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WorkExperiences);
        $grid->column('user_id','姓名');
        $grid->column('company','公司');
        $grid->column('status','状态')->display(function ($value){
               return $value == 1 ? '离职': '在职';
        });
        $grid->column('entry_time','入职时间');
        $grid->column('separation_time','离职时间');

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
        $show = new Show(WorkExperiences::findOrFail($id));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new WorkExperiences);
        $form->select('user_id', '姓名')->options([1=>'李静'])->required();
        $form->text('company', '公司');
        $form->select('status', '状态')->options([0=>'在职',1=>'离职'])->required();
        $form->date('entry_time', '入职时间');
        $form->date('separation_time', '离职时间');


        return $form;
    }
}
