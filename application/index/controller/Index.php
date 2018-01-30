<?php
namespace app\index\controller;

class Index
{
	//查看首页
    public function getIndex()
    {
        $data=db('cates')->select();
        $notice=db('notice')->limit(5)->order('addtime desc')->select();
        $lunbo=db('lunbo')->where('status',1)->select();
        // echo '<pre>';
        // var_dump($lunbo);
        foreach($lunbo as $k=>$v){
        	$pic[]=$v['pic'];
        	$url[]=$v['url'];
        }
        // echo '<pre>';
        // var_dump($pic);
        return view('index/index',['data'=>$data,'num'=>0,'notice'=>$notice,'pic'=>$pic,'url'=>$url]);
    }
}
