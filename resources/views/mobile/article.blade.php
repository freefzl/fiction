@extends('mobile.layouts.default')
@section('title', '小说资讯_')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('canonical', env('M_APP_URL').'article')


@section('content')
    <div class="mod mod-news">
        <div class="news-list">
            <ul class="clearfix">
                @foreach($articles['data'] as $item)
                <li><a  href="/article/{{$item['id']}}.html">{{$item['t_title']}}</a><span>{{date('m-d',strtotime($item['updated_at']))}}</span></li>
                @endforeach
            </ul>
            <div class="pages">

                @if($articles['current_page']==1)
                    <span class="pageindex">第 {{$articles['current_page']}} 页</span><a href="{{$articles['next_page_url']}}" class="p-next">下一页</a>
                @elseif($articles['current_page']==$articles['last_page'])
                    <a href="{{$articles['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$articles['current_page']}} 页</span>
                @else
                    <a href="{{$articles['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$articles['current_page']}} 页</span><a href="{{$articles['next_page_url']}}" class="p-next">下一页</a>
                @endif
            </div>
        </div>
        <!-- /new-news -->
        <!-- hot-news -->
        <div class="mod hot-news">
            <div class="mod-head">
                <h3>热门资讯</h3>
            </div>
            <div class="news-list">
                <ul class="clearfix">
                    @foreach($cbl['rmzxs'] as $item)
                        <li><a  href="/article/{{$item['id']}}.html">{{$item['t_title']}}</a><span>{{date('m-d',strtotime($item['updated_at']))}}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- /hot-news -->
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