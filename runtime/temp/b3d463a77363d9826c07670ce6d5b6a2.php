<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\wamp\www\c\thinkphp5\public/../application/index\view\index\index.html";i:1516627034;}*/ ?>
<?php echo widget('Index/header'); ?>
 <style>
    #play>#plays>a:hover{
        color:red;
    }
</style>
<title>华为商城</title>
<div class="hot-board">
    <!-- 导航 -->
    <div class="naver-main">
        <div class="layout">


            <!-- 20130909-导航-start -->
            <!-- 20130909-导航-end -->
            <!-- 20140823-分类-start -->
            <div class="category category-index" id="category-block">
                <!-- 20170223-分类-start -->
                <div class="b">
                    <ol class="category-list">
                        <!-- 鼠标悬停增加ClassName： hover -->
                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo0): $mod = ($i % 2 );++$i;if($vo0['pid']==0): ?>
                        <li id="zxnav_0" class="category-item " onmouseenter="showProList('zxnav_0')">
                            <input id="zxnav_0_flag" type="hidden" autocomplete="off" value="no">
                            <input id="zxnav_0_name" type="hidden" autocomplete="off" value="手机">
                            <div class="category-info">
                                <h3>
                                    <a href="/ilist/index/id/<?php echo $vo0['id']; ?>" target="_blank">
								<span><?php echo $vo0['name']; ?>
																	</span>
                                    </a>
                                </h3>

                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;
                                        if($v['pid']!=$vo0['id']){

                                        }else{
                                            echo '<a href="/ilist/index/id/'.$v['id'].'" target="_blank">
											<span>'.$v['name'].'
											</span></a>';
                                            $num++;
                                            if($num==2){
                                                $num=0;
                                                break;
                                            }
                                }
                                     endforeach; endif; else: echo "" ;endif; ?>
                                <i class=""></i>
                            </div>
                            <div class="category-panels relative">
                                <div class="p-title">
                                    <a class="clearfix" href="/list-36" target="_blank">
                                        <span class="fl">浏览<?php echo $vo0['name']; ?>频道</span>
                                        <span class="fr btn-next"> > </span>
                                    </a>
                                </div>
                                <ul class="subcate-list clearfix">
                                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;if($value['pid']==$vo0['id']): ?>
                                        <li class="subcate-item">
                                            <input id="child_name" type="hidden" value="<?php echo $value['name']; ?>">
                                            <input id="child_status" type="hidden" value="1">
                                            <input id="child_type" type="hidden" value="1">
                                            <a href="/ilist/index/id/<?php echo $value['id']; ?>" target="_blank">
                                                <span><?php echo $value['name']; ?></span>
                                            </a>
                                        </li>
                                    <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </li>
                        <?php endif; endforeach; endif; else: echo "" ;endif; ?>


                    </ol>
                </div>
                <!-- 20170223-分类-end -->

                <!-- 20140823-分类-end -->

            </div>
        </div>
    </div>
    <script>
        (function () {
            //所有分类显示隐藏控制
            var isIndex = true,
                categoryBlock = gid('category-block');

            if (isIndex) return;

            $("#category-block").hover(function () {
                $(this).addClass("category-hover");
            }, function () {
                $(this).removeClass("category-hover");
            });

            /*categoryBlock.onmouseover = function () {
                categoryBlock.className = 'category category-hover';
            };
            categoryBlock.onmouseout = function () {
                categoryBlock.className = 'category';
            };*/

        }());

        /**
         *功能：给鼠标移动到category-list li上面的时候，记得给他多添加一个hover类样式
         *目的是兼容ie6,以及调整二级分类的弹出框的位置。
         *@author 李峰
         */
        /**
         $(function(){
	$(".category-item").hover(function(){
		$(this).addClass("hover");
		//1.二级分类的top值
		var childrenTop = $(this).offset().top;
		//2.一级分类的top值
		var parentTop = $(".category-list").offset().top;
		//3.二级分类到一级分类顶部的距离
		var top = childrenTop - parentTop;
		//4.二级分类的弹出层的高度
		var childrenHeight = $(this).find(".category-panels").innerHeight();
		//5.一级分类容器的总高度
		var totalHeight = $(".category-list").height();
		alert("childrenTop:"+childrenTop+";parentTop:"+parentTop+";top:"+top+";childrenHeight:"+childrenHeight+";totalHeight:"+totalHeight) ;

		//6.如果二级分类.category-panels的内容高度大于总容量totalHeight,那么.category-panels置顶，然后多余的自动往下延续
		//如果二级分类childrenHeight内容高度(childrenHeight + top )大于totalHeight,那么.category-panels往上移动childrenHeight + top -totalHeight
		if((top + childrenHeight) > totalHeight)
		{
			if(childrenHeight > totalHeight)
			{
				$(this).find(".category-panels").css("top",-top);
			}else{
				//上移动
				var topX = (childrenHeight+top) - totalHeight;
				$(this).find(".category-panels").css("top",-topX);

			}

		}

	},function(){
		$(this).removeClass("hover");
	});

});
         */

        //显示导航右侧商品数据
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
                new ec.ajax().get({
                    url: "/querySbomInfo.json?skuIdsStr=" + skuIds,
                    async: true,//使用异步的Ajax请求
                    timeout: 10000,
                    successFunction: function (json) {
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
                                        price = "暂无报价";
                                    } else {
                                        price = "&yen;" + sbomInfo.price;
                                    }
                                    //一级分类导航名称
                                    var oneNavName = $("#" + id + "_name").val();
                                    var onShowName = "分类导航_" + oneNavName + "_" + sbomInfo.sbomCode;
                                    var clickContent = "_paq.push(['trackLink','" + onShowName + "', 'link', ' ']);ec.code.addAnalytics({hicloud:true});";
                                    html += '<li class="grid-items" onmouseenter="fixCurrent(this)"  onmouseleave="leaveCurrent(this)" onclick="' + clickContent + '">';
                                    html += '     <a class="thumb" target="_blank" href="' + urlPath + '">';
                                    html += '         <p class="grid-img">';
                                    html += '         	<img alt="" src="' + imgPath + '">';
                                    html += '          </p>';
                                    html += '          <h3 class="grid-title">' + proName + '</h3>';
                                    html += '          <p class="grid-price">' + price + '</p>';
                                    //html += '          <p class="grid-tips"><img src="" alt=""></p>';
                                    html += '       </a>';
                                    html += '  </li>';
                                }
                            }
                            $("#" + id + "_prolist").html(html);
                        }

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
    </script>
    <!--双12 header增加背景图的 字体颜色改变-->
    <!-- 20130904-热门板-start -->
    <div class="hot-board">
        <!--ads start-->
        <div class="ec-slider" id="index_slider">
            <ul>
                <li ID='firstImg'
                    style="background:url('/carousel/<?php echo $pic[0]; ?>') 50% 0px no-repeat ;display: block;">
                    <div style="width:100%;">
                        <img src="/carousel/<?php echo $pic[0]; ?>" style="display:none;"/>
                        <a style="width:100%;height:450px;display:block;" href="<?php echo url("","",true,false);?>"
                           target="_blank"
                           onclick="_paq.push([&#39;trackLink&#39;,&#39;主站PC首焦第1帧&#39;, &#39;link&#39;, &#39; &#39;]);ec.code.addAnalytics({hicloud:true});"></a>
                    </div>
                </li>

            </ul>
        </div>
        <ul></ul>
        <ul></ul>

        <script>
            ec.ready(function () {
                var imgLi = document.createElement("li");
                imgLi.setAttribute("class", "ec-slider-item");
                imgLi.setAttribute("style", "background: url('/carousel/<?php echo $pic[1]; ?>') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML = "<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"<?php echo $url[1]; ?>\" target=\"_blank\" onclick=\"_paq.push(['trackLink','主站PC首焦第2帧', 'link', ' ']);ec.code.addAnalytics({hicloud:true});\"></a></div>";
                $("#index_slider").children("ul").append(imgLi);
                var imgLi = document.createElement("li");
                imgLi.setAttribute("class", "ec-slider-item");
                imgLi.setAttribute("style", "background: url('/carousel/<?php echo $pic[2]; ?>') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML = "<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"<?php echo $url[2]; ?>\" target=\"_blank\" onclick=\"_paq.push(['trackLink','主站PC首焦第3帧', 'link', ' ']);ec.code.addAnalytics({hicloud:true});\"></a></div>";
                $("#index_slider").children("ul").append(imgLi);
                var imgLi = document.createElement("li");
                imgLi.setAttribute("class", "ec-slider-item");
                imgLi.setAttribute("style", "background: url('/carousel/<?php echo $pic[3]; ?>') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML = "<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"<?php echo $url[3]; ?>\" target=\"_blank\" onclick=\"_paq.push(['trackLink','主站PC首焦第4帧', 'link', ' ']);ec.code.addAnalytics({hicloud:true});\"></a></div>";
                $("#index_slider").children("ul").append(imgLi);
                var imgLi = document.createElement("li");
                imgLi.setAttribute("class", "ec-slider-item");
                imgLi.setAttribute("style", "background: url('/carousel/<?php echo $pic[4]; ?>') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML = "<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"<?php echo $url[4]; ?>\" target=\"_blank\" onclick=\"_paq.push(['trackLink','主站PC首焦第5帧', 'link', ' ']);ec.code.addAnalytics({ hicloud:true});\"></a></div>";
                $("#index_slider").children("ul").append(imgLi);
                var imgLi = document.createElement("li");
                imgLi.setAttribute("class", "ec-slider-item");
                imgLi.setAttribute("style", "background: url('/carousel/<?php echo $pic[5]; ?>') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML = "<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"<?php echo $url[5]; ?>\" target=\"_blank\" onclick=\"_paq.push(['trackLink','主站PC首焦第6帧', 'link', ' ']);ec.code.addAnalytics({hicloud:true});\"></a></div>";
                $("#index_slider").children("ul").append(imgLi);
                var imgLi = document.createElement("li");
                imgLi.setAttribute("class", "ec-slider-item");
                imgLi.setAttribute("style", "background: url('/carousel/<?php echo $pic[6]; ?>') 50% 0px no-repeat; ; width: 100%; height: 450px; display: none; position: absolute;");
                imgLi.innerHTML = "<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"<?php echo $url[6]; ?>\" target=\"_blank\" onclick=\"_paq.push(['trackLink','主站PC首焦第7帧', 'link', ' ']);ec.code.addAnalytics({hicloud:true});\"></a></div>";
                $("#index_slider").children("ul").append(imgLi);

                ec.load("ec.slider", {
                    loadType: "lazy",
                    callback: function () {
                        $("#index_slider").slider({
                            width: '100%', //必须
                            height: 450, //必须
                            style: 1,                    //1显示分页，2只显示左右箭头,3两者都显示
                            pause: 5000,           //间隔时间
                            auto: true,
                            minWidth: 1200,
                            showNumber: false,
                            circleBtn: true
                        });
                    }
                });

                setTimeout(function () {
                    $("#index_slider").children("ul").children("li").first().attr("class", "ec-slider-item");
                    $("#index_slider").children("ul").children("li").first().attr("style", "background: url('/carousel/<?php echo $pic[0]; ?>') 50% 0px no-repeat; ; width: 100%; height: 450px; display: block; position: absolute;");
                    $("#index_slider").children("ul").children("li").first().html("<div style=\"width:100%;\" class=\"ec-slider-item-img\"><a style=\"width:100%;height:450px;display:block;\" href=\"<?php echo $url[0]; ?>\" target=\"_blank\" onclick=\"_paq.push(['trackLink','主站PC首焦第1帧', 'link', ' ']);ec.code.addAnalytics({hicloud:true});\"></a></div>");

                }, 7000);
            });

        </script>
        <!--ads end-->
    </div><!-- 20130904-热门板-end -->
    <!--//20161123 弹出框-->
    <!-- 2017-02-15-菜单栏-start -->
    <div class="home-channel-menu" style="background:#f5f5f5;">

        <div class="layout relative">


            <div class="channel-floor-0 relative">
                <div class="h">
                    <div class="">
                        <ul class="home-channel-list clearfix">
                            <li class="fl s1">
                                <div id="gg_login" class="i-mall-prompt clearfix hide">
                                    <div class="relative fl w-name">
                                        <a href="/ilist/index/id/1" rel="nofollow" timeType="timestamp">
                                            <img id="gg_customerPic" src="__STATIC__/index/images/img_not_logged_in.png"
                                                 alt="">
                                            <i id="vip-Active-gg" class="icon-vip-level-5"></i>
                                        </a>
                                    </div>
                                    <div class="fl pdl-20">
                                        <div class="w-info"><span id="gg_loginName"></span></div>
                                        <div class="w-number">
                                            <span id="gg_jyz" class="" style="width: 0%"></span>
                                        </div>
                                        <div class="w-btn">
                                            <a id="oldPeople" style="display:none" class="new"
                                               href="/ilist/index/id/1">站内信</a>
                                            <a id="newPeople" class="new" href="/ilist/index/id/1">新人福利</a>
                                            <a class="" href="/ilist/index/id/1">会员频道</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="gg_unlogin" class="i-mall-prompt clearfix">
                                 <?php if((!\think\Session::get('user_id'))): ?>
                                    <div class="relative fl w-name">
                                        <img src="__STATIC__/index/images/img_not_logged_in.png" alt="">
                                    </div>
                                    <div class="fl pdl-20">
                                        <div id="gg_login_url" class="w-reg">
                                            欢迎来到华为商城，请&nbsp;<script>document.write('<a href="/ilogin/login" rel="nofollow" target="_blank">登录</a>');</script>
                                            <br>还没账号？&nbsp;<a
                                                href="/register/index"
                                                rel="nofollow" target="_blank">注册</a>&nbsp;即可享受&nbsp;&nbsp;&nbsp;&nbsp;>
                                        </div>
                                        <div class="w-btn">
                                            <a class="new" href="javasvript:;">新人福利</a>
                                            <a class="" href="javasvript:;">会员频道</a>
                                        </div>
                                    </div>
                                    <?php else: ?>

                                        <div id="play"><span id="plays">欢迎您 <br/><br/><a href="/ipersonal/index"><?php echo \think\Session::get('username'); ?></a></div>
                                <?php endif; ?>
                                </div>
                            </li>
                            <li class="fl s2">
                                <ul class="clearfix">
                                    <li>
                                        <a href="/ilist/index/id/1"
                                           onclick="_paq.push(['trackLink','PC首页功能导航_全屏四摄', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                            <div class="p-img">
                                                <img class="img0"
                                                     src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                     alt="全屏四摄">
                                            </div>
                                            <div class="p-dec">全屏四摄</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ilist/index/id/1"
                                           onclick="_paq.push(['trackLink','PC首页功能导航_优购码', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                            <div class="p-img">
                                                <img class="img1"
                                                     src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                     alt="优购码">
                                            </div>
                                            <div class="p-dec">优购码</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ilist/index/id/1"
                                           onclick="_paq.push(['trackLink','PC首页功能导航_优选配件', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                            <div class="p-img">
                                                <img class="img2"
                                                     src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                     alt="优选配件">
                                            </div>
                                            <div class="p-dec">优选配件</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ilist/index/id/1"
                                           onclick="_paq.push(['trackLink','PC首页功能导航_会员领券', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                            <div class="p-img">
                                                <img class="img3"
                                                     src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                     alt="会员领券">
                                            </div>
                                            <div class="p-dec">会员领券</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ilist/index/id/1"
                                           onclick="_paq.push(['trackLink','PC首页功能导航_以旧换新', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                            <div class="p-img">
                                                <img class="img4"
                                                     src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                     alt="以旧换新">
                                            </div>
                                            <div class="p-dec">以旧换新</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/ilist/index/id/1"
                                           onclick="_paq.push(['trackLink','PC首页功能导航_企业购', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                            <div class="p-img">
                                                <img class="img5"
                                                     src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                     alt="企业购">
                                            </div>
                                            <div class="p-dec">企业购</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="fl s3">
                                <div class="p-notice clearfix">
                                    <div class="icon-notice fl">
                                        <a href="/inotice/list" title="商城公告">
                                            <span></span>
                                        </a>
                                    </div>
                                    <div class="p-notice-content" id="notice">
                                        <ul class="p-notice-list fl">
                                            <?php foreach($notice as $vo): ?>
                                            <li><a href="/inotice/centent/id/<?php echo $vo['id']; ?>" target="_blank"><?php echo $vo['title']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-info">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="/ilist/index/id/1"
                                               onclick="_paq.push(['trackLink','PC首页功能导航_优购码', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                                <span><img class="img0"
                                                           src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                           alt="优购码"></span>优购码
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/ilist/index/id/1"
                                               onclick="_paq.push(['trackLink','PC首页功能导航_实名认证', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                                <span><img class="img1"
                                                           src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                           alt="实名认证"></span>实名认证
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/ilist/index/id/1"
                                               onclick="_paq.push(['trackLink','PC首页功能导航_手机充值', 'link', ' ']);ec.code.addAnalytics({hicloud:true});">
                                                <span><img class="img2"
                                                           src="__STATIC__/index/images/424bb1bb5070e13af62f4068cf54f60a.png"
                                                           alt="手机充值"></span>手机充值
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="hr-12"></div>
                    <div class="">
                        <ul class="home-promo-list clearfix">
                            <li><a href="/ilist/index/id/1" class="item"><img
                                    src="__STATIC__/index/images/2017122723574296.png"/></a></li>
                            <li><a href="/ilist/index/id/1" class="item"><img
                                    src="__STATIC__/index/images/20171221172639368.png"/></a></li>
                            <li><a href="/ilist/index/id/1" class="item"><img
                                    src="__STATIC__/index/images/20171226191821829.png"/></a></li>
                            <li><a href="/ilist/index/id/1" class="item"><img
                                    src="__STATIC__/index/images/20171223141120535.png"/></a></li>
                            <!-- <li><a target="_blank" href="./images/2017122723574296.png" /></a></li>
                        <li><a target="_blank" href="./images/20171221172639368.png" /></a></li>
                        <li><a target="_blank" href="./images/20171226191821829.png" /></a></li>
                        <li><a target="_blank" href="./images/20171223141120535.png" /></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="b">
                    <!--20170222 热销单品 start-->
                    <!-- 20170222-首页--热销单品-start -->
                    <div class="home-recommend-goods home-hot-goods">
                        <div class="h">
                            <h2 class="title change-title">热销单品</h2>
                        </div>
                        <div class="b clearfix">
                            <div class="span-232 fl">
                                <ul class="grid-promo-list clearfix">
                                    <li class="grid-items grid-items-sm">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <img src="__STATIC__/index/images/1514368382580.jpg" alt=""/>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="span-968 fl">
                                <ul class="grid-list clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1507694482849mp.jpg"
                                                     alt="荣耀畅玩7X 全网通标配版（极光蓝）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀畅玩7X</h3>
                                            <p class="grid-desc">千元全面屏 购机赢好礼&nbsp; </p>
                                            <p class="grid-price">&yen;1299</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575938261.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1512111831323mp.jpg"
                                                     alt="HUAWEI nova 2s 4GB+64G 全网通版（银钻灰）"/>
                                            </p>
                                            <h3 class="grid-title">HUAWEI nova 2s</h3>
                                            <p class="grid-desc">尊享6期免息&nbsp; </p>
                                            <p class="grid-price">&yen;2699</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575938261.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1496990939106mp.jpg"
                                                     alt="荣耀9 全网通标配版 4GB+64GB（魅海蓝）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀9</h3>
                                            <p class="grid-desc">最高优惠400元&nbsp; </p>
                                            <p class="grid-price">&yen;2299</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1503399182691mp.jpg"
                                                     alt="华为畅享7 Plus 4GB+64GB 全网通高配版（香槟金）"/>
                                            </p>
                                            <h3 class="grid-title">华为畅享7 Plus</h3>
                                            <p class="grid-desc">直降200元+赠好礼&nbsp; </p>
                                            <p class="grid-price">&yen;1499</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497576073762.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1505115909677mp.jpg"
                                                     alt="荣耀V9 play 全网通标配版（极光蓝）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀V9 play</h3>
                                            <p class="grid-desc">下单立减200元&nbsp; </p>
                                            <p class="grid-price">&yen;999</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1490601871496mp.jpg"
                                                     alt="HUAWEI P10 4GB+64GB 全网通版（草木绿）"/>
                                            </p>
                                            <h3 class="grid-title">HUAWEI P10</h3>
                                            <p class="grid-desc">领券立减+赠好礼&nbsp; </p>
                                            <p class="grid-price">&yen;3488</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1506589486461mp.jpg"
                                                     alt="荣耀V9 全网通高配版 6GB+64GB（极光蓝）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀V9</h3>
                                            <p class="grid-desc">优惠200元+赠好礼&nbsp; </p>
                                            <p class="grid-price">&yen;2699</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items ">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1488870482490mp.jpg"
                                                     alt="HUAWEI P10 Plus 6GB+64GB 全网通版（钻雕蓝）"/>
                                            </p>
                                            <h3 class="grid-title">HUAWEI P10 Plus</h3>
                                            <p class="grid-desc">领券立减+赠好礼&nbsp; </p>
                                            <p class="grid-price">&yen;3988</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575900592.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- 20170222-首页-热销单品-end -->                <!--20170222 热销单品 end-->
                </div>
                <div class="b">
                    <!--20170223 精品推荐 start-->
                    <!-- 20170223-首页-精品推荐-start -->
                    <div class="home-recommend-goods">
                        <div class="h">
                            <h2 class="title">精品推荐</h2>
                        </div>
                        <div class="b">
                            <div id="goodsRecommend-recommend" class="goods-rolling swiper-container relative">
                                <ul id="" class="grid-list swiper-wrapper clearfix">
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1513928134412mp.jpg"
                                                     alt="荣耀体脂秤（白色）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀体脂秤</h3>
                                            <p class="grid-desc">我的健康我做主&nbsp; </p>
                                            <p class="grid-price">&yen;179</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575814983.png"
                                                     alt="荣耀体脂秤（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1506671611280mp.jpg"
                                                     alt="荣耀Waterplay 防水影音平板 3+32G WiFi版（皓月银）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀WaterPlay</h3>
                                            <p class="grid-desc">防水影音平板&nbsp; </p>
                                            <p class="grid-price">&yen;1999</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575814983.png"
                                                     alt="荣耀Waterplay 防水影音平板 3+32G WiFi版（皓月银）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1513571794593mp.jpg"
                                                     alt="【新品】（华为）HUAWEI MateBook D（2018版）15.6英寸轻薄笔记本电脑（i5-8250U 8G 256G MX150 2G独显 预装office）皓月银"/>
                                            </p>
                                            <h3 class="grid-title">HUAWEI MateBook D（2018版）</h3>
                                            <p class="grid-desc">100元订金可抵300元&nbsp; </p>
                                            <p class="grid-price">&yen;5188</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575900592.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1513061872226mp.jpg"
                                                     alt="荣耀平板2 4GB+64GB WiFi版（珍珠白）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀平板2 4+64GB WiFi</h3>
                                            <p class="grid-desc">持久续航，好玩不贵&nbsp; </p>
                                            <p class="grid-price">&yen;1499</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1512699241768mp.jpg"
                                                     alt="华为智能体脂秤"/>
                                            </p>
                                            <h3 class="grid-title">华为智能体脂秤</h3>
                                            <p class="grid-desc">限时优惠10元&nbsp; </p>
                                            <p class="grid-price">&yen;189</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575938261.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1497184228344mp.jpg"
                                                     alt="荣耀8 4GB+64GB 全网通版（魅海蓝）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀8</h3>
                                            <p class="grid-desc">限时最高优惠200&nbsp; </p>
                                            <p class="grid-price">&yen;1699</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1512959412750mp.jpg"
                                                     alt="华为快充车载充电器（黑色）"/>
                                            </p>
                                            <h3 class="grid-title">华为快充车载充电器</h3>
                                            <p class="grid-desc">&nbsp; </p>
                                            <p class="grid-price">&yen;89</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/1489246971535.jpg"
                                                     alt="荣耀 NOTE 8"/>
                                            </p>
                                            <h3 class="grid-title">荣耀 NOTE 8</h3>
                                            <p class="grid-desc">领券下单省800&nbsp; </p>
                                            <p class="grid-price">&yen;1999</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1507769117117mp.jpg"
                                                     alt="HUAWEI WATCH 2 Pro华为新款智能手表 4G版（钛银灰）"/>
                                            </p>
                                            <h3 class="grid-title">HUAWEI WATCH 2 Pro</h3>
                                            <p class="grid-desc">独立通话(eSIM技术)&nbsp; </p>
                                            <p class="grid-price">&yen;2588</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1507545954611mp.jpg"
                                                     alt="荣耀路由2（白色）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀路由2</h3>
                                            <p class="grid-desc">双网双通 双频优选&nbsp; </p>
                                            <p class="grid-price">&yen;249</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497576023361.png"
                                                     alt="荣耀路由2（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1507606609600mp.jpg"
                                                     alt="华为路由器WS5200（白色）"/>
                                            </p>
                                            <h3 class="grid-title">华为路由器WS5200</h3>
                                            <p class="grid-desc">支持5G信号智能优先选择&nbsp; </p>
                                            <p class="grid-price">&yen;259</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497576023361.png"
                                                     alt="华为路由器WS5200（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1496627716396mp.jpg"
                                                     alt="荣耀手环3 标准版（活力橙）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀手环3</h3>
                                            <p class="grid-desc">NFC支付* 50米防水&nbsp; </p>
                                            <p class="grid-price">&yen;229</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575814983.png"
                                                     alt="荣耀手环3 标准版（活力橙）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1495006232039mp.jpg"
                                                     alt="（华为）HUAWEI MateBook D 15.6英寸轻薄窄边框笔记本电脑（ i5-7200U  4G 500G 940MX 2G独显 FHD Win10）香槟金"/>
                                            </p>
                                            <h3 class="grid-title">HUAWEI MateBook D</h3>
                                            <p class="grid-desc">尊享6期分期免息&nbsp; </p>
                                            <p class="grid-price">&yen;4588</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575900592.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1506139200867mp.jpg"
                                                     alt="华为手环B3 青春版（黑色）"/>
                                            </p>
                                            <h3 class="grid-title">华为手环B3 青春版</h3>
                                            <p class="grid-desc">蓝牙通话 活动记录 智能提醒&nbsp; </p>
                                            <p class="grid-price">&yen;469</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1507890734862mp.jpg"
                                                     alt="荣耀畅玩手环 A2（白色）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀畅玩手环 A2</h3>
                                            <p class="grid-desc">智能大屏 随心而动&nbsp; </p>
                                            <p class="grid-price">&yen;189</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575814983.png"
                                                     alt="荣耀畅玩手环 A2（白色）"/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/1496236124208.png"
                                                     alt="HUAWEI WATCH 2"/>
                                            </p>
                                            <h3 class="grid-title">HUAWEI WATCH 2</h3>
                                            <p class="grid-desc">华为第二代智能运动手表&nbsp; </p>
                                            <p class="grid-price">&yen;1588</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1489548822739mp.jpg"
                                                     alt="荣耀xSport 运动蓝牙耳机（魅焰红）"/>
                                            </p>
                                            <h3 class="grid-title">荣耀xSport 运动蓝牙耳机</h3>
                                            <p class="grid-desc">11h长续航 狂甩不掉&nbsp; </p>
                                            <p class="grid-price">&yen;269</p>
                                            <p class="grid-tips">
                                                <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                            </p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/1496236247761.png"
                                                     alt="华为平板 M3"/>
                                            </p>
                                            <h3 class="grid-title">华为平板 M3</h3>
                                            <p class="grid-desc">2K高清屏幕 麒麟950&nbsp; </p>
                                            <p class="grid-price">&yen;1788</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/1493696851151.png"
                                                     alt="华为路由器 A1 畅享版"/>
                                            </p>
                                            <h3 class="grid-title">华为路由器 A1 畅享版</h3>
                                            <p class="grid-desc">优选5G信号 WiFi自动加速&nbsp; </p>
                                            <p class="grid-price">&yen;219</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1490921883474mp.jpg"
                                                     alt="华为20000mAh 移动电源 9V2A 快充版（黑色）"/>
                                            </p>
                                            <h3 class="grid-title">华为2万毫安移动电源</h3>
                                            <p class="grid-desc">大容量 更持久&nbsp; </p>
                                            <p class="grid-price">&yen;249</p>
                                        </a>
                                    </li>
                                    <!--通过添加current 来实现 hover效果-->
                                    <li class="grid-items swiper-slide">
                                        <a class="thumb" href="/ilist/index/id/1">
                                            <p class="grid-img">
                                                <img src="__STATIC__/index/images/428_428_1495075512638mp.jpg"
                                                     alt="华为随行WiFi 2（深灰色）"/>
                                            </p>
                                            <h3 class="grid-title">华为随行WiFi 2</h3>
                                            <p class="grid-desc">4G全网通 3000mAh大电池&nbsp; </p>
                                            <p class="grid-price">&yen;469</p>
                                        </a>
                                    </li>
                                </ul>
                                <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
                                <div class="grid-btn swiper-button-next btn-next"><span></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- 20170223-首页-精品推荐-end -->                <!--20170223 精品推荐 end-->
                </div>
                <div></div>
            </div>
        </div>
        <div class="hr-10"></div>
    </div>
    <!-- 2017-02-15-菜单栏-end -->
    <!-- 20160812 首页轮播图下方 end -->
    <div class="channel-floor">
        <div class="layout">
            <!-- 2017-02-15-banner-1200*110-start -->
            <div class="home-banner">
                <!-- 2017-02-15-banner-图片轮换-start -->
                <div class="home-banner-slideshow">
                    <!-- 20130903-ad-图片轮换-start -->
                    <div class="banner-slideshow">
                        <div id="m-banner" class="ec-slider">
                            <ul class="ec-slider-list">
                                <li class="ec-slider-item" style="background:;">
                                    <div class="ec-slider-item-img"><a href="/ilist/index/id/1"
                                                                       onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第1位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});"
                                                                       target="_blank"><img
                                            src="__STATIC__/index/images/20171222114319894.jpg"/></a></div>
                                </li>
                                <li class="ec-slider-item" style="background:;">
                                    <div class="ec-slider-item-img"><a
                                            href="/ilist/index/id/1"
                                            onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第3位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});"
                                            target="_blank"><img
                                            src="__STATIC__/index/images/20171215221728532.jpg"/></a></div>
                                </li>
                                <li class="ec-slider-item" style="background:;">
                                    <div class="ec-slider-item-img"><a
                                            href="/ilist/index/id/1"
                                            onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第4位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});"
                                            target="_blank"><img
                                            src="__STATIC__/index/images/2017122215311003.jpg"/></a></div>
                                </li>
                                <li class="ec-slider-item" style="background:;">
                                    <div class="ec-slider-item-img"><a
                                            href="/ilist/index/id/1"
                                            onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第5位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});"
                                            target="_blank"><img
                                            src="__STATIC__/index/images/20171130101923525.jpg"/></a></div>
                                </li>
                                <li class="ec-slider-item" style="background:;">
                                    <div class="ec-slider-item-img"><a
                                            href="/ilist/index/id/1"
                                            onclick="_paq.push([&#39;trackLink&#39;,&#39;首页中间通栏广告第6位&#39;, &#39;link&#39;, &#39;&#39;]);ec.code.addAnalytics({hicloud:true});"
                                            target="_blank"><img
                                            src="__STATIC__/index/images/20171214110010157.jpg"/></a></div>
                                </li>
                            </ul>
                        </div>
                        <script>
                            ec.load("ec.slider", {
                                loadType: "lazy",
                                callback: function () {
                                    $("#m-banner").slider({
                                        width: 1200, //　必须
                                        height: 120, //　必须
                                        style: 1, //　1显示分页，2只显示左右箭头,3两者都显示
                                        pause: 5000, 	//间隔时间
                                        auto: true
                                    });
                                }
                            });

                        </script>
                    </div>
                </div><!-- 2017-02-15-banner-图片轮换-end -->
            </div><!-- 2017-02-15-banner-1200*110-end -->
        </div>
    </div>
    <div class="event-float-layout">
        <!--添加 fixed  position: fixed !important;top: 20px;z-index: 500;-->
        <div class="event-float">
            <div>
                <ul class="hover-list">
                </ul>
            </div>
        </div>
    </div>
    <!-- 2017-05-12-HOME right side navigation -start -->
    <!-- 2017-05-12-HOME right side navigation -end -->
    <!-- 2017-02-15-HOME GOOGLIST-start -->
    <div class="home-channel-container relative">


        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 商品是否为4的倍数 -->
        <!-- 优先填充第一行数据 -->
        <!-- 排除非4倍数的商品 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_394203">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">手机</h2>
                    <ul class="channel-nav fl">
                        <li><a href="/ilist/index/id/1">荣耀</a></li>
                        <li><a href="/ilist/index/id/1">HUAWEI P系列</a></li>
                        <li><a href="/ilist/index/id/1">荣耀畅玩系列</a></li>
                        <li><a href="/ilist/index/id/1">HUAWEI Mate系列</a></li>
                        <li><a href="/ilist/index/id/1">HUAWEI nova系列</a></li>
                        <li><a href="/ilist/index/id/1">HUAWEI 麦芒系列</a></li>
                        <li><a href="/ilist/index/id/1">华为畅享系列</a></li>
                        <li><a href="/ilist/index/id/1">合约机</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-36" target="_blank">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                            <li class="grid-items grid-items-md ">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <img src="__STATIC__/index/images/1514536531619.jpg" alt=""/>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1498726562557mp.jpg"
                                             alt="华为畅享7 3GB+32GB 全网通高配版（红色）"/>
                                    </p>
                                    <h3 class="grid-title">华为畅享7</h3>
                                    <p class="grid-desc">最高优惠100元+赠好礼&nbsp;</p>
                                    <p class="grid-price">&yen;999</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1476673425293mp.jpg"
                                             alt="荣耀畅玩6X 全网通尊享版（铂光金）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀畅玩6X</h3>
                                    <p class="grid-desc">尊享版优惠450元&nbsp;</p>
                                    <p class="grid-price">&yen;1699</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1505273765269mp.jpg"
                                             alt="HUAWEI 麦芒6 4GB+64GB 全网通版（极光蓝）"/>
                                    </p>
                                    <h3 class="grid-title">HUAWEI 麦芒6</h3>
                                    <p class="grid-desc">尊享6期分期免息&nbsp;</p>
                                    <p class="grid-price">&yen;2199</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1504174310613mp.jpg"
                                             alt="荣耀畅玩6 全网通标配版（金色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀畅玩6</h3>
                                    <p class="grid-desc">高性价比/限时开售&nbsp;</p>
                                    <p class="grid-price">&yen;599</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1493110604858mp.jpg"
                                             alt="HUAWEI nova 青春版 4GB+64GB  全网通版（樱语粉）"/>
                                    </p>
                                    <h3 class="grid-title">HUAWEI nova 青春版</h3>
                                    <p class="grid-desc">直降200&nbsp;</p>
                                    <p class="grid-price">&yen;1799</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576073762.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1493717199046mp.jpg"
                                             alt="荣耀8青春版 全网通标配版（幻夜黑）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀8青春版</h3>
                                    <p class="grid-desc">下单立减200元&nbsp;</p>
                                    <p class="grid-price">&yen;1099</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1498791987410mp.jpg"
                                             alt="HUAWEI nova 2 4GB+64GB 全网通版（玫瑰金）"/>
                                    </p>
                                    <h3 class="grid-title">HUAWEI nova 2</h3>
                                    <p class="grid-desc">前置2000W高清美拍&nbsp;</p>
                                    <p class="grid-price">&yen;2199</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 商品是否为4的倍数 -->
        <!-- 优先填充第一行数据 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_394211">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">笔记本电脑</h2>
                    <ul class="channel-nav fl">
                        <li><a href="/ilist/index/id/1">平板电脑</a></li>
                        <li><a href="/ilist/index/id/1">笔记本电脑</a></li>
                        <li><a href="/ilist/index/id/1">笔记本配件</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-40" target="_blank">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                            <li class="grid-items grid-items-md ">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <img src="__STATIC__/index/images/1514166810053.jpg" alt=""/>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1495007640609mp.jpg"
                                             alt=""/>
                                    </p>
                                    <h3 class="grid-title">HUAWEI MateBook E</h3>
                                    <p class="grid-desc">尊享6期分期免息&nbsp;</p>
                                    <p class="grid-price">&yen;6588</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575900592.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1495008740731mp.jpg"
                                             alt="（华为）HUAWEI MateBook X 13英寸轻薄笔记本电脑（i5-7200U 4G 256G Win10 内含拓展坞）流光金"/>
                                    </p>
                                    <h3 class="grid-title">HUAWEI MateBook X</h3>
                                    <p class="grid-desc">最高直降1000元&nbsp;</p>
                                    <p class="grid-price">&yen;5988</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575900592.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1506667987823mp.jpg"
                                             alt=""/>
                                    </p>
                                    <h3 class="grid-title">HUAWEI MateBook</h3>
                                    <p class="grid-desc">部分内含扩展坞、键盘、触控笔&nbsp;</p>
                                    <p class="grid-price">&yen;6988</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 商品是否为4的倍数 -->
        <!-- 优先填充第一行数据 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_394213">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">精品平板</h2>
                    <ul class="channel-nav fl">
                        <li><a href="/ilist/index/id/1">平板电脑</a></li>
                        <li><a href="/ilist/index/id/1">笔记本电脑</a></li>
                        <li><a href="/ilist/index/id/1">笔记本配件</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-40" target="_blank">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                            <li class="grid-items grid-items-md ">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <img src="__STATIC__/index/images/1514300673193.jpg" alt=""/>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1495096799385mp.jpg"
                                             alt="华为平板 M3 青春版 10.1英寸 3GB+32GB WiFi版（皎月白）"/>
                                    </p>
                                    <h3 class="grid-title">华为平板 M3 青春版 10.1英寸</h3>
                                    <p class="grid-desc">赠188元礼品&nbsp;</p>
                                    <p class="grid-price">&yen;1899</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1476778957240mp.jpg"
                                             alt="荣耀平板2 3GB+32GB WiFi版（香槟金）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀平板2 WiFi版</h3>
                                    <p class="grid-desc">8英寸全高清IPS屏&nbsp;</p>
                                    <p class="grid-price">&yen;1299</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1497422265771mp.jpg"
                                             alt="华为平板M3 青春版 8英寸 3GB+32GB WiFi版（皎月白）"/>
                                    </p>
                                    <h3 class="grid-title">华为平板M3 青春版 8英寸</h3>
                                    <p class="grid-desc">赠价值188元礼品&nbsp;</p>
                                    <p class="grid-price">&yen;1349</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1500455962969mp.jpg"
                                             alt="荣耀畅玩平板2 9.6英寸 WiFi高配版（苍穹灰）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀畅玩平板2 9.6英寸</h3>
                                    <p class="grid-desc">护眼滤蓝光高清屏&nbsp;</p>
                                    <p class="grid-price">&yen;1299</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1473406494708mp.jpg"
                                             alt="华为平板 M3 4GB+32GB  WIFI版（日晖金）"/>
                                    </p>
                                    <h3 class="grid-title">华为平板 M3</h3>
                                    <p class="grid-desc">赠送价值188元礼品&nbsp;</p>
                                    <p class="grid-price">&yen;1788</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1494902274982mp.jpg"
                                             alt="荣耀畅玩平板2 8英寸 WiFi版（苍穹灰）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀畅玩平板2 WiFi版</h3>
                                    <p class="grid-desc">护眼滤蓝光高清屏&nbsp;</p>
                                    <p class="grid-price">&yen;799</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="荣耀畅玩平板2 8英寸 WiFi版（苍穹灰）"/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1500629825123mp.jpg"
                                             alt="荣耀畅玩平板2 7英寸 WiFi版（苍穹灰）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀畅玩平板2 7英寸 WiFi版（苍穹灰）</h3>
                                    <p class="grid-desc">掌上炫彩世界&nbsp;</p>
                                    <p class="grid-price">&yen;599</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 商品是否为4的倍数 -->
        <!-- 优先填充第一行数据 -->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_394199">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">智能穿戴</h2>
                    <ul class="channel-nav fl">
                        <li><a href="/ilist/index/id/1">手环</a></li>
                        <li><a href="/ilist/index/id/1">手表</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-59" target="_blank">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                            <li class="grid-items grid-items-md ">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <img src="__STATIC__/index/images/1510043740940.jpg" alt=""/>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1507890734862mp.jpg"
                                             alt="荣耀畅玩手环 A2（白色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀畅玩手环 A2</h3>
                                    <p class="grid-desc">OLED大屏 续航长达9天&nbsp;</p>
                                    <p class="grid-price">&yen;189</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="荣耀畅玩手环 A2（白色）"/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1488180416495mp.jpg"
                                             alt="HUAWEI WATCH 2 华为第二代智能运动手表 蓝牙版（碳晶黑）"/>
                                    </p>
                                    <h3 class="grid-title">HUAWEI WATCH 2</h3>
                                    <p class="grid-desc">华为第二代智能运动手表&nbsp;</p>
                                    <p class="grid-price">&yen;1588</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1496627716396mp.jpg"
                                             alt="荣耀手环3 标准版（活力橙）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀手环3</h3>
                                    <p class="grid-desc">50米防水心率手环&nbsp;</p>
                                    <p class="grid-price">&yen;229</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="荣耀手环3 标准版（活力橙）"/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1469093643984mp.jpg"
                                             alt="华为手环 B3 运动版（韵律黑）"/>
                                    </p>
                                    <h3 class="grid-title">华为手环 B3</h3>
                                    <p class="grid-desc">蓝牙耳机与智能手环结合&nbsp;</p>
                                    <p class="grid-price">&yen;949</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1488161147740.png" alt="荣耀手表 S1"/>
                                    </p>
                                    <h3 class="grid-title">荣耀手表 S1</h3>
                                    <p class="grid-desc">心率监测 游泳防水&nbsp;</p>
                                    <p class="grid-price">&yen;699</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1498098860450mp.jpg"
                                             alt="华为运动手环 标准版（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">华为运动手环</h3>
                                    <p class="grid-desc">50米防水游泳&nbsp;</p>
                                    <p class="grid-price">&yen;268</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1506139200867mp.jpg"
                                             alt="华为手环B3 青春版（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">华为手环B3 青春版</h3>
                                    <p class="grid-desc">蓝牙通话 活动记录&nbsp;</p>
                                    <p class="grid-price">&yen;469</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_394205">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">智能家居</h2>
                    <ul class="channel-nav fl">
                        <li><a href="/ilist/index/id/1">子母路由</a></li>
                        <li><a href="/ilist/index/id/1">电视盒子</a></li>
                        <li><a href="/ilist/index/id/1">路由器</a></li>
                        <li><a href="/ilist/index/id/1">电力猫</a></li>
                        <li><a href="/ilist/index/id/1">随行wifi</a></li>
                        <li><a href="/ilist/index/id/1">HUAWEI HiLink生态产品</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-43" target="_blank">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items grid-items-lg">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <img src="__STATIC__/index/images/1509586851955.jpg" alt=""/>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1507606609600mp.jpg"
                                             alt="华为路由器WS5200（白色）"/>
                                    </p>
                                    <h3 class="grid-title">华为路由WS5200</h3>
                                    <p class="grid-desc">支持5G信号智能优先选择&nbsp;</p>
                                    <p class="grid-price">&yen;259</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1507545954611mp.jpg"
                                             alt="荣耀路由2（白色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀路由2</h3>
                                    <p class="grid-desc">智能体验，快人一步&nbsp;</p>
                                    <p class="grid-price">&yen;249</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1495075512638mp.jpg"
                                             alt="华为随行WiFi 2（深灰色）"/>
                                    </p>
                                    <h3 class="grid-title">华为随行WiFi 2</h3>
                                    <p class="grid-desc">4G全网通&nbsp;</p>
                                    <p class="grid-price">&yen;469</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1493972111510mp.jpg"
                                             alt="荣耀路由X1 增强版（白色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀路由X1 增强版</h3>
                                    <p class="grid-desc">不见天线 稳不掉线&nbsp;</p>
                                    <p class="grid-price">&yen;149</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1500436144767.png"
                                             alt="华为子母路由器 Q1"/>
                                    </p>
                                    <h3 class="grid-title">华为子母路由器 Q1</h3>
                                    <p class="grid-desc">双WiFi覆盖&nbsp;</p>
                                    <p class="grid-price">&yen;559</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1469695994751mp.jpg"
                                             alt="荣耀盒子Pro （白色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀盒子Pro</h3>
                                    <p class="grid-desc">双千兆网速，大户型覆盖&nbsp;</p>
                                    <p class="grid-price">&yen;449</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="goodsContent4" class="goods-rolling swiper-container relative pdt-12">
                        <ul class="grid-list swiper-wrapper clearfix">
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="8">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1496281828441.jpg"
                                             alt="华为路由 WS318 增强版"/>
                                    </p>
                                    <h3 class="grid-title">华为路由 WS318 增强版</h3>
                                    <p class="grid-desc">高性能双天线&nbsp; </p>
                                    <p class="grid-price">&yen;109</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="9">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1500025136978mp.jpg"
                                             alt="荣耀路由X1（白色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀路由X1（白色）</h3>
                                    <p class="grid-desc">时刻高速上网且稳定不掉线&nbsp; </p>
                                    <p class="grid-price">&yen;99</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="10">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1493696328524.png"
                                             alt="华为路由器A1 畅享版"/>
                                    </p>
                                    <h3 class="grid-title">华为路由器A1 畅享版</h3>
                                    <p class="grid-desc">优选5G信号 Wifi自动加速&nbsp; </p>
                                    <p class="grid-price">&yen;219</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="11">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1482233766254.png" alt="荣耀路由标准版"/>
                                    </p>
                                    <h3 class="grid-title">荣耀路由标准版</h3>
                                    <p class="grid-desc">海思双核处理器&nbsp; </p>
                                    <p class="grid-price">&yen;188</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575964613.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="12">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1468546777559mp.jpg"
                                             alt="华为盒子 4K高清智能网络电视机顶盒（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">华为盒子</h3>
                                    <p class="grid-desc">4K高清智能网络电视机顶盒&nbsp; </p>
                                    <p class="grid-price">&yen;379</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="13">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1482233802925.png" alt="荣耀路由Pro"/>
                                    </p>
                                    <h3 class="grid-title">荣耀路由Pro</h3>
                                    <p class="grid-desc">双千兆旗舰路由&nbsp; </p>
                                    <p class="grid-price">&yen;328</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="14">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1484100325589.jpg" alt="华为WS832"/>
                                    </p>
                                    <h3 class="grid-title">华为WS832</h3>
                                    <p class="grid-desc">1200M无线路由器&nbsp; </p>
                                    <p class="grid-price">&yen;249</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="15">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1482233776849.png" alt="荣耀WiFi穿墙宝"/>
                                    </p>
                                    <h3 class="grid-title">荣耀WiFi穿墙宝</h3>
                                    <p class="grid-desc">插座变热点 信号变满格&nbsp; </p>
                                    <p class="grid-price">&yen;268</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="16">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489245789451.jpg" alt="华为 WS550"/>
                                    </p>
                                    <h3 class="grid-title">华为 WS550</h3>
                                    <p class="grid-desc">双核450M路由器&nbsp; </p>
                                    <p class="grid-price">&yen;159</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="17">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489246047722.jpg" alt="华为 WS331c"/>
                                    </p>
                                    <h3 class="grid-title">华为 WS331c</h3>
                                    <p class="grid-desc">300Mbps 无线扩展器&nbsp; </p>
                                    <p class="grid-price">&yen;109</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="18">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489753563752.jpg" alt="华为 PT500"/>
                                    </p>
                                    <h3 class="grid-title">华为 PT500</h3>
                                    <p class="grid-desc">500M电力线适配器&nbsp; </p>
                                    <p class="grid-price">&yen;129</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="19">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1469155904513mp.jpg"
                                             alt="荣耀盒子 标准版（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀盒子 标准版（黑色）</h3>
                                    <p class="grid-desc">&nbsp; </p>
                                    <p class="grid-price">&yen;298</p>
                                </a>
                            </li>
                        </ul>
                        <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
                        <div class="grid-btn swiper-button-next btn-next"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_394201">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">热销配件</h2>
                    <ul class="channel-nav fl">
                        <li><a href="/ilist/index/id/1">移动电源</a></li>
                        <li><a href="/ilist/index/id/1">耳机</a></li>
                        <li><a href="/ilist/index/id/1">充电器/线材</a></li>
                        <li><a href="/ilist/index/id/1">自拍杆/支架</a></li>
                        <li><a href="/ilist/index/id/1">音箱</a></li>
                        <li><a href="/ilist/index/id/1">U盘/存储卡</a></li>
                        <li><a href="/ilist/index/id/1">排插</a></li>
                        <li><a href="/ilist/index/id/1">摄像机/镜头</a></li>
                        <li><a href="/ilist/index/id/1">智能硬件</a></li>
                        <li><a href="/ilist/index/id/1">生活周边</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-54" target="_blank">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items grid-items-lg">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <img src="__STATIC__/index/images/1514597504182.jpg" alt=""/>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1489548822739mp.jpg"
                                             alt="荣耀xSport 运动蓝牙耳机（魅焰红）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀运动蓝牙耳机</h3>
                                    <p class="grid-desc">像音乐一样自由&nbsp;</p>
                                    <p class="grid-price">&yen;269</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1513826439898mp.jpg"
                                             alt="荣耀音乐小巨蛋（灰色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀音乐小巨蛋</h3>
                                    <p class="grid-desc">1月8日10:08首销&nbsp;</p>
                                    <p class="grid-price">&yen;199</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1512356560498mp.jpg"
                                             alt="华为运动心率蓝牙耳机R1 Pro（红色）"/>
                                    </p>
                                    <h3 class="grid-title">华为运动心率蓝牙耳机R1 Pro</h3>
                                    <p class="grid-desc">从心率到“心晴”，从运动到心动&nbsp;</p>
                                    <p class="grid-price">&yen;699</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1513928134412mp.jpg"
                                             alt="荣耀体脂秤（白色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀体脂秤</h3>
                                    <p class="grid-desc">11项身体数据检测&nbsp;</p>
                                    <p class="grid-price">&yen;179</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png" alt="荣耀体脂秤（白色）"/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1492166928020mp.jpg"
                                             alt="华为三脚架自拍杆 无线版（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">华为无线三脚架自拍杆</h3>
                                    <p class="grid-desc">开启自拍新时代&nbsp;</p>
                                    <p class="grid-price">&yen;129</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1511839266304mp.jpg"
                                             alt="荣耀车载充电器（supercharge 快充版）（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀车载充电器（supercharge 快充版）</h3>
                                    <p class="grid-desc">SuperCharge快速充电&nbsp;</p>
                                    <p class="grid-price">&yen;149</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="goodsContent5" class="goods-rolling swiper-container relative pdt-12">
                        <ul class="grid-list swiper-wrapper clearfix">
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="8">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1497325586428mp.jpg"
                                             alt="华为运动心率蓝牙耳机（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">华为运动心率蓝牙耳机</h3>
                                    <p class="grid-desc">自在运动 随心律动&nbsp; </p>
                                    <p class="grid-price">&yen;499</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="9">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489246861136.jpg"
                                             alt="荣耀10000mAh 电源"/>
                                    </p>
                                    <h3 class="grid-title">荣耀10000mAh 电源</h3>
                                    <p class="grid-desc">匠心工艺 双向快充&nbsp; </p>
                                    <p class="grid-price">&yen;149</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="荣耀10000mAh 移动电源 快充版（白色）"/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="10">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1494324027170mp.jpg"
                                             alt="荣耀车载充电器 快充版（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀车载充电器 快充版</h3>
                                    <p class="grid-desc">5A快充 4重保护&nbsp; </p>
                                    <p class="grid-price">&yen;89</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="11">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1511511587194mp.jpg"
                                             alt="荣耀魔声耳机（红色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀魔声耳机</h3>
                                    <p class="grid-desc">世界音你不同&nbsp; </p>
                                    <p class="grid-price">&yen;229</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="12">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1484107261446mp.jpg"
                                             alt="华为10000mAh 移动电源 9V2A 快充版（曜石黑）"/>
                                    </p>
                                    <h3 class="grid-title">华为10000mAh 移动电源</h3>
                                    <p class="grid-desc">18W双向快充&nbsp; </p>
                                    <p class="grid-price">&yen;159</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="华为10000mAh 移动电源 9V2A 快充版（曜石黑）"/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="13">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1495018208785mp.jpg"
                                             alt="荣耀三脚架自拍杆 无线版（白色）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀三脚架自拍杆 无线版</h3>
                                    <p class="grid-desc">蓝牙遥控 不止自拍&nbsp; </p>
                                    <p class="grid-price">&yen;89</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="荣耀三脚架自拍杆 无线版（白色）"/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="14">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1490921883474mp.jpg"
                                             alt="华为20000mAh 移动电源 9V2A 快充版（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">华为2万毫安移动电源</h3>
                                    <p class="grid-desc">大容量 更持久&nbsp; </p>
                                    <p class="grid-price">&yen;249</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="15">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489247004575.jpg" alt="荣耀排插快充版"/>
                                    </p>
                                    <h3 class="grid-title">荣耀排插快充版</h3>
                                    <p class="grid-desc">9V2A快充 多重安全保护&nbsp; </p>
                                    <p class="grid-price">&yen;89</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="16">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489245365965.jpg" alt="荣耀引擎耳机2代"/>
                                    </p>
                                    <h3 class="grid-title">荣耀引擎耳机2代</h3>
                                    <p class="grid-desc">物理调音 音质出色&nbsp; </p>
                                    <p class="grid-price">&yen;89</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="17">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1484106183237mp.jpg"
                                             alt="HUAWEI SuperCharge 快速充电器（白色）"/>
                                    </p>
                                    <h3 class="grid-title">华为4.5V 5A快速充电器</h3>
                                    <p class="grid-desc">5A快充 智能适配&nbsp; </p>
                                    <p class="grid-price">&yen;109</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="HUAWEI SuperCharge 快速充电器（白色）"/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="18">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489247952224.jpg" alt="荣耀小口哨蓝牙耳机"/>
                                    </p>
                                    <h3 class="grid-title">荣耀小口哨蓝牙耳机</h3>
                                    <p class="grid-desc">智控随充听你的&nbsp; </p>
                                    <p class="grid-price">&yen;169</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="荣耀小口哨 AM07 智控随充蓝牙耳机 （金色）"/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="19">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489245031509.jpg" alt="华为9V2A充电器"/>
                                    </p>
                                    <h3 class="grid-title">华为9V2A充电器</h3>
                                    <p class="grid-desc">高速快充 智能兼容&nbsp; </p>
                                    <p class="grid-price">&yen;69</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="20">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1497259947904mp.jpg"
                                             alt="荣耀探空精灵（冰晶白）"/>
                                    </p>
                                    <h3 class="grid-title">荣耀探空精灵</h3>
                                    <p class="grid-desc">自由深呼吸&nbsp; </p>
                                    <p class="grid-price">&yen;569</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="21">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1501065673136mp.jpg"
                                             alt="华为全景相机（蓝色）"/>
                                    </p>
                                    <h3 class="grid-title">华为全景相机</h3>
                                    <p class="grid-desc">&nbsp; </p>
                                    <p class="grid-price">&yen;899</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="22">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/1489245920315.jpg" alt="华为车载快速充电器"/>
                                    </p>
                                    <h3 class="grid-title">华为车载快速充电器</h3>
                                    <p class="grid-desc">5A快充 4重保护&nbsp; </p>
                                    <p class="grid-price">&yen;159</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="HUAWEI SuperCharge 车载快速充电器（黑色）"/>
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
                        <div class="grid-btn swiper-button-next btn-next"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 初始值 -->
        <!-- 分列式 march-past 计算显示商品数量-->
        <!-- 非对称式 asym_array -->

        <div class="layout" id="lc_394209">
            <div class="home-channel-floor">
                <div class="h">
                    <h2 class="channel-title fl">品牌配件</h2>
                    <ul class="channel-nav fl">
                        <li><a href="/ilist/index/id/1">移动电源</a></li>
                        <li><a href="/ilist/index/id/1">耳机</a></li>
                        <li><a href="/ilist/index/id/1">充电器/线材</a></li>
                        <li><a href="/ilist/index/id/1">自拍杆/支架</a></li>
                        <li><a href="/ilist/index/id/1">音箱</a></li>
                        <li><a href="/ilist/index/id/1">U盘/存储卡</a></li>
                        <li><a href="/ilist/index/id/1">排插</a></li>
                        <li><a href="/ilist/index/id/1">摄像机/镜头</a></li>
                        <li><a href="/ilist/index/id/1">智能硬件</a></li>
                        <li><a href="/ilist/index/id/1">生活周边</a></li>
                    </ul>
                    <div class="channel-more fr"><span></span><span></span><span></span>
                        <a href="/list-54" target="_blank">更多></a>
                    </div>
                </div>
                <div class="b">
                    <div class="goods-list">
                        <ul class="grid-list clearfix">
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items grid-items-lg">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <img src="__STATIC__/index/images/1514426972505.jpg" alt=""/>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1509064211648mp.jpg"
                                             alt="绿联 Type-C转HDMI连接线（白色）"/>
                                    </p>
                                    <h3 class="grid-title">绿联 Type-C转HDMI连接线</h3>
                                    <p class="grid-desc">手机秒变电脑&nbsp;</p>
                                    <p class="grid-price">&yen;108</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1503562216889mp.jpg"
                                             alt="欧普 智清读写台灯（白色）（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">欧普 智清读写台灯</h3>
                                    <p class="grid-desc">眼见清澈光&nbsp;</p>
                                    <p class="grid-price">&yen;199</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1514166594474mp.jpg"
                                             alt="720全智能净化器EP350（白色）（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">720全智能净化器EP350</h3>
                                    <p class="grid-desc">12.22-1.3 买就送环境宝&nbsp;</p>
                                    <p class="grid-price">&yen;1499</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1499134024351mp.jpg"
                                             alt="Joyoung/九阳破壁免滤豆浆机 DJ13R-P3（玫瑰红）（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">九阳破壁免滤豆浆机</h3>
                                    <p class="grid-desc">12.22-1.3 限时直降600&nbsp;</p>
                                    <p class="grid-price">&yen;999</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1486694683154mp.jpg"
                                             alt="闪迪 SanDisk 高速TF卡 microSDHC/microSDXC UHS-I存储卡 C10 80MB/秒 32G（红灰色）"/>
                                    </p>
                                    <h3 class="grid-title">闪迪 SanDisk 高速TF卡</h3>
                                    <p class="grid-desc">快速传输文件&nbsp;</p>
                                    <p class="grid-price">&yen;90</p>
                                </a>
                            </li>
                            <li class="grid-items">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1503647296333mp.jpg"
                                             alt="得邦 智能拍拍灯（白色）（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">得邦 智能拍拍灯</h3>
                                    <p class="grid-desc">12.22-1.3 限时直降20&nbsp;</p>
                                    <p class="grid-price">&yen;158</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="goodsContent6" class="goods-rolling swiper-container relative pdt-12">
                        <ul class="grid-list swiper-wrapper clearfix">
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="8">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1507860879045mp.jpg"
                                             alt="三思智能彩色球泡灯（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">三思智能彩色球泡灯</h3>
                                    <p class="grid-desc">12.22-1.3 买一送一&nbsp; </p>
                                    <p class="grid-price">&yen;99</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="三思智能彩色球泡灯（支持HUAWEI HiLink）"/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="9">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1497930538538mp.jpg"
                                             alt="科沃斯（Ecovacs）地宝DE35智能扫地机器人"/>
                                    </p>
                                    <h3 class="grid-title">科沃斯 地宝 智能扫地机器人</h3>
                                    <p class="grid-desc">12.22-1.3 限时直降400元&nbsp; </p>
                                    <p class="grid-price">&yen;1599</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="10">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1499826934154mp.jpg"
                                             alt="公牛WiFi智能插座2代（白色）（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">公牛WiFi智能插座 HiLink</h3>
                                    <p class="grid-desc">手机远程遥控&nbsp; </p>
                                    <p class="grid-price">&yen;69</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575814983.png"
                                             alt="公牛WiFi智能插座2代（白色）（支持HUAWEI HiLink）"/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="11">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1494492831899mp.jpg"
                                             alt="ROCK-M 车载手机支架 金属版（灰色）"/>
                                    </p>
                                    <h3 class="grid-title">ROCK-M 车载手机支架</h3>
                                    <p class="grid-desc">轻松单手取放&nbsp; </p>
                                    <p class="grid-price">&yen;88</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="12">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1507866100808mp.jpg"
                                             alt="720全智能净化器EP420（白色）（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">720全智能净化器EP420</h3>
                                    <p class="grid-desc">负离子&amp;紫外线杀菌&nbsp; </p>
                                    <p class="grid-price">&yen;2499</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="13">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1467360743468mp.jpg"
                                             alt="锐力 Relee RL107 商务便携式 WIFI云端摄像笔（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">锐力 WIFI 云端摄像笔</h3>
                                    <p class="grid-desc">12.22-1.3 限时直降40&nbsp; </p>
                                    <p class="grid-price">&yen;259</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497575918300.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="14">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1467364207768mp.jpg"
                                             alt="大康 Dacom Athlete（G05）专用运动型蓝牙耳机（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">大康 专用运动型蓝牙耳机</h3>
                                    <p class="grid-desc">12.22-1.3 限时直降39&nbsp; </p>
                                    <p class="grid-price">&yen;89</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="15">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1507512410104mp.jpg"
                                             alt="欧普悦雅吸顶灯（白色）（支持HUAWEI HiLink）"/>
                                    </p>
                                    <h3 class="grid-title">欧普悦雅吸顶灯</h3>
                                    <p class="grid-desc">1.22-1.3 限时直降50元&nbsp; </p>
                                    <p class="grid-price">&yen;349</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="16">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1480320498180mp.jpg"
                                             alt="耐翔 Type-C 手机电脑通用U盘 32GB（银色）"/>
                                    </p>
                                    <h3 class="grid-title">耐翔 Type-C 手机电脑通用U盘</h3>
                                    <p class="grid-desc">5种安全保护 过硬品质&nbsp; </p>
                                    <p class="grid-price">&yen;149</p>
                                </a>
                            </li>
                            <!--通过添加current 来实现 hover效果-->
                            <li class="grid-items swiper-slide" id="17">
                                <a class="thumb" href="/ilist/index/id/1">
                                    <p class="grid-img">
                                        <img src="__STATIC__/index/images/428_428_1508727168692mp.jpg"
                                             alt="SAMZHE/山泽 15AM6 HDMI线2.0版4k电视电脑高清数据线（黑色）"/>
                                    </p>
                                    <h3 class="grid-title">山泽 4k电视电脑高清数据线</h3>
                                    <p class="grid-desc">4K高清3D 超细柔软&nbsp; </p>
                                    <p class="grid-price">&yen;13.90</p>
                                    <p class="grid-tips">
                                        <img src="__STATIC__/index/images/1497576023361.png" alt=""/>
                                    </p>
                                </a>
                            </li>
                        </ul>
                        <div class="grid-btn swiper-button-prev btn-prev disabled"><span></span></div>
                        <div class="grid-btn swiper-button-next btn-next"><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-20"></div>
    </div>
    <!-- 2017-02-15-HOME GOOGLIST-end -->
    <?php echo widget('Index/footer'); ?>
