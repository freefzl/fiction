@extends('layouts.default')
@section('title', '排行榜')
@section('keywords', '小说 排行榜')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', env('M_APP_URL'))

@section('content')

    <!--container-->
    <div class="container">
        <div class="bread">
            <span>您的位置 : </span>
            <a href="/" title="{{env('APP_NAME')}}">首页</a>  &gt;
            <a href="{{url('top')}}" >排行榜</a> &gt;
        </div>
        <div class="wrap clearfix">
            <!--side-->
            <div class="top-nav">
                <p>小说排行榜</p>
                <ul class="clearfix">
                    <li class="on"><a href="/top">小说排行榜总览</a></li>
                    @foreach($types as $type)
                    <li><a href="/top/{{$type->typedir}}" title="{{$type->typename}}">{{$type->typename}}小说排行<span></span></a></li>
                    @endforeach
                </ul>
            </div>
            <!--/side-->
            <!--primary-->
            <div class="top-list">
                <div class="clearfix">
                    <div class="rank-item">
                        <h3>推荐榜</h3>
                        <ul>
                            @foreach($recommend as $k=>$v)
                                @if ($loop->first)
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <a class="pic" href="/book/{{$v->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></a>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                        <p class="author">作者：{{$v->author}}</p>
                                        <p class="status">状态：{{$v->status?'已完结':'连载中'}}</p>
                                    </li>
                                @else
                                </li>
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                    </li>
                                @endif

                            @endforeach
                        </ul>
                    </div>
                    <div class="rank-item">
                        <h3>完结榜</h3>
                        <ul>
                            @foreach($over as $k=>$v)
                                @if ($loop->first)
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <a class="pic" href="/book/{{$v->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></a>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                        <p class="author">作者：{{$v->author}}</p>
                                        <p class="status">状态：{{$v->status?'已完结':'连载中'}}</p>
                                    </li>
                                    @else
                                    </li>
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="rank-item">
                        <h3>人气榜</h3>
                        <ul>
                            @foreach($moods as $k=>$v)
                                @if ($loop->first)
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <a class="pic" href="/book/{{$v->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></a>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                        <p class="author">作者：{{$v->author}}</p>
                                        <p class="status">状态：{{$v->status?'已完结':'连载中'}}</p>
                                    </li>
                                    @else
                                    </li>
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="rank-item">
                        <h3>更新榜</h3>
                        <ul>
                            @foreach($update as $k=>$v)
                                @if ($loop->first)
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <a class="pic" href="/book/{{$v->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></a>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                        <p class="author">作者：{{$v->author}}</p>
                                        <p class="status">状态：{{$v->status?'已完结':'连载中'}}</p>
                                    </li>
                                    @else
                                    </li>
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>
                    <div class="rank-item">
                        <h3>女生榜</h3>
                        <ul>
                            @foreach($girl as $k=>$v)
                                @if ($loop->first)
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <a class="pic" href="/book/{{$v->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></a>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                        <p class="author">作者：{{$v->author}}</p>
                                        <p class="status">状态：{{$v->status?'已完结':'连载中'}}</p>
                                    </li>
                                    @else
                                    </li>
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="rank-item">
                        <h3>男生榜</h3>
                        <ul>
                            @foreach($boy as $k=>$v)
                                @if ($loop->first)
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <a class="pic" href="/book/{{$v->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></a>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                        <p class="author">作者：{{$v->author}}</p>
                                        <p class="status">状态：{{$v->status?'已完结':'连载中'}}</p>
                                    </li>
                                    @else
                                    </li>
                                    <li class="s{{$k+1}}">
                                        <em class="num">{{$k+1}}</em>
                                        <h5 class="tit"><a href="/book/{{$v->id}}.html" target="_blank">{{$v->name}}</a></h5>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--/primary-->
        </div>
    </div>
    <!--/container-->

@stop

<!--container-->
@section('script')

@stop
