<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>网站模板_jQuery特效_PHP教程_网站源码_商城源码_素材火</title>
    <meta name="keywords" content="网站模板,jQuery特效,网站源码,PHP教程,素材火">
    <meta name="description" content="素材火提供网站模板,jQuery特效,PHP包括PHP教程PHP源码PHP商城源码PHP培训PHP面试题和PHP招聘等">
    <link rel="shortcut icon" href="http://www.sucaihuo.com/Public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/sucai/Public/HOME/style/style_version2016.css" type="text/css">


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
<div class="container">
    <div class="index_per index_first clearfix">
        <div class="sidebar_per sidebar_first">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/js/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>最新更新 <span class="name-en">/New</span></strong>
                </dt>
                <dd class="sidebar_articles">
                    <span>06-07</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/870.html">jquery动画切换排序点击放大切换</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>06-05</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/869.html">ThinkBox仿thinkphp头像名片</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>06-04</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/868.html">pickerDateRange日期范围选取</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>06-03</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/867.html">PHP原生写的缩略图类</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>06-02</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/866.html">jQuery定位滚动导航效果代码</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>06-02</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/865.html">jquery电子杂志</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>06-02</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/864.html">jquery点击小图全屏显示大图的相册代码</a>
                </dd>
            </dl>
        </div>
        <div class="index_left clearfix">
            <div class="banner" id="banner">
                <div class="tempWrap" style="overflow:hidden; position:relative; width:600px">
                    <ul style="width: 5400px; left: -1800px; position: relative; overflow: hidden; padding: 0px; margin: 0px;"
                        id="index_banner">
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/templates/318.html">
                                <img alt="超帅的中文响应式网络公司网页模板" src="/sucai/Public/HOME/Images/56e5ebf1e81bd.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/js/565">
                                <img alt="php快递运单号接口查询 " src="/sucai/Public/HOME/Images/56e5ec37a03a5.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/templates/390">
                                <img alt="knewone2016最新分享购物网站模板" src="/sucai/Public/HOME/Images/56e5ec76bbf6f.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/templates/358">
                                <img alt="好友送你3次抽奖机会" src="/sucai/Public/HOME/Images/56e5ec9380cbc.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/php/524.html">
                                <img alt="Thinkphp各大支付平台在线支付" src="/sucai/Public/HOME/Images/56e5ecba0ce10.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/templates/354">
                                <img alt="三九手机网手机响应式模版" src="/sucai/Public/HOME/Images/56e5ecd103ec1.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/js/512">
                                <img alt="PHP素材火签到演示与下载 " src="/sucai/Public/HOME/Images/56e5ecf6eaad3.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/templates/323">
                                <img alt="拍鞋网2015最新全站网站模板" src="/sucai/Public/HOME/Images/56e5ed0b4d008.jpg">
                            </a>
                        </li>
                        <li style="float: left; width: 600px;">
                            <a target="_blank" href="http://www.sucaihuo.com/templates/164">
                                <img alt="大气个性的小米官网商城模板下载" src="/sucai/Public/HOME/Images/56e5ed332a287.jpg">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="banner_page" id="banner_page"><a class="">1</a><a class="">2</a><a class="">3</a><a
                        class="current">4</a><a class="">5</a><a class="">6</a><a class="">7</a><a class="">8</a><a
                        class="">9</a></div>
                <a style="display: inline;" class="banner_page_btn banner_page_left" id="banner_page_left"></a>
                <a style="display: inline;" class="banner_page_btn banner_page_right" id="banner_page_right"></a>
            </div>
            <div class="merchant_cats">
                <div class="head"><h3>网站快速导航</h3></div>
                <div class="content" id="merchant_cats_menus">
                    <a href="http://www.sucaihuo.com/templates"><i class="merchant_arrow merchant_arrow_right"></i><span
                            class="icon_merchant icon_merchant_fire"></span><span class="name">网站模板</span><i
                            class="merchant_arrow_left"></i> </a>
                    <a href="http://www.sucaihuo.com/templates/0-0-52-0-0-0"><i
                            class="merchant_arrow merchant_arrow_right"></i><span
                            class="icon_merchant icon_merchant_mobile"></span><span class="name">手机模板</span><i
                            class="merchant_arrow_left"></i></a>
                    <a href="http://www.sucaihuo.com/js"><i class="merchant_arrow merchant_arrow_right"></i><span
                            class="icon_merchant icon_merchant_js"></span><span class="name">网页特效</span><i
                            class="merchant_arrow_left"></i></a>
                    <a href="http://www.sucaihuo.com/php"><i class="merchant_arrow merchant_arrow_right"></i><span
                            class="icon_merchant icon_merchant_png"></span><span class="name">PHP</span><i
                            class="merchant_arrow_left"></i></a>
                    <a href="http://www.sucaihuo.com/site"><i class="merchant_arrow merchant_arrow_right"></i><span
                            class="icon_merchant icon_merchant_typeface"></span><span class="name">精品网址</span><i
                            class="merchant_arrow_left"></i></a>
                    <a href="http://www.sucaihuo.com/php/124-0-0-0"><i
                            class="merchant_arrow merchant_arrow_right"></i><span
                            class="icon_merchant icon_merchant_code"></span><span class="name">Ajax</span><i
                            class="merchant_arrow_left"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="index_per clearfix">
        <div class="sidebar_per sidebar_second">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/templates/0-0-0-6-0-0" class="more" target="_blank">更多&nbsp;<span
                            class="more-sign">&gt;</span></a>
                    <strong>推荐模板 <span class="name-en">/Template</span></strong>
                </dt>
                <dd class="sidebar_articles">
                    <span>02-19</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/506.html">flatty红色大气的管理系统模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-18</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/505.html">灰色简单的金融网站模板下载</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-18</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/503.html">mui金融行业app模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-17</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/493.html">EduSoho开源网络课堂系统官网模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-09</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/462.html">三级分销微信商城模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-05</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/446.html">仿马蜂窝手机响应式模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-04</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/444.html">精仿苏宁电器商城网站模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-04</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/443.html">素材火官网网站模板下载</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-03</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/440.html">联途旅游网全套bootstrap网站模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-03</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/438.html">投票任务平台手机版</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-03</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/437.html">投票任务服务平台bootstrap响应式微信模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-02</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/436.html">58同城多城市切换单页模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-02</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/435.html">一号店 - walmart沃尔玛网上商城模板</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>01-26</span>
                    <a target="_blank" href="http://www.sucaihuo.com/templates/408.html">英盛网蓝色简洁大气的教育培训网站模板</a>
                </dd>
            </dl>
        </div>
        <div class="index_recommend" id="index_recommend_0">
            <div class="head clearfix">
                <strong>网站模板</strong>
                <a class="more" href="http://www.sucaihuo.com/templates" target="_blank">更多&nbsp;<span
                        class="more-sign">&gt;</span></a>
                <ul class="clearfix index-coupon-menus">
                    <li class="current index-coupon-menus-first">
                        全部
                        <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        行业 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        商城 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        企业 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        专题 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        后台 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        其他 <span class="arrow-up-menu arrow"></span>
                    </li>
                </ul>
            </div>
            <div class="content clearfix">
                <div class="per current">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/600.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_023.jpg"
                                 original="http://www.sucaihuo.com/modals/6/600/small.jpg" alt="精仿360同城帮维修电脑手机模板"
                                 class="lazy">
                            精仿360同城帮维修电脑手机模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/582.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small.jpg"
                                 original="http://www.sucaihuo.com/modals/5/582/small.jpg" alt="设计简单完美的网站建设公司企业模板"
                                 class="lazy">
                            设计简单完美的网站建设公司企业模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/509.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_031.jpg"
                                 original="http://www.sucaihuo.com/modals/5/509/small.jpg" alt="AmaAdmin带登录验证的完整后台模板"
                                 class="lazy">
                            AmaAdmin带登录验证的完整后台模板 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/642.html">响应式国外商城网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/641.html">漂亮的网络科技网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/640.html">打折类商城网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/639.html">简单大气的国外响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/638.html">简洁大气的登录注册页面模板源码</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/637.html">大气的社区登录页面模板html</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/636.html">带banner滚动的登录页模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/635.html">后台模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/634.html">折扣网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/633.html">蓝色企业网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/632.html">哇塞网首页模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/631.html">简单的响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/630.html">响应式网络科技公司网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/629.html">生活家具类网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/628.html">可爱的公司网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/627.html">国外小型购物网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/626.html">物流后台管理系统</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/625.html">仿凡客首页模板</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/446.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_030.jpg"
                                 original="http://www.sucaihuo.com/modals/4/446/small.jpg" alt="仿马蜂窝手机响应式模板"
                                 class="lazy">
                            仿马蜂窝手机响应式模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/440.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_028.jpg"
                                 original="http://www.sucaihuo.com/modals/4/440/small.jpg" alt="联途旅游网全套bootstrap网站模板"
                                 class="lazy">
                            联途旅游网全套bootstrap网站模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/369.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_005.jpg"
                                 original="http://www.sucaihuo.com/modals/3/369/small.jpg" alt="游戏中心官网模版" class="lazy">
                            游戏中心官网模版 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/641.html">漂亮的网络科技网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/633.html">蓝色企业网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/631.html">简单的响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/630.html">响应式网络科技公司网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/629.html">生活家具类网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/628.html">可爱的公司网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/627.html">国外小型购物网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/623.html">高大尚响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/621.html">bootstrap企业网站模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/618.html">婚纱摄影类网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/612.html">适合做blog网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/605.html">黑白搭配软件开发企业网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/577.html">惠品优商企业网站建设模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/569.html">山河旅行社响应式旅游模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/538.html">美食与生活的在线订餐网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/536.html">TI联盟网站建设模板下载</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/504.html">mui酒店预订app模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/446.html">仿马蜂窝手机响应式模板</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/600.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_023.jpg"
                                 original="http://www.sucaihuo.com/modals/6/600/small.jpg" alt="精仿360同城帮维修电脑手机模板"
                                 class="lazy">
                            精仿360同城帮维修电脑手机模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/462.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_007.jpg"
                                 original="http://www.sucaihuo.com/modals/4/462/small.jpg" alt="三级分销微信商城模板"
                                 class="lazy">
                            三级分销微信商城模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/444.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_016.jpg"
                                 original="http://www.sucaihuo.com/modals/4/444/small.jpg" alt="精仿苏宁电器商城网站模板"
                                 class="lazy">
                            精仿苏宁电器商城网站模板 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/642.html">响应式国外商城网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/640.html">打折类商城网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/634.html">折扣网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/632.html">哇塞网首页模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/629.html">生活家具类网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/627.html">国外小型购物网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/625.html">仿凡客首页模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/619.html">响应式商城模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/614.html">国外营销型网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/609.html">bootstrap外国购物网站</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/608.html">国外购物网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/604.html">商城首页模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/600.html">精仿360同城帮维修电脑手机模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/580.html">仿京东购物车地址模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/579.html">绿色简单的通用商城模板下载</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/578.html">全民团购自己写的首页模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/568.html">微分销最专业的分销系统模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/567.html">神价网商城价格降价监控直播平台</a>
                        </li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/582.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small.jpg"
                                 original="http://www.sucaihuo.com/modals/5/582/small.jpg" alt="设计简单完美的网站建设公司企业模板"
                                 class="lazy">
                            设计简单完美的网站建设公司企业模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/505.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_033.jpg"
                                 original="http://www.sucaihuo.com/modals/5/505/small.jpg" alt="灰色简单的金融网站模板下载"
                                 class="lazy">
                            灰色简单的金融网站模板下载 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/503.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_002.jpg"
                                 original="http://www.sucaihuo.com/modals/5/503/small.jpg" alt="mui金融行业app模板"
                                 class="lazy">
                            mui金融行业app模板 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/641.html">漂亮的网络科技网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/639.html">简单大气的国外响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/633.html">蓝色企业网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/631.html">简单的响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/630.html">响应式网络科技公司网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/629.html">生活家具类网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/628.html">可爱的公司网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/623.html">高大尚响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/621.html">bootstrap企业网站模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/618.html">婚纱摄影类网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/617.html">国外网建公司网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/616.html">响应式企业网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/615.html">简单大气自适应网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/612.html">适合做blog网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/611.html">响应式企业网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/610.html">响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/607.html">黄色营销型企业网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/605.html">黑白搭配软件开发企业网站模板</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/436.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_022.jpg"
                                 original="http://www.sucaihuo.com/modals/4/436/small.jpg" alt="58同城多城市切换单页模板"
                                 class="lazy">
                            58同城多城市切换单页模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/370.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_015.jpg"
                                 original="http://www.sucaihuo.com/modals/3/370/small.jpg" alt="小娱儿心理测试模版" class="lazy">
                            小娱儿心理测试模版 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/358.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_019.jpg"
                                 original="http://www.sucaihuo.com/modals/3/358/small.jpg" alt="好友送你3次抽奖机会"
                                 class="lazy">
                            好友送你3次抽奖机会 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/436.html">58同城多城市切换单页模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/427.html">奇葩灯谜会手机选择测试模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/418.html">腾讯众创空间专题模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/378.html">网站倒计时上线单页专题模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/370.html">小娱儿心理测试模版</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/358.html">好友送你3次抽奖机会</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/332.html">红色大气的转盘抽奖活动模板专题</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/300.html">万圣节Halloween专题模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/296.html">55海淘圣诞送礼活动主题模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/284.html">红色喜庆的圣诞+元旦活动专题模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/174.html">幼儿园投票专题手机模板下载</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/62.html">腾讯互动娱乐跟随鼠标滚动全屏展示专题模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/61.html">全屏鼠标滚动动画专题模板</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/509.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_031.jpg"
                                 original="http://www.sucaihuo.com/modals/5/509/small.jpg" alt="AmaAdmin带登录验证的完整后台模板"
                                 class="lazy">
                            AmaAdmin带登录验证的完整后台模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/506.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_009.jpg"
                                 original="http://www.sucaihuo.com/modals/5/506/small.jpg" alt="flatty红色大气的管理系统模板"
                                 class="lazy">
                            flatty红色大气的管理系统模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/438.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_034.jpg"
                                 original="http://www.sucaihuo.com/modals/4/438/small.jpg" alt="投票任务平台手机版" class="lazy">
                            投票任务平台手机版 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/635.html">后台模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/626.html">物流后台管理系统</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/620.html">bootstrap后台模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/606.html">物资管理调度后台系统</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/603.html">前后台通用的登录页面</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/591.html">hui.admin后台免费模板下载</a>
                        </li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/templates/590.html">国外通用的bootstrap响应式企业模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/589.html">CloudAdmin响应式后台系统模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/588.html">长江航道局供货管理系统ace模板</a>
                        </li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/templates/586.html">bootstrap左右结构响应式后台单入口模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/581.html">校友网后台管理模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/561.html">某it大神后台博客界面模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/557.html">微信扫码后台登录模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/528.html">简单通用的学生毕业设计后台模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/520.html">SB admin
                            V2.0后台响应式模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/518.html">Realm适合新手的bootstrap响应式后台模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/513.html">背景漂浮着白云的后台登录界面html</a>
                        </li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/templates/512.html">bootstrap简洁的后台admin模板</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/407.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_014.jpg"
                                 original="http://www.sucaihuo.com/modals/4/407/small.jpg" alt="可做跳转提示或404的蓝天白云主题动画模板"
                                 class="lazy">
                            可做跳转提示或404的蓝天白云主题动画模板 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/400.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_025.jpg"
                                 original="http://www.sucaihuo.com/modals/4/400/small.jpg" alt="享笑网有图有音乐有文章网站模板下载"
                                 class="lazy">
                            享笑网有图有音乐有文章网站模板下载 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/385.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_011.jpg"
                                 original="http://www.sucaihuo.com/modals/3/385/small.jpg" alt="丹东本地生活社区模板"
                                 class="lazy">
                            丹东本地生活社区模板 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/638.html">简洁大气的登录注册页面模板源码</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/637.html">大气的社区登录页面模板html</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/636.html">带banner滚动的登录页模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/631.html">简单的响应式网站模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/622.html">个人博客首页</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/595.html">嗨社区3个简单的手机版演示页面</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/594.html">mui手机注册app模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/555.html">Spirit国外个人博客模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/553.html">我爱教室网视频网站模板下载</a></li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/templates/535.html">异清轩技术博客bootstrap响应式模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/500.html">Portfolio个人简介响应式模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/496.html">学生信息管理系统免费模板下载</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/476.html">绿色简洁的怀念网门户网站模板下载</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/420.html">页面齐全的橙色响应式手机端个人中心模板</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/409.html">404您访问的页面被外星人掳走了</a>
                        </li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/templates/407.html">可做跳转提示或404的蓝天白云主题动画模板</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/400.html">享笑网有图有音乐有文章网站模板下载</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/templates/396.html">前后台通用的登录注册表单模板</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sidebar_per sidebar_second">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/js/0-0-6-0" class="more" target="_blank">更多&nbsp;<span
                            class="more-sign">&gt;</span></a>
                    <strong>推荐特效 <span class="name-en">/jQuery</span></strong>
                </dt>
                <dd class="sidebar_articles">
                    <span>06-01</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/862.html">fusioncharts六种不同的PHP图表</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>05-29</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/848.html">jquery百度预测焦点图代码</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>03-11</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/846.html">fullCalendar超帅的无刷新响应式日历演示</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>03-06</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/830.html">PHP仿微信多图片预览上传</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>03-06</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/829.html">Thinkphp整合ucenter同步登录注册退出</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>03-05</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/826.html">jQuery筛选过滤插件Filterizr演示</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>03-02</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/817.html">jQuery仿途牛首页定时幻灯片轮播效果</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>03-01</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/816.html">PHP仿素材火评论系统</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-29</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/811.html">jQuery黑白两种响应式手机下拉框select</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-27</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/807.html">viewer.js强大的响应式图片弹出层(360度旋转、放大缩小)</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-27</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/806.html">liMarquee演示12种不同的无缝滚动效果</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-18</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/778.html">jQuery仿qq投票统计动画效果</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>02-04</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/736.html">layer演示5种通用的手机弹出层</a>
                </dd>
                <dd class="sidebar_articles">
                    <span>01-31</span>
                    <a target="_blank" href="http://www.sucaihuo.com/js/724.html">PHP九宫格抽奖源码示例</a>
                </dd>
            </dl>
        </div>
        <div class="index_recommend" id="index_recommend_1">
            <div class="head clearfix">
                <strong>网页特效</strong>
                <a class="more" href="http://www.sucaihuo.com/js" target="_blank">更多&nbsp;<span
                        class="more-sign">&gt;</span></a>
                <ul class="index-coupon-menus clearfix">
                    <li class="current index-coupon-menus-first">
                        全部
                        <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        图片代码 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        导航菜单 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        选项卡/滑动门 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        文字特效 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        表单代码 <span class="arrow-up-menu arrow"></span>
                    </li>
                    <li>
                        悬浮层/弹出层 <span class="arrow-up-menu arrow"></span>
                    </li>
                </ul>
            </div>
            <div class="content clearfix">
                <div class="per current">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/869.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_006.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/869/small.jpg" alt="ThinkBox仿thinkphp头像名片"
                                 class="lazy">
                            ThinkBox仿thinkphp头像名片 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/868.html">
                            <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/868/small.jpg"
                                 alt="pickerDateRange日期范围选取" class="lazy">
                            pickerDateRange日期范围选取 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/863.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_026.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/863/small.jpg" alt="plupload仿新浪微博多图片上传兼容IE"
                                 class="lazy">
                            plupload仿新浪微博多图片上传兼容IE </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/870.html">jquery动画切换排序点击放大切换</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/867.html">PHP原生写的缩略图类</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/866.html">jQuery定位滚动导航效果代码</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/865.html">jquery电子杂志</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/864.html">jquery点击小图全屏显示大图的相册代码</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/862.html">fusioncharts六种不同的PHP图表</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/861.html">jQuery的单页面滚动导航设计插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/860.html">jquery弹出层登录和切换全屏层注册特效</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/859.html">jQuery弹出层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/858.html">Jquery淡入透明条缩略图广告图</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/857.html">jquery带下拉菜单和焦点图插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/856.html">jquery带农历和节假日日历</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/855.html">jquery带登录注册幻灯片代码</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/854.html">jquery制作左右按钮控制焦点图片满屏滚动</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/853.html">jquery打分评星级效果</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/852.html">jquery穿梭式滑动风格幻灯片</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/851.html">jQuery插件MixItUp图片分类过滤排序</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/850.html">jQuery侧边固定悬浮导航</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/848.html">
                            <img style="" src="/sucai/Public/HOME/Images/grey.gif"
                                 original="http://www.sucaihuo.com/jquery/8/848/small.jpg" alt="jquery百度预测焦点图代码"
                                 class="lazy">
                            jquery百度预测焦点图代码 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/817.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_010.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/817/small.jpg" alt="jQuery仿途牛首页定时幻灯片轮播效果"
                                 class="lazy">
                            jQuery仿途牛首页定时幻灯片轮播效果 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/807.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_013.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/807/small.jpg"
                                 alt="viewer.js强大的响应式图片弹出层(360度旋转、放大缩小)" class="lazy">
                            viewer.js强大的响应式图片弹出层(360度旋转、放大缩小) </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/870.html">jquery动画切换排序点击放大切换</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/864.html">jquery点击小图全屏显示大图的相册代码</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/858.html">Jquery淡入透明条缩略图广告图</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/857.html">jquery带下拉菜单和焦点图插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/854.html">jquery制作左右按钮控制焦点图片满屏滚动</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/852.html">jquery穿梭式滑动风格幻灯片</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/851.html">jQuery插件MixItUp图片分类过滤排序</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/848.html">jquery百度预测焦点图代码</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/841.html">animate实现6种不同切换遮罩层方法</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/840.html">ZoomPic.js多图3D旋转图片轮播效果</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/823.html">shutter水平和垂直百叶窗切换效果</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/820.html">jQuery仿腾讯相册可左右切换</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/819.html">jQuery缩略图列表切换优酷视频</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/818.html">layerGlide标题和图片焦点轮播图插件</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/817.html">jQuery仿途牛首页定时幻灯片轮播效果</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/808.html">slidizle演示8种不同的幻灯片调用方法</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/807.html">viewer.js强大的响应式图片弹出层(360度旋转、放大缩小)</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/806.html">liMarquee演示12种不同的无缝滚动效果</a>
                        </li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/660.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_008.jpg"
                                 original="http://www.sucaihuo.com/jquery/6/660/small.jpg"
                                 alt="bootstrap-treeview.js多级下拉树菜单" class="lazy">
                            bootstrap-treeview.js多级下拉树菜单 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/143.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_004.jpg"
                                 original="http://www.sucaihuo.com/jquery/1/143/small.jpg" alt="clueTip简单实用的信息提示框"
                                 class="lazy">
                            clueTip简单实用的信息提示框 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/52.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_032.jpg"
                                 original="http://www.sucaihuo.com/jquery/0/52/small.jpg" alt="jQuery仿天猫左侧分类导航"
                                 class="lazy">
                            jQuery仿天猫左侧分类导航 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/866.html">jQuery定位滚动导航效果代码</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/861.html">jQuery的单页面滚动导航设计插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/857.html">jquery带下拉菜单和焦点图插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/850.html">jQuery侧边固定悬浮导航</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/843.html">animate实现固定导航浮动层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/828.html">fullPage.js魅蓝滚动加载手机产品介绍图</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/810.html">okayNav响应式菜单插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/804.html">js蓝色通用滑动导航菜单显示下拉菜单效果</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/795.html">js二级下拉导航菜单演示下载</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/794.html">javascript多级下拉菜单插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/793.html">jQuery有滑动动感的导航菜单</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/773.html">ace精美的树菜单插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/768.html">jquery.tree.js树形导航菜单插件</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/762.html">jQuery通用的二级下拉菜单滑动效果</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/759.html">jQuery七种不同的打开菜单效果</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/740.html">html5演示6种不同的响应式图标菜单</a></li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/js/660.html">bootstrap-treeview.js多级下拉树菜单</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/659.html">jQuery弹出侧边栏滑动菜单</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/197.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_024.jpg"
                                 original="http://www.sucaihuo.com/jquery/1/197/small.jpg"
                                 alt="tabulous.js效果酷炫的Tab选项卡插件" class="lazy">
                            tabulous.js效果酷炫的Tab选项卡插件 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/16.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_029.jpg"
                                 original="http://www.sucaihuo.com/jquery/0/16/small.jpg" alt="jquery.bxSlider响应式滑动插件"
                                 class="lazy">
                            jquery.bxSlider响应式滑动插件 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/7.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_018.jpg"
                                 original="http://www.sucaihuo.com/jquery/0/7/small.jpg"
                                 alt="SuperSlide焦点图_Tab切换_图片滚动_无缝滚动" class="lazy">
                            SuperSlide焦点图_Tab切换_图片滚动_无缝滚动 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/800.html">js通用的tab选项卡切换图片</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/769.html">hScrollPane美化滚动条插件并带焦点图切换</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/701.html">cbpContentSlider滑动切换对应内容</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/504.html">tabs选项卡插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/250.html">jQuery横向彩色手风琴菜单</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/197.html">tabulous.js效果酷炫的Tab选项卡插件</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/133.html">jQuery选项卡搜索框切换</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/16.html">jquery.bxSlider响应式滑动插件</a></li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/js/7.html">SuperSlide焦点图_Tab切换_图片滚动_无缝滚动</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/214.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_012.jpg"
                                 original="http://www.sucaihuo.com/jquery/2/214/small.jpg" alt="jQuery仿ace添加标签"
                                 class="lazy">
                            jQuery仿ace添加标签 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/213.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_003.jpg"
                                 original="http://www.sucaihuo.com/jquery/2/213/small.jpg" alt="jQuery间歇滚动跑马灯效果"
                                 class="lazy">
                            jQuery间歇滚动跑马灯效果 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/838.html">纯js实现两种不同的文字滚动方式</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/729.html">jQuery网页底部阴影浮动层文字滚动</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/674.html">textillate演示N种不同的文字动画</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/522.html">jquery文字上下滚动</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/459.html">jQuery演示三种文字垂直滚动</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/270.html">jQueryNotes仿QQ空间添加标记</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/226.html">BreakingNews演示3种间歇滚动效果</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/214.html">jQuery仿ace添加标签</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/213.html">jQuery间歇滚动跑马灯效果</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/830.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_021.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/830/small.jpg" alt="PHP仿微信多图片预览上传"
                                 class="lazy">
                            PHP仿微信多图片预览上传 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/829.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_017.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/829/small.jpg"
                                 alt="Thinkphp整合ucenter同步登录注册退出" class="lazy">
                            Thinkphp整合ucenter同步登录注册退出 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/826.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_020.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/826/small.jpg" alt="jQuery筛选过滤插件Filterizr演示"
                                 class="lazy">
                            jQuery筛选过滤插件Filterizr演示 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/860.html">jquery弹出层登录和切换全屏层注册特效</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/855.html">jquery带登录注册幻灯片代码</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/849.html">jquery表单验证实例</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/834.html">jQuery可实时编辑修改的表格table</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/830.html">PHP仿微信多图片预览上传</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/829.html">Thinkphp整合ucenter同步登录注册退出</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/826.html">jQuery筛选过滤插件Filterizr演示</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/811.html">jQuery黑白两种响应式手机下拉框select</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/801.html">XformCheck邮箱、中文、手机号和数字实时验证</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/796.html">jQuery选项卡过滤图片类型</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/779.html">js支持拼音分类的多城市选择弹出层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/755.html">ui-choose美化列表插件</a></li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/js/750.html">simpleBtChecks美化复选框checkbox</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/704.html">rcswitcher将radio和checkbox转换成多皮肤开关按钮</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/698.html">Fancy Sliding
                            Form花哨的表单滑动插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/697.html">hideseek输入框搜索查询插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/695.html">progression表单输入完成进度提示框插件</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/694.html">jQuery表单输入验证并填充信用卡内容</a></li>
                    </ul>
                </div>
                <div class="per">
                    <ul class="ul_pics">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/869.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_006.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/869/small.jpg" alt="ThinkBox仿thinkphp头像名片"
                                 class="lazy">
                            ThinkBox仿thinkphp头像名片 </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/807.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_013.jpg"
                                 original="http://www.sucaihuo.com/jquery/8/807/small.jpg"
                                 alt="viewer.js强大的响应式图片弹出层(360度旋转、放大缩小)" class="lazy">
                            viewer.js强大的响应式图片弹出层(360度旋转、放大缩小) </a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/736.html">
                            <img style="display: inline;" src="/sucai/Public/HOME/Images/small_027.jpg"
                                 original="http://www.sucaihuo.com/jquery/7/736/small.jpg" alt="layer演示5种通用的手机弹出层"
                                 class="lazy">
                            layer演示5种通用的手机弹出层 </a></li>
                    </ul>
                    <ul class="ul_words">
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/869.html">ThinkBox仿thinkphp头像名片</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/860.html">jquery弹出层登录和切换全屏层注册特效</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/859.html">jQuery弹出层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/845.html">baguettebox相册全屏弹窗插件</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/844.html">jQuery仿腾讯顶部弹窗banner</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/843.html">animate实现固定导航浮动层</a></li>
                        <li><a target="_blank"
                               href="http://www.sucaihuo.com/js/842.html">hwLayer.js制作漂亮的确认框和信息提示框&lt;</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/831.html">escape关闭bootstrap响应式弹出层</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/821.html">js打开支持拖动的弹出层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/809.html">lightbox.js演示5种响应式图片弹出层</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/807.html">viewer.js强大的响应式图片弹出层(360度旋转、放大缩小)</a>
                        </li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/797.html">javascript九种自定义弹出层效果</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/792.html">qtip演示4种不同的文字提示</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/779.html">js支持拼音分类的多城市选择弹出层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/777.html">jquery弹出左侧隐藏的浮动层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/771.html">jQuery悬浮菜单动画提示</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/752.html">lightbox制作个性化弹出层</a></li>
                        <li><a target="_blank" href="http://www.sucaihuo.com/js/739.html">9种经典的tooltip信息提示框</a></li>
                    </ul>
                </div>
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

