@extends('mobile.layouts.default')
@section('title', isset($model['typename']['typename'])&&$model['typename'] !=''?'章节目录_'.$model['typename']['typename'].'_':'章节目录_')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')

@if($tid==0 && $did==0 && $sid==0)
    @section('canonical', env('M_APP_URL').'chapter/')
@else
    @section('canonical', env('M_APP_URL').'chapter/'.$tid.'-'.$did.'-'.$sid.'.html')
@endif

@section('content')


    <div class="mod mod-book">
        <div class="book-nav">
            <div class="clearfix">
                <ul class="clearfix">
                    <li class="@if($tid==0) on @endif"><a href="/chapter/0-{{$did}}-{{$sid}}.html" title="章节目录">全部</a></li>
                    @foreach($types as $type)
                        <li class="@if($tid==$type->id) on @endif"><a href="/chapter/{{$type->id}}-{{$did}}-{{$sid}}.html" title="{{$type->typename}}">{{$type->typename}}<span></span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="clearfix">
                <ul class="clearfix">
                    <li class="@if($did==0) on @endif"><a href="/chapter/{{$tid}}-0-{{$sid}}.html">全部</a></li>
                    <li class="@if($did==1) on @endif"><a href="/chapter/{{$tid}}-1-{{$sid}}.html">今天</a></li>
                    <li class="@if($did==2) on @endif"><a href="/chapter/{{$tid}}-2-{{$sid}}.html">三日内</a></li>
                    <li class="@if($did==3) on @endif"><a href="/chapter/{{$tid}}-3-{{$sid}}.html">七日内</a></li>
                    <li class="@if($did==4) on @endif"><a href="/chapter/{{$tid}}-4-{{$sid}}.html">一月内</a></li>
                </ul>
            </div>
            <div class="clearfix">
                <ul class="clearfix">
                    <li class="@if($sid==0) on @endif"><a href="/chapter/{{$tid}}-{{$did}}-0.html">全部</a></li>
                    <li class="@if($sid==1) on @endif"><a href="/chapter/{{$tid}}-{{$did}}-1.html">连载中</a></li>
                    <li class="@if($sid==2) on @endif"><a href="/chapter/{{$tid}}-{{$did}}-2.html">已完本</a></li>
                </ul>
            </div>
        </div>
        <div class="book-list">
            <div class="book-list">
                <ul class="clearfix">
                    @foreach($model['data'] as $item)
                    <li>
                        <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item['cover_img']}}" alt="{{$item['name']}}"></mip-img></div>
                        <a class="tit" href="/{{$item['id']}}/" title="{{$item['name']}}" >{{$item['name']}}</a>
                        <p class="intro">{{$item['synopsis']}}</p>
                        <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item['author']}}</span><em class="type">{{$item['type'][0]['typename']??''}}</em>
                            <em class="finish">{{$item['status']?'已完结':'连载中'}}</em>
                        </p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="pages">


                @if($model['current_page']==1)
                    <span class="pageindex">第 {{$model['current_page']}} 页</span><a href="{{$model['next_page_url']}}" class="p-next">下一页</a>
                @elseif($model['current_page']==$model['last_page'])
                    <a href="{{$model['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$model['current_page']}} 页</span>
                @else
                    <a href="{{$model['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$model['current_page']}} 页</span><a href="{{$model['next_page_url']}}" class="p-next">下一页</a>
                @endif
            </div>
            <!--/main-->
        </div>
    </div>
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        <a href="/chapter/" >章节目录</a> &gt;
    </div>

    <div class="cmargin"></div>

@stop


@section('script')

@stop