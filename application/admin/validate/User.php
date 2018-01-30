<?php
//验证器类
namespace app\admin\validate;
//导入验证类
use think\Validate;
class User extends Validate{
	//规则
	protected $rule = [
        'username'  =>  'require|regex:\w{4,8}|unique:users',
        'pwd'  =>  'require|regex:\w{4,8}',
        'repassword'  =>  'require|confirm:pwd',
    ];

    //提示信息
    protected $message = [
        'username.require'  =>  '用户名必须',       
        'username.regex'  =>  '用户名必须是4-8位任意的数字字母下划线',       
        'username.unique'  =>  '用户名重复', 
        'pwd.require'  =>  '密码必须',       
        'pwd.regex'  =>  '密码必须是4-8位任意的数字字母下划线',
        'repassword.require'=>'重复密码不能为空',
        'repassword.confirm'=>'两次密码不一致',
    ];
    //验证场景
     protected $scene = [
        'add'   =>  ['username'],
    ];
} 
 ?>