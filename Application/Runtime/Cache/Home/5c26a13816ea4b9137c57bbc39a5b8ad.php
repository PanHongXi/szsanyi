<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>jQuery特效_素材火,素材火官网</title>
    <meta name="keywords" content="素材火官网,jQuery特效,网页特效,JS代码,javascript,jQuery插件,手机特效">
    <meta name="description"
          content="jQuery特效,素材火官网为网页前端人员提供常用的网页特效,包括手机特效、图片代码、导航菜单、选项卡/滑动门资源、文字特效、表单代码、提示框/浮动层/弹出层等资源">
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
                <span><a href="http://www.sucaihuo.com/Member/info.html">个人中心</a></span><b class="icon"></b>
                <ul>
                    <li><a href="http://www.sucaihuo.com/Member/info.html"><span>我的主页</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Member/set.html"><span>个人设置</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Member/downloads.html"><span>下载记录</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Member/collects.html"><span>我的收藏</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Member/sign.html"><span>我的签到</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Download/logout?r=/js"><span>退出登录</span></a></li>
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
        <ul style="display: block;" class="tg_tools fl" id="login_area">
            <li class="tg_tools_home no-hover"><i class="icon-more"></i><span><a
                    href="http://www.sucaihuo.com/">素材火首页</a></span></li>

            <li class="no-hover nologin"><span><a href="http://www.sucaihuo.com/Index/login/type/qq.html"><img
                    alt="Connect_logo_6.png" src="/sucai/Public/HOME/Images/Connect_logo_6.png"
                    style="position: relative;top:3px;"></a></span></li>
            <!--                                                <li class="no-hover nologin"><span><a href="http://www.sucaihuo.com/login.html" class="sn_login">登录</a></span></li>-->
            <li class="no-hover hide haslogin"><span><a href="http://www.sucaihuo.com/Member/info.html"><font
                    class="sn_login username" id="head_username"></font></a></span></li>
            <li class="tg-line icon"></li>
            <li class="no-hover nologin"><span><a href="http://www.sucaihuo.com/reg.html">注册</a></span></li>
            <li class="no-hover hide haslogin"><span><a
                    href="http://www.sucaihuo.com/Download/logout?r=/js">退出</a></span></li>
            <li class="box_color nav_home" id="nav_login">
                <span><a href="http://www.sucaihuo.com/login.html" class="sn_login">登录</a></span><b class="icon"></b>
                <ul>
                    <li><a href="http://www.sucaihuo.com/Index/login/type/sina.html"><span>新浪微博</span></a></li>
                    <li><a href="http://www.sucaihuo.com/Index/login/type/renren.html"><span>人人网<i
                            style="visibility: hidden">站</i></span></a></li>
                </ul>
            </li>
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
        <a href="http://www.sucaihuo.com/" class="menu">首 页</a>
        <a href="http://www.sucaihuo.com/js" class="menu current">jQuery特效</a>
        <a href="http://www.sucaihuo.com/source" class="menu" style="display: block;">整站源码</a>
        <a href="http://www.sucaihuo.com/php" class="menu">PHP</a>
        <a href="http://www.sucaihuo.com/templates" class="menu">前端模板</a>
        <!--                <a href='http://www.sucaihuo.com/psd' class="menu">网站psd</a>-->
        <a href="http://www.sucaihuo.com/topic" class="menu">话题社区</a>
        <a href="http://www.sucaihuo.com/site" class="menu">精选网址</a>
        <a href="http://www.sucaihuo.com/tools" class="menu">工具箱</a>
        <a href="http://www.sucaihuo.com/help/template" class="menu">扒模板</a>
        <!--                <a href='http://idc.sucaihuo.com/' class="menu" target="_blank">服务器</a>-->
        <span class="icon_hot"></span>
    </div>
