<?php

namespace App\Admin\Controllers;

use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Zt;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use function foo\func;
use League\Flysystem\Config;

class BooksController extends Controller
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
            ->header('小说库')
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
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
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
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Book);

        $grid->id('Id');
        $grid->book_name('小说名称');
        $grid->author('作者');
        $grid->protagonist('主角');
        $grid->type_id('类型');
//        $grid->description('简介');
        $grid->status('小说状态')->display(function ($released) {
            return $released ? '完结' : '连载中';
        });
        $grid->tags('小说标签');
//        $grid->try_read('试读');
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
        $show = new Show(Book::findOrFail($id));

        $show->id('Id');
        $show->book_name('Book name');
        $show->author('Author');
        $show->type_id('Type id');
        $show->description('Description');
        $show->status('Status');
        $show->tags('Tags');
        $show->try_read('Try read');
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
        $form = new Form(new Book);




        $form->text('book_name', '小说名称');
        $form->text('author', '作者');
        $form->text('protagonist', '主角');
        $form->select('type_id','小说类型')->options(function (){
            $type = Type::select('id','name')->get();
            $list = [];
            foreach ($type as $value){
                $list[$value->id] = $value->name;
            }
            return $list;
        });
        $form->textarea('description', '简介');
        $states = [
            'on'  => ['value' => 1, 'text' => '完结', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => '连载中', 'color' => 'danger'],
        ];
        $form->switch('status', '连载状态')->states($states);
//        $form->textarea('tags', 'Tags');
        $form->textarea('tags', '专题标签')->value(function (){
            $ids = Zt::pluck('id')->all();
            if(count($ids)>=4){
                $ids =  collect($ids)->random(4);
            }
            return json_encode($ids->toArray());
        });
        $form->textarea('try_read', '试读章节');
        $form->text('re_user', '点评人')->value(function(){

            $name = collect(config('name.name'))->random(1);
            return $name->toArray()[0];
        });
        $form->textarea('review', '点评');
        $form->text('re_user_img', '点评人头像')->value(function(){
            $img = collect(config('name.img'))->random(1);
            return $img->toArray()[0];
        });

        return $form;
    }



}
