<?php

namespace App\Http\Controllers\Mobile;

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
        $banner_ids = config('name.banner_ids');
        $banner_books=[];
        foreach ($banner_ids as $id){
            $banner_books[] = NovelBook::where(['id'=>$id])->get()->toArray();
        }
//        $banner_books = NovelBook::where(['is_up'=>1])->limit(5)->get();
        foreach ($banner_books as $k=>$banner_book){
            $banner_books[$k]['banners'] = $banners[$k];
        }
       
        //编辑推荐

        $bjtj = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(8)->get();

        //热门小说
        $rmxs = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(8)->get();

        //最新专题
        $zxzt = NovelTag::limit(6)->get();

        //最新小说
        $zxxs = NovelBook::where(['is_up'=>1])->with(['type'])->orderBy('id','desc')->limit(8)->get();

        //最新资讯
        $zxzx = NovelChapter::where(['is_up'=>1])->where(['is_pay'=>0])->where(['goId'=>0])->orderBy('updated_at','desc')->limit(8)->get();
        $zxzx = CreateTDK::getTitle($zxzx);


        //小说排行榜

        $phb = [['推荐榜'],['人气榜'],['女生榜'],['男生榜']];

        foreach ($phb as $k=>$type){

            $phb[$k]['books'] = NovelBook::where(['is_up'=>1])->with(['type'])->inRandomOrder()->limit(8)->get();
        }


        $links = $this->link();

        return view('mobile.index',compact('banner_books','links','bjtj','rmxs','zxzt','zxxs','zxzx','phb'));
    }


    public function link(){
        $links = config('name.links');
        return $links;
    }


    public function Search(Request $request){

        $search = $request->q;

        $books = NovelBook::where(['is_up'=>1])->where('name','like','%'.$search.'%')->with(['type'])->limit(30)->get();

        if(!count($books)){
            $rands = NovelBook::where(['is_up'=>1])->with(['type'])->inRandomOrder()->limit(16)->get();
        }

        return view('mobile.search',compact('books','search','rands'));
    }
}
