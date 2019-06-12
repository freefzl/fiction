@extends('layouts.default')
@section('title', '小说库 - '.$book->name)
@section('keywords', $book->name.' '.$book->author.$book->protagonist)
@section('description', $book->synopsis)
@section('mobile', 'http://www.baidu.com')

@section('content')
    <div class="container clearfix">
        <div class="bread">
            <span>您的位置 : </span>
            <a href="/" title="享阅小说网">享阅小说网</a>
            &gt; <a href="/book/" >小说库</a> &gt; <a href="{{url($book->type[0]->typedir)}}" >{{$book->type[0]->typename}}</a> &gt;
            {{$book->name}}

            <p>更新时间：{{$book->try[0]->updated_at}}</p>
        </div>
        <div class="wrap clearfix">
            <!--bsse-->
            <div class="book-base clearfix">
                <div class="book-pic lf">
                    <img src="{{env('IMG_URL').'/'.$book->cover_img}}" alt="{{$book->name}}">
                </div>
                <div class="book-text lf">
                    <h1 class="title">
                        <em>{{$book->name}}</em>
                        <a href="#">{{$book->author}} 著</a>
                    </h1>

                    <p class="tag-box clearfix">
                        <i class="item">{{$book->status?'已完结':'连载中'}}</i>
                        <i class="zhujue-item item">{{$book->protagonist}}</i>
                        @foreach($tags as $tag)
                        <a href="/zt/{{$tag->id}}.html" class="tag-item item" title="{{$tag->tagname}}">{{$tag->tagname}}</a>
                        @endforeach
                    </p>
                    <p class="intro">{{$book->synopsis}}</p>
                    <ul class="btns">
                        <li class="read-online"><a id="reading" class="reading" data-url="@if($book->is_online) {{$book->m_read_url}} @endif" href="javascript:void(0)">@if($book->is_online)在线阅读@else 微信阅读 @endif</a></li>                    <li class="add-bookshelf" data-bookid="19039"><a>放入书架</a></li>
                        <li class="go-review"><a>网友评论</a></li>
                        <li class="go-mobile">
                            <a href="#">
                                <i class="iconfont">&#xe692;</i>手机阅读
                                <div class="drop-down">
                                    <cite><i></i></cite>
                                    <span id="j-qrcode"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="wrap clearfix">
            <!--primary-->
            <div class="book-info">
                {{--<div class="reading-content">
                    <h3>精彩章节试读：</h3>
                    <div class="content">
                        {!! $book->try[0]->chapterContent !!}
                    </div>
                    <div class="show-more" id="show-more">
                        <button>展开阅读全文</button>
                    </div>
                </div>
                <div class="attentions">
                    <h3>相关内容推荐：</h3>
                    <ul class="clearfix">
                        @foreach($chapter as $item)
                        <li><a href="/article/{{$item->id}}.html" title="{{$item->t_title}}" target="_blank">{{$item->t_title}}</a></li>
                        @endforeach
                    </ul>
                </div>--}}
                <div class="attentions">
                    <h3>读友们正在关注：</h3>
                    <ul class="clearfix">
                        @foreach($chapter as $item)
                        <li><a href='/article/{{$item->id}}.html'  target="_blank">{{$item->title}}</a></li>
                        @endforeach
                        {{--<li><a href='/chapter/{{$book->id}}/list.html'  target="_blank">查看全部章节</a></li>--}}
                    </ul>
                    <div style="text-align: center"><a style="display: inline-block;width: 160px;height: 38px;margin-top: 20px;text-align: center;vertical-align: middle;border-width: 1px;border-style: solid;border-radius: 22px;cursor: pointer;font-size: 16px;line-height: 38px;" href='/chapter/{{$book->id}}/list.html'  target="_blank">查看全部章节</a></div>
                </div>

                <!--chapters-->

                <!--guess-->
                <div class="guess">
                    <h3>猜你喜欢</h3>
                    <ol class="clearfix">
                        @foreach($cnxh['tags'] as $val)
                        <li class="@if($loop->first) on @endif">{{$val->tagname}}小说</li>
                        @endforeach

                    </ol>
                    @foreach($cnxh['tags'] as $val)
                    <ul class="clearfix" style=" display: @if($loop->first) block @else  none @endif">
                        <li class="first">
                            <a class="pic" href="/zt/{{$val->id}}.html"><img src="{{env('IMG_URL').'/'.$val->tag_img}}" alt="{{$val->tagname}}小说"></a>
                            <h5><a href="/zt/{{$val->id}}.html" title="{{$val->tagname}}小说">{{$val->tagname}}</a></h5>
                            <p>{{$val->tag_synopsis}}</p>
                        </li>
                        @foreach($val['books'] as $v)
                        <li>
                            <a class="pic" href="/book/{{$v->id}}.html"><img src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></a>
                            <h5><a href="/book/{{$v->id}}.html" title="{{$v->name}}">{{$v->name}}</a></h5>
                            <p>作者：{{$v->author}}</p>
                            <p><em>{{$v->type[0]->typename}}</em></p>
                        </li>
                        @endforeach
                    </ul>
                    @endforeach

                </div>
                <!--review-->
                <div class="review">
                    <h3>网友评论</h3>
                    <div class="review-form">
                        <p class="form-item">
                            <textarea class="j-textarea" rows="3">说点什么吧，您的评论是对本书最大的支持！</textarea>
                        </p>
                        <p class="form-btns">
                            <span class="count">还可以输入<em class="j-count">200</em>字</span>
                            <button class="j-send" type="submit">发表评论</button>
                        </p>
                        <p class="form-msg"></p>
                    </div>
                    <div class="more"><a href="javascript:void(0);">查看全部评论</a></div>
                </div>
            </div>
            <!--primary-->
            <!--side-->
            <div class="side-bar">
                <!--book-other-->
                <div class="book-other">
                    <div class="editor clearfix">
                        <div class="face"><img src="{{env('IMG_URL').'/'.$book->comment[0]->comment_img}}" alt="{{$book->comment[0]->comment_name}}"></div>
                        <div class="info">
                            <p>编辑<span>{{$book->comment[0]->comment_name}}</span>点评：</p>
                            <p class="text">《{{$book->name}}》{!! $book->comment[0]->comment_content!!}</p>
                        </div>
                    </div>
                </div>			<!--hot-tags-->
                <div class="hot-tags">
                    <h3>热门专题</h3>
                    <ul>
                        @foreach($rmzt as $val)
                        <li><a href="/zt/{{$val->id}}.html" target="_blank"><img src="{{env('IMG_URL').'/'.$val->tag_img}}" alt="好看的{{$val->tagname}}"><span>{{$val->tagname}}小说</span></a></li>
                            @endforeach
                    </ul>
                </div>

                <!--new-book-->
                <div class="new-book">
                    <h3>推荐小说</h3>
                    <ul>
                        @foreach($tjxs as $val)
                        <li>
                            <a class="pic" href="/book/{{$val->id}}.html" target="_blank"><img class="lazy" src="{{env('IMG_URL').'/'.$val->cover_img}}" alt="{{$val->name}}"></a>
                            <h5><a href="/book/{{$val->id}}.html" target="_blank">{{$val->name}}</a></h5>
                            <p>作者：{{$val->author}}</p>
                            <p>状态：{{ $val->status?'已完结':'连载中'}}</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--/side-->
        </div>
    </div>

