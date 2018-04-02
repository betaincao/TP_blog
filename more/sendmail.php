<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>提示</title>
</head>
<body>
<?php

	/**
	 * 注：本邮件类都是经过我测试成功了的，如果大家发送邮件的时候遇到了失败的问题，请从以下几点排查：
	 * 1. 用户名和密码是否正确；
	 * 2. 检查邮箱设置是否启用了smtp服务；
	 * 3. 是否是php环境的问题导致；
	 * 4. 将26行的$smtp->debug = false改为true，可以显示错误信息，然后可以复制报错信息到网上搜一下错误的原因；
	 * 5. 如果还是不能解决，可以访问：http://www.daixiaorui.com/read/16.html#viewpl 
	 *    下面的评论中，可能有你要找的答案。
	 */

	require_once "email.class.php";
	//******************** 配置信息 ********************************
    $soucre_ip = $_SERVER['REMOTE_ADDR'];//获取用户的IP

	$smtpserver = "smtp.163.com";//SMTP服务器
	$smtpserverport =25;//SMTP服务器端口
	$smtpusermail = "@163.com";//SMTP服务器的用户邮箱
	$smtpemailto = $_POST['toemail'];//发送给谁
	$smtpuser = "";//SMTP服务器的用户帐号
	$smtppass = "";//SMTP服务器的用户密码
	$mailtitle = $_POST['title'];//邮件主题
	$mailcontent = $_POST['content'];//邮件内容
	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	//************************ 配置信息 ****************************
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = false;//是否显示发送的调试信息
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
	//给管理员发送提示
    $state = $smtp->sendmail('nylrain@163.com', $smtpusermail, '有来自'.$soucre_ip.'的用户发送了邮件，具体内容请查看日志', $mailcontent, $mailtype);
	$file_path = 'email_file.txt';
	$fp = fopen($file_path,'a+');
	fwrite($fp,date('Y-m-d-h:i:sa')."用户IP：".$soucre_ip."接收邮箱：".$smtpemailto."标题：".$mailtitle."内容：".$mailcontent."\n");
	fclose($fp);
	
	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "<script type='text/javascript'>alert('对不起，邮件发送失败！请检查邮箱填写是否有误。');</script>";
		$url="/more/email.php";
		echo "<script language=\"javascript\">";
		echo "location.href=\"$url\"";
		echo "</script>";
		exit();
	}
	echo "<script type='text/javascript'>alert('恭喜！邮件发送成功！！');</script>";
	$url="/more/index.php";
	echo "<script language=\"javascript\">";
	echo "location.href=\"$url\"";
	echo "</script>";
	echo "</div>";
	
?>
</body>
</html>
