<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Orderdetails\collect.html";i:1516074308;}*/ ?>
<?php echo widget('Index/header'); ?>
<title>我的订单_个人中心_华为商城</title>
<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/index/orderdetails/css/ec.core.base.min.css" rel="stylesheet" type="text/css">

<link href="/static/index/orderdetails/css/main.min.css" rel="stylesheet" type="text/css">
<script src="/static/index/orderdetails/js/jsapi.js.下载" namespace="ec"></script><!--[if lte IE 6]>
<script>ol.isIE6 = true;</script><![endif]--><!--[if IE 7]>
<script>ol.isIE7 = true;</script><![endif]--><!--[if IE 8]>
<script>ol.isIE8 = true;</script><![endif]-->
<script src="/static/index/orderdetails/js/jquery-1.4.4.min.js.下载"></script>
<script src="/static/index/orderdetails/js/ec.core.js.下载"></script>
<script src="/static/index/orderdetails/js/ec.business.min.js.下载"></script>
<script src="/static/index/orderdetails/js/base.min.js.下载"></script>
<script id="jsapi_loader0" loadtype="insert" type="text/javascript"
        src="./static/index/orderdetails/js/box-min.js.下载"></script>
<script>(function () {
    var time = 0, el = document.getElementById('jsapi_loader0');
    if (!el || (el.readyState && 'complete' != el.readyState)) {
        if (time < 10) {
            setTimeout(arguments.callee, 30);
            time++;
        } else {
            logger.error('load the script of id jsapi_loader0 fail!');
        }
        return;
    }
    ol._setLoadStatus("ec.box/box-min.js", "complete");
})();</script>
<script src="/static/index/orderdetails/js/slider.min.js.下载"></script>
<script src="/static/index/orderdetails/js/swiper.min.js.下载"></script>
<!--[if lt IE 9]>
<script src="https://res9.vmallres.com/20180112/js/common/html5shiv.js"></script> <![endif]-->
</head>

