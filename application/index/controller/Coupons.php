<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Config;
use think\Session;
class Coupons extends Controller{
    

    //加入代币券表
    public function getAdd(){
      $data['uid']=Session::get("user_id");
      $request=request();
      $coupons=$request->param('jiang');
      // var_dump($data['coupons']);
      $isMatched = preg_match('/^¥(.*?)\s*代金券$/',  $coupons, $matches);
      // var_dump($matches);
      // var_dump($matches['1']);

      // var_dump($isMatched);exit;
      if($isMatched==1){
          $data['coupons']=$matches['1'];
          Db::table("coupons")->insert($data);
      }
      $this->redirect("/Iorderdetails/index/status/0");
      
    }
  //查看代金券
    public function getIndex(){
        $uid=Session::get("user_id");
        $info=Db::table("coupons")->where("uid",$uid)->select();
        // var_dump($info);
        return $this->fetch("/Coupons/index",['info'=>$info]);
    }
    
}