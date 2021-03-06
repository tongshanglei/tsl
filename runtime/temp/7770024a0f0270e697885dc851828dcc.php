<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\wamp\www\c\thinkphp5\public/../application/index\view\Ilist\index.html";i:1516027888;}*/ ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>华为商城-<?php echo $par['name']; ?></title>
  <meta name="keywords" content="华为手机大全,华为智能手机,华为商城">
<meta name="description" content="华为商城是华为旗下面向全国服务的电子商务官网，我们提供最新款的华为智能手机的价格、参数、图片等信息。VMALL.COM 正品保障！">

<link rel="shortcut icon" href="https://www.vmall.com/favicon.ico">
<link href="/static/index/ilist/css/ec.css" rel="stylesheet" type="text/css">
<link href="/static/index/ilist/css/index.css" rel="stylesheet" type="text/css">
<link href="/static/index/ilist/css/main.css" rel="stylesheet" type="text/css">
<script src="/static/index/ilist/js/jsapi.js" namespace="ec"></script><!--[if lte IE 6]><script>ol.isIE6=true;</script><![endif]--><!--[if IE 7]><script>ol.isIE7=true;</script><![endif]--><!--[if IE 8]><script>ol.isIE8=true;</script><![endif]-->
<script src="/static/index/ilist/js/jquery-1.js"></script>
<script src="/static/index/ilist/js/ec_002.js"></script> 
<script src="/static/index/ilist/js/ec.js"></script> 
<script src="/static/index/ilist/js/base.js"></script><script id="jsapi_loader0" loadtype="insert" type="text/javascript" src="/static/index/ilist/js/box-min.js"></script><script>(function(){var time = 0,el = document.getElementById('jsapi_loader0');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader0 fail!');} return; }ol._setLoadStatus("ec.box/box-min.js","complete");})();</script>
<script src="/static/index/ilist/js/slider.js"></script>
<script src="/static/index/ilist/js/swiper.js"></script>
<!--[if lt IE 9]><script src="https://res9.vmallres.com/20171221/js/common/html5shiv.js"></script> <![endif]-->
</head>
<body>
  <?php echo widget('Index/header'); ?>
  
<div class="hr-10"></div>
<div class="g">
    <!--面包屑 -->
	<div class="breadcrumb-area fcn">
			<a href="/index/index" title="首页">首页</a>&nbsp;&gt;&nbsp;
		
		<span><?php echo $par['name']; ?></span>
	</div>
</div>	
<div class="hr-10"></div><div class="layout">
	<!-- 20140726-商品类别-start -->
	<div class="pro-cate-area">
		<!-- 20140726-商品类别-属性-start -->
		<div class="pro-cate-attr clearfix">
			<div class="p-title">分类：</div>
			<div class="p-default">
				<ul>
                    <li id="first-category" class="selected"><a href="/ilist/index/id/<?php echo $par['id']; ?>">全部</a></li>
					<!--<li class="selected"><a href="javascript:;">全部</a></li>-->
				</ul>
			</div>
			
			<!-- 二级虚拟分类 -->
			<div class="p-values">
				<div class="p-operate" style="display: none;">
					
					<a href="javascript:;" onclick="ec.product.more(this)" class="more more-expand">更多<s></s></a>
				</div>
				
				<div class="p-expand">
					<ul class="clearfix">					
					<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$row): ?>
	                    <li><a href="/ilist/index/id/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
	                    
					</ul>
				</div>
			</div>
			
		</div>
		<div class="pro-cate-sort clearfix">
			<div class="p-title">排序：</div>
			<div class="p-default">
				<ul>
					<li id="sort-0" class="selected"><a href="javascript:;" onclick="ec.product.sort('0')">默认</a></li>
				</ul>
			</div>
			<div class="p-values">
				<div class="p-expand">					
					<ul class="clearfix">
						<li id="sort-1"><a id="price_list">价格<s></s></a></li>
						<li id="sort-2"><a>评价数<s></s></a></li>
						
					</ul>
				</div>
			</div>
		</div><!-- 20140726-商品类别-排序-end -->
		
		<form id="listForm" method="post">
			<input id="sortField" name="sortField" value="" type="hidden">
			<input id="sortType" name="sortType" value="" type="hidden">
			<input id="prdAttrList" name="prdAttrList" value="" type="hidden">
		</form>
		
	</div><!-- 20140726-商品类别-end -->

	<div class="hr-20"></div>
</div>				



<script src="/static/index/ilist/js/new_list.js"></script><script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="/static/index/ilist/js/jquery.js" charset="utf-8"></script>
<div class="layout">
	<!-- 20140726-频道-列表-start -->
    <div class="channel-list">
        <!-- 20140727-商品列表-start -->
		<div class="pro-list clearfix">
			<ul class="goods_list">
				<?php if(is_array($goods) || $goods instanceof \think\Collection || $goods instanceof \think\Paginator): if( count($goods)==0 ) : echo "" ;else: foreach($goods as $key=>$ro): ?>
            	<li>
					<div class="pro-panels">
						<p class="p-img"><a target="_blank" href="/idetails/index/id/<?php echo $ro['id']; ?>"><img  src="<?php echo ltrim($ro['opic'],"."); ?>"></a></p>
						<p class="p-name"><a target="_blank" href="" ><?php echo $ro['name']; ?><span class="red"></span></a></p>
						<p class="p-price"><b><?php echo $ro['price']; ?></b></p>
						<div class="p-button clearfix">
							<table colspan="0" rowspan="0" border="0">
								<tbody>
									<tr>
										    <td><a target="_blank" href="/cart/add/id/<?php echo $ro['id']; ?>" class="p-button-cart"><span>选购</span></a></td>
										<td><label class="p-button-score"><span>4097人评价</span></label></td>
									</tr>
								</tbody>
							</table>
						</div>	
					</div>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>	
    </div>
</div>

<script>
var price=true;
$(function (){
    $("#price_list").click(function (){
        var arr = new Array();
        $(".goods_list b").each(function (index, e){
            arr[index] = parseInt($(e).html());
        });
        //排序开始
        if(price==false){
    	    price=true;
        	for (i = 1; i < arr.length; i++) {
	            for (j = 0; j < arr.length - i; j++) {
	                var temp = 0;
	                if (arr[j] < arr[j + 1]) {
	                    temp = arr[j];
	                    arr[j] = arr[j + 1];
	                    arr[j + 1] = temp;
	                }
	            }
       		}
        }else{
    		price=false;
        	for (i = 1; i < arr.length; i++) {
	            for (j = 0; j < arr.length - i; j++) {
	                var temp = 0;
	                if (arr[j] > arr[j + 1]) {
	                    temp = arr[j];
	                    arr[j] = arr[j + 1];
	                    arr[j + 1] = temp;
	                }
	            }
       		}
        }
       
        // 排序结束
        // alert(arr);
        var len = $(".goods_list b").size();
            // alert(len);
            //取到li下的数字值
            //把Li按照数组的顺序进行插入！
        for(i=0;i<arr.length;i++){
            for(j=0;j<len;j++){
                if(arr[i]==$(".goods_list b").eq(j).html()){
                    $(".goods_list b").eq(j).parents("li").remove().appendTo(".goods_list");
                    break;
                 }
            }
        }
    });
});
</script>




 <?php echo widget('Index/footer'); ?>
</body>
</html>