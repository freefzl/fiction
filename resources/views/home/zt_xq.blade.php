@extends('layouts.default')
@section('title', '专题_'.$tag->tagname.'小说_')
@section('keywords', $tag->tagname.'小说'  )
@section('description', $tag->tag_synopsis)
@section('mobile', env('M_APP_URL').'zt/'.$tag->id.'.html')

@section('content')


    <div class="container clearfix">
        <div class="bread">
            <span>您的位置 : </span>
            <a href="/" title="{{env('APP_NAME')}}">首页</a> &gt; <a href="/zt/">小说专题大全</a> &gt; {{$tag->tagname}}
        </div>
        <div class="wrap clearfix">
            <!--main-->
            <div class="tags-info">
                <dl class="clearfix">
                    <dt><img class="lazy" src="{{env('IMG_URL').'/'.$tag->tag_img}}" alt="{{$tag->tagname}}"></dt>
                    <dd>
                        <h2>{{$tag->tagname}}小说</h2>
                        <p><span>更新时间：{{$tag->updated_at}}</span><span>共<em>{{$count}}</em>本相关小说</span></p>
                        <p>{{$tag->tag_synopsis}}</p>
                        <ul class="clearfix">
                            @foreach($tags as $v)
                            <li class="cur"><a href="/zt/{{$v->id}}.html" target="_blank">{{$v->tagname}}小说</a></li>
                            @endforeach
                        </ul>
                    </dd>
                </dl>
            </div>
            <div class="tags-data">
                <ul class="clearfix">
                    @foreach($books as $book)
                    <li>
                        <img class="lazy" src="{{env('IMG_URL').'/'.$book->cover_img}}" alt="{{$book->name}}">
                        <a href="/book/{{$book->id}}.html" target="_blank">{{$book->name}}</a>
                        <p>作者：{{$book->author}}</p>
                        <p>分类：玄幻奇幻&nbsp;&nbsp;状态：连载中</p>
                        <p>{{$book->synopsis}}</p>
                        <i class="tj"></i>
                    </li>

                     @endforeach
                </ul>
            </div>
            <!--/main-->

        </div>
    </div>

@stop

<!--container-->
@section('script')


@stop