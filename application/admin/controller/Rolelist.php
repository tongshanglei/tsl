<?php
namespace app\admin\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
class Rolelist extends Allow{
	public function getIndex(){
		$data=Db::table("role")->select();
		return $this->fetch("Rolelist/index",['data'=>$data]);
	}
	//加载添加模板
	public function getAdd(){
		return $this->fetch("Rolelist/add");
	}
	//执行添加
	public function postInsert(){
		$request=request();
		$data=$request->except(['action']);
		if(Db::table("role")->insert($data)){
			$role=Db::table("role")->where('name',$data['name'])->find();
			$r_node['rid']=$role['id'];
			$r_node['nid']=1;
			Db::table("role_node")->insert($r_node);
			$this->success("角色添加成功","/rolelist/index");
		}else{
			$this->error("角色添加失败","/rolelist/add");
		}
	}
	//执行删除
	public function getDel($id){
		if(Db::table("role")->where("id",$id)->delete()){
			Db::table("role_node")->where('rid',$id)->delete();
			$this->success("角色删除成功","/rolelist/index");
		}else{
			$this->erroe("角色删除失败","/rolelist/index");
		}
	}
	//加载修改
	public function getEdit($id){
		$info=Db::table("role")->where("id",$id)->find();
		return $this->fetch("rolelist/edit",['info'=>$info,'id'=>$id]);
	}
	//执行
	public function postUpdate(){
		$request=request();
		$data=$request->except(['action','id']);
		$id=$request->param('id');
		// var_dump($id);exit;
		if(Db::table("role")->where("id",$id)->update($data)){
			$this->success("修改成功","/rolelist/index");
		}else{
			$this->success("修改失败","/rolelist/edit/id/{$id}");
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