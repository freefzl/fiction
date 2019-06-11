<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelBook;
use App\Models\NovelType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    public function index($tid=0,$did=0,$sid=0)
    {

        $sid = explode('.',$sid);
        $sid = $sid[0];
        dump($tid,$did,$sid);

        /*$model = NovelBook::select();

        if($tid){
            $model = $model->where(['type_id'=>$tid]);
        }

        if($did){
            if($did==1){
                $model = $model->where(['type_id'=>$tid]);
            }elseif($did==2){
                $model = $model->where(['type_id'=>$tid]);
            }elseif($did==3){
                $model = $model->where(['type_id'=>$tid]);
            }elseif($did==4){
                $model = $model->where(['type_id'=>$tid]);
            }

        }
        if($sid){
            if($sid==1){
                $model = $model->where(['type_id'=>$tid]);
            }elseif($sid==2){
                $model = $model->where(['type_id'=>$tid]);
            }
        }
        $model = $model->get();*/

        $types = NovelType::all();
        return view('home.chapter',compact('types','sid','tid','did'));
    }
}
