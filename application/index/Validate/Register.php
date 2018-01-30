<?php
namespace app\index\validate;

use think\Validate;

class Register extends Validate
{
    protected $rule = [
        'username'  =>  'require|unique:users',
        'pwd'  =>  'require|regex:\w{4,8}',
        'repwd'  =>  'require|confirm:pwd',
    ];
    protected $message  =   [
        'username.require'  =>  '用户名必须',
        'username.unique'  =>  '用户名已存在',
        'pwd.require'  =>  '密码必须',       
        'pwd.regex'  =>  '密码必须是4-8位任意的数字字母下划线',
        'repwd.require'=>'重复密码不能为空',
        'repwd.confirm'=>'两次密码不一致',
    ];
}
