<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\wamp\www\c\thinkphp5\public/../application/index\view\IndexPublic\footer.html";i:1516625322;}*/ ?>
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
</script><!-- 导航 -->



<!-- 尾部 -->
<div class="channel-floor">
    <div class="layout">
        <!-- 20130903-ad-762*132-start -->
        <div class="ad fl"><a target="_blank" href="https://sale.vmall.com/smrz.html"><img
                src="/static/index/images/20170313112742735.jpg" title="实名认证" style="float:none;"/></a></div>
        <!-- 20130903-ad-762*132-end -->
    </div>
    <div class="hr-60"></div>
</div>

<!-- 2017-02-15-top-banner-start -->
<textarea id="top-banner" class="hide">
    <!-- 顶部banner -->
    <div class="top-banner-max hide" id="top-banner-max">
        <div class="top-banner-img">

            <a title="折叠" href="javascript:;" class="button-top-banner-min" id="top-banner-max-toggle">-</a>
        </div>
    </div>
    <?php if(!empty($advert)): ?>
    <div class="top-banner-min hide" id="top-banner-min">
        <div class="top-banner-img">
            <p style="font-size:0;">
            <a style="display:block;position:relative;width:1920px;text-align:center;left:50%;background-color:;margin-left:-960px;"
               title="广告" target="_blank" href="<?php echo $advert['url']; ?>"><img
                    src="/uploads/<?php echo $advert['pic']; ?>" title="广告"/></a>
</p>
            <a title="展开" href="javascript:;" class="button-top-banner-max hide" id="top-banner-min-toggle">+</a>
            <a class="button-top-banner-close" href="javascript:;" title="关闭" id="top-banner-min-close">关闭</a>
        </div>
    </div>
    <?php endif; ?>
    <!-- 顶部banner end -->
</textarea>
<!-- 2017-02-15-top-banner-end -->

<!-- 2017-09-21-bottom-banner-start -->

<!-- 2017-09-21-bottom-banner-end -->

<script>
    // 改为异步调用
    // document.write('<script src="/serverTime.jsp?'+ new Date().getTime() +'"></' + 'script>');
