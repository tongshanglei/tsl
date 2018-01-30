<?php
namespace app\admin\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
class Nodelist extends Allow{
	public function getIndex(){
		$request=request();
		$data=Db::table("node")->paginate(10);
		return $this->fetch("Nodelist/index",['data'=>$data,'request'=>$request->param()]);
	}
	//加载添加模板
	public function getAdd(){
		return $this->fetch("Nodelist/add");
	}
	//执行添加
	public function postInsert(){
		$request=request();
		$data=$request->except(['action']);
		if(Db::table("node")->insert($data)){
			$this->success("节点添加成功","/nodelist/index");
		}else{
			$this->error("节点添加失败","/nodelist/add");
		}
	}
	//执行删除
	public function getDel($id){
		if(Db::table("node")->where("id",$id)->delete()){
			$this->success("节点删除成功","/nodelist/index");
		}else{
			$this->erroe("节点删除失败","/nodelist/index");
		}
	}
	//加载修改
	public function getEdit($id){
		$info=Db::table("node")->where("id",$id)->find();
		return $this->fetch("nodelist/edit",['info'=>$info,'id'=>$id]);
	}
	//执行
	public function postUpdate(){
		$request=request();
		$data=$request->except(['action','id']);
		$id=$request->param('id');
		// var_dump($id);exit;
		if(Db::table("node")->where("id",$id)->update($data)){
			$this->success("修改成功","/nodelist/index");
		}else{
			$this->success("修改失败","/nodelist/edit/id/{$id}");
		}
	}
	//分配权限
	public function getNode($id){
		//获取角色信息
    	$user=Db::table('role')->where("id",$id)->find();
    	//获取所有权限信息
    	$node=Db::table("node")->select();
    	// var_dump($node);
    	//获取当前角色具有的权限信息
    	$data=Db::table("role_node")->where("rid",$id)->select();
    	// var_dump($data);exit;
    	//遍历 $rids 存储的是权限id
	    foreach($data as $v){
	    	$rids[]=$v['nid'];
	    }	
    	// var_dump($rids);exit;
    	//加载分配角色模板
        return $this->fetch("Rolelist/nodelist",['user'=>$user,'node'=>$node,'rids'=>$rids]);
	}
	//保存权限
	public function postSavenode(){
		$request=request();
		$rid=$request->param('rid');
		Db::table('role_node')->where("rid",$rid)->delete();
		$role=$_POST['rids'];
		foreach($role as $v){
			$data['rid']=$rid;
			$data['nid']=$v;
			Db::table('role_node')->insert($data);
		}
		$this->success("分配权限成功","/rolelist/index");
	}

}
?>