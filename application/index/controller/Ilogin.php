<?php
namespace app\index\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
//导入Session
use think\Session;

class Ilogin extends Controller
{
    public function getLogin(){
        //加载登录模板
        $request=request();
        // var_dump($request->param('c'));
        if($request->param('c')=='lose'){
        }else{
               Session::set('url',($_SERVER["HTTP_REFERER"]));
        }
        return $this->fetch("Login/login");
    }

    //执行登录
    public function postDologin(){
        /**
         * 输出二次验证结果,本文件示例只是简单的输出 Yes or No
         */
       
        define("CAPTCHA_ID", "96cf552bcdba0d32052f29d1c92bd652");
        define("PRIVATE_KEY", "388dc658759952c8f650069ae05c081a");
        $GtSdk = new \Org\Util\Geetestlib(CAPTCHA_ID, PRIVATE_KEY);
       
        $user_id=Session::get('user_id');
        $data = array(
                "user_id" => $user_id, # 网站用户id
                "client_type" => "web", #web:电脑上的浏览器；h5:手机上的浏览器，包括移动应用内完全内置的web_view；native：通过原生SDK植入APP应用的方式
                "ip_address" => "127.0.0.1" # 请在此处传输用户请求验证时所携带的IP
            );
        $result = $GtSdk->success_validate($_POST['geetest_challenge'], $_POST['geetest_validate'], $_POST['geetest_seccode'], $data);
        if ($result) {
            //创建请求对象
            $request=request();
            //获取输入的验证码
            $info=$request->only(['username','pwd']);
            // var_dump($info);
            $row=Db::table("users")->where("username='{$info["username"]}' and pwd='{$info["pwd"]}' and status=1")->find();
           
            if($row){
                Session::set('login',true);
                Session::set('username',$row['username']);
                Session::set('user_id',$row['id']);
                $url=Session::get('url');
                //var_dump($url);
                $this->success("登录成功",$url);
            }else{
                $this->error("用户名或密码有误,请重新登录","/ilogin/login/c/lose");
            }
        }else{
            $this->error("验证失败,请重新登录","/ilogin/login/c/lose");
        }

        
     
    

    }

    //退出
    public function getLogout(){
        Session::delete('url');
        Session::delete('login');
        Session::delete('user_id');
        Session::delete('username');
        $this->success("退出成功","/index/index");
    }
    
    //找回密码
    public function getForget(){
        // echo 1;
        return $this->fetch("Login/forget");
    }
    // 执行召回密码
    public function postDoforget(){
        // echo 1;
        $request=request();
        // $data=$request->param();
        // echo '<pre>';
        // var_dump($data);
        $username=$request->post('username');
        // var_dump($username);
        $fcode=$request->post('fcode');
        $data=$request->only(['pwd']);
        if(captcha_check($fcode)){
            // echo 1;
            $info=Db::table("users")->where('username',$username)->find();
            if($info){
                $pcode=$request->post('pcode');
                if(preg_match('/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/', $username)==1){
                    
                    // echo '1';
                    //调用邮箱接口
                    if(Session::has('con')){
                        $con=Session::get('con');
                        if($con==$pcode){
                            // echo '1';
                            if(Db::table("users")->where('username',$username)->update($data)){
                                // echo '1';
                                 $this->success("修改成功","/ilogin/login/c/lose");
                                //成功之后可更新一个随机的token值
                            }else{
                                $this->error("修改失败","/ilogin/forget");
                                // echo '2';
                            }
                        }else{
                             $this->error("邮箱验证码错误","/ilogin/forget");
                            // echo '2';
                        }
                    }
                }else{
                    // echo '2';
                    // 调用手机接口
                    if(Session::has('param')){
                        $param=Session::get('param');
                        if($param==$pcode){
                            // echo '1';
                            if(Db::table("users")->where('username',$username)->update($data)){
                                // echo '1';
                                 $this->success("修改成功","/ilogin/login/c/lose");
                                //成功之后可更新一个随机的token值
                            }else{
                                $this->error("修改失败","/ilogin/forget");
                                // echo '2';
                            }
                        }else{
                             $this->error("手机验证码错误","/ilogin/forget");
                            // echo '2';
                        }
                    }
                }
                // echo '1';
            //     if(strpos($username,'@')){
            // 　　    echo '1';
            // 　　}else{
            // 　    　echo '2';
            // 　　}
            }else{
                // echo '2';
                $this->error("账户输入错误","/ilogin/forget");
            }
        }else{
            $this->error("图形验证码错误","/ilogin/forget");
        }
    }
    //通过密保找回，填账号页面
    public function getNumber(){
        return $this->fetch("/Login/number");
    }
    //通过密保问题找回密码
    public function postQuestion(){
        $request=request();
        $number=$request->param('number');
        // echo $number;exit;
        // echo $id;exit;
        $id=Db::table("users")->where('username',$number)->value('id');
        if($id){
            $s=Db::table("question")->where('u_id',$id)->find();
            if($s){
                return $this->fetch("/Login/question",["data"=>$s]);
            }else{
                $this->error("对不起，您没有设置密保问题，请使用账号找回","/ilogin/forget");
            }
            
        }else{
            $this->error("对不起，您输入的账号有误，请重试","/ilogin/forget");
        }
        
    }
    public function postDoquestion(){
        $request=request();
        $answer=$request->post('answer');
        $u_id=$request->post('u_id');
        // echo $question;
        $an=Db::table("question")->where('u_id',$u_id)->value('answer');
        if($an==$answer){
            $pwd=$request->post('pwd');
            $p=Db::table("users")->where('id',$u_id)->update(['pwd'=>$pwd]);
            if($p){
                $this->success("密码修改成功","/ilogin/login");
            }else{
                $this->error("修改失败，请重试","/ilogin/number");
            }
        }else{
            $this->error("您输入的密保问题答案不正确，请重新尝试","/ilogin/number");
        }
    }
    //调用接口
     public function getVal(){

        $request=request();
        $val=$request->get('val');

        if(preg_match('/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/', $val)==1){
            // echo '1';
            // echo $email;
            //发送邮件
            $con=rand(1000,9999);
            $m=sendMail($val,"验证注册",$con);
            // var_dump($m);
            if($m){
                echo $con;
                $con=Session::set('con',$con);
            }else{
                $this->error('邮件发送失败','/ilogin/forget');
            }
        }else{
            // echo '2';
             $param=sendphones($val);
            // 将手机验证码信息存入session
            Session::set('param',$param);
        }
        
        
     }
   
}
