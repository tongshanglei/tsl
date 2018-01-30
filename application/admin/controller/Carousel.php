<?php
namespace app\admin\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
class Carousel extends Allow
{
    //加载显示模板
    public function getIndex(){
        $info=Db::table("lunbo")->select();
    	return $this->fetch("Carousel/index",['info'=>$info]);
    } 

 

    //商品添加
    public function getAdd(){
       
        return $this->fetch("Carousel/add");
    } 

    //执行添加
    public function postInsert(){
        $validate=validate('Carousel');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $request=request();
        $data=$request->except(['action']);
        $file =$request->file('pic');
        // echo '<pre>';
        // var_dump($file);
        if($file){
            $result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic.fileSize'=>'大小超出']);
            if(true!==$result){
                $this->error($result,"/goods/add");
            }
            $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'carousel');
            if($info){
                // 成功上传后 获取上传信息
                $savename=$info->getSaveName();
                $s=preg_replace("/\\\/","/",$savename);
                
                $data['pic']=$s;
                $result=Db::table("lunbo")->insert($data);
                if($result){
                    $this->success('添加成功','/Carousel/index');
                }else{
                    $this->error('添加失败','/Carousel/add');
                }
                
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }

    public function getdel($id){
          $info=Db::table("lunbo")->where("id",$id)->find();
        if(Db::table("lunbo")->where("id",$id)->delete()){
            
            unlink("./carousel/".$info['pic']);
            $this->success("删除成功","/goods/index");
        }else{
            $this->error("删除失败","/goods/index");
        }
    }

     //加载修改
    public function getEdit($id){
       
        $info=Db::table('lunbo')->where('id',$id)->find();
    
        return $this->fetch('Carousel/edit',['info'=>$info]);
    }

    //执行修改
    public function postUpdate(){
        $validate=validate('Carousel');
        if(!$validate->check(request()->param())){
            $this->error($validate->getError());
        }
        $request=request();
        $data=$request->except(['action']);
        $id=$data['id'];
        $infos=Db::table("lunbo")->where("id",$id)->find();
        $file =$request->file('pic');
        // var_dump($file);exit;
        if($file){
            $result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic.fileSize'=>'大小超出']);
            if(true!==$result){
                $this->error($result,"/goods/add");
            }
            $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'carousel');
            if($info){
                // 成功上传后 获取上传信息
                $savename=$info->getSaveName();
                $s=preg_replace("/\\\/","/",$savename);
                $data['pic']=$s;
                $result=Db::table("lunbo")->update($data);
                if($result){
                    unlink("./carousel/".$infos['pic']);
                    $this->success('修改成功','/Carousel/index');
                }else{
                    $this->error('修改失败','/Carousel/exit/id/$id');
                }
                
            }else{
                $row=Db::table("lunbo")->where('id',$id)->update($data);
                if($row){
                    $this->success("修改成功","/carousel/index");
                }else{
                    $this->error("修改失败","/carouesl/edit/id/$id");
                }
            }
        }
    }
}
