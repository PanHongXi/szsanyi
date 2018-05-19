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
        <li><a href="/szsanyi/index.php/Admin/Admin/loginOut" onclick="return confirm('您确定要退出吗？');" class="quit_icon">安全退出</a></li>
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
                <dd><a href="/szsanyi/index.php/Admin/Admin/adminlist" class="">管理员列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>类型管理</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/szsanyi/index.php/Admin/Attrtype/typeList" class="">类型列表</a></dd>
                <dd><a href="/szsanyi/index.php/Admin/Attrs/attrValue" class="">属性列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>常用操作</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/szsanyi/index.php/Admin/Cate/catelist" class="actve">栏目管理</a></dd>
                <dd><a href="/szsanyi/index.php/Admin/Article/article_list">文章管理</a></dd>
                <dd><a href="/szsanyi/index.php/Admin/Topic/topic_lst">话题管理</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>网站设置</dt>
                <dd><a href="/szsanyi/index.php/Admin/System/sy_list">系统设置</a></dd>
                <dd><a href="/szsanyi/index.php/Admin/Brief/lst">简介荣誉</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>文章管理</dt>
                <dd><a href="/szsanyi/index.php/Admin/Articlestype/lstType">文章类型</a></dd>
                <dd><a href="/szsanyi/index.php/Admin/Articles/lst">文章列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>其他</dt>
                <dd><a href="/szsanyi/index.php/Admin/Link/linkList">友情链接</a></dd>
                <dd><a href="/szsanyi/index.php/Admin/Contact/lst">联系厂家</a></dd>
                <dd><a href="/szsanyi/index.php/Admin/Articles/lst">留言信息</a></dd>
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
            <h2 class="fl">友情链接</h2>
            <a href="/szsanyi/index.php/Admin/Link/linkAdd" class="fr top_rt_btn add_icon">添加链接</a>
        </div>
        <form action="/szsanyi/index.php/Admin/Link/catesort" method="post">
            <table class="table">
                <tr>
                    <th style="width: 50px">链接ID</th>
                    <th>标题</th>
                    <th>图片</th>
                    <th style="width: 270px">链接</th>
                    <th style="width: 120px">是否显示</th>
                    <th style="width: 140px">发布时间</th>
                    <th style="width: 120px">操作</th>
                </tr>

                <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td class="center"><?php echo ($vo['id']); ?></td>
                        <td class="center"><a target="_blank" href="<?php echo ($vo['link_url']); ?>"><?php echo ($vo['link_title']); ?></a></td>
                        <td class="center">
                            <?php if($vo['Link_pic'] != ''): ?><a target="_blank" href="<?php echo ($vo['link_url']); ?>"> <img src="/szsanyi<?php echo ($vo['Link_pic']); ?>" width="50" height="50"/></a>
                                <?php else: ?>
                                暂无图片<?php endif; ?>
                        </td>
                        <td class="center"><a target="_blank" href="<?php echo ($vo['link_url']); ?>"><?php echo ($vo['link_url']); ?></a></td>
                        <td class="center">
                            <?php if($vo['link_status'] == 1): ?>是
                                <?php else: ?>
                                否<?php endif; ?>
                        </td>
                        <td class="center"><?php echo (date("Y-m-d H:i",$vo['addtime'])); ?></td>
                        <td class="center">
                            <a href="/szsanyi/index.php/Admin/Link/linkEdit/id/<?php echo ($vo['id']); ?>" title="编辑"
                               class="link_icon">&#101;</a>
                            <a href="/szsanyi/index.php/Admin/Link/linkDel/id/<?php echo ($vo['id']); ?>"
                               onclick="return confirm('您确定要删除吗?');" title="删除" class="link_icon">&#100;</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
        </form>
        <aside class="paging">
            <?php echo ($page); ?>
        </aside>
    </div>
</section>
</body>
</html>