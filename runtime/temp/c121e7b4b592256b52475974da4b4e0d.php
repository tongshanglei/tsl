<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Personal\index.html";i:1516625223;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页_个人中心_华为商城</title>
  <link href="/static/index/personal/css/ec.css" rel="stylesheet" type="text/css">
  <link href="/static/index/personal/css/main.css" rel="stylesheet" type="text/css">
  
</head>
<body>
  <?php echo widget('Index/header'); ?>
  <div id="base_index" class="mc-index">
    
<div class="hr-10"></div>
<div class="g">
    <!--面包屑 -->
<div class="breadcrumb-area fcn"><a href="/index/index/">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a href="/index/index/">我的商城</a></em><em id="pathPoint"></em><span id="pathTitle"></span></div>   
</div>
<div class="hr-10"></div>

    <div class="g">
        <div class="fr u-4-5">
        <div class="fl mc-middle">
            <!-- 20170824-我的商城-用户信息-start -->
            <div class="mc-user">
                <div class="clearfix">
                    <div class="mc-user-card fl">
                        <div class="user-head fl">
                            <div class="user-canvas "> <!--未登录时添加class="hide"-->
                                <span class="icon-vip-level-0" id="levelIcon"></span>
                                <div class="canvas-bg">
                                    <div class="canvas-left"><div style="transform: rotateZ(-125deg); background: rgba(0, 0, 0, 0) linear-gradient(rgb(240, 92, 32) 0%, rgb(245, 133, 85) 100%) repeat scroll 0% 0%;"></div></div><!--起始度数-121deg为0%，增加度数到0deg时半圈结束-->
                                    <div class="canvas-right"><div style="transform: rotateZ(-180deg);"></div></div><!--起始度数为为-180deg，增加度数到-59deg时为100%半圈结束-->
                                </div>
                            </div>
                            <p class="user-img">
                                                 <?php if($s): ?><img src="/userinfo/publicimg/<?php echo $s; ?>">
                                                 <?php else: ?><img src="/userinfo/publicimg/wuyanzu.jpg"><?php endif; ?>
                            </p>
                        </div>
                        <div class="mc-user-info fl ">
                            <div class="name"><?php echo $username; ?></div>
                            <a href="https://www.vmall.com/member/point" class="link">查看会员权益&nbsp;&gt;</a>
                            <a href="/ipersonal/info" class="mc-user-btn" target="">帐号中心</a>
                        </div>
                        <div class="mc-user-info fl hide"><!--未登录-->
                            <a href="#" class="mc-user-login-btn">登录／注册</a>
                            <p>登陆后可查看您的会员权益</p>
                        </div>
                    </div>
                    
                    <input id="myUserScores" value="0" type="hidden">
                    <input id="myGradeCode" value="0" type="hidden">
                    <input id="minScores" value="0" type="hidden">
                    <input id="nextNeedScores" value="100" type="hidden">
        
                    <div class="mc-user-huaban fl">
                        <ul class="clearfix">
                            <li>
                                <a href="https://www.vmall.com/member/newpoint?t=1514864556448" class="p-icon p-icon-1"></a>
                                <p class="p-dec">积分</p>
                                <p class="p-price"><span id="balanceicon_myCenter" class="">5</span>分</p>
                            </li>
                            <li>
                               <a href="https://www.vmall.com/member/coupon?t=1514864556448" class="p-icon p-icon-2"></a>
                                <p class="p-dec">优惠券</p>
                                <p class="p-price"><span id="couponicon_myCenter">5</span>张</p>
                            </li>
                            <li>
                                <a href="https://www.vmall.com/member/balance?t=1514864556448" class="p-icon p-icon-3"></a>
                                <p class="p-dec">代金券</p>
                                <p class="p-price"><span id="balanceAmount_myCenter" class="">0</span>元</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hr-12"></div>
                <div class="mc-user-portal">
                    <ul class="clearfix">
                        <li class="portal-icon-1">
                            <a href="https://www.vmall.com/member/order?t=1514864556448&amp;type=unpaid"><span id="un_payment"><em>1</em></span>待支付</a>
                        </li>
                        <li class="portal-icon-2">
                            <a href="https://www.vmall.com/member/order?t=1514864556448&amp;type=send"><span id="un_received"></span>待收货</a>
                        </li>
                        <li class="portal-icon-3">
                            <a href="https://www.vmall.com/member/order?t=1514864556448&amp;type=nocomment"><span id="un_remark"></span>待评价</a>
                        </li>
                        <li class="portal-icon-4">
                            <a href="https://www.vmall.com/member/exchange?t=1514864556448"><span></span>退换货</a>
                        </li>
                        <li class="portal-icon-5">
                            <a href="https://www.vmall.com/member/recycle/index/aihuishou?t=1514864556448"><span></span>回收单</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- 20170824-我的商城-用户信息-end -->

            <!-- 20170822-我的商城-我的消息-start -->
            <div class="mynews">
                <div class="hr-30"></div>
                <div class="mc-title">
                    <h3>我的消息</h3>
                </div>
               
                     <div class="mynews-list"><!--1.到货通知 2.发货通知 3.待支付 4.左图右文 5.全图 6、电子发票提醒 其中4.5是系统消息-->
                                <!--左图右文-->
                                <div class="mynews-list-area my_center service_type_4 ">
                                    <div class="m-image"><input value="{&quot;wapUrl&quot;:&quot;https://m.vmall.com/product/501317311.html&quot;,&quot;webUrl&quot;:&quot;https://www.vmall.com/product/501317311.html&quot;,&quot;appUrl&quot;:&quot;https://mw.vmall.com/product/501317311.html?prdId=501317311&amp;page=productDetail&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2017122911341040.png&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2017122911347005.png&quot;}" type="hidden"><img src="/static/index/personal/images/2017122911341040.png"></div>
                                    <div class="m-title">
                                        <em class="m-info">荣耀9青春版</em>
                                        <em class="m-name">为你推荐</em>
                                        <em class="m-time">2017-12-29 12:09</em>
                                    </div>
                                    <p class="m-detail">全屏四摄 正反都美</p>
                                    <a href="https://www.vmall.com/product/501317311.html" class="button-1 mynews-list-btn" target="_blank">查看详情</a>
                                </div>
                                
                            
                                <!--全图-->
                                <div class="my_center">
                                    <input value="{&quot;wapUrl&quot;:&quot;https://msale.vmall.com/smarthome.html&quot;,&quot;webUrl&quot;:&quot;https://sale.vmall.com/smarthome.html&quot;,&quot;appUrl&quot;:&quot;https://asale.vmall.com/smarthome.html&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2017122209568800.jpg&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2017122209561452.jpg&quot;}" type="hidden">
                                    <a href="https://sale.vmall.com/smarthome.html" class="banner " target="_blank"> 
                                        <img src="/static/index/personal/images/2017122209568800.jpg">
                                    </a>
                                </div>
                            
                                <!--左图右文-->
                                <div class="mynews-list-area my_center service_type_4 ">
                                    <div class="m-image"><input value="{&quot;wapUrl&quot;:&quot;https://m.vmall.com/product/874162621.html&quot;,&quot;webUrl&quot;:&quot;https://www.vmall.com/product/874162621.html&quot;,&quot;appUrl&quot;:&quot;https://mw.vmall.com/product/874162621.html?prdId=874162621&amp;page=productDetail&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2017111507409218.png&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2017111507402841.png&quot;}" type="hidden"><img src="/static/index/personal/images/2017111507409218.png"></div>
                                    <div class="m-title">
                                        <em class="m-info">华为智能手表 保时捷联合设计</em>
                                        <em class="m-name">为你推荐</em>
                                        <em class="m-time">2017-12-29 12:05</em>
                                    </div>
                                    <p class="m-detail">每周一、三、五10:08开售</p>
                                    <a href="https://www.vmall.com/product/874162621.html" class="button-1 mynews-list-btn" target="_blank">查看详情</a>
                                </div>
                                
                            
                                <!--左图右文-->
                                <div class="mynews-list-area my_center service_type_4 ">
                                    <div class="m-image"><input value="{&quot;wapUrl&quot;:&quot;https://m.vmall.com/product/357339492.html&quot;,&quot;webUrl&quot;:&quot;https://www.vmall.com/product/357339492.html&quot;,&quot;appUrl&quot;:&quot;https://mw.vmall.com/product/357339492.html?prdId=357339492&amp;page=productDetail&quot;,&quot;webPicUrl&quot;:&quot;/recommendmsg/2017111502261611.png&quot;,&quot;mobilePicUrl&quot;:&quot;/recommendmsg/2017111502260022.png&quot;}" type="hidden"><img src="/static/index/personal/images/2017111502261611.png"></div>
                                    <div class="m-title">
                                        <em class="m-info">HUAWEI Mate 10 Pro</em>
                                        <em class="m-name">为你推荐</em>
                                        <em class="m-time">2017-12-29 12:10</em>
                                    </div>
                                    <p class="m-detail">新品放量购</p>
                                    <a href="https://www.vmall.com/product/357339492.html" class="button-1 mynews-list-btn" target="_blank">查看详情</a>
                                </div>
                                
                            
                        
                        <div class="f">
                             <a href="javascript:;" class="button-fold button-fold-shrink hide">收起我的消息</a><!--展开class="button-fold-expand"-->
                             <a href="javascript:;" class="button-fold button-fold-expand hide">更多历史消息</a>
                        </div>  
                   </div>
            </div>
            <!-- 20170822-我的商城-我的消息-end -->

            <!-- 20170826-我的商城-最近浏览-start -->
            <div class="mc-rolling" style="display: none;">
                <div class="mc-title">
                     <h3>最近浏览</h3>
                </div>
                <div class="hr-20"></div>
                <div class="goods-rolling relative swiper-container" id="mc-rolling-history">
                    <ul class="grid-list clearfix swiper-wrapper"></ul>
                    <div class="grid-btn btn-prev swiper-button-prev disabled"><span></span></div>
                    <div class="grid-btn btn-next swiper-button-next"><span></span></div>
                </div>
            </div>
            <!-- 20170825-我的商城-最近浏览-end -->
            
        </div>
        
        <div class="fr mc-right"><a href="https://sale.vmall.com/welcome.html" target="_blank"><img src="/static/index/personal/images/20170922190748339.jpg"> </a><div class="hr-20"></div><div class="mc-title"><h3>会员推荐</h3></div><div class="hr-20"></div><div class="mc-recommend-banner">                             <a href="https://www.vmall.com/privilege" target="_blank"><img src="/static/index/personal/images/20170922191552609.jpg"></a><a href="https://www.vmall.com/privilege" target="_blank"><img src="/static/index/personal/images/20170922191631928.jpg"></a><a href="https://www.vmall.com/privilege" target="_blank"><img src="/static/index/personal/images/2017092219165256.jpg"></a><a href="https://www.vmall.com/recycle?url=%3Fpid%3D1032" target="_blank"> <img src="/static/index/personal/images/20170922191711677.jpg"></a></div></div>
        



