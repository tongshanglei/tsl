<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\wamp\www\c\thinkphp5\public/../application/index\view\notice\list.html";i:1515487439;}*/ ?>
<?php echo widget('Index/header'); ?>
<link rel="stylesheet" href="__STATIC__/index/css/notice.css">

<div class="hr-10"></div>
<div class="g">
    <!--面包屑 -->
    <div class="breadcrumb-area fcn"><a href="/index/index" title="首页">首页</a>&nbsp;&gt;&nbsp;<a href="/inotice/list">商城公告</a></div>
</div>
<div class="hr-15"></div>
<div class="g">
    <div class="fr u-4-5">
        <!--栏目 -->
        <div class="part-area clearfix">

        </div>
        <div class="hr-2"></div>
        <!--新闻-列表 -->
        <div class="news-list" id="news-list-ul">
            <ul class="clearfix">
                <?php foreach($info as $vo): ?>
                <li>
                    <span class="fl"><a href="/inotice/centent/id/<?php echo $vo['id']; ?>" title="在线客服系统升级公告"><?php echo $vo['title']; ?></a> </span>
                    <span class="fr"><?php echo date("Y-m-d H:i:s",$vo['addtime']); ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="hr-25"></div>
        <!--分页 -->
        <div class="pager" id="pages"><?php echo $info->render(); ?></div>
    </div>
    <div class="fl u-1-5"><!--左边菜单 -->
        <div class="news-menu-area">
            <div class="h">
                <s></s>
                <b></b>
            </div>
            <div class="b">
                <ul class="clearfix">
                    <li id="menu-media"><a href="#" title="媒体评测"><span>媒体评测</span></a></li>
                    <li id="menu-notice" class="current"><a href="/inotice/list" title="商城公告"><span>商城公告</span></a></li>
                    <li id="menu-news"><a href="#" title="新闻资讯"><span>新闻资讯</span></a></li>
                </ul>
            </div>
        </div>
        <div class="hr-15"></div>
        <div class="ad ad179"></div>
        <script>
            (function(){
                var path = location.pathname.split("-");
                if(path.length > 0)
                {
                    $("#menu-"+path[0].substring(1)).addClass("current").siblings().removeClass("current");
                }
            })();
        </script></div>
</div>
<div class="hr-60"></div>
<?php echo widget('Index/footer'); ?>
