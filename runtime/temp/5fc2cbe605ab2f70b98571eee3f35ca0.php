<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Login\forget.html";i:1516325766;}*/ ?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">

<link href="/static/index/login/images/huaweiLogo.png" type="image/x-icon" rel="shortcut icon"> 
<link href="/static/index/login/css/ec.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/common_002.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/dialog1.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/common1.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/zh-cn_css.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/login/css/commonEmui5.css" rel="stylesheet" type="text/css"> 

<link href="/static/bootstrap.min.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";</script>
<script src="/static/index/login/js/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<!-- <script src="/static/index/login/js/jquery-1.js" id="jsid"></script>
<script src="/static/index/login/js/ec_002.js"></script>
<script src="/static/index/login/js/base.js"></script>
<script src="/static/index/login/js/casui.js"></script>
<script src="/static/index/login/js/ec.js"></script> 
<script src="/static/index/login/js/commonjs.js"></script>
<script src="/static/index/login/js/casAjaxObj.js"></script> -->


<title>华为帐号-忘记密码</title>
<script src="/static/index/login/js/jquery.js"></script>
<script type="text/javascript">
var jsdevswfpath = "https://hwid1.vmall.com/CAS/up/rss_15/js/pc_rss/secrisk/JSdev.swf?UP_CAS_2.5.4.303";
var rss={
		login_js_codeerror :htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
		inputcode:htmlDecodeJQ("&#35831;&#36755;&#20837;&#39564;&#35777;&#30721;"),
		wrongcode:htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
		getsmscodefail:htmlDecodeJQ("&#33719;&#21462;&#30701;&#20449;&#39564;&#35777;&#30721;&#22833;&#36133;"),
		getsmscode:htmlDecodeJQ("&#33719;&#21462;&#39564;&#35777;&#30721; "),
		getpwdfail:htmlDecodeJQ("&#37325;&#32622;&#23494;&#30721;&#22833;&#36133;"),
		forgetbyid_usernoexist:htmlDecodeJQ("&#35813;&#21326;&#20026;&#24080;&#21495;&#36824;&#26410;&#27880;&#20876;&#65281;"),
		common_js_send_sms_in_min:htmlDecodeJQ("&#19968;&#20998;&#38047;&#20869;&#21482;&#20801;&#35768;&#35831;&#27714;&#19968;&#27425;&#65292;&#35831;&#31245;&#21518;&#37325;&#35797;"),
		common_js_send_sms_in_week:htmlDecodeJQ("&#36229;&#20986;&#19968;&#21608;&#20869;&#21457;&#36865;&#39564;&#35777;&#30721;&#30340;&#26368;&#22823;&#27425;&#25968;"),
		common_js_send_sms_in_day:htmlDecodeJQ("&#33719;&#21462;&#30701;&#20449;&#27425;&#25968;&#22826;&#39057;&#32321;&#65292;&#35831;&#26126;&#22825;&#20877;&#35797;"),
		common_js_wrongcode:htmlDecodeJQ("&#39564;&#35777;&#30721;&#38169;&#35823;"),
		login_js_inputaccount :htmlDecodeJQ("&#35831;&#36755;&#20837;&#24744;&#30340;&#24080;&#21495;"),
		login_js_accountlength :htmlDecodeJQ("&#21326;&#20026;&#24080;&#21495;&#38480;&#21046;&#22312;4~50 &#20010;&#23383;&#31526;"),
		prompt:htmlDecodeJQ("&#25552;&#31034;"),
		iKnowBtn:htmlDecodeJQ("&#30830;&#23450;"),
		noSupportService:htmlDecodeJQ("&#24403;&#21069;&#32593;&#31449;&#30340;&#26381;&#21153;&#33539;&#22260;&#19982;&#24744;&#36755;&#20837;&#30340;&#24080;&#21495;&#19981;&#21305;&#37197;&#65292;&#31995;&#32479;&#26080;&#27861;&#20026;&#24744;&#25552;&#20379;&#26381;&#21153;&#65292;&#25964;&#35831;&#35845;&#35299;&#12290;"),
		error_10000001:htmlDecodeJQ("&#35831;&#36755;&#20837;&#27491;&#30830;&#30340;&#24080;&#21495;"),
		error_10000002:htmlDecodeJQ("&#19981;&#25552;&#20379;&#26381;&#21153;"),
		error_10000003:htmlDecodeJQ("&#35813;&#24080;&#21495;&#24050;&#34987;&#20923;&#32467;"),
		error_10000004:htmlDecodeJQ("&#38750;&#27861;&#25805;&#20316;!"),
		
		
		error_10001003: htmlDecodeJQ("&#23433;&#20840;&#25163;&#26426;&#21495;&#27809;&#26377;&#28608;&#27963;&#65292;&#35831;&#36827;&#20837;&ldquo;&#24080;&#21495;&#20013;&#24515;&rdquo;&#28608;&#27963;&#23433;&#20840;&#25163;&#26426;&#21495;&#12290;"),
		error_10001004: htmlDecodeJQ("&#23433;&#20840;&#37038;&#31665;&#27809;&#26377;&#28608;&#27963;&#65292;&#35831;&#36827;&#20837;&ldquo;&#24080;&#21495;&#20013;&#24515;&rdquo;&#28608;&#27963;&#23433;&#20840;&#25163;&#37038;&#31665;&#12290;"),
		error_70001401:htmlDecodeJQ("&#31995;&#32479;&#20869;&#37096;&#38169;&#35823;"),
		
		user_not_exsit:htmlDecodeJQ("&#24080;&#21495;&#20449;&#24687;&#19981;&#23384;&#22312;"),
		autoCodeSuccess:htmlDecodeJQ("&#39564;&#35777;&#30721;&#27491;&#30830;"),
		accountNotActive:htmlDecodeJQ("&#24080;&#21495;&#26410;&#28608;&#27963;"),
		IGetIt:htmlDecodeJQ("&#30830;&#23450;"),
		hint:htmlDecodeJQ("&#25552;&#31034;"),
		loginOverdue:htmlDecodeJQ("&#24403;&#21069;&#39029;&#38754;&#24050;&#36807;&#26399;&#65292;&#35831;&#21047;&#26032;&#24403;&#21069;&#39029;&#38754;&#21518;&#37325;&#35797;&#12290;"),
		overload:htmlDecodeJQ("&#31995;&#32479;&#32321;&#24537;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;&#65281;"),
		global_cross_site_login:htmlDecodeJQ("&#38656;&#35201;&#24744;&#21516;&#24847;&#24403;&#21069;&#22269;&#23478;/&#22320;&#21306;&#30340;&#38544;&#31169;&#25919;&#31574;&#12290;&#28857;&#20987;&#21516;&#24847;&#65292;&#21363;&#34920;&#31034;&#24744;&#24050;&#38405;&#35835;&#21644;&#21516;&#24847;&#21326;&#20026;&lt;a class='a-EMUI5' id='globalCrossPrivacyPolicy' target='_blank'&gt;&#38544;&#31169;&#25919;&#31574;&lt;/a&gt;&#12290;"),
		error_risk_70008800:htmlDecodeJQ("&#24744;&#30340;&#25805;&#20316;&#21487;&#33021;&#23384;&#22312;&#23433;&#20840;&#39118;&#38505;&#65292;&#24314;&#35758;&#24744;&#19981;&#35201;&#36827;&#34892;&#27492;&#25805;&#20316;&#25110;&#31245;&#21518;&#20877;&#35797;&#12290;"),
		global_cross_page_redirect_forget:htmlDecodeJQ("&#24403;&#21069;&#32593;&#31449;&#19981;&#25903;&#25345;&#35813;&#24080;&#21495;&#25214;&#22238;&#23494;&#30721;&#65292;&#23558;&#36339;&#36716;&#21040;&#24080;&#21495;&#27880;&#20876;&#22269;&#23478;/&#22320;&#21306;&#23545;&#24212;&#30340;&#32593;&#31449;&#25214;&#22238;&#23494;&#30721;&#12290;"),
		cancel_btn:htmlDecodeJQ("&#21462;&#28040;")
};
var lang="zh-cn";
var randomCodeImgURL = "https://hwid1.vmall.com/Captcha/authCodeImage?session_code_key=p_forget_byid_session_ramdom_code_key&amp;_st=1515414860563";
var pageToken = "a8SrdjaKqKNPfbcfYSXQwjJvfSwiZ8Qe";		
var localInfo = 
    {
	  webssoLoginSessionCode:"https://hwid1.vmall.com/Captcha/authCodeImage?session_code_key=p_forget_byid_session_ramdom_code_key&_st=1515414860563",
	  currentSiteID:"1",
	  urlQurey:"?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Fcaslogin&lang=zh-cn&themeName=red",
	  reqClientType:"26",
	  globalCrossPrivacyPolicy:"https://hwid1.vmall.com/CAS/portal/agreements/userPrivacyPolicy/zh-cn_userPrivacyPolicy.html?version=europe",
	  queryString:"?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Fcaslogin&lang=zh-cn&themeName=red",
	  extInfo:"",
	  requestURIQuery:"/CAS/portal/resetPwd/forgetbyid.html?reqClientType=26&loginChannel=26000000&countryCode=cn&loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Fcaslogin&lang=zh-cn&themeName=red",
	  
		status:"",
		twoStepVerify:""
    };
