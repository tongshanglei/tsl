<?php
namespace app\admin\controller;
use think\Controller;
class Advert extends Controller
{
    public function getIndex()
    {
        $info=db('advert')->find(1);
        return view('advert/index',['info'=>$info]);
    }
    public function postUpdate(){
        // 获取表单上传文件 例如上传了001.jpg
        if(!request()->file()){
		    $this->error('请选择上传图片');
		}
        $validate=validate('Advert');
        if(!$validate->check(request()->post())){
            $this->error($validate->getError());
        }
        $file = request()->file('pic');
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->validate(['ext'=>'jpg,png'])->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
                //echo $info->getExtension();
                //输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                $data['id']=1;
                $data['pic']=$info->getSaveName();
                $data['url']=request()->post('url');
                $result=db('advert')->update($data);
                if($result){
                    $this->success('修改成功','/advert/index');
                }else{
                    $this->error('修改失败');
                }
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                //echo $info->getFilename();
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }
}
