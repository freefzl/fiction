<div class="header">
    <div class="inner">
        <div class="tophead">
            <!-- logo -->
            <div class="logo lf"><a href="/" title="享阅小说网">享阅小说网</a></div>
            <!-- 搜索 -->
            <div class="search lf">
                <form  method="post" name="search"  action="/search" target="_blank" >
                    {{ csrf_field() }}
                    <input type="text" name="q" id="q" placeholder="请输入书名" autocomplete="off" value="@if(isset($_REQUEST['q'])) {{$_REQUEST['q']}} @endif" class="search-key">
                    <button type="submit" class="search-btn" id="search-btn">
                        <i class="iconfont">&#xe651;</i>
                    </button>
                    <input type="hidden" name="modelid" value="13">
                </form>
            </div>
            <!-- 书架 -->
            <div class="bookcase rf"><a href="javascript:;"><i class="iconfont">&#xe607;</i>我的书架</a></div>
        </div>
    </div>
    <div class="inner">
        <div class="topnav">
            <ul>
                <li class="home on"><a href="/" title="首页">首页</a></li>
                <li><a href="/book/" title="小说库">小说库</a></li>
                <li><a href="/chapter/" title="小说章节">小说章节</a></li>
                <li><a href="/article/" title="小说资讯">小说资讯</a></li>
                <li><a href="/top/" title="排行榜">排行榜</a></li>
                <li>
                    <a href="/huanxiangyinen/" title="幻想异能">幻想异能</a>
                </li>
                <li>
                    <a href="/dushizhichang/" title="都市职场">都市职场</a>
                </li>
                <li>
                    <a href="/xuanhuanqihuan/" title="玄幻奇幻">玄幻奇幻</a>
                </li><li>
                    <a href="/gudaiyanqing/" title="古代言情">古代言情</a>
                </li><li>
                    <a href="/wuxiaxianxia/" title="武侠仙侠">武侠仙侠</a>
                </li><li>
                    <a href="/lishijunshi/" title="历史军事">历史军事</a>
                </li><li>
                    <a href="/lingyikehuan/" title="灵异科幻">灵异科幻</a>
                </li>

            </ul>
        </div>
    </div>
</div>