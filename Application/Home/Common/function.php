<?php
function encrypt($val, $type = 0)
{
    $key = md5(C('AUTO_LOGIN_KEY'));
    if ($type) {
        //先异位或加密在进行base64_encode加密,再把=去掉
        $vals = str_replace('=', '', base64_encode($val ^ $key));
        return $vals;
    }
    //解密操作
    $valss = base64_decode($val);
    return $valss ^ $key;
}

//发送邮件
function sendMail($to, $title, $content)
{
    require_once('./Plugin/phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
    // 设置为要发邮件
    $mail->IsSMTP();
    // 是否允许发送HTML代码做为邮件的内容
    $mail->IsHTML(TRUE);
    $mail->CharSet = 'UTF-8';
    // 是否需要身份验证
    $mail->SMTPAuth = TRUE;
    /*  邮件服务器上的账号是什么 -> 到163注册一个账号即可 */
    $mail->From = "hspanhongxi@163.com";
    $mail->FromName = "hspanhongxi";
    $mail->Host = "smtp.163.com";  //发送邮件的服务协议地址
    $mail->Username = "hspanhongxi";
    $mail->Password = "2009131191pan";
    // 发邮件端口号默认25
    $mail->Port = 25;
    // 收件人
    $mail->AddAddress($to);
    // 邮件标题
    $mail->Subject = $title;
    // 邮件内容
    $mail->Body = $content;
    return ($mail->Send());
}