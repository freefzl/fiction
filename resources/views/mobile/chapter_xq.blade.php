@extends('mobile.layouts.default')
@section('title', $book->name.'最新章节_'.$book->name.'('.$book->author.')小说_'.$book->name.'全文阅读_')
@section('keywords', $book->name.','.$book->author.','.$book->protagonist)
@section('description', mb_strlen(htmlspecialchars($book->synopsis))>=30?mb_substr(htmlspecialchars($book->synopsis),0,30).'...':htmlspecialchars($book->synopsis).',各位书友要是觉得《'.$book->name.'》还不错的话请不要忘记向您QQ群和微博里的朋友推荐哦！《'.$book->name.'》最新章节,《'.$book->name.'》全文阅读。')
@section('canonical', env('M_APP_URL').$book->id.'/')

@section('meta')
    <meta property="og:type" content="novel"/>
    <meta property="og:title" content="{{$book->name}}章节列表_{{$book->protagonist}}小说在线阅读_{{env('APP_NAME')}}"/>
    <meta property="og:description" content="{{mb_strlen(htmlspecialchars($book->synopsis))>=30?mb_substr(htmlspecialchars($book->synopsis),0,30).'...':htmlspecialchars($book->synopsis)}}"/>
    <meta property="og:image" content="{{env('IMG_URL').'/'.$book->cover_img}}"/>
    <meta property="og:novel:category" content="{{$book->type[0]->typename}}"/>
    <meta property="og:novel:author" content="{{$book->author}}"/>
    <meta property="og:novel:book_name" content="{{$book->name}}"/>
    <meta property="og:novel:read_url" content="{{env('APP_URL').'/'.$book->id.'/'}}"/>
    <meta property="og:url" content="{{env('APP_URL').'/'.$book->id.'/'}}"/>
    <meta property="og:novel:status" content="{{$book->status?'已完结':'连载中'}}"/>
    <meta property="og:novel:update_time" content="{{$book->updated_at}}"/>
    <meta property="og:novel:latest_chapter_name" content="{{$last_new_chapter->title??''}}"/>
    <meta property="og:novel:latest_chapter_url" @if($last_new_chapter!=null) content="{{env('M_APP_URL')."/article/".$last_new_chapter->id}}.html" @else content="" @endif />
@stop

