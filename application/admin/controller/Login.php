<?php
namespace app\admin\controller;
//导入Controller use TP5 内置方法
use think\Controller;
use think\Db;
//导入Config.php
use think\Config;
//导入Session
use think\Session;
class Login extends Controller
{
    public function getLogin(){
        //加载登录模板
        return $this->fetch("Login/login");
    }

    //执行登录
    public function postDologin(){
      //创建请求对象
      $request=request();
      //获取输入的验证码
      $fcode=$request->param('fcode');
      //检测验证码
      if(captcha_check($fcode)){
        //检测用户名和密码
        $row=Db::table("admin_users")->where("name='{$request->param("username")}' and pwd='{$request->param("password")}' and status=1")->select();
        // echo '<pre>';
        // var_dump($row);exit;
        
        if($row){
                $aid=$row[0]['id'];
                $aname=$row[0]['name'];
                //设置登录用户的session信息
                Session::set('islogins',2);
                Session::set('aid',$aid);
                Session::set('aname',$aname);
                //1.获取当前登录的用户具有的权限信息
                $list=Db::query("select n.name,n.mname,n.aname from user_role as ur,role_node as rn,node as n where ur.rid=rn.rid and rn.nid=n.id and uid={$row[0]['id']}");
                
                //2.初始化权限 （让所有的管理员具有后台首页访问权限）
                $nodelist['admin'][]='getindex';
                //3.权限处理
                //遍历
                foreach($list as $key=>$value){

                    //给数组$nodelist赋值
                    $nodelist[$value['mname']][]=$value['aname'];

                    //判断 如果权限信息具有add方法 添加insert
                    if($value['aname']=="getadd"){
                        $nodelist[$value['mname']][]='postinsert';
                        $nodelist[$value['mname']][]='postInsert';
                        $nodelist[$value['mname']][]='getdelete';
                    }
                    //判断 如果权限信息具有edit 方法 添加update
                    if($value['aname']=="getedit"){
                        $nodelist[$value['mname']][]='postupdate';
                    }
                }
                //4.把当前登录的用户具有的权限信息信息存储在session里
                Session::set('nodelist',$nodelist);
          $this->success("登录成功","/admin/index");
        }else{
          $this->error("用户名或者密码有误,请联系管理员","/login/login");
        }
        
        
      }else{
        // echo "000";
        $this->error("验证码输入有误","/login/login");
      }

    }

    //退出
    public function getLogout(){
        Session::delete('islogin');
        Session::delete('nodelist');

        $this->success("退出成功","/login/login");
    }
    
    
}
