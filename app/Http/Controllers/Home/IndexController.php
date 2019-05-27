<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelType;
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

        //推荐小说
        //热门小说
        //最新小说

        //推荐榜
        //人气榜
        //女生榜
        //男生榜

        //小说资讯
        //热门专题





        return view('home.index',compact('banner_books','types'));
    }
}