</script>
<script>
    ec.load("ajax");
    ec.pkg("ec.index");
    ec.index.clickHref = function (a) {
        window.open(a)
    };
    ec.index.sales = function (e) {
    };
    ec.index.salesStatus = [];
    ec.index.salesCallBack = function (h, k) {
        var f,
            d = [],
            b = new Date();
        b.setTime(ec.index.now.parseDate("yyyy-MM-dd HH:mm:ss"));
        var a = function (i, o) {
            var n = $(o),
                l = n.attr("data-skutype"),
                m = $(".channel-button", n);
            switch (parseInt(i, 10)) {
                case 0:
                    m.html("\u9a6c\u4e0a\u5f00\u59cb").attr("title", "\u9a6c\u4e0a\u5f00\u59cb");
                    if (l == 3 || l == 4) {
                        m.attr("class", "channel-button-begin")
                    }
                    break;
                case 1:
                    if (l == 3) {
                        m.html("\u53bb\u770b\u770b").attr("title", "\u53bb\u770b\u770b")
                    } else {
                        m.html("\u7acb\u5373\u62a2\u8d2d").attr("title", "\u7acb\u5373\u62a2\u8d2d")
                    }
                    m.attr("class", "channel-button");
                    break;
                case 2:
                    m.html("\u6d3b\u52a8\u7ed3\u675f").attr("title", "\u6d3b\u52a8\u7ed3\u675f");
                    if (l == 2 || l == 3) {
                        m.attr("class", "channel-button-end")
                    }
                    break
            }
        };
        for (var c = 0; c < k.infoList.length; c += 1) {
            f = h[c];
            d = k.infoList[c];
            $(".channel-button", f).css("visibility", "");
            if (!d || !d.id) {
                continue
            }
            if (d.status == 1) {
                if (d.startTime && d.startTime >= b) {
                    d.status = 0
                }
                if (d.endTime && d.endTime <= b) {
                    d.status = 2
                }
            }
            a(d.status, f);
            if (d.startTime || d.endTime || d.limitAmount > 0) {
                $(".p-countdown", f).show()
            }
            if (d.limitAmount > 0) {
                $(".p-quantity", f).html("\u9650<b>" + d.limitAmount + "</b>\u53f0").show()
            }
            var e = parseFloat($(f).attr("data-price"), 10);
            if (d.price > 0) {
                if (parseInt(d.price) == d.price) {
                    $(".p-sale-price span, .p-price span", f).html((d.price));
                    if (parseInt(e) == e) {
                        $(".economize", f).html(e - d.price)
                    } else {
                        $(".economize", f).html((e - d.price).toFixed(2))
                    }
                } else {
                    $(".p-sale-price span, .p-price span", f).html((d.price).toFixed(2));
                    if (e - d.price == 0) {
                        $(".economize", f).html("0")
                    } else {
                        $(".economize", f).html((e - d.price).toFixed(2))
                    }
                }
            }
            $(".sale-quantity", f).html(d.saleAmount);
            if (d.status != 2 && (d.startTime || d.endTime)) {
                var g = ($(f).attr("data-block") == "slider") ? true : false,
                    j = [];
                if (d.startTime) {
                    j.push(new Date(d.startTime).format("yyyy-MM-dd HH:mm:ss"))
                }
                if (d.endTime) {
                    j.push(new Date(d.endTime).format("yyyy-MM-dd HH:mm:ss"))
                }
                ec.index.salesStatus[c] = d.status;
                ec.ui.countdown($(".p-time", f), {
                    html: "<b>" + (g ? "" : "\u5269\u4f59") + "</b><ins><i>{#hours}</i><s></s></ins><em>\u65f6</em><ins><i>{#minutes}</i><s></s></ins><em>\u5206</em><ins><i>{#seconds}</i><s></s></ins><em>\u79d2</em>",
                    now: b,
                    times: j,
                    index: c,
                    callback: function (i) {
                        ec.index.salesStatus[i.index]++;
                        a(ec.index.salesStatus[i.index], h[i.index])
                    }
                })
            }
        }
    };
    ec.ready(function () {
        if (ec.account.isLogin()) {
            $("#cust_login_info").hide()
        }
        var a = ec.index.bigAd,
            g = ec.index.smallAd,
            f = ec.index.bigadShowTime,
            e,
            b,
            c = function () {
                var j = b.innerHeight();
                var i = e.innerHeight();
                var k = $("#search-bar-form").offset().top - i + j;
                var h = $("#search-bar-form").innerHeight();
                $(".autocomplete-w1").parent().hide();
                e.slideUp(1000, function () {
                    if (g) {
                        b.show()
                    }
                    $(".autocomplete-w1").parent().css({
                        top: (k + h + "px")
                    });
                    $(".autocomplete-w1").parent().show();
                    ec.index.SCROLL_GET = ec.index.getscrollLayout()
                });
                if (d) {
                    clearTimeout(d)
                }
            },
            d;
        $("#top-banner-block").html(gid("top-banner").value);
        e = $("#top-banner-max");
        b = $("#top-banner-min");
        $("#top-banner-min-close").click(function () {
            $("#top-banner-block").hide();
            ec.index.SCROLL_GET = ec.index.getscrollLayout()
        });
        if (a) {
            e.show();
            ec.index.SCROLL_GET = ec.index.getscrollLayout();
            $("#top-banner-max-toggle").click(c);
            d = setTimeout(c, f)
        }
        if (g && !a) {
            b.show();
            ec.index.SCROLL_GET = ec.index.getscrollLayout()
        }
        if (!g && !a) {
            ec.index.SCROLL_GET = ec.index.getscrollLayout()
        }
        $("body .layout .channel-pro-item").hover(function () {
            $(this).addClass("pro-info-hover")
        }, function () {
            $(this).removeClass("pro-info-hover")
        });
        ec.index.sales("#main-sale-list .activity-list, #slider-sale-list .activity-list");
        ec.index.floatLayout()
    });
    ec.index.SCROLL_GET = {};
    ec.index.getscrollLayout = function () {
        var b = $(".home-channel-container .layout"),
            d = $(".event-float-layout"),
            a = [],
            c = [];
        if (b.length == 0 || d.length == 0) {
            return false
        }
        b.each(function (e, f) {
            c.push($(this).offset().top);
            a.push($(this).outerHeight())
        });
        return {
            scrollListHeight: a,
            scrollList: c,
            top: d.offset().top
        }
    };
    ec.index.floatLayout = function () {
        var a = $(".event-float-layout");
        if (a.length == 0 || ec.index.SCROLL_GET === false) {
            return false
        }
        $("body").css({
            "min-width": "1200px",
            "overflow-x": "hidden"
        });
        var d = $(".event-float"),
            n = $(".hungBar-top"),
            h = $(".home-channel-container .layout"),
            p = $(".home-channel-container"),
            m = $(".home-channel-container .layout .channel-title"),
            l = "";
        a.find("ul").children().remove();

        function f(i) {
            return $("<span/>").text(i).html()
        }

        h.each(function (i, q) {
            l += '<li><a data-id="' + i + '" href="javascript:;">' + f(m.eq(i).text()) + "</a></li>"
        });
        a.find("ul").append(l);
        a.bind("click", function (r) {
            var q = $(r.target);
            if (q[0].nodeName.toLowerCase() === "a") {
                var i = parseInt(q.attr("data-id"));
                q.parent().addClass("hover").siblings().removeClass("hover");
                $("html,body").animate({
                    scrollTop: ec.index.SCROLL_GET.scrollList[i] + "px"
                }, 400)
            }
        });
        var o = a.outerHeight(),
            e = d.offset(),
            c = e.left,
            b = $(window).height(),
            k = b / 2 - (o / 2),
            j = h.length,
            g = true;
        a.css({
            height: j * 47 + "px",
            top: k + "px"
        });
        if (document.body.clientWidth <= 1400) {
            a.hide();
            g = false
        }
        if ($.browser.msie && parseInt($.browser.version) <= 9) {
            a.hide()
        }
        if ($.browser.msie && parseInt($.browser.version) <= 7) {
            g = false
        } else {
            $(window).scroll(function () {
                if (!g) {
                    return
                }
                var i = $(window).scrollTop();
                if (i >= b) {
                    n.fadeIn(80)
                } else {
                    n.fadeOut(80)
                }
                if (i >= ec.index.SCROLL_GET.scrollList[0] - k) {
                    a.css({
                        top: k + "px"
                    }).addClass("tool-Fixed");
                    if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
                        a.show()
                    }
                    $.each(ec.index.SCROLL_GET.scrollList, function (q, r) {
                        if (i >= r - ec.index.SCROLL_GET.scrollListHeight[q] / 2) {
                            a.find("li").eq(q).addClass("hover").siblings().removeClass("hover")
                        }
                    });
                    if (i >= (ec.index.SCROLL_GET.scrollList[j - 1] + ec.index.SCROLL_GET.scrollListHeight[j - 1] / 2 - j * 47)) {
                        a.removeClass("tool-Fixed");
                        if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
                            a.hide()
                        }
                    }
                } else {
                    a.removeClass("tool-Fixed");
                    if ($.browser.msie && parseInt($.browser.version) >= 8 && parseInt($.browser.version) <= 9) {
                        a.hide()
                    }
                }
            }, 200)
        }
        $(window).resize(function () {
            if (document.body.clientWidth > 1400) {
                a.show();
                g = true;
                return
            }
            a.hide();
            g = false;
            $("body").css({
                "min-width": "1200px",
                "overflow-x": "auto"
            })
        }, 200);
        if ($(window).scrollTop() > 0) {
            $(window).trigger("scroll")
        }
    };
    $(document).ready(function () {
        var c = $(".goods-rolling"),
            a = [];
        c.each(function (f, g) {
            a.push($(this).attr("id"))
        });
        $.each(a, function (f, g) {
            var totalLen = $("#" + g).find('.swiper-slide').length;
            if (totalLen <= 5.5) {
                $("#" + g).find('.swiper-button-prev').addClass('disabled');
                $("#" + g).find('.swiper-button-next').addClass('disabled');
            } else {
                $("#" + g).find('.swiper-button-next').removeClass('disabled');

            }
            var mySwiper = new Swiper("#" + g, {
                slidesPerView: 5.5,
                slidesPerGroup: 5.5
            });
            // 左边箭头
            $("#" + g).find('.btn-prev').click(function () {
//      插件向左切换效果
                mySwiper.swipePrev();
            })
//  右边箭头
            $("#" + g).find('.btn-next').click(function () {
                mySwiper.swipeNext();
            })

        });

        new Slider({
            objid: "#notice",
            listname: ".p-notice-list",
            shownum: 1,
            type: 2,
            autoplay: true
        }).init();
        var b = $(".bottomImage");
        if (b.attr("src")) {
            b.show().bind("click", function () {
                var f = $("#adsArearLink").val();
                if (f != null && f.trim() != "") {
                    var g = window.open(f, "_blank");
                    g.opener = null
                }
            })
        }
        var e = $(".grid-list .grid-items,.grid-promo-list .grid-items");
        e.hover(function () {
            $(this).addClass("current")
        }, function () {
            $(this).removeClass("current")
        });
        var d = $(".hungBar-top");
        d.bind("click", function () {
            $("html,body").animate({
                scrollTop: "0px"
            }, 400);
        });
    });
