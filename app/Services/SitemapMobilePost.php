<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24 0024
 * Time: 15:09
 */

namespace App\Services;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use samdark\sitemap\Index;
use samdark\sitemap\Sitemap;

class SitemapMobilePost{


    public static function index(){
        set_time_limit(0);

        $books = NovelBook::where(['is_up'=>1])->whereDate('updated_at',date('Y-m-d',time()))->get();

        $urls = [];
        foreach ($books as  $book){
            $urls[] = env('M_APP_URL')."book/".$book->id.'.html';
            $urls[] = env('M_APP_URL').$book->id.'/';
        }

        $novel_chapters = NovelChapter::where(['is_up'=>1,'is_pay'=>0,'goId'=>'0'])->whereDate('updated_at',date('Y-m-d',time()))->get();
        foreach ($novel_chapters as  $chapter){
            $urls[] = env('M_APP_URL')."article/".$chapter->id.'.html';
        }

        $urls = collect($urls);
        foreach ($urls->chunk(2000) as $items){
            $items = $items->toArray();
            $api = 'http://data.zz.baidu.com/urls?site=https://m.linchengxs.com&token=NLEsLBeowz04jEXB';
            $ch = curl_init();
            $options =  array(
                CURLOPT_URL => $api,
                CURLOPT_POST => true,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POSTFIELDS => implode("\n", $items),
                CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
            );
            curl_setopt_array($ch, $options);
            $result = curl_exec($ch);
            echo $result;
        }


    }



}