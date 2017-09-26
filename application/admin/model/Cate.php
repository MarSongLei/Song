<?php
namespace app\admin\model;

use  think\Model;

class Cate extends Model
{
//  首页 查出所有分类
    public static function allCate()
    {
//    数据操作
        $data = db('cate')->order('path asc')->paginate(5);//此时是个对象
//    把分页单独拿出来
        $page = $data->render();
//    拿出所有数据返回二维数组
        $data = $data->all();
        // 把字符串重复几次
        foreach ($data as $k => $v) {
            $data[$k]['name'] = str_repeat('------', $v['level']) . $v['name'];
        }
//    dump($data);exit;
        return [
            'data' => $data,
            'page' => $page

        ];
    }
//   添加分类页面
static public  function  cateSon(){
    $data=db('cate')->order('path asc')->select();
    //        把字符串重复几次
    foreach ($data as $k => $v) {
        $data[$k]['name'] = str_repeat('------', $v['level']) . $v['name'];
    }
   return $data;
}
   //执行添加顶级分类
    static public function addTopCate($data)
    {
        if (empty($data)) {
            return false;
        }
        //  添加数据库 应为需要id后去path
        $id = db('cate')->insertGetId($data);//返回主键
//    返回值为id
        if (!$id) {
            return false;
        }
//      修改path值
        $arr = [
            'id' => $id,//修改条件
            'path' => $id //顶级分离的path就是自己的id
        ];
        $res = db('cate')->update($arr);
        if ($res !== false) {
            return true;
        } else {
            return false;
        }
    }
//  添加子类商品
    static public function addSon($id)
    {
        if (!$id) {
            return false;
        }
//      查出数据
        $data = db('cate')->find($id);
        return $data ? $data : false;
    }

//  执行子分类添加
    static public function addCate($data)
    {
        if (empty($data)) {
            return false;
        }
//      查出父类的path level
        $id=$data['pid'];
        $parent = db('cate')->where(['id'=>$id])->find();
        if (empty($parent)) {
            return false;
        }
//      定义子类的level
        $level = $parent['level'] + 1;
//      组装子类的数据
        $arr = [
            'name' => $data['name'],
            'pid' => $data['pid'],
            'level' => $level
        ];
//      添加数据 后才会生成子类ID
        $pk = db('cate')->insertGetId($arr);
        if (!$pk) {
            return false;
        }
//      修改子类的path
        $where = [
            'path' => $parent['path'] . ',' . $pk,
            'id' => $pk
        ];
//      修改数据
        $res = db('cate')->update($where);
        if ($res !== false) {
            return true;
        } else {
            return false;
        }
    }

//  修改名称的方法
    static public function editCate($data)
    {
        if (empty($data)) {
            return false;
        }
        $res = db('cate')->update($data);
        return $res !== false ? true : false;
    }

//删除分类
    static public function del($id)
    {
        $response = [
            'status' => 'error',
            'msg' => ''
        ];
        if (!$id) {
            $response['msg'] = '参数错误';
            return $response;
        }
//    如果该类下有子类不能删除
//    判断有没有子分类
        $data = db('cate')->where(['pid' => $id])->find();
//        var_dump($data);exit;
        if (!empty($data)){
            $response['msg'] = '该分类下有子类，不能删除';
            return $response;
        }
//        如果分类 下有商品也不能删除
        $res=db('cate')->delete($id);
        if($res){
            $response['status']='success';
          $response['msg']='删除成功';
            return  $response;
        }
        else{
             $response['msg']='删除失败';
            return  $response;
        }

    }
}
