<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>发布话题 - 素材火</title>
    <meta name="keywords" content="素材火话题讨论,技术讨论,技术求助,技术分享,程序猿的技术闲聊,程序猿的吐槽">
    <meta name="description" content="素材火讨论社区给大家提供一个技术圈交流的平台,您可以在这求助各种技术难题,吐槽闲聊心情,分享IT生活的各种欢乐与小烦恼,快来加入我们把！让我们大家共创素材火和谐新社区！">
    <link rel="shortcut icon" href="http://www.sucaihuo.com/Public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/sucai/Public/HOME/style/style_version2016.css" type="text/css">
    <link rel="stylesheet" href="/sucai/Public/HOME/style/topic.css" type="text/css">
    <script defer="defer" type="text/javascript" src="/sucai/Public/HOME/style/zh-cn.js"></script>
    <link rel="stylesheet" type="text/css" href="/sucai/Public/HOME/style/ueditor.css">
    <script defer="defer" type="text/javascript" src="/sucai/Public/HOME/style/codemirror.js"></script>
    <link href="/sucai/Public/HOME/style/codemirror.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/sucai/Public/uploadify/uploadify.css" type="text/css">
    <link href="/sucai/Public/HOME/style/default.css" rel="stylesheet">
    <script type="text/javascript" src="/sucai/Public/HOME/style/jquery.js"></script>
    <script type="text/javascript" src="/sucai/Public/uploadify/jquery.uploadify.min.js"></script>
    <script type="text/javascript">
        var controller = '/sucai/index.php' + '/Home/';
    </script>
</head>
<body style="">

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
                <span><a href="/sucai/index.php/Home/Member/member_info">个人中心</a></span><b class="icon"></b>
                <ul>
                    <li><a href="/sucai/index.php/Home/Member/member_info"><span>我的主页</span></a></li>
                    <li><a href="/sucai/index.php/Home/Userinfo/user_info/user_id/<?php echo ($_SESSION['user_id']); ?>"><span>个人设置</span></a></li>
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
                    <a href="/sucai/index.php/Home/Account/register">注册</a>
                </span>
                </li>
                <li class="box_color nav_home" id="nav_login">
                        <span>
                            <a href="/sucai/index.php/Home/Account/login" class="sn_login">登录</a>
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
                    <a href="/sucai/index.php/Home/Member/member_info/user_id/<?php echo ($_SESSION['user_id']); ?>">
                        <font  id="head_username" class="sn_login username"><?php echo ($_SESSION['username']); ?></font>
                        <!--<?php echo ($_SESSION['username']); ?>-->
                        <!--<?php echo ($_SESSION['username']['']); ?>-->
                    </a>
                </span>
                <li class="no-hover  haslogin">
                    <span><a href="/sucai/index.php/Home/Account/loginOut">退出</a></span>
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
        <a href="/sucai/index.php" class="menu <?php if( $curr): ?>current<?php endif; ?>">首 页</a>
        <?php if(is_array($cateRes)): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/sucai/index.php/Home/<?php if( $vo['cate_type'] == 0): ?>Lst<?php elseif($vo['cate_type'] == 1): ?>Page<?php else: ?>Topic<?php endif; ?>/index/cate_id/<?php echo ($vo['cate_id']); ?>" class="menu <?php if($current == $vo['cate_id'] || $topId == $vo['cate_id']): ?>current<?php endif; ?>"><?php echo ($vo['cate_name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        <span class="icon_hot"></span>
    </div>
</div>
<div class="w_list marquee_announce" style="margin:15px auto 0;width: 1105px;"><marquee scrollamount="5" scrolldelay="10">【<span class="marquee_main">曾经有一个优质网页素材站放在我的面前，我没有好好收藏，当我要用到素材的时候才后悔莫及，如果上天再一次让我来到这个网站，我一定会记住那三个字：素材火！如果这样还怕忘掉，我建议你：收藏夹！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="red">温馨提示：</span>已下载的素材再次下载免积分。冲200元以上送一次扒模板机会，冲300元送两次扒模板机会，冲的多送的多</span>，<a href="http://www.lanrenzhijia.com" target="_blank">懒人之家</a>投放广告和技术问题协助联系QQ416148489】</marquee></div>

