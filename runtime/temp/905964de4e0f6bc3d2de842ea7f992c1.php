<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Order\pay.html";i:1516092163;}*/ ?>
<!DOCTYPE html>
<!-- saved from url=(0185)https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&timestamp=20180102105024# -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script src="/static/index/pay/js/ha.js" async="" defer="" id="ha"></script><iframe src="javascript:false" style="display: none;" src="./saved_resource.html"></iframe>
    
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>华为收银台</title>
    <link rel="stylesheet" href="/static/index/pay/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/index/pay/css/cashierStyle.css">
    <link href="https://res.vmallres.com/ips/pc/20171223/images/favicon.ico" rel="SHORTCUT ICON" type="image/x-icon">
</head>

<body>
<!-- 隐藏域 -->
<form name="paramForm" style="display: none">
    <input type="hidden" name="trade_order_no" value="20180102OD1560239024237705">
    <input type="hidden" name="sign" value="1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9">
    <input type="hidden" name="timestamp" value="20180102105024">
    <input type="hidden" name="lan" value="zh">
    <input type="hidden" name="product_type" value="100011">
    <input type="hidden" name="region" value="156">
    <input type="hidden" name="hwaTimeOut" value="30000">
    <input type="hidden" name="hwaJsUrl" value="/static/index/pay/js/ha_f.js">
    <input type="hidden" name="hwaSiteId" value="gips_cashier_pc">
    <input type="hidden" name="hwaIpUrl" value="https://finance.huawei.com/cashier/web/">
</form>

<script type="text/javascript" src="/static/index/pay/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/static/index/pay/js/html5.js"></script>
<script type="text/javascript" src="/static/index/pay/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/static/index/pay/js/handlebars.min.js"></script>
<script type="text/javascript" src="/static/index/pay/js/util.js"></script>
<script type="text/javascript" src="/static/index/pay/js/options.js"></script>


<div class="container" style="">
    <!--<div class="header clearfix"></div>-->
    <div class="warp warp-content clearfix" style="min-height: 790px;">
        <div class="contentArea clearfix">
            



	

<div class="logo_name clearfix">
	<a class="huawei_logo" href="/index/index"><img src="/static/index/pay/images/Vmall_red.png" alt="huawei"></a>
	<span>收银台</span>
</div>
            
            <div class="cashier_order_area clearfix" id="cashierHome">
                    <div class="cashier_orderInfo clearfix">
                        <div class="orderInfo_img pull-left">
                            <img src="/static/index/pay/images/success_icon.png">
                        </div>
                        <div class="orderInfo_words pull-left">
                            <div class="orderInfo_words_01 clearfix">
                                <div class="orderWords01 clearfix">
                                    <h4 class="pull-left">订单提交成功，只差付款了~</h4> 
                                    <div class="orderNum pull-left" style="display: none;">
                                        <span>订单号：</span> 
                                        <span style="color: #da3232;">11173113168</span> 
                                    </div>
                                    <div class="payNum pull-right">
                                        <span class="pull-right"></span>
                                        <span class="payNumAll pull-right"></span>
                                        <span class="payTitle pull-right"></span>
                                    </div>
                                </div>
                                <h5 class="clearfix">请您在<em class="dateDiff">12小时</em> 内完成支付，否则订单将自动取消。
                                    <div class="orderInfo_show pull-right on">
                                        <span class="pull-right">订单详情</span>
                                        <img src="/static/index/pay/images/arrow_icon.png">
                                    </div>
                                </h5>
                                    
                            </div>
                            <div class="orderDetails clearfix">
                                <div class="orderDetails_words" style="display: block;">
                                    <ul>
                                        <li><span>订单编号：</span>
                                            <span style="color: #da3232;"><?php echo $data['id']; ?></span>
                                        </li>
  
                                        <li><span>购买时间：</span><span><?php echo date("Y-m-d H:i:s",$data['order_time']); ?></span></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs" id="payTab">
                        <li class="COMMON active" name="common_pay">
                            <a href="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024#common_pay" name="" data-toggle="tab">常用</a>
                        </li>
                         
                        <li class="THIP" name="third_pay">
                            <a href="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024#third_pay" data-toggle="tab">平台支付</a>
                        </li>
                         
                        <li class="INST" name="hb_pay">
                            <a href="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024#hb_pay" data-toggle="tab">分期支付</a>
                        </li>
                         
                        <li class="NETB" name="nwchain_pay">
                            <a href="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024#nwchain_pay" data-toggle="tab">网银支付</a>
                        </li>
                         
                        <li class="ENTB" name="entb_pay">
                            <a href="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024#entb_pay" data-toggle="tab">企业网银</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <ul class="tab-pane fade active in" id="common_pay">
                            <li bankcode="ALIPAY" banktype="THIP" act="true" class="select">
                                <div class="act-line">
                                    <i class="recomType">推荐</i>
    
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="ALIPAY" banktype="THIP" data-toggle="tooltip" title="" data-original-title="支付宝">
                                    <img src="/static/index/pay/images/ALIPAY.png" alt="支付宝">
                                    <i></i>
                                    <em class="markArea" style="display: none;"><img class="mark_ico" src="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024"></em>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                                     
                            </li>

                            <li bankcode="WXPAY" banktype="THIP" act="true">
                                <div class="act-line">
                                    <i class="recomType">立减</i>
  <span style="color: #DA3232;">工行信用卡消费随机立减</span>
                                     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="WXPAY" banktype="THIP" data-toggle="tooltip" title="" data-original-title="微信支付">
                                    <img src="/static/index/pay/images/WXPAY.png" alt="微信支付">
                                    <i></i>
                                    <em class="markArea" style="display: none;"><img class="mark_ico" src="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024"></em>
                                </div><div class="tooltip fade top in" style="top: -11px; left: 97px; display: block;"><div class="tooltip-arrow"></div><div class="tooltip-inner">微信支付</div></div>
  
                                    <div class="payTool-descr clearfix"></div>
                                     
                            </li>

                            <li bankcode="HUAWEIPAY" banktype="THIP" act="true">
                                <div class="act-line">
                                    <i class="recomType">NEW</i>
  <span style="color: #DA3232;">限华为NFC手机支付</span>
                                     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="HUAWEIPAY" banktype="THIP" data-toggle="tooltip" title="" data-original-title="银联云闪付(Huawei Pay)">
                                    <img src="/static/index/pay/images/HUAWEIPAY.png" alt="银联云闪付(Huawei Pay)">
                                    <i></i>
                                    <em class="markArea" style="display: none;"><img class="mark_ico" src="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024"></em>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                                     
                            </li>

                            <li bankcode="HUABEI" banktype="INST" act="true">
                                <div class="act-line">
    
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="HUABEI" banktype="INST" data-toggle="tooltip" title="" data-original-title="花呗">
                                    <img src="/static/index/pay/images/HUABEI.png" alt="花呗">
                                    <i></i>
                                    <em class="markArea" style="display: none;"><img class="mark_ico" src="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024"></em>
                                </div>
 
                                    <div class="hb_num_pay clearfix" style="display: none;">
                                        <ul class="hbNum_list clearfix in active">
                                            <li attr_periodnum="3">
                                                <span><font>3</font>期</span><span style="margin-right: 3px"><font>¥1996.00</font>*3</span>(<span>
														<font class="info" style="margin-right: 0;">3期零费率</font>
														,共计5988.00元</span>)
                                            </li>
                                            <li attr_periodnum="6">
                                                <span><font>6</font>期</span><span style="margin-right: 3px"><font>¥998.00</font>*6</span>(<span>
														<font class="info" style="margin-right: 0;">6期零费率</font>
														,共计5988.00元</span>)
                                            </li>
                                            <li attr_periodnum="12">
                                                <span><font>12</font>期</span><span style="margin-right: 3px"><font>¥536.43</font>*12</span>(<span>含手续费37.43元/期,费率7.50%,共计6437.10元</span>)
                                            </li>
                                        </ul>
                                        <p style="color: #333333;">花呗分期是什么？</p>
