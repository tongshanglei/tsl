<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Coupons\index.html";i:1516188767;}*/ ?>
<!Doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>首页_个人中心_华为商城</title>
  <link href="/static/index/personal/css/ec.css" rel="stylesheet" type="text/css">
  <link href="/static/index/personal/css/main.css" rel="stylesheet" type="text/css">
  <style>
  .demo {
  width:410px;
  /*margin:0 auto;*/
  float:left;
  margin-left:40px;
}
.stamp * {
  padding: 0;
  margin: 0;
  list-style:none;
  font-family:"Microsoft YaHei", 'Source Code Pro', Menlo, Consolas, Monaco, monospace;
}
.stamp {
  width: 387px;
  height: 140px;
  padding: 0 10px;
  margin-bottom: 50px;
  position: relative;
  overflow: hidden;
}
.stamp:before {
  content: '';
  position: absolute;
  top:0;
  bottom:0;
  left:10px;
  right:10px;
  z-index: -1;
}
.stamp i {
  position: absolute;
  left: 20%;
  top: 45px;
  height: 190px;
  width: 390px;
  background-color: rgba(255, 255, 255, .15);
  transform: rotate(-30deg);
}
.stamp .par {
  float: left;
  padding: 16px 15px;
  width: 220px;
  border-right:2px dashed rgba(255, 255, 255, .3);
  text-align: left;
}
.stamp .par p {
  color:#fff;
  font-size: 16px;
  line-height: 21px;
}
.stamp .par span {
  font-size: 40px;
  color:#fff;
  margin-right: 5px;
  line-height: 65px;
}
.stamp .par .sign {
  font-size: 34px;
}
.stamp .par sub {
  position: relative;
  top:-5px;
  color:rgba(255, 255, 255, .8);
}
.stamp .copy {
  display: inline-block;
  padding:21px 14px;
  width:100px;
  vertical-align: text-bottom;
  font-size: 30px;
  color:rgb(255,255,255);
  text-align: center;
  line-height: initial;
}
.stamp .copy p {
  font-size: 16px;
  margin-top: 15px;
}

.stamp03 {
  background: radial-gradient(transparent 0, transparent 0px, #7EAB1E 0px);
  background-size: 15px 15px;
  background-position: 9px 3px;
}
.stamp03:before {
  background-color:#7EAB1E;
}
.stamp03 .copy {
  padding: 10px 6px 10px 12px;
  font-size: 24px;
}
.stamp03 .copy p {
  font-size: 14px;
  margin-top: 5px;
  margin-bottom: 8px;
}
.stamp03 .copy a {
  background-color:#fff;
  color:#333;
  font-size: 14px;
  text-decoration:none;
  padding:5px 10px;
  border-radius:3px;
  display: block;
}
  </style>
</head>
<body>
  <?php echo widget('Index/header'); ?>
    <div id="base_index" class="mc-index">
        <div class="hr-10"></div>
        <div class="g">
            <div class="breadcrumb-area fcn"><a href="/index/index/">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a href="/index/index/">我的商城</a></em><em id="pathPoint"></em><span id="pathTitle"></span></div>   
        </div>
        <div class="hr-10"></div>
        <div class="g">
              <div class="fr u-4-5">
               <!-- 20141212-栏目-start --> 
               <div class="section-header" style="margin-left:40px"> 
                <div class="fl"> 
                 <h2><span>我的代金券</span></h2> 
                </div> 
               </div>
               <!-- 20141212-栏目-end --> 
               <div class="hr-20"></div> 
               <!-- 20141218-站内信-列表-start --> 
               <div class="myMail-record"> 
                <div class="list-group-title" id="list-group-title"> 
                
                      
                
                    <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$row): ?>
                      <div class="demo">
                        <div class="stamp stamp03">
                            <div class="par"><p>华为商城代金券</p><sub class="sign"></sub><span><?php echo $row['coupons']; ?>元代金券</span><sub></sub><p>订单满100.00元</p></div>
                            <div class="copy">副券<p><br>永久有效</p></div>
                            <i></i>
                        </div>
                      </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?> 
                  
               
                </div>
                <div class="list-group-page hide"> 
                 <div class="pager" id="list-pager"></div> 
                </div> 
               </div> 
               <div id="ec_ui_confirm" class="popup-area popup-define-area hide" style="display: none;"> 
                <div class="b"> 
                 <p id="ec_ui_confirm_msg"></p> 
                 <div class="popup-button-area">
                  <a id="ec_ui_confirm_yes" href="javascript:;" class="button-action-yes"><span>是</span></a>
                  <a id="ec_ui_confirm_no" href="javascript:;" class="button-action-no"><span>否</span></a>
                 </div> 
                </div> 
                <div class="f">
                 <s class="icon-arrow-down"></s>
                </div> 
               </div> 
               <div class="hr-75"></div> 
               <script src="https://res9.vmallres.com/20171221/js/uum/member/msg/list.min.js?20141025"></script> 
               <script>
            ec.load("ec.pager");
            ec.mediaPath = "https://res.vmallres.com/pimages/";
            </script>
               <script id="jsapi_loader1" loadtype="insert" type="text/javascript" src="https://res9.vmallres.com/20171221/js/common/ec.pager/pager-min.js" charset="gbk"></script>
               <script>(function(){var time = 0,el = document.getElementById('jsapi_loader1');if(!el || (el.readyState && 'complete' != el.readyState)){ if(time<10){ setTimeout(arguments.callee,30); time++; }else{ logger.error('load the script of id jsapi_loader1 fail!');} return; }ol._setLoadStatus("ec.pager/pager-min.js","complete");})();</script>
              </div>
        <!-- 20170823-左边菜单-start -->
         <?php echo widget('Index/leftlist'); ?>
        <!-- 20170823-左边菜单-end -->
        </div>
        <div class="hr-80"></div>
    </div>
  <?php echo widget('Index/footer'); ?>
</body>
</html>
