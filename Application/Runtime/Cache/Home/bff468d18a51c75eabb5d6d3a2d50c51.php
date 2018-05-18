<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>小猪CMS之PHP环境搭配 - 素材火,素材火官网</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="__Imahes__/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/sucai/Public/HOME/style/style_version1.css" type="text/css" />
    <link rel="stylesheet" href="http://www.sucaihuo.com/other/topic/css/topic.css" type="text/css" />
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
        <?php if(is_array($cateRes)): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/sucai/index.php/Home/<?php if( $vo['cate_type'] == 0): ?>Lst<?php elseif($vo['cate_type'] == 1): ?>Page<?php else: ?>Topic<?php endif; ?>/index/cate_id/<?php echo ($vo['cate_id']); ?>" class="menu <?php if($current == $vo['cate_id']): ?>current<?php endif; ?>"><?php echo ($vo['cate_name']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
        <span class="icon_hot"></span>
    </div>
</div>

<div class="breadcrumbs">
    <span>&gt;</span><a href="http://www.sucaihuo.com/topic">讨论社区</a>
    <span>&gt;</span>小猪CMS之PHP环境搭配
</div>
<div  class="container clearfix topic">
    <div class="sidebar">
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/topic/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>最新话题 <span class="name-en">/New</span></strong>
                </dt>
                <dd class="sidebar_articles">
                    <span>07-20</span>
                    <a target="_blank"  href="http://www.sucaihuo.com/topic/89.html">小猪CMS之PHP环境搭配</a>
                </dd><dd class="sidebar_articles">
                <span>07-19</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/88.html">11111</a>
            </dd><dd class="sidebar_articles">
                <span>07-18</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/87.html">做个调查，各位通常夜里几点休息？</a>
            </dd><dd class="sidebar_articles">
                <span>07-16</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/86.html">重设密码似乎有问题</a>
            </dd><dd class="sidebar_articles">
                <span>07-15</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/85.html">asdfasdf</a>
            </dd><dd class="sidebar_articles">
                <span>07-15</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/84.html">测试测试测试</a>
            </dd><dd class="sidebar_articles">
                <span>07-15</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/83.html">蓝皮肤那个日期插件怎么设置过去日期禁止点击</a>
            </dd><dd class="sidebar_articles">
                <span>07-15</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/82.html">当月签到正好20天的话，还会有积分赠送么？</a>
            </dd><dd class="sidebar_articles">
                <span>07-12</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/76.html">下载模版名称中有乱码，请管理员关注一下。</a>
            </dd><dd class="sidebar_articles">
                <span>07-07</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/75.html">素材火提供收费功能开发</a>
            </dd>        </dl>
        </div>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/topic/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>标签云 <span class="name-en">/Tag</span></strong>
                </dt>
                <dd class="sidebar_tags">
                    <a target="_blank" href="http://www.sucaihuo.com/topic/tag-php.html">php</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-Html/CSS.html">Html/CSS</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-Mysql.html">Mysql</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-Html5.html">Html5</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-JQuery.html">JQuery</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-JavaScript.html">JavaScript</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-Bootstrap.html">Bootstrap</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-CSS3.html">CSS3</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-前端工具.html">前端工具</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-大数据.html">大数据</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-Thinkphp.html">Thinkphp</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-Ajax.html">Ajax</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-Curl.html">Curl</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-表单.html">表单</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-JSON.html">JSON</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-手机.html">手机</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-后台.html">后台</a><a target="_blank" href="http://www.sucaihuo.com/topic/tag-插件.html">插件</a>            </dd>
            </dl>
        </div>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/topic/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>相关网址 <span class="name-en">/Relative</span></strong>
                </dt>
                <dd class="sidebar_articles">
                    <span>08-03</span>
                    <a target="_blank"  href="http://www.sucaihuo.com/topic/1.html">腾讯微博图片接口如何传参</a>
                </dd><dd class="sidebar_articles">
                <span>08-03</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/3.html">个人网站源码</a>
            </dd><dd class="sidebar_articles">
                <span>08-04</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/5.html">优化Mysql的面试题</a>
            </dd><dd class="sidebar_articles">
                <span>08-08</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/10.html">黄总求一个速度快的IP库</a>
            </dd><dd class="sidebar_articles">
                <span>08-12</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/11.html">php+zend解密工具</a>
            </dd><dd class="sidebar_articles">
                <span>05-23</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/59.html">ACE后台模板中bootstrap-wysiwyg中JS控件富文本中的图片由本地上传到OSS服务器</a>
            </dd><dd class="sidebar_articles">
                <span>08-12</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/13.html">发布一个原生PHP+原生JS头像截图神器，秒杀富头像和jcrop，互联网上最好头像截图插件</a>
            </dd><dd class="sidebar_articles">
                <span>08-14</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/15.html">shearphoto1.2版头像截取，切图插件升级版来了，加入移动端触摸事件！ shearphoto支持手机截图了</a>
            </dd><dd class="sidebar_articles">
                <span>05-23</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/60.html">PHP获得微信用户的OpenID，然后再通过OpenID和access_token查询用户信息</a>
            </dd><dd class="sidebar_articles">
                <span>06-07</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/67.html">号外！号外！找火哥免费要积分啦</a>
            </dd><dd class="sidebar_articles">
                <span>12-18</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/31.html">ThinkPHP3.2.3中的文本编辑框如何实现？</a>
            </dd><dd class="sidebar_articles">
                <span>12-20</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/32.html">求助网站源码</a>
            </dd><dd class="sidebar_articles">
                <span>12-22</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/33.html">寻求项目合作</a>
            </dd><dd class="sidebar_articles">
                <span>12-22</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/35.html">求助高手指点</a>
            </dd><dd class="sidebar_articles">
                <span>04-19</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/55.html">RAND随机查询</a>
            </dd><dd class="sidebar_articles">
                <span>05-27</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/64.html">号外！号外！素材火招聘兼职人员了。</a>
            </dd><dd class="sidebar_articles">
                <span>04-19</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/54.html">mysql优化顺序</a>
            </dd><dd class="sidebar_articles">
                <span>06-11</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/68.html">素材火整站源码频道上线</a>
            </dd><dd class="sidebar_articles">
                <span>07-07</span>
                <a target="_blank"  href="http://www.sucaihuo.com/topic/75.html">素材火提供收费功能开发</a>
            </dd>            </dl>
        </div></div>
    <div class="detail">
        <div class="head">
            <div class="head_inner">
                <img class="round-image" width="50" height="50" alt="头像" src="http://www.sucaihuo.com/other/avatar/dir/1.jpg" />
                <h1>小猪CMS之PHP环境搭配</h1>
                <p class="info">
                    <span class="fr">来源：<a target="_blank" href="http://www.sucaihuo.com/topic/89.html">http://www.sucaihuo.com/topic/89.html</a></span>

                    素材火管理员                    <span class="addtime">2016-07-20 10:14</span><span>浏览(<span>39</span>)</span>
                    <a class="poster_likes " onclick="getCollect($(this), '89', '21')" href="javascript:void(0)">
                        <i class="like_status lm_like"> </i>
                    </a>
                    <a id="topic-edit" class="qa-edit hide" data-uid='1' style='position: relative;font-size: 13px;top:2px;left:5px;' href="http://www.sucaihuo.com/Topic/edit/id/89.html">
                        <i class="icon-edit"></i>
                    </a>
                </p>
            </div>
        </div>

        <div class="content"><p>小猪CMS10%源码被加密了，必须安装ioncube和zendguard组件才能解析，并且PHP环境是5.3或5.4才可以。</p><p>本人已经试过用wamp环境搭配，但屡试不爽，未能安装成功。</p><p>因此推荐phpstudy，和wamp类似,自带了zendguard组件，安装小猪CMS系统步骤如下：</p><p><br/></p><p><strong>一、安装phpstudy环境</strong></p><p>phpstudy下载地址：<a title="phpstudy.exe" target="_self" href="http://www.sucaihuo.com/other/soft/phpStudy2014.exe">phpstudy.exe</a></p><p>安装好后，切换版本到php54n</p><p><img alt="1.png" src="/ueditor/php/upload/image/20160720/1468979867522599.png" title="1468979867522599.png"/></p><p>选择非服务模式</p><p><img alt="2.png" src="/ueditor/php/upload/image/20160720/1468979924111925.png" title="1468979924111925.png"/></p><p><strong>二、下载安装ioncube组件</strong></p><p>windows64位下载地址：<a title="ioncube" target="_self" href="http://www.sucaihuo.com/other/soft/ioncube.rar">ioncube.rar</a><br/></p><p>若是其他系统请放在PHP环境下，检测并安装<a title="loader-wizard.rar" target="_self" href="http://www.sucaihuo.com/other/soft/loader-wizard.rar">loader-wizard.rar</a></p><p>ioncube安装成功截图如下：</p><p><br/></p><p><img alt="1.png" src="/ueditor/php/upload/image/20160720/1468980393811146.png" title="1468980393811146.png"/></p><p>ionCube存放地址：D:\phpStudy\php54n</p><p><img alt="1.png" src="/ueditor/php/upload/image/20160720/1468980591944096.png" title="1468980591944096.png"/></p><p><br/></p><p><strong>三、php.ini设置</strong></p><p>zend_extension = &quot;D:\phpStudy\php54n\ioncube\ioncube_loader_win_5.4.dll&quot;</p><p>提示：必须放在ZendLoader.dll组件上方。</p><p><br/></p><p><br/></p><p>hosts示例：<br/></p><p>127.0.0.1 www.sucaihuo.com<br/>127.0.0.1 sucaihuo.com</p>                    </div>





        <div class="detail_foot clearfix">
            <div class="bshare">
                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone"></a><a href="#" class="bds_tsina" data-cmd="tsina"></a><a href="#" class="bds_tqq" data-cmd="tqq"></a><a href="#" class="bds_renren" data-cmd="renren"></a><a href="#" class="bds_weixin" data-cmd="weixin"></a></div>
                <script>window._bd_share_config = {"common": {"bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdPic": "", "bdStyle": "0", "bdSize": "16"}, "share": {}, "image": {"viewList": ["qzone", "tsina", "tqq", "renren", "weixin"], "viewText": "分享到：", "viewSize": "16"}, "selectShare": {"bdContainerClass": null, "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]}};
                with (document)
                    0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
            </div>
            <!--       <div class="bshare">
                            <div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                        </div>-->
            <div class="tagged_with">
                <span class="gray">标签：</span>
                <a target="_blank" class="button3 white" href="http://www.sucaihuo.com/topic/tag-php">php</a><a target="_blank" class="button3 white" href="http://www.sucaihuo.com/topic/tag-小猪">小猪</a><a target="_blank" class="button3 white" href="http://www.sucaihuo.com/topic/tag-cms">cms</a>        </div>
            <!--    <div class="alipay">
                    <strong>如果您觉得本文的内容对您的学习有所帮助，您可以扫描下面的二维码请我喝杯茶，感谢！</strong>
                    <div class="alipay_img">
                        <img src="/Public/images/pay.jpg" alt="alipay转账">
                    </div>
                </div>-->
            <div class="page_nav clearfix">
                <div class="next_page" title="下一篇">
                </div>
                <div class="pre_page" title="上一篇">
                    <a href="http://www.sucaihuo.com/topic/88.html" target="_blank">11111</a>
                </div>

            </div>
            <script type="text/javascript">
                /*760*90 横幅*/
                var cpro_id = "u2182156";
            </script>
            <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>

            <div class="comments">
                <div class="title">
                    评论<span class="num_area">（<em class="comments_num" id="comments_num">3</em>）</span>
                </div>

                <div class="comment_send clearfix">
                    <div class="comment_avatar">
                <span class="userPic">
                    <img class='userPic avatar user_my_avatar' width="60" height="60" src="/Public/images/avatar.jpg" alt="头像">
                </span>
                        <font class="username"></font>
                    </div>
                    <div class="comment_sendPart" id='reply_0'>
                <textarea id="textareaComment" class="textarea_comment" name="content"  autocomplete="off"  data-default="发布评论" onblur="checkInputBlur($(this))" onfocus="checkInputFocus($(this));
                        if ($(this).val() != '发布评论')
                            $(this).css({'color': '#333'})">发布评论</textarea>
                        <div class="btn_p clearfix">
                            <span class="comment_tip" id="comment_tip_0" data-top="11" data-foot="36"></span>
                            <button class="btn_subGrey btn" type="button" onclick="subcomment('89', '21', 0)">提 交</button>
                            <span class="emotion" tabindex="1" data-id='0'></span>
                        </div>
                    </div>
                </div>
                <div  class="comment_wrap" id="comment_wrap">
                    <ul class="comment_listBox">
                        <li class="comment_list clearfix" id="comment_17037" >
                            <div class="comment_avatar">
                                <span class='userPic'><img width="36" height="36" src="http://www.sucaihuo.com/Public/images/avatar.jpg" alt="头像"></span>
                                <span class="grey">板凳</span>
                            </div>
                            <div class="comment_conBox">
                                <div class="comment_avatar_time">
                                    <div class="time">15小时前 16:50</div> zhenjingyue                        </div>
                                <div class="comment_conWrap clearfix">
                                    <div class="comment_action"><a class="reply" onclick="reply_btn('17037')">回复</a> </div>
                                    <div class="comment_con">什么环境配置啊?小猪cms?</div>
                                </div>
                                <div id='reply_17037' class='reply_area'>
                                    <textarea  class="textarea_comment" name="content" autocomplete="off"></textarea>
                                    <div class="btn_p clearfix">
                                        <span class="comment_tip" id="comment_tip_17037" data-top="4" data-foot="29"></span>
                                        <button class="btn_subGrey btn" onclick="subcomment('89', '21', '17037', 0)" type="button">提交</button>
                                        <span class="emotion" tabindex="1" data-id='17037'></span>
                                    </div>
                                </div>
                                <div class="blockquote_wrap">
                                </div>
                            </div>
                        </li><li class="comment_list clearfix" id="comment_16932" >
                        <div class="comment_avatar">
                            <span class='userPic'><img width="36" height="36" src="http://www.sucaihuo.com/Public/images/avatar.jpg" alt="头像"></span>
                            <span class="grey">椅子</span>
                        </div>
                        <div class="comment_conBox">
                            <div class="comment_avatar_time">
                                <div class="time">昨天 07-26 15:03</div> a986030357                        </div>
                            <div class="comment_conWrap clearfix">
                                <div class="comment_action"><a class="reply" onclick="reply_btn('16932')">回复</a> </div>
                                <div class="comment_con">这个挺好用的吧   这是 phpstudy</div>
                            </div>
                            <div id='reply_16932' class='reply_area'>
                                <textarea  class="textarea_comment" name="content" autocomplete="off"></textarea>
                                <div class="btn_p clearfix">
                                    <span class="comment_tip" id="comment_tip_16932" data-top="4" data-foot="29"></span>
                                    <button class="btn_subGrey btn" onclick="subcomment('89', '21', '16932', 0)" type="button">提交</button>
                                    <span class="emotion" tabindex="1" data-id='16932'></span>
                                </div>
                            </div>
                            <div class="blockquote_wrap">
                            </div>
                        </div>
                    </li><li class="comment_list clearfix" id="comment_16676" style='border-bottom:none'>
                        <div class="comment_avatar">
                            <span class='userPic'><img width="36" height="36" src="http://www.sucaihuo.com/Public/images/avatar.jpg" alt="头像"></span>
                            <span class="grey">沙发</span>
                        </div>
                        <div class="comment_conBox">
                            <div class="comment_avatar_time">
                                <div class="time">07-23 10:57</div> 明天很好啊                        </div>
                            <div class="comment_conWrap clearfix">
                                <div class="comment_action"><a class="reply" onclick="reply_btn('16676')">回复</a> </div>
                                <div class="comment_con">这是什么环境配置啊?小猪cms?</div>
                            </div>
                            <div id='reply_16676' class='reply_area'>
                                <textarea  class="textarea_comment" name="content" autocomplete="off"></textarea>
                                <div class="btn_p clearfix">
                                    <span class="comment_tip" id="comment_tip_16676" data-top="4" data-foot="29"></span>
                                    <button class="btn_subGrey btn" onclick="subcomment('89', '21', '16676', 0)" type="button">提交</button>
                                    <span class="emotion" tabindex="1" data-id='16676'></span>
                                </div>
                            </div>
                            <div class="blockquote_wrap">
                            </div>
                        </div>
                    </li>            </ul>
                </div>
            </div>
        </div>
        <div class="smileBoxOuter" id="smileBoxOuter" tabindex="2">
            <ul class="smileBox">
                <li><a href="javascript:void(0)" class="smile1" title="糗大了"></a></li><li><a href="javascript:void(0)" class="smile2" title="示爱"></a></li><li><a href="javascript:void(0)" class="smile3" title="晕"></a></li><li><a href="javascript:void(0)" class="smile4" title="酷"></a></li><li><a href="javascript:void(0)" class="smile5" title="流泪"></a></li><li><a href="javascript:void(0)" class="smile6" title="饿了"></a></li><li><a href="javascript:void(0)" class="smile7" title="闭嘴"></a></li><li><a href="javascript:void(0)" class="smile8" title="做鬼脸"></a></li><li><a href="javascript:void(0)" class="smile9" title="馋"></a></li><li><a href="javascript:void(0)" class="smile10" title="坏笑"></a></li><li><a href="javascript:void(0)" class="smile11" title="抓狂"></a></li><li><a href="javascript:void(0)" class="smile12" title="呵呵"></a></li><li><a href="javascript:void(0)" class="smile13" title="淡定"></a></li><li><a href="javascript:void(0)" class="smile14" title="冷汗"></a></li><li><a href="javascript:void(0)" class="smile15" title="色"></a></li><li><a href="javascript:void(0)" class="smile16" title="惊讶"></a></li><li><a href="javascript:void(0)" class="smile17" title="希望"></a></li><li><a href="javascript:void(0)" class="smile18" title="伤心"></a></li><li><a href="javascript:void(0)" class="smile19" title="微笑"></a></li><li><a href="javascript:void(0)" class="smile20" title="惊吓"></a></li><li><a href="javascript:void(0)" class="smile21" title="哈哈"></a></li><li><a href="javascript:void(0)" class="smile22" title="吃饭"></a></li><li><a href="javascript:void(0)" class="smile23" title="观察"></a></li><li><a href="javascript:void(0)" class="smile24" title="高兴"></a></li><li><a href="javascript:void(0)" class="smile25" title="皱眉"></a></li><li><a href="javascript:void(0)" class="smile26" title="大囧"></a></li><li><a href="javascript:void(0)" class="smile27" title="邪恶"></a></li><li><a href="javascript:void(0)" class="smile28" title="锁眉"></a></li><li><a href="javascript:void(0)" class="smile29" title="惊喜"></a></li><li><a href="javascript:void(0)" class="smile30" title="小怒"></a></li><li><a href="javascript:void(0)" class="smile31" title="无语"></a></li><li><a href="javascript:void(0)" class="smile32" title="傻笑"></a></li><li><a href="javascript:void(0)" class="smile33" title="黑线"></a></li><li><a href="javascript:void(0)" class="smile34" title="喜极而泣"></a></li><li><a href="javascript:void(0)" class="smile35" title="口水"></a></li><li><a href="javascript:void(0)" class="smile36" title="不说话"></a></li><li><a href="javascript:void(0)" class="smile37" title="抽烟"></a></li><li><a href="javascript:void(0)" class="smile38" title="汗"></a></li><li><a href="javascript:void(0)" class="smile39" title="尴尬"></a></li><li><a href="javascript:void(0)" class="smile40" title="小眼睛"></a></li><li><a href="javascript:void(0)" class="smile41" title="龇牙"></a></li><li><a href="javascript:void(0)" class="smile42" title="亲亲"></a></li><li><a href="javascript:void(0)" class="smile43" title="哭泣"></a></li><li><a href="javascript:void(0)" class="smile44" title="大吃一惊"></a></li>    </ul>
            <ul class="smileBox" style="display:none;">
                <li><a href="javascript:void(0)" class="smile46" title="不高兴"></a></li><li><a href="javascript:void(0)" class="smile47" title="得意"></a></li><li><a href="javascript:void(0)" class="smile48" title="阴脸"></a></li><li><a href="javascript:void(0)" class="smile49" title="装大款"></a></li><li><a href="javascript:void(0)" class="smile50" title="吐舌"></a></li><li><a href="javascript:void(0)" class="smile51" title="暗地观察"></a></li><li><a href="javascript:void(0)" class="smile52" title="吐血"></a></li><li><a href="javascript:void(0)" class="smile53" title="脸红"></a></li><li><a href="javascript:void(0)" class="smile54" title="肿包"></a></li><li><a href="javascript:void(0)" class="smile55" title="抠鼻"></a></li><li><a href="javascript:void(0)" class="smile56" title="赞一个"></a></li><li><a href="javascript:void(0)" class="smile57" title="中指"></a></li><li><a href="javascript:void(0)" class="smile58" title="期待"></a></li><li><a href="javascript:void(0)" class="smile59" title="倒地"></a></li><li><a href="javascript:void(0)" class="smile60" title="火冒三丈"></a></li><li><a href="javascript:void(0)" class="smile61" title="吐"></a></li><li><a href="javascript:void(0)" class="smile62" title="喷水"></a></li><li><a href="javascript:void(0)" class="smile63" title="喷血"></a></li><li><a href="javascript:void(0)" class="smile64" title="蜡烛"></a></li><li><a href="javascript:void(0)" class="smile65" title="想一想"></a></li><li><a href="javascript:void(0)" class="smile66" title="认真听讲"></a></li><li><a href="javascript:void(0)" class="smile67" title="不好意思"></a></li><li><a href="javascript:void(0)" class="smile68" title="欢呼"></a></li><li><a href="javascript:void(0)" class="smile69" title="便便"></a></li><li><a href="javascript:void(0)" class="smile70" title="鼓掌"></a></li><li><a href="javascript:void(0)" class="smile71" title="深思"></a></li><li><a href="javascript:void(0)" class="smile72" title="害羞"></a></li><li><a href="javascript:void(0)" class="smile73" title="苦恼"></a></li><li><a href="javascript:void(0)" class="smile74" title="长草"></a></li><li><a href="javascript:void(0)" class="smile75" title="无所谓"></a></li><li><a href="javascript:void(0)" class="smile76" title="咽气"></a></li><li><a href="javascript:void(0)" class="smile77" title="投降"></a></li><li><a href="javascript:void(0)" class="smile78" title="没看见"></a></li><li><a href="javascript:void(0)" class="smile79" title="击掌"></a></li><li><a href="javascript:void(0)" class="smile80" title="献黄瓜"></a></li><li><a href="javascript:void(0)" class="smile81" title="献花"></a></li><li><a href="javascript:void(0)" class="smile82" title="撞墙"></a></li><li><a href="javascript:void(0)" class="smile83" title="中刀"></a></li><li><a href="javascript:void(0)" class="smile84" title="中枪"></a></li>    </ul>
            <div class="smilePage">
                <a href="javascript:void(0)" class="current">1</a>
                <a href="javascript:void(0)">2</a>
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
            <input id="email" name="email"  class="form_input" type="text" autocomplete="off" tabindex="1" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))"/>
        </div>
        <div class="form_item">
            <div class="item_tip">密码</div>
            <input name="pwd" id="pwd"class="form_input" type="password" tabindex="2" value="" onblur="blurInputLoginBox($(this))"  onfocus ="focusInputLoginBox($(this))" />
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
            绑定送<span class="red">200</span>积分
        </div>
    </div>
</div>
<script src="/Public/js/jquery.js" type="text/javascript"></script><script src="/Public/js/common_version1.js" type="text/javascript"></script>

<!--[if !IE]><!-->
<script src="/Public/js/other/jquery.chili-2.2.js" type="text/javascript"></script>
<script src="/Public/js/other/recipes.js" type="text/javascript"></script>
<!--<![endif]--><div class="mmsg-box mmsg-box-info" id='msg-box' style="margin-top: -23.5px; margin-left: -96.5px;">
    <div class="mmsg-content">
        <i class="mmsg-icon"></i>
        <p id='msg-box-content'></p>
    </div>
    <div class="mmsg-background"></div>
</div>
<script  type="text/javascript">
    var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?b5ae3f71dfe5f06a9dd4dc55087f27d1";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s)})();
    //var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1258090369'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s4.cnzz.com/z_stat.php%3Fid%3D1258090369' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>