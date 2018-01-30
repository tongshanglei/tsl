<?php
namespace app\admin\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
class Cate extends Allow
{
    //分类列表
    public function getCates(){
        $cate=Db::query('select *,concat(path,",",id) as paths from cates order by paths');

        //遍历
        foreach($cate as $key=>$value){
            // echo $value['path']."<br>";
            $path=$value['path'];
            //转换为数组
            $arr=explode(",",$path);
            //计算逗号个数
            $len=count($arr)-1;
            //str_repeat 重复字符串
            $cate[$key]['name']=str_repeat("----|",$len).$value['name'];
        }
        return $cate;
    }
    //加载添加模板
    public function getAdd(){
        //获取所有分类信息
        $cate=$this->getCates();
    	return $this->fetch("Cate/add",['cate'=>$cate]);
    }

    //执行添加
    public function postInsert(){
        $validate=validate('Cate');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $request=request();
        //获取参数
        $data=$request->except(['action']);
    	//获取pid
        $pid=$request->param('pid');
        if($pid==0){
            $n=Db::table('cates')->where('pid',0)->count();
            // echo '<pre>';
            // var_dump($n);exit;
            if($n>=6){
                // echo '1';
                $this->error("后台顶级类超过上限","/cate/add");
            }else{
                // echo '2';
                //添加顶级分类
                $data['path']="0";
            }
        }else{
            //添加不是顶级分类
            //获取父类信息
            $info=Db::table("cates")->where('id',$pid)->find();
            //拼接path
            $data['path']=$info['path'].",".$info['id'];
        }

        //执行数据库的插入
        if(Db::table("cates")->insert($data)){
            // echo "1";
            $this->success("添加成功","/cate/index");
        }else{
            // echo "error";
            $this->error("添加失败");
        }
    }

    //列表
    public function getIndex(){
        //获取列表数据
        $cate=Db::query('select *,concat(path,",",id) as paths from cates order by paths');

        //遍历
        foreach($cate as $key=>$value){
            $path=$value['path'];
            //转换为数组
            $arr=explode(",",$path);
            //计算逗号个数
            $len=count($arr)-1;
            //str_repeat 重复字符串
            $cate[$key]['name']=str_repeat("----|",$len).$value['name'];
        }
        return $this->fetch("Cate/index",['cate'=>$cate]);
    }

    //执行删除
    public function getDel($id){
        // echo $id;
        //统计当前类别下的子类信息
        $cates=Db::table("cates")->where('pid',$id)->count();
        // echo $cates;
        if($cates>0){
            //当前类别下有子类信息
            $this->error("请先删除子类","/cate/index");
        }

        //子类信息删除
        if(Db::table("cates")->where("id",$id)->delete()){
            $this->success("删除成功","/cate/index");
        }else{
            $this->error("删除失败");
        }
    }

    //修改
    public function getEdit($id){
        //获取需要修改的数据
        $info=Db::table("cates")->where("id",$id)->find();
        //获取类别数据
        $cate=Db::table("cates")->select();
        //加载模板
        return $this->fetch("Cate/edit",['info'=>$info,'cate'=>$cate]);
    }

    //执行修改
    public function postUpdate(){
        $validate=validate('Cate');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $request=request();
        //获取id
        $id=$request->param('id');
        //参数
        $data['name']=$request->param('name');
        //执行修改
        if(Db::table("cates")->where("id",$id)->update($data)){
            $this->success("修改成功","/cate/index");

        }else{
            $this->error("修改失败");

        }
    }
    
}
