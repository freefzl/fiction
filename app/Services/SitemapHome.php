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

class SitemapHome{


    public static function index(){

        $sitemap = new Sitemap(public_path('lcxs_site_map.xml'));

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

        $index = new Index(public_path('/lcxssite_index.xml'));
        $sitemapFileUrls = $sitemap->getSitemapUrls(env('APP_URL').'/');

        foreach ($sitemapFileUrls as $sitemapUrl) {
            $index->addSitemap($sitemapUrl);
        }

        $index->write();
    }


    public static function getFile()
    {
        $files = scandir(public_path());

        $xmls = [];
        foreach ($files as $file){

            $arr = explode('.',$file);
            $arr1 = explode('_',$arr[0]);

            foreach ($arr1 as $item){
                if($item=='lcxs'){
                    $xmls[] = $file;
                }
            }
        }

        foreach ($xmls as $xml){


            $copy = copy(public_path().'/'.$xml,public_path().'/'.'m'.$xml);
            if($copy){
                $doc = new \DOMDocument();
                $doc->load(public_path().'/'.'m'.$xml);
                $url = $doc->getElementsByTagName('url');

                for($i=0;$i<$url->length;$i++){

                    $loc = $url->item($i)->getElementsByTagName('loc')->item(0)->nodeValue;

                    $loc= str_replace("www","m",$loc);
                    $url->item($i)->getElementsByTagName('loc')->item(0)->nodeValue=$loc;


                    $mobile_node = $doc->createElement("mobile:mobile");

                    $url->item($i)->appendChild($mobile_node);


                    $doc->save(public_path().'/'.'m'.$xml);
                }

            }
        }

        $mxmls = [];
        foreach ($files as $file){

            $arr = explode('.',$file);
            $arr1 = explode('_',$arr[0]);

            foreach ($arr1 as $item){
                if($item=='mlcxs'){
                    $mxmls[] = $file;
                }
            }
        }

        $doc = new \DOMDocument('1.0','utf-8');//引入类并且规定版本编码
        $grandFather = $doc->createElement("sitemapindex");//创建节点
        $grandFather->setAttribute("xmlns","http://www.sitemaps.org/schemas/sitemap/0.9");//给Grandfather增加ID属性

        foreach ($mxmls as $mxml){

            $father = $doc->createElement("sitemap");//创建节点
            $loc = $doc->createElement("loc");//创建节点
            $content = $doc -> createTextNode(env('APP_URL').'/'.$mxml);//设置标签内容
            $loc  -> appendChild($content);//将标签内容赋给标签
            $father->appendChild($loc);
            $grandFather->appendChild($father);//讲Father放到Grandfather下

            $doc->appendChild($grandFather);//创建顶级节点
            $doc->save(public_path().'/'.'mlcxssite_index.xml');//保存代码
        }







    }



}