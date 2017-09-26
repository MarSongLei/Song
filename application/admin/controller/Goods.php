<?php
namespace  app\admin\controller;
use think\Controller;
use app\admin\model\Cate;
use app\admin\model\Goods as GoodsModel;
use app\admin\model\Image;
class  Goods extends Controller{
//    商品首页
    public function index(){
        $data=db('goods')
            ->alias('a')
            ->field('a.id,a.goods_name,a.goods_pic,a.sell_price,a.market_price,a.store,a.keywords,a.desc,a.state,a.is_hot,a.is_new,a.person,c.name,i.image_s_url,i.is_face')
            ->join('cate c','a.cate_id=c.id','left')
            ->join('manager m','a.person=m.username','left')
            ->join('image i','a.id=i.goods_id')
            ->where('i.is_face','=',1)
            ->paginate(8);
//        echo db()->getLastSql();exit;
        $this->assign('data',$data);
        return $this->fetch('goods/index');
    }
//    商品添加
    public  function  add(){
        if(request()->isPost()){
            $data=[
                'goods_name'=>input('goods_name'),
                 'cate_id'=>input('cate_id'),
                'sell_price'=>input('sell_price'),
                'market_price'=>input('market_price'),
                'store'=>input('store'),
                'keywords'=>input('keywords'),
                'desc'=>input('desc'),
                'state'=>input('state'),
                'content'=>input('content')
            ];

//            商品状态
            if(input('state')=='on'){
                $data['state']=1;
            }
            else{
                $data['state']=0;
            }
//             商品热销
           if(input('is_hot')=='on'){
                $data['is_hot']=1;
           }
           else{
               $data['is_hot']=0;
           }
//              商品新品
            if(input('is_new')=='on'){
                $data['is_new']=1;
            }
            else{
                $data['is_new']=0;
            }
            $validate=validate('Goods');
            if(!$validate->scene('add')->check($data)){
                return $this->error($validate->getError());
            }
//            判断有没有上传图片
            if($_FILES['goods_pic']['tmp_name']!=''){
//                上传图片
                $arr=GoodsModel::upload('goods_pic');
                if($arr['status']=='success'){
//                   把图片 路径放在要保存的数据里面
                    $data['goods_pic']=$arr['url'];
                }
                else{
                    return $this->error($arr['msg']);
                }
            }
            //添加数据
            $res=db('goods')->insertGetId($data);
            if(!$res){
                return false;
            }

            //缩放图片
            $b_url = Image::thumb($data['goods_pic'],'240','240');
            $m_url = Image::thumb($data['goods_pic'],'650','650');
            $s_url = Image::thumb($data['goods_pic'],'120','120');
            $imageData=[
                'image'=>$data['goods_pic'],
                'image_b_url'=>$b_url,
                'image_m_url'=>$m_url,
                'image_s_url'=>$s_url,
                'is_face'=>1,
                'goods_id'=>$res
            ];
            db('image')->insert($imageData);
            if($res){
                return $this->success('添加成功',url('Goods/index'));
            }
            else{
                return $this->error('添加失败');
            }
        }
         $data=Cate::cateSon();
//        分类名称如果有子分类不可选
        foreach ($data as $key=>$val){
            foreach ($data as $k=>$v){
                if($val['id'] == $v['pid']){
                    $data[$key]['selected'] = 'selected';
                    break;
                }else{
                    $data[$key]['selected'] = '';
                }
            }
        }
        $this->assign('data',$data);
        return $this->fetch('goods/add');
    }
//    商品编辑
     public function  edit(){
        if(request()->isPost()){
             $id=input('id');
            $data=[
                'id'=>$id,
                'goods_name'=>input('goods_name'),
                'cate_id'=>input('cate_id'),
                'sell_price'=>input('sell_price'),
                'market_price'=>input('market_price'),
                'store'=>input('store'),
                'keywords'=>input('keywords'),
                'desc'=>input('desc'),
                'state'=>input('state'),
                'is_hot'=>input('is_hot'),
                'is_new'=>input('is_new'),
                'content'=>input('content'),
                'person'=>input('person')
            ];
            //            商品状态
            if(input('state')=='on'){
                $data['state']=1;
            }
            else{
                $data['state']=0;
            }
//             商品热销
            if(input('is_hot')=='on'){
                $data['is_hot']=1;
            }
            else{
                $data['is_hot']=0;
            }
//              商品新品
            if(input('is_new')=='on'){
                $data['is_new']=1;
            }
            else{
                $data['is_new']=0;
            }
//        验证
            $validate=validate('Goods');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }
//            修改数据库
            $res = db('goods')->update($data);
//            echo db()->getLastSql();exit;
            if($res!==false){
                $this->success('修改成功',url('Goods/index'));
            }
            else{
                $this->error('修改失败');
            }
        }
        $id=input('id');
        $data=db('cate')->select();
         $dataGoods=db('goods')->find($id);
         $cateId=$dataGoods['cate_id'];
         $cateName=db('cate')->where(['id'=>$cateId])->find();
         $cate_name=$cateName['name'];
//         var_dump($cate_name);exit;
         $data=Cate::cateSon();
         foreach ($data as $key=>$val){
             foreach ($data as $k=>$v){
                 if($val['id'] == $v['pid']){
                     $data[$key]['selected'] = 'selected';
                     break;
                 }else{
                     $data[$key]['selected'] = '';
                 }
             }
         }
         $this->assign('cate_name',$cate_name);
         $this->assign('data',$data);
         $this->assign('dataGoods',$dataGoods);
         return $this->fetch();
     }
//     商品删除
    public  function  del(){
         $id=input('id');
        //        查出图片路径
        $picData=db('goods')->find($id);
        $pic=$picData['goods_pic'];
        if($pic!=null){
            @unlink('.'.$pic);
        }
//        删除文件 注意根目录

        $res = db('Goods')->delete($id);
        if ($res) {
            return $this->success('删除成功', url('Goods/index'));
        } else {
            return $this->error('删除失败');
        }
    }
}