@extends('layouts.default')
@section('title', '小说库')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')

@section('content')
<!--container-->
<div class="container clearfix">
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/" title="享阅小说网">首页</a>  &gt;
        <a href="/chapter/" >小说章节</a> &gt;
    </div>
    <div class="wrap clearfix">
        <!--main-->
        <div class="book-nav">
            <div class="clearfix">
                <p>小说类型：</p>
                <ul class="clearfix">
                    <li class="{{$_SERVER['REQUEST_URI']==='/chapter'?'on':''}}"><a href="/chapter" title="小说库">全部</a></li>
                    @foreach($types as $type)
                        <li class="{{$_SERVER['REQUEST_URI']==="/".$type->typedir.""?'on':''}}"><a href="/chapter" title="{{$type->typename}}">{{$type->typename}}<span></span></a></li>
                    @endforeach
                </ul>
            </div>
            <div class="clearfix">
                <p>写作进程：</p>
                <ul class="clearfix">
                    <li class="on"><a href="/book/book-0-0-0.html">全部</a></li>
                    <li class=""><a href="/book/book-0-1-0.html">连载中</a></li>
                    <li class=""><a href="/book/book-0-2-0.html">已完本</a></li> </ul>
            </div>
        </div>

        <div class="book-list">
            <h2>全部小说</h2>
            <ul class="clearfix">

                <li>
                    <a class="pic" href="/book/19039.html" target="_blank"><img class="lazy" src="static/picture/5p+t5oof5qyi77ya6ycu.jpg" alt="染情欢：逮个美男当驸马"></a>
                    <h5 class="tit"><a href="/book/19039.html" target="_blank">染情欢：逮个美男当驸马</a></h5>
                    <p class="info"><span>作者：妖鸠露</span><span>分类：总裁豪门</span>
                        <i class="finish">已完结</i>							</p>
                    <p class="intro">古越大将已经被容潜一刀砍了头，现如今群龙无首，肌肉发达的异域杀手乱了阵脚。猛烈的厮杀现在才开始。一盏茶后，这群人被北冥锡的人击杀完毕。血流成河，整片沙地都蔓延着浓郁的血腥味。北冥锡的人只留下两个，他口</p>
                    <a class="view" href="/book/19039.html" target="_blank">小说详情</a>
                </li>

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
