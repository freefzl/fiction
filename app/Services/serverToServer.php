<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24 0024
 * Time: 15:09
 */

namespace App\Services;

use App\Models\Comment;
use App\Models\EarlyBook;
use App\Models\EarlyChapter;
use App\Models\NovelBook;
use App\Models\NovelChannel;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class serverToServer{




    public static function index(){

        $id = NovelChapter::orderBy('id','desc')->limit(1)->first();

        if(!$id->id>9214183){
            $info = DB::connection('mysql208')->select('select * from novel_chapters where id > ? limit 1',[$id->id+1]);
            dd($info);
            $novel_chapter = new NovelChapter();
            $novel_chapter->id = $info->id;
            $novel_chapter->bid = $info->bid;
            $novel_chapter->chapter_id = $info->chapter_id;
            $novel_chapter->title = $info->title;
            $novel_chapter->chapterContent = $info->chapterContent;
            $novel_chapter->is_pay = $info->is_pay;
            $novel_chapter->is_page = $info->is_page;
            $novel_chapter->goId = $info->goId;
            $novel_chapter->pubdate = $info->pubdate;
            $novel_chapter->is_up = $info->is_up;
            $novel_chapter->save();
        }



    }



}