</script>

</head>

<body class="forget" id="loginform" style="height: 670px;">


					      							
		<!-- 头部  -->

<div class="head-background">
	<div class="head_center">
			  	<div class="main-logo adHeadPicContainer" style="width:143px">
					<a href="/index/index"><img src="/static/index/login/images/head-top.png" class="wihteBgPic"></a>
				</div>
				<div class="website-name" style="color:#fff;">
					<b style="font-size: 18px;margin-top: -3px;float: left;color:#cccccc;">|</b>
					<b style="font-size: 18px;margin-top: -1px;float: left; margin-left:18px;color:#ffffff">华为商城</b>
				</div>
	</div>
</div>
	
	
	
	
	
    <div class="g">
    	<!--找回密码 -->
    	<div id="mod-forget-area" class="resetpwd-container">
        	<div class="h">
            	<h3><span>账号找回密码</span></h3>
            	<div style="float:right">如设置过密保问题可通过&nbsp;&nbsp;<a href="/ilogin/number">密保问题找回密码></a></div>
            </div>
            <div class="b">
            
                <div id="resetByIdFrom">
                	<!--表单 -->
                	<input name="sessionExpireFlag" id="sessionExpireFlag" value="" type="hidden">
                	<input name="formBean.reqClientType" value="26" type="hidden">
                <form action="/ilogin/doforget" method="post" id="ss">
                	<div class="form-edit-area">
                		<div class="head_text"><em>请输入您的帐号</em></div>
                		<div id="username-input" class="input-area forIdmarBot marginBottom0">
                			<label class="lb_opacity_Class" style="display: none; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;" for="formBean_username"><div style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">手机号/邮件地址</div></label><input autocomplete="off" class="text" id="username" name="username" maxlength="50" tabindex="1" validator="validator11515414860589" style="z-index: 1;" value="" type="text" placeholder="手机号/邮件地址"><div id="zh" style="margin-top:15px;margin-left:30px"></div><span id="msg_username"></span>
                            <input id="fullUserAccount" value="" type="hidden">
                		</div>
                        <div id="error-tips" class="error-tips-EMUI6"></div>

                        <div class="input-area">
							<div class="verifyCode" id="randomCodeDiv">
								<label class="lb_opacity_Class" style="display: none; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;" for="randomCode"><div style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; width: 80%; color: rgb(204, 204, 204);" tabindex="-1" class="text vam paddingFix">验证码</div></label><input autocomplete="off" id="randomCode" name="fcode" class="text vam paddingFix" style="width: 80%; z-index: 1;" maxlength="4" tabindex="1" validator="validator21515414860592" value="" type="text" placeholder="图形验证码">
							</div>
							<img src="<?php echo captcha_src(); ?>" style="width:150px;height:60px" class="randomCodeImg forIdCodeImg" alt="验证码" onclick='this.src="<?php echo captcha_src(); ?>?rand="+Math.random()' onload="this.src="<?php echo captcha_src(); ?>?rand="+Math.random()" onerror="this.style.width='44px';this.src='https://hwid1.vmallres.com/CAS/up/rss_15/css/mobile/standard_rss/images/loading.gif?UP_CAS_2.5.4.303';" style="width: 100px;">
							<b id="authCodeRight" class="poptips-yes"></b>
						</div>	
						<div id="randomCode_msg" class="error-tips-EMUI6"></div>

						<div class="input-area">
							<div class="verifyCode" id="randomCodeDiv">
								<label class="lb_opacity_Class" style="display: none; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;" for="randomCode"><div style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; width: 80%; color: rgb(204, 204, 204);" tabindex="-1" class="text vam paddingFix">验证码</div></label><input autocomplete="off" id="randomCode" name="pcode" class="text vam paddingFix" style="width: 80%; z-index: 1;" maxlength="4" tabindex="1" validator="validator21515414860592" value="" type="text" placeholder="手机/邮箱验证码">
							</div>
							<a href="javascript:void(0)" class="btn btn-success bb" style="width:150px;" onclick="ecode()">获取手机/邮箱验证码</a>
							<!-- <img src="<?php echo captcha_src(); ?>" class="randomCodeImg forIdCodeImg" alt="验证码" onclick='this.src="<?php echo captcha_src(); ?>?rand="+Math.random()' onload="this.src="<?php echo captcha_src(); ?>?rand="+Math.random()" onerror="this.style.width='44px';this.src='https://hwid1.vmallres.com/CAS/up/rss_15/css/mobile/standard_rss/images/loading.gif?UP_CAS_2.5.4.303';" style="width: 100px;"> -->
							<b id="authCodeRight" class="poptips-yes"></b>
						</div>	
						<div id="randomCode_msg" class="error-tips-EMUI6"></div>

                        <div class="head_text"><em>输入新密码</em></div>
                		<div id="username-input" class="input-area forIdmarBot marginBottom0">
                			<!-- <label class="lb_opacity_Class" style="display: none; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;" for="formBean_username"><div style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">手机号/邮件地址</div></label> --><input autocomplete="off" class="text vam" id="pwd" name="pwd" maxlength="50" tabindex="1" validator="validator11515414860589" style="z-index: 1;" value="" type="password" placeholder="请输入新密码"><div id="m" style="margin-top:10px;margin-left:20px"></div><span id="msg_pwd"></span>
                            <input id="fullUserAccount" value="" type="hidden">
                		</div>
                        <div id="error-tips" class="error-tips-EMUI6"></div>

                        <div class="head_text"><em>确认新密码</em></div>
                		<div id="username-input" class="input-area forIdmarBot marginBottom0">
                			<!-- <label class="lb_opacity_Class" style="display: none; position: absolute; cursor: text; float: left; z-index: 2; padding-left: 1px; padding-top: 1px;" for="formBean_username"><div style="border: medium none; background: transparent none repeat scroll 0% 0%; cursor: text; margin: 2px; color: rgb(204, 204, 204);" tabindex="-1" class="text vam">手机号/邮件地址</div></label> --><input autocomplete="off" class="text vam" id="repwd" name="repwd" maxlength="50" tabindex="1" validator="validator11515414860589" style="z-index: 1;" value="" type="password" placeholder="再次输入新密码"><div id="rm" style="margin-top:10px;margin-left:20px"></div><span id="msg_pwd"></span>
                            <input id="fullUserAccount" value="" type="hidden">
                		</div>
                        <div id="error-tips" class="error-tips-EMUI6"></div>
                        
                		
                    </div>
                    <div class="input-area step-area">
               			<input id="btnSubmit" class="button" value="确认修改" tabindex="3" style="width:210px;" type="submit">
               		</div>
                </div>
            </form>
            </div>
            <div class="f"></div>
    	</div>
    </div>
    <div id="selectCountryCodeDiv"></div>
    
    
					      							
		<!-- 底部  -->

