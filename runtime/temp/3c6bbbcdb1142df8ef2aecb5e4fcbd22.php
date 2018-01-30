<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Personal\noquestion.html";i:1516066341;}*/ ?>
<!DOCTYPE html>
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
	<title>密保问题</title>
	<style>
		#user{
			width: 350px;
			height: 50px;
			/*margin-top: -38px;*/
			/*margin-left: 160px;*/
			/*background-color: blue;*/
		}
	</style>
	<link href="https://hwid1.vmallres.com/CAS/up/common/images/default/hwfavicon.ico" type="image/x-icon" rel="shortcut icon"> 
<link href="/static/bootstrap.min.css" rel="stylesheet" type="text/css"> 	
<link href="/static/index/userinfo/css/ec.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/userinfo/css/jquery-ui.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/userinfo/css/jquery.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/userinfo/css/common_002.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/userinfo/css/dialog.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/userinfo/css/common.css" rel="stylesheet" type="text/css"> 
<link href="/static/index/userinfo/css/zh-cn_css.css" rel="stylesheet" type="text/css"> 
<script type="text/javascript">var localHttps="https://hwid1.vmall.com/CAS";var currentSiteID="1";</script>
<script src="/static/index/userinfo/js/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/index/userinfo/js/jquery-1.js" id="jsid"></script>
<script src="/static/index/userinfo/js/ec_002.js"></script>
<script src="/static/index/userinfo/js/jquery.js"></script>
<script src="/static/index/userinfo/js/jquery-ui.js"></script>
<script src="/static/index/userinfo/js/uc_base.js"></script>
<script src="/static/index/userinfo/js/commonjs.js"></script>
<script src="/static/index/userinfo/js/casui.js"></script>
<script src="/static/index/userinfo/js/casAjaxObj.js"></script>
<script src="/static/index/userinfo/js/ec.js"></script> 
<script src="/static/index/userinfo/js/ajaxupload.js"></script>
<script src="/static/index/userinfo/js/area.js"></script>
<script src="/static/index/userinfo/js/pwd.js"></script>
<script src="/static/index/userinfo/js/jquery_002.js"></script>

	
	<script type="text/javascript">
		var rss={
				confirm_btn:htmlDecodeJQ("&#30830;&#35748;"),
				cancel_btn:htmlDecodeJQ("&#21462;&#28040;"),
				gender_unknown:htmlDecodeJQ("&#26410;&#30693;"),
				gender_male:htmlDecodeJQ("&#30007;"),
				gender_female:htmlDecodeJQ("&#22899;"),
				gender_secret:htmlDecodeJQ("&#20445;&#23494;"),
				uploadAvatar:htmlDecodeJQ("&#19978;&#20256;&#22836;&#20687;"),
				nickname:htmlDecodeJQ("&#26165;&#31216;"),
				forumnickname:htmlDecodeJQ("&#35770;&#22363;&#26165;&#31216;&#65306;"),
				forumnicknameTitle:htmlDecodeJQ("&#35770;&#22363;&#26165;&#31216;"),
				set:htmlDecodeJQ("&#35774;&#32622;"),
				sex:htmlDecodeJQ("&#24615;&#21035;"),
				resend:htmlDecodeJQ("&#37325;&#26032;&#33719;&#21462;"),
				resend_time:htmlDecodeJQ("&#37325;&#26032;&#33719;&#21462; ({0})"),
				city:htmlDecodeJQ("&#22478;&#24066;"),
				nicknameInputTip:htmlDecodeJQ("&#35831;&#36755;&#20837;&#26165;&#31216;"),
				nicknameLengthTip:htmlDecodeJQ("&#26165;&#31216;&#19981;&#33021;&#36229;&#36807;20&#20010;&#23383;&#31526;"),
				forumNicknameLengthTip:htmlDecodeJQ("&#35770;&#22363;&#26165;&#31216;&#19981;&#33021;&#36229;&#36807;20&#20010;&#23383;&#31526;"),
				nickNameExsit:htmlDecodeJQ("&#26165;&#31216;&#24050;&#23384;&#22312;&#65292;&#35831;&#26356;&#25442;&#12290;"),
				nicknameFormatTip:htmlDecodeJQ("&#19981;&#21487;&#21253;&#21547;&#29305;&#27530;&#23383;&#31526;"),
				forumNicknameFormatTip:htmlDecodeJQ("&#35770;&#22363;&#26165;&#31216;&#21482;&#21487;&#20026;&#23383;&#27597;&#65292;&#25968;&#23383;&#65292;&#19979;&#21010;&#32447;&#65292;&#20013;&#25991;&#24182;&#19988;&#19981;&#21487;&#20026;&#31354;&#12290;"),
				forumNicknameFormatTip2:htmlDecodeJQ("&#35770;&#22363;&#26165;&#31216;&#19981;&#21487;&#20026;&#29305;&#27530;&#23383;&#31526;&#25110;&#32773;&#20013;&#25991;"),
				provinceChoose:htmlDecodeJQ("&#35831;&#36873;&#25321;&#30465;&#20221;"),
				cityChoose:htmlDecodeJQ("&#35831;&#36873;&#25321;&#22320;&#21306;"),
				yearInputTip:htmlDecodeJQ("&#35831;&#22635;&#20889;&#24180;&#20221;"),
				monthInputTip:htmlDecodeJQ("&#35831;&#22635;&#20889;&#26376;&#20221;"),
				dayInputTip:htmlDecodeJQ("&#35831;&#22635;&#20889;&#22825;"),
				uc_infochangetochild_error:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#20799;&#31461;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				uc_infochangenochild_error:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#38750;&#20799;&#31461;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				uc_infochangetoadult_error:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#25104;&#24180;&#20154;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				uc_infochangenoadult_error:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#38750;&#25104;&#24180;&#20154;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				
				
				error_70005002:htmlDecodeJQ("&#26165;&#31216;&#24050;&#32463;&#23384;&#22312;"),
				error_70005002_2:htmlDecodeJQ("&#35770;&#22363;&#26165;&#31216;&#24050;&#32463;&#23384;&#22312;"),
				error_70007005:htmlDecodeJQ("&#29983;&#26085;&#19981;&#21305;&#37197;"),
				error_10000001:htmlDecodeJQ("&#31995;&#32479;&#32321;&#24537;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;&#65281;"),
				error_70001201:htmlDecodeJQ("&#36755;&#20837;&#26080;&#25928;"),
				error_70005003:htmlDecodeJQ("&#19981;&#21487;&#21253;&#21547;&#21463;&#38480;&#21046;&#25991;&#23383;"),
				error_70005005:htmlDecodeJQ("&#35770;&#22363;&#26165;&#31216;&#19981;&#21487;&#20877;&#34987;&#35774;&#23450;"),
				error_10000604:htmlDecodeJQ("&#19981;&#33021;&#20462;&#25913;&#20320;&#30340;&#24180;&#40836;&#20026;&#26410;&#25104;&#24180;&#20154;"),
				bg_error:htmlDecodeJQ("&#35843;&#29992;&#21518;&#21488;&#22833;&#36133;"),
				failUpdateUserinfo:htmlDecodeJQ("&#26356;&#26032;&#29992;&#25143;&#20449;&#24687;&#22833;&#36133;"),
				isNotChild:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#38750;&#20799;&#31461;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				isChild:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#20799;&#31461;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				isNotAdult:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#38750;&#25104;&#24180;&#20154;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				isAdult:htmlDecodeJQ("&#20462;&#25913;&#24180;&#40836;&#20026;&#25104;&#24180;&#20154;&#65292;&#38656;&#35201;&#38144;&#25143;&#21518;&#37325;&#26032;&#27880;&#20876;&#12290;"),
				IGetIt:htmlDecodeJQ("&#30830;&#23450;"),
				hint:htmlDecodeJQ("&#25552;&#31034;"),
				loginOverdue:htmlDecodeJQ("&#24403;&#21069;&#39029;&#38754;&#24050;&#36807;&#26399;&#65292;&#35831;&#21047;&#26032;&#24403;&#21069;&#39029;&#38754;&#21518;&#37325;&#35797;&#12290;"),
				overload:htmlDecodeJQ("&#31995;&#32479;&#32321;&#24537;&#65292;&#35831;&#31245;&#21518;&#20877;&#35797;&#65281;"),
				birthdayTitle:htmlDecodeJQ("&#29983;&#26085;"),
				notnull:htmlDecodeJQ("1~20&#20010;&#23383;&#31526;"),
				uc_age_greater_13:htmlDecodeJQ("&#24180;&#40836;&#24517;&#39035;&#22823;&#20110;13&#23681;"),
				modifyUserInfo_forum_nickname_tips:htmlDecodeJQ("&#35774;&#32622;&#21518;&#21482;&#33021;&#26356;&#25913;&#19968;&#27425;&#12290;")
			};
		
		var localInfo={
				headPicSrc:"https://hwid1.vmallres.com/CAS/up/rss_15/css/portal/userCenter_rss/images/headPic.jpg?UP_CAS_2.5.4.303",
				reqClientType:"26",
		 		urlQurey:"?reqClientType=26&amp;loginChannel=26000000&amp;countryCode=cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=http%3A%2F%2Fwww.vmall.com%2F&amp;lang=zh-cn&amp;themeName=blue",
		 		avatPath: "https://hwid1.vmallres.com/CAS/up/rss_15/css/portal/userCenter_rss/images/pic.png?UP_CAS_2.5.4.303",
		 		siteID:"1",
		 		accountSiteID:"1",
		 		defaultPic:"https://hwid1.vmallres.com/CAS/up/rss_15/css/portal/userCenter_rss/images/pic.png?UP_CAS_2.5.4.303",
		 		allowModifyForumNickname:"true",
		 		ageLimit:13,
		 		lang:"zh-cn"
		};
		

				
	</script>
	<script src="/static/index/userinfo/js/pingyin.js"></script>
	 <script src=""></script>
	<script src="/static/index/userinfo/js/userInfo.js"></script>
