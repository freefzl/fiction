@extends('mobile.layouts.default')
@section('title', '专题 - '.$tag->tagname.'小说')
@section('keywords', $tag->tagname.'小说'  )
@section('description', $tag->tag_synopsis)
@section('mobile', 'http://www.baidu.com')


@section('content')
    <div class="wrap">
        <!--main-->
        <!-- tags-info -->
        <div class="mod mod-tags-info">
            <div class="tags-info">
                <dl class="clearfix">
                    <dt><mip-img src="{{env('IMG_URL').'/'.$tag->tag_img}}" alt="{{$tag->tagname}}小说专题"></mip-img></dt>
                    <dd>
                        <h2>{{$tag->tagname}}小说</h2>
                        <p><span>更新时间：{{$tag->updated_at}}</span><span>共<em>{{$count}}</em>本相关小说</span></p>
                        <section>
                            <aria>专题简介：</aria>
                            <mip-showmore maxheight='80' bottomshadow="1" animatetime='.3' id="intro">
                                <article>{{$tag->tag_synopsis}}</article>
                            </mip-showmore>
                            <div on="tap:intro.toggle" class="intro-more" data-closeclass="mip-intro-open" data-closetext="收起内容">
                                <i class="show">展开</i>
                                <i class="hidden">收起</i>
                            </div>
                        </section>
                        <ul class="clearfix">
                            @foreach($tags as $item)
                            <li class="cur"><a href="/zt/{{$item->id}}.html" title="{{$item->tagname}}小说" >{{$item->tagname}}小说</a></li>
                            @endforeach
                        </ul>
                    </dd>
                </dl>
            </div>
        </div>
        <!-- tags-data -->
        <div class="mod tags-data">
            <div class="book-list">
                <ul class="clearfix">
                    @foreach($books as $k=>$item)
                    <li class="s{{$k}}">
                        <div class="pic"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img></div>
                        <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                        <p class="intro">{{$item->synopsis}}</p>
                        <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                            <em class="finish">{{$item->status?'已完结':'连载中'}}</em>                        </p>
                        <i class="num">TOP{{$k}}</i>
                    </li>
                   @endforeach
                </ul>

            </div>
        </div>
        <!-- new-topic -->
        <div class="mod new-topic">
            <div class="mod-head">
                <h3>最新专题</h3>
                <a href="/zt/">更多</a>
            </div>
            <div class="tags-list">
                <ul class="clearfix">
                    @foreach($new_tags as $item)
                    <li>
                        <a href="/zt/{{$item->id}}.html">
                            <mip-img src="{{env('IMG_URL').'/'.$item->tag_img}}" alt="{{$item->tagname}}小说"></mip-img>
                            <span>{{$item->tagname}}小说</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/main-->
    </div>
    <!--bread-->
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        <a href="/zt">专题</a> &gt; {{$tag->tagname}}小说 &gt;
    </div>
    <div class="cmargin"></div>


@stop


@section('script')

@stop