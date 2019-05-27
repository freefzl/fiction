@extends('layouts.default')
@section('title', '首页')
@section('mobile', 'http://www.baidu.com')

@section('content')


<div class="container clearfix">
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/" title="首页">首页</a> &gt; <a href="/zt/">小说专题大全</a> &gt;
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