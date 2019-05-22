<?php

namespace App\Admin\Controllers;

use App\Models\Zt;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ZtsController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('专题')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('编辑专题')
            ->body($this->form()->edit($id));
    }

    public function update($id)
    {
        return $this->form()->update($id);
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('新增专题')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Zt);

        $grid->id('Id');
        $grid->name('专题名称');
        $grid->image('专题图片');
        $grid->description('专题简介');
        $grid->tags('相关标签');
        $grid->created_at('生成时间');
        $grid->updated_at('更新时间');

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
        $show = new Show(Zt::findOrFail($id));

        $show->id('Id');
        $show->name('Name');
        $show->image('Image');
        $show->description('Description');
        $show->tags('Tags');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Zt);
        //保存后回调
        $ids = Zt::pluck('id')->all();
        if(count($ids)>=3){
            $ids =  collect($ids)->random(3);
        }
        $form->text('name', '专题名称');
        $form->image('image', '专题图片');
        $form->textarea('description', '专题简介');
        $form->textarea('tags')->value(json_encode($ids->toArray()));
        return $form;
    }


}
