<?php

namespace App\Admin\Controllers;

use App\Models\Commodity;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CommodityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '商品管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Commodity);

        $grid->column('trade_name','商品名');
        $grid->column('commodity_introduction','商品介绍');
        $grid->column('commodity_inventory','商品库存');
        $grid->column('commodity_prices','商品价格');
        $grid->column('commodity_picture','商品图片');

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
        $show = new Show(Commodity::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Commodity);
        $form->text('trade_name', '商品名');
        $form->text('commodity_introduction', '商品介绍');
        $form->number('commodity_inventory', '商品库存');
        $form->number('commodity_prices', '商品价格');
        $form->image('commodity_picture', '商品图片')->move('stocks');

        return $form;
    }
}
