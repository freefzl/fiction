@extends('layouts.default')

@section('title', $chapter[0]->t_title)
@section('keywords', $chapter[0]->t_title.' '.$chapter[0]->book->protagonist.$chapter[0]->book->author)
@section('description', $chapter[0]->description)
@section('mobile', 'http://www.baidu.com')


@section('content')


    <div class="container clearfix">
        <div class="bread">
            <span>您的位置 : </span>
            <a href="/" title="享阅小说网">首页</a>
            &gt; <a href="/article" >小说资讯</a> &gt;
        </div>
        <div class="wrap clearfix">
            <!--primary-->
            <div class="news-info">
                <div class="title">
                    <h1>{{$chapter[0]->t_title}}</h1>
                    <p><span>时间：<em>{{$chapter[0]->created_at}}</em></span><span>编辑：<em>{{$chapter[0]->book->comment[0]->comment_name}}</em></span></p>
                </div>
                <div class="description">{{$chapter[0]->description}}</div>
                <div class="cover">
                    <p class="pic"><img class="lazy" src="{{env('IMG_URL').'/'.$chapter[0]->book->cover_img}}" alt="{{$chapter[0]->book->name}}">
                    <p class="stars">推荐指数：<span class="star"><i style="width:100%;">10分</i></span></p>
                    <p class="read"><a href="/book/{{$chapter[0]->book->id}}.html" target="_blank">{{$chapter[0]->book->name}}在线阅读</a></p>
                </div>
                <div class="content"><h3>{{$chapter[0]->book->name}} {{$chapter[0]->book->title}}  免费试读</h3>
                    {!! $chapter[0]->chapterContent !!}
                </div>

                <div class="book">
                    <dl class="clearfix">
                        <dt><a href="/book/{{$chapter[0]->book->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$chapter[0]->book->cover_img}}" alt="{{$chapter[0]->book->name}}"></a></dt>
                        <dd>

                            <h4><a href="/book/{{$chapter[0]->book->id}}.html">{{$chapter[0]->book->name}}</a></h4>
                            <p class="info"><span>作者：{{$chapter[0]->book->author}}</span><span>类型：{{$chapter[0]->book->type[0]->typename}}</span><span>状态：{{$chapter[0]->book->status?'已完结':'连载中'}}</span></p>
                            <p class="intro">{{$chapter[0]->book->synopsis}}</p>
                            <p class="star"><i style="width:100%;"></i></p>

                            <a class="view" href="/book/{{$chapter[0]->book->id}}.html" target="_blank">小说详情</a>

                        </dd>
                    </dl>				</div>				<div class="porn">
                    <ul class="clearfix">
                        @if(count($up))
                        <li>上一篇：<a class="pre_a" href="/article/{{$up[0]->id}}.html" >{{$up[0]->t_title}}</a> </li>
                        @endif
                        @if(count($down))
                        <li>下一篇：<a class="pre_a" href="/article/{{$down[0]->id}}.html" >{{$down[0]->t_title}}</a> </li>
                        @endif

                    </ul>

                </div>
                <div class="related">
                    <h3>相关文章</h3>
                    <ul class="clearfix">
                        @foreach($relateds as $related)
                        <li><a href="/article/{{$related->id}}.html" title="{{$related->t_title}}" target="_blank">{{$related->t_title}}</a><span>{{date('Y-m-d',strtotime($related->created_at))}}</span></li>
                        @endforeach

                    </ul>
                </div>
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

@stop


@section('script')

@stop
