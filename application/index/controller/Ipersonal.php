<?php
namespace app\index\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
//导入Session
use think\Session;

class Ipersonal extends Controller
{
    //查看个人中心
    public function getIndex(){
    	if(Session::has('login')){
	    	$username=Session::get('username');
	    	$id=Session::get('user_id');
	    	$s=Db::table('users_info')->where('uid',$id)->value('pic');
	    	// var_dump($s);exit;
	    	if($s){
	    		return $this->fetch("/Personal/index",['username'=>$username,'s'=>$s]);
	    	}else{
	    		$s='';
	    		return $this->fetch("/Personal/index",['username'=>$username,'s'=>$s]);
	    	}
    	}else{
    		$this->error("请登录","/ilogin/login");
    	}
        
    }
    //查看个人信息
    public function getInfo(){
    	$username=Session::get('username');
    	$id=Db::table("users")->where('username',$username)->value('id');
    	// echo $id;exit;
    	$info=Db::table("users_info")->where('uid',$id)->find();
    	if($info){
    		return $this->fetch("/Personal/hinfo",['info'=>$info]);
    	}else{
    		return $this->fetch("/Personal/info",['id'=>$id]);
    	}
    	
    }
    //添加个人信息
    public function postAddinfo(){
    	$request=request();
    	$data=$request->except('action');
    	
    	// var_dump($data);exit;
    	$file=$request->file('pic');
    	$result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic.fileSize'=>'大小超出']);
                if(true!==$result){
                    $this->error($result,"/ipersonal/info");
                }
                // 成功上传后 获取上传信息
                // 输出 jpg
                //echo $info->getExtension();
                //输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'userinfo'); 
                $savename=$info->getSaveName();
                //处理$savename
                $s=preg_replace("/\\\/","/",$savename);
                $img=\think\Image::open("./userinfo/".$savename);
                // /获取上传文件后缀
                $ext=$info->getExtension();
                $imgname=time()+rand(1,10000);
                //缩放
                $img->thumb(100,100)->save("./userinfo/publicimg/".$imgname.".".$ext);
                //封装需要插入的数据
                
                $data['pic']=$imgname.".".$ext;
                $data['opic']="./userinfo/".$s;
                // echo '<pre>';
                // var_dump($data);
                $row=Db::table("users_info")->insert($data);
                if($row){
                    $this->success("保存成功","/ipersonal/index");
                }else{
                    $this->error("保存失败","/ipersonal/info");
                }

    }
   	//修改个人信息
   	public function postEditinfo(){
   		$request=request();
    	$data=$request->except(['action','uid']);
    	// var_dump($data);exit;
    	$id=$request->param('uid');
    	// echo $id;exit;
    	$file=$request->file('pic');
    	$infos=Db::table("users_info")->where("uid",$id)->find();
    	if($file){
    		// echo 1;exit;
    		$result=$this->validate(['pic'=>$file],['pic'=>'require|image|fileSize:3141592666'],['pic.require'=>'上传文件不能为空','pic.image'=>'非法图像文件','pic.fileSize'=>'大小超出']);
                if(true!==$result){
                    $this->error($result,"/ipersonal/info");
                }
                // 成功上传后 获取上传信息
                // 输出 jpg
                //echo $info->getExtension();
                //输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'userinfo'); 
                $savename=$info->getSaveName();
                //处理$savename
                $s=preg_replace("/\\\/","/",$savename);
                $img=\think\Image::open("./userinfo/".$savename);
                // /获取上传文件后缀
                $ext=$info->getExtension();
                $imgname=time()+rand(1,10000);
                //缩放
                $img->thumb(100,100)->save("./userinfo/publicimg/".$imgname.".".$ext);
                //封装需要插入的数据
                
                $data['pic']=$imgname.".".$ext;
                $data['opic']="./userinfo/".$s;
                // echo '<pre>';
                // var_dump($data);
                $row=Db::table("users_info")->where('uid',$id)->update($data);
                if($row){
                	 //删除添加时缩放以后的图
                     unlink("./userinfo/publicimg/".$infos['pic']);
                    // echo $info['pic'];exit;
                      //删除原图
                     unlink($infos['opic']);
                    $this->success("修改成功","/ipersonal/index");
                }else{
                    $this->error("修改失败","/ipersonal/info");
                }
    	}else{
    		// echo 2;exit;
    		$row=Db::table("users_info")->where('uid',$id)->update($data);
    		if($row){
    			$this->success("修改成功","/ipersonal/index");
    		}else{
    			 $this->error("修改失败","/ipersonal/info");
    		}
    	}
   	}
    //查看密码修改
   	public function getSafe(){
   		$request=request();
   		$id=$request->param('id');
   		// var_dump($id);exit;
   		return $this->fetch("Personal/safe",['id'=>$id]);
   	}
    //执行密码修改
   	public function postEditpwd(){
   		$request=request();
   		$pwd=$request->param('lpwd');
   		$xpwd=$request->param('xpwd');
   		// $id=$request->param('uid');
   		$id=Session::get('user_id');
   		$s=Db::table('users')->where('id',$id)->value('pwd');
   		if($s==$pwd){
   			//旧密码一致
   			$ss=Db::table('users')->where('id',$id)->update(['pwd'=>$xpwd]);
   			if($ss){
   				$this->success("修改密码成功","/ipersonal/info/id/$id");
   			}else{
				$this->error("修改密码失败","/ipersonal/safe/id/$id");
   			}
   		}else{
   			$this->error("旧密码输入有误，请重试！","/ipersonal/safe/id/$id");
   		}
   	}

    //密保问题页面
    public function getQuestion(){
      $u_id=Session::get("user_id");
      $s=Db::table("question")->where('u_id',$u_id)->find();
      if($s){
        return $this->fetch("/Personal/havequestion",['id'=>$u_id,'data'=>$s]);
      }else{
        return $this->fetch("/Personal/noquestion",['id'=>$u_id]);
      }
      
    }
    //提交密保问题
    public function postAddquestion(){
      $request=request();
      $data['question']=$request->post('lpwd');
      $data['answer']=$request->post('xpwd');
      $data['u_id']=$request->post('uid');
      $s=Db::table('question')->insert($data);
      if($s){
        $this->success("密保问题设置成功","/ipersonal/question");
      }else{
        $this->error("密保问题设置失败","/ipersonal/question");
      }
    }
    //修改密保问题
    public function postEditquestion(){
      $request=request();
      $question=$request->post('lpwd');
      $answer=$request->post('xpwd');
      $u_id=$request->post('uid');
      if(Db::table('question')->where('u_id',$u_id)->update(['question'=>$question,'answer'=>$answer])){
        $this->success("密保问题修改成功","/ipersonal/question");
      }else{
        $this->error("密保问题修改失败","/ipersonal/question");
      }
    }
    //查看收货地址
    public function getAddress(){
      $id=Session::get('user_id');
      $address=Db::table('address')->where('u_id',$id)->select();
      return $this->fetch("/Personal/address",['data'=>$address]);
    }
    //删除收货地址
    public function getDelete(){
      $request=request();
      $id=$request->param('id');
      // echo $id;
      $s=Db::table('address')->where('id',$id)->delete();
      if($s){
        $this->success("删除地址成功","/ipersonal/address");
      }else{
        $this->error("删除地址失败","/ipersonal/address");
      }
    }
}
