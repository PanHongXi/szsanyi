<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>求助交流 - 素材火</title>
    <meta name="keywords" content="PHP,网站前端,网站源码,网站模板，整站下载，CSS、JS特效、Jquery插件" />
    <meta name="description" content="素材火官网求助交流区,您可以在这里求助各种技术难题,如PHP,前端技术,都会有活跃技术高手为您解答" />
    <link rel="shortcut icon" href="/sucai/Public/HOME/Images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/sucai/Public/HOME/style/style_version5.css" type="text/css" />
    <link rel="stylesheet" href="/sucai/Public/HOME/style/style_version2016.css" type="text/css" />
    <link rel="stylesheet" href="/sucai/Public/HOME/style/topic.css" type="text/css" />
</head>
<body>

<div id="site_nav">
    <div class="sn_container clearfix">
        <ul class="tg_tools fr">
            <li class="no-hover">
                <a href="http://www.sucaihuo.com/Member/pay.html" class="head_pay_btn">充值</a>
            </li>
            <li class="no-hover" style="display: none">
                <a id="msg_notify" class="msg_notify" href="http://www.sucaihuo.com/Member/message.html"></a>
            </li>
            <li class="box_color nav_home">
                <span><a href="/sz/index.php/Home/Member/member_info">个人中心</a></span><b class="icon"></b>
                <ul>
                    <li><a href="/sz/index.php/Home/Member/member_info"><span>我的主页</span></a></li>
                    <li><a href="/sz/index.php/Home/Userinfo/user_info/user_id/<?php echo ($_SESSION['user_id']); ?>"><span>个人设置</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Member/downloads.html"><span>下载记录</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Member/collects.html"><span>我的收藏</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Member/sign.html"><span>我的签到</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Download/logout?r="><span>退出登录</span></a></li>
                </ul>
            </li>
            <li class="tg-line icon"></li>
            <li class="box_color">
                <span>帮助中心</span><b class="icon"></b>
                <ul>
                    <li><a href="http://www.sucaihuo.com/help/template"><span>扒模板</span></a></li>
                    <li><a href="http://www.sucaihuo.com/help/points"><span>积分获取</span></a></li>
                    <li><a href="http://www.sucaihuo.com/help/contact"><span>联系我们</span></a></li>
                    <li><a href="http://www.sucaihuo.com/help/index"><span>关于我们</span></a></li>
                    <li><a href="http://www.sucaihuo.com/help/job"><span>招纳贤士</span></a></li>
                </ul>
            </li>
        </ul>



        <ul  class="tg_tools fl" id="" style="display: inline;">
            <!--login_area-->
            <li class="tg_tools_home no-hover">
                <i class="icon-more"></i>
                <span><a href="http://www.sucaihuo.com/">素材火首页</a></span>
            </li>

            <?php if(!isset($_SESSION['user_id'])): ?><!--session['user_id']-->
                <!--!isset($_SESSION['user_id']) or !isset($_SESSION['username'])-->
                <li class="no-hover nologin">
                <span>
                    <a href="http://www.sucaihuo.com/Index/login/type/qq.html">
                        <img alt="Connect_logo_6.png" src="/sucai/Public/HOME/Images/Connect_logo_6.png" style="position: relative;top:3px;">
                    </a>
                </span>
                </li>

                </li>
                <li class="tg-line icon"></li>
                <li class="no-hover nologin">
                <span>
                    <a href="/sz/index.php/Home/Account/register">注册</a>
                </span>
                </li>
                <li class="box_color nav_home" id="nav_login">
                        <span>
                            <a href="/sz/index.php/Home/Account/login" class="sn_login">登录</a>
                        </span>
                    <b class="icon"></b>
                    <ul>
                        <li>
                            <a href="http://www.sucaihuo.com/Index/login/type/sina.html">
                                <span>新浪微博</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.sucaihuo.com/Index/login/type/renren.html">
                                <span>人人网<i style="visibility: hidden">站</i></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php else: ?>
                <li class="no-hover  haslogin">
                <span>
                    <a href="/sz/index.php/Home/Member/member_info/user_id/<?php echo ($_SESSION['user_id']); ?>">
                        <font  id="head_username" class="sn_login username"><?php echo ($_SESSION['username']); ?></font>
                        <!--<?php echo ($_SESSION['username']); ?>-->
                        <!--<?php echo ($_SESSION['username']['']); ?>-->
                    </a>
                </span>
                <li class="no-hover  haslogin">
                    <span><a href="/sz/index.php/Home/Account/loginOut">退出</a></span>
                </li><?php endif; ?>
        </ul>
    </div>
