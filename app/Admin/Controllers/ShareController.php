<?php

namespace App\Admin\Controllers;
use Illuminate\Support\Str;
use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ShareController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '分享';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article);
        $grid->column('id','序号');
        $grid->column('title','标题');
        $grid->column('content','内容')->display(function ($text){
            return Str::limit($text, 30, '...');
        });
        $grid->column('images','图片')->image('http://www.blog.php/uploads/',200);
        $grid->column('video','视频路径');
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
        $show = new Show(Article::findOrFail($id));



        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Article);
        $form->text('user_id', '作者')->required();
        $form->text('title', '标题')->required();
        $form->textarea('content', '内容')->required();
        $form->image('images','图片')->move('/images');
        $form->file('video','视频')->move('/video');

        return $form;
    }
}