</script>

<script>
    (function (_ec) {
//顶部banner
        _ec.bigAd = false;
        _ec.smallAd = true;
        _ec.bigadShowTime = 8000;
        _ec.now = new Date().format('yyyy-MM-dd HH:mm:ss');

        _ec.configNowTime = function () {
            if (_serverTime) {
                _ec.now = new Date(_serverTime).format('yyyy-MM-dd HH:mm:ss');
            }
        }

        //ec.load({
        //  url : "/serverTime.jsp?"+(new Date()).getTime(),
        //  type : "js",
        //  loadType:"lazy",
        //  onload : _ec.configNowTime
        //});

    })(ec.index);


    /*
     *
     * 首页左浮动位置
     *
     * */
    (function ($) {
        function floatShow() {
            function getScrollTop() {
                var scrollTop = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
                return scrollTop;
            }

            if (getScrollTop() > 1080) {
                if ($(".leftfloat")) {
                    $(".leftfloat").addClass('leftfloat-show');
                }
            } else {
                if ($(".leftfloat")) {
                    $(".leftfloat").removeClass('leftfloat-show');
                }
            }
        };
        floatShow();


        window.onscroll = function () {
            floatShow();
        };

        function floatPosition() {
            if ($(".leftfloat")) {
                var floatLeft = ($(window).width() - 1200) / 2 - $('.leftfloat').width() - 10,
                    floatTop = $(window).height() / 2 - $('.leftfloat').height() / 2;
                $(".leftfloat").css('left', floatLeft);
                $(".leftfloat").css('top', floatTop);
                setTimeout(floatPosition, 100);
            }
        };
        floatPosition();
        window.onresize = function () {
            floatPosition();
        };
        /*
         *
         * 首页底部浮动位置
         *
         * */
        var $top = $('.home-channel-container .layout').eq(0).offset().top,
            $height = $('.bottom-banner').height();
        $(window).scroll(function () {
            var bottomV = $height * (-1);
            $(".bottom-banner").css("bottom", bottomV + "px");
            var scrollTop = $(window).scrollTop();
            if (scrollTop >= ($top - $height)) {
                $(".footer-container").css("padding-bottom", $height + "px");
                $(".bottom-banner").addClass('bm-0');
            } else {
                $(".bottom-banner").removeClass('bm-0');
                $(".footer-container").css("padding-bottom", "0");
            }
        })

    })(jQuery);
