<?php if (!defined('THINK_PATH')) exit();?><script>
    var intro = '/sucai/index.php/Home'+'/Ajax/';
</script>
<link rel="stylesheet" href="/sucai/Public/HOME/style/style_version2016.css" type="text/css">
<link href="/sucai/Public/HOME/style/member.css" rel="stylesheet" type="text/css">
<div class="member_right">
    <div class="member_per">
        <div class="panel clearfix">
            <div class="panel-info clearfix">
                <a href="http://www.sucaihuo.com/Member/avatar.html">
                    <?php if($memberInfo['face50'] == ''): ?>11111 <img class="round-image" src="/sucai/Public/HOME/Images/avatar.jpg" alt="头像" height="50" width="50">
                        <?php else: ?>
                        <img class="round-image" src="/sucai/<?php echo ($memberInfo['face50']); ?>" alt="头像" height="50" width="50"><?php endif; ?>

                </a>
                <div class="name-job">
                    <h4 class="myname"> <?php echo ($memberInfo['nickname']); ?> </h4>
                    <?php if($memberInfo['job'] == ''): ?><p class="job-title"> 工作保密 </p>
                        <?php else: ?>
                        <p class="job-title"> <?php echo ($memberInfo['job']); ?> </p><?php endif; ?>
                </div>
            </div>
            <div class="sign-wrap">
                    <textarea id="signed_textarea" class="signed_textarea" disabled="disabled" autocomplete="off"> <?php if($memberInfo['intro'] == ''): ?>这位童鞋很懒，什么也没有留下～～！<?php else: echo ($memberInfo['intro']); endif; ?> </textarea>
                <em id="signed_edit" class="signed_edit"></em>
            </div>
            <p id="signed_error" class="signed_error"></p>
            <div class="rank-points">
                <ul>
                    <li class="mp-item">
                        <a class="mp-atag" href="http://www.sucaihuo.com/Member/points.html">
                            <span class="mp-title">积分</span>
                            <span class="mp-num"><?php echo ($memberInfo['points']); ?></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="member_per">
        <ul class="nav panel">
            <li>
                <a href="/sucai/index.php/Home/Member/member_info"><i class="icon-nav icon-tick"></i>我的主页</a>
            </li>
            <li>
                <a href="/sucai/index.php/Home/Userinfo/user_info/user_id/<?php echo ($_SESSION['user_id']); ?>"><i
                        class="icon-nav icon-note"></i>我的设置</a>
            </li>
            <li>
                <a href="/sucai/index.php/Home/Usercomment/user_comment"><i class="icon-nav icon-plan"></i>我的评论</a>
            </li>
            <li>
                <a href="http://www.sucaihuo.com/Member/topic.html"><i class="icon-nav icon-ques"></i>我的话题</a>
            </li>

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
<script>

</script>