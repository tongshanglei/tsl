<?php
namespace app\index\controller;

class Notice
{   
    //查看公告
    public function getCentent($id)
    {
        $info=db('notice')->find($id);
        return view('notice/notice',['info'=>$info]);
    }
    //查看公告列表
    public function getList()
    {
        $info=db('notice')->order('addtime desc')->paginate(10);
        return view('notice/list',['info'=>$info]);
    }
}
