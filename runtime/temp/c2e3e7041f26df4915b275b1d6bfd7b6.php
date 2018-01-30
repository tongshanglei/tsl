<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Cart\index.html";i:1516324826;}*/ ?>
<!DOCTYPE html>
<html><head>
<meta charset="UTF-8">
<script>

var domainYY   = '//yy.vmall.com';
var domainRush = '//buy.vmall.com';

var domainEdit = 'https://customization.vmall.com';

var domainMain = 'https://www.vmall.com';
var domainWap = 'https://m.vmall.com';
var domainCart = '//cart.vmall.com';
var domainRemark = '//remark.vmall.com';
var domainShoppingConfig = '//addr.vmall.com';
var imagePath = 'https://res.vmallres.com/20171221/images';
var domainAccount = '//www.vmall.com';
var isUseAccount = 'false';
var upBindPhoneAddr = 'https://hwid1.vmall.com/oauth2/userCenter/bindAccount/bindMobileAccount_1.jsp?lang=zh-cn&amp;themeName=cloudTheme&amp;reqClientType=26';
var dominWapRecycle ='https://mobile.huishoubao.com/?pid=1056';
var domainCds = 'https://cds.vmall.com';
var scriptPath = 'https://res9.vmallres.com/20171221/js';
var domainAms ='https://act.vmall.com';
var domainUc ='https://member.vmall.com';

var pmsHttpDomain = '//product.vmall.com/';
</script>
<script>
(function(){
	try
	{
		cookieGet=function(a){var f=null;if(document.cookie&&document.cookie!=""){var d=document.cookie.split(";");for(var c=0;c<d.length;c++){var b=(d[c]||"").replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g,"");if(b.substring(0,a.length+1)==(a+"=")){var e=function(i){i=i.replace(/\+/g," ");var h='()<>@,;:\\"/[]?={}';for(var g=0;g<h.length;g++){if(i.indexOf(h.charAt(g))!=-1){if(i.startWith('"')){i=i.substring(1)}if(i.endWith('"')){i=i.substring(0,i.length-1)}break}}return decodeURIComponent(i)};f=e(b.substring(a.length+1));break}}}return f};
		var uri = location.href;
			//增加产品详情页判断 
			var prodReg = /\/\d+\.html/;
			var isProDetail = prodReg.test(uri);
			var isHonor = uri.indexOf(".com/honor") >0;
			var isHuawei = uri.indexOf(".com/huawei")>0;
			var isRecyle = uri.indexOf(".com/recycle")>0;
			if (uri == domainMain || uri == (domainMain + "/index.html")
					|| uri == (domainMain + "/") || isProDetail|| isHonor || isHuawei||isRecyle) {
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i
						.test(navigator.userAgent)) {
					var redirectWap = cookieGet("redirectWap");

					if (!redirectWap == "1" && !isProDetail) {
						if (isHonor) {
							window.location.href = domainWap + "/honor";
						} else if (isHuawei) {
							window.location.href = domainWap + "/huawei";
						} else if (isRecyle) {
							window.location.href = dominWapRecycle;
						} else {
							window.location.href = domainWap;
						}
					} else if (!redirectWap == "1" && isProDetail) {
						var wapUri = domainWap
								+ uri.substring(uri.indexOf("/product"));
						window.location.href = wapUri;
					}
				}
			}
	}catch (err){}
})();
</script>
<title>购物车</title>
<meta name="description" content="华为商城是华为旗下面向全国服务的电子商务平台官网，我们提供正品华为手机(华为Mate10、荣耀V10、华为P10、荣耀9、荣耀畅玩7X、华为Mate9、荣耀V9等)、平板电脑、配件等全新华为产品，品质保证！">  
<meta name="keywords" content="华为商城,华为官网,华为手机官网,华为平板电脑,华为笔记本">
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/index/cart/css/ec.css" rel="stylesheet" type="text/css">

<link href="/static/index/cart/css/main.css" rel="stylesheet" type="text/css">
<script src="/static/index/cart/js/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/index/cart/js/jquery-1.js"></script>
<script src="/static/index/cart/js/ec_002.js"></script> 
<script src="/static/index/cart/js/ec.js"></script> 
<script src="/static/index/cart/js/base.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="/static/index/cart/js/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script>
<script src="/static/index/cart/js/slider.js"></script>
<script src="/static/index/cart/js/swiper.js"></script>
<!--[if lt IE 9]><script src="https://res9.vmallres.com/20171221/js/common/html5shiv.js"></script> <![endif]-->
</head>