<script src="/sucai/Public/HOME/style/hm.js"></script>
<script type="text/javascript" charset="utf-8" src="/sucai/Public/HOME/style/ueditor_002.js"></script>
<script type="text/javascript" charset="utf-8" src="/sucai/Public/HOME/style/ueditor.js"></script>
<!--<script type="text/javascript" charset="utf-8" src="http://www.sucaihuo.com/other/js/ueditor/lang/zh-cn/zh-cn.js"></script>-->
<div class="breadcrumbs">
    <span>&gt;</span><a href="http://www.sucaihuo.com/topic">讨论社区</a>
    <span>&gt;</span>发布话题
</div>
<div style="" class="container clearfix">
    <div class="sidebar">
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/topic/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>最新话题 <span class="name-en">/New</span></strong>
                </dt>

                <?php if(is_array($newTopic)): $i = 0; $__LIST__ = $newTopic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$newTopic): $mod = ($i % 2 );++$i;?><dd class="sidebar_articles">
                        <span><?php echo (date('m-d',$newTopic['release_time'])); ?></span>
                        <a target="_blank" href="/sucai/index.php/Home/Topicart/topicart/topic_id/<?php echo ($newTopic['topic_id']); ?>/cate_id/<?php echo ($newTopic['cate_id']); ?>"><?php echo ($newTopic['topic_title']); ?></a>
                    </dd><?php endforeach; endif; else: echo "" ;endif; ?>

                <!--<dd class="sidebar_articles">-->
                    <!--<span>06-07</span>-->
                    <!--<a target="_blank" href="http://www.sucaihuo.com/topic/67.html">号外！号外！找火哥免费要积分啦</a>-->
                <!--</dd>-->

            </dl>
        </div>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/topic/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>标签云 <span class="name-en">/Tag</span></strong>
                </dt>
                <dd class="sidebar_tags">
                    <?php if(is_array($tagsRes)): $i = 0; $__LIST__ = $tagsRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tagsRes): $mod = ($i % 2 );++$i;?><a target="_blank" href="/sucai/index.php/Home/Topic/tagsArr/cate_id/<?php echo $_GET['cate_id'];?>/tags/<?php echo ($tagsRes); ?>"><?php echo ($tagsRes); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                </dd>
            </dl>
        </div>
    </div>
    <div style="" class="detail topic_add">
        <ul style="" class="topic_add_ul">
            <li>
                <div class="clearfix">
                    <div class="label_right"><input class="text" id="title" placeholder="请输入标题" data-null="请输入标题" autocomplete="off" tabindex="1"  onfocus="focusInputTopicArea($(this))" onblur="blurInputTopicArea($(this))" data-minlength="5" type="text">
                    </div>
                    <label><span class="must">*</span>标题：</label>
                </div>
                <div class="validate"><span class="Validform_checktip Validform_wrong hide"></span></div>
            </li>
            <li>
                <div class="clearfix">
                    <div class="label_right" id="cats">
                        <!--<em data-id="2" class="current">求助交流<i></i></em>-->
                     <?php if(is_array($topiccateRes)): $i = 0; $__LIST__ = $topiccateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><em data-id="<?php echo ($vo['cate_id']); ?>" <?php if($i == 1): ?>class="current"<?php endif; ?>><?php echo ($vo['cate_name']); ?><i></i></em><?php endforeach; endif; else: echo "" ;endif; ?>


                    </div>

                    <label><span class="must">*</span>分类：</label>
                </div>
                <div class="validate"><span class="Validform_checktip Validform_wrong hide"></span></div>
            </li>
            <li style="">
                <div style="" class="clearfix">
                    <div style="" class="label_right">
                        <div class="edui-default" id="editor" style="width: 663px;">
                            <div style="width: 663px; z-index: 999;" id="edui1" class="edui-editor  edui-default">
                                <div id="edui1_toolbarbox" class="edui-editor-toolbarbox edui-default">
                                    <div id="edui1_toolbarboxouter" class="edui-editor-toolbarboxouter edui-default">
                                        <div class="edui-editor-toolbarboxinner edui-default">
                                            <div style="-moz-user-select: none;" id="edui2"
                                                 class="edui-toolbar   edui-default" onselectstart="return false;"
                                                 onmousedown='return $EDITORUI["edui2"]._onMouseDown(event, this);'>
                                                <div id="edui3"
                                                     class="edui-box edui-button edui-for-fullscreen edui-default">
                                                    <div class="edui-default" id="edui3_state"
                                                         onmousedown='$EDITORUI["edui3"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui3"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui3"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui3"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui3_body" unselectable="on" title="全屏"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui3"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui3"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui4"
                                                     class="edui-box edui-button edui-for-source edui-default">
                                                    <div class="edui-default" id="edui4_state"
                                                         onmousedown='$EDITORUI["edui4"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui4"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui4"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui4"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui4_body" unselectable="on" title="源代码"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui4"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui4"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui5"
                                                     class="edui-box edui-combox edui-for-fontfamily edui-default">
                                                    <div class="edui-default" title="字体" id="edui5_state"
                                                         onmousedown='$EDITORUI["edui5"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui5"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui5"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui5"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-combox-body edui-default">
                                                            <div id="edui5_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui5"]._onButtonClick(event, this);'>
                                                                字体
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui5"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui18"
                                                     class="edui-box edui-splitbutton edui-for-forecolor edui-default edui-colorbutton">
                                                    <div class="edui-default" title="字体颜色" id="edui18_state"
                                                         onmousedown='$EDITORUI["edui18"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui18"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui18"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui18"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-splitbutton-body edui-default">
                                                            <div id="edui18_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui18"]._onButtonClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div id="edui18_colorlump" class="edui-colorlump"></div>
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui18"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui21"
                                                     class="edui-box edui-combox edui-for-fontsize edui-default">
                                                    <div class="edui-default" title="字号" id="edui21_state"
                                                         onmousedown='$EDITORUI["edui21"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui21"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui21"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui21"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-combox-body edui-default">
                                                            <div id="edui21_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui21"]._onButtonClick(event, this);'>
                                                                字号
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui21"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui32"
                                                     class="edui-box edui-button edui-for-unlink edui-default">
                                                    <div class="edui-default" id="edui32_state"
                                                         onmousedown='$EDITORUI["edui32"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui32"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui32"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui32"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui32_body" unselectable="on" title="取消链接"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui32"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui32"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui39"
                                                     class="edui-box edui-button edui-for-link edui-default">
                                                    <div class="edui-default" id="edui39_state"
                                                         onmousedown='$EDITORUI["edui39"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui39"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui39"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui39"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui39_body" unselectable="on" title="超链接"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui39"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui39"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui40"
                                                     class="edui-box edui-button edui-for-simpleupload edui-default">
                                                    <div class="edui-default" id="edui40_state"
                                                         onmousedown='$EDITORUI["edui40"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui40"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui40"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui40"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui40_body" unselectable="on" title="单图上传"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui40"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui40"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default">
                                                                    <iframe style="display: block; width: 20px; height: 20px; overflow: hidden; border: 0px none; margin: 0px; padding: 0px; position: absolute; top: 0px; left: 0px; opacity: 0; cursor: pointer;"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui41"
                                                     class="edui-box edui-splitbutton edui-for-emotion edui-default">
                                                    <div class="edui-default" title="表情" id="edui41_state"
                                                         onmousedown='$EDITORUI["edui41"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui41"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui41"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui41"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-splitbutton-body edui-default">
                                                            <div id="edui41_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui41"]._onButtonClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui41"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui43"
                                                     class="edui-box edui-button edui-for-bold edui-default">
                                                    <div class="edui-default" id="edui43_state"
                                                         onmousedown='$EDITORUI["edui43"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui43"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui43"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui43"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui43_body" unselectable="on" title="加粗"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui43"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui43"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui44"
                                                     class="edui-box edui-button edui-for-italic edui-default">
                                                    <div class="edui-default" id="edui44_state"
                                                         onmousedown='$EDITORUI["edui44"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui44"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui44"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui44"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui44_body" unselectable="on" title="斜体"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui44"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui44"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui45"
                                                     class="edui-box edui-button edui-for-underline edui-default">
                                                    <div class="edui-default" id="edui45_state"
                                                         onmousedown='$EDITORUI["edui45"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui45"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui45"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui45"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui45_body" unselectable="on" title="下划线"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui45"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui45"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui46"
                                                     class="edui-box edui-button edui-for-justifyleft edui-default">
                                                    <div class="edui-default" id="edui46_state"
                                                         onmousedown='$EDITORUI["edui46"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui46"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui46"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui46"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui46_body" unselectable="on" title="居左对齐"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui46"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui46"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui47"
                                                     class="edui-box edui-button edui-for-justifycenter edui-default">
                                                    <div class="edui-default" id="edui47_state"
                                                         onmousedown='$EDITORUI["edui47"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui47"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui47"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui47"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui47_body" unselectable="on" title="居中对齐"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui47"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui47"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui48"
                                                     class="edui-box edui-button edui-for-justifyright edui-default">
                                                    <div class="edui-default" id="edui48_state"
                                                         onmousedown='$EDITORUI["edui48"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui48"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui48"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui48"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui48_body" unselectable="on" title="居右对齐"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui48"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui48"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui49"
                                                     class="edui-box edui-button edui-for-removeformat edui-default">
                                                    <div class="edui-default" id="edui49_state"
                                                         onmousedown='$EDITORUI["edui49"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui49"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui49"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui49"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui49_body" unselectable="on" title="清除格式"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui49"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui49"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui50"
                                                     class="edui-box edui-button edui-for-formatmatch edui-default">
                                                    <div class="edui-default" id="edui50_state"
                                                         onmousedown='$EDITORUI["edui50"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui50"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui50"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui50"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui50_body" unselectable="on" title="格式刷"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui50"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui50"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui51"
                                                     class="edui-box edui-menubutton edui-for-lineheight edui-default">
                                                    <div class="edui-default" title="行间距" id="edui51_state"
                                                         onmousedown='$EDITORUI["edui51"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui51"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui51"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui51"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-menubutton-body edui-default">
                                                            <div id="edui51_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui51"]._onButtonClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui51"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui60"
                                                     class="edui-box edui-menubutton edui-for-insertorderedlist edui-default">
                                                    <div class="edui-default" title="有序列表" id="edui60_state"
                                                         onmousedown='$EDITORUI["edui60"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui60"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui60"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui60"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-menubutton-body edui-default">
                                                            <div id="edui60_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui60"]._onButtonClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui60"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui73"
                                                     class="edui-box edui-menubutton edui-for-insertunorderedlist edui-default">
                                                    <div class="edui-default" title="无序列表" id="edui73_state"
                                                         onmousedown='$EDITORUI["edui73"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui73"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui73"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui73"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-menubutton-body edui-default">
                                                            <div id="edui73_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui73"]._onButtonClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui73"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui80"
                                                     class="edui-box edui-button edui-for-cleardoc edui-default">
                                                    <div class="edui-default" id="edui80_state"
                                                         onmousedown='$EDITORUI["edui80"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui80"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui80"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui80"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui80_body" unselectable="on" title="清空文档"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui80"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui80"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui83"
                                                     class="edui-box edui-button edui-for-searchreplace edui-default">
                                                    <div class="edui-default" id="edui83_state"
                                                         onmousedown='$EDITORUI["edui83"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui83"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui83"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui83"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui83_body" unselectable="on" title="查询替换"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui83"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui83"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui86"
                                                     class="edui-box edui-button edui-for-preview edui-default">
                                                    <div class="edui-default" id="edui86_state"
                                                         onmousedown='$EDITORUI["edui86"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui86"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui86"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui86"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui86_body" unselectable="on" title="预览"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui86"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui86"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div class="edui-box edui-label edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui87" class="edui-box edui-separator  edui-default"></div>
                                                <div id="edui88"
                                                     class="edui-box edui-button edui-for-redo edui-default">
                                                    <div class="edui-default" id="edui88_state"
                                                         onmousedown='$EDITORUI["edui88"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui88"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui88"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui88"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui88_body" unselectable="on" title="重做"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui88"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui88"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui89"
                                                     class="edui-box edui-button edui-for-undo edui-default">
                                                    <div class="edui-default" id="edui89_state"
                                                         onmousedown='$EDITORUI["edui89"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui89"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui89"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui89"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui89_body" unselectable="on" title="撤销"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui89"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui89"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui90"
                                                     class="edui-box edui-button edui-for-indent edui-default">
                                                    <div class="edui-default" id="edui90_state"
                                                         onmousedown='$EDITORUI["edui90"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui90"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui90"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui90"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-button-wrap edui-default">
                                                            <div id="edui90_body" unselectable="on" title="首行缩进"
                                                                 class="edui-button-body edui-default"
                                                                 onmousedown='return $EDITORUI["edui90"]._onMouseDown(event, this);'
                                                                 onclick='return $EDITORUI["edui90"]._onClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="edui91"
                                                     class="edui-box edui-splitbutton edui-for-backcolor edui-default edui-colorbutton">
                                                    <div class="edui-default" title="背景色" id="edui91_state"
                                                         onmousedown='$EDITORUI["edui91"].Stateful_onMouseDown(event, this);'
                                                         onmouseup='$EDITORUI["edui91"].Stateful_onMouseUp(event, this);'
                                                         onmouseover='$EDITORUI["edui91"].Stateful_onMouseOver(event, this);'
                                                         onmouseout='$EDITORUI["edui91"].Stateful_onMouseOut(event, this);'>
                                                        <div class="edui-splitbutton-body edui-default">
                                                            <div id="edui91_button_body"
                                                                 class="edui-box edui-button-body edui-default"
                                                                 onclick='$EDITORUI["edui91"]._onButtonClick(event, this);'>
                                                                <div class="edui-box edui-icon edui-default"></div>
                                                                <div id="edui91_colorlump" class="edui-colorlump"></div>
                                                            </div>
                                                            <div class="edui-box edui-splitborder edui-default"></div>
                                                            <div class="edui-box edui-arrow edui-default"
                                                                 onclick='$EDITORUI["edui91"]._onArrowClick();'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="edui1_toolbarmsg" class="edui-editor-toolbarmsg edui-default"
                                         style="display:none;">
                                        <div id="edui1_upload_dialog" class="edui-editor-toolbarmsg-upload edui-default"
                                             onclick='$EDITORUI["edui1"].showWordImageDialog();'>点击上传
                                        </div>
                                        <div class="edui-editor-toolbarmsg-close edui-default"
                                             onclick='$EDITORUI["edui1"].hideToolbarMsg();'>x
                                        </div>
                                        <div id="edui1_toolbarmsg_label"
                                             class="edui-editor-toolbarmsg-label edui-default"></div>
                                        <div class="edui-default" style="height:0;overflow:hidden;clear:both;"></div>
                                    </div>
                                    <div style="top: 58px; z-index: 1000;" id="edui1_message_holder"
                                         class="edui-editor-messageholder edui-default"></div>
                                </div>
                                <div style="width: 663px; height: 420px; z-index: 999; overflow: hidden;"
                                     id="edui1_iframeholder" class="edui-editor-iframeholder edui-default">
                                    <iframe src="javascript:void(function(){document.open();document.write(&quot;<!DOCTYPE html><html xmlns='http://www.w3.org/1999/xhtml' class='view' ><head><style type='text/css'>.view{padding:0;word-wrap:break-word;cursor:text;height:90%;}
