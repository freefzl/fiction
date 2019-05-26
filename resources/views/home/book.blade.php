@extends('layouts.default')
@section('title', '首页')
@section('mobile', 'http://www.baidu.com')

@section('content')
<!--container-->
<div class="container clearfix">
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/" title="享阅小说网">首页</a>  &gt;
        <a href="/book/" >小说库</a> &gt;
    </div>
    <div class="wrap clearfix">
        <!--main-->
        <div class="book-nav">
            <div class="clearfix">
                <p>小说类型：</p>
                <ul class="clearfix">

                    <li class="{{$_SERVER['REQUEST_URI']==='/book'?'on':''}}"><a href="/book" title="小说库">全部</a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/huanxiangyinen'?'on':''}}"><a href="/huanxiangyinen" title="幻想异能">幻想异能<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/dushizhichang'?'on':''}}"><a href="/dushizhichang" title="都市职场">都市职场<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/xuanhuanqihuan'?'on':''}}"><a href="/xuanhuanqihuan" title="玄幻奇幻">玄幻奇幻<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/gudaiyanqing'?'on':''}}"><a href="/gudaiyanqing" title="古代言情">古代言情<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/wuxiaxianxia'?'on':''}}"><a href="/wuxiaxianxia" title="武侠仙侠">武侠仙侠<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/lishijunshi'?'on':''}}"><a href="/lishijunshi" title="历史军事">历史军事<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/lingyikehuan'?'on':''}}"><a href="/lingyikehuan" title="灵异科幻">灵异科幻<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/youxijingji'?'on':''}}"><a href="/youxijingji" title="游戏竞技">游戏竞技<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/xiandaiyanqing'?'on':''}}"><a href="/xiandaiyanqing" title="现代言情">现代言情<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/chuanyuezhongsheng'?'on':''}}"><a href="/chuanyuezhongsheng" title="穿越重生">穿越重生<span></span></a></li>
                    <li class="{{$_SERVER['REQUEST_URI']==='/zongcaihaomen'?'on':''}}"><a href="/zongcaihaomen" title="总裁豪门">总裁豪门<span></span></a></li>
                </ul>
            </div>
        </div>
        <div class="book-list">
            <h2>全部小说</h2>
            <ul class="clearfix">
                @foreach($books as $book)
                <li>
                    <a class="pic" href="/book/{{$book->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$book->cover_img}}" alt="{{$book->name}}"></a>
                    <h5 class="tit"><a href="/book/{{$book->id}}.html" target="_blank">{{$book->name}}</a></h5>
                    <p class="info"><span>作者：{{$book->author}}</span><span>分类：总裁豪门</span>
                        <i class="finish">{{ $book->status?'已完结':'连载中'}}</i>
                    </p>
                    <p class="intro">{{$book->synopsis}}</p>
                    <a class="view" href="/book/{{$book->id}}.html" target="_blank">小说详情</a>
                </li>
                @endforeach
            </ul>
        </div>
        <!--main-->
    </div>
</div>
<!--/container-->
@stop

<!--container-->
@section('script')

    <script>
        // if(window.location.pathname);
    </script>

@stop