</script>

<!--口号-20121025 -->
<div class="slogan-container">
    <div class="slogan">
        <ul>
            <li class="s1"><a target="_blank" href="https://www.vmall.com/help/faq-934.html"><i></i>百强企业&nbsp;品质保证</a>
            </li>
            <li class="s2"><a target="_blank" href="https://www.vmall.com/help/faq-834.html"><i></i>7天退货&nbsp;15天换货</a>
            </li>
            <li class="s3">
                <a target="_blank" href="https://www.vmall.com/help/faq-4367.html"><i></i>
                    <span>48元起免运费</span>
                </a>
            </li>
            <li class="s4"><a target="_blank"
                              href="http://consumer.huawei.com/cn/support/service-center/index.htm"><i></i>448家维修网点&nbsp;全国联保</a>
            </li>
        </ul>
    </div>
</div><!--口号-end -->

<!-- 2017-02-15-服务-start -->
<div class="service-container">
    <div class="service">
        <div class="service-l fl">
            <dl class="s1">
                <dt>
                    <p class="line"></p>
                    <p class="title">购物相关</p>
                </dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4355.html">购物指南</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4367.html">配送方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-4357.html">支付方式</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/category-16.html">常见问题</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s2">
                <dt>
                    <p class="line"></p>
                    <p class="title">保修与退换货</p>
                </dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-833.html">保修政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-834.html">退换货政策</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-5259.html">退换货流程</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/warranty-query/index.htm">保修状态查询</a>
                        </li>
                    </ol>
                </dd>
            </dl>
            <dl class="s3">
                <dt>
                    <p class="line"></p>
                    <p class="title">维修与技术支持</p></dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/service-center/index.htm">售后网点</a>
                        </li>
                        <li><a target="_blank"
                               href="http://consumer.huawei.com/cn/support/reservation/index.htm">预约维修</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/express-repair/index.htm">手机寄修</a>
                        </li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/sparepart-price/index.htm">维修配件价格查询</a>
                        </li>
                        <li><a target="_blank"
                               href="http://consumer.huawei.com/cn/support/door-to-door-service/">上门服务</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s4">
                <dt>
                    <p class="line"></p>
                    <p class="title">关于我们</p></dt>
                <dd>
                    <ol>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-934.html">公司介绍</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/help/faq-939.html">华为商城简介</a></li>
                        <li><a target="_blank" href="http://consumer.huawei.com/cn/support/where-to-buy/">华为线下门店</a>
                        </li>
                        <li><a target="_blank" href="https://www.vmall.com/offshop/shoplist">荣耀线下门店</a></li>
                        <li><a target="_blank" href="https://www.vmall.com/common/zhaopin">诚征英才</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s5">
                <dt>
                    <p class="line"></p>
                    <p class="title">关注我们</p></dt>
                <dd>
                    <ol>
                        <li><a class="sina" rel="nofollow" href="http://weibo.com/shophuawei" target="_blank">新浪微博</a>
                        </li>
                        <li><a class="qq" rel="nofollow" href="http://t.qq.com/shophuawei" target="_blank">腾讯微博</a></li>
                        <li><a class="huafen" href="http://club.huawei.com" target="_blank">花粉俱乐部</a></li>
                    </ol>
                </dd>
            </dl>
            <dl class="s6" id="serverlink">
                <dt class="relative">
                    <p class="line"></p>
                    <p class="title">友情链接</p>
                    <p class="button"></p>
                </dt>
                <dd class="">
                    <div class="service-list clearfix">
                        <ol>
                            <?php foreach($link as $v): ?>
                            <li><a onclick="jump(&#39;<?php echo $v['url']; ?>;)"><?php echo $v['name']; ?></a></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                    <script>
                        jump = function (url) {
                            var win = window.open(url, "_blank");
                            win.opener = null;
                        }
                    </script>
                </dd>
            </dl>
        </div>
        <div class="service-r fl">
            <dl class="s7">
                <dt>
                    <p class="line"></p>
                    <p class="title">400-088-6888</p></dt>
                <dd>
                    <ol>
                        <li><a>24小时客服热线（仅收市话费）</a></li>
                    </ol>
                </dd>
                <dd>
                    <a id="tools-nav-service-robotim-button" rel="nofollow" class="service-btn btn-line-primary"
                       href="javascript:;" target="_blank"><i class=""></i> 在线客服</a>
                    <a rel="nofollow" class="service-btn btn-report"
                       href="http://report.12377.cn:13225/toreportinputNormal_anis.do" target="_blank"><i class=""></i>不良信息举报</a>
                </dd>
            </dl>
        </div>
    </div>
