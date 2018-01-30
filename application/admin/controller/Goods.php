<?php
namespace app\admin\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
class Goods extends Allow
{
    //加载显示模板
    public function getIndex(){
        $request=request();
        $info=Db::table("goods")->paginate(7);
       $state = array('上架','<font color="green">下架</font>','<font color="red">售罄</font>');
    	return $this->fetch("Goods/index",['info'=>$info,'request'=>$request->param(),'state'=>$state]);
    } 

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

    //商品添加
    public function getAdd(){
        $cate=$this->getCates();
        
        return $this->fetch("Goods/add",['cate'=>$cate]);
    } 

    //执行添加
    public function postInsert(){
        $validate=validate('Goods');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $request=request();
        $data=$request->except(['action']);
        // var_dump($data);exit;
        $file =$request->file('pic');
            if($data['cate_id']!=0){
                $result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic.fileSize'=>'大小超出']);
                if(true!==$result){
                    $this->error($result,"/goods/add");
                }
                // 成功上传后 获取上传信息
                //输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'goods'); 
                $savename=$info->getSaveName();
                //处理$savename
                $s=preg_replace("/\\\/","/",$savename);
                $img=\think\Image::open("./goods/".$savename);
                // /获取上传文件后缀
                $ext=$info->getExtension();
                $imgname=time()+rand(1,10000);
                //缩放
                $img->thumb(100,100)->save("./goods/publicimg/".$imgname.".".$ext);
                //封装需要插入的数据
                
                $data['pic']=$imgname.".".$ext;
                $data['opic']="./goods/".$s;
                // echo '<pre>';
                // var_dump($data);
                $row=Db::table("goods")->insert($data);
                if($row){
                    $this->success("添加成功","/goods/index");
                }else{
                    $this->error("添加失败","/goods/add");
                }

            }else{
                $this->error("请选择商品类别","/goods/add");
            }       
    }

    //执行删除
    public function getDel($id){
        //获取需要删除的数据
        $info=Db::table("goods")->where("id",$id)->find();
        if(Db::table("goods")->where("id",$id)->delete()){
            //删除缩放以后的图
            unlink("./goods/publicimg/".$info['pic']);
            //删除原图
            unlink($info['opic']);
            $this->success("删除成功","/goods/index");
        }else{
            $this->error("删除失败","/goods/index");
        }
    }
    //商品修改
    public function getEdit($id){
        $cate=$this->getCates();
        //获取goods数据
        $info=Db::table('goods')->where('id',$id)->find();
        return $this->fetch('Goods/edit',['info'=>$info,'cate'=>$cate]);
    }
   //执行修改
   public function postUpdate($id){
    //验证
    $validate=validate('Goods');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
    $request=request();
    $data=$request->except(['action','id']);
    $ids=$request->only(['id']);
    // echo '<pre>';
    // var_dump($data);
    $id=$ids['id'];
    $file =$request->file('pic');
    // echo $id;
    //获取需要修改的数据
      $infos=Db::table("goods")->where("id",$id)->find();
      if($file){
            if($data['cate_id']!=0){
                // echo 2;
                $result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic.fileSize'=>'大小超出']);
                if(true!==$result){
                    $this->error($result,"/goods/edit/id/{$id}");
                }
                // 成功上传后 获取上传信息
                //输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'goods'); 
                $savename=$info->getSaveName();
                //处理$savename
                $s=preg_replace("/\\\/","/",$savename);
                $img=\think\Image::open("./goods/".$savename);
                // /获取上传文件后缀
                $ext=$info->getExtension();
                $imgname=time()+rand(1,10000);
                //缩放
                $img->thumb(100,100)->save("./goods/publicimg/".$imgname.".".$ext);
                //封装需要插入的数据
                
                $data['pic']=$imgname.".".$ext;
                $data['opic']="./goods/".$s;
                // echo '<pre>';
                // var_dump($data);
                $row=Db::table("goods")->where('id',$id)->update($data);
                if($row){
                    //删除添加时缩放以后的图
                     unlink("./goods/publicimg/".$infos['pic']);
                    // echo $info['pic'];exit;
                      //删除原图
                     unlink($infos['opic']);
                    $this->success("修改成功","/goods/index");
                }else{
                    $this->error("修改失败","/goods/edit/id/{$id}");
                }

            }else{
                $this->error("请选择商品类别","/goods/edit/id/{$id}");
            }       
        }else{
            if($data['cate_id']!=0){
                $row=Db::table("goods")->where('id',$id)->update($data);
                if($row){
                    $this->success("修改成功","/goods/index");
                }else{
                    $this->error("修改失败","/goods/edit/id/$id");
                }
            }else{
                $this->error("请选择商品类别","/goods/edit/id/{$id}");
            }
        }
   }
}
