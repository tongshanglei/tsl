<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Config;
class User extends Allow
{
   public function getIndex(){
    $request=request();
    $k=$request->get("keyword");
    $user=Db::table("users")->where('username','like','%'.$k.'%')->paginate(5);
    return $this->fetch("User/index",['user'=>$user,'request'=>$request->param(),'k'=>$k]);
   }

   
   public function getAdd(){
    return $this->fetch("User/add");
   }


   public function postInsert(){
    $request=request();
    // $data=$request->param();
    // var_dump($data);
    $data=$request->except(['repassword','action']);
    $data['token']=rand(1,10000);
    $result=$this->validate($request->param(),'User');
    if(true!==$result){
        // echo $result;exit;
        $this->error($result,"/user/add");
      }
    if(Db::table("users")->insert($data)){
        $this->success("添加成功","/user/index");
    }else{
        $this->error("添加失败","/user/add");
    }
   }
   //执行删除
    public function getDel($id){
      // echo $id;
      if(Db::table("users")->where("id",$id)->delete()){
        $this->success("删除成功","/user/index");
      }else{
        $this->error("删除失败","/user/index");
      }
    }

    //修改
    public function getEdit($id){
      //获取需要修改数据
      $info=Db::table("users")->where("id",$id)->find();
      //加载模板
      return $this->fetch("User/edit",['info'=>$info]);
    }

    //执行修改
    public function postUpdate(){
      $request=request();
      // echo "<pre>";
      // var_dump($request->param());
      $data=$request->except(['action']);
      $data['token']=rand(1,10000);
      if(Db::table("users")->where("id",$request->param('id'))->update($data)){
        $this->success("修改成功","/user/index");

      }else{
        $this->error("修改失败","/user/edit");

      }
    }
    //批量删除
    public function getDelete(){
        //获取参数
        $uid=isset($_GET['uid'])?$_GET['uid']:'';
        //判断
        if($uid==""){
            echo "请至少选中一条数据";
            exit;
        }
        // echo json_encode($uid);
        //执行删除
        foreach($uid as $key=>$value){
            if(Db::table("users")->where("id","{$value}")->delete()){

            }
        }

        echo 1;
    }

}