</div>
<!-- 2017-02-15-服务-end -->

<!--确认对话框-->
<div id="ec_ui_confirm" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_confirm_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_yes" href="javascript:;"
                                          class="button-action-yes"><span>是</span></a><a id="ec_ui_confirm_no"
                                                                                         href="javascript:;"
                                                                                         class="button-action-no"><span>否</span></a>
        </div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!--新确认对话框-->
<div id="ec_ui_confirm_new" class="popup-area-new hide">
    <div class="b">
        <p id="ec_ui_confirm_new_msg"></p>
        <div class="popup-button-area"><a id="ec_ui_confirm_new_yes" href="javascript:;"
                                          class="box-button-style-1"><span>是</span></a><a id="ec_ui_confirm_new_no"
                                                                                          href="javascript:;"
                                                                                          class="box-button-style-1"><span>否</span></a>
        </div>
    </div>
    <div class="f"><s class="icon-arrow-down-new"></s></div>
</div>

<!--提示对话框-->
<div id="ec_ui_tips" class="popup-area popup-define-area hide">
    <div class="b">
        <p id="ec_ui_tips_msg" class="tac"></p>
        <div class="popup-button-area tac"><a id="ec_ui_tips_yes" href="javascript:;" class="button-action-yes"
                                              title="确定"><span>确定</span></a></div>
    </div>
    <div class="f"><s class="icon-arrow-down"></s></div>
