<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelTag;
use App\Services\UpdateBooks;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    public function index()
    {
        $books = NovelBook::where(['is_delete'=>0])->limit(30)->get();

        return view('home.book',compact('books'));
    }


    public function xq($id)
    {

        $arr = explode('.',$id);
        $id =  (int)$arr[0];
        $book = NovelBook::where(['id'=>$id])->with(['try','type','comment'])->first();

        $tags = NovelTag::select('id','tagname')->whereIn('id',json_decode($book->tag_ids))->get();

        $cnxh = $this->cnxh();
        $rmzt = $this->rmzt();
        $tjxs = $this->tjxs();
        return view('home.book_xq',compact('book','tags','cnxh','rmzt','tjxs'));
    }

    public function huanxiangyinen()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>2])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function dushizhichang()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>4])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function xuanhuanqihuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>6])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function gudaiyanqing()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>7])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function wuxiaxianxia()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>8])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function lishijunshi()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>9])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function lingyikehuan()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>10])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function youxijingji()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>11])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function xiandaiyanqing()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>3])->limit(30)->get();

        return view('home.book',compact('books'));
    }


    public function chuanyuezhongsheng()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>12])->limit(30)->get();

        return view('home.book',compact('books'));
    }

    public function zongcaihaomen()
    {
        $books = NovelBook::where(['is_delete'=>0])->where(['type_id'=>5])->limit(30)->get();

        return view('home.book',compact('books'));
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