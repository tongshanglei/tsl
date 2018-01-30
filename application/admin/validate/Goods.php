<?php
namespace app\admin\validate;

use think\Validate;

class Goods extends Validate
{
    protected $rule = [
        'name'  =>  'require|unique:goods',
        'status'  =>  'require',
    ];
    protected $message  =   [
        'name.require'  =>  '商品名必须',
        'name.unique'  =>  '商品名重复',
        'status.require'  =>  '商品状态必须',
    ];
}
