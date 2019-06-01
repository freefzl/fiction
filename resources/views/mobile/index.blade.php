@extends('mobile.layouts.default')
@section('title', '首页')
@section('keywords', '网络小说在线推荐')
@section('description', '网站有大量精品小说推荐，包含都市职场、玄幻奇幻、古代言情、幻想异能、武侠仙侠、历史军事、灵异科幻、游戏竞技、现代言情、穿越重生、总裁豪门等各类好看小说。')
@section('mobile', 'http://www.baidu.com')


@section('content')
<div class="wrap">
    <!--slide-->
    <div class="swiper-container">
        <mip-carousel
                autoplay
                layout="responsive"
                width="530"
                height="240"
                buttonController>
            <a href="/book/12264.html" data-type="mip"><img src="/d/file/content/201904/01/thumb_530_240_5ca1e01fe1ef6.jpg" alt="情深不负遇见"></img></a><a href="/book/12247.html" data-type="mip"><img src="/d/file/content/201904/01/thumb_530_240_5ca1e02d46ded.jpg" alt="余生不相望"></img></a><a href="/book/12219.html" data-type="mip"><img src="/d/file/content/201904/01/thumb_530_240_5ca1e0488c238.jpg" alt="许你来生不见不散"></img></a><a href="/book/12175.html" data-type="mip"><img src="/d/file/content/201904/01/thumb_530_240_5ca1e0689d6fd.jpg" alt="听说你爱我"></img></a>                </mip-carousel>
    </div>
    <!-- search -->
    <div class="bar">
        <mip-form  method="post" url="http://m.mind98.cn/index.php?g=Search" target="_blank" >
            <input type="text" name="q" id="q" placeholder="请输入书名/作者" class="search-key">
            <input type="hidden" name="modelid" value="13">
            <button type="submit" class="search-btn" id="search-btn">Go</button>
        </mip-form>
    </div>
    <!-- nav -->
    <div class="nav">
        <a href="/top" >
            <i class="iconfont">&#xe7bd;</i>
            <span>排行榜</span>
        </a>
        <a href="/book" >
            <i class="iconfont">&#xe809;</i>
            <span>小说库</span>
        </a>
        <a href="/zt" >
            <i class="iconfont">&#xe70f;</i>
            <span>专题</span>
        </a>
        <a href="/article" >
            <i class="iconfont">&#xe63a;</i>
            <span>资讯</span>
        </a>
    </div>
    <!-- rec-book -->
    <div class="mod rec-book">
        <div class="mod-head">
            <h3>编辑推荐</h3>
        </div>
        <div class="book-slide">
            <ul class="clearfix">
                <li>
                    <a href="/book/19013.html" title="买个媳妇种种田黄依依秦三郎小说在线阅读 买个媳妇种种田最新章节" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/21/5Lmw5Liq5aqz5aaH56eN.jpg" alt="买个媳妇种种田"></img>
                        <span>买个媳妇种种田</span>
                        <em><aria>作者：</aria>别时媚</em>
                    </a>
                </li><li>
                    <a href="/book/18948.html" title="主角是晏北辰季紫瞳的小说在线阅读 落魄千金慢慢宠免费阅读" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/21/thumb_200_266_6JC96a2E5Y2D6YeR5oWi.jpg" alt="落魄千金慢慢宠"></img>
                        <span>落魄千金慢慢宠</span>
                        <em><aria>作者：</aria>九色凤</em>
                    </a>
                </li><li>
                    <a href="/book/18945.html" title="主角是宁希程锦时的小说在线阅读 撩心甜妻嫁进门免费阅读" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/21/thumb_200_266_5pKp5b+D55Sc5aa75auB.jpg" alt="撩心甜妻嫁进门"></img>
                        <span>撩心甜妻嫁进门</span>
                        <em><aria>作者：</aria>叶蓁</em>
                    </a>
                </li><li>
                    <a href="/book/18943.html" title="他来时星光璀璨全文免费阅读 他来时星光璀璨凌念念顾晗小说最新章节" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/21/5LuW5p2l5pe25pif5YWJ.jpg" alt="他来时星光璀璨"></img>
                        <span>他来时星光璀璨</span>
                        <em><aria>作者：</aria>吴逗逗</em>
                    </a>
                </li><li>
                    <a href="/book/18931.html" title="开局富可敌国李悟叶雪瑶小说在线阅读 开局富可敌国最新章节" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/21/thumb_200_266_5byA5bGA5a+M5Y+v5pWM.jpg" alt="开局富可敌国"></img>
                        <span>开局富可敌国</span>
                        <em><aria>作者：</aria>张晓歌</em>
                    </a>
                </li><li>
                    <a href="/book/18903.html" title="《国民女神：凌总，请矜持》陆悠然凌湛小说在线阅读" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/20/5Zu95rCR5aWz56We77ya.jpg" alt="国民女神：凌总，请矜持"></img>
                        <span>国民女神：凌总，请矜持</span>
                        <em><aria>作者：</aria>酥酥饼干呀</em>
                    </a>
                </li><li>
                    <a href="/book/18876.html" title="《娇妻难追：宝贝，爹地求辅助！》完结版精彩阅读 墨寒霆时念小说在线阅读" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/20/thumb_200_266_5aiH5aa76Zq+6L+977ya.jpg" alt="娇妻难追：宝贝，爹地求辅助！"></img>
                        <span>娇妻难追：宝贝，爹地求辅助！</span>
                        <em><aria>作者：</aria>宫六爷</em>
                    </a>
                </li><li>
                    <a href="/book/18841.html" title="主角是骆绍东许玲的小说在线阅读 我居然成了上门女婿免费阅读" data-type="mip">
                        <img layout="responsive" width="200" height="266" src="/d/file/201905/20/5oiR5bGF54S25oiQ5LqG.jpg" alt="我居然成了上门女婿"></img>
                        <span>我居然成了上门女婿</span>
                        <em><aria>作者：</aria>当浮一大白i</em>
                    </a>
                </li>                    </ul>
        </div>
    </div>
    <!-- /rec-book -->
    <!-- hot-book -->
    <div class="mod hot-book">
        <div class="mod-head">
            <h3>热门小说</h3>
        </div>
        <div class="book-slide">
            <ul class="clearfix">
                <li>
                    <a href="/book/19003.html" title="主角是宁飞小岚的小说在线阅读 贴身神卫免费阅读" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_6LS06Lqr56We5Y2r6IW+.jpg" alt="贴身神卫"></img>
                        <span>贴身神卫</span>
                        <em><aria>作者：</aria>步履无声</em>
                    </a>
                </li><li>
                    <a href="/book/19002.html" title="宠婚100分，慕大叔的小萌妻慕贝贝慕长笙小说全文阅读 宠婚100分，慕大叔的小萌妻精彩章节" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_5a6g5amaMTAw5YiG77yM.png" alt="宠婚100分，慕大叔的小萌妻"></img>
                        <span>宠婚100分，慕大叔的小萌妻</span>
                        <em><aria>作者：</aria>张小言</em>
                    </a>
                </li><li>
                    <a href="/book/19001.html" title="《魔道医圣》完结版精彩阅读 刘楚赵浮菲小说在线阅读" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_6a2U6YGT5Yy75Zyj6IW+.jpg" alt="魔道医圣"></img>
                        <span>魔道医圣</span>
                        <em><aria>作者：</aria>贱走偏锋</em>
                    </a>
                </li><li>
                    <a href="/book/19000.html" title="天才萌宝双面妻沈蓓一宁少辰全文精彩内容免费阅读" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_5aSp5omN6JCM5a6d5Y+M.jpg" alt="天才萌宝双面妻"></img>
                        <span>天才萌宝双面妻</span>
                        <em><aria>作者：</aria>婤子</em>
                    </a>
                </li><li>
                    <a href="/book/18999.html" title="主角是秦朗叶小蕊的小说在线阅读 最强仙医免费阅读" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_5pyA5by65LuZ5Yy76IW+.jpg" alt="最强仙医"></img>
                        <span>最强仙医</span>
                        <em><aria>作者：</aria>菜农种菜</em>
                    </a>
                </li><li>
                    <a href="/book/18998.html" title="一夜惊喜：闪婚娇妻太撩人楚幽厉严辞全文精彩内容免费阅读" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_5LiA5aSc5oOK5Zac77ya.jpg" alt="一夜惊喜：闪婚娇妻太撩人"></img>
                        <span>一夜惊喜：闪婚娇妻太撩人</span>
                        <em><aria>作者：</aria>桃林桃落</em>
                    </a>
                </li><li>
                    <a href="/book/18997.html" title="《浅爱深缠：季先生缠上瘾》季天青崔洋洋全文免费阅读" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_5rWF54ix5rex57yg77ya.jpg" alt="浅爱深缠：季先生缠上瘾"></img>
                        <span>浅爱深缠：季先生缠上瘾</span>
                        <em><aria>作者：</aria>贺五窝</em>
                    </a>
                </li><li>
                    <a href="/book/18996.html" title="点金圣手全文免费阅读 点金圣手李文叶听雨最新章节" data-type="mip">
                        <img layout="responsive" class="pic" width="200" height="266" src="/d/file/201905/21/thumb_200_266_54K56YeR5Zyj5omL6IW+.jpg" alt="点金圣手"></img>
                        <span>点金圣手</span>
                        <em><aria>作者：</aria>仗剑狂歌</em>
                    </a>
                </li>                    </ul>
        </div>
    </div>
    <!-- /hot-book -->
    <!-- new-topic -->
    <div class="mod new-topic">
        <div class="mod-head">
            <h3>最新专题</h3>
            <a href="/zt/" title="最新专题" data-type="mip">更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <div class="tags-list">
            <ul class="clearfix">
                <li>
                    <a href="/zt/35.html" title="虐恋小说" data-type="mip"><img src="/d/file/zt/thumb_200_90_122.jpg" alt="虐恋"><span>虐恋小说</span></img></a>
                </li><li>
                    <a href="/zt/55.html" title="穿越小说" data-type="mip"><img src="/d/file/zt/thumb_200_90_55.jpg" alt="穿越"><span>穿越小说</span></img></a>
                </li><li>
                    <a href="/zt/54.html" title="校园小说" data-type="mip"><img src="/d/file/zt/thumb_200_90_23.jpg" alt="校园"><span>校园小说</span></img></a>
                </li><li>
                    <a href="/zt/13.html" title="百合小说" data-type="mip"><img src="/d/file/zt/thumb_200_90_137.jpg" alt="百合"><span>百合小说</span></img></a>
                </li><li>
                    <a href="/zt/8.html" title="言情小说" data-type="mip"><img src="/d/file/zt/thumb_200_90_120.jpg" alt="言情"><span>言情小说</span></img></a>
                </li><li>
                    <a href="/zt/16.html" title="空间小说" data-type="mip"><img src="/d/file/zt/thumb_200_90_29.jpg" alt="空间"><span>空间小说</span></img></a>
                </li>                    </ul>
        </div>
    </div>
    <!-- /new-topic -->
    <!-- new-book -->
    <div class="mod new-book">
        <div class="mod-head">
            <h3>最新小说</h3>
            <a href="/book/" title="最新小说" data-type="mip">更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <div class="book-list">
            <ul class="clearfix">
                <li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_6LS06Lqr56We5Y2r6IW+.jpg" alt="贴身神卫"></img>
                    </div>
                    <a class="tit" href="/book/19003.html" title="主角是宁飞小岚的小说在线阅读 贴身神卫免费阅读" data-type="mip">贴身神卫</a>
                    <p class="intro">《贴身神卫》写的很好，人物，场景都写的很有代入感，语言言简意赅，故事情节很新颖，有吸引力，追更好多年了，就是有点贵，能便宜点么？</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>步履无声</span><em class="type">都市职场</em>
                        <em class="finish">已完结</em>                            </p>
                </li><li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_5a6g5amaMTAw5YiG77yM.png" alt="宠婚100分，慕大叔的小萌妻"></img>
                    </div>
                    <a class="tit" href="/book/19002.html" title="宠婚100分，慕大叔的小萌妻慕贝贝慕长笙小说全文阅读 宠婚100分，慕大叔的小萌妻精彩章节" data-type="mip">宠婚100分，慕大叔的小萌妻</a>
                    <p class="intro">《宠婚100分，慕大叔的小萌妻》来来回回看了三遍，就是看完了，还想看，三少的文笔好的不得了，想想丰富，情节一环扣一环，反正就是一本非常非常好看的小说</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>张小言</span><em class="type">总裁豪门</em>
                        <em class="serial">连载中</em>
                    </p>
                </li><li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_6a2U6YGT5Yy75Zyj6IW+.jpg" alt="魔道医圣"></img>
                    </div>
                    <a class="tit" href="/book/19001.html" title="《魔道医圣》完结版精彩阅读 刘楚赵浮菲小说在线阅读" data-type="mip">魔道医圣</a>
                    <p class="intro">不错，写的很好看，故事很精彩，支持作者大大</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>贱走偏锋</span><em class="type">都市职场</em>
                        <em class="finish">已完结</em>                            </p>
                </li><li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_5aSp5omN6JCM5a6d5Y+M.jpg" alt="天才萌宝双面妻"></img>
                    </div>
                    <a class="tit" href="/book/19000.html" title="天才萌宝双面妻沈蓓一宁少辰全文精彩内容免费阅读" data-type="mip">天才萌宝双面妻</a>
                    <p class="intro">《天才萌宝双面妻》《天才萌宝双面妻》故事情节很精神、迭荡起伏，章节连貫、是一部值得一看的小说!</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>婤子</span><em class="type">现代言情</em>
                        <em class="finish">已完结</em>                            </p>
                </li><li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_5pyA5by65LuZ5Yy76IW+.jpg" alt="最强仙医"></img>
                    </div>
                    <a class="tit" href="/book/18999.html" title="主角是秦朗叶小蕊的小说在线阅读 最强仙医免费阅读" data-type="mip">最强仙医</a>
                    <p class="intro">一股清流，浓处如酒，淡处似茶。别样的感觉，虽然慢了一些，到更符合实际，毕竟有些纠结、探索的过程才是爱情本该有的样子。文笔细腻，人物刻画很生动，鲜明，加油。</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>菜农种菜</span><em class="type">都市职场</em>
                        <em class="serial">连载中</em>
                    </p>
                </li><li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_5LiA5aSc5oOK5Zac77ya.jpg" alt="一夜惊喜：闪婚娇妻太撩人"></img>
                    </div>
                    <a class="tit" href="/book/18998.html" title="一夜惊喜：闪婚娇妻太撩人楚幽厉严辞全文精彩内容免费阅读" data-type="mip">一夜惊喜：闪婚娇妻太撩人</a>
                    <p class="intro">《一夜惊喜：闪婚娇妻太撩人》感觉很好，有很热血的情节。书中的一些套路感觉是曾相识。</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>桃林桃落</span><em class="type">现代言情</em>
                        <em class="serial">连载中</em>
                    </p>
                </li><li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_5rWF54ix5rex57yg77ya.jpg" alt="浅爱深缠：季先生缠上瘾"></img>
                    </div>
                    <a class="tit" href="/book/18997.html" title="《浅爱深缠：季先生缠上瘾》季天青崔洋洋全文免费阅读" data-type="mip">浅爱深缠：季先生缠上瘾</a>
                    <p class="intro">很多人说《浅爱深缠：季先生缠上瘾》这本小说很水，从客观角度来说，确实如此，文笔与遮天完美有很大的差距，剧情拖沓，好像换了一个人似的，但以辰东的水准，他肯定可以写得好的，但他却不这么做，我想应该是他想创造一种新的风格吧，就是那种可以在饭后睡前让人莞尔一笑的单纯，所以大家应该多给他一些鼓励，毕竟创新的理念是值得肯定的，而且从现在的种种伏笔来说，后期应该很精彩!!!打长字好累啊...</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>贺五窝</span><em class="type">现代言情</em>
                        <em class="serial">连载中</em>
                    </p>
                </li><li>
                    <div class="pic">
                        <img src="/d/file/201905/21/thumb_200_266_54K56YeR5Zyj5omL6IW+.jpg" alt="点金圣手"></img>
                    </div>
                    <a class="tit" href="/book/18996.html" title="点金圣手全文免费阅读 点金圣手李文叶听雨最新章节" data-type="mip">点金圣手</a>
                    <p class="intro">《点金圣手》这本书我给五星，我觉得这本书很精彩，无论是招式的描写，还是感情关系的处理，我觉得都很好</p>
                    <p class="info"><span><i class="iconfont">&#xe600;</i>仗剑狂歌</span><em class="type">都市职场</em>
                        <em class="serial">连载中</em>
                    </p>
                </li>                    </ul>
        </div>
    </div>
    <!-- /new-book -->
    <!-- new-news -->
    <div class="mod new-news">
        <div class="mod-head">
            <h3>最新资讯</h3>
            <a href="/article/" title="最新资讯" data-type="mip">更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <div class="news-list">
            <ul class="clearfix">
                <li><a href="/article/155179.html" title="《婚色撩人：腹黑老公，难伺候》冷慕洵仲晚秋全文免费阅读" data-type="mip">《婚色撩人：腹黑老公，难伺候》冷慕洵仲晚秋全文免费阅读</a><span>05-21</span></li><li><a href="/article/155178.html" title="贴身神卫宁飞小岚小说全文阅读 贴身神卫精彩章节" data-type="mip">贴身神卫宁飞小岚小说全文阅读 贴身神卫精彩章节</a><span>05-21</span></li><li><a href="/article/155177.html" title="主角是沈嫣然厉战霆的小说在线阅读 神秘总裁的蜜恋情人免费阅读" data-type="mip">主角是沈嫣然厉战霆的小说在线阅读 神秘总裁的蜜恋情人免费阅读</a><span>05-21</span></li><li><a href="/article/155176.html" title="《婚色撩人：腹黑老公，难伺候》冷慕洵仲晚秋小说在线阅读" data-type="mip">《婚色撩人：腹黑老公，难伺候》冷慕洵仲晚秋小说在线阅读</a><span>05-21</span></li><li><a href="/article/155175.html" title="点金圣手李文叶听雨小说全文阅读 点金圣手精彩章节" data-type="mip">点金圣手李文叶听雨小说全文阅读 点金圣手精彩章节</a><span>05-21</span></li><li><a href="/article/155174.html" title="《贴身神卫》宁飞小岚最新章节全文免费阅读" data-type="mip">《贴身神卫》宁飞小岚最新章节全文免费阅读</a><span>05-21</span></li><li><a href="/article/155173.html" title="《贴身神卫》大结局免费阅读 《贴身神卫》最新章节目录" data-type="mip">《贴身神卫》大结局免费阅读 《贴身神卫》最新章节目录</a><span>05-21</span></li><li><a href="/article/155172.html" title="首席萌宝买一送一免费阅读 盛安然郁南城小说全文在线阅读" data-type="mip">首席萌宝买一送一免费阅读 盛安然郁南城小说全文在线阅读</a><span>05-21</span></li>                    </ul>
        </div>
    </div>
    <!-- /new-news -->
    <!-- rank -->
    <div class="mod new-news novel-similar">
        <div class="mod-head">
            <h3>小说排行榜</h3>
            <a href="/top/" title="小说排行榜" data-type="mip">更多<i class="iconfont">&#xe80a;</i></a>
        </div>
        <mip-vd-tabs>

            <ol class="clearfix">
                <li class="on">推荐榜</li>
                <li>人气榜</li>
                <li>女生榜</li>
                <li>男生榜</li>
            </ol>
            <!--tab1-->
            <div class="mod-body">
                <div class="top-list">
                    <ul class="clearfix">
                        <li class="s1">
                            <div class="pic">
                                <img src="/d/file/201905/21/5aSq5Y+k56We56WH6KKL.jpg" alt="太古神祇"></img>
                            </div>
                            <a class="tit" href="/book/19009.html" title="《太古神祇》完结版精彩阅读 苏逸婉儿小说在线阅读" data-type="mip">太古神祇</a>
                            <p class="intro">《太古神祇》感觉还不错，故事情节很是吸引人，男女主的爱情很纯真美好。。希望不要出现后宫文。。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>禹枫</span><em class="type">玄幻奇幻</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP1</em></i>
                        </li><li class="s2">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5a6g5amaMTAw5YiG77yM.png" alt="宠婚100分，慕大叔的小萌妻"></img>
                            </div>
                            <a class="tit" href="/book/19002.html" title="宠婚100分，慕大叔的小萌妻慕贝贝慕长笙小说全文阅读 宠婚100分，慕大叔的小萌妻精彩章节" data-type="mip">宠婚100分，慕大叔的小萌妻</a>
                            <p class="intro">《宠婚100分，慕大叔的小萌妻》来来回回看了三遍，就是看完了，还想看，三少的文笔好的不得了，想想丰富，情节一环扣一环，反正就是一本非常非常好看的小说</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>张小言</span><em class="type">总裁豪门</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP2</em></i>
                        </li><li class="s3">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5LiA5aSc5oOK5Zac77ya.jpg" alt="一夜惊喜：闪婚娇妻太撩人"></img>
                            </div>
                            <a class="tit" href="/book/18998.html" title="一夜惊喜：闪婚娇妻太撩人楚幽厉严辞全文精彩内容免费阅读" data-type="mip">一夜惊喜：闪婚娇妻太撩人</a>
                            <p class="intro">《一夜惊喜：闪婚娇妻太撩人》感觉很好，有很热血的情节。书中的一些套路感觉是曾相识。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>桃林桃落</span><em class="type">现代言情</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP3</em></i>
                        </li><li class="s4">
                            <div class="pic">
                                <img src="/d/file/201905/21/54uC5bCRVjXvvJrmkqnn.jpg" alt="狂少V5：撩爱娇妻99次"></img>
                            </div>
                            <a class="tit" href="/book/18946.html" title="狂少V5：撩爱娇妻99次裴延霆舒媚全文精彩内容免费阅读" data-type="mip">狂少V5：撩爱娇妻99次</a>
                            <p class="intro">《狂少V5：撩爱娇妻99次》文笔细腻，引用大量诗词，但都恰到好处，没有故意卖弄的感觉，作者有意在书中抒发对现实生活的感想，是网络小说中难得的会让人沉思的佳作。情节跌宕起伏，不是那种一昧升级越阶打天下的爽文，但却更真实更引人入胜。在书中有学到很多优秀观点，读者的书评大多也都有趣有思想，强烈推荐</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>神心玉1</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP4</em></i>
                        </li><li class="s5">
                            <div class="pic">
                                <img src="/d/file/201905/21/5Yac6Zeo57un5q+N77ya.jpg" alt="农门继母：悍妇地主婆"></img>
                            </div>
                            <a class="tit" href="/book/18944.html" title="农门继母：悍妇地主婆全文免费阅读 农门继母：悍妇地主婆张晓欣马二柱小说最新章节" data-type="mip">农门继母：悍妇地主婆</a>
                            <p class="intro">写的感情细腻，男主角，女主角，至死不渝的爱情，总体来说，有事业，有家庭。完美结局，</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>糯米小团子</span><em class="type">穿越重生</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP5</em></i>
                        </li><li class="s6">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_6L+35qGI6YeN6YeN5o6M.jpg" alt="迷案重重"></img>
                            </div>
                            <a class="tit" href="/book/18921.html" title="迷案重重全文免费阅读 迷案重重陈实林冬雪小说最新章节" data-type="mip">迷案重重</a>
                            <p class="intro">文笔很好，情节跌荡起伏扣人心弦，很期待下文。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>辛白</span><em class="type">灵异科幻</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP6</em></i>
                        </li><li class="s7">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_5ZCN6Zeo5rex54ix77ya.jpg" alt="名门深爱：娇妻偷心一百次"></img>
                            </div>
                            <a class="tit" href="/book/18866.html" title="名门深爱：娇妻偷心一百次免费阅读 林以爱秦默深小说全文在线阅读" data-type="mip">名门深爱：娇妻偷心一百次</a>
                            <p class="intro">《名门深爱：娇妻偷心一百次》写得不错   虽然我没当过兵  但是这本书很容易让人感觉到一个人为了自己的信仰奋斗的艰辛。有泪点  有热血</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>留苏</span><em class="type">现代言情</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP7</em></i>
                        </li><li class="s8">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_5oC76KOB5aSn5Lq65pS+.jpg" alt="总裁大人放肆宠"></img>
                            </div>
                            <a class="tit" href="/book/18806.html" title="《总裁大人放肆宠》完结版精彩阅读 顾安童司振玄小说在线阅读" data-type="mip">总裁大人放肆宠</a>
                            <p class="intro">《总裁大人放肆宠》来来回回看了三遍，就是看完了，还想看，三少的文笔好的不得了，想想丰富，情节一环扣一环，反正就是一本非常非常好看的小说</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>喜小悦</span><em class="type">现代言情</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP8</em></i>
                        </li><li class="s9">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_6b6Z6IW+6YO95biC5o6M.jpg" alt="龙腾都市"></img>
                            </div>
                            <a class="tit" href="/book/18794.html" title="《龙腾都市》陈重米雪最新章节全文免费阅读" data-type="mip">龙腾都市</a>
                            <p class="intro"></p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>星火</span><em class="type">都市职场</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP9</em></i>
                        </li><li class="s10">
                            <div class="pic">
                                <img src="/d/file/201905/19/thumb_200_266_5Yy75ZOB5q+S5aaD5Lmm.jpg" alt="医品毒妃"></img>
                            </div>
                            <a class="tit" href="/book/18721.html" title="《医品毒妃》叶锦绾萧默宁最新章节全文免费阅读" data-type="mip">医品毒妃</a>
                            <p class="intro">《医品毒妃》本书的构思很新颖，但是就是把主角写得太无敌了，所以文章显得有些空洞，不过总的来说还是很不错的，希望作者继续加油。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>医品毒妃</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP10</em></i>
                        </li>                        </ul>
                </div>
            </div>
            <!--tab2-->
            <div class="mod-body">
                <div class="top-list">
                    <ul class="clearfix">
                        <li class="s1">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_6LS06Lqr56We5Y2r6IW+.jpg" alt="贴身神卫"></img>
                            </div>
                            <a class="tit" href="/book/19003.html" title="主角是宁飞小岚的小说在线阅读 贴身神卫免费阅读" data-type="mip">贴身神卫</a>
                            <p class="intro">《贴身神卫》写的很好，人物，场景都写的很有代入感，语言言简意赅，故事情节很新颖，有吸引力，追更好多年了，就是有点贵，能便宜点么？</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>步履无声</span><em class="type">都市职场</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP1</em></i>
                        </li><li class="s2">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5a6g5amaMTAw5YiG77yM.png" alt="宠婚100分，慕大叔的小萌妻"></img>
                            </div>
                            <a class="tit" href="/book/19002.html" title="宠婚100分，慕大叔的小萌妻慕贝贝慕长笙小说全文阅读 宠婚100分，慕大叔的小萌妻精彩章节" data-type="mip">宠婚100分，慕大叔的小萌妻</a>
                            <p class="intro">《宠婚100分，慕大叔的小萌妻》来来回回看了三遍，就是看完了，还想看，三少的文笔好的不得了，想想丰富，情节一环扣一环，反正就是一本非常非常好看的小说</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>张小言</span><em class="type">总裁豪门</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP2</em></i>
                        </li><li class="s3">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_6a2U6YGT5Yy75Zyj6IW+.jpg" alt="魔道医圣"></img>
                            </div>
                            <a class="tit" href="/book/19001.html" title="《魔道医圣》完结版精彩阅读 刘楚赵浮菲小说在线阅读" data-type="mip">魔道医圣</a>
                            <p class="intro">不错，写的很好看，故事很精彩，支持作者大大</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>贱走偏锋</span><em class="type">都市职场</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP3</em></i>
                        </li><li class="s4">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5aSp5omN6JCM5a6d5Y+M.jpg" alt="天才萌宝双面妻"></img>
                            </div>
                            <a class="tit" href="/book/19000.html" title="天才萌宝双面妻沈蓓一宁少辰全文精彩内容免费阅读" data-type="mip">天才萌宝双面妻</a>
                            <p class="intro">《天才萌宝双面妻》《天才萌宝双面妻》故事情节很精神、迭荡起伏，章节连貫、是一部值得一看的小说!</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>婤子</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP4</em></i>
                        </li><li class="s5">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5pyA5by65LuZ5Yy76IW+.jpg" alt="最强仙医"></img>
                            </div>
                            <a class="tit" href="/book/18999.html" title="主角是秦朗叶小蕊的小说在线阅读 最强仙医免费阅读" data-type="mip">最强仙医</a>
                            <p class="intro">一股清流，浓处如酒，淡处似茶。别样的感觉，虽然慢了一些，到更符合实际，毕竟有些纠结、探索的过程才是爱情本该有的样子。文笔细腻，人物刻画很生动，鲜明，加油。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>菜农种菜</span><em class="type">都市职场</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP5</em></i>
                        </li><li class="s6">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5LiA5aSc5oOK5Zac77ya.jpg" alt="一夜惊喜：闪婚娇妻太撩人"></img>
                            </div>
                            <a class="tit" href="/book/18998.html" title="一夜惊喜：闪婚娇妻太撩人楚幽厉严辞全文精彩内容免费阅读" data-type="mip">一夜惊喜：闪婚娇妻太撩人</a>
                            <p class="intro">《一夜惊喜：闪婚娇妻太撩人》感觉很好，有很热血的情节。书中的一些套路感觉是曾相识。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>桃林桃落</span><em class="type">现代言情</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP6</em></i>
                        </li><li class="s7">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5rWF54ix5rex57yg77ya.jpg" alt="浅爱深缠：季先生缠上瘾"></img>
                            </div>
                            <a class="tit" href="/book/18997.html" title="《浅爱深缠：季先生缠上瘾》季天青崔洋洋全文免费阅读" data-type="mip">浅爱深缠：季先生缠上瘾</a>
                            <p class="intro">很多人说《浅爱深缠：季先生缠上瘾》这本小说很水，从客观角度来说，确实如此，文笔与遮天完美有很大的差距，剧情拖沓，好像换了一个人似的，但以辰东的水准，他肯定可以写得好的，但他却不这么做，我想应该是他想创造一种新的风格吧，就是那种可以在饭后睡前让人莞尔一笑的单纯，所以大家应该多给他一些鼓励，毕竟创新的理念是值得肯定的，而且从现在的种种伏笔来说，后期应该很精彩!!!打长字好累啊...</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>贺五窝</span><em class="type">现代言情</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP7</em></i>
                        </li><li class="s8">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_54K56YeR5Zyj5omL6IW+.jpg" alt="点金圣手"></img>
                            </div>
                            <a class="tit" href="/book/18996.html" title="点金圣手全文免费阅读 点金圣手李文叶听雨最新章节" data-type="mip">点金圣手</a>
                            <p class="intro">《点金圣手》这本书我给五星，我觉得这本书很精彩，无论是招式的描写，还是感情关系的处理，我觉得都很好</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>仗剑狂歌</span><em class="type">都市职场</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP8</em></i>
                        </li>                        </ul>
                </div>
            </div>
            <!--tab3-->
            <div class="mod-body">
                <div class="top-list">
                    <ul class="clearfix">
                        <li class="s1">
                            <div class="pic">
                                <img src="/d/file/201905/21/5YC+5Z+O5oKN5aaD77ya.jpg" alt="倾城悍妃：邪王轻点宠"></img>
                            </div>
                            <a class="tit" href="/book/18971.html" title="倾城悍妃：邪王轻点宠白浅月司徒筹小说全文阅读 倾城悍妃：邪王轻点宠精彩章节" data-type="mip">倾城悍妃：邪王轻点宠</a>
                            <p class="intro">说实话，《倾城悍妃：邪王轻点宠》这书文笔差的一比，读起来毫无激情，小白文，也就两星到顶了，勉强可以打发时间</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>辛暖</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP1</em></i>
                        </li><li class="s2">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5oiR55qE5oCS5pS+5Lq6.jpg" alt="我的怒放人生"></img>
                            </div>
                            <a class="tit" href="/book/18963.html" title="我的怒放人生免费阅读 罗志梅香小说全文在线阅读" data-type="mip">我的怒放人生</a>
                            <p class="intro">不错的书，套路比较经典，勾起了我的阅读欲望，呵呵！内容不错，主角挺有幽默感的，让人看的很舒心，值得一看</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>八爪</span><em class="type">都市职场</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP2</em></i>
                        </li><li class="s3">
                            <div class="pic">
                                <img src="/d/file/201905/20/54ix5Yiw55eb5pe25oOF.png" alt="爱到痛时情难以"></img>
                            </div>
                            <a class="tit" href="/book/18910.html" title="《爱到痛时情难以》大结局免费阅读 《爱到痛时情难以》最新章节目录" data-type="mip">爱到痛时情难以</a>
                            <p class="intro">《爱到痛时情难以》老夫巧遇获益此天书，只因看了一页耗尽亿万年修为还未得保住老夫的眼，最后功力耗尽陨落此地，望那后生将此书降服，必将传承赐予，老夫不干啊</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>那年晚风</span><em class="type">总裁豪门</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP3</em></i>
                        </li><li class="s4">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_6YO95biC5Y+k5om56We.jpg" alt="都市古承神医"></img>
                            </div>
                            <a class="tit" href="/book/18893.html" title="都市古承神医孙子轩赵嫣儿全文精彩内容免费阅读" data-type="mip">都市古承神医</a>
                            <p class="intro">《都市古承神医》作者大哥，这年找本好看的小说不容易特别还是新体系的，好看的就更不容易了，所以咱们商量商量能不能快点更，否则我就给你寄万人血球求更了</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>一桶浆糊</span><em class="type">都市职场</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP4</em></i>
                        </li><li class="s5">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_5oS5L2g5piO5aqa5aaC.jpg" alt="愿你明媚如骄阳"></img>
                            </div>
                            <a class="tit" href="/book/18821.html" title="愿你明媚如骄阳黎千柔陆行知小说在线阅读 愿你明媚如骄阳最新章节" data-type="mip">愿你明媚如骄阳</a>
                            <p class="intro">这本书人物感情和语言都拿捏的很好，表示我本人特别喜欢这本书，内容非常丰富，拿捏的很到位，既不过，又很吸引人。实在是非常好的一本书。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>许小晏</span><em class="type">总裁豪门</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP5</em></i>
                        </li><li class="s6">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_6LCB5pu+6K645oiR5LiA.jpg" alt="谁曾许我一世心"></img>
                            </div>
                            <a class="tit" href="/book/18803.html" title="谁曾许我一世心免费阅读 叶莹莹易沣晟小说全文在线阅读" data-type="mip">谁曾许我一世心</a>
                            <p class="intro">《谁曾许我一世心》情节层层推进，写得真心很不错。作者大大剧情走得快，人物形象丰满，悬念也不少，很合我胃口。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>水蕾岚</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP6</em></i>
                        </li><li class="s7">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_55ub5LiW5ama5a6g77ya.jpg" alt="盛世婚宠：总裁乖乖就范"></img>
                            </div>
                            <a class="tit" href="/book/18767.html" title="主角是景驭苏芊芊的小说在线阅读 盛世婚宠：总裁乖乖就范免费阅读" data-type="mip">盛世婚宠：总裁乖乖就范</a>
                            <p class="intro">《盛世婚宠：总裁乖乖就范》写的太好，情节入胜，文笔妙笔生花，一夲好书。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>森小焰</span><em class="type">总裁豪门</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP7</em></i>
                        </li><li class="s8">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_56We5o6i5Yy75aaD77ya.jpg" alt="神探医妃：王爷，请下榻"></img>
                            </div>
                            <a class="tit" href="/book/18761.html" title="神探医妃：王爷，请下榻萧祈然叶凝霜全文精彩内容免费阅读" data-type="mip">神探医妃：王爷，请下榻</a>
                            <p class="intro">《神探医妃：王爷，请下榻》充分体现了主人翁的重情意、自强不息的精神，也体现了这社会：想要达到一定的高度必须努力去拼搏，当然也离不开一些背景和机遇！总之蛮喜欢这本书的！</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>步悠然</span><em class="type">现代言情</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP8</em></i>
                        </li><li class="s9">
                            <div class="pic">
                                <img src="/d/file/201905/19/thumb_200_266_5q2k5Y6757uP5bm054ix.jpg" alt="此去经年爱已殇"></img>
                            </div>
                            <a class="tit" href="/book/18716.html" title="《此去经年爱已殇》大结局免费阅读 《此去经年爱已殇》最新章节目录" data-type="mip">此去经年爱已殇</a>
                            <p class="intro">《此去经年爱已殇》是很细腻的一本好书 风趣幽默 剧情曲折</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>影子姑娘</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP9</em></i>
                        </li><li class="s10">
                            <div class="pic">
                                <img src="/d/file/201905/18/thumb_200_266_57ud6Imy5aWz5oC76KOB.jpg" alt="绝色女总裁的小司机"></img>
                            </div>
                            <a class="tit" href="/book/18647.html" title="绝色女总裁的小司机李岩穆盈小说全文阅读 绝色女总裁的小司机精彩章节" data-type="mip">绝色女总裁的小司机</a>
                            <p class="intro">《绝色女总裁的小司机》书写的一直很棒，这本也很热血，支持。那些一星的不知道是什么想的，故意的么?</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>佚名</span><em class="type">都市职场</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP10</em></i>
                        </li>                        </ul>
                </div>
            </div>
            <!--tab4-->
            <div class="mod-body">
                <div class="top-list">
                    <ul class="clearfix">
                        <li class="s1">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_6LaF5by65YW1546L54Wu.jpg" alt="超强兵王"></img>
                            </div>
                            <a class="tit" href="/book/18992.html" title="主角是叶龙金碧萱的小说在线阅读 超强兵王免费阅读" data-type="mip">超强兵王</a>
                            <p class="intro">《超强兵王》一本很用心，也很值得去看的书，肥龙用他的笔，描写出了一个不一样的世界。阴司有序，黄泉渡命一家深夜的书店一个等着你来品味的书</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>月逸清辉</span><em class="type">都市职场</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP1</em></i>
                        </li><li class="s2">
                            <div class="pic">
                                <img src="/d/file/201905/21/5oC76KOB55ub5a6g77ya.jpg" alt="总裁盛宠：捉妻入瓮"></img>
                            </div>
                            <a class="tit" href="/book/18962.html" title="总裁盛宠：捉妻入瓮艾薇应星晖全文精彩内容免费阅读" data-type="mip">总裁盛宠：捉妻入瓮</a>
                            <p class="intro">《总裁盛宠：捉妻入瓮》作者对读着情绪把控很到位，情感和文笔可以再细腻一些，虽然偶尔一章拖节奏。但是在目前小说界烂文居多的环境下，本文也算得上值得一看的好文章。都市言情，一定要带好剧情，带好节奏，带好观众情绪。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>看朱成碧</span><em class="type">总裁豪门</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP2</em></i>
                        </li><li class="s3">
                            <div class="pic">
                                <img src="/d/file/201905/21/thumb_200_266_5ZCI56ef5aWz56We5bm7.jpg" alt="合租女神"></img>
                            </div>
                            <a class="tit" href="/book/18939.html" title="主角是靳天杨茜的小说在线阅读 合租女神免费阅读" data-type="mip">合租女神</a>
                            <p class="intro">从整体来讲还是可以的，《合租女神》有新颖的角度故事，有自己一定的幽默性，故事比较接地气。但也存在不足，故事的逻辑性不够严谨，笔风略现浮夸，不够成熟。希望作者可以越写越好。</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>凤鸣</span><em class="type">都市职场</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP3</em></i>
                        </li><li class="s4">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_5oiR55qE5rW36J665aeR.png" alt="我的海螺姑娘"></img>
                            </div>
                            <a class="tit" href="/book/18884.html" title="我的海螺姑娘全文免费阅读 我的海螺姑娘张凯台若菲最新章节" data-type="mip">我的海螺姑娘</a>
                            <p class="intro">《我的海螺姑娘》小说整体节奏不快，男主性格低调，剧情诙谐幽默发展合理，真心不错，值得一看！！！</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>雪豹</span><em class="type">都市职场</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP4</em></i>
                        </li><li class="s5">
                            <div class="pic">
                                <img src="/d/file/201905/20/5bCR54i377yM5L2g5a62.jpg" alt="少爷，你家夫人要造反"></img>
                            </div>
                            <a class="tit" href="/book/18879.html" title="少爷，你家夫人要造反全文免费阅读 少爷，你家夫人要造反叶清欢邵允琛小说最新章节" data-type="mip">少爷，你家夫人要造反</a>
                            <p class="intro">《少爷，你家夫人要造反》书的内容情节都非常好，善良，孝顺，勇敢，坚强，立志，做人处事鲜明，一部非常好看的书，</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>木宝儿</span><em class="type">现代言情</em>
                                <em class="serial">连载中</em>
                            </p>
                            <i class="num"><em>TOP5</em></i>
                        </li><li class="s6">
                            <div class="pic">
                                <img src="/d/file/201905/20/thumb_200_266_5LiA57q45aWR57qmMzY1.jpg" alt="一纸契约365天：黎少的秘密情人"></img>
                            </div>
                            <a class="tit" href="/book/18765.html" title="一纸契约365天：黎少的秘密情人白潇然黎夜小说全文阅读 一纸契约365天：黎少的秘密情人精彩章节" data-type="mip">一纸契约365天：黎少的秘密情人</a>
                            <p class="intro">《一纸契约365天：黎少的秘密情人》真心写的不错，人物事态的发展既贴切又符合逻辑，一点也不不牵强附会，顺畅自然，语言灵活生动，诙谐幽默。看了记不清的小说，唯此作者写的最好！</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>黎大少爷</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP6</em></i>
                        </li><li class="s7">
                            <div class="pic">
                                <img src="/d/file/201905/20/5pyA5by65qGD6Iqx5oiS.jpg" alt="最强桃花戒"></img>
                            </div>
                            <a class="tit" href="/book/18764.html" title="《最强桃花戒》宋砚韩莎全文免费阅读" data-type="mip">最强桃花戒</a>
                            <p class="intro">《最强桃花戒》书中虽然文笔有点幼稚，但是也慢慢走向成熟。。并且文笔自然，情节松弛有度。没有其他小说一成不变的套路，人物性格明显。。个人觉得值得一看</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>不是蚊子</span><em class="type">都市职场</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP7</em></i>
                        </li><li class="s8">
                            <div class="pic">
                                <img src="/d/file/201905/19/thumb_200_266_5oC76KOB6ZqQ5ama55Sc.jpg" alt="总裁隐婚甜妻"></img>
                            </div>
                            <a class="tit" href="/book/18749.html" title="总裁隐婚甜妻全文免费阅读 总裁隐婚甜妻慕浅陆云深小说最新章节" data-type="mip">总裁隐婚甜妻</a>
                            <p class="intro">《总裁隐婚甜妻》挺不错的一本书，没有许多都市小说的老剧情，反而是一种新奇的书写风格，更加真切描述出主角的牛逼。悬念也多可谓是吊足胃口，我坐等更新</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>古月</span><em class="type">都市职场</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP8</em></i>
                        </li><li class="s9">
                            <div class="pic">
                                <img src="/d/file/201905/19/thumb_200_266_6Zy45a6g55Sc5aa777ya.jpg" alt="霸宠甜妻：高冷男神吃不够"></img>
                            </div>
                            <a class="tit" href="/book/18736.html" title="《霸宠甜妻：高冷男神吃不够》宋佳音宫亦琛小说在线阅读" data-type="mip">霸宠甜妻：高冷男神吃不够</a>
                            <p class="intro">各位杀友，蜀得一龙，吴得一虎，魏得一狗，请问一狗指的是谁</p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>宋佳音</span><em class="type">现代言情</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP9</em></i>
                        </li><li class="s10">
                            <div class="pic">
                                <img src="/d/file/201905/19/thumb_200_266_5rCR6Ze06Zi06Ziz5biI.jpg" alt="民间阴阳师"></img>
                            </div>
                            <a class="tit" href="/book/18735.html" title="民间阴阳师免费阅读 林小七小说全文在线阅读" data-type="mip">民间阴阳师</a>
                            <p class="intro"></p>
                            <p class="info"><span><i class="iconfont">&#xe600;</i>七仔</span><em class="type">灵异科幻</em>
                                <em class="finish">已完结</em>                                </p>
                            <i class="num"><em>TOP10</em></i>
                        </li>                        </ul>
                </div>
            </div>
        </mip-vd-tabs>
    </div>
    <!-- /rank -->
</div>
<div class="cmargin"></div>


@stop


@section('script')

@stop