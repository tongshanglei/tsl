<?php
namespace app\admin\controller;
use think\Db;
use think\Config;
use think\Controller;
class Order extends Allow
{
    //查看订单页
	public function getIndex(){
        $arr=array('1'=>'点击发货','2'=>'待签收','3'=>'订单完成，买家已签收');
		 $request=request();
         $k=$request->get('keyword');
         if(isset($k)){
             $order=Db::table("order")->where('u_id',$k)->paginate(5);  
         }else{
            $order=Db::table("order")->paginate(5);  
         }
         
    	 return $this->fetch("Order/index",['order'=>$order,'request'=>$request->param(),'arr'=>$arr]);
	}
    //查看订单详情
    public function getInfo($id)
    {	
    	 $arr=array('0'=>'未发货','1'=>'已发货');
         $order=Db::table("order_info")->where('o_id',$id)->paginate(5);
    	 return $this->fetch("Order/info",['order'=>$order,'arr'=>$arr]);
       
    }
    //执行发货
    public function getGo($id){
        $order=Db::table("order")->where("id",$id)->update(['status'=>3]);
        if($order){
            $this->success("发货成功，待买家收货","/order/index");
        }else{
            $this->error("发货失败，请联系管理员","/order/wait");
        }
    }
    //查看未发货订单
    public function getWait(){
    	 $arr=array('1'=>'未付款','2'=>'未发货','3'=>'订单完成，买家已签收');
    	$order=Db::table("order")->where("status",2)->paginate(5);
    	return $this->fetch("Order/wait",['order'=>$order,'arr'=>$arr]);
    }
    
}
