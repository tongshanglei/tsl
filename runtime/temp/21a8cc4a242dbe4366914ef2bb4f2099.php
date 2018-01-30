<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\wamp\www\c\thinkphp5\public/../application/index\view\Login\login.html";i:1515482393;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0247)https://hwid1.vmall.com/CAS/portal/login.html?validated=true&themeName=red&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F%2523cid%253D10074&loginChannel=26000000&reqClientType=26&lang=zh-cn -->
<html><head>
<meta charset="utf-8">
<title>登录</title>
<script type="text/javascript">

</script>
<style>
	.show {
            display: block;
        }
        .hide {
            display: none;
        }
        #notice {
            color: red;
        }
</style>
<link href="https://hwid1.vmallres.com/CAS/up/common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon"> 
<link href="/static/index/login/css/ec.core.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/common.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/dialog.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/dialogEMUIV6.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/common(1).css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/zh-cn.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";</script>
<script src="/static/index/login/js/jsapi.js.下载" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/index/login/js/jquery-1.8.2.min.js.下载" id="jsid"></script>
<script src="/static/index/login/js/ec.core.js.下载"></script>
<script src="/static/index/login/js/ec.business.js.下载"></script> 
<script src="/static/index/login/js/commonjs.js.下载"></script>
<script src="/static/index/login/js/lazyload-min.js.下载"></script>
<script src="/static/index/login/js/uc_base.js.下载"></script>
<script src="/static/index/login/js/casAjaxObj.js.下载"></script>
<script src="/static/index/login/js/jquery.qrcode.min.js.下载"></script>
<script src="/static/index/login/js/casui.js.下载"></script>

<script src="/static/index/login/js/lazyload-min.js.下载"></script>
<script src="/static/index/login/js/gt.js.下载"></script><script src="/static/index/login/js/gtRandomCode.js.下载"></script><script charset="UTF-8" async="" src="/static/index/login/gettype.php"></script><script charset="UTF-8" async="" src="/static/index/login/js/fullpage.8.2.4.js.下载"></script><script charset="UTF-8" src="/static/index/login/get.php"></script><link href="/static/index/login/css/style_https.1.4.7.css" rel="stylesheet"><script charset="UTF-8" src="/static/index/login/reset.php"></script><script charset="UTF-8" src="/static/index/login/reset(1).php"></script><script charset="UTF-8" src="/static/index/login/reset(2).php"></script><script charset="UTF-8" src="/static/index/login/reset(3).php"></script></head>
<body class="login themeName-red" style="height: 746px;">
	<div id="cookies_privacy" class="center cookie hidden">
		本站点使用cookies,继续浏览表示您同意我们使用cookies。
		<a class="cookie-pro" href="https://hwid1.vmall.com/CAS/portal/login.html?validated=true&amp;themeName=red&amp;service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F%2523cid%253D10074&amp;loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn#">Cookies和隐私政策&gt;</a>
		<img src="/static/index/login/images/cookie-close.png">
	</div>
	<div>
			<!-- 头部  -->
<div class="customer-header">
	<div class="head_center">
			
		    
			    <div class="main-logo adHeadPicContainer">
					<img src="/static/index/login/images/huaweiLogo.png" class="adHeadPic">
				</div>
				<div class="website-name" style="color:#999;">
					<span class="logo_line"></span>
					<b style="font-size: 18px;margin-top: -2px;float: left;color:#cccccc;">|</b>
					<b style="font-size: 18px;margin-top: -1px;float: left; margin-left:18px;color:#333333">华为商城</b>
				</div>
			
		
	</div>	
