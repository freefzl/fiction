<?php

namespace App\Http\Controllers\Mobile;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use App\Services\CreateTDK;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{


    public function index()
    {
        $books = NovelBook::where(['is_delete'=>0])->with(['type'])->paginate(30)->toArray();
//        dump($books);
        $types = NovelType::all();

        return view('mobile.book',compact('books','types'));
    }


    public function xq($id)
    {


        $arr = explode('.',$id);
        $id =  (int)$arr[0];
        $book = NovelBook::where(['id'=>$id])->with(['try','type','comment'])->first();

        if($book==null){
            return abort(404);
        }
        $tags = NovelTag::select('id','tagname')->whereIn('id',json_decode($book->tag_ids))->get();

        $articles = $this->xgnrtj($id);
        $cnxh = $this->cnxh();
        $zxlxtj = $this->zxlxtj($book->type[0]->id);

        return view('mobile.book_xq',compact('book','tags','articles','cnxh','zxlxtj'));
    }

    public function huanxiangyinen()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>2])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();

        return view('mobile.book',compact('books','types'));
    }

    public function dushizhichang()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>4])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function xuanhuanqihuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>6])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function gudaiyanqing()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>7])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function wuxiaxianxia()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>8])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function lishijunshi()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>9])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function lingyikehuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>10])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function youxijingji()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>11])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function xiandaiyanqing()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>3])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }


    public function chuanyuezhongsheng()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>12])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function zongcaihaomen()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>5])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function qingchunxiaoyuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>20])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }

    public function duanpianxiaoshuo()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>22])->with(['type'])->paginate(30)->toArray();
        $types = NovelType::all();
        return view('mobile.book',compact('books','types'));
    }


    public function booksehlf(Request $request)
    {
        $data['data'] =  NovelBook::whereIn('id',$request->book_id)->get()->toArray();
        $data['state'] = 'success';
        return json_encode($data);
    }


    public function cnxh(){
        $data['tags'] = NovelTag::inRandomOrder()->limit(4)->get();
        foreach ($data['tags'] as $k=>$tag){
            $data['tags'][$k]['books'] = NovelBook::where(['is_delete'=>0])->with('type')->inRandomOrder()->limit(8)->get();
        }
        return $data;
    }


    public function xgnrtj($id){
        $chapters = NovelChapter::where(['bid'=>$id])->where(['goId'=>'0'])->where(['is_pay'=>0])->with(['book'=>function($query){
            $query->with(['type'])->get();
        }])->inRandomOrder()->limit(5)->get();
        $articles = CreateTDK::getTitle($chapters);
        $articles = CreateTDK::getDescription($articles);
        return $articles;
    }


    public function zxlxtj($id)
    {
        $type = NovelType::where(['id'=>$id])->first();

        $books = NovelBook::where(['type_id'=>$id])->inRandomOrder()->limit(6)->get();

        $books->typeName = $type->typename;

        return $books;
    }
}