</div>
<div id="header">
    <div class="tg_tools_home">
        <div class="bbs_enter">
            <a class="bbs-banner" href="http://www.sucaihuo.com/Member/pay.html" target="_blank"><img
                    src="/sucai/Public/HOME/Images/banner.jpg" alt="扒模板"></a>
        </div>
        <div class="logo">
            <a class="logo-bd" href="http://www.sucaihuo.com/"><img src="/sucai/Public/HOME/Images/logo.png" alt="素材火logo"></a>
        </div>
        <form action="http://www.sucaihuo.com/search.html" method="GET" id="form_search" onsubmit="return searchSub()">
            <div id="search">
                <div class="search_area">
                    <input value="搜 索" class="btn_search" type="submit">
                    <div class="search_select">
                        <span class="icon-search"></span>
                    </div>
                    <input value="请输入搜索内容" class="search_input" autocomplete="off" id="search_input"
                           data-default="请输入搜索内容" onblur="checkInputBlur($(this))" onfocus="checkInputFocus($(this))"
                           type="text">
                    <input name="keyword" type="hidden">
                </div>
                <div class="search_box hide" id="search_box"></div>
                <div class="search_keywords">
                    <span>热门搜索：</span>
                    <a href="http://www.sucaihuo.com/search/search.html?keyword=%E6%89%8B%E6%9C%BA" class="red">手机</a>
                    <a href="http://www.sucaihuo.com/js/8-0-0-0">导航菜单</a>
                    <a href="http://www.sucaihuo.com/search/search.html?keyword=bootstrap">bootstrap</a>
                    <a href="http://www.sucaihuo.com/search/search.html?keyword=%E5%90%8E%E5%8F%B0">后台</a>
                    <a href="http://www.sucaihuo.com/search/search.html?keyword=%E4%B8%8A%E4%BC%A0" class="red">上传</a>
                    <a href="http://www.sucaihuo.com/search/search.html?keyword=%E8%B4%AD%E7%89%A9%E8%BD%A6">购物车</a>
                    <a href="http://www.sucaihuo.com/js/106-0-0-0" class="red">日期时间</a>
                    <a href="http://www.sucaihuo.com/search/search.html?keyword=%E5%BC%B9%E5%87%BA%E5%B1%82">弹出层</a>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="nav" class="nav">
    <div class="nav_main clearfix">
        <a href="/sz/index.php" class="menu <?php if( $curr): ?>current<?php endif; ?>">首 页</a>
        <?php if(is_array($cateRes)): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/sz/index.php/Home/<?php if( $vo['cate_type'] == 0): ?>Lst<?php elseif($vo['cate_type'] == 1): ?>Page<?php else: ?>Topic<?php endif; ?>/index/cate_id/<?php echo ($vo['cate_id']); ?>" class="menu <?php if($current == $vo['cate_id'] || $topId == $vo['cate_id']): ?>current<?php endif; ?>"><?php echo ($vo['cate_name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        <span class="icon_hot"></span>
    </div>
</div>
<div class="w_list marquee_announce" style="margin:15px auto 0;width: 1105px;"><marquee scrollamount="5" scrolldelay="10">【<span class="marquee_main">曾经有一个优质网页素材站放在我的面前，我没有好好收藏，当我要用到素材的时候才后悔莫及，如果上天再一次让我来到这个网站，我一定会记住那三个字：素材火！如果这样还怕忘掉，我建议你：收藏夹！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red">温馨提示：</span>已下载的素材再次下载免积分。冲200元以上送一次扒模板机会，冲300元送两次扒模板机会，冲的多送的多</span>，<a href="http://www.lanrenzhijia.com" target="_blank">懒人之家</a>投放广告和技术问题协助联系QQ416148489】</marquee></div>