<body class="wide">
<style type="text/css">.btn-line-primary i, .category .category-info i, .footer-warrant-area .footer-warrant-logo span, .goods-rolling .grid-btn span, .home-channel-list li.s3 .icon-notice span, .hungBar-feedback i, .hungBar-feedback:after, .hungBar-for-help i, .hungBar-for-help:after, .hungBar-olcs-web i, .hungBar-olcs-web:after, .hungBar-top i, .i-mall-huaban .p-img span, .i-mall-prompt .user-info .user-info-detail a:before, .minicart-pro-item .p-choose i, .minicart-pro-item .p-tags:before, .search-bar .search-bar-form .button, .shortcut .s-dropdown .icon-minicart:before, .slogan li i {
    background: url(/static/index/orderdetails/images/icon-common.png)
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

.category-index .category-list li.active i, .category-index .category-list li.active i {
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
<!-- 20130605-qq-彩贝-start -->

<!-- 20130605-qq-彩贝-end -->

<!-- 2017-02-15-头部-start -->
<!-- 2017-02-15-头部-end -->
<script type="text/javascript">
    ec.load("ec.slider", {
        loadType: "lazy",
        callback: function () {
            $("#ec-erweima").slider({
                width: 91, //必须
                height: 96, //必须
                style: 1, //1显示分页，2只显示左右箭头,3两者都显示
                pause: 120000, //间隔时间
                auto: true
            });
        }
    });
    ec.ready(function () {
        $("#search-kw").val('');
        if (typeof (topSearchKeyword) != "undefined") {
            var keyword = topSearchKeyword;
            if (keyword != null && keyword != "") {
                $("#search-kw").val(ec.freemarkerDecode(keyword));
                $("#search-bar-key").css("display", "none");
            }
        }

        $('#search-history').bind({
            mouseover: function () {
                $("#search-history").show();
            },
            mousedown: function (e) {
                $("#search-kw").blur();
                $("#search-bar-key").hide();
                $("#search-history").show();
                if ($(e.target)[0].nodeName == 'A') {
                    $("#search-kw").val(decodeURIComponent($(e.target).attr('data-value')));
                    //如果是IE浏览器，则需要重新执行跳转
                    if (ec.checkBrowerIE()) {
                        window.location.href = $(e.target).attr('href');
                    }
                } else if ($(e.target)[0].nodeName == 'SPAN') {
                    ec.search.deleteSearchHistory();
                    $("#search-history").hide();
                }
            }

        });

        $("#search-kw").bind({
            focus: function () {
                $("#search-bar-key").hide();
                //隐藏搜索历史
                $("#search-history").hide();
                if ($("#search-kw").val().trim() == '') {
                    //查询用户搜索历史
                    ec.search.querySearchHistory();
                }
            },
            blur: function () {
                if ($("#search-kw").val().trim() == '') {
                    $("#search-bar-key").show();
                } else {
                    $("#search-bar-key").hide();
                }
                //隐藏搜索历史
                $("#search-history").hide();
            },
            keydown: function () {
                //隐藏搜索历史
                $("#search-history").hide();
            },
            keyup: function () {
                if ($("#search-kw").val().trim() == '') {
                    ec.search.querySearchHistory();
                } else {
                    //隐藏搜索历史
                    $("#search-history").hide();
                }
            }
        });

        ec.ui.hover("#searchBar-area", {captureInput: true});
    });
    ec.code.addService({
        showService: true,
        showTools: true,
        live800Url4Web: "http://robotim.vmall.com/live800/chatClient/chatbox.jsp?companyID=8922&configID=10&location=B_002&chatfrom=web&channelType=Vmall%e5%95%86%e5%9f%8e%e7%94%b5%e8%84%91%e7%ab%af"
    });

    //头部logo点击上报
    function pushLogoClickMsg(adid, url) {
        var value = {
            "UID": ec.util.cookie.get("uid"),
            "TID": getPtid(),
            "TIME": getTime(),
            "CONTENT":
                {
                    "ADID": adid,
                    "URL": url,
                    "click": "1"
                }
        };
        ec.code.addAnalytics({hicloud: true});
        _paq.push(["trackLink", "300020101", "link", value]);
    }

    //类别横向点击上报
    $("#naver").find("li").find("a").click(function () {
        var url = $(this).attr("href");
        var name = $(this).find("span").html();
        var value = {
            "UID": ec.util.cookie.get("uid"),
            "TID": getPtid(),
            "TIME": getTime(),
            "CONTENT":
                {
                    "name": name,
                    "URL": url,
                    "click": "1"
                }
        };
        ec.code.addAnalytics({hicloud: true});
        _paq.push(["trackLink", "300020201", "link", value]);
    });

    $(".s1.fl").find("a").click(function () {
        var url = $(this).attr("href");
        var name = $(this).html().substring(0, $(this).html().length - 1);
        var value = {
            "UID": ec.util.cookie.get("uid"),
            "TID": getPtid(),
            "TIME": getTime(),
            "CONTENT":
                {
                    "name": name,
                    "URL": url,
                    "click": "1"
                }
        };
        ec.code.addAnalytics({hicloud: true});
        _paq.push(["trackLink", "300020201", "link", value]);
    });

    $(".s2.fl.clearfix").find("a").click(function () {
        var url = $(this).attr("href");
        var name = $(this).html();
        var value = {
            "UID": ec.util.cookie.get("uid"),
            "TID": getPtid(),
            "TIME": getTime(),
            "CONTENT":
                {
                    "name": name,
                    "URL": url,
                    "click": "1"
                }
        };
        ec.code.addAnalytics({hicloud: true});
        _paq.push(["trackLink", "300020201", "link", value]);
    });

    $(".grid-list.clearfix").find("li").find("a").live("click", function () {
        var num = $(this).parent().parent().attr("id").substring(6, 7);
        var index = $("#zxnav_" + num + "_prolist li").index($(this).parent());
        var skuid = $("#zxnav_" + num + "_skuIds").val();
        var skuids = skuid.split(",");
        var skuId = skuids[index];
        var value = {
            "UID": ec.util.cookie.get("uid"),
            "TID": getPtid(),
            "TIME": getTime(),
            "CONTENT":
                {
                    "SKUID": skuId,
                    "URL": this.href,
                    "click": "1"
                }
        };
        ec.code.addAnalytics({hicloud: true});
        _paq.push(["trackLink", "300020202", "link", value]);
    });
</script>
<script>
    //显示导航下拉菜单商品数据
    function showProList(id) {
        //查询标志
        var flag = $("#" + id + "_flag").val();
        var skuIds = $("#" + id + "_skuIds").val();

        var mediaPath = "https://res.vmallres.com/pimages/";
        //未查询过且有商品时才能执行
        if (skuIds != "" && flag == "no") {
            skuIds = skuIds.substring(0, skuIds.length - 1);
            var skuIdArr = skuIds.split(",");

            skuIdArr = removeDuplicatedItem(skuIdArr);

            //标记标志位
            $("#" + id + "_flag").val("yes");
            $.ajax({
                url: "/querySbomInfo.json?skuIdsStr=" + skuIds,
                async: true,//使用异步的Ajax请求
                type: "GET",
                dataType: "json",
                timeout: 10000,
                success: function (json) {
                    if (json.success) {
                        var infoMap = json.sbomInfoMap;
                        var html = '';
                        for (var i = 0; i < skuIdArr.length; i++) {
                            var skuId = skuIdArr[i];
                            var sbomInfo = json.sbomInfoMap[skuId];
                            if (sbomInfo != null) {
                                //商品图片URL
                                var imgPath = mediaPath + sbomInfo.photoPath + "142_142_" + sbomInfo.photoName;
                                //商品URL
                                var urlPath = "/product/" + sbomInfo.disPrdId + ".html";
                                //商品名称
                                //var proName = sbomInfo.sbomName;
                                var proName = $('#name_' + skuId).val();
                                var price;
                                //取得价格显示方式
                                var priceMode = sbomInfo.priceMode;
                                if (priceMode == 2 || sbomInfo.price == 0) {
                                    price = "<span>暂无报价</span>";
                                } else {
                                    price = "&yen;" + sbomInfo.price;
                                }
                                //一级分类导航名称
                                var oneNavName = $("#" + id + "_name").val();
                                var onShowName = "分类导航_" + oneNavName + "_" + sbomInfo.sbomCode;
                                //var clickContent="_paq.push(['trackLink','"+onShowName+"', 'link', ' ']);ec.code.addAnalytics({hicloud:true});";
                                html += '<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)" >';
                                html += '     <a class="thumb" target="_blank" href="' + urlPath + '">';
                                html += '         <p class="grid-img">';
                                html += '             <img alt="" src="' + imgPath + '">';
                                html += '          </p>';
                                html += '          <div class="grid-title">' + proName + '</div>';
                                html += '          <p class="grid-price">' + price + '</p>';
                                html += '       </a>';
                                html += '  </li>';
                            }
                        }
                        $("#" + id + "_prolist").html(html);
                    }
                },
                error: function () {

                }
            });
        }
    };

    //定位当前推荐商品
    function fixCurrent(obj) {
        $(obj).addClass('current');
    }

    //离开当前推荐商品
    function leaveCurrent(obj) {
        $(obj).removeClass('current');
    }

    //去重
    function removeDuplicatedItem(ar) {
        var ret = [];
        for (var i = 0, j = ar.length; i < j; i++) {
            if (ret.indexOf(ar[i]) === -1) {
                ret.push(ar[i]);
            }
        }
        return ret;
    }

    (function () {
        /*
                *   专区导航下拉列表
                *   @version 1.2.0
                *   @update 2017-05-08
                *
                * */
        var $nav = $('.naver li'),
            $naverSub = $('.naver-sub'),
            navLen = $nav.length,
            navWidth = $nav.width(),
            navListCount = null,
            timer = null;

        $nav.bind({
            mouseenter: function () {
                {
                    var count = $(this).attr('data-id') || null,
                        $naverSubItem = $('#naverSub0' + count),
                        $this = $(this),
                        openItem = null;

                    if ($naverSubItem.length <= 0) {
                        $naverSub
                            .children()
                            .slideUp(200);
                        clearTimeout(timer);
                        return;
                    }
                    navListCount = count;

                    $naverSub
                        .children()
                        .each(function (index, item) {
                            if ($(this).css('display') == 'block') {
                                openItem = true;
                            }
                        });

                    if (timer) clearTimeout(timer);

                    if (openItem) {
                        showProList('zxnav_' + count);
                        $naverSub.show();
                        $naverSubItem
                            .show()
                            .unbind('mouseenter')
                            .mouseleave(function (e) {
                                itemsLeave.call(this, e, $naverSubItem);
                            })
                            .siblings()
                            .hide();

                    } else {
                        showProList('zxnav_' + count);
                        timer = setTimeout(function () {
                            $naverSub
                                .show();
                            $naverSubItem
                                .slideDown(200)
                                .unbind('mouseenter')
                                .mouseleave(function (e) {
                                    itemsLeave.call(this, e, $naverSubItem);
                                })
                            ;
                        }, 200);
                    }
                }
            },
            mouseleave: function (e) {
                var $target = $(e.target),
                    eX = e.pageX,
                    eY = e.pageY,
                    oX = $target.offset().left,
                    oY = $target.offset().top,
                    yy = oY - eY,
                    xx = oX - eX,
                    xx2 = eX - (oX + navWidth),
                    index = $nav.index(this),
                    $naverSubItem = $('#naverSub0' + navListCount);

                if (timer) clearTimeout(timer);

                $naverSubItem.mouseenter(function () {
                    if (timer) clearTimeout(timer);
                });

                //确认上划//第一个左滑动时//最后一个右滑动时
                if (yy <= 10 && yy > 0 || (xx <= 10 && xx > 0 && index == 0) || (xx2 <= 10 && xx2 > 0 && index == navLen - 1)) {
                    $naverSubItem.unbind('mouseleave');
                    $naverSub
                        .children()
                        .slideUp(300)
                } else {
                    timer = setTimeout(function () {
                        $naverSubItem.unbind('mouseenter');
                        $naverSub
                            .children()
                            .slideUp(300)
                    }, 200)
                }
            }
        });

        function itemsLeave(e, obj) {
            var $target = $(e.target),
                eX = e.pageX,
                eY = e.pageY,
                oX = $target.offset().left,
                oY = $target.offset().top,
                _this = $(this);

            clearTimeout(timer);
            //确认上划 并保证上划区域排除logo区域
            if ((oY - eY) <= 10 && (oY - eY) > 0 && (eX - oX) > 300) {
                _this
                    .show();
            } else {
                timer = setTimeout(function () {
                    _this.slideUp(200);
                }, 200)
            }
        }
    })();
</script>

<div id="base_index" class="">

    <div class="hr-10"></div>
    <div class="g">
        <!--面包屑 -->
        <div class="breadcrumb-area fcn"><a href="/index/index">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a
                href="/ipersonal/index">我的商城</a></em><em id="pathPoint">&nbsp;&gt;&nbsp;</em><span
                id="pathTitle">我的订单</span></div>
    </div>
    <div class="hr-10"></div>

    <div class="g">
        <div class="fr u-4-5"><!-- 20141212-栏目-start -->
            <div class="section-header">
                <div class="fl">
                    <h2><span>我的收藏</span></h2>
                </div>
                <!--  <div class="fr">
                     <div class="ec-tab" id="ec-tab">
                         <ul>
                             <li class="current"><a href="javascript:;" onclick="ec.member.orderList.seltime(this,1);"><span>最近六月内订单<em id="count-seltime-0" style="display: none;">0</em></span></a></li>
                             <li><a href="javascript:;" onclick="ec.member.orderList.seltime(this,0);"><span>六个月前订单<em id="count-seltime-1" style="display: none;">0</em></span></a></li>
                         </ul>
                         <div class="ec-tab-arrow" style="width: 124px; left: 0px; overflow: hidden;"></div>
                     </div>
                 </div> -->
            </div>
            <!-- 20141212-栏目-end -->
            <!-- 20141222-我的订单-订单类别-start -->
            <div class="myOrder-cate" id="myOrder-cate">

            </div>
            <!-- 20141222-我的订单-订单类别-end -->
            <!-- 20141222-我的订单-列表-start -->
            <div class="myOrder-record" id="myOrders-list-content">
                <!-- 20141222-我的订单-列表-订单合并-start -->
                <div class="myOrder-control" id="myOrder-control-bottom-up" style="display: none;">
                    <label class="inputbox" for="checkAllBox">
                        <input class="checkbox" type="checkbox" id="checkAllBox" name="checkAllBox"><span>全选</span>
                    </label>
                    <a href="javascript:;" class="button-operate-merge-pay" id="topButton"
                       onclick="ec.member.orderList.mergePay();"><span>合并支付</span></a>
                </div>
                <!-- 20141222-我的订单-列表-订单合并-end -->

                <div class="list-group-title">
                    <table border="0" cellpadding="0" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="col-pro">商品</th>
                            <th class="col-price">单价/元</th>
                            <th class="col-operate">操作</th>
                        </tr>
                        </thead>
                    </table>
                </div>
                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$row): ?>
                <div class="list-group" id="list-group">
                    <div class="list-group-item">
                        <div class="o-info">

                        </div>
                        <div class="o-pro">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="col-pro-img"><p class="p-img"><a title="good_name"
                                                                                href="/idetails/index/id/<?php echo $row['id']; ?>"
                                                                                target="_blank"
                                                                                onclick="pushProMsg(837995605,&#39;300130101&#39;)"><img
                                            class="nocomment-1001010038904" alt="good_name"
                                            src="/goods/publicimg/<?php echo $row['pic']; ?>"></a></p></td>
                                    <td class="col-pro-info"><p class="p-name"><a title="<?php echo $row['name']; ?>" target="_blank"
                                                                                  class="nocomment-1001010038904"
                                                                                  href="/idetails/index/id/<?php echo $row['id']; ?>"
                                                                                  onclick="pushProMsg(837995605,&#39;300130101&#39;)"><?php echo $row['name']; ?></a>
                                    </p></td>
                                    <td class="col-price"><em>¥</em><span><?php echo $row['price']; ?></span></td>
                                    <td rowspan="3" class="col-operate">
                                        <p class=""><a href="javascript:;" class="ajaxcollect" name="<?php echo $row['id']; ?>"
                                                             ">删除</a>
                                        </p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <script>
                    $('.ajaxcollect').click(function(){
                        ob=$(this);
                        id=ob.attr('name');

                        $.post('/iorderdetails/DelCollect',{gid:id},function(data){
                            if(data){
                                ob.parents('#list-group').remove();

                            }
                        })
                    })
                </script>
                <!-- 20141222-我的订单-列表-订单合并-start -->
                <div class="myOrder-control hide" id="myOrder-control-bottom" style="display: none;">
                    <label class="inputbox" id="bottomCheckBoxDiv" name="bottomCheckBoxDiv">
                        <!-- 20140819-我的订单-合并付款-start -->
                        <input type="checkbox" class="checkbox" id="bottomCheckAllBox"
                               name="bottomCheckAllBox"><span>全选</span>
                        <!-- 20140819-我的订单-合并付款-end -->
                    </label>
                    <a href="javascript:;" class="button-operate-merge-pay" id="bottomButton"
                       onclick="ec.member.orderList.mergePay();"><span>合并支付</span></a>
                </div>
                <!-- 20141222-我的订单-列表-订单合并-end -->
                <!--<div class="list-group-page">-->
                    <!--<div class="pager" id="list-pager" style="display: none;"></div>-->
                <!--</div>-->
            </div>
            <!-- 20141222-我的订单-列表-end -->
            <input type="hidden" id="colid" value="1">
            <input type="hidden" id="checkid" value="canceled">
            <input type="hidden" id="cancelReson" value="">
            <form action="https://www.vmall.com/member/order?t=1515982004809#" method="get" id="gotoUrl"></form>
            <textarea id="delAlert-tpl" class="hide">   &lt;div class="box-tips-area"&gt;
        &lt;p&gt;1：取消订单将作退款处理，一旦取消，不能恢复。&nbsp;&nbsp;&lt;/p&gt;
        &lt;p&gt;2：取消日起5个工作日内退款完成，是否确定操作。&lt;/p&gt;
    &lt;/div&gt;&lt;!-- 20140722-退换货-延保tips-end --&gt;
    &lt;div class="box-button"&gt;
        &lt;a class="box-ok" href="javascript:;"&gt;&lt;span&gt;确定&lt;/span&gt;&lt;/a&gt;
        &lt;a class="box-cancel" href="javascript:;"&gt;&lt;span&gt;取消&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
</textarea>

            <textarea id="msg-delorder-ok" class="hide">    &lt;div class="box-prompt-success-area"&gt;
        &lt;div class="h"&gt;
            &lt;i&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class="b"&gt;
            &lt;p&gt;温馨提示：订单删除成功&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="box-custom-button"&gt;
        &lt;a class="box-ok box-button-style-1" href="javascript:;"&gt;&lt;span&gt;确定&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
</textarea>

            <textarea id="cancel-msg-tpl" class="hide"> &lt;table width="100%" cellspacing="0" cellpadding="0" border="0"&gt;
            &lt;tbody&gt;
            &lt;tr&gt;
                &lt;td class="box-cl"&gt;&lt;/td&gt;
                &lt;td class="box-cc"&gt;
                    &lt;div class="box-content" style="height: auto;"&gt;

                        &lt;div class="box-content"&gt;
                            &lt;div class="box-tips-area black"&gt;
                                &lt;p&gt;温馨提示：取消处理结果以订单详情记录为准。&lt;/p&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;

                        &lt;div class="box-button"&gt;
                            &lt;a href="javascript:;" class="box-ok"&gt;&lt;span&gt;确定&lt;/span&gt;&lt;/a&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/td&gt;
                &lt;td class="box-cr"&gt;&lt;/td&gt;
            &lt;/tr&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
</textarea>

            <!-- 物流信息模板 -->
            <textarea id="interface-tpl" class="hide">  &lt;!--#macro interface data--&gt;
        &lt;table cellspacing="0" cellpadding="0" border="0"&gt;
            &lt;thead&gt;
                &lt;tr&gt;
                    &lt;th class="col-log-date"&gt;处理时间&lt;/th&gt;
                    &lt;th class="col-log-info"&gt;处理信息&lt;/th&gt;
                &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
                &lt;!--#list data as lst--&gt;
                    &lt;tr&gt;
                        &lt;td class="col-log-date"&gt;{#new Date(parseInt(lst.logTime)).format("yyyy-MM-dd HH:mm:ss")}&lt;/td&gt;
                        &lt;td class="col-log-info"&gt;{#lst.logDescription}&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;!--/#list--&gt;
            &lt;/tbody&gt;
        &lt;/table&gt;
    &lt;!--/#macro--&gt;
</textarea>

            <textarea id="exchange-timeout" class="hide">   &lt;div class="box-prompt-error-area"&gt;
        &lt;div class="h"&gt;
            &lt;i&gt;&lt;/i&gt;
        &lt;/div&gt;
        &lt;div class="b"&gt;
            &lt;p&gt;对不起，您已经超过规定的退换货有效期，目前不能进行退换货操作！&lt;/p&gt;&lt;br/&gt;
            &lt;p&gt;温馨提示：如果您是在网店更换过机器或者在商城换过机器，请您凭网店或者商品提供的检测单联系商城客服，在后台给你下换机申请单。&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="box-custom-button"&gt;
        &lt;a class="box-ok box-button-style-1" href="javascript:;"&gt;&lt;span&gt;确定&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
</textarea>

            <textarea id="exchange-agreement" class="hide">     &lt;!-- 20140828-对话框-协议-退换货办理协议-start --&gt;
        &lt;div class="box-agreement-area"&gt;
            &lt;p&gt;&lt;b&gt;尊敬的用户：&lt;/b&gt;&lt;/p&gt;
            &lt;p style="text-indent:2em;"&gt;您可选择以下方式进行退换货&lt;/p&gt;
            &lt;p style="text-indent:2em;"&gt;&lt;b&gt;一、寄回商城仓库进行检测退换货&lt;/b&gt;&lt;/p&gt;
            &lt;ul&gt;
                &lt;li style="text-indent:2em;"&gt;您好，寄回商品检测前，请您仔细阅读以下条款。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;1、寄回检测需要您先自行垫付寄回运费，待检测符合退换条件后，商城会返还您的运费。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;2、请确保寄回商品无人为损坏，否则无法办理退换货。人为损坏包括但不限于：未经授权的维修、外力造成的碰撞破损、进液以及外观刮花划伤、掉漆等。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;3、退换货申请审核通过仅表示华为商城受理您的退换货申请，但不代表同意您的退换货，您可寄回商城进行检测，具体判断有赖于商品是否有质量问题的检测结果以及其他退换货条件的满足。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;4、寄回检测换货，请确保将商品主机、完整标配、完整原厂包装一次性寄回，如缺少标配配件等将无法更换。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;5、寄回检测退货，请确保将商品主机、完整标配、完整原厂包装、发票原件、赠品一次性寄回。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;6、寄回检测后，不符合退换货规定的商品将原路到付寄回，运费将由您承担。&lt;/li&gt;
            &lt;/ul&gt;
            &lt;p style="text-indent:2em;"&gt;&lt;b&gt;二、当地售后服务网点检测，并换货&lt;/b&gt;&lt;/p&gt;
            &lt;ul&gt;
                &lt;li style="text-indent:2em;"&gt;您好，网点检测故障属实后，您可以选择直接在售后服务网点进行换机服务。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;1、前往售后服务网点前请您拨打网点电话咨询是否可受理。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;2、请您将发票、故障商品携带齐全前往售后服务网点进行检测换货。&lt;/li&gt;
            &lt;/ul&gt;
            &lt;p style="text-indent:2em;"&gt;&lt;b&gt;三、当地售后服务网点开具检测报告，寄回商城退换货&lt;/b&gt;&lt;/p&gt;
            &lt;ul&gt;
                &lt;li style="text-indent:2em;"&gt;您好，您可直接到当地就近华为售后服务网点进行检测，开具检测报告后寄回华为商城仓库进行退换货。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;1、前往售后服务网点前请您拨打网点电话咨询是否可受理。&lt;/li&gt;
                &lt;li style="text-indent:2em;"&gt;2、请您将发票、故障商品携带齐全前往售后服务网点进行检测换货。&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;&lt;!-- 20140828-对话框-协议-退换货办理协议-end --&gt;
</textarea>

            <textarea id="realNameComment" class="hide">    &lt;!-- 20170914-提示-start --&gt;
        &lt;div class="safetyPhone-prompt-area"&gt;
            &lt;div class="h" style="padding-top: 0;"&gt;
                &lt;i&gt;&lt;/i&gt;
            &lt;/div&gt;
            &lt;div class="b"&gt;
                &lt;p class="tal"&gt;根据国家相关规定，只有帐号经过实名验证的用户才可以跟帖评论或发布信息。为保障您的帐号正常使用，请尽快完成手机号绑定验证，感谢您的理解及支持！&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="box-button" style="padding-top: 0;"&gt;
            &lt;a href="javascript:;" class="box-cancel" style="margin-right: 15px;"&gt;&lt;span&gt;取消&lt;/span&gt;&lt;/a&gt;
            &lt;a href="https://hwid1.vmall.com/oauth2/userCenter/hwAccount?reqClientType=26&amp;loginChannel=26000000&amp;themeName=cloudTheme&amp;lang=zh-cn" class="box-sure"&gt;&lt;span&gt;去绑定&lt;/span&gt;&lt;/a&gt;
        &lt;/div&gt;
    &lt;!-- 20170914-提示-end --&gt;
</textarea>

            <textarea id="box-confirm" class="hide">&lt;!-- 20140722-退换货-延保tips-start --&gt;
    &lt;div class="box-tips-area"&gt;
        &lt;p&gt;请您收到货后，再确认收货。&lt;/p&gt;
    &lt;/div&gt;&lt;!-- 20140722-退换货-延保tips-end --&gt;
    &lt;div class="box-button"&gt;
        &lt;a class="box-ok" href="javascript:;"&gt;&lt;span&gt;确定&lt;/span&gt;&lt;/a&gt;
        &lt;a class="box-cancel" href="javascript:;"&gt;&lt;span&gt;取消&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
</textarea>
            <textarea id="box-pj" class="hide">&lt;!-- 20140722-退换货-延保tips-start --&gt;
&lt;div class="box-tips-area"&gt;
    &lt;p&gt;此次购物是否让您满意？给个评价吧！&lt;/p&gt;
&lt;/div&gt;
&lt;div class="box-custom-button"&gt;
    &lt;a class="box-cancel box-button-style-2" href="/member/prdRemarkView.html" target="_blank"&gt;&lt;span&gt;去评价&lt;/span&gt;&lt;/a&gt;
    &lt;a class="box-cancel box-button-style-1" href="javascript:;"&gt;&lt;span&gt;关闭&lt;/span&gt;&lt;/a&gt;
&lt;/div&gt;
&lt;!-- 20140722-退换货-延保tips-end --&gt;
</textarea>

            <textarea id="order-cancel" class="hide"> &lt;!-- 20171206-订单取消申请-start --&gt;
    &lt;div class="order-cancel"&gt;
        &lt;div class="clearfix"&gt;
            &lt;label&gt;&lt;span class="red"&gt;*&lt;/span&gt;取消原因：&lt;/label&gt;
            &lt;div class="order-cancel-main"&gt;
                &lt;div class="order-cancel-pulldown" id="selectReson"&gt;请选择取消原因&lt;/div&gt;
                &lt;!--选取原因后class="order-cancel-pulldown click"--&gt;
                &lt;div class="order-cancel-detail"&gt;
                    &lt;ul id="cancelOption" class="clearfix"&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="1"&gt;不想买了&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="6"&gt;该商品Vmall商城降价了&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="2"&gt;商品选择错误&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="7"&gt;其他商家价格更低&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="3"&gt;重复下单/误下单&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="8"&gt;发货太慢&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="4"&gt;忘记使用优惠券、积分等&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="9"&gt;支付方式有误/无法支付&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="5"&gt;收货信息/发票信息填写错误&lt;/li&gt;
                        &lt;li&gt;&lt;input type="radio" name="resonType" value="10"&gt;其他原因&lt;/li&gt;
                    &lt;/ul&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div id="cancelErrorMessage" class="report-errors hide"&gt;请选择取消订单原因。&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="order-cancel-tips"&gt;
        &lt;span class="label-error"&gt;温馨提示：&lt;/span&gt;
        &lt;ul&gt;
            &lt;li&gt;*&nbsp;&nbsp;订单成功取消后无法恢复&lt;/li&gt;
            &lt;li&gt;*&nbsp;&nbsp;订单成功取消后，该订单已付金额将返还到您的支付账户中，取消日起5个工作日内退款完成&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;

    &lt;div class="box-custom-button"&gt;
        &lt;a href="javascript:;" id="okButton" class="box-button-style-1"&gt;&lt;span&gt;确定取消&lt;/span&gt;&lt;/a&gt;
        &lt;a href="javascript:;" id="cancelButton" class="box-button-style-1"&gt;&lt;span&gt;暂不取消&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
    &lt;!-- 20171206-订单取消申请-end --&gt;
</textarea>
            <!-- <script src="/static/index/orderdetails/js/orderList.min.js.下载"></script> -->
            <script id="jsapi_loader1" loadtype="insert" type="text/javascript"
                    src="/static/index/orderdetails/js/jquery.form-2.49.js.下载" charset="utf-8"></script>
            <script>(function () {
                var time = 0, el = document.getElementById('jsapi_loader1');
                if (!el || (el.readyState && 'complete' != el.readyState)) {
                    if (time < 10) {
                        setTimeout(arguments.callee, 30);
                        time++;
                    } else {
                        logger.error('load the script of id jsapi_loader1 fail!');
                    }
                    return;
                }
                ol._setLoadStatus("jquery.form", "complete");
            })();</script>
            <script id="jsapi_loader2" loadtype="insert" type="text/javascript"
                    src="/static/index/orderdetails/js/ajax.js.下载" charset="utf-8"></script>
            <script>(function () {
                var time = 0, el = document.getElementById('jsapi_loader2');
                if (!el || (el.readyState && 'complete' != el.readyState)) {
                    if (time < 10) {
                        setTimeout(arguments.callee, 30);
                        time++;
                    } else {
                        logger.error('load the script of id jsapi_loader2 fail!');
                    }
                    return;
                }
                ol._setLoadStatus("ajax", "complete");
            })();</script>
            <script id="jsapi_loader3" loadtype="insert" type="text/javascript"
                    src="/static/index/orderdetails/js/movebar.min.js.下载"></script>
            <script>(function () {
                var time = 0, el = document.getElementById('jsapi_loader3');
                if (!el || (el.readyState && 'complete' != el.readyState)) {
                    if (time < 10) {
                        setTimeout(arguments.callee, 30);
                        time++;
                    } else {
                        logger.error('load the script of id jsapi_loader3 fail!');
                    }
                    return;
                }
                ol._setLoadStatus("jquery.movebar/movebar.min.js", "complete");
            })();</script>
            <script src="/static/index/orderdetails/js/add.min.js.下载"></script>
            <script id="jsapi_loader4" loadtype="insert" type="text/javascript"
                    src="/static/index/orderdetails/js/rater-star.js.下载"></script>
            <script>(function () {
                var time = 0, el = document.getElementById('jsapi_loader4');
                if (!el || (el.readyState && 'complete' != el.readyState)) {
                    if (time < 10) {
                        setTimeout(arguments.callee, 30);
                        time++;
                    } else {
                        logger.error('load the script of id jsapi_loader4 fail!');
                    }
                    return;
                }
                ol._setLoadStatus("RaterStar/rater-star.js", "complete");
            })();</script>
            <script>
                ec.load("ec.pager");
            </script>
            <script id="jsapi_loader5" loadtype="insert" type="text/javascript"
                    src="/static/index/orderdetails/js/pager-min.js.下载" charset="gbk"></script>
            <script>(function () {
                var time = 0, el = document.getElementById('jsapi_loader5');
                if (!el || (el.readyState && 'complete' != el.readyState)) {
                    if (time < 10) {
                        setTimeout(arguments.callee, 30);
                        time++;
                    } else {
                        logger.error('load the script of id jsapi_loader5 fail!');
                    }
                    return;
                }
                ol._setLoadStatus("ec.pager/pager-min.js", "complete");
            })();</script>
        </div>
        <div class="fl u-1-5">


            <script type="text/javascript">
                <!--

                //
                $(document).ready(function () {
                    var userIdO2O = ec.util.cookie.get("uid");
                    if (window.sessionStorage) {
                        if (!sessionStorage.userIdO2O || $.trim(sessionStorage.userIdO2O) == "" || sessionStorage.userIdO2O != userIdO2O) {
                            if (getO2OType()) {
                                sessionStorage.setItem("userIdO2O", userIdO2O);
                                changeO2OClass(sessionStorage.getItem("O2OType"));
                            }
                        }
                        else {
                            changeO2OClass(sessionStorage.getItem("O2OType"));
                        }

                    }
                });

                function getO2OType() {
                    var rst = false;
                    new ec.ajax().get({
                        url: "/o2o/load.json",
                        timeout: 10000,
                        async: false,
                        dataType: "json",
                        successFunction: function (json) {
                            if (json.success) {
                                sessionStorage.clear();
                                var verifyStatus = json.o2oUserInfoRsp.verifyStatus;
                                sessionStorage.setItem("O2OType", $.trim(verifyStatus));
                                rst = true;
                            }
                        }
                    });
                    return rst;
                }

                function changeO2OClass(O2OType) {
                    if (O2OType == 2) {
                        $("#li-o2o").removeClass();
                    }
                    else {
                        if (!$("#li-o2o").hasClass("hide")) {
                            $("#li-o2o").addClass("hide")
                        }
                    }
                }

                -->

            </script>
            <!-- 20170823-左边菜单-start -->
            <?php echo widget('Index/leftlist'); ?>
            <!-- 20170823-左边菜单-end -->

            <script src="/static/index/orderdetails/js/leftMenu.min.js.下载"></script>


        </div>
    </div>
    <div class="hr-80"></div>

</div>
<?php echo widget('Index/footer'); ?>
<!--口号-20121025 -->
</body></html>