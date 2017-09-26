<?php
namespace app\admin\model;
use think\Model;
class Goods extends Model{
    //    处理图片上传的方法
    static function upload($filename){
        $file = request()->file($filename);
        if($file){
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if($info){
                // 成功上传后 获取上传信息
                // 输出 jpg
//                echo $info->getExtension();
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                拼接图片完整路径
                $url='/uploads/'.$info->getSaveName();
                $url=str_replace('\\','/',$url);

                return [
                    'status'=>'success',
                    'url'=>$url
                ];
                echo $info->getSaveName();
//                把反斜线换成正斜线

//                // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                echo $info->getFilename();
            }else{
                // 上传失败获取错误信息
                return [
                    'status'=>'error',
                    'msg'=>getError()
                ];
                echo $file->getError();
            }
        }
    }
//    执行修改商品页面
     static  function upd($id){
        if (!$id){
            return false;
        }


     }
}