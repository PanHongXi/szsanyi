<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会员注册 - 素材火</title>
    <meta name="keywords" content="会员注册" />
    <meta name="description" content="提供网站模板,网站源码,网页图标,网页特效,PHP等网页设计素材下载,为广大网友制作网页提供网站素材免费下载参考。" />
    <link rel="shortcut icon" href="/sucai/Public/HOME/Images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/sucai/Public/HOME/style/style.css" type="text/css" />
    <script type="text/javascript">
        var controller = "/sucai/index.php"+"/Home/";
    </script>
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
            <li class="no-hover nologin"><span><a href="/sucai/index.php/Home/Account/register">注册</a></span></li>
            <li class="no-hover hide haslogin"><span><a href="http://www.sucaihuo.com/Download/logout?r=">退出</a></span>
            </li>
            <li class="box_color nav_home" id="nav_login">
                <span><a href="/sucai/index.php/Home/Account/login" class="sn_login">登录</a></span><b class="icon"></b>
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
        <a href="/sucai/index.php" class="menu <?php if($curr): ?>current<?php endif; ?>">首 页</a>
        <?php if(is_array($cateRes)): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/sucai/index.php/Home/<?php if($vo['cate_type'] == 0): ?>Lst<?php elseif($vo['cate_type'] == 1): ?>Page<?php else: ?>Topic<?php endif; ?>/index/cate_id/<?php echo ($vo['cate_id']); ?>" class="menu <?php if($current == $vo['cate_id']): ?>current<?php endif; ?>"><?php echo ($vo['cate_name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        <span class="icon_hot"></span>
    </div>
</div>



<link rel="stylesheet" href="/sucai/Public/HOME/style/base.css" />

<div class="wrap">
    <div class="pop-title clearfix">
        <a class="a_underline" href="http://www.sucaihuo.com/login.html">登录</a>
        <div class="pop_name">
            注册<span class="grey">与网友进行讨论及互动；收藏您喜欢的文章和内容；积累积分下载原创模板、精品源码、(兑换礼品正在开发中...)；分享代码、解决求助赢取金币。</span>
        </div>

    </div>
    <form onsubmit="return false">
        <div class="pop-content accountPage">
            <div class="form_item">
                <div class="item_tip">用户名</div>
                <input type="text" tabindex="1" value="" name="username" data-type="username" data-minlength="5" class="form_input" id="username" onfocus="focusInputLoginArea($(this))" onblur="blurInputLoginArea($(this))" autocomplete="off"/>
                <span class="error">不能为空</span>
                <i class="icon-loginright"></i>
                <span class="grey">允许用中英文、数字、下划线，提交后不可修改</span>
            </div>
            <div class="form_item">
                <div class="item_tip">邮箱</div>

                <input type="text" tabindex="2" value="" data-type="email" name="email" class="form_input" id="email" onfocus="focusInputLoginArea($(this))" onblur="blurInputLoginArea($(this))" autocomplete="off"/>
                <span class="error">不能为空</span>
                <i class="icon-loginright"></i>
            </div>

            <div class="form_item">
                <div class="item_tip">密码</div>
                <input type="password" tabindex="3" name="pwd" id="pwd" data-minlength="6" data-maxlength="20" class="form_input"   onfocus="focusInputLoginArea($(this))" onblur="blurInputLoginArea($(this))" autocomplete="off"/>
                <span class="error">不能为空</span>
                <span class="grey">6 - 20位</span>
                <i class="icon-loginright"></i>
            </div>
            <div class="form_item">
                <div class="item_tip">确认密码</div>
                <input type="password" tabindex="4" name="pwd2" data-equal="#pwd" data-equal-error="两次输入的密码不一致" class="form_input" id="pwd2"  onfocus="focusInputLoginArea($(this))" onblur="blurInputLoginArea($(this))" autocomplete="off"/>
                <span class="error">不能为空</span>
                <i class="icon-loginright"></i>
            </div>
            <div class="form_item" style="display:none">
                <div class="item_tip ">邀请码</div>

                <input type="text" tabindex="6" value=""  name="invite_code" class="form_input " id="invite_code"  autocomplete="off"/>
                <span class="error">不能为空</span>
                <i class="icon-loginright"></i>
            </div>
            <div class="form_item" style="margin:30px  0 0">
                <input type="submit" tabindex="7" value="注&nbsp;&nbsp;册" class="btn_reg btn common_bgcolor" id="btn_reg" onclick="subReg()"/>
            </div>

        </div>
    </form>
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
    <div class="pop_title">
        <div class="pop_name">登录</div>
        <i class="pop_close" onclick="$('#windown_box').modal('hide')"></i>
    </div>
    <div class="pop_content">
        <div class="form_item">
            <div class="item_tip">用户名/邮箱</div>
            <input id="email" name="email"  class="form_input" type="text" autocomplete="off" tabindex="1" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))"/>
        </div>
        <div class="form_item">
            <div class="item_tip">密码</div>
            <input name="pwd" id="pwd" class="form_input" type="password" tabindex="2" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))" />
        </div>
        <div class="captchaBox">
            <div class="two_weeks">
                <input id="rememberme" class="ckeckBox" type="checkbox" name="rememberme">
                <label for="rememberme">两周内免登录</label>
                <a  href="http://www.sucaihuo.com/reg.html" target="_blank" class="loginbox_reg">免费注册</a>
            </div>
        </div>
        <p class="notice_error"></p>
        <input id="btn_login" class="btn" type="button" onclick="sublogin()" tabindex="4" value="登  录">
        <a class="a_underline" href="http://www.sucaihuo.com/forget.html">忘记密码？</a>
        <div class="co_login" style="margin:20px 0 0">
            联合登录
            <a class="a_underline" href="http://www.sucaihuo.com/Index/login/type/qq.html">腾讯QQ</a>
            <a class="a_underline" href="http://www.sucaihuo.com/Index/login/type/sina.html">新浪微博</a>
            <a class="a_underline" href="http://www.sucaihuo.com/Index/login/type/renren.html">人人网</a>
            绑定送<span class="red">30</span>积分
        </div>
    </div>
</div>
<script src="/sucai/Public/HOME/style/jquery.js" type="text/javascript"></script>
<script src="/sucai/Public/HOME/style/common.js" type="text/javascript"></script>

<div class="mmsg-box mmsg-box-info" id='msg-box' style="margin-top: -23.5px; margin-left: -96.5px;">
    <div class="mmsg-content">
        <i class="mmsg-icon"></i>
        <p id='msg-box-content'></p>
    </div>
    <div class="mmsg-background"></div>
</div>
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
<script type="text/javascript">
    function subReg() {
        blurInputLoginArea($("#username"), 1);
        blurInputLoginArea($("#email"), 1);
        blurInputLoginArea($("#pwd"));
        blurInputLoginArea($("#pwd2"));
        var i = 0;
        $(".error").each(function() {
            if ($(this).css("display") == 'inline') {
                i++;
            }
        })

        if (i == 0) {
            var obj = $("#btn_reg");
            obj.addClass('disabled').val('注册中...');
            $.post(controller+'Ajax/regsave', {username: $("#username").val(), pwd: $("#pwd").val(), email: $("#email").val(),invite_code:$("#invite_code").val()}, function(data) {
                if (data.error != '') {
                    showSuccessTip(data.error);
                } else {
                    showSuccessTip(data.tip);
                    var url = "http://www.sucaihuo.com";
                    setTimeout("goUrl('" + url + "')", 1500);
                }
                obj.removeClass('disabled').val('注册');
            }, "json")
        }
    }
</script>