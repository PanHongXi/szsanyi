<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>
    <meta name="author" content="DeathGhost"/>
    <link rel="stylesheet" type="text/css" href="/sucai/Public/Admin/Css/style.css">
    <!--[if lt IE 9]>
    <script src="/sucai/Public/Admin/Js/html5.js"></script>
    <![endif]-->
    <script src="/sucai/Public/Admin/Js/jquery.js"></script>
    <script src="/sucai/Public/Admin/Js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>

        (function ($) {
            $(window).load(function () {

                $("a[rel='load-content']").click(function (e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    $.get(url, function (data) {
                        $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                        //scroll-to appended content
                        $(".content").mCustomScrollbar("scrollTo", "h2:last");
                    });
                });

                $(".content").delegate("a[href='top']", "click", function (e) {
                    e.preventDefault();
                    $(".content").mCustomScrollbar("scrollTo", $(this).attr("href"));
                });

            });
        })(jQuery);
    </script>
</head>
<body>
<!--header-->
<header>
    <h1><img src="/sucai/Public/Admin/Images/admin_logo.png"/></h1>
    <ul class="rt_nav">
        <li><a href="http://www.deathghost.cn" target="_blank" class="website_icon">站点首页</a></li>
        <li><a href="#" class="clear_icon">清除缓存</a></li>
        <li><a href="#" class="admin_icon">DeathGhost</a></li>
        <li><a href="#" class="set_icon">账号设置</a></li>
        <li><a href="/sz/index.php/Admin/Admin/loginOut" onclick="return confirm('您确定要退出吗？');" class="quit_icon">安全退出</a></li>
    </ul>
</header>
<!--aside nav-->
<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
    <h2><a href="index.html">起始页</a></h2>
    <ul>
        <li>
            <dl>
                <dt>管理员管理</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/sz/index.php/Admin/Admin/adminlist" class="">管理员列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>类型管理</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/sz/index.php/Admin/Attrtype/typeList" class="">类型列表</a></dd>
                <dd><a href="/sz/index.php/Admin/Attrs/attrValue" class="">属性列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>常用操作</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/sz/index.php/Admin/Cate/catelist" class="actve">栏目管理</a></dd>
                <dd><a href="/sz/index.php/Admin/Article/article_list">文章管理</a></dd>
                <dd><a href="/sz/index.php/Admin/Topic/topic_lst">话题管理</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>网站设置</dt>
                <dd><a href="/sz/index.php/Admin/System/sy_list">系统设置</a></dd>
                <dd><a href="/sz/index.php/Admin/Brief/lst">简介荣誉</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>文章管理</dt>
                <dd><a href="/sz/index.php/Admin/Articlestype/lstType">文章类型</a></dd>
                <dd><a href="/sz/index.php/Admin/Articles/lst">文章列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>其他</dt>
                <dd><a href="/sz/index.php/Admin/Link/linkList">友情链接</a></dd>
                <dd><a href="/sz/index.php/Admin/Contact/lst">联系厂家</a></dd>
                <dd><a href="/sz/index.php/Admin/Articles/lst">留言信息</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>常用布局示例</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="product_list.html" class="active">商品列表示例</a></dd>
                <dd><a href="product_detail.html">商品详情示例</a></dd>
                <dd><a href="recycle_bin.html">商品回收站示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>订单信息</dt>
                <dd><a href="order_list.html">订单列表示例</a></dd>
                <dd><a href="order_detail.html">订单详情示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>会员管理</dt>
                <dd><a href="user_list.html">会员列表示例</a></dd>
                <dd><a href="user_detail.html">添加会员（详情）示例</a></dd>
                <dd><a href="user_rank.html">会员等级示例</a></dd>
                <dd><a href="adjust_funding.html">会员资金管理示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>基础设置</dt>
                <dd><a href="setting.html">站点基础设置示例</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>配送与支付设置</dt>
                <dd><a href="express_list.html">配送方式</a></dd>
                <dd><a href="pay_list.html">支付方式</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>在线统计</dt>
                <dd><a href="discharge_statistic.html">流量统计</a></dd>
                <dd><a href="sales_volume.html">销售额统计</a></dd>
            </dl>
        </li>
        <li>
            <p class="btm_infor">© DeathGhost.cn 版权所有</p>
        </li>
    </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <div class="page_title">
            <h2 class="fl">系统设置</h2>
            <a class="fr top_rt_btn" href="/sz/index.php/Admin/System/sy_list">返回系统列表</a>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
            <section>
                <ul class="ulColumn2">
                    <li>
                        <span class="item_name" style="width:120px;">网站标题：</span>
                        <input type="text" name="sy_title" class="textbox textbox_295" value="<?php echo (C("sy_title")); ?>"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">网站关键字：</span>
                        <input type="text" name="sy_keys" class="textbox textbox_295" value="<?php echo (C("sy_keys")); ?>" />
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">企业邮箱：</span>
                        <input type="text" name="sy_email" class="textbox textbox_295" value="<?php echo (C("sy_email")); ?>" />
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">备案号：</span>
                        <input type="text" name="sy_record" class="textbox textbox_295" value="<?php echo (C("sy_record")); ?>"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">版权信息：</span>
                        <input type="text" name="sy_copyright" class="textbox textbox_295" value="<?php echo (C("sy_copyright")); ?>"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">业务QQ：</span>
                        <input name="sy_qq" class="textbox textbox_295" value="<?php echo (C("SY_QQ")); ?>"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">电话：</span>
                        <input name="sy_qq" class="textbox textbox_295" value="<?php echo (C("SY_PHONE")); ?>"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">地址公司：</span>
                        <input name="sy_qq" class="textbox textbox_295" value="<?php echo (C("SY_ADDRESS")); ?>"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">工厂地址：</span>
                        <input name="sy_qq" class="textbox textbox_295" value="<?php echo (C("SY_MILL_ADDRESS")); ?>"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">站点描述：</span>
                        <textarea name="sy_desc" class="textbox textbox_295"  style="width: 500px;height: 200px;"><?php echo (C("sy_desc")); ?></textarea>
                    </li>
                    <!--<li>-->
                        <!--<span class="item_name" style="width:120px;">文章推荐Tags：</span>-->
                        <!--<textarea name="bqy" class="textbox textbox_295"  style="width: 500px;height: 200px;"><?php echo (C("bqy")); ?></textarea>-->
                    <!--</li>-->
                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <input type="submit" value="保存修改" class="link_btn"/>
                    </li>
                </ul>
            </section>
        </form>
    </div>
</section>
<script type="text/javascript" charset="utf-8" src="/sz/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/sz/Public/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/sz/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<script src="/sucai/Public/Admin/Js/ueditor.config.js"></script>
<script src="/sucai/Public/Admin/Js/ueditor.all.min.js"></script>
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    UE.getEditor('content', {initialFrameWidth: 1500, initialFrameHeight: 400,});
</script>
</body>
</html>