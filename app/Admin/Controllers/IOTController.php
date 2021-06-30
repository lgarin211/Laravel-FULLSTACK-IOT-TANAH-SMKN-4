<?php

namespace App\Admin\Controllers;

use App\sampel_IOT;
use Encore\Admin\Form;
use Encore\Admin\Http\Controllers\AdminController;
use Encore\Admin\Show;
use Encore\Admin\Table;

class IOTController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'sampel_IOT';

    /**
     * Make a table builder.
     *
     * @return Table
     */
    protected function table()
    {
        $table = new Table(new sampel_IOT());

        $table->column('id', __('Id'));
        $table->column('data_soil', __('Data soil'));
        $table->column('created_at', __('Created at'));
        $table->column('updated_at', __('Updated at'));

        return $table;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(sampel_IOT::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('data_soil', __('Data soil'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new sampel_IOT());

        $form->number('data_soil', __('Data soil'));

        return $form;
    }
}