<script src="/static/index/personal/js/index.js"></script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="/static/index/personal/js/jquery.js" charset="utf-8"></script><script>(function(){var
 time = 0,el = document.getElementById('jsapi_loader1');if(!el || 
(el.readyState && 'complete' != el.readyState)){ if(time<10){ 
setTimeout(arguments.callee,30); time++; }else{ logger.error('load the 
script of id jsapi_loader1 fail!');} return; 
}ol._setLoadStatus("jquery.form","complete");})();</script><script id="jsapi_loader2" loadtype="insert" type="text/javascript" src="/static/index/personal/js/ajax.js" charset="utf-8"></script><script>(function(){var
 time = 0,el = document.getElementById('jsapi_loader2');if(!el || 
(el.readyState && 'complete' != el.readyState)){ if(time<10){ 
setTimeout(arguments.callee,30); time++; }else{ logger.error('load the 
script of id jsapi_loader2 fail!');} return; 
}ol._setLoadStatus("ajax","complete");})();</script>
<script src="/static/index/personal/js/zhima.js"></script>
<script src="/static/index/personal/js/swiper_002.js"></script>
<script>
ec.ready(function() {
    
    //加载最近浏览历史
    ec.product.history.load(function(list){
        var html = [], p;
        $(".fl.u-1-5").after($("#history-ftl").val());
        if(!list || list.length ==0)
        {
            $(".mc-rolling").hide();
            $(".mc-rolling ul").html("");
            return;
        }
        for(var i = 0 ; i < list.length ; i++)
        {
            p = list[i];
            html.push('<li class="grid-items swiper-slide"><a class="thumb" 
target="_blank" href="/product/'+p.id+'.html" 
title="'+p.briefName+'">');
            html.push('<p class="grid-img"><img 
src="'+ec.mediaPath+p.photoPath+'428_428_'+p.photoName+'" 
alt="'+p.briefName+'"/></p>');
            html.push('<h3 
class="grid-title"><span>'+p.name+'</span></h3>');
            html.push('</a></li>');
        }
        $(".mc-rolling ul").html(html.join(""));
        $(".mc-rolling").show();
       
        var len = $('.swiper-slide').length;
         if(len<=4){
            $('.swiper-button-next').addClass('disabled');
            $('.swiper-button-prev').addClass('disabled');
         }else{
            $('.swiper-button-next').removeClass('disabled');
         }
          //是否需要左右滚动
            var mySwiper = new Swiper('.swiper-container', {
                slidesPerView: 4,
                slidesPerGroup: 4,
            });
            //  左边箭头
            $('.swiper-button-prev').click(function(){
        //      插件向左切换效果
                mySwiper.swipePrev();
            })
        //  右边箭头
            $('.swiper-button-next').click(function(){
                mySwiper.swipeNext();
            })
        
    } );
});
//遍历type=4 左图右文extendParam下面的值
$(".service_type_4 input").each(function(){
    var jsonStr_4=$(this).val();
    if(jsonStr_4 != ""){
        var obj_4 = JSON.parse(jsonStr_4);
        $(this).parent().parent().find(".m-image 
img").attr("src","https://res0.vmallres.com/pimages/"+obj_4.webPicUrl);
        
$(this).parent().parent().children("a:last-child").attr("href",obj_4.webUrl);

    }
})
//遍历type=5 全图extendParam下面的值
$(".my_center input").each(function(){
    var jsonStr_5=$(this).val();
    if(jsonStr_5 != ""){
        var obj_5 = JSON.parse(jsonStr_5);
        $(this).parent().find("a 
img").attr("src","https://res0.vmallres.com/pimages/"+obj_5.webPicUrl);
        $(this).parent().find("a").attr("href",obj_5.webUrl);
    }
})

//遍历type=1 到货通知extendParam下面的值
$(".mynews-list-area-2 input").each(function(){
    var jsonStr_1=$(this).val();
    if(jsonStr_1 != ""){
        var obj_1 = JSON.parse(jsonStr_1);
        
$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/product/"+obj_1.prdId+".html");

    }
})
//遍历type=2 发货通知extendParam下面的值
$(".mynews-list-area-1 input").each(function(){
    var jsonStr_2=$(this).val();
    if(jsonStr_2 != ""){
        var obj_2 = JSON.parse(jsonStr_2);
        
$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_2.orderCode);

    }
})
//遍历type=3 代付款extendParam下面的值
$(".mynews-list-area-3 input").each(function(){
    var jsonStr_3=$(this).val();
    if(jsonStr_3 != ""){
        var obj_3 = JSON.parse(jsonStr_3);
        
$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_3.orderCode);

    }
})
//遍历type=6 电子发票extendParam下面的值
$(".mynews-list-area-4 input").each(function(){
    var jsonStr_6=$(this).val();
    if(jsonStr_6 != ""){
        var obj_6 = JSON.parse(jsonStr_6);
        
$(this).parent().children("a:last-child").attr("href","https://www.vmall.com/member/order-"+obj_6.orderCode);

    }
})

//  展开收起效果
    var mynewsLenth = $('.mynews-list .my_center').length;
    //  超过五个就隐藏掉
    if(mynewsLenth > 5){
        $('.button-fold-expand').show();
        overHide();
    }
    function overHide(){
        for(var i=5;i<mynewsLenth;i++){
            $('.mynews-list .my_center').eq(i).hide();
        }
     }
    //  展开更多消息
    $('.button-fold-expand').click(function(){
        $('.button-fold-expand').hide();
        $('.mynews-list .my_center').show();
        $('.button-fold-shrink').show();
    })
    //  收起更多消息
     $('.button-fold-shrink').click(function(){
        $('.button-fold-shrink').hide();
        $('.mynews-list .my_center').show();
        $('.button-fold-expand').show();
        overHide();
    })
    
</script>
</div>
        <div class="fl u-1-5">
            

<script type="text/javascript">
<!--

//-->
$(document).ready(function(){
    var userIdO2O = ec.util.cookie.get("uid");
    if(window.sessionStorage)
    {
        if(!sessionStorage.userIdO2O || $.trim(sessionStorage.userIdO2O) == "" || sessionStorage.userIdO2O!=userIdO2O)
        {
                if(getO2OType())
                {
                    sessionStorage.setItem("userIdO2O",userIdO2O);
                    changeO2OClass(sessionStorage.getItem("O2OType"));
                }
        }
        else
        {
            changeO2OClass(sessionStorage.getItem("O2OType"));
        }
        
    }
});

function getO2OType()
{
    var rst = false;
    new ec.ajax().get({
         url : "/o2o/load.json",
         timeout : 10000,
         async: false,
         dataType : "json",
         successFunction : function(json){
             if(json.success){
                 sessionStorage.clear();
                 var verifyStatus = json.o2oUserInfoRsp.verifyStatus;
                 sessionStorage.setItem("O2OType",$.trim(verifyStatus));
                 rst = true;
             }
         }
     });
    return rst;
}

function changeO2OClass(O2OType)
{
    if(O2OType == 2)
     {
         $("#li-o2o").removeClass();
     }
     else
     {
         if(!$("#li-o2o").hasClass("hide"))
         {
             $("#li-o2o").addClass("hide")
         }
     }
}


</script>
<!-- 20170823-左边菜单-start -->
 <?php echo widget('Index/leftlist'); ?>
<!-- 20170823-左边菜单-end -->
        </div>
    </div>
    <div class="hr-80"></div>
    
</div>
  <?php echo widget('Index/footer'); ?>
</body>
</html>
