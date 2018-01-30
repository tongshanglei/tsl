<?php
namespace app\admin\controller;
//导入Controller
use think\Controller;
//导入Session类
use think\Session;
class Allow extends Controller
{
	//初始化方法
	public function _initialize(){

		// echo "初始化操作";exit;
		//检测用户的登录session是否存在
		if(!Session::has('islogins')){
            // echo 111;exit;
			//跳转到登录界面
			$this->error("请先登录","/login/login");
		}
			//5.权限对比
    	//获取当前用户具有的权限信息
    	$nodelist=Session::get('nodelist');//控制器和方法
    	//获取当前访问控制器和方法
    	//创建请求对象
    	$request=request();
    	//控制器
    	$controller=strtolower($request->controller());
    	//方法
    	$action=$request->action();
    	//把访问的控制器和方法和当前登录用户的权限列表做对比
    	if(empty($nodelist[$controller]) ||!in_array($action,$nodelist[$controller])){
    		$this->error("抱歉,您没有权限访问该模块,请联系超级管理员","/admin/index");
    		exit;
    	}
	}

   
}
