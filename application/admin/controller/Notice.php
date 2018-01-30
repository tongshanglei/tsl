<?php
namespace app\admin\controller;

use think\Controller;
class Notice extends Allow
{
    //公告列表
    public function getIndex()
    {
        $data=db('notice')->select();
        return view('notice/index',['data'=>$data]);
    }
    //添加公告页面
    public function getAdd()
    {

        return view('notice/add');
    }
    //执行添加
    public function postinsert()
    {
        $validate=validate('Notice');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $post=request()->post();
        $post['addtime']=time();
        $result=db('notice')->insert($post);
        if($result){
            $this->success('添加成功','/notice/index');
        }else{
            $this->error('添加失败');
        }
    }
    //修改页面
    public function getEdit($id)
    {
        $info=db('notice')->find($id);
        return view('notice/edit',['info'=>$info]);
    }
      //执行修改
    public function postUpdate()
    {
        $validate=validate('Notice');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $data=db('notice')->find(request()->post('id'));
        //新老内容作比较，如果相同，则不删除
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$data['centent'],$old);
        preg_match_all('/<img.*?src="(.*?)".*?>/is',request()->post('centent'),$new);
        //得出两个数组的交集，判断是否需要删除
        $intersect=array_intersect($old[1],$new[1]);
        //得出补集，判断是否需要删除
        $diff=array_diff($old[1],$new[1]);
        if($old[1]!=$intersect && !array_intersect($old[1],$diff)){
            foreach($old[1] as $v){
                if(is_file('.'.$v)){
                    unlink('.'.$v);
                    continue;
                }
            }
        }elseif($old[1]!=$intersect && array_intersect($old[1],$diff)) {
            foreach ($diff as $v) {
                if(is_file('.' . $v)) {
                    unlink('.' . $v);
                    continue;
                }
            }
        }
        $save=request()->post();
        $result=db('notice')->update($save);
        if($result>=0){
            $this->success('修改成功','/notice/index');
        }else{
            $this->error($result);
        }
    }
    //删除页面
    public function getDelete($id)
    {
        $data=db('notice')->find($id);
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$data['centent'],$array);
        foreach($array[1] as $v){
            if(is_file('.'.$v)){
                unlink('.'.$v);
                continue;
            }
        }
        $result=db('notice')->delete($id);
        if($result){
            $this->success('删除成功','/notice/index');
        }else{
            $this->error('删除失败');
        }
    }
    //执行删除
    public function postAjaxDel(){
        $id=$_POST['id'];
        foreach($id as $v){
            $data=db('notice')->find($v);
            preg_match_all('/<img.*?src="(.*?)".*?>/is',$data['centent'],$array);
            if(isset($array[1]) && !empty($array[1])){
                foreach($array[1] as $v){
                    if(is_file('.'.$v)){
                        unlink('.'.$v);
                        continue;
                        }
                    }
            }

        }
        db('notice')->delete($id);
        echo '删除成功';
    }
    public function getajaxdel(){
        echo 'tony';
    }
}
