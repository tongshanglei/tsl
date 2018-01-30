<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//导入路由类
use think\Route;
// 后台首页
Route::controller("/admin","admin/Admin");
//后台登录
Route::controller("/login","admin/Login");
//后台用户模块
Route::controller("/user","admin/User");
//后台用户详情
Route::controller("/userinfo","admin/Userinfo");
// 后台管理员
Route::controller("/admins","admin/Admins");
//后台分类
Route::controller("/cate","admin/Cate");
//后台订单
Route::controller("/order","admin/Order");
//后台广告栏目
Route::controller("/advert","admin/Advert");
//后台友情链接
Route::controller("/link","admin/Link");
//角色列表
Route::controller("/rolelist","admin/Rolelist");
//轮播图
Route::controller("/carousel","admin/Carousel");
//站内信
Route::controller("message","admin/Message");
//节点列表
Route::controller("/nodelist","admin/Nodelist");
//商品列表
Route::controller("/goods","admin/Goods");
//收货地址管理
Route::controller("/address","admin/Address");
//公告
Route::controller('notice','admin/Notice');
//前台首页
Route::controller("/index","index/Index");
//登录
Route::controller("ilogin","index/ilogin");
//注册
Route::controller("register","index/Register");
//公告
Route::controller("inotice","index/notice");
//列表
Route::controller("ilist","index/Ilist");
//个人中心
Route::controller("ipersonal","index/Ipersonal");
//订单
Route::controller("iorder","index/Iorder");
//购物车
Route::controller("cart","index/Cart");
//商品详情
Route::controller("idetails","index/Idetails");
//前台站内信
Route::controller("imail","index/Imail");
//点赞
Route::controller("like","index/like");
//收藏
Route::controller("collect","index/collect");
//订单详情
Route::controller("iorderdetails","index/Iorderdetails");
//抽奖
Route::controller("coupons","index/Coupons");