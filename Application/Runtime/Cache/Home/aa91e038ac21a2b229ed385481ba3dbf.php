<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人资料</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
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
                    <li><a href="http://www.sucaihuo.com/Download/logout?r=/Member/set.html"><span>退出登录</span></a></li>
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
        <ul class="tg_tools fl" id="login_area" style="display:block">
            <li class="tg_tools_home no-hover"><i class="icon-more"></i><span><a href="http://www.sucaihuo.com/">素材火首页</a></span></li>

            <li class="no-hover haslogin"><span><a href="http://www.sucaihuo.com/Member/info.html"><font class="sn_login username">tongpan</font></a></span></li>
            <li class="tg-line icon"></li>
            <li class="no-hover haslogin"><span><a href="http://www.sucaihuo.com/Download/logout?r=/Member/set.html">退出</a></span></li>
        </ul>
    </div>
</div>
<div id="header">
    <div class="tg_tools_home">
        <div class="bbs_enter">
            <a class="bbs-banner" href="http://www.sucaihuo.com/Member/pay.html" target="_blank"><img src="images/banner.jpg" alt="扒模板"></a>
        </div>
        <div class="logo">
            <a class="logo-bd" href="http://www.sucaihuo.com/"><img src="images/logo.png" alt="素材火logo"></a>
        </div>
        <form action="http://www.sucaihuo.com/search.html" method="GET" id="form_search" onsubmit="return searchSub()">
            <div id="search">
                <div class="search_area">
                    <input value="搜 索" class="btn_search" type="submit">
                    <div class="search_select">
                        <span class="icon-search"></span>
                    </div>
                    <input value="请输入搜索内容" class="search_input" autocomplete="off" id="search_input" data-default="请输入搜索内容" onblur="checkInputBlur($(this))" onfocus="checkInputFocus($(this))" type="text">
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
        <a href="http://www.sucaihuo.com/js" class="menu">jQuery特效</a>
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
<link href="/sucai/Public/HOME/style/member.css" rel="stylesheet" type="text/css">
<div class="container clearfix">
    <div class="member_right">
        <div class="member_per">
            <div class="panel clearfix">
                <div class="panel-info clearfix">
                    <a href="http://www.sucaihuo.com/Member/avatar.html"><img class="round-image" src="images/3091.jpg" alt="头像" height="50" width="50"></a>
                    <div class="name-job">
                        <h4 class="myname"> tongpan </h4>
                        <p class="job-title"> 工作保密 </p>
                    </div>
                </div>
                <div class="sign-wrap">
                    <textarea id="signed_textarea" class="signed_textarea" disabled="disabled" autocomplete="off">123</textarea>
                    <em id="signed_edit" class="signed_edit"></em>
                </div>
                <p id="signed_error" class="signed_error"></p>
                <div class="rank-points">
                    <ul>
                        <li class="mp-item">
                            <a class="mp-atag" href="http://www.sucaihuo.com/Member/points.html">
                                <span class="mp-title">积分</span>
                                <span class="mp-num">14</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="member_per">
            <ul class="nav panel">
                <li>
                    <a href="http://www.sucaihuo.com/Member/info.html"><i class="icon-nav icon-tick"></i>我的主页</a>
                </li>
                <li>
                    <a href="http://www.sucaihuo.com/Member/set.html"><i class="icon-nav icon-note"></i>我的设置</a>
                </li>
                <li>
                    <a href="http://www.sucaihuo.com/Member/comments.html"><i class="icon-nav icon-plan"></i>我的评论</a>
                </li>
                <li>
                    <a href="http://www.sucaihuo.com/Member/topic.html"><i class="icon-nav icon-ques"></i>我的话题</a>
                </li>
                <!--            <li>
                                <a href="" class=""><i class="icon-nav icon-code"></i>我的代码</a>
                            </li>-->
                <li style="border-bottom: none">
                    <a href="http://www.sucaihuo.com/Member/message.html" class=""><i class="icon-nav icon-msg"></i>我的消息</a>
                </li>
            </ul>
        </div>
        <div class="member_per">
            <ul class="space-data panel">
                <li>
                    <span class="icon-clock icon" title="下载"></span>
                    下载：
                    <a href="http://www.sucaihuo.com/Member/downloads.html">2次</a>
                </li>
                <li>
                    <span class="icon-tick icon" title="收藏"></span>
                    收藏：
                    <a href="http://www.sucaihuo.com/Member/collects.html">0条</a>
                </li>
                <li>
                    <span class="icon-note icon" title="签到"></span>
                    签到：
                    <a class="countNote" href="http://www.sucaihuo.com/Member/sign.html">2次</a>
                </li>
                <!--            <li>
                                <span class="icon-ques icon" title="发表"></span>
                                话题：
                                <a href="">0条</a>
                            </li>-->
                <!--            <li>
                                <span class="icon-chat icon" title="回答"></span>
                                回答：
                                <a href="">0条</a>
                            </li>-->
                <li>
                    <span class="icon-code icon" title="代码"></span>
                    代码：
                    <a href="">0条</a>
                </li>
                <li>
                    <span class="icon-user icon" title="粉丝"></span>
                    粉丝：
                    <a href="">0个</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="member_main">
        <div class="perInfo">
            <div class="titleInfoBorder">
                <span>我的设置</span>
            </div>
            <div class="firstTabBox lineSpace">
                <a class="tab currentTab" href="http://www.sucaihuo.com/Member/set.html">个人资料</a>
                <span class="line">|</span>
                <a class="tab " href="http://www.sucaihuo.com/Member/avatar.html">头像设置</a>
                <span class="line">|</span>
                <a class="tab " href="http://www.sucaihuo.com/Member/email_check.html">邮箱验证</a>
                <span class="line">|</span>
                <a class="tab " href="http://www.sucaihuo.com/Member/pwd.html">修改密码</a>
                <!--    <span class="line">|</span>
                    <a class="tab " href="http://www.sucaihuo.com/Member/bind.html">绑定账号</a>-->
            </div>
        </div>
        <div class="setting-right-wrap wrap-boxes settings">
            <div id="setting-profile" class="setting-wrap setting-profile">
                <div class="wlfg-wrap">
                    <label class="label-name" for="nick">昵称</label>
                    <input id="nickname" class="rlf-input rlf-input-nick" placeholder="请输入昵称." value="tongpan" data-validate="nick" autocomplete="off" name="nickname" type="text">
                </div>
                <div class="wlfg-wrap">
                    <label class="label-name" for="job">职位</label>
                    <select id="job" class="rlf-select" hidefocus="true" name="job" autocomplete="off">
                        <option selected="selected" value="">请选择职位</option>
                        <option value="页面重构设计">页面重构设计</option><option value="交互设计师">交互设计师</option><option value="产品经理">产品经理</option><option value="UI设计师">UI设计师</option><option value="JS工程师">JS工程师</option><option value="Web前端工程师">Web前端工程师</option><option value="移动开发工程师">移动开发工程师</option><option value="PHP开发工程师">PHP开发工程师</option><option value="软件测试工程师">软件测试工程师</option><option value="Linux系统工程师">Linux系统工程师</option><option value="JAVA开发工程师">JAVA开发工程师</option><option value="技术总监">技术总监</option><option value="CEO">CEO</option><option value="学生">学生</option><option value="其它">其它</option>                    </select>
                </div>
                <div class="wlfg-wrap">
                    <label class="label-name" for="province-select">城市</label>
                    <span id="city_area">
                        <select class="prov"><option selected="selected" value="北京">北京</option><option value="天津">天津</option><option value="河北">河北</option><option value="山西">山西</option><option value="内蒙古">内蒙古</option><option value="辽宁">辽宁</option><option value="吉林">吉林</option><option value="黑龙江">黑龙江</option><option value="上海">上海</option><option value="江苏">江苏</option><option value="浙江">浙江</option><option value="安徽">安徽</option><option value="福建">福建</option><option value="江西">江西</option><option value="山东">山东</option><option value="河南">河南</option><option value="湖北">湖北</option><option value="湖南">湖南</option><option value="广东">广东</option><option value="广西">广西</option><option value="海南">海南</option><option value="重庆">重庆</option><option value="四川">四川</option><option value="贵州">贵州</option><option value="云南">云南</option><option value="西藏">西藏</option><option value="陕西">陕西</option><option value="甘肃">甘肃</option><option value="青海">青海</option><option value="宁夏">宁夏</option><option value="新疆">新疆</option><option value="香港">香港</option><option value="澳门">澳门</option><option value="台湾">台湾</option><option value="国外">国外</option></select>
                        <select class="city"><option selected="selected" value="东城区">东城区</option><option value="西城区">西城区</option><option value="崇文区">崇文区</option><option value="宣武区">宣武区</option><option value="朝阳区">朝阳区</option><option value="丰台区">丰台区</option><option value="石景山区">石景山区</option><option value="海淀区">海淀区</option><option value="门头沟区">门头沟区</option><option value="房山区">房山区</option><option value="通州区">通州区</option><option value="顺义区">顺义区</option><option value="昌平区">昌平区</option><option value="大兴区">大兴区</option><option value="平谷区">平谷区</option><option value="怀柔区">怀柔区</option><option value="密云县">密云县</option><option value="延庆县">延庆县</option></select>
                        <select style="display: none;" class="dist" disabled="disabled"></select>
                    </span>
                </div>
                <div class="wlfg-wrap">
                    <label class="label">性别</label>
                    <label>
                        <input name="sex" value="0" hidefocus="true" autocomplete="off" checked="checked" type="radio">
                        保密
                    </label>
                    <label>
                        <input name="sex" value="1" hidefocus="true" autocomplete="off" type="radio">
                        男
                    </label>
                    <label>
                        <input name="sex" value="2" hidefocus="true" autocomplete="off" type="radio">
                        女
                    </label>

                </div>
                <div class="wlfg-wrap">
                    <label class="label-name label_signature" for="aboutme">个性签名</label>
                    <textarea class="textarea textarea_signature" rows="5" cols="30" id="signature">123</textarea>

                </div>
                <div class="wlfg-wrap">
                    <label class="label-name"></label>
                    <button class="btn" type="button" id="btn_submit">保存</button>
                </div>
            </div>
        </div>
        <div class="pager"></div>
        <!--<div class="myspace-list">
    <a class="myspace-plan " href="http://www.sucaihuo.com/Member/info.html">
        <span>主页</span>
    </a>
     <a class="myspace-note planactive" href="http://www.sucaihuo.com/Member/set.html">
        <span>设置</span>
    </a>
    <a class="myspace-course " href="http://www.sucaihuo.com/Member/comments.html">
        <span>评论</span>
    </a>

    <a class="myspace-ques " href="">
        <span>问答</span>
    </a>

    <a class="myspace-code " href="">
        <span>代码</span>
    </a>
