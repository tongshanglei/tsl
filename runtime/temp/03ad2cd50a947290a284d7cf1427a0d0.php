<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\Imail\index.html";i:1516014887;}*/ ?>
<!Doctype html>
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
            <div class="breadcrumb-area fcn"><a href="/index/index/">首页</a>&nbsp;&gt;&nbsp;<em id="personCenter"><a href="/index/index/">我的商城</a></em><em id="pathPoint"></em><span id="pathTitle"></span></div>   
        </div>
        <div class="hr-10"></div>
        <div class="g">
              <div class="fr u-4-5">
               <!-- 20141212-栏目-start --> 
               <div class="section-header" style="margin-left:40px"> 
                <div class="fl"> 
                 <h2><span>站内信</span></h2> 
                </div> 
               </div>
               <!-- 20141212-栏目-end --> 
               <div class="hr-20"></div> 
               <!-- 20141218-站内信-列表-start --> 
               <div class="myMail-record"> 
                <div class="list-group-title" id="list-group-title"> 
                 <table cellspacing="0" cellpadding="0" border="0"> 
                      <thead> 
                       <tr> 
                        <th class="col-operate">编号</th>
                        <th class="col-type">发送人</th> 
                        <th class="col-title">内容</th> 
                        <th class="col-date">发送时间</th> 
                        
                       </tr>   
                      </thead>
                 <?php if($message==null): ?>
                      <tr>
                          <td colspan="4">
                           <div class="list-group-empty">
                            您暂时没有相关信件。
                          </div>
                          </td> 
                    </tr>
                  <?php else: if(is_array($message) || $message instanceof \think\Collection || $message instanceof \think\Paginator): if( count($message)==0 ) : echo "" ;else: foreach($message as $key=>$row): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['sendname']; ?></td>
                            <td><?php echo $row['content']; ?></td>
                            <td><?php echo date("Y-m-d",$row['mtime']); ?></td>
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>       
                 </table> 
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