body{margin:8px;font-family:sans-serif;font-size:16px;}p{margin:5px 0;}</style><link rel='stylesheet' type='text/css' href='http://www.sucaihuo.com/other/js/ueditor/themes/iframe.css'/></head><body class='view' ></body><script type='text/javascript'  id='_initialScript'>setTimeout(function(){editor = window.parent.UE.instants['ueditorInstant0'];editor._setup(document);},0);var _tmpScript = document.getElementById('_initialScript');_tmpScript.parentNode.removeChild(_tmpScript);</script></html>&quot;);document.close();}())"
                                            id="ueditor_0" frameborder="0" height="100%" width="100%"></iframe>
                                </div>
                                <div id="edui1_bottombar" class="edui-editor-bottomContainer edui-default">
                                    <table class="edui-default">
                                        <tbody class="edui-default">
                                        <tr class="edui-default">
                                            <td style="display: none;" id="edui1_elementpath"
                                                class="edui-editor-bottombar edui-default"></td>
                                            <td style="display: none;" id="edui1_wordcount"
                                                class="edui-editor-wordcount edui-default"></td>
                                            <td style="display: none;" id="edui1_scale"
                                                class="edui-editor-scale edui-default">
                                                <div class="edui-editor-icon edui-default"></div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="edui-default" id="edui1_scalelayer"></div>
                            </div>
                        </div>
                    </div>
                    <label><span class="must">*</span>内容：</label>
                </div>
                <div class="validate" id="tip_content"><span class="Validform_checktip Validform_wrong hide"></span>
                </div>
            </li>
            <li class="clearfix" style="margin-bottom: 20px">
                <div class="label_right">
                    <div class="tags" id="tags" tabindex="1">
                        <input id="form-field-tags" placeholder="请输入标签..." value="Tag Input Control" name="tags"
                               style="display: none;" type="text">
                        <input placeholder="请输入标签..." class="tags_enter" autocomplete="off" type="text">
                    </div>
                </div>
                <label><span class="must"></span>标签：</label>
            </li>

            <li class="clearfix">
                <div class="label_right">
                    <div id="js-tags" class="taglist clearfix">

                        <a class="list-tag" data-id="1" href="javascript:;" style="margin:0 6px 10px 0">php</a>
                </div>
                <label><span class="must"></span></label>
            </li>

            <li class="clearfix" id="upload_btn_area">
                <div style="position: relative;" class="label_right">
                    <a style="position: relative; z-index: 1;" class="upload_btn" id="upload_btn">上传附件</a>

                    <div style="position: absolute; top: 0px; left: 0px; width: 160px; height: 37px; overflow: hidden; z-index: 0;" class="moxie-shim moxie-shim-html5" id="html5_1aksn1oqi1lfn1g1qkdg18j015i23_container">
                        <input  id="html5_1aksn1oqi1lfn1g1qkdg18j015i23" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" accept="" type="file">
                    </div>
                </div>
                <label><span class="must"></span>附件：</label>
            </li>
            <li class="clearfix">
                <div class="label_right">
                    <div id="logo_upload_area" style="position: relative;width:525px;">
                        <div id="upload_progress" class="hide">
                            <span class="bar" id="bar"></span>
                            <span id="percent_num"></span>
                        </div>
                        <div id="upload_rs" class="hide">
                        </div>
                    </div>
                </div>
                <label></label>
            </li>
            <li>
                <div class="clearfix">
                    <div class="label_right">
                        <input class="text" id="code" name="code" tabindex="2" style="width:110px" autocomplete="off" maxlength="4" data-null="请输入验证码" data-length="4" onfocus="focusInputTopicArea($(this))" onblur="blurInputTopicArea($(this))" type="text">
                        <img src="/sucai/index.php/Home/Topic/checkCode"   height="44" width="120"  style="cursor: pointer;border-radius: 5px"  onclick="this.src='/sucai/index.php/Home/Topic/checkCode/'+Math.random()" id="" class="getcode_gg" title="看不清，点击换一张" align="absmiddle">
                        <a class="getcode_gg_a" href="javascript:;">换一张</a>
                    </div>
                    <label><span class="must">*</span>验证码：</label>
                </div>
                <div class="validate"><span class="Validform_checktip Validform_wrong hide"></span></div>
            </li>
            <li class="clearfix">
                <div class="label_right">
                    <input class="btn" value="提 交" tabindex="3" id="btn_submit" style="padding:4px 30px;font-size: 14px"  autocomplete="off">
                </div>
                <label></label>
            </li>
        </ul>
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
</script>


