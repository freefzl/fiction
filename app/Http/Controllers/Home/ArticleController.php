<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Services\CreateTDK;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $chapters = NovelChapter::where(['goId'=>'0'])->where(['is_pay'=>0])->with(['book'=>function($query){
            $query->with(['type'])->get();
        }])->inRandomOrder()->limit(20)->get();
        $articles = CreateTDK::getTitle($chapters);
        $articles = CreateTDK::getDescription($articles);
        $count = NovelChapter::where(['goId'=>'0'])->where(['is_pay'=>0])->get()->count();
        $cbl = $this->ceBianLan();

        return view('home.article',compact('articles','cbl','count'));
    }

    public function xq($id)
    {
        $arr = explode('.',$id);
        $id =  (int)$arr[0];

        $chapter = NovelChapter::where(['id'=>$id])->where(['goId'=>'0'])->where(['is_pay'=>0])->with(['book'=>function($query){
            $query->with(['comment'])->get();
        }])->get();
        $chapter = CreateTDK::getTitle($chapter);
        $chapter = CreateTDK::getDescription($chapter);

        $cbl = $this->ceBianLan();

        $up = NovelChapter::where(['id'=>$id-1])->get();
        $up = CreateTDK::getTitle($up);
        $down = NovelChapter::where(['id'=>$id+1])->get();
        $down = CreateTDK::getTitle($down);

        $relateds = NovelChapter::where(['bid'=>$chapter[0]->bid])->where(['goId'=>'0'])->where(['is_pay'=>0])->inRandomOrder()->limit(10)->get();
        $relateds = CreateTDK::getTitle($relateds);

        return view('home.article_xq',compact('chapter','cbl','up','down','relateds'));
    }


    public function ceBianLan(){
        //热门资讯
        $rmzxs = NovelChapter::where(['goId'=>'0'])->with(['book'=>function($query){
            $query->with(['type'])->get();
        }])->inRandomOrder()->limit(10)->get();
        $data['rmzxs'] = CreateTDK::getTitle($rmzxs);

        //热门专题
        $data['rmzts'] = NovelTag::inRandomOrder()->limit(3)->get();

        //推荐小说
        $data['tjxss'] = NovelBook::inRandomOrder()->limit(5)->get();

        return $data;
    }


}