</div>

<!-- 2017-02-15-悬浮工具栏-start -->
<div class="hungBar">
    <a href="#" class="hungBar-top fr" id="hungBar-top" title="返回顶部"><i>返回顶部</i></a>
    <div class="hungBar-content fr relative">
        <!--添加hover 来实现弹出-->
        <a href="https://www.vmall.com/help/index.html" class="hungBar-for-help" title="帮助中心"
           target="_blank"><i>帮助中心</i></a>
        <a id="tools-nav-survery" href="javascript:;" class="hungBar-feedback" title="意见反馈"
           onclick="ec.survery.open();"><i>意见反馈</i></a>
        <a id="tools-nav-service-robotim" href="javascript:;" class="hungBar-olcs-web" title="在线客服"><i>在线客服</i></a>
    </div>
</div>
<!-- 2017-02-15-悬浮工具栏-end -->

<!--意见反馈box-->
<div id="survery-box" class="ol_box_4 hide" style="width:600px;">
    <div class="box-ct">
        <div class="box-header">
            <div class="box-tl"></div>
            <div class="box-tc">
                <div class="box-tc1"></div>
                <div class="box-tc2"><a class="box-close" title="关闭" onclick="ec.survery.close();"
                                        href="javascript:;"></a><span class="box-title"></span></div>
            </div>
            <div class="box-tr"></div>
        </div>
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
            <tr>
                <td class="box-cl"></td>
                <td class="box-cc">
                    <div class="box-content">
                        <!-- -表单-意见反馈-start -->
                        <div class="form-feedback-area">
                            <div class="b">
                                <div class="form-edit-area">
                                    <form autocomplete="off" id="form-feedback">
                                        <div class="form-edit-table">
                                            <table cellspacing="0" cellpadding="0" border="0">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <b>您的问题与建议</b><span id="errMsg"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><textarea name="content" id="surveryContent" type="textarea"
                                                                  class="textarea"></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td><b>您的联系方式</b></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="contact" id="surveryContact"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="fl">
                                                            <input type="text" maxlength="4" class="identify"
                                                                   name="code" id="surveryVerify"
                                                                   onkeyup="if(this.value.length==4){ec.survery.validate();}">&nbsp;&nbsp;<img
                                                                id="surveryVerifyImg" onclick="ec.survery.reloadCode()"
                                                                class="vam" alt="验证码">&nbsp;&nbsp;&nbsp;&nbsp;<span
                                                                class="vam"><a class="u" href="javascript:;"
                                                                               onclick="ec.survery.reloadCode();">换一张</a></span>
                                                        </div>
                                                        <div class="fr">
                                                            <a href="javascript:;" onclick="ec.survery.submit();"
                                                               class="button-action-yes"><span>提交</span></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- -表单-意见反馈-end -->
                    </div>
                </td>
                <td class="box-cr"></td>
            </tr>
            </tbody>
        </table>
        <div class="box-bottom">
            <div class="box-bl"></div>
            <div class="box-bc"></div>
            <div class="box-br"></div>
        </div>
    </div>
