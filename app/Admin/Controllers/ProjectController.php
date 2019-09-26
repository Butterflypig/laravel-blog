<?php

namespace App\Admin\Controllers;

use App\Models\ProjectExperiences;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '项目经验';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectExperiences);
        $grid->column('company_id','公司');
        $grid->column('project_name','项目名称');
        $grid->column('project_introduction','项目简介');
        $grid->column('details_introduction','详细介绍');
        $grid->column('project_skills','项目技术');
        $grid->column('start_time','开始时间');
        $grid->column('end_time','结束时间');



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
        $show = new Show(ProjectExperiences::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectExperiences);
        $form->text('company_id', '公司')->required();
        $form->text('project_name', '项目名称');
        $form->text('project_introduction', '项目简介');
        $form->text('details_introduction', '详细介绍');
        $form->text('project_skills', '项目技术');
        $form->text('start_time', '开始时间');
        $form->text('end_time', '结束时间');


        return $form;
    }
}
