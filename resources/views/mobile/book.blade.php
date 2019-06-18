@extends('mobile.layouts.default')
@section('title', '经典'.$books['typename'].'小说,好看的'.$books['typename'].'小说完结_')
@section('keywords', '网络小说在线推荐')
@section('description', '好看的'.$books['typename'].'小说推荐、经典的'.$books['typename'].'小说排行榜、完本'.$books['typename'].'小说精选免费阅读就在'.env('APP_NAME'))
@if(isset($books['typedir']))
    @section('canonical',env('M_APP_URL').$books['typedir'].'/')
@else
    @section('canonical',env('M_APP_URL').'book/')
@endif


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


                @if($books['current_page']==1)
                    <span class="pageindex">第 {{$books['current_page']}} 页</span><a href="{{$books['next_page_url']}}" class="p-next">下一页</a>
                @elseif($books['current_page']==$books['last_page'])
                    <a href="{{$books['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$books['current_page']}} 页</span>
                @else
                    <a href="{{$books['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$books['current_page']}} 页</span><a href="{{$books['next_page_url']}}" class="p-next">下一页</a>
                @endif
            </div>
            <!--/main-->
        </div>
    </div>
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        <a href="/book/" >小说库</a> &gt;
    </div>

    <div class="cmargin"></div>

@stop


@section('script')

@stop