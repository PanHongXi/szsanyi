<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="DeathGhost"/>
    <link rel="stylesheet" type="text/css" href="/sucai/Public/Admin/Css/style.css"/>
    <style>
        body {
            height: 100%;
            background: #16a085;
            overflow: hidden;
        }

        canvas {
            z-index: -1;
            position: absolute;
        }
    </style>
    <script src="/sucai/Public/Admin/Js/jquery.js"></script>
    <script src="/sucai/Public/Admin/Js/verificationNumbers.js"></script>
    <script src="/sucai/Public/Admin/Js/Particleground.js"></script>
    <script>
        $(document).ready(function () {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
            //验证码
            createCode();
            //测试提交，对接程序删除即可
            $(".submit_btn").click(function () {
                location.href = "index.html";
            });
        });
    </script>
</head>
<body>
<form method="post" action="">
    <dl class="admin_login">
        <dt>
            <strong>站点后台管理系统</strong>
            <em>Management System</em>
        </dt>
        <dd class="user_icon">
            <input type="text" name="a_name" placeholder="账号" class="login_txtbx"/>
        </dd>
        <dd class="pwd_icon">
            <input type="password" name="a_password" placeholder="密码" class="login_txtbx"/>
        </dd>
        <dd class="val_icon">
            <div class="checkcode">
                <input name="verify" type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">

                <!--<canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>-->
            </div>
            <img src="/sz/index.php/Admin/Login/verify"  height="44" width="120" style="margin-left: 18%;cursor: pointer;border-radius: 5px"  onclick="this.src='/sz/index.php/Admin/Login/verify/'+Math.random()">
            <!--<input type="button" value="验证码核验" class="ver_btn" onClick="validate();">-->
        </dd>
        <dd>
            <input type="submit" value="立即登陆" class="submit_btn"/>
        </dd>
        <dd>
            <p>© 2015-2016 DeathGhost 版权所有</p>
            <p>陕B2-20080224-1</p>
        </dd>
    </dl>
</form>
</body>
</html>