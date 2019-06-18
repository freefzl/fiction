@extends('mobile.layouts.default')
@section('title', '小说资讯_'.$chapter[0]->t_title.'_')
@section('keywords', $chapter[0]->t_title.','.$chapter[0]->book->protagonist.','.$chapter[0]->book->author)
@section('description', $chapter[0]->book->synopsis)
@section('canonical', env('M_APP_URL').'article/'.$chapter[0]->id.'.html')
@php
    $HTTP_REFERER = $_SERVER['HTTP_REFERER'];
    $is_article = (int)explode('/',$HTTP_REFERER)[3];
@endphp

@section('content')
    <div class="wrap">
        <!--main-->
        <!-- new-news -->
        <div class="mod mod-news-info">
            <div class="news-info">
                <div class="title">
                    <h2>{{$chapter[0]->t_title}}</h2>
                    <p><span><aria>时间：</aria>{{$chapter[0]->updated_at}}</span><span><aria>编辑：</aria>{{$chapter[0]->book->comment[0]->comment_name}}</span></p>
                </div>
                <div class="description">{{$chapter[0]->description}}</div>
                <div class="cover">
                    <p class="pic"><mip-img class="lazy" src="{{env('IMG_URL').'/'.$chapter[0]->book->cover_img}}" alt="{{$chapter[0]->book->name}}" popup></mip-img></p>
                    <p class="stars">推荐指数：<span class="star"><i>10分</i></span></p>
                    <p class="read"><a href="@if($is_article==0) /book/{{$chapter[0]->book->id}}.html @else /{{$chapter[0]->book->id}}/ @endif" >《{{$chapter[0]->book->name}}》在线阅读</a></p>
                </div>			<mip-showmore maxheight='screen:0.8' bottomshadow="1" animatetime='.3' id="content">
                    <div class="content"><h3>《{{$chapter[0]->book->name}}》 {{$chapter[0]->book->title}} 免费试读</h3>
                        {!! $chapter[0]->chapterContent !!}
                    </div>
                </mip-showmore>
                <div class="content-more" on="tap:content.toggle"><button>阅读全文</button></div>
                <div class="show-fpage">
                    @if(count($up))
                    <a href="/article/{{$up[0]->id}}.html" class="current">上一页</a>
                    @endif
                    @if(count($down))
                    <a href="/article/{{$down[0]->id}}.html" class="current">下一页</a>
                    @endif
                </div>
                <div class="book">
                    <dl class="clearfix">
                        <dt><a href="@if($is_article==0) /book/{{$chapter[0]->book->id}}.html @else /{{$chapter[0]->book->id}}/ @endif"><mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$chapter[0]->book->cover_img}}" alt="{{$chapter[0]->book->name}}"></mip-img></a></dt>
                        <dd>
                            <h4><a href="@if($is_article==0) /book/{{$chapter[0]->book->id}}.html @else /{{$chapter[0]->book->id}}/ @endif" title="{{$chapter[0]->t_tile}}" >{{$chapter[0]->book->name}}</a></h4>
                            <p class="intro">{{$chapter[0]->book->synopsis}}</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>{{$chapter[0]->book->author}}</span><span><aria>类别：</aria>{{$chapter[0]->book->type[0]->typename}}</span></p>
                            <a class="view" href="@if($is_article==0) /book/{{$chapter[0]->book->id}}.html @else /{{$chapter[0]->book->id}}/ @endif" >小说详情</a>
                        </dd>
                    </dl>				</div>
            </div>
        </div>
        <div class="information_box" id="information">
            <div class="found_list">
                <ul class="found_list_ul">
                    <mip-list src="https://5088h.anyoy.com/index.php?g=api&m=book&a=getBook&&model=fixed&count=4&mip=1" preload>
                        <template type="mip-mustache">

                        </template>
                    </mip-list>
                </ul>
            </div>
        </div>
        <!-- rerated-news -->
        <div class="mod rerated-news">
            <div class="mod-head">
                <h3>相关文章</h3>
            </div>
            <div class="news-list">
                <ul class="clearfix">
                    @foreach($cbl['rmzxs'] as $item)
                    <li><a href="/article/{{$item->id}}.html" title="{{$item->t_title}}" >{{$item->t_title}}</a><span>{{date('m-d',strtotime($item->updated_at))}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- new-book -->
        <div class="mod new-book">
            <div class="mod-head">
                <h3>最新小说</h3>
            </div>
            <div class="book-slide">
                <ul class="clearfix">
                    @foreach($cbl['zxxss'] as $item)
                    <li>
                        <a href="@if($is_article==0) /book/{{$chapter[0]->book->id}}.html @else /{{$chapter[0]->book->id}}/ @endif" title="{{$item->name}}" >
                            <mip-img layout="responsive" width="200" height="266" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img>
                            <span>{{$item->name}}</span>
                            <em><aria>作者：</aria>{{$item->author}}</em>
                        </a>
                    </li>
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
        <a href="/article/">资讯</a> &gt;
    </div>
    <div class="cmargin"></div>


@stop


@section('script')

@stop