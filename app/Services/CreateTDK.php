<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24 0024
 * Time: 15:09
 */

namespace App\Services;

class CreateTDK{

    public static function getTitle($model){
        foreach ($model as $k=>$item){
//            dump($item->toArray());
            if($item->book!=null){
                $title = [
                    ''.$item->book->name.' 小说免费试读 '.$item->book->protagonist.'小说阅读',
                    ''.$item->book->name.' '.$item->book->protagonist.'在线阅读',
                    ''.$item->book->name.' 小说完结版在线试读 '.$item->book->protagonist.'小说全文',
                    ''.$item->book->name.' '.$item->book->protagonist.'全文在线阅读 '.$item->book->title.' '.$item->book->name.' 小说全文免费试读'.$item->book->protagonist.'全文精彩章节',
                    ''.$item->book->name.' 已完结版全文章节阅读 '.$item->book->protagonist.'小说',
                    ''.$item->book->name.' '.$item->book->protagonist.'大结局精彩试读',
                    ''.$item->book->name.' ('.$item->book->protagonist.')小说阅读by'.$item->book->protagonist.'',
                    ''.$item->book->name.' 小说章节目录精彩阅读'.$item->book->protagonist.'小说阅读',
                    ''.$item->book->name.' 小章节在线阅读'.$item->book->protagonist.'小说全文',
                    ''.$item->book->name.' 精彩章节小说目录免费试读 '.$item->book->protagonist.' 大结局无弹窗',
                    ''.$item->book->name.' '.$item->book->protagonist.'章节列表在线试读 '.$item->book->title.'',
                    ''.$item->book->name.' 小说大结局在线试读'.$item->book->protagonist.'小说全文',
                    ''.$item->book->name.' '.$item->book->protagonist.'小说全部章节目录',
                    ''.$item->book->name.' '.$item->book->protagonist.'小说最新章节目录及全文精彩章节',
                    ''.$item->book->name.' 小说章节目录在线阅读'.$item->book->protagonist.'小说阅读',
                    ''.$item->book->name.' '.$item->book->protagonist.'完结版精彩阅读',
                    ''.$item->book->name.' 小说全文精彩阅读'.$item->book->protagonist.'小说阅读',
                    ''.$item->book->protagonist.''.$item->book->name.' 完结版在线阅读',
                    ''.$item->book->name.' '.$item->book->protagonist.'小说完整版全文在线阅读',
                    ''.$item->book->name.' '.$item->book->protagonist.'最新章节',
                ];
                $model[$k]->t_title = $title[$item->id%20];
            }

        }

        return $model;
    }



    public static function getDescription($model){
        foreach ($model as $k=>$item){
            if($item->book!=null){
                $description = [
                    ''.$item->book->name.' 是作者'.$item->book->author.' 创作的 '.$item->book->type[0]->typename.' 类小说，讲述的是'.$item->book->protagonist.' 之间的故事，情节跌宕起伏，引人入胜，是'.$item->book->author.' 为数不多的经典著作，内容新颖，文笔成熟，非常值得一看。章节节选：'.mb_substr(strip_tags($item->chapterContent),0,30).' ',
                    '主角叫'.$item->book->protagonist.' 的小说是'.$item->book->name.' ，这本小说的作者是'.$item->book->author.' 创作的'.$item->book->type[0]->typename.' 类型的小说，文中的故事非常感人，文笔极佳，实力推荐。小说精彩段落试读：'.mb_substr(strip_tags($item->chapterContent),0,30).' ',
                    '小说主人公是'.$item->book->protagonist.' 的小说叫做'.$item->book->name.' ，本小说的作者是'.$item->book->author.' 写的一本'.$item->book->type[0]->typename.' 风格的小说，文笔极佳，实力推荐。小说精彩段落试读：'.mb_substr(strip_tags($item->chapterContent),0,30).' ',
                    '精品小说'.$item->book->name.' 由'.$item->book->author.' 最新写的一本'.$item->book->type[0]->typename.' 风格的小说，本小说的主角'.$item->book->protagonist.' ，内容主要讲述：'.mb_substr(strip_tags($item->chapterContent),0,30).' ',
                    ''.$item->book->name.' 是一本非常好看的'.$item->book->type[0]->typename.' 小说，小说的作者是'.$item->book->author.' ，主角是'.$item->book->protagonist.' ，小说主要讲述的是：'.mb_substr(strip_tags($item->chapterContent),0,30).' ',
                ];
                $model[$k]->description = $description[$item->id%5];
            }

        }
        return $model;
    }


}