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
            <h2 class="fl">添加文章</h2>
            <a class="fr top_rt_btn" href="/sz/index.php/Admin/Article/article_list">返回文章列表</a>
        </div>
        <form method="post" action="" enctype="multipart/form-data">
            <section>
                <ul class="ulColumn2">
                    <li>
                        <span class="item_name" style="width:120px;">文章标题：</span>
                        <input type="text" name="article_title" class="textbox textbox_295"  placeholder="文章标题..."/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">文章作者：</span>
                        <input type="text" name="article_author" class="textbox textbox_295"  placeholder="文章作者..."/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">文章关键字：</span>
                        <input type="text" name="article_keys" class="textbox textbox_295"
                               placeholder="文章关键字.多个用半角’,‘分割"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">文章描述：</span>
                        <textarea name="article_desc" class="textbox textbox_295"
                                  style="width: 500px;height: 200px;" placeholder="文章描述"></textarea>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">文章分类：</span>
                        <select class="select" name="cate_id">
                            <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['cate_id']); ?>"><?php echo str_repeat("-",$vo["level"]*3); echo ($vo['cate_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">文章推荐：</span>
                        <label class="single_selection"><input type="radio" value="0" checked="checked" name="article_reco"/>不推荐</label>
                        <label class="single_selection"><input type="radio" value="1" name="article_reco"/>推荐</label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">文章类型：</span>
                        <select class="select" name="type_id">
                            <option value="">选择类型</option>
                            <?php if(is_array($typeattr)): $i = 0; $__LIST__ = $typeattr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$typeattr): $mod = ($i % 2 );++$i;?><option value="<?php echo ($typeattr['type_id']); ?>"><?php echo ($typeattr['type_name']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </li>
                    <li id="attr"></li>
                    <script>
                        $("select[name=type_id]").change(function () {
                            var type_id = $(this).val();
                            var attr = $("#attr");
                            var html = "";
                            if (!type_id) {
                                attr.html("");
                                return false;
                            }
                            $.ajax({
                                type:"GET",
                                url:"/sz/index.php/Admin/Article/ajaxGetAttr/type_id/"+type_id,
                                dataType:"json",
                                success:function (data) {
                                    $(data).each(function (k,v) {
                                     var arr = v.attr_value.split(",");
                                      html += " <li><span class='item_name' style='width:120px;'>"+v.attr_name+"：</span>";
                                      html += "<a href='#' onclick='add(this);'>[+]</a></a><select class='select' name='attr_id["+v.attr_id+"][]'>";
                                      html += "  <option value=''>选择属性</option>";
                                      for (i=0;i<arr.length;i++) {
                                          html += "<option value='"+arr[i]+"'>"+arr[i]+"</option>";
                                      }
                                      html += "</select></li>";
                                    });
                                    attr.html(html);
                                }
                            });
                        });
                        function add(o) {
                            var li = $(o).parent();
                            if ($(o).html() == "[+]") {
                                var  newli = li.clone();
                                newli.find("a").html("[-]");
                                li.after(newli);
                            }else {
                                li.remove();
                            }
                        }

                    </script>


                    <li>
                        <span class="item_name" style="width:120px;">上传资源：</span>
                        <input type="file" name="resources" />
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">是否解压：</span>
                        <label class="single_selection"><input type="radio" value="1" checked="checked"  name="jieya"/>是</label>
                        <label class="single_selection"><input type="radio" value="0" name="jieya"/>否</label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">基本路径：</span>
                            <input class="textbox textbox_295" type="text"  name="demosrc"/>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">下载积分：</span>
                            <input class="textbox textbox_295" type="text"  name="points"/>
                    </li>



                    <li>
                        <span class="item_name" style="width:120px;">上传图片：</span>
                        <label class="uploadImg">
                            <input type="file" name="article_pic"/>
                            <span>上传图片</span>
                        </label>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;">文章详情：</span>

                        <div id="btns" style="margin-left:120px;margin-top:8px;">
                            <textarea id="content" name="article_content"></textarea>
                        </div>
                    </li>
                    <li>
                        <span class="item_name" style="width:120px;"></span>
                        <input type="submit" value="保存添加" class="link_btn"/>
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