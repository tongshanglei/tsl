<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Config;
use think\File;
class Userinfo extends Allow
{
  //修改用户详情
   public function getEdit($id){
    $request=request();
    $info=Db::table("users_info")->where('uid',$id)->find();
    $m='';
    if($info){
      $m='1';
      $action='update';
      $tishi='用户详情修改';
    }else{
      $m='0';
      $action='insert';
      $tishi='用户详情添加';
    }
    // echo '<pre>';
    // var_dump($info);
    // echo $m;
    return $this->fetch("User_info/index",['info'=>$info,'m'=>$m,'uid'=>$id,'action'=>$action,'tishi'=>$tishi]);
   }

   //执行添加
   public function postInsert(){
    $validate=validate('Userinfo');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
    }
    // echo 1;
    $request=request();
    $uids=$request->only(['uid']);
    // var_dump($uid);exit;
    $file=$request->file('pic');
    // if($file){
      //有上传文件数据
          //2.验证
          $result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic'=>'大小超出']);
          if(true!==$result){
              $this->error($result,"/userinfo/edit/id/{$uids['uid']}");
          }
           //3.移动文件
          $info=$file->move(ROOT_PATH . 'public' . DS . 'userinfo');
          $savename=$info->getSaveName();
          //处理$savename
          $s=preg_replace("/\\\/","/",$savename);
          //打开需要处理的图像
          $img=\think\Image::open("./userinfo/".$savename);
           //获取上传文件后缀
          $ext=$info->getExtension();
          $imgname=time()+rand(1,10000);
          //缩放
          $img->thumb(100,100)->save("./userinfo/publicimg/".$imgname.".".$ext);
          $data=$request->except(['action']);
          $data['pic']=$imgname.".".$ext;
          $data['opic']="./userinfo/".$s;
          //插入
          $row=Db::table("users_info")->insert($data);
          if($row){
            $this->success("添加成功","/user/index");
          }else{
            $this->error("添加失败","/userinfo/edit/id/{$uids['uid']}");
          }
    // }else{
    //       //没有上传数据
    //       $data=$request->except(['action','pic','opic']);
    //       //执行插入
    //       $row=Db::table("users_info")->insert($data);
    //       if($row){
    //         $this->success("添加成功","/user/index");
    //       }else{
    //         $this->error("添加失败","/userinfo/edit/id/{$uids['uid']}");
    //       }
    // }
    //   echo '<pre>';
    // var_dump($data);
   }
   //执行修改
   public function postUpdate(){
    $validate=validate('Userinfo');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
    }
    $request=request();
    $file=$request->file('pic');
     $datas=$request->only(['uid']);
     $uid=$datas['uid'];
     //获取需要修改的数据
      $infos=Db::table("users_info")->where("uid",$uid)->find();
          // echo '<pre>';
    // var_dump($info);exit;
    if($file){
      //有上传文件数据
          //2.验证
          $result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic'=>'大小超出']);
          if(true!==$result){
              $this->error($result,"/userinfo/edit/id/{$uid}");
          }
           //3.移动文件
          $info=$file->move(ROOT_PATH . 'public' . DS . 'userinfo');
          $savename=$info->getSaveName();
          //处理$savename
          $s=preg_replace("/\\\/","/",$savename);
          //打开需要处理的图像
          $img=\think\Image::open("./userinfo/".$savename);
           //获取上传文件后缀
          $ext=$info->getExtension();
          $imgname=time()+rand(1,10000);
          //缩放
          $img->thumb(100,100)->save("./userinfo/publicimg/".$imgname.".".$ext);
          $data=$request->except(['action']);
          $data['pic']=$imgname.".".$ext;
          $data['opic']="./userinfo/".$s;
          //插入
          $row=Db::table("users_info")->update($data);
          if($row){
            //删除添加时缩放以后的图
             unlink("./userinfo/publicimg/".$infos['pic']);
            // echo $info['pic'];exit;
              //删除原图
             unlink($infos['opic']);
            $this->success("修改成功","/user/index");
          }else{
            $this->error("修改失败","/userinfo/edit/id/{$uid}");
          }
    }else{
          //没有头像上传数据
           $data=$request->except(['action']);
          //执行插入
          $row=Db::table("users_info")->update($data);
          if($row){
            $this->success("修改成功","/user/index");
          }else{
            $this->error("修改失败","/userinfo/edit/id/{$uid}");
          }
    }
   }
  
}
