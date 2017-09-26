<?php
namespace  app\admin\controller;
use think\Controller;
use app\admin\model\Goods;
use app\admin\model\Image;
class Images extends Controller{
//    图片管理首页
    public  function  index(){
        $id=input('id');
        $i=input('i');
        $data=db('image')
            ->alias('a')
            ->where("a.goods_id = ".$id)
            ->field('a.image_id,a.image_s_url,a.is_face,g.goods_name,a.goods_id')
            ->join('goods g','a.goods_id=g.id')
            ->paginate(8);
        $this->assign('id',$id);
        $this->assign('data',$data);
        return $this->fetch();
    }
//    图片增加
    public function  add(){
        $id=input('id');
        if (request()->isPost()){
//      判断图片有没有上传
            if($_FILES['image']['tmp_name']!=''){
//                上传图片
                $data=[
                    'image'=>''
                ];
                $arr=Goods::upload('image');
                if($arr['status']=='success'){

//                   把图片 路径放在要保存的数据里面
                    $data['image']=$arr['url'];
                }
                else{
                    return $this->error($arr['msg']);
                }
            }
//             生成缩略图
            //添加数据
            //缩放图片
            $b_url = Image::thumb($data['image'],'240','240');
            $m_url = Image::thumb($data['image'],'650','650');
            $s_url = Image::thumb($data['image'],'120','120');
            $imageData=[
                'goods_id'=>$id,
                'image'=>$data['image'],
                'image_b_url'=>$b_url,
                'image_m_url'=>$m_url,
                'image_s_url'=>$s_url,
                'is_face'=>0
            ];
//            var_dump($imageData['goods_id']);exit;

            $res=db('image')->insert($imageData);
//            return db()->getLastSql();
            if($res){
                return $this->success('添加成功',url('Images/index',['id'=>$id]));
            }
            else{
                return $this->error('添加失败');
            }
        }
        $this->assign('id',$id);
        return $this->fetch();
    }
//      图片删除
    public  function  del(){
        $id=input('i');
//        var_dump( $id);exit;
        $data=db('image')->find($id);
//        var_dump($data);exit;
        if($data['is_face']==1){
            return $this->error('封面不可以删除');
        }
        //        查出图片路径
        $picData=db('image')->find($id);
        $goods_id=$picData['goods_id'];
        $pic=$picData['image'];
        $image_b=$picData['image_b_url'];
        $image_m=$picData['image_m_url'];
        $image_s=$picData['image_s_url'];
        if($pic!=null){
            @unlink('.'.$pic);
            @unlink('.'.$image_b);
            @unlink('.'.$image_m);
            @unlink('.'.$image_s);
        }
//        删除文件 注意根目录

        $res = db('image')->delete($id);
        if ($res) {
            return $this->success('删除成功', url('Images/index',['id'=>$goods_id]));
        } else {
            return $this->error('删除失败');
        }
    }
    public  function  set(){
        $id=input('id');
        $i=input('i');
        db('image')->where(['goods_id'=>$id])->update(['is_face'=>0]);
        $data = [
            'image_id'=>$i,
            'is_face'=>1
        ];
        if (!$data){
            return false;
        }
       $des= db('image')->update($data);
       if($des){
           return $this->redirect('Images/index', ['id' => $id,'i'=>$i], 302,'更改成功');
       }
       else{
           return $this->error('设置失败');
       }


    }
}