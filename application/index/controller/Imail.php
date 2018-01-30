<?php
namespace app\index\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
//导入Session
use think\Session;

class Imail extends Controller
{
    //查看站内信
    public function getIndex(){
    	if(Session::has('login')){
    		$username=Session::get('username');
    		$id=Session::get("user_id");
    		$message=Db::table("message")->where("recid=0 OR recid={$id}")->select();
    		return $this->fetch("/Imail/index",['username'=>$username,'message'=>$message]);
    	}else{
    		$this->error("请登录","/ilogin/login");
    	}
        
    }
   
}
