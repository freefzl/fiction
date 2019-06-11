<?php

namespace App\Http\Controllers\Mobile;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Services\CreateTDK;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class ArticleController extends Controller
{
    public function index()
    {




        $chapters= NovelChapter::where(['goId'=>'0'])->where(['is_pay'=>0])->with(['book'=>function($query){
                    $query->with(['type'])->get();
                }])->orderBy('id','desc')->simplePaginate(20);





        $articles = CreateTDK::getTitle($chapters);
        $articles = CreateTDK::getDescription($articles);
        $articles= $articles->toArray();

        
        $cbl = $this->ceBianLan();

        return view('mobile.article',compact('articles','cbl'));
    }

    public function xq($id)
    {
        $arr = explode('.',$id);
        $id =  (int)$arr[0];

        $chapter = NovelChapter::where(['id'=>$id])->where(['goId'=>'0'])->where(['is_pay'=>0])->with(['book'=>function($query){
            $query->with(['comment'])->get();
        }])->get();

        if($chapter==null||count($chapter)==0){
            return abort(404);
        }
        $chapter = CreateTDK::getTitle($chapter);
        $chapter = CreateTDK::getDescription($chapter);

        $cbl = $this->ceBianLan();

        $up = NovelChapter::where(['id'=>$id-1])->get();
        $up = CreateTDK::getTitle($up);
        $down = NovelChapter::where(['id'=>$id+1])->get();
        $down = CreateTDK::getTitle($down);

        $relateds = NovelChapter::where(['bid'=>$chapter[0]->bid])->where(['goId'=>'0'])->where(['is_pay'=>0])->limit(10)->get();
        $relateds = CreateTDK::getTitle($relateds);

        return view('mobile.article_xq',compact('chapter','cbl','up','down','relateds'));
    }


    public function ceBianLan(){
        //热门资讯
        $rmzxs = NovelChapter::where(['goId'=>'0'])->with(['book'=>function($query){
            $query->with(['type'])->get();
        }])->limit(10)->get();
        $data['rmzxs'] = CreateTDK::getTitle($rmzxs);

        //最新小说
        $data['zxxss'] = NovelBook::limit(8)->get();

        return $data;
    }
}
