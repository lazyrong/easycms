<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo R('Index/Siteinfo/info',array('title'),'Widget');?>的后台登陆面板</title>
<link href="../Public/dwz/themes/css/login.css" rel="stylesheet" type="text/css" />
<script src="../Public/dwz/js/jquery-1.7.1.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
function fleshVerify(type){ 
	//重载验证码
	var timenow = new Date().getTime();
	if (type){
		$('#verifyImg').attr("src", '__URL__/verify/adv/1/'+timenow);
	}else{
		$('#verifyImg').attr("src", '__URL__/verify/'+timenow);
	}
}
//-->
</script>
</head>
<body class="b">
<div class="lg">
<form method="post" action="__URL__/checkLogin/">
    <div class="lg_top"></div>
    <div class="lg_main">
        <div class="lg_m_1">
        <input name="name" placeholder="username" class="ur" />
        <input name="password" type="password" placeholder="password" class="pw" />
        <input name="code" type="text" class="pww" placeholder="验证码" size="5"/>
        <span><img id="verifyImg" SRC="__URL__/verify/" onClick="fleshVerify()" border="0" alt="点击刷新验证码" style="cursor:pointer" align="absmiddle"></span>
        </div>
    </div>
    <div class="lg_foot">
    <input type="submit" value="Login In" class="bn" /></div>
</form>
</div>
</body>
</html>