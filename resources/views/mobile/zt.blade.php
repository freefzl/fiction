@extends('mobile.layouts.default')
@section('title', '首页')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')


@section('content')
    <div class="wrap">
        <div class="mod mod-tags">
            <!--main-->
            <div class="tags-list">
                <ul class="clearfix">
                    @foreach($tags['data'] as $item)
                    <li>
                        <a href="/zt/{{$item['id']}}.html" title="{{$item['tagname']}}小说" >
                            <mip-img src="{{env('IMG_URL').'/'.$item['tag_img']}}" alt="{{$item['tagname']}}小说"></mip-img>
                            <span>{{$item['tagname']}}小说</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="pages">
                    @if($tags['current_page']==1)
                    <span class="pageindex">第 {{$tags['current_page']}} 页</span><a href="{{$tags['next_page_url']}}" class="p-next">下一页</a>
                    @elseif($tags['current_page']==$tags['last_page'])
                        <a href="{{$tags['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$tags['current_page']}} 页</span>
                    @else
                        <a href="{{$tags['prev_page_url']}}" class="p-prev">上一页</a><span class="pageindex">第 {{$tags['current_page']}} 页</span><a href="{{$tags['next_page_url']}}" class="p-next">下一页</a>
                    @endif
                </div>
            </div>
            <!--/main-->
        </div>
    </div>
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt;
        <a href="/zt">专题</a> &gt;
    </div>
    <div class="cmargin"></div>


@stop


@section('script')

@stop