<p style="color: #999999;">花呗分期是蚂蚁金服（支付宝公司）提供的先消费后分期还款的赊购服务。</p>
<p style="color: #da3232;">免息活动仅限单款商品的订单，对含多个商品的订单暂不支持。</p>
                                    </div>
                                    
                            </li>

                            <li class="more">
                                <div class="act-line"></div>
                                <div class="pay_typeIco clearfix" onclick="moreShow(this)">
                                    更多银行
                                    <i><img src="/static/index/pay/images/down_arrow_icon.png"></i>
                                </div>
                            </li>
                        </ul>
                         
                        <ul class="tab-pane fade" id="third_pay">
                            <li bankcode="ALIPAY" banktype="THIP" act="true" class="select">
                                <div class="act-line">
                                    <i class="recomType">推荐</i> 
    
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="ALIPAY" banktype="THIP" data-toggle="tooltip" title="" data-original-title="支付宝">
                                    <img src="/static/index/pay/images/ALIPAY.png" alt="支付宝">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="WXPAY" banktype="THIP" act="true">
                                <div class="act-line">
                                    <i class="recomType">立减</i> 
  <span style="color: #DA3232;">工行信用卡消费随机立减</span>
                                     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="WXPAY" banktype="THIP" data-toggle="tooltip" title="" data-original-title="微信支付">
                                    <img src="/static/index/pay/images/WXPAY.png" alt="微信支付">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="HUAWEIPAY" banktype="THIP" act="true">
                                <div class="act-line">
                                    <i class="recomType">NEW</i> 
  <span style="color: #DA3232;">限华为NFC手机支付</span>
                                     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="HUAWEIPAY" banktype="THIP" data-toggle="tooltip" title="" data-original-title="银联云闪付(Huawei Pay)">
                                    <img src="/static/index/pay/images/HUAWEIPAY.png" alt="银联云闪付(Huawei Pay)">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li class="more">
                                <div class="act-line"></div>
                                <div class="pay_typeIco clearfix" onclick="moreShow(this)">
                                    更多银行
                                    <i><img src="/static/index/pay/images/down_arrow_icon.png"></i>
                                </div>
                            </li>
                        </ul>
                         
                        <ul class="tab-pane fade" id="hb_pay">
                            <li bankcode="HUABEI" banktype="INST" act="true">
                                <div class="act-line">

    
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="HUABEI" banktype="INST" data-toggle="tooltip" title="" data-original-title="花呗">
                                    <img src="/static/index/pay/images/HUABEI.png" alt="花呗">
                                    <i></i>
                                </div>
                                     <div class="hb_num_pay clearfix" style="display: none;">
                                        <ul class="hbNum_list clearfix in active">
                                            <li attr_periodnum="3">
                                                <span><font>3</font>期</span><span style="margin-right: 3px"><font>¥1996.00</font>*3</span>(<span>
														<font class="info" style="margin-right: 0;">3期零费率</font>
														,共计5988.00元</span>)
                                            </li>
                                            <li attr_periodnum="6">
                                                <span><font>6</font>期</span><span style="margin-right: 3px"><font>¥998.00</font>*6</span>(<span>
														<font class="info" style="margin-right: 0;">6期零费率</font>
														,共计5988.00元</span>)
                                            </li>
                                            <li attr_periodnum="12">
                                                <span><font>12</font>期</span><span style="margin-right: 3px"><font>¥536.43</font>*12</span>(<span>含手续费37.43元/期,费率7.50%,共计6437.10元</span>)
                                            </li>
                                        </ul>
                                        <p style="color: #333333;">花呗分期是什么？</p>
