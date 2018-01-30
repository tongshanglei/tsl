<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Config;
class Message extends Allow{
	//加载列表
	public function getIndex(){
		$request=request();
		$message=Db::table("message")->paginate(8);
		//var_dump($message);exit;
		return $this->fetch("Message/index",['message'=>$message,'request'=>$request->param()]); 
	}

	//加载发送模板
	public function getAdd(){
		return $this->fetch("Message/add");
	}
	//执行添加
	public function postInsert(){
		$request=request();
		$data=$request->only(['sendname','recid','content']);
		$data['mtime']=time();
		if(Db::table("message")->insert($data)){
			$this->success("发送成功","/message/index");
		}else{
			$this->error("发送失败","/message/add");
		}
	}
	//执行删除
	public function getDel($id){
		if(Db::table("message")->where("id",$id)->delete()){
			$this->success("删除成功","/message/index");
		}else{
			$this->error("删除失败","/message/index");
		}
	}
	//加载修改模板
	public function getEdit($id){
		$info=Db::table("message")->where("id",$id)->find();
		return $this->fetch("Message/edit",['info'=>$info,'id'=>$id]);
	}
	//执行修改
    public function postUpdate(){
    	$request=request();
    	// echo "<pre>";
    	// var_dump($request->param());
    	$data=$request->except(['action']);
    	$id=$request->param('id');
    	$data['mtime']=time();
    	if(Db::table("message")->where("id",$id)->update($data)){
    		$this->success("修改成功","/message/index");

    	}else{
    		$this->error("修改失败","/message/edit/id/{$id}");

    	}
    }
}

?>