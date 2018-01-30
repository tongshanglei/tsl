<?php
namespace app\index\controller;
session_start();
use think\Controller;
use think\Db;
use think\Session;

class Idetails extends Controller
{
    //加载商品详情
    public function getIndex()
    {
    	$request=request();
    	$id=$request->param('id');
    	$info=Db::table('goods')->where('id',$id)->find();
    	$opic=ltrim($info['opic'],'.');
    	$cid=$info['cate_id'];
    	$cinfo=Db::table('cates')->where('id',$cid)->find();
		// echo '<pre>';
    	// var_dump($info);
        //统计点赞总数
        $likeCount=db('like')->where('gid',request()->param('id'))->count();
        //查询登录用户是否点赞
        $isLike=db('like')->where('uid',Session::get('user_id'))->where('gid',request()->param('id'))->find()['id'];
        //统计收藏总数
        $collectCount=db('collect')->where('gid',request()->param('id'))->count();
        //查询登录用户是否收藏
        $isCollect=db('collect')->where('uid',Session::get('user_id'))->where('gid',request()->param('id'))->find()['id'];;
        //查询评价数据
        $reviews=db('reviews')->alias('r')->join('users_info u','u.uid=r.uid','left')->where('reviews.gid',$id)->select();
        return $this->fetch("Details/index",['info'=>$info,'cinfo'=>$cinfo,'opic'=>$opic,'likeCount'=>$likeCount,'isLike'=>$isLike,'collectCount'=>$collectCount,'isCollect'=>$isCollect,'reviews'=>$reviews]);
    }
}