</head>
<body class="userCenter-ucInfo">



	<div class="topbar1">
		<div class="tp wp mkcl">
			<div class="childLogo1">
			     <span class="s1"> 
					    
					     <a href="/index/index"><img src="/static/index/userinfo/images/head-top.png"></a>
		</span>
			</div>
		     
			
			<!-- <div class="tbr1">	
				
					
					
						<b class="user"></b>
					
				
				<a class="account userAccount" href="https://hwid1.vmall.com/CAS/portal/userCenter/info.html?reqClientType=26&amp;loginChannel=26000000&amp;countryCode=cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=http%3A%2F%2Fwww.vmall.com%2F&amp;lang=zh-cn&amp;themeName=blue">180****0065</a>
				<span> | </span>
				<a id="logoutUrl" href="https://hwid1.vmall.com/CAS/logout?reqClientType=26&amp;loginChannel=26000000&amp;countryCode=cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=http%3A%2F%2Fwww.vmall.com%2F&amp;lang=zh-cn&amp;themeName=blue">退出</a>
			</div> -->
			
			
			<div class="left1"> 
				<p class="s2"><span>|</span>
			  <span class="logo_text1">密保问题</span></p>
			</div>
			
			
			
				
			
		</div>					
	</div>
	<div class="menu wp mkcl">
		<div class="mnr">
			<ul class="nav mkcl">
				<!-- <li data-menu="1" class="">
				<a href="https://hwid1.vmall.com/CAS/portal/userCenter/index.html?reqClientType=26&amp;loginChannel=26000000&amp;countryCode=cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=http%3A%2F%2Fwww.vmall.com%2F&amp;lang=zh-cn&amp;themeName=blue">帐号与安全</a>
				
					
				
				</li> -->
				<li data-menu="2" class="sel"><a href="/ipersonal/info">个人信息</a>
				
					
						<p id="pl1" class="pl_visited"></p>
					
				
				</li>
				<li data-menu="2" class="sel"><a href="/ipersonal/question">密保问题</a>
				
					
						<p id="pl1" class="pl_visited"></p>
					
				
				</li>
				<li data-menu="2" class="sel"><a href="/ipersonal/safe">安全中心</a>
				
					
						<p id="pl1" class="pl_visited"></p>
					
				
				</li>
					<li data-menu="2" class="sel"><a href=""></a>
				
					
						<p id="pl1" class="pl_visited"></p>
					
				
				</li>	
			</ul>
			<b class="navsign" style="display:none"></b>
		</div>
				
	</div>
	


	<div class="wp">
		<div class="pannel">
		<form action="/ipersonal/addquestion" method="post" id="ss">

			<input type="hidden" value="<?php echo $id; ?>" name="uid">
	
			<div class="umsg">
				<p class="title" style="font-size:20px;margin-left:80px">设置密保问题</p>
				<p>
				    
					<div id="user"><input type="text" class="form-control" name="lpwd" placeholder="请设置您的密保问题"></div>
					<!-- <span class="uinfo"><label id="nickname"></label></span> -->								
			    </p>
			    
				
						
			 	<p>
										      							
					<div id="user"><input type="text" class="form-control" name="xpwd" id="xpwd" placeholder="请设置密保问题的答案"><div id="m" style="margin-top:10px;margin-left:10px"></div></div>								
				</p>
			    
				
				<p>
				  	<input type="submit"  style="width:120px;height:30px;margin-top:10px;margin-left:90px" value="保存密保问题">
				</p>
				</form>
			</div>
		</div>
	</div>


<script>

ec.ready(function() {
	 init();
});

function html_encode(str){  
    var s = "";  
    if (str.length == 0) return "";  
    s = str.replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/&/g, "&amp;").replace(/ /g, "&nbsp;").replace(/"/g, "&quot;");  
    return s;  
}  

function init()
{
	window.localInfo.nickName = "";
	window.localInfo.forumNickName="huafans01270023151";
	window.localInfo.gender = "-1";
	window.localInfo.province = "";
	window.localInfo.city = "";
	window.localInfo.formatBirthDate = "";
	window.localInfo.birthDate= "";

	
	$("#nickname").text(window.localInfo.nickName).html();
	$("#forumNickname").text(html_encode(window.localInfo.forumNickName)).html();
	displayGender(window.localInfo.gender);
	var city = window.localInfo.province+window.localInfo.city;
	if(localInfo.lang!="zh-cn")
	{
		city = getPingyin(city);
	}	
	$("#cityarea").text(html_encode(city)).html();
	$("#birthday").html(window.localInfo.formatBirthDate);

};
</script>

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

</body>
<script>

</script>
</html>