<div class="customer-footer">
	<div class="ft">
		<!--授权  -->
        <div class="warrant-area">
            <p style="text-align: center;height-line:20px;height:20px;">
            
				<a href="https://hwid1.vmall.com/CAS/portal/agreements/userAgreement/zh-cn_userAgreement.html?version=china" class="rule" target="_blank">用户协议</a>            	
            	<em class="foot_em">|</em>
				<a href="https://hwid1.vmall.com/CAS/portal/agreements/userPrivacyPolicy/zh-cn_userPrivacyPolicy.html?version=europe" class="rule" target="_blank">隐私政策</a>

			
			
			
			
			
			
			
           	<a href="#" target="_blank"><em style="font-style: normal">|</em> </a><a style="padding:0 10px;" target="blank" href="https://hwid1.vmall.com/CAS/portal/faq/faq.html">常见问题</a>
            </p>
        	<p style="text-align: center;height-line:20px;height:20px;margin-top: 15px ">
        	
        		
        			
        				
Copyright&nbsp;©&nbsp;2011-2017&nbsp;&nbsp;华为软件技术有限公司&nbsp;&nbsp;版权所
有&nbsp;&nbsp;保留一切权利&nbsp;&nbsp;苏B2-20070200号&nbsp;|&nbsp;苏ICP备09062682号
-9
        			
        			
        		
        	
        	</p>
        </div>
    </div>