</div>

<div id="globleParameter" class="hide" context="" stylePath="https://res8.vmallres.com/20171221/css"
     scriptPath="https://res9.vmallres.com/20171221/js" imagePath="https://res.vmallres.com/20171221/images"
     mediaPath="https://res.vmallres.com/pimages/"></div>


<!-- 2017-02-15-底部-start -->
<div class="footer-container">
    <div class="footer">
        <div class="footer-warrant-area clearfix"><p class="footer-warrant-logo fl"><a href="https://www.vmall.com"><img
                src="/static/index/images/flogo.png"/></a></p>
            <p class="fl"><a href="https://www.vmall.com/help/faq-2635.html" target="_blank" title="隐私政策">隐私政策</a><a
                    href="https://www.vmall.com/help/faq-778.html" target="_blank" title="服务协议"> 服务协议</a> Copyright ©
                2012-2017 华为软件技术有限公司 版权所有 保留一切权利<br/>公安备案 <a
                        href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009"
                        target="_blank">苏公网安备32011402010009号</a><em> | </em><a target="_blank"
                                                                               href="http://www.miitbeian.gov.cn">苏ICP备17040376号-6</a><em>
                    | </em> 增值电信业务经营许可证：苏B2-20130048号<em>| </em><br/>网络文化经营许可证：<a
                        href="/static/index/images/20161009102851799.jpg" target="_blank">苏网文[2015] 1599-026号</a></p>
            <p class="fr footer-warrant-img"><a class="fl"
                                                href="http://www.jsdsgsxt.gov.cn/mbm/ent/elec/view.shtml?cred=Y&amp;siteId=052c2cbca0b64d2b88ac4b7775ff40ce"
                                                target="_blank"><img src="/static/index/images/20161224180914742.jpg"
                                                                     alt="工商网监" title="工商网监"/></a> <a class="fl"
                                                                                                      href="http://odr.jsdsgsxt.gov.cn:8081/mbm/entweb/elec/certView.shtml?siteId=052c2cbca0b64d2b88ac4b7775ff40ce"
                                                                                                      target="_blank"><img
                    src="/static/index/images/20160226162415360.png" alt="电子营业执照" title="电子营业执照"/></a> <a class="fl"
                                                                                                          href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com"
                                                                                                          target="_blank"><img
                    src="/static/index/images/20160226162521265.png" title="可信网站" alt="可信网站"/></a> <a class="fl"
                                                                                                      href="https://search.szfw.org/cert/l/CX20121017001773002082"
                                                                                                      target="_blank"><img
                    src="/static/index/images/20160226162531395.png" title="诚信网站" alt="诚信网站"/></a> <a class="fl"
                                                                                                      id="___szfw_logo___"
                                                                                                      href="https://credit.szfw.org/CX20170724001650181088.html"
                                                                                                      target="_blank"><img
                    src="/static/index/images/20170725194955862.jpg" border="0"/></a></p>
            <script type="text/javascript">(function () {
                document.getElementById('___szfw_logo___').oncontextmenu = function () {
                    return false;
                }
            })();</script>
            <p><br/></p></div>
        <script>
            ec.code.addAnalytics({
                baidu: true,
                google: false,
                hicloud: true,
                cnzz: true,
                suning: false,
                dmp: true
            });</script>
    </div>
</div>
<!-- 2017-02-15-底部-end -->
<!--<script src="https://res9.vmallres.com/20171221/js/echannel/slider.min.js?20170426"></script>-->
<!--<script src="https://res9.vmallres.com/20171221/js/echannel/swiper.min.js?20170426"></script>-->
<script>
    new Slider().init();
