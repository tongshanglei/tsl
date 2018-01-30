<?php
namespace app\admin\validate;

use think\Validate;

class Notice extends Validate
{
    protected $rule = [
        'title'  =>  'require',
        'centent' =>  'require',
    ];
    protected $message  =   [
        'title.require' => '标题不能为空',
        'centent.require'=>'内容不能为空',
    ];
}
