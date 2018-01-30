<?php
namespace app\admin\controller;
use think\Db;
use think\Config;
use think\Controller;
class Address extends Allow
{
    //收货地址管理
	public function getIndex(){
		 $request=request();
         $k=$request->get('keyword');
         if(isset($k)){
             $address=Db::table("address")->where('u_id',$k)->paginate(5);  
         }else{
            $address=Db::table("address")->paginate(5);  
         }
         $arr=array(0=>'否',1=>'是');
    	 return $this->fetch("Address/index",['address'=>$address,'request'=>$request->param(),'arr'=>$arr]);
	}
   
    
}