<p style="color: #999999;">花呗分期是蚂蚁金服（支付宝公司）提供的先消费后分期还款的赊购服务。</p>
<p style="color: #da3232;">免息活动仅限单款商品的订单，对含多个商品的订单暂不支持。</p>
                                    </div>
                            </li>

                            <li class="more">
                                <div class="act-line"></div>
                                <div class="pay_typeIco clearfix" onclick="moreShow(this)">
                                    更多银行
                                    <i><img src="/static/index/pay/images/down_arrow_icon.png"></i>
                                </div>
                            </li>
                        </ul>
                         
                        <ul class="tab-pane fade" id="nwchain_pay">
                            <li bankcode="CMB" banktype="NETB" act="true">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="CMB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="招商银行">
                                    <img src="/static/index/pay/images/CMB.png" alt="招商银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="CCB" banktype="NETB" act="true">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="CCB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="中国建设银行">
                                    <img src="/static/index/pay/images/CCB.png" alt="中国建设银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="BCM" banktype="NETB" act="true">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="BCM" banktype="NETB" data-toggle="tooltip" title="" data-original-title="交通银行">
                                    <img src="/static/index/pay/images/BCM.png" alt="交通银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="ABC" banktype="NETB" act="true">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="ABC" banktype="NETB" data-toggle="tooltip" title="" data-original-title="中国农业银行">
                                    <img src="/static/index/pay/images/ABC.png" alt="中国农业银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="CITIC" banktype="NETB" act="true">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="CITIC" banktype="NETB" data-toggle="tooltip" title="" data-original-title="中信银行">
                                    <img src="/static/index/pay/images/CITIC.png" alt="中信银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="SPDB" banktype="NETB" act="true">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="SPDB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="上海浦东发展银行">
                                    <img src="/static/index/pay/images/SPDB.png" alt="上海浦东发展银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="BOC" banktype="NETB" act="true">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="BOC" banktype="NETB" data-toggle="tooltip" title="" data-original-title="中国银行">
                                    <img src="/static/index/pay/images/BOC.png" alt="中国银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="GDB" banktype="NETB" act="true" class="onShow">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="GDB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="广东发展银行">
                                    <img src="/static/index/pay/images/GDB.png" alt="广东发展银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="CIB" banktype="NETB" act="true" class="onShow">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="CIB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="兴业银行">
                                    <img src="/static/index/pay/images/CIB.png" alt="兴业银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="PSBC" banktype="NETB" act="true" class="onShow">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="PSBC" banktype="NETB" data-toggle="tooltip" title="" data-original-title="中国邮政储蓄银行">
                                    <img src="/static/index/pay/images/PSBC.png" alt="中国邮政储蓄银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="PAB" banktype="NETB" act="true" class="onShow">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="PAB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="平安银行">
                                    <img src="/static/index/pay/images/PAB.png" alt="平安银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="HZB" banktype="NETB" act="true" class="onShow">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="HZB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="杭州银行">
                                    <img src="/static/index/pay/images/HZB.png" alt="杭州银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="BJRCB" banktype="NETB" act="true" class="onShow">
                                <div class="act-line">
     
                                </div>
                                <div class="pay_typeIco tooltip-test clearfix" bankcode="BJRCB" banktype="NETB" data-toggle="tooltip" title="" data-original-title="北京农村商业银行">
                                    <img src="/static/index/pay/images/BJRCB.png" alt="北京农村商业银行">
                                    <i></i>
                                </div>
  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li class="more" style="display: inline-block;">
                                <div class="act-line"></div>
                                <div class="pay_typeIco clearfix" onclick="moreShow(this)">
                                    更多银行
                                    <i><img src="/static/index/pay/images/down_arrow_icon.png"></i>
                                </div>
                            </li>
                        </ul>
                          
                        <ul class="tab-pane fade" id="entb_pay">
                            <li bankcode="BOC" banktype="ENTB" act="true">
                                <div class="act-line">
   <span style="color: #DA3232;">仅限企业购订单支付</span>
                                     
                                </div>
                                    <div class="pay_typeIco tooltip-test clearfix" bankcode="BOC" banktype="ENTB" data-toggle="tooltip" title="" data-original-title="中国银行">
                                        <img src="/static/index/pay/images/BOC.png" alt="中国银行">
                                        <i></i>
                                    </div>

  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="CCB" banktype="ENTB" act="true">
                                <div class="act-line">
   <span style="color: #DA3232;">仅限企业购订单支付</span>
                                     
                                </div>
                                    <div class="pay_typeIco tooltip-test clearfix" bankcode="CCB" banktype="ENTB" data-toggle="tooltip" title="" data-original-title="中国建设银行">
                                        <img src="/static/index/pay/images/CCB.png" alt="中国建设银行">
                                        <i></i>
                                    </div>

  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="CMB" banktype="ENTB" act="true">
                                <div class="act-line">
   <span style="color: #DA3232;">仅限企业购订单支付</span>
                                     
                                </div>
                                    <div class="pay_typeIco tooltip-test clearfix" bankcode="CMB" banktype="ENTB" data-toggle="tooltip" title="" data-original-title="招商银行">
                                        <img src="/static/index/pay/images/CMB.png" alt="招商银行">
                                        <i></i>
                                    </div>

  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="SPDB" banktype="ENTB" act="true">
                                <div class="act-line">
   <span style="color: #DA3232;">仅限企业购订单支付</span>
                                     
                                </div>
                                    <div class="pay_typeIco tooltip-test clearfix" bankcode="SPDB" banktype="ENTB" data-toggle="tooltip" title="" data-original-title="上海浦东发展银行">
                                        <img src="/static/index/pay/images/SPDB.png" alt="上海浦东发展银行">
                                        <i></i>
                                    </div>

  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li bankcode="ABC" banktype="ENTB" act="true">
                                <div class="act-line">
   <span style="color: #DA3232;">仅限企业购订单支付</span>
                                     
                                </div>
                                    <div class="pay_typeIco tooltip-test clearfix" bankcode="ABC" banktype="ENTB" data-toggle="tooltip" title="" data-original-title="中国农业银行">
                                        <img src="/static/index/pay/images/ABC.png" alt="中国农业银行">
                                        <i></i>
                                    </div>

  
                                    <div class="payTool-descr clearfix"></div>
                            </li>
                            <li class="more" style="display: none">
                                <div class="act-line"></div>
                                <div class="pay_typeIco clearfix" onclick="moreShow(this)">
                                    更多银行
                                    <i><img src="/static/index/pay/images/down_arrow_icon.png"></i>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!--返回弹窗-->
                    <div class="return_history hint clearfix">
                        <h5><i class="close-btn" onclick="closehis();"></i></h5>
                        <div class="return-words clearfix">
                            <p>您还未完成付款，请确认是否返回。</p>
                            
                        </div>
                        <div class="return-btn-area clearfix">
                            <a class="to-buy-btn" href="https://www.vmall.com/member/order">返回购物</a>
                            <em class="to-pay-btn" onclick="closehis();">继续支付</em>
                        </div>
                    </div>

                    <!--倒计时为0时弹窗-->
                    <div class="return_shop hint hintMark clearfix">
                        <h5><i class="close-btn" onclick="closeHint(this)"></i></h5>
                        <div class="return-words clearfix">
                            <p>您的订单已过期，请重新下单支付。</p>
                        </div>
                        <div class="return-btn-area clearfix">
                            <a class="to-buy-btn" href="https://www.vmall.com/member/order">重新下单</a>
                        </div>
                    </div>

                </div>
            <ul class="payBtn clearfix">
                <li>
                    <form action="/iorder/dopay" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <input type="submit" class="confirmPay pull-right" value="确认支付" style="background: rgb(218, 50, 50); color: rgb(255, 255, 255);width:170px;height:50px">
                    <div id="cashCoupon">
                               
                        </div>
                    </form>
                </li>
                <p class="disabled-btn-info clearfix" style="display: none;">请在当前页面先选择支付方式</p>
            </ul>

        </div>
    </div>
    



	