<body class="wide sc">
<style type="text/css">.btn-line-primary i,.category .category-info i,.footer-warrant-area .footer-warrant-logo span,.goods-rolling .grid-btn span,.home-channel-list li.s3 .icon-notice span,.hungBar-feedback i,.hungBar-feedback:after,.hungBar-for-help i,.hungBar-for-help:after,.hungBar-olcs-web i,.hungBar-olcs-web:after,.hungBar-top i,.i-mall-huaban .p-img span,.i-mall-prompt .user-info .user-info-detail a:before,.minicart-pro-item .p-choose i,.minicart-pro-item .p-tags:before,.search-bar .search-bar-form .button,.shortcut .s-dropdown .icon-minicart:before,.slogan li i{background:url(https://res.vmallres.com/20171221/images/echannel/icon-common.png)}.search-bar .search-bar-form .button{background-position:0 -25px}.minicart-pro-item .p-tags:before{background-position:-28px -99px}.goods-rolling .grid-btn.btn-prev span{background-position:-101px -1px}.goods-rolling .grid-btn.btn-next span{background-position:-112px -1px}.hungBar-top i{background-position:-123px -1px}.hungBar-feedback i{background-position:-151px -1px}.hungBar-for-help i{background-position:-166px -1px}.hungBar-olcs-web i{background-position:-136px -1px}.btn-line-primary i{background-position:-101px -23px}.slogan .s1 i{background-position:0 -151px}.slogan .s2 i{background-position:-94px -151px}.slogan .s3 i{background-position:-141px -151px}.slogan .s4 i{background-position:-47px -151px}.hungBar-for-help:after{background-position:-80px -199px}.hungBar-feedback:after{background-position:-40px -199px}.hungBar-olcs-web:after{background-position:0 -199px}.category .category-info i{background-position:-9px -214px}.category-index .category-list li.hover i,.category-index .category-list li:hover i{background-position:-2px -214px}.i-mall-huaban .p-img span{width:50px;height:50px;display:block}.i-mall-huaban .p-img span.img01{background-position:-50px 0}.i-mall-huaban .p-img span.img02{background-position:-50px -50px}.i-mall-huaban .p-img span.img03{background-position:-50px -100px}.footer-warrant-area .footer-warrant-logo span{width:79px;height:16px;display:block;background-position:-101px -45px}.home-channel-list li.s3 .icon-notice span{width:31px;height:13px;display:block;position:relative;top:17px;margin:0 auto;background-position:-17px -214px}.home-channel-list li.s2 li .p-img{height:40px;margin:0 auto;overflow:hidden;position:relative;width:40px}.home-channel-list li.s2 li .p-img img{position:absolute;width:auto;height:auto}.home-channel-list li.s2 li .p-img .img0{left:0}.home-channel-list li.s2 li .p-img .img1{left:-40px}.home-channel-list li.s2 li .p-img .img2{left:-80px}.home-channel-list li.s2 li .p-img .img3{left:-120px}.home-channel-list li.s2 li .p-img .img4{left:-160px}.home-channel-list li.s2 li .p-img .img5{left:-200px}.home-channel-list li.s3 .p-info li a span{display:inline-block;height:20px;margin-right:6px;overflow:hidden;position:relative;top:6px;width:20px}.home-channel-list li.s3 .p-info li a img{width:auto;height:auto;margin:0;position:absolute}.home-channel-list li.s3 .p-info li a .img0{left:-240px}.home-channel-list li.s3 .p-info li a .img1{left:-260px}.home-channel-list li.s3 .p-info li a .img2{left:-280px}
    .sc-total-btn input[type="submit"]{
        border:0px;
        background:#CA151E;
        color:#fff;
        width:100%;
        height:100%;
     }   
</style>
<div class="top-banner" id="top-banner-block"></div>
<!-- 20130605-qq-彩贝-start -->
<div class="qq-caibei-bar hide" id="caibeiMsg">
    <div class="layout">
        <div class="qq-caibei-bar-tips" id="HeadShow"></div>
        <div class="qq-caibei-bar-userInfo" id="ShowMsg"></div>
    </div>
</div>
<!-- 20130605-qq-彩贝-end -->

	<div class="shortcut">
    <div class="layout">
        <div class="s-sub">
            <ul>
                <li><a href="http://consumer.huawei.com/cn/" target="_blank">华为官网</a></li>
                <li><a href="http://www.honor.cn/" target="_blank">荣耀官网</a></li>
                <li><a href="http://club.huawei.com/" target="_blank">花粉俱乐部</a></li>
                <li><a href="https://www.vmall.com/help/index.html">帮助中心</a></li>
                <li><a href="https://www.vmall.com/priority" rel="nofollow">V码(优购码)</a></li>
                <li><a href="https://www.vmall.com/company" target="_blank">企业购</a></li>
                <li class="s-hwep hide" id="li-enterprise-preferential"></li>
                <li><a href="javascript:;" onclick="showSelectRegion()">Select Region</a></li>
                <li>
                    <div class="s-dropdown">
                        <div class="h">
                            <a class="icon-dropdown">更多精彩</a>
                        </div>
                        <div class="b">
                            <div class="dropdown-more">
                                <dl>
                                    <dt><a href="http://emui.huawei.com/cn/" target="_blank">EMUI</a></dt>
                                    <dt><a href="http://appstore.huawei.com/" target="_blank">应用市场</a></dt>
                                    <dt><a href="http://cloud.huawei.com/" target="_blank">华为终端云空间</a></dt>
                                    <dt><a href="http://developer.huawei.com/" target="_blank">开发者联盟</a></dt>
                                </dl>
                                <div class="code">
                                    <a href="https://www.vmall.com/appdownload" target="_blank">
                                        <img src="/static/index/cart/images/qrcode_vmall_new_app01.png">
                                    </a>
                                    <p>扫一扫，<a href="https://www.vmall.com/appdownload" target="_blank">下载客户端</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        
        <div class="s-main s-main-no-minicart">
            <ul>
                
                
                <li id="login_status" class="hide" style="display: list-item;">
                    <div id="top_login" class="header-toolbar">
                        <div class="s-dropdown">
                            <div class="h h-wide" id="up_loginName-hover">
                               <?php echo $user; ?> <?php echo $zhuce; ?>
                            </div>
                           
                        </div>
                    </div>
                </li>
                
                <li><a href="/iorderdetails/index/status/0" timetype="timestamp">我的订单</a></li>
                
            </ul>
        </div>
    </div>
</div>
<!-- 2017-06-19-捷径栏-end -->


<script type="text/javascript">
ec.mediaPath = "https://res.vmallres.com/pimages/";
//document.write('<script src="/account/status?'+(new Date()).getTime()+'"></s' + 'cript>');
</script>


<div class="header order-header">
    <div class="layout">
        <div class="left"> 
            <!-- 2017-06-19-logo-文字-start -->
            <div class="logo logo-word">
                <a href="/index/index" title="华为商城"><img src="/static/index/cart/images/20170703105852645577.png" alt="华为商城"></a>
                <span>我的购物车</span>
            </div>
            <!-- 2017-06-19-logo-文字-end -->
        </div>
        
        <div class="right">
            <!--头部 -->
            <!-- <div class="order-header">
                <div class="fr"> -->
                        <!--步骤条-三步骤 -->
                        <div class="progress-area progress-area-3">
                            <!--我的购物车 -->
                            <div id="progress-cart" class="progress-sc-area hide" style="display: block;">我的购物车</div>
                            <!--核对订单 -->
                            <div id="progress-confirm" class="progress-co-area hide">填写核对订单信息</div>
                            <!--成功提交订单 -->
                            <div id="progress-submit" class="progress-sso-area hide">成功提交订单</div>
                        </div>
                <!-- </div>
            </div> -->
            <script>ec.code.addService({showService : true , showTools : true , live800Url4Web : "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"});</script>
            
           
        </div>
    </div>
</div><script>
var bundleUrl= domainMain + "/member/bind/phone/redirect?back_url="+encodeURIComponent(window.location.href),
	authUrl = domainMain + "/authmember/accesstoken",
	accountCenterUrl = "https://hwid1.vmall.com/oauth2/userCenter/hwAccount?reqClientType=26&loginChannel=26000000&themeName=cloudTheme&lang=zh-cn";
</script>

<script>$("#progress-cart").show();</script>

<script>window._to = { start: new Date() };</script>
<script>document.body.className = "wide sc";</script>
<div class="layout ">

    <!--20170717-优惠券领取-end -->

    <!--20170721-未登录提醒-start -->
    <div id="login-prompt-cart" class="login-prompt" value="https://hwid1.vmall.com/CAS/remoteLogin?loginChannel=26000000&amp;reqClientType=26&amp;lang=zh-cn&amp;loginUrl=https%3A%2F%2Fhwid1.vmall.com%2FCAS%2Fportal%2Flogin.html&amp;service=https%3A%2F%2Fwww.vmall.com%2Faccount%2Facaslogin%3Furl%3D" style="display: none;">
	</div>
    <!--20170721-未登录提醒-end -->
    
    <!--20170717-优惠券领取-start -->
    <div id="whole-prompt-coupon" class="whole-prompt" style="display: none;">
		您有优惠券可领。<span id="couponBtn"></span>
    </div>

<div class="hr-20"></div>
   	<!--20170721-购物车-start -->
    <div class="sc-list">
        <!--20170721-购物车-标题-start -->
		<div class="sc-pro-title clearfix" id="shopping-cart-product-list">
			<label><i class="icon-choose-normal icon-choose-all" id="checkAll-top"></i></label>
			<ul class="clearfix">
                <li>商品</li> 
                <li>单价</li>
                <li>数量</li>
                <li>小计</li>
                <li>操作</li>
			</ul>
		</div>
        <!--20170721-购物车-标题-end -->
        
        <!--20170721-购物车-列表-start -->
		
		<!--20170721-购物车-列表-end -->
		
		
        <!--20170721-购物车-空数据-start-->
        <div id="cart-empty-msg" class="sc-empty" style="display: none;">
        	<span class="icon-minicart"></span>
            <p>您的购物车里什么也没有哦~</p>
            <a href="https://www.vmall.com/">去逛逛</a>
        </div> 
        <!--20170721-购物车-空数据-end-->
        
		<!--20170721-购物车-结算悬浮 -start -->
		<!--20170721-购物车-结算悬浮 -end -->
 <form id="cart-form" autocomplete="off" onsubmit="return check();" action="/iorder/index" method="get"> 
   <!-- <input name="state" value="1" type="hidden" />  -->
   <div id="cart-list">
    <!--product-list start--> 
    <div class="sc-pro">
     <!--单品start--> 
    <?php if(is_array($cart) || $cart instanceof \think\Collection || $cart instanceof \think\Paginator): if( count($cart)==0 ) : echo "" ;else: foreach($cart as $key=>$row): ?>
    
    <div class="sc-pro-list clearfix" datavalue="2601010003104" ">

          <i class="icon-choose-normal" id="icon-choose-488719139"  value="488719139" data-scode="2601010003104" data-type="1" is_bundle="0"><input type="checkbox" value="<?php echo $row['id']; ?>" name="cart_id[]" class="jisuan" ></i> 
     <div class="sc-pro-area " id="sc-pro-area-488719139"> 
        <div class="sc-pro-main clearfix">
            <!--至灰时添加class="disabled"-->
            <a href="" class="p-img"><img alt="" src="/goods/publicimg/<?php echo $row['pic']; ?>" /><span></span></a>
          <ul> 
            <li> <a href="" class="p-name" target="_blank" title=""><?php echo $row['shops_name']; ?></a> 
              <div class="report-errors hide" id="errorInfo-488719139" data-type="2" data-id="488719139"></div> 
            </li> 
            <li> 
              <div class="p-price"> 
               <span>&yen;&nbsp;<?php echo $row['price']; ?></span>
              </div>
            </li> 
            <li> 
              <div class="p-stock">
               <div class="p-stock-area"> 
                <input id="quantity-488719139" class="p-stock-text" value="<?php echo $row['num']; ?>" data-skuid="488719139" data-type="1" seed="cart-item-num" invalidreason="0" invalidleftval="1" sbomlimit="1"  productlimit="20" limit="1" style="ime-mode: disabled;" type="text" />
                <p class="p-stock-btn" id="p-stock-btn-area"><a id="pro-quantity-plus" href="javascript:;" class="jia jisuan" name="<?php echo $row['id']; ?>">+</a><a id="pro-quantity-minus" href="javascript:;" class="jian jisuan" name="<?php echo $row['id']; ?>">−</a></p>
                <!--<p class="p-stock-btn"><a href="javascript:;">+</a><a href="javascript:;">−</a></p>--> 
               </div>
               <div class="p-stock-tips" style="display: none;">
                <div class="tips-text limitstock-488719139" style="display: none;"></div>
               </div> 
              </div>
            </li> 
            <li class="p-price-total" id="p-price-total-488719139">&yen;<b name="<?php echo $row['id']; ?>"><?php echo $row['num']*$row['price']; ?></b>
            </li> 
            <li><a href="javascript:;" class="p-del" seed="cart-item-del" name="<?php echo $row['id']; ?>">删除</a>
            </li>
          </ul>
        </div>
     </div>
     <div id="locationForEnd"></div>
    </div>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    <!--单品end-->  


  <!-- 20170721-购物车-end --> 
  <div id="center_balance" class="">
   <div id="cart-total-area" class="sc-total-tool layout clearfix ">
    <div class="sc-total-control">
     <label><i class="icon-choose-normal icon-choose-all " id="checkAll-buttom"></i><a href="javascript:void(0)" class="allchoose jisuan">全选</a></i><a href="javascript:void(0)" class="nochoose jisuan">全不选</a><a href="javascript:void(0)" class="fchoose jisuan">反选</a></label>
     <a href="javascript:;" class="delete jisuan">删除</a>
    </div>
    <div class="sc-total-btn ">

     <a href="javascript:;" seed="cart-pay" ><input type="submit" value="立即结算"></a>
  </form> 

     <div class="sc-action-tips hide">
      <div class="tips-style-1 tips-area">
       <i></i>
       <div class="tips-text">
        <p>购物车中有库存不足商品，请处理后结算</p>
       </div>
       <s></s>
      </div>
     </div>
    </div>
    <div class="sc-total-price">
     <p><label>总计：</label><span id="sc-cartInfo-totalOriginalPrice">&yen;&nbsp;0</span><em><b>不含运费</b></em></p>
     
    </div>
   </div>
  </div> 
    <!-- 20170731-推荐搭配-start -->
    <div id="pro-recommend-area" class="pro-scroller" style="display: none;">
    	<div class="h">推荐搭配</div>
        <div class="b clearfix" id="pro-recommend-goods">
        <a class="pro-scroller-back swiper-button-prev disabled" href="javascript:;"></a>
        	<!--左边滚动按钮className：pro-scroller-back 不可点击className：pro-scroller-back-disabled ；右边滚动按钮className：pro-scroller-forward 不可点击className：pro-scroller-forward-disabled -->
            <div class="pro-list swiper-container" id="pro-list-recommend" style="height:240px;">
            	<!--ul的宽度等于li宽度*N -->
                <ul class="clearfix swiper-wrapper" id="pro-recommend-list"></ul>
            </div>
            <a class="pro-scroller-forward swiper-button-next" href="javascript:;"></a>
        </div>
    </div>
    <!-- 20170731-推荐搭配-end -->
    
    <!-- 20170721-热销推荐-start -->
    <div id="pro-selling-area" class="pro-scroller" style="display: none;">
    	<div class="h">热销推荐</div>
        <div class="b clearfix" id="pro-selling-goods">
        	<!--左边滚动按钮className：pro-scroller-back 不可点击className：pro-scroller-back-disabled ；右边滚动按钮className：pro-scroller-forward 不可点击className：pro-scroller-forward-disabled -->
        	<a class="pro-scroller-back disabled btn-prev swiper-button-prev" href="javascript:;"></a>
            <div class="pro-list swiper-container" id="pro-list-selling" style="height:240px;">
            	<!--ul的宽度等于li宽度*N -->
                <ul class="clearfix grid-list swiper-wrapper" id="pro-selling-list"></ul>
            </div>
            <a class="pro-scroller-forward btn-next swiper-button-next" href="javascript:;"></a>
        </div>
    </div>
    <!-- 20170721-热销推荐-end -->

    <!--20170721-删除记录-start -->
    <div class="pro-delete" id="pro-delete-recover" style="display: none;">
    	<div class="h">
        	<h2>已删除商品</h2>
        	<ul class="clearfix">
        		<li>商品</li>
				<li>数量</li>
				<li>金额</li>
				<li>操作</li>
        	</ul>
        </div>
        <div class="b" id="pro-recover-tb">
        </div>
		<div class="f">
			 <a id="pro-delete-shop-start" href="javascript:;" class="delete-expand">更多已删除商品</a><!--收缩class="delete-shrink"-->
			 <a id="pro-delete-shop-end" href="javascript:;" style="display:none" class="delete-shrink">收起已删除商品</a>
		</div>
    </div>
    <!-- 20170721-商品删除记录-end -->

</div>


<!-- 20170519-弹出层-优惠卷-end -->
<div class="hr-60"></div>
<script src="/static/index/cart/js/shoppingCartCoupon.js"></script>
<script src="/static/index/cart/js/shoppingCartProduct.js"></script>
<script src="/static/index/cart/js/shoppingCartPreferential.js"></script>
<script src="/static/index/cart/js/shoppingCartRecommend.js"></script>
<script src="/static/index/cart/js/shoppingCart.js"></script>
<script src="/static/index/cart/js/swiper.js"></script>
<!--口号-20121025 -->

 <?php echo widget('Index/footer'); ?>
</body>
<script>
    //减1
    $(".jian").click(function(){
            id=$(this).attr("name");
            ob=$(this);
            $.get("/cart/jian",{id:id},
            function(data){
                ob.parents("p").prev("input").val(data.num);
                ob.parents("li").next("li").html(data.tot);
        },'json');
     });
    //加1
    $(".jia").click(function(){
        id=$(this).attr("name");
        ob=$(this);
        $.get("/cart/jia",{id:id},function(data){
            ob.parents("p").prev("input").val(data.num);
            ob.parents("li").next("li").html(data.tot);
        },"json");
     });
     //删除单条
     $(".p-del").click(function(){
        id=$(this).attr('name');
        ob=$(this);
        $.get("/cart/del",{id:id},function(data){
            if(data==1){
                $("input[value='"+id+"']").parents("div.sc-pro-list").remove();  
            }
        },'json');
     });


      //全选
    $(".allchoose").click(function(){
      $(".sc-pro-list").find("i#icon-choose-488719139").each(function(){
        //查找input
        $(this).find(":checkbox").attr("checked",true);
      });
     
    });

    //全不选

    $(".nochoose").click(function(){
      $(".sc-pro-list").find("i#icon-choose-488719139").each(function(){
        //查找input
        $(this).find(":checkbox").attr("checked",false);
      });
    });

    //反选
    $(".fchoose").click(function(){
    $(".sc-pro-list").find("i#icon-choose-488719139").each(function(){
         if($(this).find(":checked").attr("checked")){
          //取消选中
          $(this).find(":checkbox").attr("checked",false);
        }else{
          //选中
          $(this).find(":checkbox").attr("checked",true);
        }
      });

      $("#ss").find("tr").each(function(){
        //取反
        if($(this).find(":checked").attr("checked")){
          //取消选中
          $(this).find(":checkbox").attr("checked",false);
        }else{
          //选中
          $(this).find(":checkbox").attr("checked",true);
        }
      });
    })

    //删除
    $(".delete").click(function(){
      arr=[];
      //获取选中数据的id  input中value值
      $(":checkbox").each(function(){
        if($(this).attr("checked")){
          //获取id
          id=$(this).val();
          // alert(id);
          //添加到数组里
          arr.push(id);
        }
      })

      // alert(arr);

      //Ajax请求
      $.get("/cart/delete",{id:arr},function(data){
        // alert(data);
        if(data==1){
          alert("删除成功");     
            //遍历 arr    
            for(var i=0;i<arr.length;i++){
              //根据id获取input  tr
              //  //value='"+arr[i]+"'
            
              $("input[value='"+arr[i]+"']").parents("div.sc-pro-list").remove(); 
            }
            
        }else{
          alert("请至少选择一个");
        }
      });

    })


    $(".jisuan").click(function(){
      arr=[];
      //获取选中数据的id  input中value值
      $(":checkbox").each(function(){
        if($(this).attr("checked")){
          //获取id
          id=$(this).val();
          // alert(id);
          //添加到数组里
          arr.push(id);
        }
      })

      //Ajax请求
      $.get("/cart/jisuan",{id:arr},function(data){
        // alert(data);
        $("#sc-cartInfo-totalOriginalPrice").html("¥ "+data);
      });

    })

    //点击结算时 确认有没有购买商品
    function check(){
            var obj = document.getElementsByName("cart_id[]");
            var objLen = obj.length;
            var objYN = false; // 是否有选择
            for (var i = 0; i < objLen; i++) {
                if (obj[i].checked==true) {
                    objYN = true;
                    break;
                }
            }
            if(objYN==false) {
                alert('请至少选择一件商品');
                return false;
            }else{
                return true;
            }
           
                    
    }
   

</script>
</html>