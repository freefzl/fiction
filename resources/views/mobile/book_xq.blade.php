@extends('mobile.layouts.default')
@section('title', '小说库_'.$book->name.'_')
@section('keywords', $book->name.','.$book->author.','.$book->protagonist)
@section('description', '小说简介:'.$book->synopsis)
@section('canonical', env('M_APP_URL').'article/'.$book->id.'.html')


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
                            <li><a class="read-online reading" id="reading" rel="nofollow" href="{{env('M_APP_URL')}}towx/wechat=千舫&book={{$book->name}}&bookid={{$book->info_id}}&code=aHR0cDovL20ubWluZDk4LmNuL2QvZmlsZS8yMDE5MDcvMDMvNkk2cjZaZXU1NXU0NW9DZDVZZWcuanBn&hero={{$book->author}}&tdsourcetag=s_pcqq_aiomsg&id={{$book->id}}">微信阅读</a></li>
                            @endif

                        <li>
                            <a href="http://m.suqiLai.com/down/lm_app?uid=123333114" rel="nofollow">下载阅读</a>                    </li>



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

        <div class="mod book-read">
            <div class="mod-head">
                <h3>精彩章节试读：</h3>
            </div>
            <div class="read-content clearfix">
                <mip-showmore maxheight='screen:0.9' bottomshadow="1" animatetime='.3' id="intro" >
                    @if($try_chapters!==null)
                        @foreach($try_chapters as $item)
                            <h3>{{$item->title}}</h3>
                            {!! $item->chapterContent !!}
                        @endforeach
                    @endif
                </mip-showmore>
                <div on="tap:intro.toggle" class="content-more" data-closeclass="mip-intro-open" data-closetext="收起内容">
                    <button class="show">阅读全文</button>
                    <button class="hidden">阅读全文</button>
                </div>
            </div>
        </div>


        <div class="mod mod-attentions">
            <div class="mod-head">
                <h3>相关内容推荐：</h3>
            </div>
            <!--attentions-->
            <div class="attentions">
                <ul class="clearfix">
                    @foreach($articles  as $item)
                    <li><a href="/article/{{$item->id}}.html" title="{{$item->t_title}}" >{{$item->t_title}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="chapters-more"><a class="reading" rel="nofollow" href="{{env('M_APP_URL').$book->id.'/list.html'}}">阅读更多章节</a></div>    </div>    <div class="readingbox">
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
                                <a href="/book/{{$v->id}}.html" title="{{$v->name}}" >
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
                <h3>最新{{$zxlxtj->typeName}}小说推荐</h3>
            </div>
            <div class="book-list">
                <ul class="clearfix">
                    @foreach($zxlxtj as $item)
                    <li>
                        <div class="pic"><mip-img src="{{env('IMG_URL').'/'.$item->cover_img}}" alt="{{$item->name}}"></mip-img></div>
                        <a class="tit" href="/book/{{$item->id}}.html" title="{{$item->name}}" >{{$item->name}}</a>
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
        <a href="/">首页</a> &gt; <a href="/book/" >小说库</a> &gt; <a href="/{{$book->type[0]->typedir}}" >{{$book->type[0]->typename}}</a> &gt; {{$book->name}} </div>
    <div class="cmargin"></div>

@stop


@section('script')


@stop