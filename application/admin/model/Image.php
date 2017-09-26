<?php
namespace  app\admin\model;
use think\Model;
class Image extends  Model{
    static public function thumb($url,$width,$height){
        //判断
        $image = \think\Image::open('.'.$url);
        // 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.png
        $dirName = dirname($url);
        $fileName = basename($url);
        //echo $dirName.';'.$fileName;exit;
        $saveName = $dirName.'/'.$width.'_'.$fileName;
        //echo $saveName;exit;
        $res = $image->thumb($width, $height)->save('.'.$saveName);
        return $res == true?$saveName:false;
    }

}