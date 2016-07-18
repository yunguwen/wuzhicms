<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><!DOCTYPE html>
<html>
<head lang="zh-CN">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset=utf-8"gbk">
	<title>五指互联网站内容管理系统</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link type="text/css" rel="stylesheet" href="http://cdn.wuzhicms.com/static/login/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="http://cdn.wuzhicms.com/static/login/css/style.css">
	<script type="text/javascript">
		var cookie_pre="h_";var cookie_domain = '';var cookie_path = '/';
	</script>
	<script type="text/javascript" src="http://cdn.wuzhicms.com/static/login/js/jquery.min.js"></script>
	<script src="<?php echo R;?>js/base.js"></script>

	<script type="text/javascript" src="<?php echo R;?>js/bootstrap.js"></script>
	<!--<script type="text/javascript" src="js/popover.js"></script>-->
	<script type="text/javascript" src="http://cdn.wuzhicms.com/static/login/js/Tab.js"></script>
	<script type="text/javascript" src="http://cdn.wuzhicms.com/static/login/js/star.js"></script>
	<script type="text/javascript" src="http://cdn.wuzhicms.com/static/login/js/my.js"></script>
	<!--[if lt IE 9]>
	<script src="http://cdn.wuzhicms.com/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="http://cdn.wuzhicms.com/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body >

<link type="text/css" rel="stylesheet" href="http://cdn.wuzhicms.com/static/login/css/login_style.css">
<style>
    .login .verticalcenter .form-group .form-control {
        display: inline-block;
        width: 100%;
        height: 39px;;
    }
    .login .verticalcenter .form-group {
        margin-bottom: 0px;
    }
    .login .verticalcenter .form-group label {
        color: #666;
        padding-top: 0px;
        margin-left: 16px;
    }
</style>
<!--[if lt IE 9]>
<style>
    .login .verticalcenter .form-group {
        margin-bottom: 30px;
    }
    .Validform_checktip {
        position: relative;
        padding-top: 0px;
        display: block;
        line-height: 10px;
        height: 10px;
    }
    .checkbox{ border: 0; height: 1px;}
</style>
<![endif]-->
<div class="container login login_mini" >
	<div class="verticalcenter">
		<div class="row" >
			<div class="span7" style="width:500px;">
				<!--<form action="index.php?m=member&f=index&v=login" method="post"	class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label">账户/卡号</label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" id="username" placeholder="用户名/手机号码" name="username"	datatype="/^[a-z0-9@\.\u4E00-\u9FA5\uf900-\ufa2d\-]{3,20}$/i"	errormsg="用户名为3-20位数字、字母、汉字和-组成" sucmsg="输入正确" autoComplete="off">
                            <span class="Validform_wrong">用户名应该为2-20位之间</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">密码</label>
                        <div class="col-xs-6">
                            <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码" datatype="*" errormsg="请输入密码"	sucmsg="输入正确"/>
                            <span class="Validform_wrong">请输入密码</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">验证码</label>
                        <div class="col-xs-8">
                            <input type="text" name="checkcode" class="form-control"	id="Verificationcode" placeholder="请输入验证码" datatype="*4-4"	errormsg="请输入验证码" sucmsg="输入正确" onfocus="if($('#code_img').attr('src') == '<?php echo R;?>images/logincode.gif')$('#code_img').attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());" />
                            <img src="<?php echo R;?>images/logincode.gif" id="code_img" alt="点击刷新"	onclick="$(this).attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());"> <span class="Validform_wrong">请输入验证码</span>
                        </div>
                    </div>

					<div class="form-group">
						<label class="control-label"></label>
						<input type="checkbox" class="checkbox" name="savecookie" value="1" checked />
						下次自动登录 <a href="<?php echo WEBURL;?>index.php?m=member&v=public_find_password_email">忘记密码？</a>
					</div>
					<div class="form-group">
						<label class="control-label"></label>
						<input type="hidden" name="minilogin" value="1" />
						<input type="hidden" name="reload_parent" value="<?php echo $reload_parent;?>" />
						<input type="submit" name="submit" class="btn btn-login" value="登录" />
						&nbsp;&nbsp; <span class="color_999">没有账号？<a href="<?php echo WEBURL;?>index.php?m=member&v=register" target="_blank">免费注册！</a></span>
					</div>
				</form>-->

                <form action="index.php?m=member&f=index&v=login" method="post" class="form-horizontal" id="loginform">
                    <div class="form-group">
                        <label  class="control-label col-xs-1" ><!--用户名--></label>
                        <div class="col-xs-12 form-inline">
                            <input  type="text" class="form-control" id="username" placeholder="用户名/Email/手机号码"
                                   name="username" datatype="/^[a-z0-9@\.\u4E00-\u9FA5\uf900-\ufa2d\-]{3,40}$/i"
                                   errormsg="请输入正确的用户名" sucmsg="输入正确" autoComplete="off">
                            <span  class="Validform_checktip"><!--用户名应该为2-20位之间--></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-1"><!--密码--></label>
                        <div class="col-xs-12 form-inline ">
                            <input  type="password" class="form-control" id="password" name="password"
                                   placeholder="请输入密码" datatype="*" errormsg="请输入密码" sucmsg="输入正确"/>
                            <span class="Validform_checktip"><!--请输入密码--></span>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class="col-xs-12 form-inline" style="position: relative;">
                            <input  type="text" name="checkcode" class="form-control" id="checkcode" placeholder="请输入验证码" datatype="*4-4"	errormsg="请输入验证码" sucmsg="输入正确" onfocus="if($('#code_img').attr('src') == '<?php echo R;?>images/logincode.gif')$('#code_img').attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());" ajaxurl="api/identifying_code_check.php" onkeyup="form_keyup()" />
                            <img src="<?php echo R;?>images/logincode.gif" id="code_img" alt="点击刷新" onclick="$(this).attr('src', '<?php echo WEBURL;?>api/identifying_code.php?w=112&h=40&rd='+Math.random());" style="margin-top:2px; position: absolute; top: 0;right: 16px; max-height: 35px;">
                            <span class="Validform_checktip"><!--请输入验证码--></span>
                        </div>
                    </div>
<br>
                    <div class="form-group">
                        <input type="checkbox" class="checkbox " name="savecookie" value="1" checked style="margin-left: 16px;"/> 下次自动登录   <a href="<?php echo WEBURL;?>index.php?m=member&v=public_find_password_mobile" style="float: right; padding-right: 16px;">忘记密码？</a>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-1"> </label>
                        <div class="col-xs-12">
                            <input type="hidden" name="forward" value="<?php echo $forward;?>"/>
                            <input    type="submit" name="submit" class="btn btn-primary btn-lg  btn-block" value="登录"/>
                        </div>
                    </div>

                </form>

			</div>

		</div>
	</div>
</div>
<style>
	*:focus { outline: none; }
	body{width:500px;min-width: 500px;}
	.container {
width: 440px;
}
</style>
<link href="<?php echo R;?>css/validform.css" rel="stylesheet">
<script src="<?php echo R;?>js/validform.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".form-horizontal").Validform({
		tiptype:function(msg,o,cssctl){
			var objtip=o.obj.siblings("span");
			cssctl(objtip,o.type);
			objtip.text(msg);
		}
	});
});
</script>
