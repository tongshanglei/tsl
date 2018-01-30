<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\wamp\www\c\thinkphp5\public/../application/admin\view\Login\login.html";i:1515377060;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>login</title>
<link rel="stylesheet" type="text/css" href="/static/admins/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/static/admins/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/static/admins/css/component.css" />
<!--[if IE]>
<script src="/static/admins/js/html5.js"></script>
<![endif]-->
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>欢迎你</h3>
						<form action="/login/dologin" method='post'>
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="username" class="text" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							</div>
							 <div id="login63">
							    <span id="yanzhengma">验证码</span>
							    <img id="yy"src="<?php echo captcha_src(); ?>" alt="" onclick='this.src="<?php echo captcha_src(); ?>?rand="+Math.random()'>看不清？<a onclick='a.src="<?php echo captcha_src(); ?>?rand="+Math.random()'>换一张</a><br>
							    </div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input type="text" name="fcode" id="zz" placeholder="请输入验证码" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;">
							</div>
							<!-- <div class="mb2">
								<input type="submit" value="登录" class="act-but submit" style="color: #FFFFFF">
							</div> -->
							<div class="input_outer">
								<input type="submit" value="登录" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="/static/admins/js/TweenLite.min.js"></script>
		<script src="/static/admins/js/EasePack.min.js"></script>
		<script src="/static/admins/js/rAF.js"></script>
		<script src="/static/admins/js/demo-1.js"></script>
		<div style="text-align:center;">
</div>
	</body>
</html>