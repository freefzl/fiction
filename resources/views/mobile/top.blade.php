@extends('mobile.layouts.default')
@section('title', '排行榜_')
@section('keywords', '小说,排行榜')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('canonical', env('M_APP_URL').'top/')


@section('content')
    <div class="wrap">
        <!--main-->
        <!--top-nav-->
        <div class="mod mod-top-nav">
            <div class="top-nav">
                <ul class="clearfix">
                    @foreach($types as $item)
                    <li><a href="/top/{{$item->typedir}}/" title="{{$item->typename}}">{{$item->typename}}榜<span></span></a></li>

                    @endforeach
                </ul>
            </div>
        </div>
        <!--top-index-->
        <div class="mod mod-top-index">
            <div class="mod-head">
                <h2>推荐榜</h2>
            </div>
            <div class="top-index">
                <ul class="clearfix">
                    @foreach($recommend as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt=""></mip-img></div>
                                <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                                <p class="intro">{{$item->name}}</p>
                                <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                                    <em class="serial">{{$item->status?'已完结':'连载中'}}</em>
                                </p>
                                <i class="num"><em>{{$k+1}}</em></i>
                            </li>
                            @else
                            <li class="s{{$k+1}}">
                                <h5 class="tit"><a href="/book/{{$item->id}}.html">{{$item->name}}</a></h5>
                                <i  class="num"><em>{{$k+1}}</em></i>
                            </li>
                            @endif


                    @endforeach


                </ul>
            </div>
        </div>
        <!--top-index-->
        <div class="mod mod-top-index">
            <div class="mod-head">
                <h2>完结榜</h2>
            </div>
            <div class="top-index">
                <ul class="clearfix">
                    @foreach($over as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt=""></mip-img></div>
                                <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                                <p class="intro">{{$item->name}}</p>
                                <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                                    <em class="serial">{{$item->status?'已完结':'连载中'}}</em>
                                </p>
                                <i class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <h5 class="tit"><a href="/book/{{$item->id}}.html">{{$item->name}}</a></h5>
                                <i  class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>
        <!--top-index-->
        <div class="mod mod-top-index">
            <div class="mod-head">
                <h2>人气榜</h2>
            </div>
            <div class="top-index">
                <ul class="clearfix">
                    @foreach($moods as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt=""></mip-img></div>
                                <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                                <p class="intro">{{$item->name}}</p>
                                <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                                    <em class="serial">{{$item->status?'已完结':'连载中'}}</em>
                                </p>
                                <i class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <h5 class="tit"><a href="/book/{{$item->id}}.html">{{$item->name}}</a></h5>
                                <i  class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <!--top-index-->
        <div class="mod mod-top-index">
            <div class="mod-head">
                <h2>更新榜</h2>
            </div>
            <div class="top-index">
                <ul class="clearfix">
                    @foreach($update as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt=""></mip-img></div>
                                <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                                <p class="intro">{{$item->name}}</p>
                                <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                                    <em class="serial">{{$item->status?'已完结':'连载中'}}</em>
                                </p>
                                <i class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <h5 class="tit"><a href="/book/{{$item->id}}.html">{{$item->name}}</a></h5>
                                <i  class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <!--top-index-->
        <div class="mod mod-top-index">
            <div class="mod-head">
                <h2>女生榜</h2>
            </div>
            <div class="top-index">
                <ul class="clearfix">
                    @foreach($girl as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt=""></mip-img></div>
                                <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                                <p class="intro">{{$item->name}}</p>
                                <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                                    <em class="serial">{{$item->status?'已完结':'连载中'}}</em>
                                </p>
                                <i class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <h5 class="tit"><a href="/book/{{$item->id}}.html">{{$item->name}}</a></h5>
                                <i  class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <!--top-index-->
        <div class="mod mod-top-index">
            <div class="mod-head">
                <h2>男生榜</h2>
            </div>
            <div class="top-index">
                <ul class="clearfix">
                    @foreach($boy as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt=""></mip-img></div>
                                <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                                <p class="intro">{{$item->name}}</p>
                                <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                                    <em class="serial">{{$item->status?'已完结':'连载中'}}</em>
                                </p>
                                <i class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <h5 class="tit"><a href="/book/{{$item->id}}.html">{{$item->name}}</a></h5>
                                <i  class="num"><em>{{$k+1}}</em></i>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>
        </div>

        <!--/main-->
    </div>
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        <a href="/zt/">专题</a> &gt;
    </div>
    <div class="cmargin"></div>


@stop


@section('script')

@stop