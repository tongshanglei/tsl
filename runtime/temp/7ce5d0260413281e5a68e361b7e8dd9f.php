<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/admin\view\Nodelist\add.html";i:1515032438;s:77:"F:\wamp\wamp\www\ss20\zuoye\tp5\application\admin\view\AdminPublic\index.html";i:1516196128;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
 <!--<![endif]-->
 <head> 
  <meta charset="utf-8" /> 
  <!-- Viewport Metatag --> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0" /> 
  <!-- Plugin Stylesheets first to ease overrides --> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/plugins/colorpicker/colorpicker.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/custom-plugins/wizard/wizard.css" media="screen" /> 
  <!-- Required Stylesheets --> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/bootstrap/css/bootstrap.min.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/fonts/ptsans/stylesheet.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/fonts/icomoon/style.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/mws-style.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/icons/icol16.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/icons/icol32.css" media="screen" /> 
  <!-- Demo Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/demo.css" media="screen" /> 
  <!-- jQuery-UI Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/jui/css/jquery.ui.all.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/jui/jquery-ui.custom.css" media="screen" /> 
  <!-- Theme Stylesheet --> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/mws-theme.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/themer.css" media="screen" /> 
  <link rel="stylesheet" type="text/css" href="/static/admins/b/css/my.css" media="screen" /> 
  <title>节点添加</title> 

 </head> 
 <body> 
 <div id="mws-themer">
        <div id="mws-themer-content" style="right: 0px;">
          <div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle" class="">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
          <div id="mws-theme-presets-container" class="mws-themer-section">
            <label for="mws-theme-presets">Color Presets</label>
            <select id="mws-theme-presets"><option value="0">Default</option><option value="1">Army</option><option value="2">Rocky Mountains</option><option value="3">Chinese Temple</option><option value="4">Boutique</option><option value="5">Toxic</option><option value="6">Aquamarine</option></select></div>
            <div class="mws-themer-separator"></div>
          <div id="mws-theme-pattern-container" class="mws-themer-section">
            <label for="mws-theme-patterns">Background</label>
            <select id="mws-theme-patterns"><option value="0">Paper</option><option value="1">Blueprint</option><option value="2">Bricks</option><option value="3">Carbon</option><option value="4">Circuit</option><option value="5">Holes</option><option value="6">Mozaic</option><option value="7">Roof</option><option value="8">Stripes</option><option value="9">Arches</option><option value="10">Bright Squares</option><option value="11">Brushed Alu</option><option value="12">Circles</option><option value="13">Climpek</option><option value="14">Connect</option><option value="15">Corrugation</option><option value="16">Cubes</option><option value="17">Diagonal Noise</option><option value="18">Diagonal Striped Brick</option><option value="19">Diamonds</option><option value="20">Diamond Upholstery</option><option value="21">Escheresque</option><option value="22">Fabric Plaid</option><option value="23">Furley</option><option value="24">Gplaypattern</option><option value="25">Gradient Squares</option><option value="26">Grey</option><option value="27">Grilled</option><option value="28">Hexellence</option><option value="29">Lghtmesh</option><option value="30">Light Alu</option><option value="31">Light Checkered Tiles</option><option value="32">Light Honeycomb</option><option value="33">Littleknobs</option><option value="34">Nistri</option><option value="35">Noise Lines</option><option value="36">Noise Pattern</option><option value="37">Noisy Grid</option><option value="38">Norwegian Rose</option><option value="39">Pineapplecut</option><option value="40">Pinstripe</option><option value="41">Project Papper</option><option value="42">Ravenna</option><option value="43">Reticular Tissue</option><option value="44">Rockywall</option><option value="45">Roughcloth</option><option value="46">Shattered</option><option value="47">Silver Scales</option><option value="48">Skelatal Weave</option><option value="49">Small Crackle Bright</option><option value="50">Small Tiles</option><option value="51">Square</option><option value="52">Struckaxiom</option><option value="53">Subtle Stripes</option><option value="54">Vichy</option><option value="55">Washi</option><option value="56">Wavecut</option><option value="57">Weave</option><option value="58">Whitey</option><option value="59">White Brick Wall</option><option value="60">White Tiles</option><option value="61">Worn Dots</option></select></div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger" style="background-color: rgb(219, 20, 20);"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-slider-range-min" style="width: 50%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 50%;"></a><span class="ui-slider-handle-tooltip ui-state-default" style="display: none; margin-left: -13px; left: 50%;">50</span></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
              <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        
    </div>
  <!-- Header --> 
  <div id="mws-header" class="clearfix"> 
   <!-- Logo Container --> 
   <div id="mws-logo-container"> 
    <!-- Logo Wrapper, images put within this wrapper will always be vertically centered --> 
    <div id="mws-logo-wrap"> 
     <img src="/static/admins/b/images/mws-logo.png" alt="mws admin" /> 
    </div> 
   </div> 
   <!-- User Tools (notifications, logout, profile, change password) --> 
   <div id="mws-user-tools" class="clearfix"> 
    <!-- Notifications --> 
    <div id="mws-user-notif" class="mws-dropdown-menu"> 

     <!-- Notifications dropdown --> 
     <div class="mws-dropdown-box"> 
      <div class="mws-dropdown-content"> 
       <ul class="mws-notifications"> 
        <li class="read"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="read"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
       </ul> 
       <div class="mws-dropdown-viewall"> 
        <a href="#">View All Notifications</a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- Messages --> 
    <div id="mws-user-message" class="mws-dropdown-menu"> 
     
     <!-- Unred messages count --> 
     
     <!-- Messages dropdown --> 
     <div class="mws-dropdown-box"> 
      <div class="mws-dropdown-content"> 
       <ul class="mws-messages"> 
        <li class="read"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="read"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
        <li class="unread"> <a href="#"> <span class="sender">John Doe</span> <span class="message"> Lorem ipsum dolor sit amet </span> <span class="time"> January 21, 2012 </span> </a> </li> 
       </ul> 
       <div class="mws-dropdown-viewall"> 
        <a href="#">View All Messages</a> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- User Information and functions section --> 
    <div id="mws-user-info" class="mws-inset"> 
     <!-- User Photo --> 
     <div id="mws-user-photo"> 
      <img src="/static/admins/b/example/profile.jpg" alt="User Photo" /> 
     </div> 
     <!-- Username and Functions --> 
     <div id="mws-user-functions"> 
      <div id="mws-username">
        <?php echo \think\Session::get('aname'); ?>
      </div> 
      <ul> 
       <li><a href="/admins/edit/id/<?php echo \think\Session::get('aid'); ?>">修改密码</a></li> 
       <li><a href="/login/logout">退出登录</a></li> 
      </ul> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- Start Main Wrapper --> 
  <div id="mws-wrapper"> 
   <!-- Necessary markup, do not remove --> 
   <div id="mws-sidebar-stitch"></div> 
   <div id="mws-sidebar-bg"></div> 
   <!-- Sidebar Wrapper --> 
   <div id="mws-sidebar"> 
    <!-- Hidden Nav Collapse Button --> 
    <div id="mws-nav-collapse"> 
     <span></span> 
     <span></span> 
     <span></span> 
    </div> 
    <!-- Searchbox --> 
    <div id="mws-searchbox" class="mws-inset"> 
     <form action="typography.html"> 
      <input type="text" class="mws-search-input" placeholder="Search..." /> 
      <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button> 
     </form> 
    </div> 
    <!-- Main Navigation --> 
    <div id="mws-navigation"> 
     <ul>
                    <li>
                        <a href="#"><i class="icon-user"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/user/add">用户添加</a></li>
                            <li><a href="/user/index">用户列表</a></li>
                        </ul>
                    </li>
                    
                     <li>
                        <a href="#"><i class="icon-th-list"></i> 管理员管理</a>
                        <ul class="closed">
                            <li><a href="/admins/add">管理员添加</a></li>
                            <li><a href="/admins/index">管理员列表</a></li>
                            <li><a href="/rolelist/add">角色添加</a></li>
                            <li><a href="/rolelist/index">角色列表</a></li>
                             <li><a href="/nodelist/add">节点添加</a></li>
                            <li><a href="/nodelist/index">节点列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-th-list"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/cate/add">分类添加</a></li>
                            <li><a href="/cate/index">分类列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-th-list"></i> 公告管理</a>
                        <ul class="closed">
                            <li><a href="/notice/add">添加公告</a></li>
                            <li><a href="/notice/index">公告列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-th-list"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/goods/add">商品添加</a></li>
                            <li><a href="/goods/index">商品列表</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-th-list"></i> 站内信管理</a>
                        <ul class="closed">
                            <li><a href="/message/add">站内信添加</a></li>
                            <li><a href="/message/index">站内信</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-th-list"></i>轮播图管理</a>
                        <ul class="closed">
                            <li><a href="/carousel/index">轮播图列表</a></li>
                            <li><a href="/carousel/add">轮播图添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-th-list"></i> 订单管理</a>
                        <ul class="closed">
                            <li><a href="/order/index">订单</a></li>
                            <li><a href="/order/wait">未发货订单</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-th-list"></i> 收货地址管理</a>
                        <ul class="closed">
                            <li><a href="/address/index">收货地址列表</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-file"></i>广告管理</a>
                        <ul class="closed">
                            <li><a href="/advert/index">广告列表</a></li>  
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#"><i class="icon-file"></i> 友情链接管理</a>
                        <ul class="closed">
                            <li><a href="/link/add">链接添加</a></li>
                            <li><a href="/link/index">链接列表</a></li>
                        </ul>
                    </li>

              

                    
    </div> 
   </div> 
   <!-- Main Container Start --> 
   <div id="mws-container" class="clearfix"> 
    <div class="container"> 
     
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>节点添加</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/nodelist/insert" method="post"> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">节点名</label> 
       <div class="mws-form-item"> 
        <input class="large" type="text" name="name"/> 
       </div> 
      </div> 

      <div class="mws-form-row"> 
       <label class="mws-form-label">控制器名</label> 
       <div class="mws-form-item"> 
        <input class="large" type="text" name="mname"/> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">方法名</label> 
       <div class="mws-form-item"> 
        <input class="large" type="text" name="aname"/> 
       </div> 
      </div> 
      
     
      <div class="mws-form-row"> 
       <label class="mws-form-label">节点状态</label> 
       <div class="mws-form-item"> 
        <select class="large" name="status"> <option value="0">0</option><option value="1">1</option> </select> 
       </div> 
      </div> 
      
     <div class="mws-button-row"> 
      <input value="提交" class="btn btn-danger" type="submit" /> 
      <input value="重置" class="btn " type="reset" /> 
     </div> 
    </form> 
   </div> 
  </div> 
 </body>
