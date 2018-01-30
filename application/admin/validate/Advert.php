<?php
namespace app\admin\validate;

use think\Validate;

class Advert extends Validate
{
    protected $rule = [
        'url'  =>  'url',
    ];
    protected $message  =   [
        'url.url' => 'url格式错误',

    ];
}
