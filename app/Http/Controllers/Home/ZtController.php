<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelTag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ZtController extends Controller
{
    public function index(){
        $tags = NovelTag::get();
        return view('home.zt',compact('tags'));
    }


    public function ZtXq($id){
        $arr = explode('.',$id);
        $id =  (int)$arr[0];
        $tag = NovelTag::find($id);
        $books = new NovelBook();
        $books = $books->getAllBooks();
        $arr = [];
        foreach ($books as $k=>$book){
            if(in_array($id,json_decode($book->tag_ids))){
                $arr[$k][] = $book;
            }
        }
        $count = count($arr);
        $books = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(30)->get();

        $tags = NovelTag::inRandomOrder()->limit(3)->get();

        return view('home.zt_xq',compact('tag','count','books','tags'));
    }
}
