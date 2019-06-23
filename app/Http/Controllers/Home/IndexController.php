<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use App\Services\CreateTDK;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {

        //banner
        $banners = config('name.banner_img');
        $banner_books = NovelBook::where(['is_up'=>1])->orderBy('id','desc')->limit(5)->get();

        foreach ($banner_books as $k=>$banner_book){
            $banner_books[$k]['banners'] = $banners[$k];
        }

        $types = NovelType::all();

        $tj_chapter =  NovelChapter::where(['is_up'=>1])->where(['is_pay'=>0])->where(['goId'=>'0'])->with(['book'])->orderBy('updated_at','desc')->limit(70)->get();

        $tj_chapter = $tj_chapter->random(3);

        $tj_chapter = CreateTDK::getTitle($tj_chapter);

        $tj_chapter = CreateTDK::getDescription($tj_chapter);

//        dd($tj_chapter->toArray());
        //推荐小说
        $tj_firsts = NovelBook::where(['is_up'=>1])->orderBy('id','desc')->limit(3)->get();

        $tj_books = NovelBook::where(['is_up'=>1])->with(['type'])->inRandomOrder()->limit(6)->get();
        //热门小说
        $rm_firsts = NovelBook::where(['is_up'=>1])->limit(3)->get();
        $rm_books = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(6)->get();
        //最新小说
//        $types
        $alls = NovelBook::where(['is_up'=>1])->orderBy('id','desc')->limit(16)->get();


        $news = NovelType::limit(10)->get();

        foreach ($news as $k=>$type){
            $news[$k]->books = NovelBook::where(['is_up'=>1])->where(['type_id'=>$type->id])->orderBy('id','desc')->limit(16)->get();

        }

//        dd($news->toArray());

        //推荐榜
        $tjbs = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(10)->get();
        //人气榜
        $rqbs = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(10)->get();
        //女生榜
        $girls = NovelBook::where(['is_up'=>1])->where(['channel_id'=>2])->limit(10)->get();
        //男生榜
        $boys = NovelBook::where(['is_up'=>1])->where(['channel_id'=>1])->limit(10)->get();


        //小说资讯
        $chapters = NovelChapter::where(['is_up'=>1])->where(['is_pay'=>0])->where(['goId'=>0])->orderBy('updated_at','desc')->limit(70)->get();
        $chapters = $chapters->random(10);
//        dd($tj_chapter);
        $chapters = CreateTDK::getTitle($chapters);

        //热门专题
        $tags = NovelTag::inRandomOrder()->limit(20)->get();


        $links = $this->link();


        return view('home.index',compact('banner_books','types','tj_chapter','tj_books','rm_books','news','tjbs','rqbs','girls','boys','chapters','tags','tj_firsts','rm_firsts','alls','links'));
    }


    public function link(){
        $links = config('name.links');
        return $links;
    }


    public function Search(Request $request){
        $search = $request->q??'';

        $books = NovelBook::where(['is_up'=>1])->where('name','like','%'.$search.'%')->with(['type'])->limit(30)->get();

        if(!count($books)){
            $rands = NovelBook::where(['is_up'=>1])->inRandomOrder()->with(['type'])->limit(16)->get();
        }

        return view('home.search',compact('books','search','rands'));
    }
}
