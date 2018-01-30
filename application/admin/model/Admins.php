<?php
namespace app\admin\model;
//导入核心类Model
use think\Model;
class Admins extends Model{
	// 设置当前模型对应的完整数据表名称
    protected $table = 'admin_users';
    //获取器 对获取的数据(字段值)做数据设置
    public function getStatusAttr($value)
    {
        $status = [1=>'正常',2=>'禁用',3=>'待审核'];
        return $status[$value];
    }
} 
 ?>