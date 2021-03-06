@extends('mobile.layouts.default')
@section('title', '绝世武魂最新章节_男频小说排行榜推荐_')
@section('keywords', '网络小说在线推荐')
@section('description', env('APP_NAME').'(www.linchengxs.com)为广大书友提供男频、女频小说排行榜推荐，'.env('APP_NAME').'为你推荐热门男频小说《绝世武魂》，绝世武魂是作者洛城东的一本玄幻小说。')
@section('canonical', env('M_APP_URL'))


@section('content')
<div class="wrap">
    <!--slide-->
    <div class="swiper-container">
        <mip-carousel
                autoplay
                layout="responsive"
                width="530"
                height="240"
                buttonController>
            @foreach($banner_books as $item)
                @if(isset($item[0]['id'])&&$item[0]['id'])
            <a href="/book/{{$item[0]['id']}}.html" ><mip-img src="{{env('IMG_URL').'/'.$item['banners']}}" alt="{{$item[0]['name']}}"></mip-img></a>
                @endif
            @endforeach

        </mip-carousel>
    </div>
    <!-- search -->
    <div class="bar">
        <mip-form  method="post" url="/search" target="_blank" >
            {{ csrf_field() }}
            <input type="text" name="q" id="q" placeholder="请输入书名" class="search-key">
            <input type="hidden" name="modelid" value="13">
            <button type="submit" class="search-btn" id="search-btn">Go</button>
        </mip-form>
    </div>
    <!-- nav -->
    <div class="nav">
        <a href="/top/" >
            <i class="iconfont">&#xe7bd;</i>
            <span>排行榜</span>
        </a>
        <a href="/book/" >
            <i class="iconfont">&#xe809;</i>
            <span>小说库</span>
        </a>
        <a href="/chapter/" >
            <i class="iconfont">&#xe70f;</i>
            <span>章节目录</span>
        </a>
        <a href="/article/" >
            <i class="iconfont">&#xe63a;</i>
            <span>资讯</span>
        </a>
    </div>
    <!-- rec-book -->
    <div class="mod rec-book">
        <div class="mod-head">
            <h3>编辑推荐</h3>
        </div>
        <div class="book-slide">
            <ul class="clearfix">
                @foreach($bjtj as $item)
                <li>
                    <a href="/book/{{$item->id}}.html" title="{{$item->name}}" >
                        <mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img>
                        <span>{{$item->name}}</span>
                        <em><aria>作者：</aria>{{$item->author}}</em>
                    </a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <!-- /rec-book -->
    <!-- hot-book -->
    <div class="mod hot-book">
        <div class="mod-head">
            <h3>热门小说</h3>
        </div>
        <div class="book-slide">
            <ul class="clearfix">

                @foreach($rmxs as $item)
                    <li>
                        <a href="/book/{{$item->id}}.html" title="{{$item->name}}" >
                            <mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img>
                            <span>{{$item->name}}</span>
                            <em><aria>作者：</aria>{{$item->author}}</em>
                        </a>
                    </li>
                @endforeach


            </ul>
        </div>
    </div>
    <!-- /hot-book -->
    <!-- new-topic -->
    <div class="mod new-topic">
        <div class="mod-head">
            <h3>热门专题</h3>
            <a href="/zt/" title="最新专题" >更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <div class="tags-list">
            <ul class="clearfix">
                @foreach($zxzt as $item)
                <li>
                    <a href="/zt/{{$item->id}}.html" title="{{$item->tagname}}小说" ><mip-img src="{{env('IMG_URL').'/'.$item->tag_img}}" alt="{{$item->tagname}}"><span>{{$item->tagname}}小说</span></mip-img></a>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
    <!-- /new-topic -->
    <!-- new-book -->
    <div class="mod new-book">
        <div class="mod-head">
            <h3>最新小说</h3>
            <a href="/book/" title="最新小说" >更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <div class="book-list">
            <ul class="clearfix">
                @foreach($zxxs as $item)
                <li>
                    <div class="pic">
                        <mip-img src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img>
                    </div>
                    <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
                    <p class="intro">{{$item->synopsis}}</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                        <em class="finish">{{$item['status']?'已完结':'连载中'}}</em>                            </p>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /new-book -->
    <!-- new-news -->
    <div class="mod new-news">
        <div class="mod-head">
            <h3>最新资讯</h3>
            <a href="/article/" title="最新资讯" >更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <div class="news-list">
            <ul class="clearfix">
                @foreach($zxzx as $item)
                <li><a href="/article/{{$item->id}}.html" title="{{$item->t_title}}" data-type="mip">{{$item->t_title}}</a><span>{{date('m-d',strtotime($item->updated_at))}}</span></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- /new-news -->
    <!-- rank -->
    <div class="mod new-news novel-similar">
        <div class="mod-head">
            <h3>小说排行榜</h3>
            <a href="/top/" title="小说排行榜" data-type="mip">更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <mip-vd-tabs>

            <ol class="clearfix">
                @foreach($phb as $item)
                <li class="@if($loop->first) on @endif">{{$item[0]}}</li>
                @endforeach
            </ol>
            @foreach($phb as $item)
            <div class="mod-body">
                <div class="top-list">
                    <ul class="clearfix">
                        @foreach($item['books'] as $k=>$val)
                        <li class="s{{$k+1}}">
                            <div class="pic">
                                <mip-img src="{{env('IMG_URL').'/'.$val->cover_img}}" alt="{{$val->name}}"></mip-img>
                            </div>
                            <a class="tit" href="/book/{{$val->id}}.html" title="{{$val->name}}" >{{$val->name}}</a>
                            <p class="intro">{{$val->synopsis}}</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>{{$val->author}}</span><em class="type">{{$val->type[0]->typename}}</em>
                                <em class="serial">{{$val->status?'已完结':'连载中'}}</em>
                            </p>
                            <i class="num"><em>TOP{{$k+1}}</em></i>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endforeach
        </mip-vd-tabs>
    </div>
    <!-- /rank -->
</div>
<div class="cmargin"></div>


@stop


@section('script')

@stop