</div>



	
	


<script src="/static/index/login/js/forgetpassword.js"></script>


<script src="/static/index/login/js/swfobject.js"></script>
<script src="/static/index/login/js/acctguard-secure.js"></script>

<param name="wmode" value="transparent"></object></body>
<script type="text/javascript">
	function ecode(){
		// alert('邮件已发送到您的邮箱');
		val=$('#username').val();
		ob=$('.bb');
		// alert(ob);
		 // alert(phone);return;
		 $.get("/ilogin/val",{val:val},function(data){
		 	console.log(data);
		 	// if(data.code==0){
		 	// 	alert('请填写邮箱地址');
		 	// 	// $('#msg_email').html('<font color="red">请输入邮箱地址</font>');
		 			
		 	// }else{
		 	// 	alert('邮件已发送到您的邮箱，请注意查收！');
		 	// 		m=10;
				// 	mytime=setInterval(function(){
				// 		m--;
				// 		//把m赋值给a标签
				// 		ob.html(m+"秒重新发送");
				// 		//按钮禁用掉
				// 		ob.attr('disabled',true);
				// 		if(m==0){
				// 			//清除定时器
				// 			clearInterval(mytime);
				// 			//重新赋值
				// 			ob.html("重新发送");
				// 			//激活按钮
				// 			ob.attr("disabled",false);
				// 		}

				// 	},1000);
		 	// }

		 	
      		},'json');
		};
	ZH=false;
	PASSWORD=false;
	REPASSWORD=false;

	$("#username").blur(function(){

		m=$(this).val();
		if(m==''){
			$("#zh").css("color","red").html("账号填写不得为空");
			ZH=false;
		}else{
			$("#zh").html("");
			ZH=true;
		}
	})
	$("input[name='pwd']").blur(function(){
    //获取密码
    p=$(this).val();
    //正则检测
    if(p.match(/^\w{4,8}$/)==null){
      $("#m").css("color","red").html("密码必须为4-8位任意数字字母下划线");
      PASSWORD=false;
    }else{
      $("#m").css("color","green").html("密码可用");
      PASSWORD=true;

    }
  })

	$("input[name='repwd']").blur(function(){
    //获取重复密码
    rep=$("#repwd").val();
    //获取密码
    pp=$("#pwd").val();
    if(rep==pp){
      $("#rm").css("color","green").html("两次密码一致");
      REPASSWORD=true;
    }else{
        $("#rm").css("color","red").html("两次密码不一致");
        REPASSWORD=false;
    }
  });

	$("#ss").submit(function(){
    // trigger 把匹配的元素触发某类事件
    // return false;
    if(ZH && PASSWORD && REPASSWORD){
      return true;
    }else{
      return false;
    }
  });
</script>
</html>