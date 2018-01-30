<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
// function test(){
// 	echo "公共函数1";
// }
// function test1(){
// 	$pay=new \Org\Util\Pay();
// 	$pay->pays();
// }

// 发送邮件
function sendmail($to,$title,$content){
	$mail=new \Org\Util\PHPMailer();
	//设置字符集
	$mail->CharSet="utf-8";
	//设置采用SMTP方式发送邮件
	$mail->IsSMTP();
	//设置邮件服务器地址
	$mail->Host="smtp.163.com";//C 获取配置文件信息 
	//设置邮件服务器的端口 默认的是25  如果需要谷歌邮箱的话 443 端口号
	$mail->Port=25;
	//设置发件人的邮箱地址
	$mail->From="tyzssf020@163.com"; //
	// $mail->FromName='我';//
	//设置SMTP是否需要密码验证
	$mail->SMTPAuth=true;
	//发送方
	$mail->Username="tyzssf020@163.com";
	$mail->Password="xulifeng19941115";//C客户端的授权密码
	//发送邮件的主题
	$mail->Subject=$title;
	//内容类型 文本型
	$mail->AltBody="text/html";
	//发送的内容
	$mail->Body=$content;
	//设置内容是否为html格式
	$mail->IsHTML(true);
	//设置接收方
	$mail->AddAddress(trim($to));
	if(!$mail->Send()){
		return false;
		// echo "失败".$mail->ErrorInfo;
	}else{
		return true;
	}
}
// // import方法手动导入,先引用loader
// use think\Loader;
// use think\Session;
// function sends(){
// 	Loader::import("Org.Util.Phone");
// 	$phone=new Phone();
// 	$phone->phones();
// }
// 手机验证码
function sendphones($p){
	Vendor("lib.Ucpaas");
	//初始化必填
	//请求云之讯平台
	$options['accountsid']='2a9ed4be0ddd516b59bae2f7cb010230';
	$options['token']='ef80abb7e7ed7d4f5028e2af0afd2c93';

	//初始化 $options必填
	$ucpass = new Ucpaas($options);

	//开发者账号信息查询默认为json或xml
	// header("Content-Type:text/html;charset=utf-8");
	//短信接口调用
	// //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
	$appId = "a4000958f44345b9a39ffd746e56b53b";
	//终端对象
	$to = $p;
	//短信模板id
	$templateId = "243231";
	//验证码
	// $param=rand(1000,9999);
	$param=rand(1000,9999);
	// Session::set('param',$param);
	//返回的结果
	//转换为php
	$a=json_decode($ucpass->templateSMS($appId,$to,$templateId,$param),true);
	$data[]=$a;
	// $data['param']=$param;
	//转换为json格式
	echo json_encode($data);
	return $param;
}