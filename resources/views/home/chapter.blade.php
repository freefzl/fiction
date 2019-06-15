@extends('layouts.default')
@section('title', isset($model['typename']['typename'])&&$model['typename'] !=''?'章节目录-'.$model['typename']['typename']:'章节目录')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')

@section('content')
<!--container-->
<div class="container clearfix">
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/" title="享阅小说网">首页</a>  &gt;
        <a href="/chapter/" >章节目录</a> &gt; {{isset($model['typename']['typename'])&&$model['typename'] !=''?$model['typename']['typename']:''}}

    </div>
    <div class="wrap clearfix">
        <!--main-->
        <div class="book-nav">
            <div class="clearfix">
                <p>小说类型：</p>
                <ul class="clearfix">
                    <li class="@if($tid==0) on @endif"><a href="/chapter/0-{{$did}}-{{$sid}}.html" title="小说库">全部</a></li>
                    @foreach($types as $type)
                        <li class="@if($tid==$type->id) on @endif"><a href="/chapter/{{$type->id}}-{{$did}}-{{$sid}}.html" title="{{$type->typename}}">{{$type->typename}}<span></span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="clearfix">
                <p>更新时间：</p>
                <ul class="clearfix">
                    <li class="@if($did==0) on @endif"><a href="/chapter/{{$tid}}-0-{{$sid}}.html">全部</a></li>
                    <li class="@if($did==1) on @endif"><a href="/chapter/{{$tid}}-1-{{$sid}}.html">今天</a></li>
                    <li class="@if($did==2) on @endif"><a href="/chapter/{{$tid}}-2-{{$sid}}.html">三日内</a></li>
                    <li class="@if($did==3) on @endif"><a href="/chapter/{{$tid}}-3-{{$sid}}.html">七日内</a></li>
                    <li class="@if($did==4) on @endif"><a href="/chapter/{{$tid}}-4-{{$sid}}.html">一月内</a></li>
                </ul>
            </div>
            <div class="clearfix">
                <p>写作进程：</p>
                <ul class="clearfix">
                    <li class="@if($sid==0) on @endif"><a href="/chapter/{{$tid}}-{{$did}}-0.html">全部</a></li>
                    <li class="@if($sid==1) on @endif"><a href="/chapter/{{$tid}}-{{$did}}-1.html">连载中</a></li>
                    <li class="@if($sid==2) on @endif"><a href="/chapter/{{$tid}}-{{$did}}-2.html">已完本</a></li>
                </ul>
            </div>
        </div>

        <div class="book-list">
            <h2>全部小说</h2>
            <ul class="clearfix">
                @foreach($model['data'] as $item)
                <li>
                    <a class="pic" href="/{{$item['id']}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item['cover_img']}}" alt="{{$item['name']}}"></a>
                    <h5 class="tit"><a href="/{{$item['id']}}.html" target="_blank">{{$item['name']}}</a></h5>
                    <p class="info"><span>作者：{{$item['author']}}</span><span>分类：{{$item['type'][0]['typename']}}</span>
                        <i class="finish">{{$item['status']?'已完结':'连载中'}}</i>							</p>
                    <p class="intro">{{$item['synopsis']}}</p>
                    <a class="view" href="/{{$item['id']}}.html" target="_blank">章节详情</a>
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
