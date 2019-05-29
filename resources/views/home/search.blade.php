@extends('layouts.default')
@section('title', '首页')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')

@section('content')
    <div class="container clearfix">
        <div class="bread">
            <span>您的位置 : </span>
            <a href="/" title="享阅小说网">享阅小说网</a>  &gt;
            {{$search}} &gt;
        </div>
        <div class="wrap clearfix">

            <div class="search-list">
               @if(count($books))
                <ul class="clearfix">
                    @foreach($books as $book)
                        <li>
                            <a class="pic" href="/book/{{$book->id}}.html"><img src="{{env('IMG_URL').'/'.$book->cover_img}}" alt="{{$book->name}}"></a>
                            <h5 class="tit"><a href="/book/{{$book->id}}.html">{{$book->name}}</a></h5>
                            <p class="intro">{{$book->synopsis}}</p>
                            <p class="info">作者：{{$book->author}}&nbsp;&nbsp;分类：{{$book->type[0]->typename}}&nbsp;&nbsp;更新时间：{{$book->updated_at}}</p>
                        </li>
                    @endforeach
                </ul>
                @else
                    <div class="result"><span>{{$search}}</span>还未上架，小编为您推荐最新热门小说</div>
                    <ul class="clearfix">
                        @foreach($rands as $item)
                            <li>
                                <a class="pic" href="/book/{{$item->id}}.html"><img src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></a>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html">{{$item->name}}</a></h5>
                                <p class="intro">{{$item->synopsis}}</p>
                                <p class="info">作者：{{$item->author}}&nbsp;&nbsp;分类：{{$item->type[0]->typename}}&nbsp;&nbsp;更新时间：{{$item->updated_at}}</p>
                            </li>
                        @endforeach
                    </ul>
                @endif




            </div>

            <!--main-->
        </div>
    </div>
@stop

<!--container-->
@section('script')

@stop