@section('content')
    <div class="wrap wrap-info">
        <!--main-->
        <!--info-->
        <div class="mod mod-info">
            <mip-img src="{{env('IMG_URL').'/'.$book->cover_img}}" class="book-cover-blur" alt="{{$book->name}}"></mip-img>
            <div class="book-info">
                <dl class="base clearfix">
                    <dt>
                        <mip-img class="lazy" layout="responsive" width="180" height="240" src="{{env('IMG_URL').'/'.$book->cover_img}}" alt="{{$book->name}}"></mip-img>
                    </dt>
                    <dd>
                        <h2>{{$book->name}}</h2>
                        <p class="info">
                            <span>时间：{{$book->updated_at}}</span>
                            <span>分类：{{$book->type[0]->typename}}</span>
                            <span>来源：幻想书院</span>                        <span>作者：<a href="/author/12271.html">{{$book->author}}</a></span>
                            <span>主角：{{$book->protagonist}}</span>
                        </p>
                    </dd>
                </dl>
                <div class="btns">
                    <ul>
                        @if($book->is_online)
                            <li><a class="read-online reading" id="reading" rel="nofollow" href="{{$book->m_read_url}}">在线阅读</a></li>
                            @else
                            <li><a class="read-online reading" id="reading" rel="nofollow" href="#">微信阅读</a></li>
                            @endif

                        <li>
                            <a href="http://51ldj.zuszw.com/dw.php?pt=&bookname={{$book->name}}&hero={{$book->author}}" rel="nofollow">下载阅读</a>                    </li>



                    </ul>
                </div>
                <!--tags-->
                <div class="tags clearfix">
                    <p>
                        <span>本书标签：</span>
                        @foreach($tags as $item)
                        <a href="/zt/{{$item->id}}.html" title="{{$item->tagname}}小说" ><span>{{$item->tagname}}小说</span></a>
                        @endforeach
                    </p>
                </div>
                <div class="intro clearfix">
                    <p>{{$book->synopsis}}</p>
                </div>
            </div>
        </div>

        <div class="mod mod-attentions">
            <div class="mod-head">
                <h3>{{$book->name}}章节目录：</h3>
            </div>
            <!--attentions-->
            <div class="attentions">
                <ul class="clearfix">
                    @if(count($chapter))
                    @foreach($chapter  as $item)
                        <li><a href='/article/{{$item->id}}.html'  target="_blank">{{$item->title}}</a></li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="mod-head">
                <h3>最新章节：</h3>
            </div>
            <!--attentions-->
            <div class="attentions">
                <ul class="clearfix">
                    @if(count($new_chapter))
                    @foreach($new_chapter  as $item)
                            <li><a class="my_chapter" target="_blank" href="@if($item->is_pay) javascript:void(0) @else /article/{{$item->id}}.html @endif" data-url="@if($item->is_pay)@else {{$item->id}} @endif"  >{{ mb_strlen($item->title)>=20?mb_substr($item->title,0,20).'..':$item->title}} @if($item->is_pay) <img style="margin-top:4px;width: 15px" src="{{asset('images/icon_zs.png')}}"> <span style="color: #ff69b4">{{$item->goId}}</span> @endif</a></li>
                    @endforeach
                    @endif
                </ul>
            </div>
            <div class="chapters-more"><a class="reading"  href="/{{$book->id}}/list.html">阅读更多章节</a></div>    </div>    <div class="readingbox">
            <a href="http://51ldj.zuszw.com/dw.php?pt=&bookname={{$book->name}}&hero={{$book->author}}" rel="nofollow">
                <mip-img src="http://oss.mobantianxia.com/20180813/15341243676265.jpg" alt="30天免费畅读"></mip-img>
            </a>
        </div>
        <!--editor-->
        <div class="mod mod-editor">
            <div class="editor clearfix">
                <div class="face"><mip-img src="{{env('IMG_URL').'/'.$book->comment[0]->comment_img}}" alt="{{$book->comment[0]->comment_name}}"></mip-img></div>
                <div class="info">
                    <p>编辑<span>{{$book->comment[0]->comment_name}}</span>点评：</p>
                    <p class="text">{{$book->comment[0]->comment_content}}</p>
                </div>
            </div>
        </div>
        <!--review-->
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
        <!--guess-->
        <div class="mod mod-guess novel-similar">
            <div class="mod-head">
                <h3>猜你喜欢</h3>
            </div>
            <mip-vd-tabs>
                <ol class="clearfix">
                    @foreach($cnxh['tags'] as $val)
                        <li class="@if($loop->first) on @endif">{{$val->tagname}}小说</li>
                    @endforeach
                </ol>
                @foreach($cnxh['tags'] as $val)
                <div class="mod-body">
                    <div class="book-slide">
                        <ul class="clearfix">
                            @foreach($val['books'] as $v)
                            <li>
                                <a href="/{{$v->id}}/" title="{{$v->name}}" >
                                    <div class="pic"><mip-img src="{{env('IMG_URL').'/'.$v->cover_img}}" alt="{{$v->name}}"></mip-img></div>
                                    <span>{{$v->name}}</span>
                                    <em><aria>作者：</aria>{{$v->author}}</em>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </mip-vd-tabs>

        </div>
        <!-- rec-book -->
        <div class="mod rec-book">
            <div class="mod-head">
                <h3>最新小说推荐</h3>
            </div>
            <div class="book-list">
                <ul class="clearfix">
                    @foreach($tjxs as $item)
                    <li>
                        <div class="pic"><mip-img src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img></div>
                        <a class="tit" href="/{{$item->id}}/" title="{{$item->name}}" >{{$item->name}}</a>
                        <p class="intro">{{$item->synopsis}}</p>
                        <p class="info"><span><i class="iconfont">&#xe600;</i>{{$item->author}}</span><em class="type">{{$item->type[0]->typename}}</em>
                            <em class="finish">{{$item->status?'已完结':'连载中'}}</em>                </p>
                    </li>
                    @endforeach
                    </ul>
            </div>
        </div>
        <!--/main-->
    </div>

    <mip-lightbox
            id="weixin"
            layout="nodisplay"
            class="mip-hidden"
            content-scroll>
        <div class="lightbox">
            <div class="mask"></div>
            <mip-img width="144" height="190" src="/d/file/201906/01/thumb_200_266_5oiR55qE6ay85aSr5aSq.jpg"></mip-img>
            <p><strong>我的鬼夫太傲娇</strong></p>
            <p>关注微信公众号：<span>仓鼠文学</span>
            </p><p>回复书名 阅读全文</p>
            <span on="tap:weixin.toggle" class="lightbox-close">关闭</span>
        </div>
    </mip-lightbox>

    <!--bread-->
    <div class="cmargin"></div>
    <div class="bread">
        <span>您的位置 : </span>
        <a href="/">首页</a> &gt; <a href="/chapter/" >章节目录</a> &gt; <a href="/{{$book->type[0]->typedir}}" >{{$book->type[0]->typename}}</a> &gt; {{$book->name}} </div>
    <div class="cmargin"></div>

@stop


@section('script')


@stop