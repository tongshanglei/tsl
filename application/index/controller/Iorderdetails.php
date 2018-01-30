<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Session;
class Iorderdetails extends Controller
{
    //加载我的订单模版
    public function getIndex()
    {
        $request = request();
        $status = $request->param('status');
        $uid = Session::get('user_id');
        if($status==0){
            $infos=db('order_info')->alias('i')->join('order o','o.id=i.o_id')->where('o.u_id',$uid)->select();
        }else{
             $infos=db('order_info')->alias('i')->join('order o','o.id=i.o_id')->where('o.u_id',$uid)->where('o.status',$status)->select();
        }
       // echo '<pre>';
        // var_dump($infos);exit;
        foreach($infos as $k=>$v){
            $ginfo=db('goods')->where('name',$v['good_name'])->find();
            $infos[$k]['gid']=$ginfo['id'];
            $infos[$k]['pic']=$ginfo['pic'];
            $infos[$k]['price']=$ginfo['price'];
            $infos[$k]['descr']=$ginfo['descr'];
        }
        $arr = array('', '待支付', '待收货', '','已完成');
        
        // var_dump($arr);
        return $this->fetch('/Orderdetails/index', ['infos' => $infos,'arr' => $arr,'status'=>$status]);
    }
    public function getUpdate()
    {
        $request = request();
        $id = $request->param('o_id');
        $data['status'] = 4;
        // echo '<pre>';
        // var_dump($id);
        $info = Db::table('order')->where('id', $id)->update($data);
        if($info) {
            $this->success("收货成功", "/Iorderdetails/index/status/0");
        }
    }
    //收藏夹
    public function getCollect()
    {
        $data = db('goods')->alias('g')->field('g.*')->join('collect c', 'c.gid=g.id')->where('c.uid', Session::get('user_id'))->select();
        return view('/Orderdetails/collect', ['data' => $data]);
    }
    //ajax删除收藏
    public function postDelCollect()
    {
        $res = db('collect')->where('uid', Session::get('user_id'))->where('gid', request()->post('gid'))->delete();
        echo $res;
    }
    public function getReviews()
    {
        $request = request();
        $status = $request->param('status');
        $uid = Session::get('user_id');
        $infos=db('order_info')->alias('i')->join('order o','o.id=i.o_id')->where('o.u_id',$uid)->where('o.status','>=',2)->select();
        foreach($infos as $k=>$v){
            $ginfo=db('goods')->where('name',$v['good_name'])->find();
            $infos[$k]['gid']=$ginfo['id'];
            $infos[$k]['pic']=$ginfo['pic'];
            $infos[$k]['price']=$ginfo['price'];
            $infos[$k]['descr']=$ginfo['descr'];
        }
        $arr = array('', '待支付', '待收货', '已完成');
        // echo '<pre>';
        $reviews=db('reviews')->where('uid',Session::get('user_id'))->select();
//        $addreviews=db('addreviews')->select();
//        dump($reviews);exit;
        return $this->fetch('/Orderdetails/reviews', ['status' => $status, 'infos' => $infos, 'arr' => $arr,'reviews'=>$reviews]);
    }
    public function postInsertCollect(){
        $data=request()->post();
        $data['addtime']=time();
        $data['uid']=Session::get('user_id');
        $goodname=db('order_info')->field('good_name')->where('o_id',$data['oid'])->select();
        if(count($goodname)>1){
            foreach ($goodname as $v){
                $data['gid']=db('goods')->field('id')->where('name',$v['good_name'])->find()['id'];
                $res=db('reviews')->insert($data);
            }
        }else{
            $data['gid']=db('goods')->field('id')->where('name',$goodname[0]['good_name'])->find()['id'];
            $res=db('reviews')->insert($data);
        }
        db('order')->where('id',$data['oid'])->setInc('isReviews');
        if($res){
            $this->success('评价成功','/iorderdetails/reviews/status/0');
        }else{
            $this->error('评价失败');
        }
    }
    //执行评价修改
    public function postUpdateReviews(){
        $save['content']=request()->post('content');
        $result=db('reviews')->where('oid',request()->post('oid'))->update($save);
        if($result>=0){
            $this->success('修改成功','/iorderdetails/reviews/status/0');
        }else{
            $this->error('评价失败');
        }
    }
}