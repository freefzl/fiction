@extends('layouts.default')
@section('title', '首页')
@section('mobile', 'http://www.baidu.com')

@section('content')

    <!--container-->
    <div class="container">
        <div class="bread">
            <span>您的位置 : </span>
            <a href="/" title="享阅小说网">首页</a>  &gt;
            <a href="/top/" >排行榜</a> &gt;
        </div>
        <div class="wrap clearfix">
            <!--side-->
            <div class="top-nav">
                <p>小说排行榜</p>
                <ul class="clearfix">
                    <li class="on"><a href="/top/">小说排行榜总览</a></li>
                    <li><a href="/top/dushizhichang/" title="都市职场">都市职场小说排行<span></span></a></li><li><a href="/top/xuanhuanqihuan/" title="玄幻奇幻">玄幻奇幻小说排行<span></span></a></li><li><a href="/top/gudaiyanqing/" title="古代言情">古代言情小说排行<span></span></a></li><li><a href="/top/huanxiangyinen/" title="幻想异能">幻想异能小说排行<span></span></a></li><li><a href="/top/wuxiaxianxia/" title="武侠仙侠">武侠仙侠小说排行<span></span></a></li><li><a href="/top/lishijunshi/" title="历史军事">历史军事小说排行<span></span></a></li><li><a href="/top/lingyikehuan/" title="灵异科幻">灵异科幻小说排行<span></span></a></li><li><a href="/top/youxijingji/" title="游戏竞技">游戏竞技小说排行<span></span></a></li><li><a href="/top/xiandaiyanqing/" title="现代言情">现代言情小说排行<span></span></a></li><li><a href="/top/chuanyuezhongsheng/" title="穿越重生">穿越重生小说排行<span></span></a></li><li><a href="/top/zongcaihaomen/" title="总裁豪门">总裁豪门小说排行<span></span></a></li>
                </ul>
            </div>
            <!--/side-->
            <!--primary-->
            <div class="top-list">
                <div class="clearfix">
                    <div class="rank-item">
                        <h3>推荐榜</h3>
                        <ul>
                            <li class="s1">
                                <em class="num">1</em>
                                <a class="pic" href="/book/19009.html" target="_blank"><img class="lazy" src="static/picture/5asq5y+k56we56wh6kkl.jpg" alt="太古神祇"></a>
                                <h5 class="tit"><a href="/book/19009.html" target="_blank">太古神祇</a></h5>
                                <p class="author">作者：禹枫</p>
                                <p class="status">状态：连载中</p>
                            </li>
                            <li class="s2">
                                <em class="num">2</em>
                                <h5 class="tit"><a href="/book/19002.html" target="_blank">宠婚100分，慕大叔的小萌妻</a></h5>
                            </li>                    <li class="s3">
                                <em class="num">3</em>
                                <h5 class="tit"><a href="/book/18998.html" target="_blank">一夜惊喜：闪婚娇妻太撩人</a></h5>
                            </li>                    <li class="s4">
                                <em class="num">4</em>
                                <h5 class="tit"><a href="/book/18946.html" target="_blank">狂少V5：撩爱娇妻99次</a></h5>
                            </li>                    <li class="s5">
                                <em class="num">5</em>
                                <h5 class="tit"><a href="/book/18944.html" target="_blank">农门继母：悍妇地主婆</a></h5>
                            </li>                    <li class="s6">
                                <em class="num">6</em>
                                <h5 class="tit"><a href="/book/18921.html" target="_blank">迷案重重</a></h5>
                            </li>                    <li class="s7">
                                <em class="num">7</em>
                                <h5 class="tit"><a href="/book/18866.html" target="_blank">名门深爱：娇妻偷心一百次</a></h5>
                            </li>                    <li class="s8">
                                <em class="num">8</em>
                                <h5 class="tit"><a href="/book/18806.html" target="_blank">总裁大人放肆宠</a></h5>
                            </li>                    <li class="s9">
                                <em class="num">9</em>
                                <h5 class="tit"><a href="/book/18794.html" target="_blank">龙腾都市</a></h5>
                            </li>                    <li class="s10">
                                <em class="num">10</em>
                                <h5 class="tit"><a href="/book/18721.html" target="_blank">医品毒妃</a></h5>
                            </li>            </ul>
                    </div>
                    <div class="rank-item">
                        <h3>完结榜</h3>
                        <ul>
                            <li class="s1">
                                <em class="num">1</em>
                                <a class="pic" href="/book/9407.html" target="_blank"><img class="lazy" src="static/picture/thumb_200_266_54uc5yek6amt5yw977ya57ud6imy6yca54g15biijpg.jpg" alt="狂凤驭兽：绝色通灵师"></a>
                                <h5 class="tit"><a href="/book/9407.html" target="_blank">狂凤驭兽：绝色通灵师</a></h5>
                                <p class="author">作者：美男不胜收</p>
                                <p class="status">状态：已完结</p>
                            </li>
                            <li class="s2">
                                <em class="num">2</em>
                                <h5 class="tit"><a href="/book/229.html" target="_blank">天下极道</a></h5>
                            </li>                    <li class="s3">
                                <em class="num">3</em>
                                <h5 class="tit"><a href="/book/9266.html" target="_blank">幸运之星在闪烁</a></h5>
                            </li>                    <li class="s4">
                                <em class="num">4</em>
                                <h5 class="tit"><a href="/book/344.html" target="_blank">鸿蒙仙猿</a></h5>
                            </li>                    <li class="s5">
                                <em class="num">5</em>
                                <h5 class="tit"><a href="/book/375.html" target="_blank">纨绔佛陀</a></h5>
                            </li>                    <li class="s6">
                                <em class="num">6</em>
                                <h5 class="tit"><a href="/book/354.html" target="_blank">极品混混修仙</a></h5>
                            </li>                    <li class="s7">
                                <em class="num">7</em>
                                <h5 class="tit"><a href="/book/9039.html" target="_blank">束手就情：首席的甜妻</a></h5>
                            </li>                    <li class="s8">
                                <em class="num">8</em>
                                <h5 class="tit"><a href="/book/577.html" target="_blank">乱异世</a></h5>
                            </li>                    <li class="s9">
                                <em class="num">9</em>
                                <h5 class="tit"><a href="/book/622.html" target="_blank">天书之妖瞳传说</a></h5>
                            </li>                    <li class="s10">
                                <em class="num">10</em>
                                <h5 class="tit"><a href="/book/8876.html" target="_blank">尹少追妻，老婆请入坑</a></h5>
                            </li>            </ul>
                    </div>
                    <div class="rank-item">
                        <h3>人气榜</h3>
                        <ul>
                            <li class="s1">
                                <em class="num">1</em>
                                <a class="pic" href="/book/9407.html" target="_blank"><img class="lazy" src="static/picture/thumb_200_266_54uc5yek6amt5yw977ya57ud6imy6yca54g15biijpg.jpg" alt="狂凤驭兽：绝色通灵师"></a>
                                <h5 class="tit"><a href="/book/9407.html" target="_blank">狂凤驭兽：绝色通灵师</a></h5>
                                <p class="author">作者：美男不胜收</p>
                                <p class="status">状态：已完结</p>
                            </li>
                            <li class="s2">
                                <em class="num">2</em>
                                <h5 class="tit"><a href="/book/229.html" target="_blank">天下极道</a></h5>
                            </li>                    <li class="s3">
                                <em class="num">3</em>
                                <h5 class="tit"><a href="/book/9266.html" target="_blank">幸运之星在闪烁</a></h5>
                            </li>                    <li class="s4">
                                <em class="num">4</em>
                                <h5 class="tit"><a href="/book/344.html" target="_blank">鸿蒙仙猿</a></h5>
                            </li>                    <li class="s5">
                                <em class="num">5</em>
                                <h5 class="tit"><a href="/book/375.html" target="_blank">纨绔佛陀</a></h5>
                            </li>                    <li class="s6">
                                <em class="num">6</em>
                                <h5 class="tit"><a href="/book/354.html" target="_blank">极品混混修仙</a></h5>
                            </li>                    <li class="s7">
                                <em class="num">7</em>
                                <h5 class="tit"><a href="/book/9039.html" target="_blank">束手就情：首席的甜妻</a></h5>
                            </li>                    <li class="s8">
                                <em class="num">8</em>
                                <h5 class="tit"><a href="/book/577.html" target="_blank">乱异世</a></h5>
                            </li>                    <li class="s9">
                                <em class="num">9</em>
                                <h5 class="tit"><a href="/book/622.html" target="_blank">天书之妖瞳传说</a></h5>
                            </li>                    <li class="s10">
                                <em class="num">10</em>
                                <h5 class="tit"><a href="/book/8876.html" target="_blank">尹少追妻，老婆请入坑</a></h5>
                            </li>            </ul>
                    </div>
                    <div class="rank-item">
                        <h3>更新榜</h3>
                        <ul>
                            <li class="s1">
                                <em class="num">1</em>
                                <a class="pic" href="/book/19003.html" target="_blank"><img class="lazy" src="static/picture/thumb_200_266_6ls06lqr56we5y2r6iw+.jpg" alt="贴身神卫"></a>
                                <h5 class="tit"><a href="/book/19003.html" target="_blank">贴身神卫</a></h5>
                                <p class="author">作者：步履无声</p>
                                <p class="status">状态：已完结</p>
                            </li>
                            <li class="s2">
                                <em class="num">2</em>
                                <h5 class="tit"><a href="/book/19002.html" target="_blank">宠婚100分，慕大叔的小萌妻</a></h5>
                            </li>                    <li class="s3">
                                <em class="num">3</em>
                                <h5 class="tit"><a href="/book/19001.html" target="_blank">魔道医圣</a></h5>
                            </li>                    <li class="s4">
                                <em class="num">4</em>
                                <h5 class="tit"><a href="/book/19000.html" target="_blank">天才萌宝双面妻</a></h5>
                            </li>                    <li class="s5">
                                <em class="num">5</em>
                                <h5 class="tit"><a href="/book/18999.html" target="_blank">最强仙医</a></h5>
                            </li>                    <li class="s6">
                                <em class="num">6</em>
                                <h5 class="tit"><a href="/book/18998.html" target="_blank">一夜惊喜：闪婚娇妻太撩人</a></h5>
                            </li>                    <li class="s7">
                                <em class="num">7</em>
                                <h5 class="tit"><a href="/book/18997.html" target="_blank">浅爱深缠：季先生缠上瘾</a></h5>
                            </li>                    <li class="s8">
                                <em class="num">8</em>
                                <h5 class="tit"><a href="/book/18996.html" target="_blank">点金圣手</a></h5>
                            </li>                    <li class="s9">
                                <em class="num">9</em>
                                <h5 class="tit"><a href="/book/18995.html" target="_blank">无上狂兵</a></h5>
                            </li>                    <li class="s10">
                                <em class="num">10</em>
                                <h5 class="tit"><a href="/book/18994.html" target="_blank">桃运兵王</a></h5>
                            </li>            </ul>
                    </div>
                    <div class="rank-item">
                        <h3>女生榜</h3>
                        <ul>
                            <li class="s1">
                                <em class="num">1</em>
                                <a class="pic" href="/book/18971.html" target="_blank"><img class="lazy" src="static/picture/5yc+5z+o5okn5aad77ya.jpg" alt="倾城悍妃：邪王轻点宠"></a>
                                <h5 class="tit"><a href="/book/18971.html" target="_blank">倾城悍妃：邪王轻点宠</a></h5>
                                <p class="author">作者：辛暖</p>
                                <p class="status">状态：已完结</p>
                            </li>
                            <li class="s2">
                                <em class="num">2</em>
                                <h5 class="tit"><a href="/book/18963.html" target="_blank">我的怒放人生</a></h5>
                            </li>                    <li class="s3">
                                <em class="num">3</em>
                                <h5 class="tit"><a href="/book/18910.html" target="_blank">爱到痛时情难以</a></h5>
                            </li>                    <li class="s4">
                                <em class="num">4</em>
                                <h5 class="tit"><a href="/book/18893.html" target="_blank">都市古承神医</a></h5>
                            </li>                    <li class="s5">
                                <em class="num">5</em>
                                <h5 class="tit"><a href="/book/18821.html" target="_blank">愿你明媚如骄阳</a></h5>
                            </li>                    <li class="s6">
                                <em class="num">6</em>
                                <h5 class="tit"><a href="/book/18803.html" target="_blank">谁曾许我一世心</a></h5>
                            </li>                    <li class="s7">
                                <em class="num">7</em>
                                <h5 class="tit"><a href="/book/18767.html" target="_blank">盛世婚宠：总裁乖乖就范</a></h5>
                            </li>                    <li class="s8">
                                <em class="num">8</em>
                                <h5 class="tit"><a href="/book/18761.html" target="_blank">神探医妃：王爷，请下榻</a></h5>
                            </li>                    <li class="s9">
                                <em class="num">9</em>
                                <h5 class="tit"><a href="/book/18716.html" target="_blank">此去经年爱已殇</a></h5>
                            </li>                    <li class="s10">
                                <em class="num">10</em>
                                <h5 class="tit"><a href="/book/18647.html" target="_blank">绝色女总裁的小司机</a></h5>
                            </li>
                        </ul>
                    </div>
                    <div class="rank-item">
                        <h3>男生榜</h3>
                        <ul>
                            <li class="s1">
                                <em class="num">1</em>
                                <a class="pic" href="/book/18992.html" target="_blank"><img class="lazy" src="static/picture/thumb_200_266_6laf5by65yw1546l54wu.jpg" alt="超强兵王"></a>
                                <h5 class="tit"><a href="/book/18992.html" target="_blank">超强兵王</a></h5>
                                <p class="author">作者：月逸清辉</p>
                                <p class="status">状态：已完结</p>
                            </li>
                            <li class="s2">
                                <em class="num">2</em>
                                <h5 class="tit"><a href="/book/18962.html" target="_blank">总裁盛宠：捉妻入瓮</a></h5>
                            </li>                    <li class="s3">
                                <em class="num">3</em>
                                <h5 class="tit"><a href="/book/18939.html" target="_blank">合租女神</a></h5>
                            </li>                    <li class="s4">
                                <em class="num">4</em>
                                <h5 class="tit"><a href="/book/18884.html" target="_blank">我的海螺姑娘</a></h5>
                            </li>                    <li class="s5">
                                <em class="num">5</em>
                                <h5 class="tit"><a href="/book/18879.html" target="_blank">少爷，你家夫人要造反</a></h5>
                            </li>                    <li class="s6">
                                <em class="num">6</em>
                                <h5 class="tit"><a href="/book/18765.html" target="_blank">一纸契约365天：黎少的秘密情人</a></h5>
                            </li>                    <li class="s7">
                                <em class="num">7</em>
                                <h5 class="tit"><a href="/book/18764.html" target="_blank">最强桃花戒</a></h5>
                            </li>                    <li class="s8">
                                <em class="num">8</em>
                                <h5 class="tit"><a href="/book/18749.html" target="_blank">总裁隐婚甜妻</a></h5>
                            </li>                    <li class="s9">
                                <em class="num">9</em>
                                <h5 class="tit"><a href="/book/18736.html" target="_blank">霸宠甜妻：高冷男神吃不够</a></h5>
                            </li>                    <li class="s10">
                                <em class="num">10</em>
                                <h5 class="tit"><a href="/book/18735.html" target="_blank">民间阴阳师</a></h5>
                            </li>            </ul>
                    </div>
                </div>
            </div>
            <!--/primary-->
        </div>
    </div>
    <!--/container-->

@stop

<!--container-->
@section('script')

@stop
