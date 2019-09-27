<?php

namespace App\Admin\Controllers;

use App\Models\OrderForm;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrderController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '订单';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new OrderForm);

        $grid->column('user_id','买家');
        $grid->column('status','状态');
        $grid->column('courier_number','快递单号');
        $grid->column('address','收货地址');
        $grid->column('commodity_details','详情');



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
        $show = new Show(OrderForm::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new OrderForm);

        $form->text('user_id','用户');
        $form->text('status','状态');
        $form->text('address','地址');


        return $form;
    }
}
