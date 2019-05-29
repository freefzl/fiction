@extends('layouts.default')
@section('title', '小说库')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')

@section('content')
<!--container-->
<div class="container clearfix">
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/" title="享阅小说网">首页</a>  &gt;
        <a href="/book/" >小说库</a> &gt;
    </div>
    <div class="wrap clearfix">
        <!--main-->
        <div class="book-nav">
            <div class="clearfix">
                <p>小说类型：</p>
                <ul class="clearfix">

                    <li class="{{$_SERVER['REQUEST_URI']==='/book'?'on':''}}"><a href="/book" title="小说库">全部</a></li>
                    @foreach($types as $type)
                    <li class="{{$_SERVER['REQUEST_URI']==="/".$type->typedir.""?'on':''}}"><a href="/{{$type->typedir}}" title="{{$type->typename}}">{{$type->typename}}<span></span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="book-list">
            <h2>全部小说</h2>
            <ul class="clearfix">
                @foreach($books as $book)
                <li>
                    <a class="pic" href="/book/{{$book->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$book->cover_img}}" alt="{{$book->name}}"></a>
                    <h5 class="tit"><a href="/book/{{$book->id}}.html" target="_blank">{{$book->name}}</a></h5>
                    <p class="info"><span>作者：{{$book->author}}</span><span>分类：{{$book->type[0]->typename}}</span>
                        <i class="finish">{{ $book->status?'已完结':'连载中'}}</i>
                    </p>
                    <p class="intro">{{$book->synopsis}}</p>
                    <a class="view" href="/book/{{$book->id}}.html" target="_blank">小说详情</a>
                </li>
                @endforeach
            </ul>
        </div>
        <!--main-->
    </div>
</div>
<!--/container-->
@stop

<!--container-->
@section('script')

    <script>
        // if(window.location.pathname);
    </script>

@stop
