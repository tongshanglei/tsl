<?php
namespace app\index\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
//导入Session
use think\Session;

class Iorder extends Controller
{
	protected $user;
    protected $zhuce;
    public function _initialize(){
        //检测用户的登录session是否存在
        if(Session::has('login') && Session::get('login')==true){
            $this->user='<a id="top-index-loginUrl" href="/ipersonal/index">'.Session::get('username').'</a>';
            $this->zhuce='<a href="/ilogin/Logout">&nbsp;&nbsp;退出</a>';
        }else{
            $this->error("您未登录,请先登录",'/ilogin/login');
            
        }
    }
    //加载订单
	public function getIndex(){
          // var_dump($_GET['cart_id']);exit;
          if(Session::has('cart_id')){
            if(isset($_GET['cart_id'])){
                Session::set('cart_id',$_GET['cart_id']);
                $cart_id=Session::get('cart_id');
            }else{
                $cart_id=Session::get('cart_id');
            }
            
          }else{
            Session::set('cart_id',$_GET['cart_id']);
            $cart_id=Session::get('cart_id');
          }
          // var_dump($cart_id);
          $uid=Session::get('user_id');
          $coupons=Db::table("coupons")->where("uid",$uid)->select();
          // var_dump($coupons);
          $data=Db::table("address")->where("u_id",$uid)->select();
          // echo $uid;exit;
          $total='';
          foreach($cart_id as $k=>$row){
            $shop[$k]=Db::table("car")->where("id",$row)->find();
            $total+=$shop[$k]['num']*$shop[$k]['price'];
          }
          // echo $total;
          // var_dump($shop);exit;
          return $this->fetch("/Order/index",['user'=>$this->user,'zhuce'=>$this->zhuce,'data'=>$data,'shop'=>$shop,'total'=>$total,'coupons'=>$coupons,'shop_id'=>$cart_id]);
     }   
	 //获取城市级联数据
    public function getCsjl(){
        $request=request();
        $upid=$request->param('upid');
        $data=Db::table("district")->where("upid","{$upid}")->select();
        echo json_encode($data);
    }

    //地址添加
    public function postAddaddress(){
        // echo "<pre>";
        // var_dump($_POST);exit;
        $data['u_name']=$_POST['name'];
        $data['phone']=$_POST['phone'];
        $data['u_id']=Session::get("user_id");
        $data['address']=$_POST['address'].$_POST['adds'];
        // var_dump($data);exit;
        if(Db::table("address")->insert($data)){
            // echo 111;
            $this->redirect("/iorder/index");
        }else{
            $this->error("地址填写失败，请重试！","/iorder/index");
        }
       } 	
       //提交订单
    public function postOnorder(){
            // var_dump($_POST);exit;
            //获取代金券id
            $coupons_id=$_POST['coupons_id'];
            // var_dump($_POST['shop_id']);
            $add=Db::table("address")->where("id",$_POST['address'])->find();
            $list['name']=$add['u_name'];
            $list['address']=$add['address'];
            $list['phone']=$add['phone'];
            $data['u_id']=Session::get("user_id");
            $data['order_time']=time();
            if(Db::table("order")->insert($data)){
                //删除代金券
                Db::table("coupons")->where("id",$coupons_id)->delete();
                $list['o_id']=Db::table("order")->where("order_time",$data['order_time'])->value('id');
                foreach($_POST['shop_id'] as $r){
                    $shop=Db::table("car")->where("id",$r)->find();
                    $list['good_name']=$shop['shops_name'];
                    $list['num']=$shop['num'];
                    $total=$shop['num']*$shop['price'];
                    $list['total']=$total;
                    if(Db::table("order_info")->insert($list)){
                        Db::table("car")->where('id',$r)->delete();
                    }
                }
                $oid=$list['o_id'];
                // echo $oid;exit;
                Session::delete('cart_id');
                $this->success("订单提交成功，请及时付款","/iorder/zfb/id/{$oid}");
                
            }else{
                $this->error("订单提交失败，请重试","/iorder/index");
            }
            
    }
    //支付状态
    public function getZfb(){
        $request=request();
        $id=$request->only('id');
        // var_dump($id);
        $s=Db::table("order")->where('id',$id['id'])->find();
        return $this->fetch("/Order/pay",['data'=>$s]);
    }
    //执行付款
    public function postDopay(){
        $request=request();
        $id=$request->post('id');
        $s=Db::table("order")->where('id',$id)->update(['status'=>2]);
        if($s){
            $this->success("付款成功，恭喜您获得一次抽奖机会","/iorder/cj");
        }else{
            $this->error("付款失败，请重试","/iorder/zfb/id/{$id}");
        }
    }
    //加载抽奖
    public function getCj(){
        return $this->fetch("/Order/cj");
    }
}