</div>-->
    </div>
</div>

<div class="footer" id="footer" data-url="http://www.sucaihuo.com/" data-logout="http://www.sucaihuo.com/Download/logout?r=/Member/set.html" data-id="" data-mtype="">
    <div class="footer_main clearfix">
        <div class="guide">
            <span class="guide_icon"></span>
            <ul class="ul_foot">
                <li><strong>网站模板</strong></li>
                <li><a href="http://www.sucaihuo.com/templates/3-0-0-0-0-0">行业模板</a><a href="http://www.sucaihuo.com/templates/7-0-0-0-0-0">专题模板</a></li>
                <li><a href="http://www.sucaihuo.com/templates/4-0-0-0-0-0">商城模板</a><a href="http://www.sucaihuo.com/templates/8-0-0-0-0-0">后台模板</a></li>
                <li><a href="http://www.sucaihuo.com/templates/5-0-0-0-0-0">企业模板</a><a href="http://www.sucaihuo.com/templates/9-0-0-0-0-0">其他模板</a></li>
                <li><a href="http://www.sucaihuo.com/templates/31-0-0-0-96-0">求职招聘</a><a href="http://www.sucaihuo.com/templates/22-0-0-0-96-0">订餐外送</a></li>
                <li><a href="http://www.sucaihuo.com/templates/69-0-0-0-0-0">个人博客</a><a href="http://www.sucaihuo.com/templates/0-0-0-0-96-0">中文模板</a></li>
            </ul>
        </div>
        <div class="stores">
            <span class="stores_icon"></span>
            <ul class="ul_foot">
                <li><strong>jquery特效</strong></li>
                <li><a href="http://www.sucaihuo.com/js/7-0-0-0">图片代码</a><a href="http://www.sucaihuo.com/js/7-0-0-0">悬浮层/弹出层</a></li>
                <li><a href="http://www.sucaihuo.com/js/8-0-0-0">导航菜单</a><a href="http://www.sucaihuo.com/js/14-0-0-0">其它特效</a></li>
                <li><a href="http://www.sucaihuo.com/js/9-0-0-0">选项卡/滑动门</a><a href="http://www.sucaihuo.com/js/53-0-0-0">PHP+Ajax</a></li>
                <li><a href="http://www.sucaihuo.com/js/11-0-0-0">表单代码</a><a href="http://www.sucaihuo.com/js/128-0-0-0">jQuery插件</a></li>
            </ul>
        </div>
        <div class="rebate">
            <span class="rebate_icon"></span>
            <ul class="ul_foot">
                <li><strong>推荐jQuery</strong></li>
                <li><a href="http://www.sucaihuo.com/js/177.html">datepicker</a><a href="http://www.sucaihuo.com/js/44.html">flowplayer</a></li>
                <li><a href="http://www.sucaihuo.com/js/1.html">jQuery购物车</a><a href="http://www.sucaihuo.com/js/85.html">jquery表单验证</a></li>
                <li><a href="http://www.sucaihuo.com/js/200.html">lightbox</a><a href="http://www.sucaihuo.com/js/125.html">jquery滚动条</a></li>
                <li><a href="http://www.sucaihuo.com/js/45.html">fancybox</a><a href="http://www.sucaihuo.com/js/268.html">WebUploader</a></li>
                <li><a href="http://www.sucaihuo.com/js/107.html">fullcalendar</a><a href="http://www.sucaihuo.com/js/3.html">上传</a></li>
            </ul>
        </div>
        <div class="follow">
            <span class="follow_icon"></span>
            <ul>
                <li>
                    <strong>联系我们</strong>
                </li>
                <li>
                    <a class="qq-chat" href="http://wpa.qq.com/msgrd?v=3&amp;uin=826096331&amp;site=qq&amp;menu=yes" target="_blank">
                        <img alt="QQ在线客服" src="images/qq-chat.png">
                    </a>
                </li>
                <li>qq群：173359504</li>
                <li>邮箱：826096331@qq.com</li>
                <li>手机：13671989456</li>
            </ul>
        </div>
        <div class="friendly">
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
<script src="/sucai/Public/HOME/images/member/hm.js"></script>
<script src="/sucai/Public/HOME/images/member/jquery_highlight.js" type="text/javascript"></script>
<script src="/sucai/Public/HOME/images/member/member.js" type="text/javascript"></script>
<div class="mmsg-box mmsg-box-info" id="msg-box" style="margin-top: -23.5px; margin-left: -96.5px;">
    <div class="mmsg-content">
        <i class="mmsg-icon"></i>
        <p id="msg-box-content"></p>
    </div>
    <div class="mmsg-background"></div>
</div>

<script type="text/javascript" src="images/jquery.js"></script>
<script type="text/javascript">
    $(function() {
        $("#city_area").citySelect({
            prov: "",
            city: "",
            dist: "",
            nodata: "none",
            url: "/Public/js/other/city.min.js"
        });
        $("#btn_submit").click(function() {
            var nickname = $("#nickname").val();
            var job = $("#job").val();
            var sex = $("input[name=sex]:checked").val();
            var signature = $("#signature").val();
            var area = '';
            $("#city_area").children("select").each(function() {
                area += $(this).val() + ",";
            })
            checkBefore('#btn_submit');
            $.post(getUrl("Ajax/updateInfo"), {nickname: nickname, job: job, area: area, sex: sex, signature: signature}, function(data) {
                $("#signed_textarea").val(signature);
                $(".job-title").html(job);
                $(".myname").html(nickname);
                checkAfter('#btn_submit');
                showSuccessTip('资料修改成功！');
            }, "json")
        })
    })

</script></body></html>