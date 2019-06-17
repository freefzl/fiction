<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use App\Services\CreateTDK;
use App\Services\UpdateBooks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{



    public function index()
    {
        $books = NovelBook::where(['is_delete'=>0])->inRandomOrder()->limit(30)->get();

        $types = NovelType::all();
        $books->typename = '';
        return view('home.book',compact('books','types'));
    }


    public function xq($id)
    {


        $arr = explode('.',$id);
        $id =  (int)$arr[0];

        $book = NovelBook::where(['id'=>$id])->with(['type','comment'])->first();
        dd($book);
        if($book==null||$book->try_id==0){
            return abort(404);
        }
        $try_ids = json_decode($book->try_id);
        $try_chapters=[];

        foreach ($try_ids as $try_id){
            $try_chapters[] = NovelChapter::where(['id'=>$try_id])->first();
        }




        $tags = NovelTag::select('id','tagname')->whereIn('id',json_decode($book->tag_ids))->get();

        $chapter = NovelChapter::where(['bid'=>$id])->where(['is_pay'=>0])->where(['goId'=>0])->limit(100)->get();
        $chapter = $chapter->random(6);
        $chapter = CreateTDK::getTitle($chapter);
        $cnxh = $this->cnxh();
        $rmzt = $this->rmzt();
        $tjxs = $this->tjxs();
        return view('home.book_xq',compact('book','tags','cnxh','rmzt','tjxs','chapter','try_chapters'));
    }

    public function huanxiangyinen()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>2])->inRandomOrder()->limit(30)->get();
        $type = NovelType::where(['id'=>2])->first();
        $books->typename = $type->typename;

        $types = NovelType::all();

        return view('home.book',compact('books','types'));
    }

    public function dushizhichang()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>4])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>4])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function xuanhuanqihuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>6])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>6])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function gudaiyanqing()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>7])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>7])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function wuxiaxianxia()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>8])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>8])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function lishijunshi()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>9])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>9])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function lingyikehuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>10])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>10])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function youxijingji()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>11])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        return view('home.book',compact('books','types'));
    }

    public function xiandaiyanqing()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>3])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>3])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }


    public function chuanyuezhongsheng()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>12])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>12])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function zongcaihaomen()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>5])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>5])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function qingchunxiaoyuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>20])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>20])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }

    public function duanpianxiaoshuo()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>22])->inRandomOrder()->limit(30)->get();
        $types = NovelType::all();
        $type = NovelType::where(['id'=>22])->first();
        $books->typename = $type->typename;
        return view('home.book',compact('books','types'));
    }


    public function booksehlf(Request $request)
    {
        $data['data'] =  NovelBook::whereIn('id',$request->book_id)->get()->toArray();
        $data['state'] = 'success';
        return json_encode($data);
    }



    public function cnxh(){
        $data['tags'] = NovelTag::orderBy('id','desc')->limit(4)->get();
        foreach ($data['tags'] as $k=>$tag){
            $data['tags'][$k]['books'] = NovelBook::where(['is_delete'=>0])->with('type')->inRandomOrder()->limit(6)->get();
        }
       return $data;
    }

    public function rmzt(){
        return NovelTag::inRandomOrder()->limit(3)->get();
    }

    public function tjxs(){
        return NovelBook::inRandomOrder()->limit(5)->get();
    }


}
