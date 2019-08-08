<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Services\CreateTDK;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
//        Cache::forget('chapters');
//        $chapters = Cache::get('chapters');
//         dump($chapters);
//        if(!$chapters){

        $checkDayStr = date('Y-m-d ',time());
        $timeBegin1 = strtotime($checkDayStr."09:00".":00");


        $curr_time = time();

        if($curr_time >= $timeBegin1 )
        {
            $chapters = NovelChapter::where(['is_up'=>1])->where(['goId'=>'0'])->where(['is_pay'=>0])->whereRaw("DATE_FORMAT(updated_at,'%Y-%m-%d')= DATE_SUB(CURDATE(), INTERVAL 1 DAY)")->with(['book'=>function($query){
                $query->with(['type'])->get();
            }])->orderBy('id','desc')->limit(30)->get();
        }else{
            $chapters = NovelChapter::where(['is_up'=>1])->where(['goId'=>'0'])->where(['is_pay'=>0])->whereRaw("DATE_FORMAT(updated_at,'%Y-%m-%d')= DATE_SUB(CURDATE(), INTERVAL 2 DAY)")->with(['book'=>function($query){
                $query->with(['type'])->get();
            }])->orderBy('id','desc')->limit(30)->get();
        }


//            Cache::put('chapters', json_encode($chapters,true), now()->addMinutes(5));
//        }

        $all = DB::select("SELECT COUNT(id) as `new_all` FROM `novel_chapters` WHERE is_up=1 AND goId='0' AND is_pay=0");
//        dd($chapters);
        $articles = CreateTDK::getTitle($chapters);
        $articles = CreateTDK::getDescription($articles);

        $cbl = $this->ceBianLan();
        $articles = $articles->toArray();


        $try_ids = NovelBook::where(['is_up'=>1])->pluck('try_id')->all();


        return view('home.article',compact('articles','cbl','try_ids','all'));
    }

    public function xq($id)
    {

        $arr = explode('.',$id);
        $id =  (int)$arr[0];

        $chapter = NovelChapter::where(['is_up'=>1])->where(['id'=>$id])->where(['goId'=>'0'])->where(['is_pay'=>0])->with(['book'=>function($query){
            $query->with(['comment'])->get();
        }])->get();

        if($chapter==null||count($chapter)==0||$chapter[0]->chapterContent==null||$chapter[0]->book==null){
            return abort(404);
        }
        $chapter = CreateTDK::getTitle($chapter);
        $chapter = CreateTDK::getDescription($chapter);

        $cbl = $this->ceBianLan();

        $up = NovelChapter::where(['is_up'=>1])->where(['goId'=>'0'])->where(['is_pay'=>0])->where('id','<',$id)->orderby('id','desc')->limit(1)->get();
        if($up){
            $up = CreateTDK::getTitle($up);
        }
        $down = NovelChapter::where(['is_up'=>1])->where(['goId'=>'0'])->where(['is_pay'=>0])->where('id','>',$id)->limit(1)->get();

        if($down){
            $down = CreateTDK::getTitle($down);
        }

        $relateds = NovelChapter::where(['is_up'=>1])->where(['bid'=>$chapter[0]->bid])->where(['goId'=>'0'])->where(['is_pay'=>0])->limit(200)->get();
        $relateds = $relateds->random(10);
        $relateds = CreateTDK::getTitle($relateds);



        return view('home.article_xq',compact('chapter','cbl','up','down','relateds'));
    }


    public function ceBianLan(){
        //热门资讯
        $rmzxs = NovelChapter::where(['is_up'=>1])->where(['goId'=>'0'])->with(['book'=>function($query){
            $query->with(['type'])->get();
        }])->limit(200)->get();
        $rmzxs = $rmzxs->random(10);
        $data['rmzxs'] = CreateTDK::getTitle($rmzxs);

        //热门专题
        $data['rmzts'] = NovelTag::limit(3)->get();

        //推荐小说
        $data['tjxss'] = NovelBook::where(['is_up'=>1])->limit(5)->get();

        return $data;
    }


}
