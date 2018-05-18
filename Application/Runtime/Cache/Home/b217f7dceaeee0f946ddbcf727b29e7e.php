<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>小猪CMS之PHP环境搭配 - 素材火,素材火官网</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link rel="shortcut icon" href="__Imahes__/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="/sucai/Public/HOME/style/style_version1.css" type="text/css"/>
    <link rel="stylesheet" href="http://www.sucaihuo.com/other/topic/css/topic.css" type="text/css"/>
    <script type="text/javascript">
        var contro = '/sucai/index.php/Home/';
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

<div class="breadcrumbs">
    <span>&gt;</span><a href="http://www.sucaihuo.com/topic">讨论社区</a>
    <span>&gt;</span><?php echo ($topicRes['topic_title']); ?>
</div>
<div class="container clearfix topic">
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

            </dl>
        </div>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/topic/" class="more">更多&nbsp;<span
                            class="more-sign">&gt;</span></a>
                    <strong>标签云 <span class="name-en">/Tag</span></strong>
                </dt>
                <dd class="sidebar_tags">
                    <?php if(is_array($tagsRes)): $i = 0; $__LIST__ = $tagsRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tagsRes): $mod = ($i % 2 );++$i;?><a target="_blank" href="/sucai/index.php/Home/Topic/tagsArr/cate_id/<?php echo $_GET['cate_id'];?>/tags/<?php echo ($tagsRes); ?>"><?php echo ($tagsRes); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

                   </dd>
            </dl>
        </div>
        <div class="sidebar_per">
            <dl>
                <dt>
                    <a href="http://www.sucaihuo.com/topic/" class="more">更多&nbsp;<span class="more-sign">&gt;</span></a>
                    <strong>相关话题<span class="name-en">/Relative</span></strong>
                </dt>
                <?php if(is_array($Relevant)): $i = 0; $__LIST__ = $Relevant;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$Relevant): $mod = ($i % 2 );++$i;?><dd class="sidebar_articles">
                        <span><?php echo (date('m-d',$Relevant['release_time'])); ?></span>
                        <a target="_blank" href="/sucai/index.php/Home/Topicart/topicart/topic_id/<?php echo ($Relevant['topic_id']); ?>/cate_id/<?php echo ($Relevant['cate_id']); ?>"><?php echo ($Relevant['topic_title']); ?></a>
                    </dd><?php endforeach; endif; else: echo "" ;endif; ?>

            </dl>
        </div>
    </div>
    <div class="detail">
        <div class="head">
            <div class="head_inner">
                <?php if($topicRes['face50'] != '' ): ?><img class="round-image" width="50" height="50" alt="头像" src="/sucai/<?php echo ($topicRes['face50']); ?>"/>
                    <?php else: ?>
                    <img class="round-image" width="50" height="50" alt="头像" src="/sucai/Public/HOME/Images/avatar.jpg "/><?php endif; ?>
                <h1><?php echo ($topicRes['topic_title']); ?></h1>
                <p class="info">
                    <span class="fr">来源：
                        <a target="_blank" href="<?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>"><?php echo $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?></a>
                    </span>
                    <?php echo ($topicRes['nickname']); ?>
                    <span class="addtime"><?php echo (date("Y-m-d H:i",$topicRes['release_time'])); ?></span>
                    <span>浏览(<span><?php echo ($topicRes['click']); ?></span>)</span>
                    <a class="poster_likes " onclick="getCollect2($(this))" href="javascript:void(0)">
                        <?php if($collect == 1): ?><i class="like_status lm_liked"> </i>
                            <?php else: ?>
                            <i class="like_status lm_like"> </i><?php endif; ?>
                    </a>
                    <a id="topic-edit" class="qa-edit hide" data-uid='1'
                       style='position: relative;font-size: 13px;top:2px;left:5px;'
                       href="http://www.sucaihuo.com/Topic/edit/id/89.html">
                        <i class="icon-edit"></i>
                    </a>
                </p>
            </div>
            <script type="text/javascript">
                function getCollect2(obj) {
                    var artid =<?php echo ($topicRes['topic_id']); ?>;
                    var obj = obj;
                    $.ajax({
                        type:"GET",
                        dataType:"json",
                        url:"/sucai/index.php/Home/Ajax/getCollect",
                        data:{mtype:2,id:artid},
                        success:function (data) {
                            if (data > 0) {
                                showSuccessTip("收藏成功！");
                                obj.children(".like_status").addClass("lm_liked").removeClass("lm_like");
                            } else if (data == -1){
                                showSuccessTip("请先登录！");
                                obj.children(".like_status").addClass("lm_like").removeClass("lm_liked");
                            }else if (data == -2){
                                showSuccessTip("取消成功！");
                                obj.children(".like_status").addClass("lm_like").removeClass("lm_liked");
                            }
                            else {
                                obj.children(".like_status").addClass("lm_like").removeClass("lm_liked");
                            }
                            obj.parents(".per").attr("is_collect", 1)
                        }
                    });
                }
            </script>
        </div>
        <div class="content"><?php echo htmlspecialchars_decode($topicRes['content'])?></div>
        <div class="detail_foot clearfix">
            <div class="bshare">
                <div class="bdsharebuttonbox">
                    <a href="#" class="bds_more" data-cmd="more"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina"></a>
                    <a href="#" class="bds_tqq" data-cmd="tqq"></a>
                    <a href="#" class="bds_renren" data-cmd="renren"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin"></a>
                </div>
                <script>window._bd_share_config = {
                    "common": {
                        "bdSnsKey": {},
                        "bdText": "",
                        "bdMini": "2",
                        "bdPic": "",
                        "bdStyle": "0",
                        "bdSize": "16"
                    },
                    "share": {},
                    "image": {
                        "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"],
                        "viewText": "分享到：",
                        "viewSize": "16"
                    },
                    "selectShare": {
                        "bdContainerClass": null,
                        "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
                    }
                };
                with (document)
                    0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
            </div>

            <div class="tagged_with">
                <span class="gray">标签：</span>

                <?php if(is_array($tages)): $i = 0; $__LIST__ = $tages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tages): $mod = ($i % 2 );++$i;?><a target="_blank" class="button3 white" href="/sucai/index.php/Home/Topic/tagsArr/cate_id/<?php echo $_GET['cate_id'];?>/tags/<?php echo ($tages); ?>"><?php echo ($tages); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
            <div class="page_nav clearfix">
                <div class="next_page" title="下一篇">
                    <a href="/sucai/index.php/Home/Topicart/topicArt/topic_id/<?php echo ($next['topic_id']); ?>"> <?php echo ($next['topic_title']); ?></a>
                </div>
                <div class="pre_page" title="上一篇">
                    <a href="/sucai/index.php/Home/Topicart/topicArt/topic_id/<?php echo ($prev['topic_id']); ?>"><?php echo ($prev['topic_title']); ?></a>
                </div>


            </div>
            <!--<script type="text/javascript">-->
            <!--/*760*90 横幅*/-->
            <!--var cpro_id = "u2182156";-->
            <!--</script>-->
            <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>

            <div class="comments">
                <div class="title">
                    评论<span class="num_area">（<em class="comments_num" id="comments_num"><?php echo ($commentnums['comment']); ?></em>）</span>
                </div>

                <div class="comment_send clearfix">
                    <div class="comment_avatar">
                <span class="userPic">

                    <?php if($userinfo['face50'] != '' ): ?><img class="userPic avatar user_my_avatar" width="60" height="60" alt="头像"
                         src="/sucai/<?php echo ($userinfo['face50']); ?>"/>
                    <?php else: ?>
                         <img class='userPic avatar user_my_avatar' width="60" height="60" src="/sucai/Public/HOME/Images/avatar.jpg"
                              alt="头像">
                        <!--<img class="round-image" width="50" height="50" alt="头像" src="/sucai/Public/HOME/Images/avatar.jpg "/>--><?php endif; ?>

                </span>
                        <font class="username"><?php echo ($_SESSION['username']); ?></font>
                    </div>
                    <div class="comment_sendPart" id='reply_0'>
                <textarea id="textareaComment" class="textarea_comment" name="content" autocomplete="off"
                          data-default="发布评论" onblur="checkInputBlur($(this))" onfocus="checkInputFocus($(this));
                        if ($(this).val() != '发布评论')
                            $(this).css({'color': '#333'})">发布评论</textarea>
                        <div class="btn_p clearfix">
                            <span class="comment_tip" id="comment_tip_0" data-top="11" data-foot="36"></span>
                            <button class="btn_subGrey btn" type="button"
                                    onclick="subcomment(<?php echo ($topicRes['topic_id']); ?>, '2', 0)">提 交
                            </button>
                            <span class="emotion" tabindex="1" data-id='0'></span>
                        </div>
                    </div>
                </div>

                <div class="comment_wrap" id="comment_wrap">
                    <ul class="comment_listBox">
                        <?php if($comment ): if(is_array($comment)): $i = 0; $__LIST__ = $comment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$comment): $mod = ($i % 2 );++$i;?><li class="comment_list clearfix" id="comment_<?php echo ($comment['comment_id']); ?>">
                            <div class="comment_avatar">
                                <span class='userPic'>
                                     <?php if($comment['face50'] != '' ): ?><img class="userPic avatar user_my_avatar" width="36" height="36" alt="头像" src="/sucai/<?php echo ($comment['face50']); ?>"/>
                                         <?php else: ?>
                                         <img width="36" height="36" src="/sucai/Public/HOME/Images/avatar.jpg" alt="头像"><?php endif; ?>

                                </span>
                                <span class="grey"></span>
                            </div>
                            <div class="comment_conBox">
                                <div class="comment_avatar_time">
                                    <div class="time"><?php echo (date("Y-m-d H:i:s",$comment['time'])); ?></div>
                                    <?php echo ($comment['nickname']); ?>
                                </div>
                                <div class="comment_conWrap clearfix">
                                    <div class="comment_action"><a class="reply" onclick="reply_btn('<?php echo ($comment["comment_id"]); ?>')">回复</a>
                                    </div>
                                    <div class="comment_con"><?php echo ($comment['content']); ?></div>
                                </div>
                                <div id='reply_<?php echo ($comment["comment_id"]); ?>' class='reply_area'>
                                    <textarea class="textarea_comment" name="content" autocomplete="off"></textarea>
                                    <div class="btn_p clearfix">
                                        <span class="comment_tip" id="comment_tip_<?php echo ($comment['comment_id']); ?>" data-top="4"  data-foot="29"></span>
                                        <button class="btn_subGrey btn" onclick="subcomment('<?php echo ($topicRes["topic_id"]); ?>', '2', '<?php echo ($comment["comment_id"]); ?>', 0)" type="button">提交
                                        </button>
                                        <span class="emotion" tabindex="1" data-id='<?php echo ($comment["comment_id"]); ?>'></span>
                                    </div>
                                </div>
                                <div class="blockquote_wrap">
                                    <?php if($commentSecond): if(is_array($commentSecond)): $i = 0; $__LIST__ = $commentSecond;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$commentSecond): $mod = ($i % 2 );++$i; if($commentSecond['pid'] == $comment['comment_id']): ?><blockquote class="comment_blockquote">
                                                    <div class="comment_floor"></div>
                                                    <div class="comment_conWrap clearfix">
                                                        <div class="comment_con">
                                                            <a class="blue" target="_blank"  href="http://www.sucaihuo.com/space/uid/22668">
                                                                <span class="red"><?php echo ($commentSecond['nickname']); ?></span>
                                                            </a> ：
                                                            <p><?php echo ($commentSecond['content']); ?><span style="float: right"><?php echo (date("Y-m-d H:i:s",$commentSecond['time'])); ?></span></p>
                                                        </div>
                                                        <div class="comment_action_sub">
                                                            <a class="reply" onclick="reply_btn('<?php echo ($commentSecond["comment_id"]); ?>')">回复</a>
                                                        </div>
                                                    </div>
                                                    <div id="reply_<?php echo ($commentSecond["comment_id"]); ?>" class="reply_area">
                                                        <textarea class="textarea_comment" autocomplete="off"  name="content"></textarea>
                                                        <div class="btn_p clearfix">
                                                            <span id="comment_tip_<?php echo ($commentSecond["comment_id"]); ?>" class="comment_tip" data-foot="29" data-top="4"></span>
                                                            <button class="btn_subGrey btn" type="button"  onclick="subcomment('<?php echo ($topicRes["topic_id"]); ?>', '2', '<?php echo ($comment["comment_id"]); ?>', '<?php echo ($commentSecond["comment_id"]); ?>')">提交 </button>
                                                            <span class="emotion" data-id="<?php echo ($commentSecond["comment_id"]); ?>" tabindex="<?php echo ($commentSecond["comment_id"]); ?>"></span>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                                <!--三级评论-->

                                                <?php if($commentRes): if(is_array($commentRes)): $i = 0; $__LIST__ = $commentRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$commentRes): $mod = ($i % 2 );++$i; if($commentRes['touid'] == $commentSecond['comment_id']): ?><blockquote class="comment_blockquote">
                                                        <div class="comment_floor"></div>
                                                        <div class="comment_conWrap clearfix">
                                                            <div class="comment_con">
                                                                <a href="http://www.sucaihuo.com/space/uid/5009" target="_blank" class="blue"><?php echo ($commentRes["nickname"]); ?></a>
                                                                <p>回复 <a href="http://www.sucaihuo.com/space/uid/5009" target="_blank" class="blue"><?php echo ($commentRes["tuser"]); ?>：</a><?php echo ($commentRes["content"]); ?><span style="float: right"><?php echo (date("Y-m-d H:i:s",$commentRes['time'])); ?></span></p>

                                                            </div>
                                                            <div class="comment_action_sub" style="visibility: hidden;">
                                                                <a onclick="reply_btn('<?php echo ($commentRes["comment_id"]); ?>')" class="reply">回复</a>
                                                            </div>
                                                        </div>
                                                        <div class="reply_area" id="reply_<?php echo ($commentRes["comment_id"]); ?>">
                                                            <textarea name="content" autocomplete="off" class="textarea_comment"></textarea>
                                                            <div class="btn_p clearfix">
                                                                <span data-top="4" data-foot="29" class="comment_tip" id="comment_tip_<?php echo ($commentRes["comment_id"]); ?>"></span>
                                                                <button onclick="subcomment('<?php echo ($topicRes["topic_id"]); ?>', '2', '<?php echo ($commentRes["pid"]); ?>', '<?php echo ($commentRes["comment_id"]); ?>')" type="button" class="btn_subGrey btn">提交</button>
                                                                <span tabindex="<?php echo ($commentRes["comment_id"]); ?>" data-id="<?php echo ($commentRes["comment_id"]); ?>" class="emotion"></span>
                                                            </div>
                                                        </div>
                                                    </blockquote><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                                                <!--三级评论--><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                                </div>

                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="smileBoxOuter" id="smileBoxOuter" tabindex="2">
            <ul class="smileBox">
                <li><a href="javascript:void(0)" class="smile1" title="糗大了"></a></li>
                <li><a href="javascript:void(0)" class="smile2" title="示爱"></a></li>
                <li><a href="javascript:void(0)" class="smile3" title="晕"></a></li>
                <li><a href="javascript:void(0)" class="smile4" title="酷"></a></li>
                <li><a href="javascript:void(0)" class="smile5" title="流泪"></a></li>
                <li><a href="javascript:void(0)" class="smile6" title="饿了"></a></li>
                <li><a href="javascript:void(0)" class="smile7" title="闭嘴"></a></li>
                <li><a href="javascript:void(0)" class="smile8" title="做鬼脸"></a></li>
                <li><a href="javascript:void(0)" class="smile9" title="馋"></a></li>
                <li><a href="javascript:void(0)" class="smile10" title="坏笑"></a></li>
                <li><a href="javascript:void(0)" class="smile11" title="抓狂"></a></li>
                <li><a href="javascript:void(0)" class="smile12" title="呵呵"></a></li>
                <li><a href="javascript:void(0)" class="smile13" title="淡定"></a></li>
                <li><a href="javascript:void(0)" class="smile14" title="冷汗"></a></li>
                <li><a href="javascript:void(0)" class="smile15" title="色"></a></li>
                <li><a href="javascript:void(0)" class="smile16" title="惊讶"></a></li>
                <li><a href="javascript:void(0)" class="smile17" title="希望"></a></li>
                <li><a href="javascript:void(0)" class="smile18" title="伤心"></a></li>
                <li><a href="javascript:void(0)" class="smile19" title="微笑"></a></li>
                <li><a href="javascript:void(0)" class="smile20" title="惊吓"></a></li>
                <li><a href="javascript:void(0)" class="smile21" title="哈哈"></a></li>
                <li><a href="javascript:void(0)" class="smile22" title="吃饭"></a></li>
                <li><a href="javascript:void(0)" class="smile23" title="观察"></a></li>
                <li><a href="javascript:void(0)" class="smile24" title="高兴"></a></li>
                <li><a href="javascript:void(0)" class="smile25" title="皱眉"></a></li>
                <li><a href="javascript:void(0)" class="smile26" title="大囧"></a></li>
                <li><a href="javascript:void(0)" class="smile27" title="邪恶"></a></li>
                <li><a href="javascript:void(0)" class="smile28" title="锁眉"></a></li>
                <li><a href="javascript:void(0)" class="smile29" title="惊喜"></a></li>
                <li><a href="javascript:void(0)" class="smile30" title="小怒"></a></li>
                <li><a href="javascript:void(0)" class="smile31" title="无语"></a></li>
                <li><a href="javascript:void(0)" class="smile32" title="傻笑"></a></li>
                <li><a href="javascript:void(0)" class="smile33" title="黑线"></a></li>
                <li><a href="javascript:void(0)" class="smile34" title="喜极而泣"></a></li>
                <li><a href="javascript:void(0)" class="smile35" title="口水"></a></li>
                <li><a href="javascript:void(0)" class="smile36" title="不说话"></a></li>
                <li><a href="javascript:void(0)" class="smile37" title="抽烟"></a></li>
                <li><a href="javascript:void(0)" class="smile38" title="汗"></a></li>
                <li><a href="javascript:void(0)" class="smile39" title="尴尬"></a></li>
                <li><a href="javascript:void(0)" class="smile40" title="小眼睛"></a></li>
                <li><a href="javascript:void(0)" class="smile41" title="龇牙"></a></li>
                <li><a href="javascript:void(0)" class="smile42" title="亲亲"></a></li>
                <li><a href="javascript:void(0)" class="smile43" title="哭泣"></a></li>
                <li><a href="javascript:void(0)" class="smile44" title="大吃一惊"></a></li>
            </ul>
            <ul class="smileBox" style="display:none;">
                <li><a href="javascript:void(0)" class="smile46" title="不高兴"></a></li>
                <li><a href="javascript:void(0)" class="smile47" title="得意"></a></li>
                <li><a href="javascript:void(0)" class="smile48" title="阴脸"></a></li>
                <li><a href="javascript:void(0)" class="smile49" title="装大款"></a></li>
                <li><a href="javascript:void(0)" class="smile50" title="吐舌"></a></li>
                <li><a href="javascript:void(0)" class="smile51" title="暗地观察"></a></li>
                <li><a href="javascript:void(0)" class="smile52" title="吐血"></a></li>
                <li><a href="javascript:void(0)" class="smile53" title="脸红"></a></li>
                <li><a href="javascript:void(0)" class="smile54" title="肿包"></a></li>
                <li><a href="javascript:void(0)" class="smile55" title="抠鼻"></a></li>
                <li><a href="javascript:void(0)" class="smile56" title="赞一个"></a></li>
                <li><a href="javascript:void(0)" class="smile57" title="中指"></a></li>
                <li><a href="javascript:void(0)" class="smile58" title="期待"></a></li>
                <li><a href="javascript:void(0)" class="smile59" title="倒地"></a></li>
                <li><a href="javascript:void(0)" class="smile60" title="火冒三丈"></a></li>
                <li><a href="javascript:void(0)" class="smile61" title="吐"></a></li>
                <li><a href="javascript:void(0)" class="smile62" title="喷水"></a></li>
                <li><a href="javascript:void(0)" class="smile63" title="喷血"></a></li>
                <li><a href="javascript:void(0)" class="smile64" title="蜡烛"></a></li>
                <li><a href="javascript:void(0)" class="smile65" title="想一想"></a></li>
                <li><a href="javascript:void(0)" class="smile66" title="认真听讲"></a></li>
                <li><a href="javascript:void(0)" class="smile67" title="不好意思"></a></li>
                <li><a href="javascript:void(0)" class="smile68" title="欢呼"></a></li>
                <li><a href="javascript:void(0)" class="smile69" title="便便"></a></li>
                <li><a href="javascript:void(0)" class="smile70" title="鼓掌"></a></li>
                <li><a href="javascript:void(0)" class="smile71" title="深思"></a></li>
                <li><a href="javascript:void(0)" class="smile72" title="害羞"></a></li>
                <li><a href="javascript:void(0)" class="smile73" title="苦恼"></a></li>
                <li><a href="javascript:void(0)" class="smile74" title="长草"></a></li>
                <li><a href="javascript:void(0)" class="smile75" title="无所谓"></a></li>
                <li><a href="javascript:void(0)" class="smile76" title="咽气"></a></li>
                <li><a href="javascript:void(0)" class="smile77" title="投降"></a></li>
                <li><a href="javascript:void(0)" class="smile78" title="没看见"></a></li>
                <li><a href="javascript:void(0)" class="smile79" title="击掌"></a></li>
                <li><a href="javascript:void(0)" class="smile80" title="献黄瓜"></a></li>
                <li><a href="javascript:void(0)" class="smile81" title="献花"></a></li>
                <li><a href="javascript:void(0)" class="smile82" title="撞墙"></a></li>
                <li><a href="javascript:void(0)" class="smile83" title="中刀"></a></li>
                <li><a href="javascript:void(0)" class="smile84" title="中枪"></a></li>
            </ul>
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
            <input id="email" name="email" class="form_input" type="text" autocomplete="off" tabindex="1" value=""
                   onblur="blurInputLoginBox($(this))" onfocus="focusInputLoginBox($(this))"/>
        </div>
        <div class="form_item">
            <div class="item_tip">密码</div>
            <input name="pwd" id="pwd" class="form_input" type="password" tabindex="2" value=""
                   onblur="blurInputLoginBox($(this))" onfocus="focusInputLoginBox($(this))"/>
        </div>
        <div class="captchaBox">
            <div class="two_weeks">
                <input id="rememberme" class="ckeckBox" type="checkbox" name="rememberme">
                <label for="rememberme">两周内免登录</label>
                <a href="http://www.sucaihuo.com/reg.html" target="_blank" class="loginbox_reg">免费注册</a>
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
<script src="/sucai/Public/HOME/style/jquery.js" type="text/javascript"></script>
<script src="/sucai/Public/HOME/style/common_version1.js" type="text/javascript"></script>

<!--[if !IE]><!-->
<script src="/sucai/Public/HOME/style/jquery.chili-2.2.js" type="text/javascript"></script>
<script src="/sucai/Public/HOME/style/recipes.js" type="text/javascript"></script>
<!--<![endif]-->
<div class="mmsg-box mmsg-box-info" id='msg-box' style="margin-top: -23.5px; margin-left: -96.5px;">
    <div class="mmsg-content">
        <i class="mmsg-icon"></i>
        <p id='msg-box-content'></p>
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