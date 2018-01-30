<?php
namespace app\index\controller;

use think\Session;

class Like
{
    //查看点赞
    public function getLike(){
        //如果未登录，返回-1
        if(!Session::has('login')){
            echo '-1';
            exit;
        }
        $result=db('like')->where('uid',Session::get('user_id'))->where('gid',request()->get('gid'))->find();
        if($result){
            db('like')->where('uid',Session::get('user_id'))->delete();
        }else{
            $data['gid']=request()->get('gid');
            $data['uid']=Session::get('user_id');
            db('like')->insert($data);
        }
        echo db('like')->where('gid',request()->get('gid'))->count();
    }
}
