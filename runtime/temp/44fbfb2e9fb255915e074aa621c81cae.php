<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"F:\wamp\wamp\www\ss20\zuoye\tp5\public/../application/index\view\notice\notice.html";i:1515487686;}*/ ?>
<?php echo widget('Index/header'); ?>
<div class="hr-10"></div>
<div class="g" >
    <!--面包屑 -->
    <div class="breadcrumb-area fcn"><a href="/index/index" title="首页">首页</a>&nbsp;>&nbsp;<a href="/inotice/list" title="商城公告">商城公告</a>&nbsp;>&nbsp;<span><?php echo $info['title']; ?></span></div>
</div>
<div class="hr-15" ></div>
<div style="margin: 0 auto;width: 60%;text-indent: 2em;">
    <div >
        <!--新闻-详情 -->
        <div >

                <h1 style="font-size: 60px;text-align: center"><?php echo $info['title']; ?></h1>

            <div class="b"><?php echo $info['centent']; ?></div>
            <div class="news-extra-area clearfix">
                <div>更新时间：<?php echo date("Y-m-d",$info['addtime']); ?></div>
            </div>
        </div>
    </div>
</div>
<div class="hr-60"></div>
<!--口号-20121025 -->

<?php echo widget('Index/footer'); ?>