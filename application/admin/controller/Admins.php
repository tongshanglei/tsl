<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
use think\Config;
class Admins extends Allow{
	
	public function getIndex(){

		$request=request();
		$k=$request->get("keywords");
		$list=Db::table('admin_users')->where('name','like',"%".$k."%")->paginate(6);
		$status=array('0'=>'禁用','1'=>'正常');
		return $this->fetch("Admins/index",['list'=>$list,'status'=>$status,'request'=>$request->param(),'k'=>$k]);
	}
	//管理员添加
	public function getAdd(){
		return $this->fetch("Admins/add");
	}
	//执行添加
    public function postInsert(){
    	//创建请求对象
    	$request=request();
    	$data=$request->except(['action','repwd']);
    	$data['status']=1;
    	// echo "<pre>";
    	// var_dump($data);
    	$result=$this->validate($request->param(),'Admins');
    	
    	if(true !== $result){
    		$this->error($result,"/admins/add");
    	}
    	if(Db::table("admin_users")->insert($data)){
    		$user=Db::table("admin_users")->where('name',$data['name'])->find();
    		$role['uid']=$user['id'];
    		$role['rid']=1;
    		Db::table("user_role")->insert($role);
			$this->success("添加成功","/admins/index");
		}else{
			$this->error("添加失败","/admins/add");
		}
    }
    //删除
    public function getDel($id){
       // echo 111;
		if(Db::table("admin_users")->where("id",$id)->delete()){
			$this->success("删除成功","/admins/index");
		}else{
			$this->error("删除失败","/admins/index");
		}
	}
    //批量删除
    public function getDelete(){

        $id=isset($_GET['id'])?$_GET['id']:'';
        if($id==""){
            echo 0;exit;
        }
        //执行删除
        foreach($id as $v){
            Db::table("admin_users")->where("id",$v)->delete();
        }
        echo 1;
    }
    //执行修改
	public function getEdit($id){
       
		$info=Db::table("admin_users")->where("id",$id)->find();
		return $this->fetch("Admins/edit",['info'=>$info,'id'=>$id]);
	}

	//执行修改
    public function postUpdate(){
    	$request=request();
    	// var_dump($request->param());exit;
    	$data=$request->except(['action','id']);
        $id=$request->param('id');
    	if(Db::table("admin_users")->where("id",$id)->update($data)){
    		$this->success("修改成功","/admins/index");

    	}else{
    		$this->error("修改失败","/admins/edit/id/{$id}");

    	}
    }

    //分配角色
    public function getrolelist($id){
    	//获取用户信息
    	$user=Db::table('admin_users')->where("id",$id)->find();
    	//获取所有的角色信息
    	$role=Db::table("role")->select();
    	//获取当前用户具有的角色信息
    	$data=Db::table("user_role")->where("uid",$id)->select();
    	//var_dump($data);exit;
 
    	//遍历 $rids 存储的是角色id
	    foreach($data as $v){
	    	$rids[]=$v['rid'];
	    }
    	
    	
    // var_dump($rids);exit;
    	//加载分配角色模板
        return $this->fetch("Admins/rolelist",['user'=>$user,'role'=>$role,'rids'=>$rids]);
    	
    }

    //保存角色
    public function postsaverole(){
    	$request=request();
    	$uid=$request->param('uid');
    	Db::table('user_role')->where("uid",$uid)->delete();
    	$role=$_POST['rids'];
    	foreach($role as $v){
    		$data['uid']=$uid;
    		$data['rid']=$v;
    		Db::table('user_role')->insert($data);
    	}
    	$this->success("分配角色成功","/admins/index");
    }
}

?>