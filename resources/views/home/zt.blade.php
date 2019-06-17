@extends('layouts.default')
@section('title', '专题')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', env('M_APP_URL').'zt/')

@section('content')


<div class="container clearfix">
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/" title="{{env('APP_NAME')}}">首页</a> &gt; <a href="/zt/">小说专题大全</a> &gt;
    </div>
    <div class="wrap clearfix">
        <!--main-->
        <div class="tags-list">
            <ul class="clearfix">
                @foreach($tags as $tag)
                <li>
                    <a href="/zt/{{$tag->id}}.html">
                        <img src="{{env('IMG_URL').'/'.$tag->tag_img}}" alt="{{$tag->tagname}}">
                        <span>{{$tag->tagname}}小说</span>
                    </a>
                </li>
                @endforeach
            </ul>

        </div>
        <!--/main-->
    </div>
</div>

@stop

<!--container-->
@section('script')


@stop