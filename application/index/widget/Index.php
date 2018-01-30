<?php
namespace app\index\widget;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
use think\Session;

class Index extends Controller{

	protected $user;
    protected $zhuce;
    public function _initialize(){
        //检测用户的登录session是否存在
        if(Session::has('login') && Session::get('login')==true){
            $this->user='<a id="top-index-loginUrl" href="/ipersonal/index">'.Session::get('username').'</a>';
            $this->zhuce='<a href="/ilogin/Logout">&nbsp;&nbsp;退出</a>';
        }else{
            $this->user='<a id="top-index-loginUrl" href="/ilogin/login">请登录</a>';
            $this->zhuce='<a href="/register/index">&nbsp;&nbsp;注册</a>';
            
        }
    }
	public function header(){
		 $advert=db('advert')->where('status',0)->find(1);
		 $cates=db('cates')->where('pid',0)->select();
        if(!empty($advert)){
            $advert["pic"]=str_replace("\\","/",$advert["pic"]);
        }
        return $this->fetch("IndexPublic:header",['user'=>$this->user,'zhuce'=>$this->zhuce,'advert'=>$advert,'cates'=>$cates]);
    }

   public function footer()
    {
        $link=db('link')->where('status',1)->select();

        return $this->fetch('IndexPublic/footer',['link'=>$link]);
    }
    //个人中心
      public function leftlist(){
        //加载模板
        return $this->fetch("IndexPublic/leftlist");
    }
}

?>