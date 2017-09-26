<?php
namespace app\admin\controller;

use think\Controller;
use app\admin\model\Cate as CateModel;
class Cate extends Controller
{
//    分类首页
    public function index()
    {
////        查出所有分类
        $data = CateModel::allCate();
        $this->assign('data', $data);

        return $this->fetch();
    }

//    添加分类
    public function add()
    {
        if (request()->isPost()) {
            $id=input('parentId');
            $data = [
                'name' => input('name'),
            ];
            if ($id == 0) {
                $data['pid'] = 0;
                $data['level'] = 0;
                $validate = validate('Cate');
                if (!$validate->scene('add')->check($data)) {
                    return $this->error($validate->getError());
                }
                $res = CateModel::addTopCate($data);
                if ($res) {
                    return $this->success('添加成功', url('Cate/index'));
                } else {
                    return $this->error('添加失败');
                }
            }
            $parentId = input('id');

//       子类的pid就是父类的id
            $data['pid'] =$id;
            $validate = validate('Cate');
            if (!$validate->scene('add')->check($data)) {
                return $this->error($validate->getError());
            }
//        添加子分类
            $res = CateModel::addCate($data);
            if ($res) {
                return $this->success('添加成功', url('Cate/index'));
            } else {
                return $this->error('添加失败');
            }
            $data = CateModel::addSon($data);

        }
        $data=CateModel::cateSon();
        $this->assign('data', $data);
//                var_dump($data);exit;
        return $this->fetch('cate/add');
}
    public function  edit(){
        $id=input('id');
    if(request()->isPost()){
        $data=[
            'id'=>$id,
            'name'=>input('name')
        ];
//        验证
        $validate=validate('Cate');
        if(!$validate->scene('add')->check($data)){
            return $this->error($validate->getError());
        }
//        操作数据库
        $res=CateModel::editCate($data);
        if ($res){
            return $this->success('修改成功',url('Cate/index'));
        }
        else{
            return $this->error('修改失败');
        }
    }
        $data=CateModel::addSon($id);
        $this->assign('data',$data);
        return $this->fetch('cate/edit');
    }
//    删除分类
public  function  del(){
        $id=input('id');
//        var_dump($id);exit;
        $res=CateModel::del($id);
//        var_dump($res);exit;
        if($res['status']=='success'){
            return $this->success('删除成功',url('Cate/index'));
        }
        else{
            return $this->error('删除失败');
        }
}
}