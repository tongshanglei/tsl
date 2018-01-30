<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Config;
use think\Session;
class Cart extends Controller{
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
    //添加商品到购物车
    public function getAdd(){
        $userid=Session::get("user_id");
        //加载登录模板
        $request=request();
        if(Session::has('login') && Session::get('login')==true){
          //获取商品id
          $id=$request->param('id');
          // var_dump($id);
          //获取商品数据
          $info=Db::table("goods")->where("id",$id)->find();
          // var_dump($info);
          //获取当前用户购物车信息
          $cart=Db::table("car")->where("user_id={$userid} and shops_id={$id}")->select();
          // var_dump($cart);
          if(!empty($cart)){
            $cart[0]['num']+=1;
            if($cart[0]['num']>$info['num']){
              $cart[0]['num']=$info['num'];
            }
            Db::table("car")->where("id","{$cart[0]['id']}")->update($cart[0]);
          }else{
            $data['user_id']=$userid;
            $data['shops_id']=$id;
            $data['shops_name']=$info['name'];
            $data['pic']=$info['pic'];
            $data['descr']=$info['descr'];
            $data['num']=1;
            $data['price']=$info['price'];
            //执行插入
            Db::table("car")->insert($data);
          }
        }else{
          $this->error("您未登录,请先登录",'/ilogin/login');
        }
        $this->success("加入购物车成功","/cart/index");

    } 

    //进入购物车
    public function getIndex(){
      if(Session::has('login') && Session::get('login')==true){
          $cart=Db::table("car")->where("user_id",Session::get('user_id'))->select();
          return $this->fetch("Cart/index",['user'=>$this->user,'zhuce'=>$this->zhuce,'cart'=>$cart]);
        }else{
          $this->error("您未登录,请先登录",'/ilogin/login');
        }
    }
    //减
    public function getJian(){
      $request=request();
      //获取id
      $id=$request->param('id');
      $info=Db::table('car')->where("id",$id)->find();
      $info['num']-=1;
      if($info['num']<1){
        $info['num']=1;
      }
      Db::table("car")->where("id",$id)->update($info);
      $data['num']=$info['num'];
      $data['tot']=$info['num']*$info['price'];
      echo json_encode($data);
    }
    //加
    public function getJia(){
      $request=request();
      //获取id
      $id=$request->param('id');
      $info=Db::table('car')->where("id",$id)->find();
      $infos=Db::table("goods")->where("id",$info['shops_id'])->find();
      $info['num']+=1;
      if($info['num']>$infos['num']){
        $info['num']=$infos['num'];
      }
      Db::table("car")->where("id",$id)->update($info);
      $data['num']=$info['num'];
      $data['tot']=$info['num']*$info['price'];
      echo json_encode($data);
    }

    //删除单条
    public function getDel(){
      $request=request();
      $id=$request->param("id");
      if(Db::table("car")->where('id',$id)->delete()){
        echo 1;
      };
    }
    //ajax批量删除
    public function getDelete(){

        $id=isset($_GET['id'])?$_GET['id']:'';
        if($id==""){
            echo 0;exit;
        }
        //执行删除
        foreach($id as $v){
            Db::table("car")->where("id",$v)->delete();
        }
        echo 1;
    }
    //计算
    public function getJisuan(){
       $id=isset($_GET['id'])?$_GET['id']:'';
       if($id==""){
            echo 0;exit;
        }
        $total=0;
        foreach($id as $v){
            $info=Db::table("car")->where("id",$v)->find();
            $total +=$info['num']*$info['price'];
        }
        echo $total;
    }
    
}