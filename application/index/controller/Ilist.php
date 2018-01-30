<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Config;
class Ilist extends Controller
{
  //商品列表
    public function getIndex()
    {
    	$request=request();
    	$param=$request->only(['id']);
    	if(empty($param)){
    		$id=1;
    	}else{
    	$id=$param['id'];

    	}
    	// var_dump($id);exit;
   		$info=Db::table("cates")->where("id",$id)->find();
   		// var_dump($info);
   		if($info['pid']==0){
   			$par=$info;
    		$list=Db::table("cates")->where("pid",$id)->select();
    		foreach($list as $key=>$val){
    			$row=Db::table("goods")->where("cate_id",$val['id'])->where("status",0)->where("num",">",0)->select();
    			if(!empty($row)){
    				foreach($row as $value){
    					$goods[]=$value;
    				}
    			}	
    		}
   		}else{
   			$list=Db::table("cates")->where('pid',$info['pid'])->select();
   			$goods=Db::table("goods")->where("cate_id",$id)->where("status",0)->where("num",">",0)->select();
   			$par=Db::table("cates")->where('id',$info['pid'])->find();
   			
   			
   		}
    	// var_dump($list);
    	// var_dump($goods);
    	if(empty($list)){
    		$list='';
    	}
    	if(empty($goods)){
    		$goods='';
    	}
        return $this->fetch("Ilist/index",['info'=>$info,'list'=>$list,'goods'=>$goods,'par'=>$par]);
    }
    
}