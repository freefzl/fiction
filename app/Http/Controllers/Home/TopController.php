<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TopController extends Controller
{
    public function index()
    {
        $types = NovelType::all();

        //推荐
        $recommend = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(10)->get();
        //完结
        $over = NovelBook::where(['is_up'=>1])->where(['status'=>1])->limit(10)->get();
        //人气
        $moods = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(10)->get();
        //更新
        $update = NovelBook::where(['is_up'=>1])->orderBy('updated_at','desc')->limit(10)->get();
        //女生
        $girl = NovelBook::where(['is_up'=>1])->where(['channel_id'=>2])->limit(10)->get();
        //男生
        $boy = NovelBook::where(['is_up'=>1])->where(['channel_id'=>1])->limit(10)->get();

        return view('home.top',compact('types','recommend','over','moods','update','girl','boy'));
    }

    public function type($name){

        $types = NovelType::all();
        switch ($name){
            case 'huanxiangyinen':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'xiandaiyanqing':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'dushizhichang':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'zongcaihaomen':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'xuanhuanqihuan':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'gudaiyanqing':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'wuxiaxianxia':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'lishijunshi':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'lingyikehuan':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'youxijingji':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'chuanyuezhongsheng':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'qingchunxiaoyuan':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            case 'duanpianxiaoshuo':
                $type = NovelType::where(['typedir'=>$name])->first();
                $books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(10)->get();
                $books->typename = $type->typename;
                $books->typedir = $type->typedir;
                break;
            default:
                $books=[];
        }

        return view('home.top_type',compact('books','types'));
    }
}
