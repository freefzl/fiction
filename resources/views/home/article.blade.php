@extends('layouts.default')
@section('title', '小说资讯')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', env('M_APP_URL').'/'.'article/')

@section('content')


<div class="container clearfix">
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/" title="{{env('APP_NAME')}}">首页</a>  &gt;
        <a href="/article/" >小说资讯</a> &gt;
    </div>
    <div class="wrap clearfix">
        <!--primary-->
        <div class="news-list">
            <h2>共<em>{{$articles['total']}}</em>篇文章</h2>
            <ul>
                @foreach($articles['data'] as $article)
                    @if(!in_array($article['id'],$try_ids))
                <li>
                    <a class="pic" href="/article/{{$article['id']}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$article['book']['cover_img']}}" alt="{{$article['t_title']}}"></a>
                    <h5 class="tit"><a href="/article/{{$article['id']}}.html" target="_blank">{{mb_substr($article['t_title'],0,40)}}...</a></h5>
                    <p class="info"><span>发布时间：<em>{{$article['created_at']}}</em></span><span>编辑：{{$article['book']['author']}}</span></p>
                    <p class="text">{!! $article['description'] !!}</p>
                </li>
                    @endif
                @endforeach
            </ul>

        </div>
        <!--/primary-->
        <!--side-->
        <div class="side-bar">
            <!--hot-news-->
            <div class="hot-news">
                <h3>热门资讯</h3>
                <ul>
                    @foreach($cbl['rmzxs'] as $k=>$rmzx)
                    <li class="s{{$k+1}}"><em>{{$k+1}}</em><a href="/article/{{$rmzx->id}}.html" target="_blank">{{$rmzx->t_title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!--hot-tags-->
            <div class="hot-tags">
                <h3>热门专题</h3>
                <ul>
                    @foreach($cbl['rmzts'] as $k=>$rmzt)
                    <li><a href="/zt/{{$rmzt->id}}.html" target="_blank"><img src="{{env('IMG_URL').'/'.$rmzt->tag_img}}" alt="好看的{{$rmzt->tagname}}"><span>{{$rmzt->tagname}}小说</span></a></li>
                    @endforeach
                </ul>
            </div>
            <!--new-book-->
            <div class="new-book">
                <h3>推荐小说</h3>
                <ul>
                    @foreach($cbl['tjxss'] as $k=>$tj)
                    <li>
                        <a class="pic" href="/book/{{$tj->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$tj->cover_img}}" alt="{{$tj->name}}"></a>
                        <h5><a href="/book/{{$tj->id}}.html" target="_blank">{{$tj->name}}</a></h5>
                        <p>作者：{{$tj->author}}</p>
                        <p>状态：{{$tj->status?'已完结':'连载中'}}</p>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/side-->
    </div>
</div>
<!--/container-->
@stop

<!--container-->
@section('script')

@stop
