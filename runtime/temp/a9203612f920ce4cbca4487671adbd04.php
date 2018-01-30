<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\wamp\www\c\thinkphp5\public/../application/index\view\IndexPublic\header.html";i:1516324545;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <script>

        var domainYY = '//yy.vmall.com';
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
        var dominWapRecycle = 'https://mobile.huishoubao.com/?pid=1056';
        var domainCds = 'https://cds.vmall.com';
        var scriptPath = 'https://res9.vmallres.com/20171221/js';
        var domainAms = 'https://act.vmall.com';
        var domainUc = 'https://member.vmall.com';

        var pmsHttpDomain = '//product.vmall.com/';
    </script>
    <script>
        (function () {
            try {
                cookieGet = function (a) {
                    var f = null;
                    if (document.cookie && document.cookie != "") {
                        var d = document.cookie.split(";");
                        for (var c = 0; c < d.length; c++) {
                            var b = (d[c] || "").replace(/^(\s|\u00A0)+|(\s|\u00A0)+$/g, "");
                            if (b.substring(0, a.length + 1) == (a + "=")) {
                                var e = function (i) {
                                    i = i.replace(/\+/g, " ");
                                    var h = '()<>@,;:\\"/[]?={}';
                                    for (var g = 0; g < h.length; g++) {
                                        if (i.indexOf(h.charAt(g)) != -1) {
                                            if (i.startWith('"')) {
                                                i = i.substring(1)
                                            }
                                            if (i.endWith('"')) {
                                                i = i.substring(0, i.length - 1)
                                            }
                                            break
                                        }
                                    }
                                    return decodeURIComponent(i)
                                };
                                f = e(b.substring(a.length + 1));
                                break
                            }
                        }
                    }
                    return f
                };
                var uri = location.href;
                //增加产品详情页判断
                var prodReg = /\/\d+\.html/;
                var isProDetail = prodReg.test(uri);
                var isHonor = uri.indexOf(".com/honor") > 0;
                var isHuawei = uri.indexOf(".com/huawei") > 0;
                var isRecyle = uri.indexOf(".com/recycle") > 0;
                if (uri == domainMain || uri == (domainMain + "/index.html")
                    || uri == (domainMain + "/") || isProDetail || isHonor || isHuawei || isRecyle) {
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
            } catch (err) {
            }
        })();
    </script>
    <meta name="description"
          content="华为商城是华为旗下面向全国服务的电子商务平台官网，我们提供正品华为手机(华为Mate10、荣耀V10、华为P10、荣耀9、荣耀畅玩7X、华为Mate9、荣耀V9等)、平板电脑、配件等全新华为产品，品质保证！"/>
    <meta name="keywords" content="华为商城,华为官网,华为手机官网,华为平板电脑,华为笔记本"/>
    <meta name="mobile-agent" content="format=xhtml;url=http://m.vmall.com/">
    <meta property="wb:webmaster" content="f62bd8cc2f7d9778"/>
    <link rel="shortcut icon" href="https://www.vmall.com/favicon.ico"/>
    <link href="  __STATIC__/index/css/ec.core.base.min.css" rel="stylesheet" type="text/css">
    <link href="  __STATIC__/index/css/index.min.css" rel="stylesheet" type="text/css">
    <script src="https://res9.vmallres.com/20171221/js/common/jsapi.js?20141025" namespace="ec"></script>
    <script src="  __STATIC__/index/js/jquery-1.4.4.min.js"></script>
    <script src="  __STATIC__/index/js/ec.core.js"></script>
    <script src="  __STATIC__/index/js/ec.business.min.js"></script>
    <script src="  __STATIC__/index/js/base.min.js"></script>
    <script src="  __STATIC__/index/js/slider.min.js"></script>
    <script src="  __STATIC__/index/js/swiper.min.js"></script>
    <script src="  __STATIC__/index/js/jss.js"></script>
    <!--[if lt IE 9]>
    <script src="https://res9.vmallres.com/20171221/js/common/html5shiv.js"></script> <![endif]-->
</head>


<body class="wide">
<style type="text/css">.btn-line-primary i, .category .category-info i, .footer-warrant-area .footer-warrant-logo span, .goods-rolling .grid-btn span, .home-channel-list li.s3 .icon-notice span, .hungBar-feedback i, .hungBar-feedback:after, .hungBar-for-help i, .hungBar-for-help:after, .hungBar-olcs-web i, .hungBar-olcs-web:after, .hungBar-top i, .i-mall-huaban .p-img span, .i-mall-prompt .user-info .user-info-detail a:before, .minicart-pro-item .p-choose i, .minicart-pro-item .p-tags:before, .search-bar .search-bar-form .button, .shortcut .s-dropdown .icon-minicart:before, .slogan li i {
    background: url(  __STATIC__/index/images/icon-common.png)
}

.search-bar .search-bar-form .button {
    background-position: 0 -25px
}

.minicart-pro-item .p-tags:before {
    background-position: -28px -99px
}

.goods-rolling .grid-btn.btn-prev span {
    background-position: -101px -1px
}

.goods-rolling .grid-btn.btn-next span {
    background-position: -112px -1px
}

.hungBar-top i {
    background-position: -123px -1px
}

.hungBar-feedback i {
    background-position: -151px -1px
}

.hungBar-for-help i {
    background-position: -166px -1px
}

.hungBar-olcs-web i {
    background-position: -136px -1px
}

.btn-line-primary i {
    background-position: -101px -23px
}

.slogan .s1 i {
    background-position: 0 -151px
}

.slogan .s2 i {
    background-position: -94px -151px
}

.slogan .s3 i {
    background-position: -141px -151px
}

.slogan .s4 i {
    background-position: -47px -151px
}

.hungBar-for-help:after {
    background-position: -80px -199px
}

.hungBar-feedback:after {
    background-position: -40px -199px
}

.hungBar-olcs-web:after {
    background-position: 0 -199px
}

.category .category-info i {
    background-position: -9px -214px
}

.category-index .category-list li.hover i, .category-index .category-list li:hover i {
    background-position: -2px -214px
}

.i-mall-huaban .p-img span {
    width: 50px;
    height: 50px;
    display: block
}

.i-mall-huaban .p-img span.img01 {
    background-position: -50px 0
}

.i-mall-huaban .p-img span.img02 {
    background-position: -50px -50px
}

.i-mall-huaban .p-img span.img03 {
    background-position: -50px -100px
}

.footer-warrant-area .footer-warrant-logo span {
    width: 79px;
    height: 16px;
    display: block;
    background-position: -101px -45px
}

.home-channel-list li.s3 .icon-notice span {
    width: 31px;
    height: 13px;
    display: block;
    position: relative;
    top: 17px;
    margin: 0 auto;
    background-position: -17px -214px
}

.home-channel-list li.s2 li .p-img {
    height: 40px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    width: 40px
}

.home-channel-list li.s2 li .p-img img {
    position: absolute;
    width: auto;
    height: auto
}

.home-channel-list li.s2 li .p-img .img0 {
    left: 0
}

.home-channel-list li.s2 li .p-img .img1 {
    left: -40px
}

.home-channel-list li.s2 li .p-img .img2 {
    left: -80px
}

.home-channel-list li.s2 li .p-img .img3 {
    left: -120px
}

.home-channel-list li.s2 li .p-img .img4 {
    left: -160px
}

.home-channel-list li.s2 li .p-img .img5 {
    left: -200px
}

.home-channel-list li.s3 .p-info li a span {
    display: inline-block;
    height: 20px;
    margin-right: 6px;
    overflow: hidden;
    position: relative;
    top: 6px;
    width: 20px
}

.home-channel-list li.s3 .p-info li a img {
    width: auto;
    height: auto;
    margin: 0;
    position: absolute
}

.home-channel-list li.s3 .p-info li a .img0 {
    left: -240px
}

.home-channel-list li.s3 .p-info li a .img1 {
    left: -260px
}

.home-channel-list li.s3 .p-info li a .img2 {
    left: -280px
}</style>
<div class="top-banner" id="top-banner-block"></div>
<!-- 20130605-qq-彩贝-start -->
<div class="qq-caibei-bar hide" id="caibeiMsg">
    <div class="layout">
        <div class="qq-caibei-bar-tips" id="HeadShow"></div>
        <div class="qq-caibei-bar-userInfo" id="ShowMsg"></div>
    </div>
</div>
<!-- 20130605-qq-彩贝-end -->
<div class="top-banner" id="top-banner-block">	<!-- 顶部banner -->
    <div class="top-banner-max hide" id="top-banner-max" style="overflow: hidden;">
        <div class="top-banner-img">

            <a title="折叠" href="javascript:;" class="button-top-banner-min" id="top-banner-max-toggle">-</a>
        </div>
    </div>
    <div class="top-banner-min hide" id="top-banner-min" style="display: block; background-color: rgba(0, 0, 0, 0); overflow: hidden;">
        <div class="top-banner-img">
            <p style="font-size:0;">
                <a style="display:block;position:relative;width:1920px;text-align:center;left:50%;background-color:;margin-left:-960px;" title="荣耀" target="_blank" href="https://sale.vmall.com/rycompany.html"><img src="/uploads/<?php echo $advert['pic']; ?>" title="荣耀"></a>
            </p>
            <a title="展开" href="javascript:;" class="button-top-banner-max hide" id="top-banner-min-toggle">+</a>
            <a class="button-top-banner-close" href="javascript:;" title="关闭" id="top-banner-min-close">关闭</a>
        </div>
    </div>
    <!-- 顶部banner end -->
</div>
<div class="shortcut">
    <div class="layout">
        <div class="s-sub">
            <ul>
                <li><a href="/index/index" target="_blank">华为官网</a></li>
                <li><a href="javascript:;" >荣耀官网</a></li>
                <li><a href="javascript:;" >花粉俱乐部</a></li>
                <li><a href="javascript:;">帮助中心</a></li>
                <li><a href="javascript:;" rel="nofollow">V码(优购码)</a></li>
                <li><a href="javascript:;" >企业购</a></li>
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
                                    <dt><a href="javascript:;" target="_blank">EMUI</a></dt>
                                    <dt><a href="javascript:;" target="_blank">应用市场</a></dt>
                                    <dt><a href="javascript:;" target="_blank">华为终端云空间</a></dt>
                                    <dt><a href="javascript:;" target="_blank">开发者联盟</a></dt>
                                </dl>
                                <div class="code">
                                    <a href="javascript:;" target="_blank">
                                        <img src="  __STATIC__/index/images/qrcode_vmall_new_app01.png?20170221">
                                    </a>
                                    <p>扫一扫，<a href="https://www.vmall.com/appdownload" target="_blank">下载客户端</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div class="s-main ">
            <ul>
                <li id="unlogin_status">
                    <div id="top_unlogin" class="header-toolbar">
                        <!-- 2017-02-15-头部-工具栏-焦点为header-toolbar-item增加ClassName:hover -->
                        <div class="header-toolbar-item">
                            <div class="i-login">
                                <div class="h">
                                    <div class="">
                                        <?php echo $user; ?><?php echo $zhuce; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li id="login_status" class="hide">
                    <div id="top_login" class="header-toolbar hide">
                        <div class="s-dropdown">
                            <div class="h h-wide" id="up_loginName-hover">
                                <a class="icon-dropdown" href="javascript:;"
                                   target="_blank"><span id="up_loginName"></span></a>&nbsp;
                            </div>
                            <div class="b">
                                <!-- 2017-06-19-个人信息-start -->
                                <div class="dropdown-i-mall">
                                    <div class="i-mall-prompt clearfix">
                                        <div class="user-head fl">
                                            <div class="user-canvas ">
                                                <span id="user-vip-level-tips" class="icon-vip-level-0"></span>
                                                <div class="canvas-bg">
                                                    <div class="canvas-left">
                                                        <div id="canvas-left"
                                                             style="transform: rotateZ(-121deg);"></div>
                                                    </div>
                                                    <div class="canvas-right">
                                                        <div id="canvas-right"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="user-img">
                                                <a href="javascript:;"
                                                   rel="nofollow" timeType="timestamp" target="_blank">
                                                    <img id="customerPic"
                                                         src="  __STATIC__/index/images/img_not_logged_in.png" alt="默认头像"
                                                         imgpath=""/>
                                                </a>
                                            </p>
                                        </div>
                                        <div class="user-info fl">
                                            <a href="javascript:;"
                                               target="_blank">
                                                <div class="user-info-name" id="up_loginName_info"></div>
                                            </a>
                                            <div class="user-info-detail clearfix" id="vip-info">
                                                <a id="authentication_y" class="icon-realname hide">已实名</a>
                                                <a id="authentication_n"
                                                   href="javascript:;"
                                                   class="icon-realname disabled hide">未实名</a>
                                                <a class="icon-mail"
                                                   href="/message/index"
                                                   timeType="timestamp">站内信 <span id="top-newMsgCount"
                                                                                  class="hide">0</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="i-mall-uc">
                                        <dl class="clearfix">
                                            <dt><span class="fl">我的订单</span><a class="fr"
                                                                               href="/iorderdetails/index/status/0"
                                                                               timeType="timestamp">更多&gt;</a></dt>
                                        </dl>
                                        <div class="i-mall-uc-con">
                                            <dl class="clearfix">
                                                <dd>
                                                    <a href="javascript:;"
                                                       timeType="timestamp">待支付</a></dd>
                                                <dd>
                                                    <a href="javascript:;"
                                                       timeType="timestamp">待收货</a></dd>
                                                <dd>
                                                    <a href="javascript:;"
                                                       timeType="timestamp">待评价</a></dd>
                                                
                                                <dd>
                                                    <a href="javascript:;"
                                                       timeType="timestamp">旧机回收</a></dd>
                                            </dl>
                                        </div>
                                    </div>

                                    <div class="i-mall-huaban">
                                        <ul class="clearfix">
                                            <li>
                                                <p class="p-img">
                                                    <a href="javascript:;"
                                                       target="_blank" id="point">
                                                        <span class="img01"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">积分</p>
                                                <p class="p-price"><span id="userPointBalance">--&nbsp;</span></a>分</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="javascript:;"
                                                       target="_blank">
                                                        <span class="img02"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">优惠券</p>
                                                <p class="p-price"><span id="top-couponCount">--&nbsp;</span>张</p>
                                            </li>
                                            <li>
                                                <p class="p-img">
                                                    <a href="javascript:;"
                                                       target="_blank">
                                                        <span class="img03"></span>
                                                    </a>
                                                </p>
                                                <p class="p-dec">代金券</p>
                                                <p class="p-price"><span id="balanceAmount">--&nbsp;</span>元</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="i-out">
                                        <a href="javascript:;">退出登录</a>
                                    </div>
                                </div>
                                <!-- 2017-06-19-个人信息-end -->
                            </div>
                        </div>
                    </div>
                </li>

                <li><a href="/iorderdetails/index/status/0" timeType="timestamp">我的订单</a>
                </li>

                <li>
                    <div class="s-dropdown">
                        <div class="h h-wide" id="header-toolbar-minicart">
                            <a href="/cart/index" class="icon-minicart" rel="nofollow"
                               timeType="timestamp" target="blank">
                                <span>购物车</span>
                            </a>
                        </div>
                       
                            <!-- 2017-06-19-迷你购物车-end -->
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- 2017-06-19-捷径栏-end -->

<textarea id="selectRegion-tips" style="display: none;">
<!-- 20151105-全球语言弹出框-width:910px-start -->
<div class="box-content"><div class="box-lan-choose"><dl><dt>Asia Pacific</dt><dd class="box-button"><a
        class="box-choose" href="http://www.vmall.hk/">香港</a><a class="box-choose"
                                                                href="https://store.hihonor.com/in/?utm_source=vmall&amp;utm_medium=navigation&amp;utm_campaign=daily">India</a><a
        class="box-choose" href="http://www.vmall.my/">Malaysia</a></dd></dl><dl class="box-lan-choose-area"><dt>The United States</dt><dd
        class="box-button"><a class="box-choose" href="https://store.hihonor.com/us">United States</a></dd></dl><dl
        class="box-lan-choose-area"><dt>Europe</dt><dd class="box-button"><a class="box-choose"
                                                                             href="http://www.vmall.ru/">Россия</a><a
        class="box-choose" href="https://store.hihonor.com/fr">France</a><a class="box-choose"
                                                                            href="https://store.hihonor.com/de">Deutschland</a><a
        class="box-choose" href="https://store.hihonor.com/it">Italia</a><a class="box-choose"
                                                                            href="https://store.hihonor.com/es">España</a><a
        class="box-choose" href="https://store.hihonor.com/uk">UK</a></dd></dl><dl class="box-lan-choose-area"><dt>Middle East</dt><dd
        class="box-button"><a href="http://www.vmall.hk/" target="_self" textvalue="Saudi Arabia"></a><a
        class="box-choose" href="http://www.honorarabia.com/uae/">United Arab Emirates</a><a class="box-choose"
                                                                                             href="http://www.honorarabia.com/ksa/">Saudi Arabia</a></dd></dl></div></div>
    <!-- 20151105-全球语言弹出框-width:910px-end -->
</textarea>
<input type="hidden" value="" id="context"/>
<input type="hidden" value="https://member.vmall.com" id="domainUc"/>
<input type="hidden" value="vmall_index" id="vmall_index"/>
<!--<script src="https://res9.vmallres.com/20171221/js/echannel/base.min.js?20171028"></script>-->
<script type="text/javascript">
    ec.mediaPath = "https://res.vmallres.com/pimages/";
    //document.write('<script src="/account/status?'+(new Date()).getTime()+'"></s' + 'cript>');
</script>

<textarea id="micro-cart-tpl" class="hide">
<!--#macro microCartList data-->
    <!--#list data.itemList as item-->
    <!--#if (item.isBundle == '1') -->
    <!--#var lst = item.skuList[0];-->
    <!--#var skuId='#'+lst.skuId;-->
            <li class="minicart-pro-item">
                <div class="pro-info clearfix">
                    <!--#if (item.invalidCauseReason == 0) -->
                        <div class="p-choose"><i
                                class="<!--#if (item.checked)-->icon-choose<!--#else-->icon-choose-normal<!--/#if-->"
                                id="icon-choose-{#item.bundleId}" onclick="ec.minicart.click(this)"
                                value="{#item.bundleId}" type="{#item.productType}"></i></div>
                        <input class="hide" id="checkbox-{#item.bundleId}" name="bundleIds" value="{#item.bundleId}"
                               type="checkbox" checked="checked"/>
                        <input class="hide" id="quantity-{#item.bundleId}" value="{#item.quantity}"
                               data-type="{#item.productType}" type="text" checked="checked"/>
                    <!--#else-->
                        <div class="p-choose"><i class="icon-choose-normal" id="icon-choose-{#item.bundleId}"></i></div>
                        <input class="hide" id="checkbox-{#item.bundleId}" name="bundleIds" value="{#item.bundleId}"
                               type="checkbox"/>
                        <input class="hide" id="quantity-{#item.bundleId}" value="{#item.quantity}"
                               data-type="{#item.productType}" type="text"/>
                    <!--/#if-->

                    <div class="p-img">
                        <a href="/product/{#lst.id}.html{#skuId}" title="" target="_blank">
                            <img src="https://res.vmallres.com/pimages/{#lst.photoPath}78_78_{#lst.photoName}"
                                 alt="{#lst.prdSkuName}"/>
                        </a>
                    </div>

                    <div class="p-name">
                        <a href="/product/{#lst.id}.html{#skuId}" title="{#lst.prdSkuName}" target="_blank">{#lst.prdSkuName}</a>
                    </div>

                    <div class="p-dec">
                        <span class="p-slogan">
                            {#lst.miniCartSkuAttrValues}
                        </span>
                    </div>

                    <div class="p-status">
                        <!--#if (item.invalidCauseReason == 1) -->
                        <div class="p-tags">此商品不可购买</div>
                        <!--#elseif (item.invalidCauseReason == 2) -->
                        <div class="p-tags">此商品不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 3) -->
                        <div class="p-tags">此商品不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 4) -->
                        <div class="p-tags">此商品不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 5) -->
                        <div class="p-tags">此商品暂不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 6) -->
                        <div class="p-tags">此商品暂时缺货 </div>
                        <!--#elseif (item.invalidCauseReason == 7) -->
                        <div class="p-tags">限购{#item.invalidCauseLeftValue}件</div>
                        <!--#elseif (item.invalidCauseReason == 8) -->
                        <div class="p-tags">限购{#item.invalidCauseLeftValue}件</div>
                        <!--/#if-->

                        <div class="p-price">
                            <!--#if (item.originalPrice != item.bundlePrice) --><s>&yen;&nbsp;{#item.originalPrice.toFixed(2)}</s>&nbsp;&nbsp;
                            <!--/#if-->
                            <b>&yen;&nbsp;{#item.bundlePrice.toFixed(2)}</b><strong><em>x</em><span>{#item.quantity}</span></strong>
                        </div>
                    </div>
                </div>

                <div class="p-pack">
                    <span class="p-mini-tag-suit">套餐</span>
                    <a href="javascript:;"
                       title="<!--#list item.skuList as sku-->{#sku.prdSkuName}x{#sku.quantity}<!--/#list-->">
                        <!--#list item.skuList as sku-->
                        {#sku.prdSkuName}<em>x{#sku.quantity}</em>
                        <!--/#list-->
                    </a>
                </div>
            </li>
    <!--#else-->
    <!--#var skuId='#'+item.skuId;-->
    <!--#if (item.extendAccidentList && item.extendAccidentList.length > 0)-->
            <li class="minicart-pro-item minicart-pro-item-suit">
            <!--#else-->
            <li class="minicart-pro-item">
            <!--/#if-->
                <div class="pro-info clearfix">
                    <!--#if (item.invalidCauseReason == 0) -->
                        <div class="p-choose"><i
                                class="<!--#if (item.checked) -->icon-choose<!--#else-->icon-choose-normal<!--/#if-->"
                                id="icon-choose-{#item.skuId}" onclick="ec.minicart.click(this)" value="{#item.skuId}"
                                type="{#item.productType}"></i></div>
                        <input class="hide" name="skuIds" id="checkbox-{#item.skuId}" value="{#item.skuId}"
                               data-scode="{#item.sbomCode}" type="checkbox" checked="checked">
                        <input class="hide" id="quantity-{#item.skuId}" value="{#item.quantity}"
                               data-type="{#item.productType}" type="text" checked="checked"/>
                    <!--#else-->
                        <div class="p-choose"><i class="icon-choose-normal" id="icon-choose-{#item.skuId}"></i></div>
                        <input class="hide" name="skuIds" id="checkbox-{#item.skuId}" value="{#item.skuId}"
                               type="checkbox"/>
                        <input class="hide" id="quantity-{#item.skuId}" value="{#item.quantity}"
                               data-type="{#item.productType}" type="text"/>
                    <!--/#if-->

                    <div class="p-img">
                        <a href="/product/{#item.id}.html{#skuId}" title="" target="_blank">
                            <img src="https://res.vmallres.com/pimages/{#item.photoPath}78_78_{#item.photoName}"
                                 alt="{#item.prdSkuName}"/>
                        </a>
                    </div>

                    <div class="p-name">
                        <a href="/product/{#item.id}.html{#skuId}" title="{#item.prdSkuName}" target="_blank">{#item.prdSkuName}</a>
                    </div>

                    <div class="p-dec">
                        <span class="p-slogan">
                            {#item.miniCartSkuAttrValues}
                        </span>
                    </div>

                    <div class="p-status">
                        <!--#list item.giftList as gif--><input type="checkbox" name="giftId" class="hide"
                                                                value="{#gif.sbomCode}"/><!--/#list-->

                        <!--#if (item.invalidCauseReason == 1) -->
                        <div class="p-tags">此商品不可购买</div>
                        <!--#elseif (item.invalidCauseReason == 2) -->
                        <div class="p-tags">此商品不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 3) -->
                        <div class="p-tags">此商品不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 4) -->
                        <div class="p-tags">此商品不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 5) -->
                        <div class="p-tags">此商品暂不可购买 </div>
                        <!--#elseif (item.invalidCauseReason == 6) -->
                        <div class="p-tags">此商品暂时缺货 </div>
                        <!--#elseif (item.invalidCauseReason == 7) -->
                        <div class="p-tags">限购{#item.invalidCauseLeftValue}件</div>
                        <!--#elseif (item.invalidCauseReason == 8) -->
                        <div class="p-tags">限购{#item.invalidCauseLeftValue}件</div>
                        <!--/#if-->

                        <div class="p-price">
                            <!--#if (item.salePrice != item.normalPrice) --><s>&yen;&nbsp;{#item.normalPrice.toFixed(2)}</s>&nbsp;&nbsp;
                            <!--/#if-->
                            <b>&yen;&nbsp;{#item.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#item.quantity}</span></strong>
                        </div>
                    </div>
                </div>

                <!--#if ((item.extendAccidentList && item.extendAccidentList.length > 0) || (item.preferSkuList && item.preferSkuList.length > 0)) -->
                <div class="pro-other clearfix">
                    <ol>
                        <!--#list item.extendAccidentList as ea-->
                        <!--#if (ea.productType == 6) -->
                        <li>
                            <div class="p-title">
                                <span class="p-mini-tag-long">延保</span>{#ea.prdSkuName}
                            </div>
                            <input class="hide" name="extendIds" value="{#ea.skuId}" data-scode="{#ea.sbomCode}"
                                   type="checkbox"/>
                            <div class="p-price"><b>&yen;&nbsp;{#ea.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#item.quantity}</span></strong></div>
                        </li>
                        <!--/#if-->
                        <!--/#list-->

                        <!--#list item.extendAccidentList as ea-->
                        <!--#if (ea.productType == 7) -->
                        <li>
                            <div class="p-title">
                                <span class="p-mini-tag-extend">碎屏保</span>{#ea.prdSkuName}
                            </div>
                            <input class="hide" name="accidentIds" value="{#ea.skuId}" data-scode="{#ea.sbomCode}"
                                   type="checkbox"/>
                            <div class="p-price"><b>&yen;&nbsp;{#ea.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#item.quantity}</span></strong></div>
                        </li>
                        <!--/#if-->
                        <!--/#list-->

                        <!--#if (item.preferSkuList && item.preferSkuList.length > 0)-->
                        <input type="hidden" id="preferIds_{#item.skuId}"
                               value="<!--#list item.preferSkuList as ea-->{#ea.sbomCode},<!--/#list-->"
                               skuids="<!--#list item.preferSkuList as ea-->{#ea.skuId},<!--/#list-->"/>
                        <!--/#if-->
                        <!--#list item.preferSkuList as ea-->
                        <li>
                            <div class="p-title p-add">
                                <span class="p-mini-tag-extend">加价购</span>{#ea.prdSkuName}
                            </div>
                            <div class="p-price">
                                <!--#if (ea.salePrice != ea.normalPrice) --><s>&yen;&nbsp;{#ea.normalPrice.toFixed(2)}</s>&nbsp;&nbsp;
                                <!--/#if-->
                                <b>&yen;&nbsp;{#ea.salePrice.toFixed(2)}</b><strong><em>x</em><span>{#ea.quantity}</span></strong>
                            </div>
                        </li>
                        <!--/#list-->
                    </ol>
                </div>
                <!--/#if-->

                <!--#if (item.giftList && item.giftList.length > 0)-->
                <input type="hidden" id="gift_sbomCodes_{#item.skuId}"
                       value="<!--#list item.giftList as gift-->{#gift.skuId},<!--/#list-->"/>
                <div class="p-pack">
                    <span class="p-mini-tag-suit">配</span>
                    <a href="javascript:;" style="cursor: default;"
                       title="<!--#list item.giftList as gift-->{#gift.prdSkuName}x{#gift.quantity*item.quantity},<!--/#list-->">
                        <!--#list item.giftList as gift-->
                        {#gift.prdSkuName}<em>x{#gift.quantity*item.quantity}</em>
                        <!--/#list-->
                    </a>
                </div>
                <!--/#if-->
            </li>
    <!--/#if-->
    <!--/#list-->
    <!--/#macro-->
</textarea>

<textarea class="hide" id="ec-binding-phone">
    <div id="ec-binding-phone-1" class="ec-binding-phone-box hide">
        <!-- 20141011-绑定安全手机号提示-start -->
        <div class="safetyPhone-prompt-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p>为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号，<em style="font-color:red;">不绑定将不能提交订单。</em></p>
            </div>
        </div>
        <div class="box-custom-button">
            <a class="box-button-style-3" href="javascript:;" id="ec-binding-phone-url-1"><span>立即绑定</span></a></a>
        </div>
        <!-- 20141011-绑定安全手机号提示-end -->
    </div>
    <div id="ec-binding-phone-2" class="ec-binding-phone-box hide">
        <!-- 20141424-绑定安全手机号提示-start -->
        <div class="safetyPhone-prompt-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p>请您在新打开的页面中完成绑定安全手机号操作。</p>
                <p>完成绑定后请根据您的情况点击下面的按钮。</p>
            </div>
        </div>
        <div class="box-custom-button">
            <a class="box-button-style-3" href="javascript:;" onclick="ec.binding.resetShow()"><span>绑定成功</span></a><a
                class="box-change box-button-style-3" href="javascript:;" id="ec-binding-phone-url-2"><span>重新绑定</span></a>
        </div>
        <!-- 20141424-绑定安全手机号提示-end -->
    </div>
    <div id="ec-binding-phone-3" class="ec-binding-phone-box hide">
        <!-- 20141424-安全手机号绑定提示失败-start -->
        <div class="box-prompt-error-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p class="tal f12">对不起，您未成功绑定手机号。</p>
                <p class="tal f12 black">为了您在商城正常购物、保护您的权益，请您绑定一个手机号码以享受华为商城的所有服务。</p>
            </div>
        </div>
        <div class="box-custom-button">
            <a href="javascript:;" class="box-button-style-3" onclick="ec.binding.showOk()" id="ec-binding-phone-url-3"><span>立即绑定</span></a>
        </div>
        <!-- 20141424-安全手机号绑定提示失败-end -->
    </div>
    <div id="ec-binding-phone-4" class="ec-binding-phone-box hide">
        <!-- 20150824-手机号绑定未绑定-start -->
        <div class="safetyPhone-prompt-area">
            <div class="h">
                <i></i>
            </div>
            <div class="b">
                <p class="tal f12">为了给您提供更好的服务，建议您将登录的邮箱帐号进行手机号码绑定，绑定后邮箱帐号和绑定的手机号码都可以作为登录帐号；<em style="font-color:red;">自</em><em
                        id="bindEndDate4State4" style="font-color:red;"></em><em
                        style="font-color:red;">号起，若不绑定将不能提交订单。</em></p>
            </div>
        </div>
        <div>&nbsp;</div>
        <div class="box-custom-button">
            <a class="box-change box-button-style-3" href="javascript:;"
               id="ec-binding-phone-url-4"><span>立即绑定</span></a>
            <a class="box-button-style-1" href="javascript:;" onclick="ec.binding.closeState4();"><span>下次再说</span></a>
        </div>
        <!-- 20150824-安全手机号绑定提示失败-end -->
    </div>
    <div id="ec-binding-phone-5" class="ec-binding-phone-box hide">
        <!-- 20141424-安全手机号绑定提示失败-start -->
        <div class="box-prompt-error-area">
            <div class="h">
                <i></i>
            </div>
            <div class="a">
                <p class="tal f12">您输入的手机已被注册，您可以选择使用手机号重新登录或者重新绑定手机！</p>
            </div>
        </div>
        <div>&nbsp;</div>
        <div class="box-custom-button">
            <a class="box-button-style-3" href="https://www.vmall.com/account/login"
               id="ec-binding-phone-reLogin-5"><span>重新登录</span></a>')
            <a class="box-change box-button-style-3" href="javascript:;"
               id="ec-binding-phone-url-5"><span>重新绑定</span></a>
        </div>
        <!-- 20141424-安全手机号绑定提示失败-end -->
    </div>
</textarea><!-- 2017-02-15-头部-start -->
<div class="header">
    <div class="layout">
        <div class="left">
            <!-- 2017-02-15-logo-start -->
            <div class="logo"><a href="/index/index" target="block" title="Vmall.com - 华为商城"><img
                    src="  __STATIC__/index/images/logo20170801113951.png" alt="Vmall.com - 华为商城"/></a></div>
            <!-- 2017-02-15-logo-end -->

            <!-- 2017-06-19-导航-start -->
            <div class="naver">
                <ul class="clearfix">
                    <ul id="naver-list">
                        <?php foreach($cates as $vo): ?>
                        <li id="huawei">
                            <a href="/ilist/index/id/<?php echo $vo['id']; ?>"
                               onclick="_paq.push(['trackLink','点击首页活动导航第1位', 'link', '']);ec.code.addAnalytics({hicloud:true});"

                    >

                                <span><?php echo $vo['name']; ?></span>

                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <script>
                        $(function () {
                            $('#naver-list li').hover(function () {
                                $(this).addClass('hover');
                            }, function () {
                                $(this).removeClass('hover');
                            });

                        });
                    </script>
                </ul>
            </div>
            <!-- 2017-06-19-导航-end -->
        </div>
        <div class="right">
            <!-- 2017-02-15-搜索条-焦点为search-form增加className:hover -start -->
            <div class="search-bar relative" id="searchBar-area">
                <div class="search-bar-form" id="search-bar-form">
                    <form method="get" onsubmit="return search(this)">
                        <input type="text" class="text" maxlength="200" id="search-kw" autocomplete="off"/>
                        <input type="submit" class="button" value="搜索"/>
                        <input type="hidden" id="channelType" name="channelType" value="0"/>
                        <input type="hidden" id="default-search" value="HUAWEI Mate 10 荣耀V10"/>
                    </form>
                </div>
                <div class="search-bar-key" id="search-bar-key">
                    <div class="searchBar-key">
                        <a href="javascript:;" target="_blank">HUAWEI Mate 10</a>
                        <a href="javascript:;" target="_blank">荣耀V10</a>
                    </div>
                </div>
                <div id="search-history" class="search-bar-history hide">
                    <p>
                        <label>历史记录</label><span id="cleanUp" class="search-history-btn">清空历史数据</span>
                    </p>
                    <ul id="search-history-list"></ul>
                </div>
            </div>
            <!-- 2017-02-15-搜索条-end -->
        </div>
    </div>
</div><!-- 2017-02-15-头部-end -->