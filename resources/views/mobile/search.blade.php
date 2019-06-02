@extends('mobile.layouts.default')
@section('title', '搜索')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')


@section('content')
    <div class="wrap">
        <div class="mod mod-search">
            <div class="search-list">
                @if(count($books))
                <div class="result"><span> {{$search}}</span>共<em>{{count($books)}}</em>个相关结果：</div>
                <ul class="clearfix">

                        @foreach($books as $item)
                        <li>
                            <mip-img class="pic" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img>
                            <a class="tit" href="/book/{{$item->id}}.html">{{$item->name}}</a>
                            <p class="intro">  {{$item->synopsis}}</p>
                            <p class="info"><span><aria>作者：</aria>{{$item->author}}</span><em class="type">{{$item->type[0]->ttypename}}</em></p>
                        </li>
                        @endforeach


                </ul>
                @else
                    <div class="result"><span>{{$search}}</span>共<em>{{count($books)}}</em>个相关结果： 小编为你推荐了热门小说</div>
                    <ul class="clearfix">

                        @foreach($rands as $item)
                            <li>
                                <mip-img class="pic" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img>
                                <a class="tit" href="/book/{{$item->id}}.html">{{$item->name}}</a>
                                <p class="intro">  {{$item->synopsis}}</p>
                                <p class="info"><span><aria>作者：</aria>{{$item->author}}</span><em class="type">{{$item->type[0]->ttypename}}</em></p>
                            </li>
                        @endforeach


                    </ul>
                @endif
            </div>
        </div>
    </div>
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        搜索结果 &gt; {{$search}}
    </div>
    <div class="cmargin"></div>


@stop


@section('script')

@stop