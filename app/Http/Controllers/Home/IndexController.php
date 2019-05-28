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
        $banner_books = NovelBook::inRandomOrder()->limit(5)->get();
        foreach ($banner_books as $k=>$banner_book){
            $banner_books[$k]['banners'] = $banners[$k];
        }

        $types = NovelType::all();

        $tj_chapter =  NovelChapter::inRandomOrder()->limit(3)->get();
        $tj_chapter = CreateTDK::getTitle($tj_chapter);
        $tj_chapter = CreateTDK::getDescription($tj_chapter);
//        dd($tj_chapter->toArray());
        //推荐小说
        $tj_firsts = NovelBook::inRandomOrder()->limit(3)->get();
        $tj_books = NovelBook::with(['type'])->inRandomOrder()->limit(6)->get();
        //热门小说
        $rm_firsts = NovelBook::inRandomOrder()->limit(3)->get();
        $rm_books = NovelBook::inRandomOrder()->limit(6)->get();
        //最新小说
//        $types
        $alls = NovelBook::inRandomOrder()->limit(16)->get();


        $news = NovelType::limit(10)->get();

        foreach ($news as $k=>$type){
            $news[$k]->books = NovelBook::where(['type_id'=>$type->id])->inRandomOrder()->limit(16)->get();
        }

//        dd($news->toArray());

        //推荐榜
        $tjbs = NovelBook::inRandomOrder()->limit(10)->get();
        //人气榜
        $rqbs = NovelBook::inRandomOrder()->limit(10)->get();
        //女生榜
        $girls = NovelBook::where(['channel_id'=>2])->inRandomOrder()->limit(10)->get();
        //男生榜
        $boys = NovelBook::where(['channel_id'=>1])->inRandomOrder()->limit(10)->get();

        //小说资讯
        $chapters = NovelChapter::inRandomOrder()->orderBy('created_at','desc')->limit(10)->get();
        $chapters = CreateTDK::getTitle($chapters);

        //热门专题
        $tags = NovelTag::all();


        $links = $this->link();

        return view('home.index',compact('banner_books','types','tj_chapter','tj_books','rm_books','news','tjbs','rqbs','girls','boys','chapters','tags','tj_firsts','rm_firsts','alls','links'));
    }


    public function link(){
        $links = config('name.links');
        return $links;
    }
}