<script type="text/javascript" src="/sucai/Public/HOME/style/plupload.js"></script>
<script type="text/javascript">
    var ue = UE.getEditor('editor');

    //上传附件的配置
    var uploadFile = '/sucai/index.php/Home/Ajax/uploadFile';
    var  filePath = '';
    $('#upload_btn').uploadify({
        swf: '/sucai/Public/uploadify/uploadify.swf',
        uploader: 'uploadFile',
        buttonText: '上传附件',
        fileTypeDesc: 'Image File',
        fileTypeExts: '*.jpg;*.png;*.gif;*.jpeg;*.doc;*.docx;*.rar;*.zip',
        onUploadSuccess: function (File, data, response) {
            eval('var data=' + data);
            var html = "<span id='attachment'>"+data.fileName+"</span><a onclick='delhte()' style='margin-left: 20px;color: red' href='javascript:void(0)'>删除</a>";
            filePath = data.filePath;
            if (data.status) {
                $('#upload_btn').after(html);
                showSuccessTip('文件上传成功');
//                $.post('/sucai/index.php/Home/Topic/setFace', {
//                    max: data.path.max,
//                    mid: data.path.mid,
//                    small: data.path.small
//                }, function (dat) {
//                    if (dat) {
//                        $('#faceimg').attr('src', '/sucai' + data.path.max);
//                        showSuccessTip('文件上传成功');
//                    } else {
//                        showSuccessTip('文件上传失败');
//                    }
//
//                }, 'json')

            } else {
                alert(data.msg);
            }
        }

    });

    //删除上传的附件
    function delhte() {
        $('#attachment').html('');
        $('#attachment').next().html('');
    }

    function addTag(tag) {
//        var tag = obj.val();
        var length = $("span.tag").length;
        if (length > 8) {
            alert("标签个数不能超过8个！");
            return false;
        }
        if (tag != '') {
            var i = 0;
            $(".tag").each(function () {
                if ($(this).text() == tag + "×") {
                    $(this).addClass("tag-warning");
                    setTimeout("removeWarning()", 400);
                    i++;
                }
            })
            $(".tags_enter").val('');
            if (i > 0) { //说明有重复
                return false;
            }
            if (tag.length > 10) {
                alert("标签长度不能大于10个字符！");
                return false;
            }
            $("#form-field-tags").before("<span class='tag'>" + tag + "<button class='close' type='button'>×</button></span>"); //添加标签
        }
    }

    function removeWarning() {
        $(".tag-warning").removeClass("tag-warning");
    }


    $(function () {
        /*******标签tag******/
        $(".tags_enter").blur(function () { //焦点失去触发
            addTag($(this).val());
            $(this).parents(".tags").css({"border-color": "#d5d5d5"})
        }).keydown(function (event) {
            var key_code = event.keyCode;
            if (key_code == 13) { //enter
                addTag($(this).val());
            }
        });
        $(".close").live("click", function () {
            $(this).parent(".tag").remove();
        });
        $(".tags").click(function () {
            $(".tags_enter").focus();
            $(this).css({"border-color": "#f59942"})
        }).blur(function () {
            $(this).css({"border-color": "#d5d5d5"})
        })
        /*******分类******/
        $("#cats").children("em").click(function () {
            $(this).addClass("current").siblings("em").removeClass("current")
        })
        /*******更换验证码******/
        $(".getcode_gg").click(function () {
            $("#getcode_gg").attr("src", 'http://www.sucaihuo.com/other/js/group/code_gg.php?' + Math.random());
        });
        /*******提交******/
        $("#btn_submit").click(function () {
            blurInputTopicArea($("#title"), 1);
            blurInputTopicArea($("#code"), 1);

            var i = 0;
            $(".Validform_wrong").each(function () {
                if ($(this).css("display") == 'inline') {
                    i++;
                }
            })

            if (i > 0) {
                return false;
            }
            var title = $("#title").val();
            var cat_id = $("#cats").children("em.current").attr("data-id");
            var tags = "";
            $("#tags").children(".tag").each(function () {
                tags += $(this).text() + ",";
            })
            var content = UE.getEditor('editor').getContent();
            var file_path = $("#attachment").text();
            var code = $("#code").val();

            $.post( "/sucai/index.php/Home"+"/Topic/topicPost", {
                    title: title,
                    cat_id: cat_id,
                    content: content,
                    tags: tags,
                    file_path: filePath,
                    code: code
                },
                function (data) {
                    if (data.error == -1) {
                        showWindowBox();
                        $("#windown_box").attr("data-func", "addClickFunc('#btn_submit')");
                        return false;
                    }
                    if (data.error == '') {
                        showSuccessTip("话题发布成功,增加6分！");
                        var url = "/sucai/index.php/Home/Topic/index/cate_id/4";
                        setTimeout("goUrl('" + url + "')", 1500);
                    } else {
                        showSuccessTip(data.error);
                    }

                }, "json")
        })
        /*******添加推荐标签******/
        $("#js-tags").children(".list-tag").click(function () {
            var tag = $(this).text();
            addTag(tag);
        })
    })

    function focusInputTopicArea(obj) {
        obj.next(".error").hide();
        obj.addClass("form_input-focus");
        obj.prev("div").addClass("item_tip_focus");
        obj.nextAll(".grey").show();
        obj.nextAll(".icon-loginright").hide();
    }

    function focusInputTopicArea(obj) {
        obj.parent().parent().next(".validate").children("span").hide();
        obj.css({"border-color": "#cccccc"})
    }

    function blurInputTopicArea(obj, is_sub) {
        var val = obj.val();
        var minlength = obj.attr("data-minlength");
        var maxlength = obj.attr("data-maxlength");
        var length = obj.attr("data-length");
        var type = obj.attr("data-type");
        var time_error = 0;
        if (val == "") {
            var tip_null = obj.attr("data-null");
            getTopicError(obj, tip_null);

        } else {
            if (val.length != length && length > 0) {
                getTopicError(obj, "长度必须为" + length + "位");
                time_error++;
            }
            if (minlength > 0 && val.length < minlength) {
                getTopicError(obj, "长度至少" + minlength + "位");
                time_error++;
            }
            if (maxlength > 0 && val.length > maxlength) {
                getTopicError(obj, "长度最多" + maxlength + "位");
                time_error++;
            }

        }
    }

    function getTopicError(obj, tip) {
        obj.parent().parent().next(".validate").children("span").text(tip).show();
        obj.css({"border-color": "#cc0000"})
    }
</script>
<div class="edui-default" style="position: fixed; left: 0px; top: 0px; width: 0px; height: 0px;" id="edui_fixedlayer">
    <div style="display: none;" id="edui94" class="edui-popup  edui-bubble edui-default" onmousedown="return false;">
        <div id="edui94_body" class="edui-popup-body edui-default">
            <iframe class="edui-default" style="position:absolute;z-index:-1;left:0;top:0;background-color: transparent;" src="images/a.htm" frameborder="0" height="100%" width="100%"></iframe>
            <div class="edui-shadow edui-default"></div>
            <div id="edui94_content" class="edui-popup-content edui-default"></div>
        </div>
    </div>
</div>
</body>
</html>