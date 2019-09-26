<?php

namespace App\Admin\Controllers;

use App\Models\ReceivingAddress;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AddressController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '收获地址';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ReceivingAddress);
        $grid->column('user_id','账号');
        $grid->column('name','收件人');
        $grid->column('phone','联系电话');
        $grid->column('address','收获地址');

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
        $show = new Show(ReceivingAddress::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ReceivingAddress);
        $form->text('user_id', '账号')->required();
        $form->text('name', '收件人');
        $form->mobile('phone', '联系方式');
        $form->text('address', '地址');


        return $form;
    }
}
