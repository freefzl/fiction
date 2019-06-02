@extends('mobile.layouts.default')
@section('title', $books->typename.'排行榜')
@section('keywords', '小说 '.$books->typename.'排行榜')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')


@section('content')
    <div class="wrap">
        <div class="mod mod-top-nav">
            <div class="top-nav">
                <ul class="clearfix">
                    @foreach($types as $type)
                        <li class="{{$_SERVER['REQUEST_URI']==="/top/$type->typedir"?'on':''}}"><a href="/top/{{$type->typedir}}" title="{{$type->typename}}">{{$type->typename}}<span></span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="mod mod-top-list">
            <div class="mod-head">
                <h2>{{$books->typename}}小说排行榜</h2>
            </div>
            <div class="top-list">
                <ul class="clearfix">
                    @foreach($books as $k=>$book)
                        <li class="s{{$k+1}}">
                            <a class="pic" href="/book/{{$book->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$book->cover_img}}" alt="{{$book->name}}"></a>
                            <h5 class="tit"><a href="/book/{{$book->id}}.html" target="_blank">{{$book->name}}</a></h5>
                            <p class="info"><span>作者：{{$book->author}}</span><span>状态：{{$book->status?'已完结':'连载中'}}</span></p>
                            <p class="intro">{!! $book->synopsis !!}</p>
                            <i class="num">{{$k+1}}</i>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        <a href="/zt">专题</a> &gt;
        &gt; <a href="/top/{{$books->typedir}}" >{{$books->typename}}</a> &gt;
    </div>
    <div class="cmargin"></div>


@stop


@section('script')

@stop