</div>
<!--<div style="width:1100px;margin:12px auto" class="clearfix">
    <div style="width:700px;float:left">
        <script type="text/javascript">
            /*700*90 创建于 2015-06-27*/
            var cpro_id = "u2176575";
        </script>
        <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
    </div>
    <div style="width:400px;float:left">
        <script type="text/javascript">
            /*400*90 创建于 2015-06-27*/
            var cpro_id = "u2176586";
        </script>
        <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
    </div>
</div>-->
<div id="classify" class="tg_classify">
    <div class="tg_tab_box on">
        <div class="tg_classify_wrap clearfix">
            <dl class="tg_classify_all tg_classify_flat dl_left">
                <dt class="">
                    <i class="icon_order"></i>
                    特效分类
                </dt>
            </dl>
            <dl class="tg_classify_all tg_classify_flat clearfix dl_right">
                <dd class="on">
                    <a href="http://www.sucaihuo.com/js/"><span>不限</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/7-0-0-0"><span>图片代码</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/8-0-0-0"><span>导航菜单</span></a>
                </dd>
                <dd class="" style="width:100px">
                    <a href="http://www.sucaihuo.com/js/9-0-0-0"><span>选项卡/滑动门</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/10-0-0-0"><span>文字特效</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/11-0-0-0"><span>表单代码</span></a>
                </dd>
                <dd class="" style="width:135px">
                    <a href="http://www.sucaihuo.com/js/12-0-0-0"><span>悬浮层/弹出层</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/106-0-0-0"><span>日期时间</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/206-0-0-0"><span>统计图</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/168-0-0-0"><span>html/css</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/119-0-0-0"><span>html5</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/145-0-0-0"><span>css3</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/181-0-0-0"><span>抽奖</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/162-0-0-0"><span>游戏</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/178-0-0-0"><span>3D</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/149-0-0-0"><span>手机特效</span></a>
                </dd>
                <dd class="" style="">
                    <a href="http://www.sucaihuo.com/js/14-0-0-0"><span>其它特效</span></a>
                </dd>
            </dl>
        </div>
        <div class="tg_classify_wrap clearfix">
            <dl class="tg_classify_all tg_classify_flat dl_left">
                <dt class="">
                    <i class="icon_order"></i>
                    难易程度
                </dt>
            </dl>
            <dl class="tg_classify_all tg_classify_flat clearfix dl_right">
                <dd class="on">
                    <a href="http://www.sucaihuo.com/js/">
                        <span>不限</span>
                    </a>
                </dd>
                <dd class="">
                    <a href="http://www.sucaihuo.com/js/0-3-0-0">
                        <span>入门级</span>
                    </a>
                </dd>
                <dd class="">
                    <a href="http://www.sucaihuo.com/js/0-4-0-0">
                        <span>初级</span>
                    </a>
                </dd>
                <dd class="">
                    <a href="http://www.sucaihuo.com/js/0-5-0-0">
                        <span>中级</span>
                    </a>
                </dd>
                <dd class="">
                    <a href="http://www.sucaihuo.com/js/0-6-0-0">
                        <span>高级</span>
                    </a>
                </dd>
            </dl>
        </div>
    </div>
