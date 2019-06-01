@extends('mobile.layouts.default')
@section('title', '小说库')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')


@section('content')

    <div class="mod mod-nav">
        <div id="book-nav" class="book-nav">
            <ul class="clearfix">
                <li class="{{$_SERVER['REQUEST_URI']==='/book'?'on':''}}"><a href="/book" title="小说库" >全部</a></li>
                @foreach($types as $type)
                <li class="{{$_SERVER['REQUEST_URI']==="/".$type->typedir.""?'on':''}}"><a href="/{{$type->typedir}}" title="{{$type->typename}}" >{{$type->typename}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="mod mod-book">
        <div class="book-list">
            <div class="book-list">
                <ul class="clearfix">
                    @foreach($books['data'] as $item)
                    <li>
                        <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item['cover_img']}}" alt="{{$item['name']}}"></mip-img></div>
                        <a class="tit" href="/book/{{$item['id']}}.html" title="{{$item['name']}}" >{{$item['name']}}</a>
                        <p class="intro">{{$item['synopsis']}}</p>
                        <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item['author']}}</span><em class="type">{{$item['type'][0]['typename']??''}}</em>
                            <em class="finish">{{$item['status']?'已完结':'连载中'}}</em>
                        </p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="pages">
                <a href="{{$books['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$books['current_page']}} 页</span><a href="{{$books['next_page_url']}}" class="p-next">下一页</a>
            </div>
            <!--/main-->
        </div>
    </div>
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        <a href="/book" >小说库</a> &gt;
    </div>

    <div class="cmargin"></div>

@stop


@section('script')

@stop