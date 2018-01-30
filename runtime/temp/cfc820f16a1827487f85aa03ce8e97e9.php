<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Order\cj.html";i:1516110769;}*/ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>华为商城2017新年庆抽奖活动</title>
<link rel="stylesheet" type="text/css" href="/static/index/cj/css/style.css" />
</head>
<body class="keBody">
<h1 class="keTitle">华为商城2017新年庆抽奖活动</h1>
<div class="kePublic">
<!--效果html开始-->
<div class="rotary">
	<div class="rotaryArrow" id="rotaryArrow"></div>
	
	<div class="result" id="result">
		<p id="resultTxt"></p>
		<!-- <a href="/index/index">确定</a> -->
		<a href="javascript:" id="resultBtn" title="关闭">关闭</a>
	</div>
</div>


<script type="text/javascript" src="/static/index/cj/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/static/index/cj/js/jquery.rotate.min.js"></script>
<script type="text/javascript">
$(function(){
	var $rotaryArrow = $('#rotaryArrow');
	var $result = $('#result');
	var $resultTxt = $('#resultTxt');
	var $resultBtn = $('#result');

	$rotaryArrow.click(function(){
		var data = [0, 1, 2, 3, 4, 5, 6, 7];
		data = data[Math.floor(Math.random()*data.length)];
		switch(data){
			case 1: 
				rotateFunc(1,87,'¥1 代金券');
				break;
			case 2: 
				rotateFunc(2,43,'¥5 代金券');
				break;
			case 3: 
				rotateFunc(3,134,'¥10 代金券');
				break;
			case 4: 
				rotateFunc(4,177,'很遗憾，这次您未抽中奖，继续加油吧');
				break;
			case 5: 
				rotateFunc(5,223,'¥20 代金券');
				break;
			case 6: 
				rotateFunc(6,268,'¥50 代金券');
				break;
			case 7: 
				rotateFunc(7,316,'¥30 代金券');
				break;
			default:
				rotateFunc(0,0,'很遗憾，这次您未抽中奖，继续加油吧');
		}
	});
	var text;
	var rotateFunc = function(awards,angle,text){  //awards:奖项，angle:奖项对应的角度
		$rotaryArrow.stopRotate();
		$rotaryArrow.rotate({
			angle: 0,
			duration: 5000,
			animateTo: angle + 1440,  //angle是图片上各奖项对应的角度，1440是让指针固定旋转4圈
			callback: function(){
				$resultTxt.html(text);
				$result.show();
			}
		});
	};
	$resultBtn.click(function(){
		text=$resultTxt.html();
		location.href=("/coupons/add/jiang/"+text+"");
	});
});
</script>
<!--效果html结束-->
<div class="clear"></div>
</div>
<div class="keBottom">
<!-- <p class="keTxtP">科e互联网页特效集锦---更多特效请访问 <a class="keUrl" href="http://www.erdangjiade.com" target="_blank">www.erdangjiade.com</a></p>
<p class="keTxtP">本站导航：
<a href="http://www.erdangjiade.com/" target="_blank" class="cor_bs">网站建设</a> | 
<a href="http://www.erdangjiade.com/material/" target="_blank" class="cor_bs">网页素材</a> | 
<a href="http://www.erdangjiade.com/effects/" target="_blank" class="cor_bs">网页特效</a> | 
<a href="http://www.erdangjiade.com/share/" target="_blank" class="cor_bs">设计分享</a> | 
<a href="http://www.erdangjiade.com/tutorial/" target="_blank" class="cor_bs">建站教程</a> | 
<a href="http://www.erdangjiade.com/model/" target="_blank" class="cor_bs">网站模版</a> | 
<a href="http://www.erdangjiade.com/appreciate/" target="_blank" class="cor_bs">酷站赏析</a>
</p>
<p class="keTxtP">＊尊重他人劳动成果，转载请自觉注明出处！注：此代码为【科e整理/原创特效】仅供学习交流，请勿用于商业用途。
<a target="_blank" href="http://wp.qq.com/wpa/qunwpa?idkey=a7df3558c291e0407375b9ad649d96a6e507286ffeb0650c65a221d1500a0779" class="button red" title="北京网站建设,网页特效QQ交流群-科e互联">加入QQ交流群</a></p>
</div> -->
</body>
</html>