<div class="wenda clearfix w">
    <div class="wenda-main">
        <ul class="wenda-tab clearfix">
            <li  <?php if(strstr($scateid,',')):?>class='tabactive'<?php endif;?> ><a href="/sz/index.php/Home/Topic/index/cate_id/<?php echo ($current); ?>">全部话题</a></li>
            <?php if(is_array($scateres)): $i = 0; $__LIST__ = $scateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$scateres): $mod = ($i % 2 );++$i;?><li <?php if($scateres['cate_id'] == $scateid): ?>class="tabactive"<?php endif; ?> >
                <a href="/sz/index.php/Home/Topic/index/cate_id/<?php echo ($current); ?>/scateid/<?php echo ($scateres['cate_id']); ?>/state/<?php echo ($state); ?>"><?php echo ($scateres['cate_name']); ?></a>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

        </ul>

        <div class="newpost clearfix">
            <a class="quealltab <?php if($state == "" ): ?>onactive<?php endif; ?> " href="/sz/index.php/Home/Topic/index/cate_id/<?php echo ($current); ?>/<?php if(!strstr($scateid,',')):?>scateid/<?php echo ($scateid); endif;?>">最新</a>
            <a class="quealltab <?php if($state == "hot" ): ?>onactive<?php endif; ?> " href="/sz/index.php/Home/Topic/index/cate_id/<?php echo ($current); ?>/<?php if(!strstr($scateid,',')):?>scateid/<?php echo ($scateid); endif;?>/state/hot">热门</a>
            <a class="quealltab <?php if($state == "wait" ): ?>onactive<?php endif; ?> " href="/sz/index.php/Home/Topic/index/cate_id/<?php echo ($current); ?>/<?php if(!strstr($scateid,',')):?>scateid/<?php echo ($scateid); endif;?>/state/wait">等待回复</a>
        </div>
        <!--左侧列表内容-->
        <div class="wenda-list">


            <?php foreach ($topicRes as $k=>$v ) : ?>
                <div class="wenda-listcon clearfix">
                <div class="headslider">
                    <a title="<?php echo $v['userinfo']['nickname'] ;?>" target="_blank" class="wenda-head" href="">
                        <?php if($v['userinfo']['face50'] != ''): ?><img width="40" height="40" src="/sz<?php echo $v['userinfo']['face50'] ;?>" alt='<?php echo $v["userinfo"]["nickname"] ;?>'/>
                        <?php else: ?>
                            <img width="40" height="40" src="/sucai/Public/HOME/Images/avatar.jpg" alt='<?php echo $v["userinfo"]["nickname"] ;?>'/><?php endif; ?>
                    </a>
                    <a class="wenda-nickname" title="<?php echo $v['userinfo']['nickname'] ;?>" target="_blank" href="">
                        <span class='red'><?php echo $v['userinfo']['nickname'] ;?></span>
                    </a>
                </div>
                <div class="wendaslider">
                    <a class="replynumber hasanswernum" target="_blank" href="http://www.sucaihuo.com/topic/2079.html">
                        <div class="ys">
                            <div class="number">
                                <span><?php echo $v['comment'] ;?></span>
                            </div>
                            <div>回答</div>
                        </div>
                        <div class="browsenum">
                            <div class="number">
                                <span><?php echo $v['click'] ;?></span>
                            </div>
                            <div>浏览</div>
                        </div>
                    </a>

                    <h2 class="wendaquetitle">
                        <!--<i class="icon-ques-revert">111</i>-->
                        <?php if($v['newcomment']['content'] != ''): ?><img style="width: 15px;height: 15px;font-size: 16px;position: absolute;top: 4px;" src="/sucai/Public/HOME/Images/wenhao.jpg" alt=""/>
                          <?php else: ?>
                            <img style="width: 15px;height: 15px;font-size: 16px;position: absolute;top: 4px;" src="/sucai/Public/HOME/Images/luse.jpg" alt=""/><?php endif; ?>
                        <div class="wendatitlecon">
                            <a class="wendatitle"  href="/sz/index.php/Home/Topicart/topicArt/topic_id/<?php echo $v['topic_id'] ;?>/cate_id/<?php echo $v['cate_id'] ;?>"><?php echo $v['topic_title'] ;?></a>
                        </div>
                    </h2>

                    <?php if($v['newcomment']) :?>
                    <div class="replycont clearfix">
                        <!--<i class="icon-msg-revert"></i>-->
                        <img style="width: 15px;height: 15px;font-size: 16px;position: absolute;top: 4px;" src="/sucai/Public/HOME/Images/xinxi.jpg" alt=""/>
                        <div class="l replydes">
                            <span class="replysign praise">[最新回答]</span>
                            <?php if($v['userinfo']['face50'] != ''): ?><img width="20" height="20" src="/sz<?php echo $v['commenter']['face50'] ;?>" alt='头像'>
                                <?php else: ?>
                                <img width="20" height="20" src="/sucai/Public/HOME/Images/avatar.jpg" alt='头像'><?php endif; ?>
                            <?php echo $v['commenter']['nickname'];?>:
                            <span class="replydet"><?php echo $v['newcomment']['content'];?></span>
                        </div>
                    </div>
                    <?php endif ;?>

                    <div class="replymegfooter clearfix">
                        <div class="wenda-time l">
                            <em>提问时间：<?php echo date('Y-m-d H:i:s',$v['release_time']) ;?></em>
                        </div>
                        <div class="keyword-list l">
                            <?php
 if($v['keywords']): $arr =array_filter(explode(',',$v['keywords'])); foreach($arr as $k1=>$v1 ) : ?>

                            <a target="_blank" class="list-tag" href="/sz/index.php/Home/Topic/tagsArr/cate_id/<?php echo $_GET['cate_id'];?>/tags/<?php echo ($v1); ?>"><?php  echo $v1 ;?></a>
                            <?php endforeach; endif ;?>
                        </div>

                    </div>
                </div>
            </div>
           <?php  endforeach ;?>

            <div class="pager"><div style="float: left">共<span class="red"><?php echo ($topicCount); ?> </span>个话题</div>
              <?php echo ($page); ?>
            </div>

            <!--page-->
        </div>
    </div>
    <div class="wenda-slider">
        <!-- pub new ques -->
        <div class="newques-container">
            <a  id="js-newques" class="newques-btn" href="/sz/index.php/Home/Topic/addTopic/cate_id/<?php echo ($current); ?>"><i class="icon-addques"></i>发新话题</a>
        </div>

        <div class="panel wenda-form clearfix">
            <div class="panel-body clearfix">

                <?php if(is_array($tagsRes)): $i = 0; $__LIST__ = $tagsRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tagsRes): $mod = ($i % 2 );++$i;?><a class="hot-label"   href="/sz/index.php/Home/Topic/tagsArr/cate_id/<?php echo $_GET['cate_id'];?>/tags/<?php echo ($tagsRes); ?>" style="margin:0 6px 10px 0"><?php echo ($tagsRes); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="panel hot">
            <div class="panel-heading">
                <h2 class="panel-title">一周热门话题</h2>
            </div>
            <div class="panel-body clearfix">
                <ul class="weekly-hot">
                   <?php foreach($topicWeek as $k => $v) : ?>
                    <li <?php if($k == 0){echo 'class="padtop"';} ;?> ><em class="hoticon hot<?php echo $k+1;?>">热</em><a class="hottalk" target="" href="/sz/index.php/Home/Topicart/topicart/topic_id/<?php echo $v['topic_id']?>/cate_id/<?php echo $v['cate_id']?>"><?php echo mb_substr($v['topic_title'],0,10,'utf-8'); ;?></a><i class="rankingnum"><?php echo $v['comment']?><br>回答</i></li>
                  <?php endforeach ;?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="footer" id="footer" data-url="http://www.sucaihuo.com/"
     data-logout="http://www.sucaihuo.com/Download/logout?r=" data-id="" data-mtype="">
    <div class="footer_main clearfix">
        <div class="guide">
            <span class="guide_icon"></span>
            <ul class="ul_foot">
                <li><strong>网站模板</strong></li>
                <li><a href="http://www.sucaihuo.com/templates/3-0-0-0-0-0">行业模板</a><a
                        href="http://www.sucaihuo.com/templates/7-0-0-0-0-0">专题模板</a></li>
                <li><a href="http://www.sucaihuo.com/templates/4-0-0-0-0-0">商城模板</a><a
                        href="http://www.sucaihuo.com/templates/8-0-0-0-0-0">后台模板</a></li>
                <li><a href="http://www.sucaihuo.com/templates/5-0-0-0-0-0">企业模板</a><a
                        href="http://www.sucaihuo.com/templates/9-0-0-0-0-0">其他模板</a></li>
                <li><a href="http://www.sucaihuo.com/templates/31-0-0-0-96-0">求职招聘</a><a
                        href="http://www.sucaihuo.com/templates/22-0-0-0-96-0">订餐外送</a></li>
                <li><a href="http://www.sucaihuo.com/templates/69-0-0-0-0-0">个人博客</a><a
                        href="http://www.sucaihuo.com/templates/0-0-0-0-96-0">中文模板</a></li>
            </ul>
        </div>
        <div class="stores">
            <span class="stores_icon"></span>
            <ul class="ul_foot">
                <li><strong>jquery特效</strong></li>
                <li><a href="http://www.sucaihuo.com/js/7-0-0-0">图片代码</a><a href="http://www.sucaihuo.com/js/7-0-0-0">悬浮层/弹出层</a>
                </li>
                <li><a href="http://www.sucaihuo.com/js/8-0-0-0">导航菜单</a><a href="http://www.sucaihuo.com/js/14-0-0-0">其它特效</a>
                </li>
                <li><a href="http://www.sucaihuo.com/js/9-0-0-0">选项卡/滑动门</a><a
                        href="http://www.sucaihuo.com/js/53-0-0-0">PHP+Ajax</a></li>
                <li><a href="http://www.sucaihuo.com/js/11-0-0-0">表单代码</a><a
                        href="http://www.sucaihuo.com/js/128-0-0-0">jQuery插件</a></li>
            </ul>
        </div>
        <div class="rebate">
            <span class="rebate_icon"></span>
            <ul class="ul_foot">
                <li><strong>友情链接</strong></li>
                <li><a href="http://www.sucaihuo.com/js/">Js特效</a><a href="http://www.sucaihuo.com/source">整站源码</a></li>
                <li><a href="http://www.sucaihuo.com/php">PHP功能模块</a><a
                        href="http://www.sucaihuo.com/templates">前端模板</a></li>
                <li><a href="http://www.sucaihuo.com/site">精选网址</a><a href="http://www.sucaihuo.com/tools">工具箱</a></li>
                <!-- <li><a href="http://www.au7.com" target="_blank">美女图片</a><a href="http://guju.com.cn/projects" target="_blank">装修案例图</a></li>-->
                <li><a href="http://www.helloweba.com/" target="_blank">前端技术</a></li>
            </ul>
        </div>
        <div class="follow">
            <span class="follow_icon"></span>
            <ul>
                <li>
                    <strong>联系我们</strong>
                </li>
                <li>
                    <a class="qq-chat" href="http://wpa.qq.com/msgrd?v=3&amp;uin=826096331&amp;site=qq&amp;menu=yes"
                       target="_blank">
                        <img alt="QQ在线客服" src="/sucai/Public/HOME/Images/qq-chat.png">
                    </a>

                </li>
                <li>qq群：368848856</li>
                <li>邮箱：826096331@qq.com</li>
                <li>手机：13671989456</li>
            </ul>
        </div>
        <div class="friendly">
            <!--            -->
            <div class="foot_menu">
                <a href="http://www.sucaihuo.com/help/template" target="_blank">扒模板</a>
                <a href="http://www.sucaihuo.com/help/contact" target="_blank">联系我们</a>
                <a href="http://www.sucaihuo.com/help/index" target="_blank">关于我们</a>
                <a href="http://www.sucaihuo.com/help/job" target="_blank">招纳贤士</a>
                <a href="http://www.sucaihuo.com/sitemap.html" target="_blank">网站地图</a>
                <span class="address">Copyright©2010-2015 All Rights Reserved. 苏ICP备15009298</span>
            </div>
        </div>
    </div>
</div>
<div id="windown_box" class="modal fade window_box">

</div>
<script src="/sucai/Public/HOME/style/jquery.js" type="text/javascript"></script>
<script src="/sucai/Public/HOME/style/common_version5.js" type="text/javascript">

</script>
<div id="windown_box2"></div>
<script  type="text/javascript">
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?b5ae3f71dfe5f06a9dd4dc55087f27d1";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s)
    })();
</script>
</body>
</html>