</div>
<div id="container">
    <div id="sort" class="tg_sort clearfix">
        <div class="tg_classify_wrap">
            <dl class="tg_classify_toggle">
                <dt class="on">
                    <a href="http://www.sucaihuo.com/js/0-0-1-0">
                        <i class="icon_order"></i>
                        <span>默认</span>
                        <b class="icon_order"></b>
                    </a>
                </dt>
            </dl>
        </div>
        <div class="tg_classify_wrap">
            <dl class="tg_classify_toggle">
                <dt class="">
                    <a href="http://www.sucaihuo.com/js/0-0-2-0">
                        <i class="icon_order"></i>
                        <span>下载</span>
                        <b class="icon_order"></b>
                    </a>
                </dt>
            </dl>
        </div>
        <div class="tg_classify_wrap">
            <dl class="tg_classify_toggle">
                <dt class="">
                    <a href="http://www.sucaihuo.com/js/0-0-3-0">
                        <i class="icon_order"></i>
                        <span>评论</span>
                        <b class="icon_order"></b>
                    </a>
                </dt>
            </dl>
        </div>
        <div class="tg_classify_wrap">
            <dl class="tg_classify_toggle">
                <dt class="">
                    <a href="http://www.sucaihuo.com/js/0-0-4-0">
                        <i class="icon_order"></i>
                        <span>浏览</span>
                        <b class="icon_order"></b>
                    </a>
                </dt>
            </dl>
        </div>
        <div class="tg_classify_wrap">
            <dl class="tg_classify_simplecheck">
                <dt class="">
                    <a href="http://www.sucaihuo.com/js/0-0-6-0">
                        <i class="icon_order"></i>
                        <span>推荐</span>
                    </a>
                </dt>
            </dl>
        </div>
        <div id="order-page" class="order-page">
            <span class="find_results_num">共<span class="red"> 868 </span>个jquery特效</span>
            <span class="page-small">
                    <a class="prev-btn page-btn" href="javascript:void(0);"><span
                            class="arrow-left arrow arrow-left-none"></span></a>
                    <span class="orange">1</span>/44                    <a class="pnext-btn page-btn"
                                                                           href="http://www.sucaihuo.com/js/0-0-0-2"><span
                    class="arrow-right arrow "></span></a>
                </span>
        </div>
    </div>
    <div class="list">
        <div class="list_main clearfix">
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/870.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle_004.jpg"
                         original="http://www.sucaihuo.com/jquery/8/870/middle.jpg" alt="jquery动画切换排序点击放大切换"
                         class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank"
                                        href="http://www.sucaihuo.com/js/870.html">jquery动画切换排序点击放大切换</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>10次</em></a>

                        <a class="comment citecommon">评论 <em>7条</em></a>
                        <a class="scores citecommon">浏览 <em>85次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/869.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle.jpg"
                         original="http://www.sucaihuo.com/jquery/8/869/middle.jpg" alt="ThinkBox仿thinkphp头像名片"
                         class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank"
                                        href="http://www.sucaihuo.com/js/869.html">ThinkBox仿thinkphp头像名片</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>2次</em></a>

                        <a class="comment citecommon">评论 <em>11条</em></a>
                        <a class="scores citecommon">浏览 <em>165次</em></a>
                    </div>
                </div>
                <span class="icon_recommend"></span></div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/868.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle_005.jpg"
                         original="http://www.sucaihuo.com/jquery/8/868/middle.jpg" alt="pickerDateRange日期范围选取"
                         class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank"
                                        href="http://www.sucaihuo.com/js/868.html">pickerDateRange日期范围选取</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>10次</em></a>

                        <a class="comment citecommon">评论 <em>10条</em></a>
                        <a class="scores citecommon">浏览 <em>127次</em></a>
                    </div>
                </div>
                <span class="icon_recommend"></span></div>
            <div class="per" style="margin-right: 0">
                <a target="_blank" href="http://www.sucaihuo.com/js/867.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle_008.jpg"
                         original="http://www.sucaihuo.com/jquery/8/867/middle.jpg" alt="PHP原生写的缩略图类" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/867.html">PHP原生写的缩略图类</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>18次</em></a>

                        <a class="comment citecommon">评论 <em>9条</em></a>
                        <a class="scores citecommon">浏览 <em>461次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/866.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle_006.jpg"
                         original="http://www.sucaihuo.com/jquery/8/866/middle.jpg" alt="jQuery定位滚动导航效果代码" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/866.html">jQuery定位滚动导航效果代码</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>11次</em></a>

                        <a class="comment citecommon">评论 <em>8条</em></a>
                        <a class="scores citecommon">浏览 <em>111次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/865.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle_007.jpg"
                         original="http://www.sucaihuo.com/jquery/8/865/middle.jpg" alt="jquery电子杂志" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/865.html">jquery电子杂志</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>23次</em></a>

                        <a class="comment citecommon">评论 <em>7条</em></a>
                        <a class="scores citecommon">浏览 <em>96次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/864.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle_003.jpg"
                         original="http://www.sucaihuo.com/jquery/8/864/middle.jpg" alt="jquery点击小图全屏显示大图的相册代码"
                         class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank"
                                        href="http://www.sucaihuo.com/js/864.html">jquery点击小图全屏显示大图的相册代码</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>18次</em></a>

                        <a class="comment citecommon">评论 <em>6条</em></a>
                        <a class="scores citecommon">浏览 <em>112次</em></a>
                    </div>
                </div>
            </div>
            <div class="per" style="margin-right: 0">
                <a target="_blank" href="http://www.sucaihuo.com/js/863.html" class="img_link">
                    <img style="display: inline;" src="/sucai/Public/HOME/Images/middle_002.jpg"
                         original="http://www.sucaihuo.com/jquery/8/863/middle.jpg" alt="plupload仿新浪微博多图片上传兼容IE"
                         class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/863.html">plupload仿新浪微博多图片上传兼容IE</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>6次</em></a>

                        <a class="comment citecommon">评论 <em>21条</em></a>
                        <a class="scores citecommon">浏览 <em>613次</em></a>
                    </div>
                </div>
                <span class="icon_recommend"></span></div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/862.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/862/middle.jpg"
                         alt="fusioncharts六种不同的PHP图表" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/862.html">fusioncharts六种不同的PHP图表</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>2次</em></a>

                        <a class="comment citecommon">评论 <em>8条</em></a>
                        <a class="scores citecommon">浏览 <em>146次</em></a>
                    </div>
                </div>
                <span class="icon_recommend"></span></div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/861.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/861/middle.jpg"
                         alt="jQuery的单页面滚动导航设计插件" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank"
                                        href="http://www.sucaihuo.com/js/861.html">jQuery的单页面滚动导航设计插件</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>2次</em></a>

                        <a class="comment citecommon">评论 <em>5条</em></a>
                        <a class="scores citecommon">浏览 <em>46次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/860.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/860/middle.jpg"
                         alt="jquery弹出层登录和切换全屏层注册特效" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank"
                                        href="http://www.sucaihuo.com/js/860.html">jquery弹出层登录和切换全屏层注册特效</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>16次</em></a>

                        <a class="comment citecommon">评论 <em>3条</em></a>
                        <a class="scores citecommon">浏览 <em>119次</em></a>
                    </div>
                </div>
            </div>
            <div class="per" style="margin-right: 0">
                <a target="_blank" href="http://www.sucaihuo.com/js/859.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/859/middle.jpg"
                         alt="jQuery弹出层" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/859.html">jQuery弹出层</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>6次</em></a>

                        <a class="comment citecommon">评论 <em>3条</em></a>
                        <a class="scores citecommon">浏览 <em>110次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/858.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/858/middle.jpg"
                         alt="Jquery淡入透明条缩略图广告图" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/858.html">Jquery淡入透明条缩略图广告图</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>6次</em></a>

                        <a class="comment citecommon">评论 <em>1条</em></a>
                        <a class="scores citecommon">浏览 <em>76次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/857.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/857/middle.jpg"
                         alt="jquery带下拉菜单和焦点图插件" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/857.html">jquery带下拉菜单和焦点图插件</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>13次</em></a>

                        <a class="comment citecommon">评论 <em>11条</em></a>
                        <a class="scores citecommon">浏览 <em>91次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/856.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/856/middle.jpg"
                         alt="jquery带农历和节假日日历" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/856.html">jquery带农历和节假日日历</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>10次</em></a>

                        <a class="comment citecommon">评论 <em>7条</em></a>
                        <a class="scores citecommon">浏览 <em>80次</em></a>
                    </div>
                </div>
            </div>
            <div class="per" style="margin-right: 0">
                <a target="_blank" href="http://www.sucaihuo.com/js/855.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/855/middle.jpg"
                         alt="jquery带登录注册幻灯片代码" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/855.html">jquery带登录注册幻灯片代码</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>21次</em></a>

                        <a class="comment citecommon">评论 <em>6条</em></a>
                        <a class="scores citecommon">浏览 <em>133次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/854.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/854/middle.jpg"
                         alt="jquery制作左右按钮控制焦点图片满屏滚动" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/854.html">jquery制作左右按钮控制焦点图片满屏滚动</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>30次</em></a>

                        <a class="comment citecommon">评论 <em>4条</em></a>
                        <a class="scores citecommon">浏览 <em>95次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/853.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/853/middle.jpg"
                         alt="jquery打分评星级效果" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/853.html">jquery打分评星级效果</a></p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>7次</em></a>

                        <a class="comment citecommon">评论 <em>5条</em></a>
                        <a class="scores citecommon">浏览 <em>90次</em></a>
                    </div>
                </div>
            </div>
            <div class="per">
                <a target="_blank" href="http://www.sucaihuo.com/js/852.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/852/middle.jpg"
                         alt="jquery穿梭式滑动风格幻灯片" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/852.html">jquery穿梭式滑动风格幻灯片</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>12次</em></a>

                        <a class="comment citecommon">评论 <em>4条</em></a>
                        <a class="scores citecommon">浏览 <em>57次</em></a>
                    </div>
                </div>
            </div>
            <div class="per" style="margin-right: 0">
                <a target="_blank" href="http://www.sucaihuo.com/js/851.html" class="img_link">
                    <img src="/sucai/Public/HOME/Images/grey.gif" original="http://www.sucaihuo.com/jquery/8/851/middle.jpg"
                         alt="jQuery插件MixItUp图片分类过滤排序" class="lazy">
                </a>
                <div class="foot">
                    <p class="title"><a target="_blank" href="http://www.sucaihuo.com/js/851.html">jQuery插件MixItUp图片分类过滤排序</a>
                    </p>
                    <div class="statics">
                        <a class="download citecommon">下载 <em>16次</em></a>

                        <a class="comment citecommon">评论 <em>5条</em></a>
                        <a class="scores citecommon">浏览 <em>86次</em></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="pager">共<span class="red"> 868 </span>个jquery特效 <a class="prev"
                                                                       href="http://www.sucaihuo.com/js/0-0-0-1">上一页</a>
            <a class="current">1</a><a class="num" href="http://www.sucaihuo.com/js/0-0-0-2">2</a><a class="num"
                                                                                                     href="http://www.sucaihuo.com/js/0-0-0-3">3</a><a
                    class="num" href="http://www.sucaihuo.com/js/0-0-0-4">4</a><a class="num"
                                                                                  href="http://www.sucaihuo.com/js/0-0-0-5">5</a><a
                    class="num" href="http://www.sucaihuo.com/js/0-0-0-6">6</a><a class="num"
                                                                                  href="http://www.sucaihuo.com/js/0-0-0-7">7</a><a
                    class="num" href="http://www.sucaihuo.com/js/0-0-0-8">8</a><a class="num"
                                                                                  href="http://www.sucaihuo.com/js/0-0-0-9">9</a><a
                    class="num" href="http://www.sucaihuo.com/js/0-0-0-10">10</a> <a class="end"
                                                                                     href="http://www.sucaihuo.com/js/0-0-0-44">...44</a>
            <a class="next" href="http://www.sucaihuo.com/js/0-0-0-2">下一页</a></div>
    </div>
</div>
<div class="footer" id="footer" data-url="http://www.sucaihuo.com/"
     data-logout="http://www.sucaihuo.com/Download/logout?r=/js" data-id="" data-mtype="">
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
                <li><strong>网站地图</strong></li>
                <li><a href="http://www.sucaihuo.com/js/">Js特效</a><a href="http://www.sucaihuo.com/source">整站源码</a></li>
                <li><a href="http://www.sucaihuo.com/php">PHP功能模块</a><a
                        href="http://www.sucaihuo.com/templates">前端模板</a></li>
                <li><a href="http://www.sucaihuo.com/site">精选网址</a><a href="http://www.sucaihuo.com/tools">工具箱</a></li>
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