<footer>
	<!--<span class="pull-left">中文（简体）</span>
	<a class="pull-right" style="margin-right: 30px;" href="" target="_blank">入网信息安全责任书</a>
	<a class="pull-right" href="" target="_blank">法律协议</a>
	<a class="pull-right" href="" target="_blank">隐私保护</a>
	<a class="pull-right" href="" target="_blank">法律声明</a>
	<div style="width: 560px;margin: 0 auto;text-align: center;">
		<span>版权所有@华为软件技术有限公司 2017</span>
		<span>保留一切权利</span>
		<span>苏ICP备090682号-13</span>
		<span style="margin-right: 10px;">苏B2-20130048号</span>	
	</div>-->

	<div class="warp clearfix">
		<div class="vmall_logo_01 pull-left">
			<img src="/static/index/pay/images/Vmall.png" alt="vmall_logo_01">
		</div>
		<div class="certification_info pull-left">
			<p>
				<a textvalue="隐私政策" title="隐私政策" target="_blank" href="https://www.vmall.com/help/faq-2635.html">隐私政策</a>
				<a title="服务协议" target="_blank" href="https://www.vmall.com/help/faq-778.html">服务协议</a> Copyright @ 2012-2017 华为软件技术有限公司 版权所有 保留一切权利</p>
			<p>
				<a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=32011402010009"><span style="font-size:15px;font-family:宋体"><span style="font-size:12px;font-family:arial,helvetica,sans-serif;">公安备案苏公网安备</span><span style="font-size:12px;font-family:arial,helvetica,sans-serif;"> 32011402010009号</span></span>
				</a> |
				<a target="_blank" href="http://www.miitbeian.gov.cn/">苏ICP备17040376号-6</a> | 增值电信业务经营许可证：苏B2-20130048号
				<a href="https://res.vmallres.com/pimages//sale/2016-10/20161009102851799.jpg" target="_blank" textvalue="网络文化经营许可证：苏网文[2012]0401-019号">网络文化经营许可证：苏网文[2015] 1599-026号</a>
			</p>
		</div>
		<div class="certification_ico pull-right">
			<a target="_blank" href="http://www.jsdsgsxt.gov.cn/mbm/ent/elec/view.shtml?cred=Y&amp;siteId=052c2cbca0b64d2b88ac4b7775ff40ce"><img src="/static/index/pay/images/20161224180914742.jpg" title="工商网监.JPG"></a>
			<a target="_blank" href="http://odr.jsdsgsxt.gov.cn:8081/mbm/entweb/elec/certView.shtml?siteId=052c2cbca0b64d2b88ac4b7775ff40ce"><img src="/static/index/pay/images/20160226162415360.png" style="float:none;width:90px;height:32px;" title="电子营业执照" width="90" vspace="0" hspace="0" height="32" border="0"></a>
			<a target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=e13010932010038497pwz6000000&amp;trustKey=dn&amp;trustValue=vmall.com"><img style="width:90px;height:32px;float:none;" src="/static/index/pay/images/20160226162521265.png" title="可信网站" width="90" vspace="0" hspace="0" height="32" border="0"></a>
			<a target="_blank" href="https://search.szfw.org/cert/l/CX20121017001773002082"><img style="width:90px;height:32px;float:none;" src="/static/index/pay/images/20160226162531395.png" title="诚信网站" width="90" vspace="0" hspace="0" height="32" border="0"></a>
		</div>
		
	</div>

</footer>
    
</div>
<div class="weChat_pay hint hintMark">
    <h5><span class="payWords">微信支付</span><i class="close-btn" onclick="closeHint(this)"></i></h5>
    <div class="wechatPay pay_hint clearfix">
        <ul class="wechat_area clearfix">
            <li>
                <img class="erweima" src="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024">
                <div class="erweima_words clearfix">
                    <img class="erweima_ico" src="/static/index/pay/images/scan it_icon.png">
                    <div class="payActWords">
                        <p>请使用<em style="color:#45A90B;">微信</em>扫一扫</p>
                        <p>扫描二维码支付</p>
                    </div>
                </div>
            </li>
            <li>
                <img class="phoneImg" src="/static/index/pay/images/Mobile phone.png">
            </li>
        </ul>
    </div>
    <div class="cmblifePay pay_hint clearfix">
        <ul class="wechat_area clearfix">
            <li>
                <img class="erweima" src="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024">
                <div class="erweima_words clearfix">
                    <img class="erweima_ico" src="/static/index/pay/images/scan it_icon.png">
                    <div class="payActWords">
                        <p>请使用<em style="color:#45A90B;">掌上生活</em>扫一扫</p>
                        <p>扫描二维码支付</p>
                    </div>
                </div>
            </li>
            <li>
                <img class="phoneImg" src="/static/index/pay/images/Group.png">
            </li>
        </ul>
    </div>
    <div class="hwPay pay_hint clearfix">
        <ul class="wechat_area clearfix">
            <li>
                <img class="erweima" src="https://cashier.vmall.com/cashier/web/index.htm?trade_order_no=20180102OD1560239024237705&amp;sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&amp;timestamp=20180102105024">
                <div class="erweima_words clearfix">
                    <img class="erweima_ico" src="/static/index/pay/images/Group4.png">
                    <div class="payActWords">
                        <p>打开<em style="color:#3E8BE1;">华为钱包</em>APP</p>
                        <p>点击右上角扫一扫付款</p>
                    </div>
                    
                </div>
            </li>
            <li style="padding-top: 30px;">
                <img class="phoneImg01" style="margin: -10px 10px 0 0;" src="/static/index/pay/images/Bitmap_3.png">
                <img class="phoneImg02" style="margin-top:-10px;" src="/static/index/pay/images/Bitmap_2.png">
            </li>
        </ul>
        <p style="text-align: center;color: #C6C6C6;margin: 20px 0 -10px 0;">本产品由银联提供支付服务，华为提供技术支持</p>
    </div>
    <ul class="wechat_payBtn clearfix">
        <li class="closeBtn">更换支付方式</li>
        <li class="comPay">已完成支付</li>
    </ul>
</div>
<div class="confirm_pay hint hintMark">
    <h5><i class="close-btn" onclick="closeHint(this)"></i></h5>
    <div class="confirm_words clearfix">
        <p class="notice_01">请您在新打开的页面进行支付！</p>
        <p class="notice_02">付款完成前请不要关闭此窗口</p>
        <p class="notice_03">完成付款后请根据您的情况点击下面的按钮</p>
    </div>
    <ul class="wechat_payBtn clearfix" style="border-top: none;padding: 0;margin-top: 0;">
        <li class="closeBtn" style="margin-left: 42px;">更换支付方式</li>
        <li class="comPay">已完成支付</li>
    </ul>
    <div class="helpLink clearfix">
        <a href="https://www.vmall.com/help/category-22.html" target="_blank">支付遇到问题？请查看“帮助中心”获得帮助</a>
    </div>
</div>
<div class="hintback"></div>
<!--loading-->
<div class="hintBg" style="display: none;">
    <div class="loading">
        <div class="loadEffect">
            <img src="/static/index/pay/images/loading.gif" alt="loading">
        </div>
    </div>
    <p>正在加载</p>
</div>

