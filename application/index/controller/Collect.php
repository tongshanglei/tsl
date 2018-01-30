<?php
namespace app\index\controller;

use think\Session;

class Collect
{
    public function getCollect(){
        //如果未登录，返回-1
        if(!Session::has('login')){
            echo '-1';
            exit;
        }
        $result=db('collect')->where('uid',Session::get('user_id'))->where('gid',request()->get('gid'))->find();
        if($result){
            db('collect')->where('uid',Session::get('user_id'))->delete();
        }else{
            $data['gid']=request()->get('gid');
            $data['uid']=Session::get('user_id');
            db('collect')->insert($data);
        }
        echo db('collect')->where('gid',request()->get('gid'))->count();
    }
}
