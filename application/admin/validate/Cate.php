<?php
namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule = [
        'name'  =>  'require|chsDash',
    ];
    protected $message  =   [
        'name.require' => '名称不能为空',
        'name.chsDash'=>'名称只能是汉字、字母、数字和下划线_及破折号-',
    ];
}
