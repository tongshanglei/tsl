<?php
namespace app\admin\validate;
use think\Validate;
class Admins extends Validate{
    protected $rule= [
        'name' => 'require|regex:\w{4,16}|unique:admin_users',
        'pwd' => 'require|regex:\w{4,8}',
        'repwd'=> 'require|confirm:pwd',
    ];
    protected $message= [
        'name.require'=>'用户名必须填写',
        'name.regex'  =>  '用户名必须是4-16位任意的数字字母下划线',       
        'name.unique'  =>  '用户名重复',
        'pwd.require'  =>  '密码必须',       
        'pwd.regex'  =>  '密码必须是4-8位任意的数字字母下划线',
        'repwd.require'=>'重复密码不能为空',
        'repwd.confirm'=>'两次密码不一致',
    ];
    //验证场景
     protected $scene = [
        'add'   =>  ['name'],
    ];
}

?>