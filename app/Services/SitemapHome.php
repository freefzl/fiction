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

class SiteMapHome{


    public static function index(){

        $sitemap = new Sitemap(public_path('sitemap.xml'));

        $sitemap->addItem(env('APP_URL'), time(),Sitemap::DAILY, 1);
        $sitemap->addItem(env('APP_URL').'/book/', time(),Sitemap::DAILY, 0.8);
        $sitemap->addItem(env('APP_URL').'/chapter/', time(),Sitemap::DAILY, 0.8);
        $sitemap->addItem(env('APP_URL').'/article/', time(),Sitemap::DAILY, 0.8);
        $sitemap->addItem(env('APP_URL').'/top/', time(),Sitemap::DAILY, 0.8);
        $sitemap->addItem(env('APP_URL').'/zt/', time(),Sitemap::DAILY, 0.8);
        $sitemap->addItem(env('APP_URL').'/search/', time(),Sitemap::DAILY, 0.8);

        $books = NovelBook::where(['is_up'=>1])->get();
        foreach ($books as $book) {
            $sitemap->addItem(env('APP_URL').'/book/'.$book->id.'.html', time(),Sitemap::DAILY, 0.8);
            $sitemap->addItem(env('APP_URL').'/chapter/'.$book->id.'.html', time(),Sitemap::DAILY, 0.8);
            $sitemap->addItem(env('APP_URL').'/'.$book->id.'/', time(),Sitemap::DAILY, 0.8);
        }

        $novel_chapters = NovelChapter::where(['is_up'=>1,'is_pay'=>0,'goId'=>'0'])->get();

        foreach ($novel_chapters as $chapter) {
            $sitemap->addItem(env('APP_URL').'/article/'.$chapter->id.'.html', time(),Sitemap::DAILY, 0.8);
        }

        $novel_types = NovelType::get();

        foreach ($novel_types as $type){
            $sitemap->addItem(env('APP_URL').'/top/'.$type->typedir.'/', time(),Sitemap::DAILY, 0.8);
            $sitemap->addItem(env('APP_URL').'/'.$type->typedir.'/', time(),Sitemap::DAILY, 0.8);
        }

        $novel_tags = NovelTag::get();
        foreach ($novel_tags as $tag){
            $sitemap->addItem(env('APP_URL').'/zt/'.$tag->id.'/', time(),Sitemap::DAILY, 0.8);
        }

        /*for ($i=1;$i<150002;$i++){
            $sitemap->addItem(env('APP_URL').'/book/', time(),Sitemap::DAILY, 0.8);
        }*/


        $sitemap->write();

        $index = new Index(public_path('/sitemap_index.xml'));
        $sitemapFileUrls = $sitemap->getSitemapUrls(env('APP_URL').'/');

        foreach ($sitemapFileUrls as $sitemapUrl) {
            $index->addSitemap($sitemapUrl);
        }

        $index->write();
    }



}