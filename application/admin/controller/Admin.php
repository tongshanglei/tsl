<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
class Admin extends Allow
{
    // public function getIndex()
    // {
    //     return $this->fetch("Admin/index");
    // }

    public function getIndex(){
	$info = array(
	'操作系统'=>PHP_OS,
	'运行环境'=>$_SERVER["SERVER_SOFTWARE"],
	'PHP运行方式'=>php_sapi_name(),
	'ThinkPHP版本'=>THINK_VERSION.' [ <a href="http://thinkphp.cn" target="_blank">查看最新版本</a> ]',
	'上传附件限制'=>ini_get('upload_max_filesize'),
	'执行时间限制'=>ini_get('max_execution_time').'秒',
	'服务器时间'=>date("Y年n月j日 H:i:s"),
	'北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
	'服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
	'剩余空间'=>round((disk_free_space(".")/(1024*1024)),2).'M',
	);
	// echo '<pre>';
	// var_dump($info);
	// $this->assign('info',$info);
	// $this->display();
	return $this->fetch("Admin/index",['info'=>$info]);
	}
}
