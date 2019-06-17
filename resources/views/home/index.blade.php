@extends('layouts.default')
@section('title', '绝世武魂最新章节_男频小说排行榜推荐_')
@section('keywords', '网络小说在线推荐')
@section('description', env('APP_NAME').'(www.linchengxs.com)为广大书友提供男频、女频小说排行榜推荐，'.env('APP_NAME').'为你推荐热门男频小说《绝世武魂》，绝世武魂是作者洛城东的一本玄幻小说。')
@section('mobile', env('M_APP_URL'))

@section('content')
    <div class="container clearfix">
        <!--mod-->
        <div class="wrap box1 clearfix">
            <!--category-->
            <div class="category">
                <ul class="clearfix">
                    @foreach($types as $type)
                    <li><a href="/{{$type->typedir}}" title="{{$type->typename}}小说大全">{{$type->typename}}</a></li>
                    @endforeach
                </ul>
            </div>
            <!--focus-->
            <div class="focus">
                <div class="banner">
                    <div class="banner-box">
                        <ul class="banner-img">
                            @foreach($banner_books as $banner_book)
                            <li><a href="/book/{{$banner_book->id}}.html" title="{{$banner_book->name}}免费阅读 {{$banner_book->author}}小说全文在线阅读" target="_blank"><img src="{{env('IMG_URL').'/'.$banner_book->banners}}" alt="{{$banner_book->name}}"></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <ul class="banner-nav">
                        @foreach($banner_books as $banner_book)
                        <li  class="@if($loop->first) selected @endif">
                            <h4>{{$banner_book->name}}</h4>
                        </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <!--/box1-->
        <!--box2-->
        <div class="wrap box2 clearfix">
            <div class="top-news">
                <ul class="clearfix">
                    @foreach($tj_chapter as $item)
                        @if($item->book != null)
                    <li>
                        <h4><a href="/article/{{$item->id}}.html" target="_blank">{{mb_substr($item->t_title,0,15)}}</a></h4>
                        <p>{{$item->description}}</p>
                    </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/box2-->
        <!--box3-->
        <div class="wrap box3 clearfix">
            <div class="rec-book">
                <h3>编辑推荐</h3>
                <div id="carousel1" class="carousel">
                    <div class="carousel-img">
                        @foreach($tj_firsts as $tj_first)
                        <img class="lazy" src="{{env('IMG_URL').'/'.$tj_first->cover_img}}" data-url="/book/{{$tj_first->id}}.html" alt="{{$tj_first->name}}">
                        @endforeach
                    </div>
                    <ul class="carousel-nav">
                        @foreach($tj_firsts as $tj_first)
                        <li>
                            <h4><a href="/book/{{$tj_first->id}}.html" target="_blank">{{$tj_first->name}}</a></h4>
                            <p class="author">{{$tj_first->author}}</p>
                            <p class="info"><span class="type">{{$tj_first->name}}</span>
                                <span class="@if($tj_first->status) finish @else serial @endif">{{$tj_first->status?'已完结':'连载中'}}</span>
                            </p>
                            <p class="intro">{{$tj_first->synopsis}}</p>
                            <a class="view" href="/book/{{$tj_first->id}}.html" target="_blank">章节详情</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="rec-list">
                    <ul>
                        @foreach($tj_books as $item)
                        <li>
                            <a class="pic" href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></a>
                            <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                            <p class="intro">{{$item->synopsis}}</p>
                            <p class="info"><span>作者：{{$item->author}}</span><em>{{$item->type[0]->typename}}</em></p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="latest-news">
                <h3>小说资讯</h3>
                <ul>
                    @foreach($chapters as $item)
                        @if($item->book != null)
                    <li><em>{{date('m-d',strtotime($item->created_at))}}</em><a href="/article/{{$item->id}}.html" target="_blank" title="{{$item->t_title}} ">{{$item->t_title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="wrap box3 clearfix">
            <div class="rec-book">
                <h3>热门小说</h3>
                <div id="carousel2" class="carousel">
                    <div class="carousel-img">
                        @foreach($rm_firsts as $item)
                            <img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" data-url="/book/{{$item->id}}.html" alt="{{$item->name}}">
                        @endforeach


                    </div>
                    <ul class="carousel-nav">
                        @foreach($rm_firsts as $item)
                            <li>
                                <h4><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h4>
                                <p class="author">{{$item->author}}</p>
                                <p class="info"><span class="type">{{$item->name}}</span>
                                    <span class="@if($item->status) finish @else serial @endif">{{$item->status?'已完结':'连载中'}}</span>
                                </p>
                                <p class="intro">{{$item->synopsis}}</p>
                                <a class="view" href="/book/{{$item->id}}.html" target="_blank">章节详情</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="rec-list">
                    <ul>
                        @foreach($rm_books as $item)
                            <li>
                                <a class="pic" href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></a>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                                <p class="intro">{{$item->synopsis}}</p>
                                <p class="info"><span>作者：{{$item->author}}</span><em>{{$item->type[0]->typename}}</em></p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="hot-tags">
                <h3>热门专题</h3>
                <p class="clearfix">
                    @foreach($tags as $item)
                    <a href="/zt/{{$item->id}}.html" title="{{$item->tagname}}小说" target="_blank">{{$item->tagname}}小说</a>
                    @endforeach
                </p>
            </div>
        </div>
        <!--/box3-->
        <!--box4-->
        <div class="wrap box4 clearfix">

            <div class="new-book" style="margin-top:0">
                <h3>最新小说</h3>
                <ol class="clearfix">
                    <li class="on">全部</li>
                    @foreach($news as $item)
                    <li>{{$item->typename}}</li>
                    @endforeach
                </ol>

                <ul class="clearfix">
                    @foreach($alls as $item)
                    <li>
                        <a href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"><span>{{$item->name}}</span></a>
                        <i class="serial">{{$item->status?'已完结':'连载中'}}</i>
                    </li>
                    @endforeach
                </ul>

                @foreach($news as $val)

                <ul class="clearfix" style="display: none;">
                    @foreach($val->books as $item)
                    <li>
                        <a href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"><span>{{$item->name}}</span></a>
                        <i class="serial">{{$item->status?'已完结':'连载中'}}</i>
                    </li>
                    @endforeach
                </ul>

                @endforeach


            </div>
        </div>
        <!--/box4-->

        <!--box5-->
        <div class="wrap box5 clearfix">
            <div class="rank">
                <h3>推荐榜</h3>
                <ul>
                    @foreach($tjbs as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <a class="pic" href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></a>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                                <p class="author">作者：{{$item->author}}</p>
                                <p class="status">状态：{{$item->status?'已完结':'连载中'}}</p>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                            </li>
                         @endif
                    @endforeach

                </ul>
            </div>
            <div class="rank">
                <h3>人气榜</h3>
                <ul>
                    @foreach($rqbs as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <a class="pic" href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></a>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                                <p class="author">作者：{{$item->author}}</p>
                                <p class="status">状态：{{$item->status?'已完结':'连载中'}}</p>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="rank">
                <h3>女生榜</h3>
                <ul>
                    @foreach($girls as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <a class="pic" href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></a>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                                <p class="author">作者：{{$item->author}}</p>
                                <p class="status">状态：{{$item->status?'已完结':'连载中'}}</p>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="rank">
                <h3>男生榜</h3>
                <ul>

                    @foreach($boys as $k=>$item)
                        @if($loop->first)
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <a class="pic" href="/book/{{$item->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></a>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                                <p class="author">作者：{{$item->author}}</p>
                                <p class="status">状态：{{$item->status?'已完结':'连载中'}}</p>
                            </li>
                        @else
                            <li class="s{{$k+1}}">
                                <em class="num">{{$k+1}}</em>
                                <h5 class="tit"><a href="/book/{{$item->id}}.html" target="_blank">{{$item->name}}</a></h5>
                            </li>
                        @endif
                    @endforeach


                </ul>
            </div>
        </div>
        <!--/box4-->
        <!--friend-link-->
        <div class="wrap clearfix">
            <div class="friend-link">
                <h5>友情链接</h5>
                <ul class="clearfix">
                    @foreach($links as $item)
                    <li><a href="{{$item['link']}}" title="{{$item['name']}}" target="_blank">{{$item['name']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--/friend-link-->
    </div>
@stop

<!--container-->
@section('script')
    <script type="text/javascript">
        $(function () {
            $('#carousel1').carousel({curDisplay: 0, autoPlay: false, interval: 3000});
            $('#carousel2').carousel({curDisplay: 0, autoPlay: false, interval: 3000});
        });
    </script>
    <script src="{{asset('js/focus.js')}}"></script>
    <script src="{{asset('js/carousel.js')}}"></script>
    <script>
        $(function(){
            $(".banner").slide({
                titCell: ".banner-nav li",
                mainCell: ".banner-img",
                autoPlay : true,
                titOnClassName: "selected",
            });
        });
    </script>
    <!--/container-->
    <script>
        //设置无限下拉样式
        var style = '<style>@charset "utf-8";.information_box{overflow:hidden;background-color:#fff}.information_box *{margin:0;padding:0}.information_box a{text-decoration:none}.found_list{overflow:hidden}.found_li_border,.found_list_ul,.found_list_ul a,.found_list_ul li{display:block;overflow:hidden}.found_list_ul a{padding:0 15px}.found_li_border{padding:16px 0;border-bottom:1px solid #efefef}.found_a_1 h3,.found_a_3 h3{margin-bottom:8px;overflow:hidden;font-size:16px;color:#333;text-align:justify;max-height:44px;line-height:22px}.found_img_list{overflow:hidden;margin:0 0 10px -1.5%}.found_img_list strong{overflow:hidden;float:left;padding:0 0 0 1.5%;width:33.33%;min-height:62px;box-sizing:border-box}.found_banner img,.found_img img,.found_img_list strong img{display:block;width:100%}.found_list_other{display:block;overflow:hidden;white-space:nowrap;font-size:0}.other1{background-color:#ff9920!important}.other2{background-color:#e42222!important}.other3{background-color:#a047df!important}.other4{background-color:#e42222!important}.other5{background-color:#33b7ee!important}.found_list_other em,.found_list_other i,.found_list_other span,.found_list_other strong{padding:0 3px;display:inline-block;vertical-align:middle;margin-right:6px;font-size:10px;font-style:normal;font-weight:400;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;box-sizing:border-box}.found_list_other i,.found_list_other strong{font-size:12px;color:#b5b5b5;line-height:14px}.found_list_other i{color:#6a7a8a}.found_list_other span{background-color:#706ec5;color:#fff;padding:1px 4px 2px}.found_list_other em{background-color:#f04c4f;color:#fff}.found_a_2{position:relative;left:0;top:0}.found_img{overflow:hidden;float:right;width:34%;min-height:65px}.found_img_info{overflow:hidden;padding-right:10px;width:66%;box-sizing:border-box}.found_img_info h3{overflow:hidden;height:44px;font-size:16px;color:#333;line-height:22px;margin-bottom:6px;font-weight:400}.found_a_2 .found_list_other{position:absolute;left:16px;bottom:16px}.found_banner{margin-bottom:10px;overflow:hidden;width:100%;min-height:115px}.found_list_li_null{margin:0 15px;display:none;height:40px;border-bottom:1px solid #efefef;font-size:14px;color:#999;text-align:center;line-height:40px}</style>';
        var api = "http://www.xs.com/index.php?g=api&m=book&a=getBook";
        var page = 1;
        //加入样式
        $("head").append(style);
        //添加无限下拉容器
        $("body").append("<div class=\"information_box\"><div class=\"found_list\"><ul class=\"found_list_ul\"></ul></div></div>");
        var maxPage = 10;
        var isloading = false;
        $(window).bind("scroll", function () {
            if ($(document).scrollTop() + $(window).height() > $(document).height() - 100 && !isloading) {
                isloading = true;
                getMore();
            }
        });
        function getMore() {
            if(page > maxPage){
                return false;
                isloading = true;
            }
            //isloading = false;
            var url = api + "&page=" + page;
            $.getJSON(url, function (data) {
                $(".information_box .found_list .found_list_ul").append(data.html);
                //恢复待加载状态
                //isloading = false;
            });
            page++;
        }
    </script>
@stop



