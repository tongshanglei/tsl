<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Register extends Controller
{
    //查看手机注册
    public function getIndex()
    {
    	$request=request();
        if($request->param('c')=='lose'){    
        }else{
            Session::set('url',($_SERVER["HTTP_REFERER"]));
        }
        return $this->fetch("Register/index");
    }
    //查看手机号是否被注册
    public function postYz(){
    	$m=isset($_POST['m'])?$_POST['m']:'';
		$arr=Db::table("users")->column('username'); 
		// //做对比
		// $arr=array('1234@qq.com','456789@qq.com');

		//对比
		if(in_array($m,$arr)){
			echo 1;
		}else{
			echo 0;
		}
    }
    //调用手机接口
    public function getPhone(){
    	$request=request();
        $p=$request->get('phone');
        $param=sendphones($p);
        // 将手机验证码信息存入session
        Session::set('param',$param);
       // echo $param;
    }
    //执行注册
    public function postDoregister(){
    	$request=request();
    	$fcode=$request->param('fcode');
    	$data['username']=$request->param('phone');
    	$data['pwd']=$request->param('password');
    	$data['status']=1;
    	$data['token']=rand(1,10000);
    	if(captcha_check($fcode)){
    		$pcode=$request->post('pcode');
    		 if(Session::has('param')){
       	  	 	$param=Session::get('param');
       	  	}
       	  	if($pcode==$param){
	    	  	if(Db::table("users")->insert($data)){
	    					$this->success('注册成功','/ilogin/login/c/lose');
	    				}else{
	                        Session::delete('param');
	    					$this->error('注册失败','/register/index/c/lose');
	    				}
		    	  }else{
		            Session::delete('param');
		    	  	$this->error('手机验证码不正确','/register/index/c/lose');
	    	  }
    		
    	}else{
    		$this->error("验证码输入有误","/register/index/c/lose");
    	}
    }
     // 邮箱注册
    public function getEregister()
    {
        $request=request();
        if($request->param('c')=='lose'){    
        }else{
               Session::set('url',($_SERVER["HTTP_REFERER"]));
        }    
        return $this->fetch("Register/eregister");
    }

    // 执行邮件注册
     public function postDoeregister(){
        // 验证
     	$validate=validate('Register');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
     	$request=request();
    	$data=$request->only(['username','pwd']);
    	// echo '<pre>';
    	// var_dump($data);
    	//状态值默认为0,注册完成为1
    	$data['status']=1;
    	$data['token']=rand(1,10000);
    	// echo '<pre>';
    	// var_dump($data);
    	$fcode=$request->post('fcode');
	      //检测验证码
	    if(captcha_check($fcode)){
	    	//判断是否存在邮箱验证码的session
    		if(Session::has('con')){
    			$ecode=$request->post('ecode');
    			$con=Session::get('con');
    			if($con==$ecode){
    				// echo '1';
    				if(Db::table("users")->insert($data)){
    					$this->success('注册成功','/ilogin/login/c/lose');
    				}else{
                        Session::delete('con');
    					$this->error('注册失败','/register/eregister/c/lose');
    				}
    			}else{
    				// echo '2';
                    Session::delete('con');         
    				$this->error('邮箱验证码不正确','/register/eregister/c/lose');
    			}
    		}
    		// echo $con;
	    }else{
	    	$this->error('图像验证码不正确','/register/eregister/c/lose');
	    }
     }

     //调用发送邮箱
     public function getSendmail(){

     	$request=request();
     	$email=$request->get('email');
     	// echo $email;
     	//发送邮件
     	$con=rand(1000,9999);
     	$m=sendMail($email,"验证注册",$con);
     	// var_dump($m);
     	if($m){
     		echo $con;
     		$con=Session::set('con',$con);
     	}else{
     		$this->error('邮件发送失败','/register/eregister');
     	}
     	
     }
}