</div>
			<!--登录 -->
			<form action="/ilogin/dologin" method="post">
			<div class="login_bg" id="loginform">
				<div style="background-image: url(&#39;https://hwid1.vmallres.com/CAS/up/rss_15/ads/login_default_bg.png&#39;);" class="g login_adBg">
					<div class="login-area login-right login-area-box"> 
						<div class="userAccountLogin">
							<div class="h">
							
								<span class="loginTitle actived loginTitle-left" data-type="account">帐号登录</span><span class="loginTitle splitLine loginTitle-right" data-type="qrCode">扫码登录</span>
							
							
							</div>
							<div class="b-account">
								<div class="login-form-marginTop">
									<div class="form-edit-area">
										<div class="userAccountLogin-errorTipsDiv"></div>
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_userName"></label><input type="text" autocomplete="off" class="text vam" id="login_userName" name="username" maxlength="50" tabindex="1" placeholder="手机号/邮箱" validator="validator21514855555517" ></td>
												</tr>
												
												<tr>
													<td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_password"></label><input id="password" type="password" autocomplete="off" class="text vam" name="pwd" maxlength="32" tabindex="2" placeholder="密码" validator="validator31514855555517" ></td>
												</tr>
												<tr>
													<td id="picAuthCode" class="verify-td">
														<div id="embed-captcha"></div>
														    <p id="wait" class="show">正在加载验证码......</p>
														    <p id="notice" class="hide">请先完成验证</p>
															
														  
													</td>
												</tr>
												<tr>
													<td class="mt-checkbox">
														<span id="rememberNameSpan"><input type="checkbox" class="checkbox vam" id="remember_name" name="remember_name" tabindex="4"><label for="remember_name"><i id="remember_name_icon" class="checkBox-icon tick-off-icon marginR6"></i>记住华为帐号</label></span>
														<div class="hidden remeberTip" style="display: none;"></div>
													</td>
												</tr>
												<tr>
													<td>
														<div style="margin-bottom:0px;"><span class="vam error" id="login_msg" style="display:block"></span></div>
														<input type="submit" class="button-login" id="btnLogin" data-type="accountLogin" value="点击登录" tabindex="5">
														<img class="load" src="/static/index/login/images/loading3.gif">
													</td>
												</tr>
												<tr>
													<td class="mt-links lineHeightFix" id="operLinkTd">
														<span id="smsLoginEntrance" class="changeLoginType l" data-type="userAccountLogin" title="短信验证码登录"><i class="phoneIcon marginR6"></i>短信验证码登录</span>
														<span class="mt-links-float r clearWidth floatFix referenceTarget">
															<a class="btn-primary vam clearWidth" title="更多" id="btn-more"></a>
															<div class="set-more">
																<div id="more_list" class="more-list hiden">
																	<ul>
																		<li id="goSecurity" class="security-menu">安全中心</li>
																	</ul>
																</div>
															</div> 
														</span>
													</td>
												</tr>
												<tr>
													<td class="mt-links p0">
														<div class="mt-links-float vam clearWidth">
															<span class="regist"><a class="btn-primary clearWidth" href="/register/index/c/lose" title="注册帐号">注册帐号</a></span><span class="forgot"><a class="btn-primary clearWidth" href="/ilogin/forget" onclick="gotoresetpwd()" title="忘记密码？">忘记密码？</a></span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
									<div class="thirdLoginBlock">
										
											<div class="thirdLintTitle"><i class="line-left"></i><span class="third-tips"></span><i class="line-right rotateImg"></i></div>
										  
										<div class="thirdLoginDiv"><span class="qqLogin_bigIco" title="QQ" onclick="thirdAccountBind(this)"><a href="javascript:void(0);" tourl="/qq/authorize"><s></s></a></span><span class="alipayLogin_bigIco" title="支付宝" onclick="thirdAccountBind(this)"><a href="javascript:void(0);" tourl="/alipay/authorize"><s></s></a></span><span class="weixinLogin_bigIco" title="微信" onclick="thirdAccountBind(this)"><a href="javascript:void(0);" tourl="/weixin/authorize"><s></s></a></span></div>
									</div>
								
								
							</div>
							
							<div class="b-qrCode hiden">
								<div class="qrCode-main">
									<div class="qrCode-content">
									<div id="qrcodeImg" style="left: 109px;">
									    
									    
										<img class="qrcode ">
										
										
										<div class="qrcode-over-time">
										<img src="/static/index/login/images/qrCode-over-time.png">	
										<div class="refush-content hiden">
										<div class="des">二维码失效</div>
										<div class="refush">刷新</div>
										</div>
										<div class="scan-success-content hiden">
										<div class="scan-success-img"></div>
										<div class="scan-success">扫码成功</div>
										</div>
										</div>
												
									</div>
									<div class="qrCode-help" style="opacity: 0;"></div>
									</div>
								</div>
								
								<div class="qrCode-desc">
									<p>使用<span class="haweiapp">华为移动服务APP</span>扫一扫</p>
									<p>若您使用华为手机，请进入“设置”&gt;“华为帐号”扫码登录。</p>
								</div>
							</div>
							
						</div>
						<div class="smsValidateLogin hidden">
							<span class="changeLoginType callbackAcctLoginBtn" data-type="smsValidateLogin">&lt;&nbsp;返回</span>
							<div class="b-account">
								<div class="login-form-marginTop smsLogin-form">
									<div class="form-edit-area">
										<div class="smsValidateLogin-errorTipsDiv"></div>
										<table border="0" cellpadding="0" cellspacing="0">
											<tbody>
												<tr>
													<td class="user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="login_phoneNum"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">手机号</div></label><input type="text" autocomplete="off" class="text vam" id="login_phoneNum" name="userAccount" maxlength="50" tabindex="1" validator="validator41514855555522" style="z-index: 1;"><input type="hidden" id="completePhoneNum"></td>
												</tr>
												
												<tr>
													<td class="verify-td user-input-tr">
														<div id="smsCaptcha"></div>
														<table>
															<tbody><tr>
																<td>
																	<label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="smsRandomCode"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="verify vam">图形验证码</div></label><input type="text" autocomplete="off" class="verify vam" id="smsRandomCode" name="authcode" maxlength="4" tabindex="2" validator="validator11514855555508" style="z-index: 1;">
																</td>
																<td>
																	<img class="vam pointer random_padding r" id="smsRandomCodeImg" width="100" height="40" src="/static/index/login/登录_files/authCodeImage" alt="验证码：" onclick="chgRandomCodeForLogin(&#39;smsRandomCode&#39;);">
																</td>
																<td class="authCodeTd"><i id="smsAuthCodeRight" class="r"></i></td>
															</tr>
														</tbody></table>
													</td>
												</tr>
												
												<tr>
													<td class="referenceTarget user-input-tr"><label class="lb_opacity_Class" style="display: block; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 0px; padding-top: 0px;" for="smsAuthCode"><div style="border: none; background: transparent; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">短信验证码</div></label><input type="text" autocomplete="off" class="text vam" id="smsAuthCode" name="smsAuthCode" maxlength="8" tabindex="3" validator="validator51514855555522" style="z-index: 1;"><div id="getSmsRandomCodeDiv"><div id="getSmsRandomCode" intervaltime="60" class="smsAuthBth"><span>获取验证码</span><div id="smsAuthCodeTips"></div></div></div></td>
												</tr>
										
												<tr>
													<td class="mt-checkbox">
														<span id="sms-rememberNameSpan"><input type="checkbox" class="checkbox vam" id="remember_smsName" name="remember_smsName" tabindex="4"><label for="remember_smsName"><i id="remember_smsName_icon" class="checkBox-icon tick-off-icon marginR6"></i></label></span>
														<div class="hidden remeberTip"></div>
													</td>
												</tr>
												<tr>
													<td>
														<div style="margin-bottom:0px;"><span class="vam error" id="login_msg" style="display:block"></span></div>
														<input type="submit" class="button-login" id="btnSMSLogin" 	 value="登录" tabindex="5">
														
													</td>
												</tr>
												<tr>
													<td class="mt-links">
														<div class="mt-links-float  vam">
															<span class="regist"><a class="btn-primary" href="https://hwid1.vmall.com/CAS/portal/userRegister/regbyphone.html?reqClientType=26&amp;loginChannel=26000000&amp;countryCode=cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3Dhttps%253A%252F%252Fwww.vmall.com%252F%2523cid%253D10074&amp;lang=zh-cn&amp;themeName=red" title="注册帐号">注册帐号</a></span><span class="forgot"><a class="btn-primary" href="javascript:void(0)" onclick="gotoresetpwd()" title="忘记密码？">忘记密码？</a></span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>						
							</div>
						</div>
					</div>
				</div>	
			<input type="hidden" name="hwmeta" id="hwmeta" value="JxEAGQAyBSYAAAAAANefABYBAATNzMvKBgEAB82fn568FyIWAQAEzczLygUBAAzNzhMTT05NTGrPeXgEAQAJzc4WFE9ObM5aBAEACc3NSUiDgp40WgQBAAnNyAcGy8rWXtoEAQASxML08wUEEFbRvNS02rfQoO2BBAEACc3MmJeQj4EVlQQBAAnNzKWko6KsxL8EAQAXw8Y4N+rp44ZVOFgwRit1AXMXZC1NIUUEAQASxMLe3FRTWpK61bvdtdq/0aLMBAEACc3LurnQz844tQcBABTDwsHAg4rli+2F6rbFpdel073OqQUBAAzNyGxrubi3trWIgYAHAQAUw8PCwfpYO1UzWzRsG3sJew1jEGsWAQAEzczLygUBABrDxm9un56dnJugBANuAmYMZTtKKFQgaAh1EAQBAAnNyHNzbGtqRkYHAQAGzczLyuf8BwEABs3NzMvnFQcBABTDwsHAkmEMZARqB1koRjZGMl4vSgUBAAzNyHh3pKOioaCyXVwWAQAEzczLyhYBAATNzMvKAgEAcM2i7IT5kfyX99ntwvHQ57HZttG/ybua14KhkaCxgERjNXstGi0FJGIRYDNXAWUGTiRXeU1/SWZWY0JpI2o9cTwXNlkxWz8eWjxYPFR6WRtyA20BZUt8SmdWe0l5Tn5TY1JhQGwKbw98Ej4INAQtHygBAQAIzczKqRx2FLUXAQAEzczKyRQBABjNzKrKqsawwbTUpsSx1JPTvMKF4Zb8mPIMAQBVmaqZrJKil/SWppKgp578mf3F9MLyxfCN6o/q3uncuISzguKASHJHckUiRyIYchBsDz4MO1xoATcOPApsWGJSaAY2BDZQKR58T3sZfURwWGMHNQw+CgsBASvM2tnOpdC7yrqDrYPqnvSXp4jxnf2Q48yoyKqGxoTQ4K/BssWlyOiL5YPrhK3Et9u2iv+f8pjzk+aAGydSI1czFGcOaApsJUUpTXECZAcgbA5/CG4OaFoxRDdGNhA9CTt7X2xebygCMwc0dQN1AyxdMVE8V3gUfBYwHSkaXz9dP1ElSj0ZKhwpbgxoBnYZdxF5FjAdKRtcLl8yFCEVJ2IJfA9+DigVIRIkEE5oVWFSZFEWMB0pGiwZXipeKgdwAmAzXnMRfxM3BDYHMwC5na6YpZGikvKY89fk1ufT4aSSoZC4g6TPocevwPyT85z1kfzG98CPvo28i7qf7I78uNuz17jDluyb/8Pw2f6R8Z76xLnQ4oLvhvGE84G6lrrOus7jlP6c95q31bvX+QMBACDNzMvKycjHxsXExKyrqqtAPz46ubi3somIh4EA//754gcBABTDw8LB68ynya/HqPiC8pThrsymwAUBABrDxnp4dXRzcnFbaGcKZgJoCVcmRDBcLEQxVAcBABTDwsHAlKbJp8GpxprsmPKDzKrEpgcBABTDw8LB69K907Xdsu6d/Y/9i+WW8RYBAATNzMvKBwEAFMPDwsHuxajIoPabxbHDp9Sd/ZH1BAEAF8PGbGuNjIuzYw5iBmwFWypINEBIKFUwBwEAFMPCwcCFG3YafhR9I1clQTJ/H3MXBQEAGsPGbmxpaGdmZVomJUgoQFY7ZRRyAnIGaht+BAEACc3INTVlZGLtlgQBAAnNzXZ1dHNxP8kEAQAJzcg1NKmorPz4BAEAEsTDVFMzMiNXz6LOqsDRttqrxwQBAAnNzZWUl5aAkKUPAQAKzczLysnIx9mtHAQBAAnNyW1s4eDAL+MFAQAMzcuwrgQDAgEfs4yLBgEAB83d3Nv7UU8="></div>
		</div>
	<div>
	<!-- 底部  -->

	<div class="wp ft">
		<p>
			
				<a href="https://hwid1.vmall.com/CAS/portal/agreements/userAgreement/zh-cn_userAgreement.html?version=china" class="rule" target="_blank">用户协议</a>
				<em class="foot_em">|</em>
				<a href="https://hwid1.vmall.com/CAS/portal/agreements/userPrivacyPolicy/zh-cn_userPrivacyPolicy.html?version=europe" class="rule" target="_blank">隐私政策</a>
				<em class="foot_em">|</em>
				<a href="https://hwid1.vmall.com/CAS/portal/faq/faq.html" class="ifaq" target="_blank">常见问题</a>
			
			
			
			
			
			
			
		</p>
			
		
				
			
				<p>Copyright © 2011-2017    华为技术有限公司   版权所有   保留一切权利&nbsp;&nbsp;苏B2-20070200号           |           苏ICP备09062682号-9</p>
				<p></p>	
			
			
		
	
		
	</div>
	</div>
	<div id="layer">
		<div class="mc"></div>
	</div>

	<div id="selectCountryCodeDiv"></div>
	<div class="loginmask" style="display: none;">
		<div>
			<span>登录中...</span>
		</div>
	</div>


