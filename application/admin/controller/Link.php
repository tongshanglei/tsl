<?php
namespace app\admin\controller;
use think\Controller;
class Link extends Controller
{
    //查看友情链接
    public function getIndex()
    {
        $data=db('link')->select();
        $status=array('审核中','已通过');
        return view('link/index',['data'=>$data,'status'=>$status]);
    }
    //查看添加页面
    public function getAdd()
    {
        return view('link/add');
    }
    //执行添加
    public function postInsert()
    {
        $validate=validate('Link');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $result=db('link')->insert(request()->post());
        if($result){
            $this->success('添加成功','/link/index');
        }else{
            $this->error('添加失败');
        }
    }
    //查看修改页面
    public function getEdit($id)
    {
        $info=db('link')->where('id',$id)->find();
        return view('/Link/edit',['info'=>$info]);
    }
    //执行修改
    public function postUpdate()
    {
        $validate=validate('Link');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $result=db('link')->update(request()->post());
        if($result){
            $this->success('修改成功','/link/index');
        }else{
            $this->error('修改失败');
        }
    }
    //查看删除页面
    public function getDel($id)
    {
        $result=db('link')->delete($id);
        if($result){
            $this->success('删除成功','/link/index');
        }else{
            $this->error('删除失败');
        }
    }
}