</html>

    
    </div> 
    <!-- footer --> 
    <div id="mws-footer">
      Copyright Your Website 2012. All Rights Reserved. 
    </div> 
   </div> 
   <!-- Main Container End --> 
  </div> 
  <!-- JavaScript Plugins --> 
  <script src="/static/admins/b/js/libs/jquery-1.8.3.min.js"></script> 
  <script src="/static/admins/b/js/libs/jquery.mousewheel.min.js"></script> 
  <script src="/static/admins/b/js/libs/jquery.placeholder.min.js"></script> 
  <script src="/static/admins/b/custom-plugins/fileinput.js"></script> 
  <!-- jQuery-UI Dependent Scripts --> 
  <script src="/static/admins/b/jui/js/jquery-ui-1.9.2.min.js"></script> 
  <script src="/static/admins/b/jui/jquery-ui.custom.min.js"></script> 
  <script src="/static/admins/b/jui/js/jquery.ui.touch-punch.js"></script> 
  <!-- Plugin Scripts --> 
  <script src="/static/admins/b/plugins/datatables/jquery.dataTables.min.js"></script> 
  <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]--> 
  <script src="/static/admins/b/plugins/flot/jquery.flot.min.js"></script> 
  <script src="/static/admins/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script> 
  <script src="/static/admins/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script> 
  <script src="/static/admins/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script> 
  <script src="/static/admins/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script> 
  <script src="/static/admins/b/plugins/colorpicker/colorpicker-min.js"></script> 
  <script src="/static/admins/b/plugins/validate/jquery.validate-min.js"></script> 
  <script src="/static/admins/b/custom-plugins/wizard/wizard.min.js"></script> 
  <!-- Core Script --> 
  <script src="/static/admins/b/bootstrap/js/bootstrap.min.js"></script> 
  <script src="/static/admins/b/js/core/mws.js"></script> 
  <!-- Themer Script (Remove if not needed) --> 
  <script src="/static/admins/b/js/core/themer.js"></script> 
  <!-- Demo Scripts (remove if not needed) --> 
  <script src="/static/admins/b/js/demo/demo.dashboard.js"></script>  
 </body>
 
</html>