<div id="windown_box" class="modal fade">
    <div class="pop_title">
        <div class="pop_name">登录</div>
        <i class="pop_close" onclick="$('#windown_box').modal('hide')"></i>
    </div>
    <div class="pop_content">
        <div class="form_item">
            <div class="item_tip">用户名/邮箱</div>
            <input id="email" name="email" class="form_input" autocomplete="off" tabindex="1"
                   onblur="blurInputLoginBox($(this))" onfocus="focusInputLoginBox($(this))" type="text">
        </div>
        <div class="form_item">
            <div class="item_tip">密码</div>
            <input name="pwd" id="pwd" class="form_input" tabindex="2" value="" onblur="blurInputLoginBox($(this))"
                   onfocus="focusInputLoginBox($(this))" type="password">
        </div>
        <div class="captchaBox">
            <div class="two_weeks">
                <input id="rememberme" class="ckeckBox" name="rememberme" type="checkbox">
                <label for="rememberme">两周内免登录</label>
                <a href="http://www.sucaihuo.com/reg.html" target="_blank" class="loginbox_reg">免费注册</a>
            </div>
        </div>
        <p class="notice_error"></p>
        <input id="btn_login" class="btn" onclick="sublogin()" tabindex="4" value="登  录" type="button">
        <a class="a_underline" href="http://www.sucaihuo.com/forget.html">忘记密码？</a>
        <div class="co_login" style="margin:20px 0 0">
            联合登录
            <a class="a_underline" href="http://www.sucaihuo.com/Index/login/type/qq.html">腾讯QQ</a>
            <a class="a_underline" href="http://www.sucaihuo.com/Index/login/type/sina.html">新浪微博</a>
            <a class="a_underline" href="http://www.sucaihuo.com/Index/login/type/renren.html">人人网</a>
            绑定送<span class="red">200</span>积分
        </div>
    </div>
</div>
<script src="/sucai/Public/HOME/style/hm.js"></script>
<script src="/sucai/Public/HOME/style/jquery.js" type="text/javascript"></script>
<script src="/sucai/Public/HOME/style/common_version2016.js" type="text/javascript"></script>
<script src="/sucai/Public/HOME/style/jquery_002.js" type="text/javascript"></script>
<div class="mmsg-box mmsg-box-info" id="msg-box" style="margin-top: -23.5px; margin-left: -96.5px;">
    <div class="mmsg-content">
        <i class="mmsg-icon"></i>
        <p id="msg-box-content"></p>
    </div>
    <div class="mmsg-background"></div>
</div>
<script type="text/javascript">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?b5ae3f71dfe5f06a9dd4dc55087f27d1";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s)
    })();
    //var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258090369'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1258090369' type='text/javascript'%3E%3C/script%3E"));
</script>

</body>
</html>