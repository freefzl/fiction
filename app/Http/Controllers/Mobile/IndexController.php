<?php

namespace App\Http\Controllers\Mobile;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use App\Services\CreateTDK;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index()
    {

        //banner
        $banners = config('name.banner_img');
        $banner_ids = config('name.banner_ids');
        $banner_books=[];
        foreach ($banner_ids as $id){
            $banner_books[] = NovelBook::where(['id'=>$id])->get()->toArray();
        }
//        $banner_books = NovelBook::where(['is_up'=>1])->limit(5)->get();
        foreach ($banner_books as $k=>$banner_book){
            $banner_books[$k]['banners'] = $banners[$k];
        }

        //编辑推荐

        $bjtj = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(8)->get();

        //热门小说
        $rmxs = NovelBook::where(['is_up'=>1])->inRandomOrder()->limit(8)->get();

        //最新专题
        $zxzt = NovelTag::limit(6)->get();

        //最新小说
        $zxxs = NovelBook::where(['is_up'=>1])->with(['type'])->orderBy('id','desc')->limit(8)->get();

        //最新资讯
        $zxzx = NovelChapter::where(['is_up'=>1])->where(['is_pay'=>0])->where(['goId'=>0])->orderBy('updated_at','desc')->limit(8)->get();
        $zxzx = CreateTDK::getTitle($zxzx);


        //小说排行榜

        $phb = [['推荐榜'],['人气榜'],['女生榜'],['男生榜']];

        foreach ($phb as $k=>$type){

            $phb[$k]['books'] = NovelBook::where(['is_up'=>1])->with(['type'])->inRandomOrder()->limit(8)->get();
        }


        $links = $this->link();

        return view('mobile.index',compact('banner_books','links','bjtj','rmxs','zxzt','zxxs','zxzx','phb'));
    }


    public function link(){
        $links = config('name.links');
        return $links;
    }


    public function Search(Request $request){

        $search = $request->q;

        $books = NovelBook::where(['is_up'=>1])->where('name','like','%'.$search.'%')->with(['type'])->limit(30)->get();

        if(!count($books)){
            $rands = NovelBook::where(['is_up'=>1])->with(['type'])->inRandomOrder()->limit(16)->get();
        }

        return view('mobile.search',compact('books','search','rands'));
    }

    //{wechat}/{book}/{bookid}/{code}/{hero}
    public function Towx($str)
    {
        $isMobile = $this->isMobile();
        if ($isMobile) {

            $arr = explode('&',$str);
            $arr2 = [];
            foreach ($arr as $item){
                $arr2[] = explode('=',$item);
            }

            if($arr2[0][1] != '千舫'){
                return '非法数据';
            };
            $book = NovelBook::where(['id'=>$arr2[2][1]])->first();
            $data = [
                'wechat' =>$arr2[0][1],
                'book' =>$arr2[1][1],
                'bookid' =>$arr2[2][1],
                'code' =>$arr2[3][1],
                'hero' =>$arr2[4][1],
                'tdsourcetag' =>$arr2[5][1],
            ];

            return view('mobile.towx',compact('data','book'));
        } else {
            return '小说已下线';
        }

    }

    //判断是否是移动端访问
    public function isMobile()
    {// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
        if (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) {
            return TRUE;
        }
        // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
        if (isset ($_SERVER['HTTP_VIA'])) {
            return stristr($_SERVER['HTTP_VIA'], "wap") ? TRUE : FALSE;// 找不到为flase,否则为TRUE
        }
        // 判断手机发送的客户端标志,兼容性有待提高
        if (isset ($_SERVER['HTTP_USER_AGENT'])) {
            $clientkeywords = array(
                'mobile',
                'nokia',
                'sony',
                'ericsson',
                'mot',
                'samsung',
                'htc',
                'sgh',
                'lg',
                'sharp',
                'sie-',
                'philips',
                'panasonic',
                'alcatel',
                'lenovo',
                'iphone',
                'ipod',
                'blackberry',
                'meizu',
                'android',
                'netfront',
                'symbian',
                'ucweb',
                'windowsce',
                'palm',
                'operamini',
                'operamobi',
                'openwave',
                'nexusone',
                'cldc',
                'midp',
                'wap'
            );
            // 从HTTP_USER_AGENT中查找手机浏览器的关键字
            if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
                return TRUE;
            }
        }

        if (isset ($_SERVER['HTTP_ACCEPT'])) { // 协议法，因为有可能不准确，放到最后判断
            // 如果只支持wml并且不支持html那一定是移动设备
            // 如果支持wml和html但是wml在html之前则是移动设备
            if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== FALSE) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === FALSE || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
                return TRUE;
            }
        }
        return FALSE;
    }
}
