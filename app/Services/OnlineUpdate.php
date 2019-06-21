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

class OnlineUpdate{
    public static function updateBooks()
    {
        NovelBook::where(['is_up'=>0])->limit(10)->update(['is_up'=>1]);
        $ids = NovelBook::select('id')->where(['is_up'=>1])->orderBy('id','desc')->limit(10)->get();
        foreach ($ids as $id){
            NovelChapter::where(['bid'=>$id->id])->update(['is_up'=>1]);
        }
    }
}