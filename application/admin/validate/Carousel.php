<?php
namespace app\admin\validate;

use think\Validate;

class Carousel extends Validate
{
    protected $rule = [
        'url'  =>  'require|url',
    ];
    protected $message  =   [
        'url.require'  =>  '链接必须',
        'url.url'  =>  '链接格式错误',
    ];
}