<script src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.js"></script>
<script src="/static/index/login/js/gt.js"></script>
<script>
    var handlerEmbed = function (captchaObj) {
        $("#embed-submit").click(function (e) {
            var validate = captchaObj.getValidate();
            if (!validate) {
                $("#notice")[0].className = "show";
                setTimeout(function () {
                    $("#notice")[0].className = "hide";
                }, 2000);
                e.preventDefault();
            }
        });
        // 将验证码加到id为captcha的元素里，同时会有三个input的值：geetest_challenge, geetest_validate, geetest_seccode
        captchaObj.appendTo("#embed-captcha");
        captchaObj.onReady(function () {
            $("#wait")[0].className = "hide";
        });
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };	
    $.ajax({
        // 获取id，challenge，success（是否启用failback）
        url: "/static/index/login/jiyan/web/StartCaptchaServlet.php?t=" + (new Date()).getTime(), // 加随机数防止缓存
        type: "get",
        dataType: "json",
        success: function (data) {
            console.log(data);
            // 使用initGeetest接口
            // 参数1：配置参数
            // 参数2：回调，回调的第一个参数验证码对象，之后可以使用它做appendTo之类的事件
            initGeetest({
                gt: data.gt,
                challenge: data.challenge,
                new_captcha: data.new_captcha,
                product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
                offline: !data.success // 表示用户后台检测极验服务器是否宕机，一般不需要关注
                // 更多配置参数请参见：http://www.geetest.com/install/sections/idx-client-sdk.html#config
            }, handlerEmbed);
        }
    });
</script>
<script src="/static/index/login/js/loginAuthDialog.js.下载"></script>
<script src="/static/index/login/js/login.js.下载"></script>
<script src="/static/index/login/js/swfobject.js.下载"></script>
<script src="/static/index/login/js/acctguard-secure.min.js.下载"></script>


</form>
</body></html>