<?php
//验证器类
namespace app\admin\validate;
//导入验证类
use think\Validate;
class Userinfo extends Validate{
	//规则
	protected $rule = [
        'email'  =>  'regex:/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/',
    ];

    //提示信息
    protected $message = [
        'email.regex'  =>  '邮箱格式不正确',       
    ];
} 
 ?>