</script>
<script type="text/javascript">
    ec.load("ec.box", {loadType: "lazy"});
    /**
     *功能：给鼠标移动到s-dropdown上面的时候，记得给他多添加一个hover类样式
     *目的是兼容ie6
     *@author 李峰
     */
    $(function () {
        $(".s-dropdown").hover(function () {
            $(this).addClass("hover");
        }, function () {
            $(this).removeClass("hover");
        });
        var maxcolor = $('.top-banner-max').find('p').children('a').css("background-color");
        var mincolor = $('.top-banner-min').find('p').children('a').css("background-color");

        $('.top-banner-max').css({"background-color": maxcolor, overflow: "hidden"});
        $('.top-banner-min').css({"background-color": mincolor, overflow: "hidden"});
    });

    //显示全球导航选择层
    function showSelectRegion() {
        var box = new ec.box($("#selectRegion-tips").val(),
            {
                boxid: "region-select-box",
                boxclass: "ol_box_4",
                title: "Please select your country or region.",
                width: 940,
                showButton: false,
                autoPosition: false,
                onopen: function (box) {
                },
                onok: function (box) {
                },
                oncancel: function (box) {
                    box.close();
                    $(".ol_box_mask").remove();
                },
                onclose: function (box) {
                    $(".ol_box_mask").remove();
                }
            });

        box.open();

        $(".box-title").css("font-size", "28px").css("font-weight", "normal");
        $("#region-select-box").css("height", "auto");
        $(".ol_box_mask").click(function () {
            box.close();
        });

        $(".box-header").unbind("mousemove");
        $(".box-header").unbind("mousedown");

        var divTop = document.getElementById("region-select-box").offsetTop;
        $("#region-select-box").mousedown(function (e) {
            var e = e || window.event;
            var region = document.getElementById("region-select-box");

            var leftX = e.clientX - region.offsetLeft;
            var topY = e.clientY - region.offsetTop;
            $("#region-select-box").mousemove(function (event) {
                var e = event || window.event;
                var left = e.clientX - leftX;
                var top = e.clientY - topY;

                if (e.clientX - leftX < 20 - region.offsetWidth) {
                    left = 20 - region.offsetWidth;
                }
                if (e.clientY - topY < 20 - region.offsetHeight) {
                    top = 20 - region.offsetHeight;
                }

                if (e.clientY - topY + 20 >= $(window).height()) {
                    top = $(window).height() - 20;
                }
                if (e.clientX - leftX + 20 >= $(window).width()) {
                    left = $(window).width() - 20;
                }
                $("#region-select-box").css({"left": left, "top": top});
                divTop = top;

            });
        });
        $("#region-select-box").mouseup(function () {
            $("#region-select-box").unbind("mousemove");
        });
        $(window).scroll(function () {
            $("#region-select-box").offset({top: divTop});
        });
    }
</script>
<script type="text/javascript">
    ec.load("ec.slider", {
        loadType: "lazy",
        callback: function () {
            $("#ec-erweima").slider({
                width: 91, //必须
                height: 96, //必须
                style: 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                pause: 120000,           //间隔时间
                auto: true
            });
        }
    });

    $("#getPetal").click(function () {
        window.location.href = "https://www.vmall.com/member/petal";
    });

    ec.ready(function () {
        try {
            ec.minicart.readyContent();
            ec.minicart.microCartTpl = new ec.template($('#micro-cart-tpl').val());
            var $miniCart = $('#header-toolbar-minicart-content');
            $('#header-toolbar-minicart').hover(function () {
                if (ec.checkBrowerIE()) {
                    var act = document.activeElement.id;
                    if (act == 'search-kw') {
                        $("#search-kw").blur();
                    }
                }

                $(this).unbind("mouseenter");
                ec.minicart.content();
            }, function () {
                $(this).bind("mouseenter", function () {
                    if (ec.checkBrowerIE()) {
                        var act = document.activeElement.id;
                        if (act == 'search-kw') {
                            $("#search-kw").blur();
                        }
                    }

                    $(this).unbind("mouseenter");
                    ec.minicart.content();
                });
            });

            $('#up_loginName-hover').hover(function () {
                if (ec.checkBrowerIE()) {
                    var act = document.activeElement.id;
                    if (act == 'search-kw') {
                        $("#search-kw").blur();
                    }
                }

                $(this).unbind("mouseenter");
            }, function () {
                $(this).bind("mouseenter", function () {
                    if (ec.checkBrowerIE()) {
                        var act = document.activeElement.id;
                        if (act == 'search-kw') {
                            $("#search-kw").blur();
                        }
                    }

                    $(this).unbind("mouseenter");
                });
            });

        }
        catch (err) {
            // console.log(err);
        }

    });
</script>
</body>
</html>