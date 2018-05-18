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
        <li><a href="/sucai/index.php/Admin/Admin/loginOut" onclick="return confirm('您确定要退出吗？');" class="quit_icon">安全退出</a></li>
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
                <dd><a href="/sucai/index.php/Admin/Admin/adminlist" class="">管理员列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>类型管理</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/sucai/index.php/Admin/Attrtype/typeList" class="">类型列表</a></dd>
                <dd><a href="/sucai/index.php/Admin/Attrtype/attrValue" class="">属性列表</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>常用操作</dt>
                <!--当前链接则添加class:active-->
                <dd><a href="/sucai/index.php/Admin/Cate/catelist" class="actve">栏目管理</a></dd>
                <dd><a href="/sucai/index.php/Admin/Article/article_list">文章管理</a></dd>
                <dd><a href="/sucai/index.php/Admin/Topic/topic_lst">话题管理</a></dd>
            </dl>
        </li>
        <li>
            <dl>
                <dt>网站设置</dt>
                <dd><a href="/sucai/index.php/Admin/System/sy_list">系统设置</a></dd>
                <dd><a href="/sucai/index.php/Admin/Points/lst">积分设置</a></dd>
                <dd><a href="order_detail.html">订单详情示例</a></dd>
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
            <h2 class="fl">属性列表</h2>
            <a href="/sucai/index.php/Admin/Attrtype/addValue" class="fr top_rt_btn add_icon">添加属性</a>
        </div>
        <form action="" method="get">
            <section class="mtb">
                <!--<select class="select" name="1">-->
                <!--<?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                <!--<option  value="<?php echo ($vo['cate_id']); ?>"  <?php if($vo['cate_type'] != 1): ?>style="display:none;"<?php endif; ?> ><?php echo str_repeat("-",$vo["level"]*3); echo ($vo['cate_name']); ?></option>-->
                <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                <!--</select>-->

                <input type="text" value="" name="article_title" class="textbox textbox_225" placeholder="输入产品关键词或产品货号..."/>
                <input type="submit" value="查询" class="group_btn"/>
            </section>
        </form>
        <form action="/sucai/index.php/Admin/Attrtype/catesort" method="post">
            <table class="table">
                <tr>
                    <th style="width: 50px">属性ID</th>
                    <th>属性标题</th>
                    <th>属性作者</th>
                    <th>属性属性</th>
                    <th>缩略图</th>
                    <th style="width: 60px">推荐状态</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>

                <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td class="center"><?php echo ($vo['article_id']); ?></td>
                        <td class="center"><?php echo ($vo['article_title']); ?></td>
                        <td class="center"><?php echo ($vo['article_author']); ?></td>
                        <td class="center"><?php echo ($vo['cate_name']); ?></td>
                        <td class="center">
                            <?php if($vo['article_pic'] != ''): ?><img src="/sucai<?php echo ($vo['article_pic']); ?>" width="50" height="50"/>
                                <?php else: ?>
                                暂无图片<?php endif; ?>
                        </td>
                        <td class="center">
                            <?php if($vo['article_reco'] == 0): ?>不推荐
                                <?php else: ?>
                                推荐<?php endif; ?>
                        </td>
                        <td><?php echo (date("Y-m-d H-i-s",$vo['article_time'])); ?></td>
                        <td class="center">
                            <a href="" title="预览" class="link_icon" target="_blank">&#118;</a>
                            <a href="/sucai/index.php/Admin/Attrtype/article_edit/article_id/<?php echo ($vo['article_id']); ?>" title="编辑"
                               class="link_icon">&#101;</a>
                            <a href="/sucai/index.php/Admin/Attrtype/article_del/article_id/<?php echo ($vo['article_id']); ?>"
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