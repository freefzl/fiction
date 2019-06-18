<?php

namespace App\Http\Controllers\Mobile;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use App\Services\CreateTDK;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    public function index($tid=0,$did=0,$sid=0)
    {

        $sid = explode('.',$sid);
        $sid = $sid[0];
//        dump($tid,$did,$sid);

        $model = NovelBook::select();
        $typename=null;
        if($tid){
            $model = $model->where(['type_id'=>$tid]);
            $typename = NovelType::where(['id'=>$tid])->first()->toArray();
        }

        if($did){
            if($did==1){
                $model = $model->whereDate('updated_at',date('Y-m-d',time()));
            }elseif($did==2){
                $model = $model->whereRaw("DATE_SUB(CURDATE(),INTERVAL 3 DAY) <= updated_at");
            }elseif($did==3){
                $model = $model->whereRaw("DATE_SUB(CURDATE(),INTERVAL 7 DAY) <= updated_at");
            }elseif($did==4){
                $model = $model->whereRaw("DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= updated_at");
            }

        }
        if($sid){
            if($sid==1){
                $model = $model->where(['status'=>0]);
            }elseif($sid==2){
                $model = $model->where(['status'=>1]);
            }
        }
        $model = $model->with(['type'])->orderBy('id','desc')->paginate(30)->toArray();
        $model['typename'] = $typename;
//        dump($model);
        $types = NovelType::all();
        return view('mobile.chapter',compact('types','sid','tid','did','model'));
    }


    public function xq($id)
    {
        $arr = explode('.',$id);
        $id =  (int)$arr[0];

        $book = NovelBook::where(['id'=>$id])->with(['type','comment'])->first();
        if($book==null){
            return abort(404);
        }
        $tags = NovelTag::select('id','tagname')->whereIn('id',json_decode($book->tag_ids))->get();

        $chapter = NovelChapter::where(['bid'=>$id])->where(['goId'=>'0'])->where(['is_pay'=>0])->orderBy('id','desc')->limit(5)->get();


        $new_chapter = NovelChapter::where(['bid'=>$id])->orderBy('id','desc')->limit(5)->get();

        $cnxh = $this->cnxh();
        $rmzt = $this->rmzt();
        $tjxs = $this->tjxs();

        $last_new_chapter = NovelChapter::where(['bid'=>$id])->where(['goId'=>'0'])->where(['is_pay'=>0])->OrderBy('id','desc')->limit(1)->first();

        return view('mobile.chapter_xq',compact('book','tags','cnxh','rmzt','tjxs','chapter','new_chapter','last_new_chapter'));
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

    public function chapter_list($id)
    {

        $arr = explode('.',$id);
        $id =  (int)$arr[0];

        $book = NovelBook::where(['id'=>$id])->with(['type','comment'])->first();
        if($book==null){
            return abort(404);
        }
        $tags = NovelTag::select('id','tagname')->whereIn('id',json_decode($book->tag_ids))->get();

        $chapter = NovelChapter::where(['bid'=>$id])->paginate(50)->toArray();

        $cnxh = $this->cnxh();
        $rmzt = $this->rmzt();
        $tjxs = $this->tjxs();

        return view('mobile.chapter_list',compact('book','tags','rmzt','tjxs','chapter','cnxh'));

    }
}