<!--    提交到商户form表单-->
<div id="merchantData">
    <script id="merchantDataTemplate" type="text/x-handlebars-template">
        <div class="erchmantLinkData clearfix" attr="{{resultData.syNotifyResponse.submitUrl}}">
            {{#each resultData.syNotifyResponse.formInputs}}
            <input name='{{@key}}' type='hidden' value='{{this}}'/> {{/each}}
        </div>

    </script>
</div>

<script>
    var start;
    var end;
    //起始时间
    var SysSecond;
    //倒计时间隔时间
    var InterValObj;

    //支付签名
    var signQuestData = '';

    var attrBankCode, attrBankType;
    //花呗支付分期数
    var payPeriodNumData;
    //查询交易状态请求参数
    var tradeNoData;
    //handlebars初始化
    var cashierHomeTemplate = Handlebars.compile($("#cashierHomeTemplate").html());
    var cashCouponTemplate = Handlebars.compile($("#cashCouponTemplate").html());

    var weChatTask;

    var tradeTypeData;

    //定义选择的支付方式是第几个
    var num;

    //定义分期活动内容
    var font_info;
    //定义活动期数的位置
    var stages_num;

    //定义上一次选择地支付方式
    var lastPayBankCodeData, lastPayBankTypeData, lastPayStatus;

    var trade_order_no_data, timestampData, signData, lanData, productTypeData, regionData,hwaTimeOut;
    trade_order_no_data = document.paramForm.trade_order_no.value;
    signData = document.paramForm.sign.value;
    timestampData = document.paramForm.timestamp.value;
    lanData = document.paramForm.lan.value;
    productTypeData = document.paramForm.product_type.value;
    regionData = document.paramForm.region.value;
    hwaTimeOut = document.paramForm.hwaTimeOut.value;

    function hwaExecute() {
        if (hwaTimeOut == null || hwaTimeOut == 'undefined' || hwaTimeOut == '') {
            hwaTimeOut = 30000;
        }

        if ("0" == hwaRefuse) {
            //添加埋点
            ha("set", {
                "url": "https://cashier.vmall.com/cashier/web/pc_fund_consum.htm?trade_order_no=" + trade_order_no_data + "&timestamp=" + timestampData + "&sign=" + signData + getCommonParams(productTypeData, regionData, lanData),
                "page_title": "收银台首页",
                "referrer": document.referrer
            });
            ha("trackPageView", {});
        }
    };

    $(function () {

        
        

        $(".hintBg").show();

        $.ajax({
            async: true,
            type: "post",
            url: "https://cashier.vmall.com/cashier/web/pc_fund_consum.htm",
            data: "trade_order_no=" + trade_order_no_data + "&timestamp=" + timestampData + "&sign=" + signData + getCommonParams(productTypeData, regionData, lanData) + "&" + new Date().getTime(),
            timeout: hwaTimeOut, //30000
            success: function (data) {
                if (data.responseCode == "00000") {
//                    console.log(data);
                    //获取支付sign
                    signQuestData = data.sign;
                    //获取截止时间
                    end = data.resultData.deadlineTime;

                    lastPayBankCodeData = data.resultData.lastPayBankCode;
                    lastPayBankTypeData = data.resultData.lastPayBankType;

                    //获取当前时间
                    //start = getNowFormatDate();
                    start = data.resultData.createdTime;
                    SysSecond = GetDateDiff(start, end, "second");
                    InterValObj = window.setInterval(SetRemainTime, 1000); //间隔函数，1秒执行

                    $('#cashierHome').html(cashierHomeTemplate(data));

                    tradeTypeData = data.resultData.tradeType;
                    if (tradeTypeData == "T_COMB") {
                        $("#cashCoupon").hide();
                        $(".orderNum").hide();
                    } else {
                        $("#cashCoupon").show();
                        $.ajax({
                            async: true,
                            type: "post",
                            url: "https://cashier.vmall.com/cashier/web/pc_query_consum.htm",
                            data: "trade_order_no=" + trade_order_no_data + "&timestamp=" + timestampData + "&sign=" + signData + getCommonParams(productTypeData, regionData, lanData) + "&" + new Date().getTime(),
                            timeout: 30000,
                            success: function (data) {
                                if (data.responseCode == "00000") {
                                    $('#cashCoupon').html(cashCouponTemplate(data));
                                }
                            }
                        });
                    }

                    if ($("#common_pay li").length > 0) {
                        var li_bankType, li_bankCode, src_val;
                        for (var i = 0; i < $("#common_pay li").length; i++) {
                            li_bankType = $("#common_pay li").eq(i).attr("bankType");
                            li_bankCode = $("#common_pay li").eq(i).attr("bankCode");
                            //添加个人网银小图标
                            switch (li_bankType) {
                                case "NETB":
                                    $("#common_pay li").eq(i).find(".mark_ico").attr("src", "https://res.vmallres.com/ips/pc/20171223/img/nwchain_pay_ico.png?2017122301");
                                    break;
                                case "INST":
                                    if (li_bankCode != "HUABEI" && li_bankCode != "CMBLIFE") {
                                        $("#common_pay li").eq(i).find(".mark_ico").attr("src", "https://res.vmallres.com/ips/pc/20171223/img/hb_pay_ico.png?2017122301");
                                    }
                                    break;
                                case "EXPR":
                                    $("#common_pay li").eq(i).find(".mark_ico").attr("src", "https://res.vmallres.com/ips/pc/20171223/img/shortcut_pay_ico.png?2017122301");
                                    break;
                                case "NEXP":
                                    $("#common_pay li").eq(i).find(".mark_ico").attr("src", "https://res.vmallres.com/ips/pc/20171223/img/shortcut_pay_ico.png?2017122301");
                                    break;
                                case "ENTB":
                                    $("#common_pay li").eq(i).find(".mark_ico").attr("src", "https://res.vmallres.com/ips/pc/20171223/img/entb_pay_ico.png?2017122301");
                                    break;
                                default:
                                    break;

                            }
                            src_val = $("#common_pay li").eq(i).find(".mark_ico").attr("src");
                            if (src_val == "" || src_val == null || src_val == undefined) {
                                $("#common_pay li").eq(i).find("em").hide();
                            }
                        }

                    }

                    var html_decr;

                    $("#payTab li:first-child").addClass("active");
                    $(".tab-content ul:first-child").addClass("in");
                    $(".tab-content ul:first-child").addClass("active");
                    $("#payTab li:first-child").addClass("active");
                    lastPayStatus = $(".tab-content ul#common_pay li[bankCode=" + lastPayBankCodeData + "][bankType=" + lastPayBankTypeData + "]").attr("act");
                    if (lastPayBankCodeData != "" && lastPayBankCodeData != null && lastPayBankCodeData != undefined && lastPayStatus == "true") {
                        attrBankCode = lastPayBankCodeData;
                        attrBankType = lastPayBankTypeData;

                    } else {
                        $(".tab-content ul:first-child li").each(function () {
                            if ($(this).attr("act") == "true") {
                                attrBankCode = $(this).attr("bankCode");
                                attrBankType = $(this).attr("bankType");
                                return false;
                            }
                        });
                    }
                    if (attrBankCode != "" && attrBankCode != undefined && attrBankCode != null) {
                        $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "]").addClass("select");
                        num = $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "]").index() + 1;
                        //判断是否选择的是花呗分期
                        if (attrBankType == "INST") {
                            $(".hb_num_pay").hide();
                            if ((num % 4) == 0) {
                                $(".tab-content ul.active li.select .hb_num_pay").css("margin-left", "-42%");
                            }
                            $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hb_num_pay").show();
                            $(".hb_num_pay li").removeClass("on");

                            $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li").each(function () {
                                font_info = "";
                                font_info = $(this).find(".info").text();
                                if (font_info != undefined && font_info != null && font_info != "") {
                                    stages_num = $(this).index() + 1;
                                }
                            });
                            if (stages_num != undefined && stages_num != null && stages_num != "") {
                                $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li:nth-child(" + stages_num + ")").addClass("on");
                            } else {
                                $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li:last-child").addClass("on");
                            }
                            payPeriodNumData = $(".tab-content ul.active li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li.on").attr("attr_periodNum");

                        } else {
                            $(".hb_num_pay").hide();
                            $(".hbNum_list li").removeClass("on");
                        }

                    } else {
                        confirmPayDis();
                    }

                    //判断是否要加更多银行按钮
                    var id_common_pay = document.getElementById("common_pay");
                    var id_third_pay = document.getElementById("third_pay");
                    var id_shortcut_pay = document.getElementById("shortcut_pay");
                    var id_nwchain_pay = document.getElementById("nwchain_pay");
                    var id_entb_pay = document.getElementById("entb_pay");
                    if (id_common_pay != '' && id_common_pay != null && id_common_pay != undefined) {
                        numShow(common_pay);
                    }
                    if (id_third_pay != '' && id_third_pay != null && id_third_pay != undefined) {
                        numShow(third_pay);
                    }
                    if (id_shortcut_pay != '' && id_shortcut_pay != null && id_shortcut_pay != undefined) {
                        numShow(shortcut_pay);
                    }
                    if (id_nwchain_pay != '' && id_nwchain_pay != null && id_nwchain_pay != undefined) {
                        numShow(nwchain_pay);
                    }
                    if (id_entb_pay != '' && id_entb_pay != null && id_entb_pay != undefined) {
                        numShow(entb_pay);
                    }
                    //定义支付方式是否可点击参数
                    var actStatus;

                    //选择支付方式
                    $(".tab-content li .tooltip-test").on("click", function () {
                        actStatus = $(this).parent("li").attr("act");
                        if (actStatus == "false") {
                            return false
                        } else {
                            $(".tab-content li").removeClass("select");
                            /*$(".tab-content ul li").css("padding-bottom", h_fixed);
                             $(".hbNum_list li").css("padding-bottom", 0);*/
                            $(this).parent("li").addClass("select");
                            attrBankCode = $(this).attr("bankCode");
                            attrBankType = $(this).attr("bankType");
                            $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "]").addClass("select");
                            //确认支付按钮状态转变
                            confirmPayOn();

                            num = $(this).parent("li").index() + 1;

                            //判断是否选择的是花呗分期
                            if (attrBankType == "INST") {

                                $(".hb_num_pay").hide();

                                if ((num % 4) == 0) {
                                    $(".tab-content ul.active li.select .hb_num_pay").css("margin-left", "-42%");
                                }

                                $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hb_num_pay").show();
                                $(".hb_num_pay li").removeClass("on");

                                $(".tab-content ul.active li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li").each(function () {
                                    font_info = "";
                                    font_info = $(this).find(".info").text();
                                    if (font_info != undefined && font_info != null && font_info != "") {
                                        stages_num = $(this).index() + 1;
                                    }
                                });
                                if (stages_num != undefined && stages_num != null && stages_num != "") {
                                    $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li:nth-child(" + stages_num + ")").addClass("on");
                                } else {
                                    $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li:last-child").addClass("on");
                                }
                                payPeriodNumData = $(".tab-content ul.active li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li.on").attr("attr_periodNum");
                            } else {

                                $(".hb_num_pay").hide();
                                $(".hbNum_list li").removeClass("on");
                            }
                        }
                    });

                    //选择花呗分期期数
                    $(".hbNum_list li").click(function () {
                        $(".hbNum_list li").removeClass("on");
                        payPeriodNumData = $(this).attr("attr_periodNum");
                        $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li[attr_periodNum=" + payPeriodNumData + "]").siblings("li").removeClass("on");
                        $(".tab-content li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "] .hbNum_list li[attr_periodNum=" + payPeriodNumData + "]").addClass("on");
                    });

                    //显示隐藏订单详情
                    $(".orderInfo_show").click(function () {
                        if (tradeTypeData == "T_COMB") {
                            $(".orderNum").hide();
                        }
                        if ($(this).hasClass("on")) {
                            $(this).removeClass("on");
                            $(".orderInfo_show img").attr("src", "https://res.vmallres.com/ips/pc/20171223/img/down arrow_icon.png?2017122301");
                            $(".orderDetails_words").slideUp();
                            $(".sendTime").show();
                            $(".orderNum").show();
                        } else {
                            $(this).addClass("on");
                            $(".orderInfo_show img").attr("src", "https://res.vmallres.com/ips/pc/20171223/img/arrow_icon.png?2017122301");
                            $(".orderDetails_words").slideDown();
                            $(".sendTime").hide();
                            $(".orderNum").hide();
                        }
                        if (tradeTypeData == "T_COMB") {
                            $(".orderNum").hide();
                        }
                    });

                    //营销文案具体内容显示隐藏
                    //											$(".marketing-words").hover(function() {
                    //												var activity_tip = $(this).find(".activity-info");
                    //												if(activity_tip != null && activity_tip != undefined && activity_tip != "") {
                    //													activity_tip.show();
                    //												}
                    //											}, function() {
                    //												var activity_tip = $(this).find(".activity-info");
                    //												activity_tip.hide();
                    //											});
                    $(".marketing-words").click(function () {
                        var activity_tip = $(this).find(".marketLinkContent-info");
                        if (activity_tip != null && activity_tip != undefined && activity_tip != "") {
                            var activityHint;
                            activityHint = $(this).siblings(".activity-hint");
                            activityHint.show();
                            activityHint.css("margin-top", -(activityHint.height() / 2));
                            $(".hintback").show();
                        }
                    });

                    //支付方式说明加载
                    $("[data-toggle='tooltip']").tooltip();
                    $(".hintBg").hide();
                    $(".container").show();

                    var window_h = $(window).height();
                    var content_h = window_h - 120 + "px";
                    $(".warp-content").css("min-height", content_h);

                    //tab 点击
                    $("#payTab li").click(function () {

                        var this_li_name = $(this).attr("name");

                        switch (attrBankType) {
                            case "THIP":
                                if (this_li_name == "third_pay") {
                                    confirmPayOn();
                                } else {
                                    confirmPayDis();
                                }
                                break;

                            case "INST":
                                if (this_li_name == "hb_pay") {
                                    num = $(".tab-content #hb_pay li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "]").index() + 1;
                                    if ((num % 4) == 0) {
                                        $(".tab-content ul li.select .hb_num_pay").css("margin-left", "-42%");
                                    } else {
                                        $(".tab-content ul li.select .hb_num_pay").css("margin-left", "0");
                                    }
                                    confirmPayOn();
                                } else {
                                    confirmPayDis();
                                }
                                break;

                            case "NETB":
                                if (this_li_name == "nwchain_pay") {
                                    confirmPayOn();
                                } else {
                                    confirmPayDis();
                                }
                                break;

                            case "EXPR":
                                if (this_li_name == "shortcut_pay") {
                                    confirmPayOn();
                                } else {
                                    confirmPayDis();
                                }
                                break;
                            case "NEXP":
                                if (this_li_name == "shortcut_pay") {
                                    confirmPayOn();
                                } else {
                                    confirmPayDis();
                                }
                                break;
                            case "ENTB":
                                if (this_li_name == "entb_pay") {
                                    confirmPayOn();
                                } else {
                                    confirmPayDis();
                                }
                                break;
                            default:
                                break;
                        }
                        if (this_li_name == "common_pay") {
                            var commone_banktype_sel = $("#common_pay li.select").attr("banktype");
                            if (commone_banktype_sel != "" && commone_banktype_sel != null && commone_banktype_sel != undefined) {
                                if (attrBankType == "INST") {
                                    num = $(".tab-content #common_pay li[bankCode=" + attrBankCode + "][bankType=" + attrBankType + "]").index() + 1;
                                    if ((num % 4) == 0) {
                                        $(".tab-content ul li.select .hb_num_pay").css("margin-left", "-42%");
                                    }
                                }
                                confirmPayOn();
                            } else {
                                confirmPayDis();
                            }
                        }

                    });

                } else {
                    //异步加载页面内容
                    window.location.href = "https://cashier.vmall.com/cashier/web/perror.htm?merchantCashierPath=&error_code=" + data.responseCode + "&secnarios=" + data.scenarios + getCommonParams(productTypeData, regionData, lanData);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                window.location.href = "https://cashier.vmall.com/cashier/web/perror.htm?merchantCashierPath=&error_code=" + textStatus + "&secnarios=" + errorThrown + getCommonParams(productTypeData, regionData, lanData);
            },
            complete: function (XMLHttpRequest, textStatus) {

            }
        });

    });

    //是否使用代金券弹窗
    function useDjq() {
        if ($(".cashCoupon-sel").hasClass("on")) {
            $(".cashCoupon-sel").removeClass("on");
            $(".cashCoupon-tip").hide();
        } else {
            $(".cashCoupon-sel").addClass("on");
            $(".cashCoupon-tip").show();
        }
    }
    ;

    function noDjqSubmit() {
        $(".cashCoupon-sel").removeClass("on");
        $(".cashCoupon-tip").hide();
    }
    ;

    //点击确认支付
    function pay(t) {

        var now1 = new Date().getTime(); //开始点击按钮前获取一个时间戳
        if (!payPeriodNumData) {
            payPeriodNumData = 0;
        }

        clearTradeQueryParam();

        if (attrBankCode == "WXPAY" || attrBankCode == "CMBLIFE" || attrBankCode == "HUAWEIPAY") {
            $(".hintBg p").text("正在支付");
            $(".hintBg").show();
            now1 = new Date().getTime();
            $.when(ajaxPay()).done(function (data) {
                $(".hintBg").hide();
                if ("0" == hwaRefuse) {
                    //确认支付按钮埋点
                    ha("set", {
                        "opr_wf_n": '确认支付', //按钮操作名称 - 业务功能标识
                        "opr_wf_d": (new Date()).getTime() - now1 //按钮操作持续耗时
                    });
                    ha("trackEvent", "click"); //此种JS直接设置方法，由于是自定义按钮，不支持主动采集上报，故要用trackEvent来手动发送 点击行为上报数据；
                }
            });
        } else {
            clearInterval(weChatTask);
            $(".hintback").show();
            $(".confirm_pay").show();
            if ("0" == hwaRefuse) {
                //确认支付按钮埋点
                ha("set", {
                    "opr_wf_n": '确认支付', //按钮操作名称 - 业务功能标识
                    "opr_wf_d": (new Date()).getTime() - now1 //按钮操作持续耗时
                });
                ha("trackEvent", "click"); //此种JS直接设置方法，由于是自定义按钮，不支持主动采集上报，故要用trackEvent来手动发送 点击行为上报数据；
            }
            window.open("https://cashier.vmall.com/cashier/web/payConfirm.htm?merchantCashierPath=&tradeOrderNo=" + trade_order_no_data + "&bankCode=" + attrBankCode + "&bankType=" + attrBankType + "&payPeriodNum=" + payPeriodNumData + "&sign=" + signQuestData + getCommonParams(productTypeData, regionData, lanData), "_blank");
        }
    }
    ;

    /**
     * 设置交易查询的参数
     * @param tradeNo
     * @param tradeSign
     */
    function setTradeQueryParam(tradeNo, tradeSign) {

        tradeNoData = tradeNo;
        signData = tradeSign;
    }

    /**
     * 清除交易查询的参数
     * @param tradeNo
     * @param tradeSign
     */
    function clearTradeQueryParam() {

        tradeNoData = "";
        signData = "";
    }

    function ajaxPay() {
        var defer = $.Deferred();
        $.ajax({
            async: true,
            type: "post",
            url: "https://cashier.vmall.com/cashier/web/pc_pay.htm",
            data: "tradeOrderNo=" + trade_order_no_data + "&bankCode=" + attrBankCode + "&bankType=" + attrBankType + "&payPeriodNum=" + payPeriodNumData + "&sign=" + signQuestData + getCommonParams(productTypeData, regionData, lanData) + "&" + new Date().getTime(),
            timeout: 30000, //30000
            success: function (data) {
                defer.resolve(data)
                if (data.responseCode == "00000") {
                    setTradeQueryParam(data.resultData.tradeNo, data.sign);
                    var bizpayurl = data.resultData.bankRequestInfo.submitUrl;
                    $(".erweima").attr("src", bizpayurl);
                    $(".pay_hint").hide();
                    if (attrBankCode == "WXPAY") {
                        $(".payWords").text("微信支付");
                        $(".wechatPay").show();
                    } else if (attrBankCode == "CMBLIFE") {
                        $(".payWords").text("掌上生活支付");
                        $(".cmblifePay").show();
                    } else if (attrBankCode == "HUAWEIPAY") {
                        $(".payWords").text("银联云闪付(Huawei Pay)");
                        $(".hwPay").show();
                    }
                    //显现微信支付弹窗
                    $(".hintback").show();
                    $(".weChat_pay").show();
                    //定时查询交易状态
                    weChatTask = setInterval(
                        function () {
                            //支付成功清楚支付任务
                            tradeStatus();
                        }, 5000
                    )
                    //
                } else {
                    //添加埋点
                    window.location.href = "https://cashier.vmall.com/cashier/web/perror.htm?merchantCashierPath=&error_code=" + data.responseCode + "&secnarios=" + data.scenarios + getCommonParams(productTypeData, regionData, lanData);

                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {

            },
            complete: function (XMLHttpRequest, textStatus) {

            }
        });
        return defer.promise();
    }

    //查询交易状态
    $(".comPay").click(function () {
        clearInterval(weChatTask);
        if (!tradeNoData) {
            $.ajax({
                async: true,
                type: "post",
                url: "https://cashier.vmall.com/cashier/web/pc_query_consum_tradeno.htm?trade_order_no=20180102OD1560239024237705&sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&timestamp=20180102105024",
                timeout: 30000,
                success: function (data) {
                    if (data.responseCode == "00000") {
                        var tradeNo = data.resultData.tradeNo;
                        var sign = data.resultData.sign;
                        if (tradeNo && sign) {
                            setTradeQueryParam(data.resultData.tradeNo, data.resultData.sign);
                        }

                    }
                }
            });
        }

        //支付成功清楚支付任务
        if (tradeNoData) {
            tradeStatus();
        }

        $(this).parents(".hintMark").hide();
        $(".hintback").hide();

    });

    function tradeStatus() {
        var merchantDataTemplate = Handlebars.compile($("#merchantDataTemplate").html());

        var url_link = "";
        $.ajax({
            async: false,
            type: "post",
            url: "https://cashier.vmall.com/cashier/web/pc_status_notify.htm",
            data: "trade_no=" + tradeNoData + "&queryCount=1&sign=" + signData + "&" + new Date().getTime(),
            timeout: 10000,
            success: function (data) {
                if (data.responseCode == "00000") {
                    if (data.resultData.tradeStatus == "SUCC") {
                        traderesult = true;
                        $("#merchantData").html(merchantDataTemplate(data));
                        var input_val = "";
                        url_link = data.resultData.syNotifyResponse.submitUrl;
                        for (var i = 0; i < $(".erchmantLinkData input").length; i++) {
                            if (i == $(".erchmantLinkData input").length - 1) {
                                input_val += $(".erchmantLinkData input").eq(i).attr("name") + '=' + $(".erchmantLinkData input").eq(i).val();
                            } else {
                                input_val += $(".erchmantLinkData input").eq(i).attr("name") + '=' + $(".erchmantLinkData input").eq(i).val() + '&';
                            }
                        }
                        if (url_link.indexOf("?") > -1) {
                            url_link = url_link + '&' + input_val;
                        } else {
                            url_link = url_link + '?' + input_val;
                        }
                        window.location.href = url_link;

                    } else {

                    }
                } else {
                    window.location.href = "https://cashier.vmall.com/cashier/web/perror.htm?merchantCashierPath=&error_code=" + data.responseCode + "&secnarios=" + data.scenarios + getCommonParams(productTypeData, regionData, lanData);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {

            },
            complete: function (XMLHttpRequest, textStatus) {
            }

        });

    }

    if (window.history && window.history.pushState) {
        $(window).on('popstate', function () {
            $(".hintMark").hide();
            window.history.pushState('forward', null, '#');
            window.history.forward(1);
            $(".confirm_pay").hide();
            $(".weChat_pay").hide();
            $(".hintback").show();
            $(".return_history").show();
        });
        window.history.pushState('forward', null, '#'); //兼容IE
        window.history.forward(1);
    }
    //关闭窗口
    function closeHint(t) {
        if ($(t).parents(".hintMark").hasClass("weChat_pay")) {
            clearInterval(weChatTask);
        }
        $(t).parents(".hintMark").hide();
        $(".hintback").hide();
//        event.stopPropagation();
    }

    //关闭返回上一页弹窗
    function closehis() {
        $(".hintback").hide();
        $(".return_history").hide();
    }

    //隐藏多余支付方式
    function numShow(idName) {
        var liSum = 0;
        $(idName).children("li").each(function () {
            liSum++;
        });
        var i = 0;
        $(idName).children("li").each(function () {
            i++;
            if (i != 1 && i != 2 && i != 3 && i != 4 && i != 5 && i != 6 && i != 7 && i != liSum) {
                $(this).addClass("onShow");
            }
        });
        if (liSum > 8) {
            // $("li.more").show();
            $(idName).children("li.more").css("display", "inline-block");
        }
    }

    //点击显示更多支付方式
    function moreShow(t) {
        $(t).parents(".tab-pane").find("li").removeClass("onShow");
        $(t).hide();
    }
    ;

    //显现弹窗
    function hintShow(className) {
        $(".hintback").show();
        $(className).show();
    }
    //弹窗隐藏
    $(".closeBtn").click(function () {
        clearInterval(weChatTask);
        $(".hintback").hide();
        $(".hint").hide();
    });

    //将时间减去1秒，计算天、时、分、秒
    function SetRemainTime() {
        if (SysSecond > 0) {
            SysSecond = SysSecond - 1;
            var second = Math.floor(SysSecond % 60); // 计算秒
            var minite = Math.floor((SysSecond / 60) % 60); //计算分
            var hour = Math.floor((SysSecond / 3600) % 24); //计算小时
            var day = Math.floor((SysSecond / 3600) / 24); //计算天

            if (day <= 0) {
                if (hour <= 0) {
                    if (minite <= 0) {
                        $(".dateDiff").html(second + "秒");
                    } else {
                        $(".dateDiff").html(minite + "分" + second + "秒");
                    }
                } else {
                    $(".dateDiff").html(hour + "小时" + minite + "分" + second + "秒");
                }
            } else {
                $(".dateDiff").html(day + "天" + hour + "小时" + minite + "分" + second + "秒");
            }
        } else { //剩余时间小于或等于0的时候，就停止间隔函数
            window.clearInterval(InterValObj);
            $(".dateDiff").html("0秒");
            //这里可以添加倒计时时间为0后需要执行的事件
            $(".hint").hide();
            $(".hintback").show();
            $(".return_shop").show();
        }
    }

   

    //代金券支付
    function djqSubmit() {
        $(".cashCoupon-sel").removeClass("on");
        $(".cashCoupon-tip").hide();

        $(".hintback").show();
        $(".confirm_pay").show();

        window.open("https://cashier.vmall.com/cashier/web/pc_coupon_index.htm?trade_order_no=20180102OD1560239024237705&sign=1ad6de8f56ebf4d02a5abf2e850a6bba17c07eab02e9b9808e8fe8084c14c8b9&timestamp=20180102105024");
    }

    //确认支付按钮可点击状态
    function confirmPayOn() {
        $(".confirmPay").removeAttr("disabled");
        $(".disabled-btn-info").hide();
        $(".confirmPay").attr("status", "");
        $(".confirmPay").css("background", "#DA3232");
        $(".confirmPay").css("color", "#ffffff");
    }

    //确认支付按钮不可点击状态
    function confirmPayDis() {
        $(".confirmPay").attr("disabled", "disabled");
        $(".disabled-btn-info").show();
        $(".confirmPay").attr("status", "none");
        $(".confirmPay").css("background", "#999999");
        $(".confirmPay").css("color", "#dcdcdc");
    }
</script>



</body></html>