@stop


@section('script')

    <script type="text/javascript" src="{{asset('js/qrcode.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/layer.js')}}"></script>
    <script type="text/javascript">
        //生成当前URL二维码
        var str = 'http:///book/19039.html';
        $("#j-qrcode").qrcode({width:144,height:144,text:str});
        $('#show-more').click(function(){
            $('.book-info .reading-content .content').height('auto');
            $(this).hide();
        });
    </script>

    <div id="novel_id" data-id="{{$book->id}}"></div>

    <script type="text/javascript">

        var weixin_name = "龙珠阅读";

        $('.reading').on('click',function(){

            // console.log($(this).attr('data-url'))
            if($(this).attr('data-url') != ''){
                window.location.href= $(this).attr('data-url');
                return false;
            }else{
                layer.open({
                    type: 1,
                    title: '',
                    area: ['460px', '320px'],
                    shadeClose: true,
                    content: '<div style="width:100%;text-align:center;margin-top:1.5rem;font-size:14px"><img style="width:200px;height:200px" src="{{env('IMG_URL').'/'.'images/5d2e90b1f64c855c6741c8fefc8250e4.jpg'}}"><p style="padding-top:10px">扫一扫二维码 或者</p><p style="padding-top:10px">关注微信公众号：<span style="color:red">'+weixin_name+'</span></p><p style="padding-top:10px">回复：<span style="color:red">染情欢：逮个美男当驸马</span>  阅读全文</p></div>'
                });
            }
        });

    </script>

@stop