$(function(){isLogin();var a=$("#footer").attr("data-url");if($("img.lazy").length>0){$("img.lazy").lazyload({effect:"fadeIn"})}if($(".emotion").length>0){$(".emotion").click(function(){var f=$(this).offset().left;var e=$(this).offset().top;var g=$(this).attr("data-id");$("#smileBoxOuter").css({"left":f,"top":e+20}).show().attr("data-id",g)});$("#smileBoxOuter,.emotion").hover(function(){$("#smileBoxOuter").attr("is-hover",1)},function(){$("#smileBoxOuter").attr("is-hover",0)});$(".emotion,#smileBoxOuter").blur(function(){var e=$("#smileBoxOuter").attr("is-hover");if(e!=1){$("#smileBoxOuter").hide()}});$(".smileBox").find("a").click(function(){var h=$("#smileBoxOuter").attr("data-id");var e=$("#reply_"+h).find("textarea");var f=e.val();if(f=="发布评论"){e.val("")}var g="["+$(this).attr("title")+"]";e.val(e.val()+g).focus();$("#smileBoxOuter").hide()});$("#smileBoxOuter").find(".smilePage").children("a").click(function(){$(this).addClass("current").siblings("a").removeClass("current");var e=$(this).index();$("#smileBoxOuter").find(".smileBox").eq(e).show().siblings(".smileBox").hide()});$(".comment_blockquote").hover(function(){$(".comment_action_sub").css({"visibility":"hidden"});$(this).find(".comment_action_sub").css({"visibility":"visible"})},function(){$(".comment_action_sub").css({"visibility":"hidden"})})}if($(".Index-coupon-menus").length>0){$(".Index-coupon-menus").children("li").click(function(){$(this).addClass("current").siblings("li").removeClass("current");var e=$(this).index();var f=$(this).parents(".index_recommend").attr("id");$("#"+f).find(".per").removeClass("current");$("#"+f).find(".per").eq(e).addClass("current")})}if($("#list_main").length>0){$("#list_main").children(".per").hover(function(){$(".like_merge").hide();var e=$(this);e.children(".like_merge").show();if($("#head_username").text()!=""){if(e.attr("is_collect")!=1){e.attr("is_collect",1);$.get(getUrl("Ajax/isCollect"),{mtype:$(this).attr("data-mtype"),id:$(this).attr("data-id")},function(f){if(f==1){e.find(".like_status").addClass("lm_liked").removeClass("lm_like")}else{e.find(".like_status").addClass("lm_like").removeClass("lm_liked")}})}}},function(){$(".like_merge").hide()})}if($("#detail-page").length>0){var d=$("#detail-page").attr("data-id");var c=$("#detail-page").attr("data-mtype");var b=$("#detail-page").attr("data-totalnum");$("#detail-page").children("a").click(function(){var e=parseInt($(this).attr("data-page"));$("#detail-page").children("a").removeClass("current");$("#detail-page").children("a").eq(e-1).addClass("current");$("#comment_list").html("<div style='padding:20px 0;text-align:center;'><img src='"+a+"Public/images/loading.gif'></div>");$.get(getUrl("Box/comments"),{page:e,id:d,totalnum:b,mtype:c},function(f){$("#comment_list").html(f)})})}});function getUrl(b){var a=$("#footer").attr("data-url")+b;return a}function goUrl(a){if(a==-1){history.go(-1)}else{document.location.href=a}}function toTaskObject(a){$("html,body").animate({scrollTop:$(a).offset().top},800)}function checkInputBlur(b){var a=b.attr("data-default");if(b.val()==""){b.val(a);b.css({"color":"#a9a9a9"})}}function checkInputFocus(b){var a=b.attr("data-default");if(b.val()==a){b.val("").css({"color":"#333333"})}}function blurInputLoginBox(b){var a=b.val();if(a==""){b.removeClass("form_input-focus");b.prev("div").removeClass("item_tip_focus")}else{b.addClass("form_input-focus");b.prev("div").addClass("item_tip_focus")}}function focusInputLoginBox(a){a.addClass("form_input-focus");a.prev("div").addClass("item_tip_focus")}function getLoginError(b,a){b.next(".error").text(a).show()}function getLoginRight(a){a.next(".error").hide();a.nextAll(".icon-loginright").css({"display":"inline-block"})}function checkEmailPattern(a){var b=/^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;if(!b.test(a)){return false}}function sublogin(){var a=$("#email").val();if(a==""){showTipLoginBox("请输入用户名/邮箱！");return false}else{var b=$("#pwd").val();if(b==""){showTipLoginBox("请输入密码！");return false}}$.post(getUrl("Ajax/checkLogin"),{username:a,pwd:b},function(c){if(c.error!=""){showTipLoginBox(c.error)}else{loginSuccess(c)}},"json")}function showTipLoginBox(a){$("#windown_box").find(".notice_error").text(a).show();setTimeout("hideNoticeLoginBox()",3000)}function hideNoticeLoginBox(){$("#windown_box").find(".notice_error").fadeOut(1000)}function showWindowBox(){$("#windown_box").modal("toggle")}function hideWindowBox(){$("#windown_box").modal("hide")}function animateShowTip(c,a){c.text(a);var b=c.attr("data-top");c.animate({top:b,"height":"16px"},500)}function animateHideTip(b){var a=b.attr("data-foot");b.animate({top:a,"height":"0"},500)}function subcomment(g,f,a,d){var b=a;if(d>0){b=d}var c=$("#reply_"+b).find("textarea");var e=c.val();e=e=="发布评论"?"":e;if(e==""){animateShowTip($("#comment_tip_"+b),"您是不是忘了说点什么？");setTimeout("animateHideTip($('#comment_tip_"+b+"'))",3000);return false}$.post(getUrl("Ajax/subcomment"),{id:g,mtype:f,content:e,pid:a,pid_sub:d},function(m){var h="";
if(m.code==-1){showWindowBox();$("#windown_box").attr("data-func","subcomment('"+g+"', '"+f+"', '"+a+"', '"+d+"')")}else{if(m.code==200){var n=$(".comment_avatar").find(".username").text();if(b==0){var j=parseInt($("#comments_num").text());$("#comments_num").text(j+1);var i=$(".comment_avatar").find(".avatar").attr("src");var l="";if(j==0){l="沙发"}else{if(j==1){l="椅子"}else{if(j==2){l="板凳"}else{l=j+"楼"}}}h="<li class='comment_list clearfix'><div class='comment_avatar'><span class='userPic'>\n<img width='36' height='36' src='"+i+"'></span><span class='grey'>"+l+"</span></div>\n<div class='comment_conBox'><div class='comment_avatar_time'><div class='time'>刚刚</div>"+n+"</div>\n<div class='comment_conWrap clearfix'><div class='comment_con'>"+m.comment+"</div></div></div></li>";$(".comment_listBox").prepend(h)}else{var k=parseInt($("#comment_"+b).find(".comment_blockquote").length);h="<blockquote class='comment_blockquote'><div class='comment_floor'>"+(k+1)+"</div><div class='comment_conWrap'>\n<div class='comment_con'>"+n+"：<p> "+m.comment+"</p></div></div></blockquote>";$("#comment_"+a).find(".blockquote_wrap").append(h);$("#reply_"+a).hide();if(d>0){$("#reply_"+d).hide()}}if(m.points>0){showSuccessTip("评论成功，获得"+m.points+"积分！")}else{showSuccessTip("评论成功！")}c.val("")}else{animateShowTip($("#comment_tip_"+b),m.error);setTimeout("animateHideTip($('#comment_tip_"+b+"'))",3000)}}},"json")}function subSuggest(){var b=$("#name").val();var a=$("#email").val();var c=$("#message").val();if(b==""||b=="称呼"){alert("清输入称呼！");return false}if(a==""||a=="邮箱地址"){alert("清输入邮箱地址！");return false}if(c==""||c=="信息"){alert("清输入信息！");return false}$.get(getUrl("Ajax/subSuggest"),{name:b,email:a,message:c},function(d){if(d==-1){showWindowBox();$("#windown_box").attr("data-func","subSuggest()")}else{if(d==1){$("#suggest").remove();$(".thanks").removeClass("hide")}}})}function isLogin(){var b=$("#footer").attr("data-mtype");var a=$("#footer").attr("data-id");$.post(getUrl("Ajax/isLogin"),{mtype:b,id:a},function(c){loginSuccess(c)},"json")}function loginSuccess(data){var username=data.username;if(username){$(".username").text(username);$(".avatar").attr("src",data.avatar);$(".haslogin").removeClass("hide");$(".nologin").addClass("hide");if(data.is_collect==1){$(".poster_likes ").children(".like_status").addClass("lm_liked").removeClass("lm_like")}if(data.msg_num>0){$("#msg_notify").html("<em>"+data.msg_num+"</em>")}hideWindowBox();var func=$("#windown_box").attr("data-func");if(func){eval(func)}$("#nav_login").remove();setInterval("getMsgNum()",500000);if($("#topic-edit").length>0){var uid_detail=$("#topic-edit").attr("data-uid");if(data.userid==uid_detail){$("#topic-edit").show()}}}$("#login_area").slideToggle()}function getMsgNum(){$.get(getUrl("Ajax/getMsgNum"),{},function(a){if(a>0){$("#msg_notify").html("<em>"+a+"</em>")}else{$("#msg_notify").html("")}})}function reply_btn(a){$(".reply_area").hide();$("#reply_"+a).slideToggle(500,function(){$("#reply_"+a).find("textarea").focus()})}function getCollect(a,c,b){$.get(getUrl("Ajax/getCollect"),{mtype:b,id:c},function(d){if(d>0){a.children(".like_status").addClass("lm_liked").removeClass("lm_like")}else{a.children(".like_status").addClass("lm_like").removeClass("lm_liked")}a.parents(".per").attr("is_collect",1)})}function hideMsgBox(){$("#msg-box").fadeOut()}function showSuccessTip(a){$("#msg-box").show();$("#msg-box-content").html(a);setTimeout("hideMsgBox()",2000)}function downloadZip(b,a){$.get(getUrl("Download/zip"),{mtype:a,id:b,first:1},function(c){if(c==-1){showWindowBox();$("#windown_box").attr("data-func","downloadZip("+b+",'"+a+"')")}else{if(c==-2){alert("亲，积分不够，多去评论、签到、或找客服充值吧！")}else{location.href=""+getUrl("Download/zip")+"/id/"+b+"/mtype/"+a+"/js/1.html"}}})}function focusInputLoginArea(a){a.next(".error").hide();a.addClass("form_input-focus");a.prev("div").addClass("item_tip_focus");a.nextAll(".grey").show();a.nextAll(".icon-loginright").hide()}function blurInputLoginArea(f,h){var g=f.val();var e=f.attr("data-minlength");var b=f.attr("data-maxlength");var d=f.attr("data-type");var c=f.attr("data-equal");var a=0;if(g==""){f.removeClass("form_input-focus");f.prev("div").removeClass("item_tip_focus");getLoginError(f,"不能为空")}else{if(e>0&&g.length<e){getLoginError(f,"长度至少"+e+"位");a++}if(b>0&&g.length>b){getLoginError(f,"长度最多"+b+"位");a++}if(d=="email"&&checkEmailPattern(g)==false){getLoginError(f,"邮箱格式不正确");a++}if(c!=undefined&&g!=$(c).val()){getLoginError(f,f.attr("data-equal-error"));a++}if(a==0&&h!=1){if(d=="username"){$.post(getUrl("Ajax/checkUsername"),{username:g},function(i){if(i==-1){getLoginError(f,"该用户名已被注册")}else{getLoginRight(f)}})}else{if(d=="email"){$.post(getUrl("Ajax/checkEmail"),{email:g},function(i){if(i==-1){getLoginError(f,"该电子邮箱已被注册")}else{getLoginRight(f)}})}else{getLoginRight(f)}}}f.addClass("form_input-focus");f.prev("div").addClass("item_tip_focus")}f.nextAll(".grey").hide()}function addClickFunc(a){$(a).click()}function searchSub(){var a=$("#search_input").val();
if(a=="请输入搜索内容"||a==""){$("#search_input").focus();return false}$("input[name=keyword]").val(a);$("#form_search").submit()}function shareWeibo(b,a){$.post(getUrl("Index/shareWeibo"),{mtype:a,id:b,},function(c){if(c.ret==-1){showWindowBox();$("#windown_box").attr("data-func","shareQq("+b+",'"+a+"')")}else{if(c.ret=="100030"){alert("没有发表腾讯微博权限，请重新绑定，并勾选 头像右侧的”读取、发表腾讯微博信息“");location.href="http://www.sucaihuo.com/Index/login/type/qq.html"}else{if(c.ret=="0"){showSuccessTip(c.content)}else{if(c.ret=="qq_bind"){alert("你还没有绑定腾讯微博")}else{if(c.ret=="has_share"){alert("你今天在腾讯微博已分享过该篇文章，去分享其他文章吧！")}else{alert("发布微博过于频繁或您的QQ没有开通腾讯微博业务")}}}}}},"json")};