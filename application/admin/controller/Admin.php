<?php
namespace  app\admin\controller;
use think\Controller;

use think\Db;

class Admin extends  Controller
{
    public function index()
    {
        //查数据
          $data['locks']=0;
//        $data = Db::name('admin')->select(); //返回结果一个二维数组
        $data = Db::name('manager')->paginate(); //返回结果是  也叫结果集
//     把变量分配到模板里面去
        $this->assign('data', $data);
        return $this->fetch('admin/index');

    }

    public function add()
    {

        if (request()->isPost()) {

            $data = [
                'username' => input('username'),
                'password' => input('password'),
                'locks' => input('locks'),
            ];


//            验证器验证

            $validate = validate('Admin');  //助手函数

            if (!$validate->scene('add')->check($data)) {
//                dump($validate->getError());exit();
                return $this->error($validate->getError());
            }


            //密码加密
            $data['password'] = md5($data['password']);

            //保存数据  insert 成功返回条数  失败返回 false
            $res = Db::name('manager')->insert($data);

            if ($res) {
                return $this->success('添加成功', url('Admin/index'));
            } else {
                return $this->error('添加失败');
            }


        }
        return $this->fetch();
    }



//     加载修改页面
    public function edit(){
        $id =input('id');
//返回结果是一个一维数组，
       $AA = Db::name('manager')->find($id);
//        dump($data);exit();
        $this->assign('AA',$AA);

//        $data = Db::name('admin')->where(array('id'=>$id))->find();
//       打印一条sql语句
//        echo db()->getLastSql();exit;


        return $this->fetch();
    }


    //执行修改页面

    public function upd(){
        if (request()->isPost()) {
            $AA = [
                'id' => input('id'),
                'username' => input('username'),
//                'locks' => input('locks'),
            ];
//
            if (input('locks') =='on'){
                $AA['locks']= 1;
            }else{
                $AA['locks']=0;
            }
//            var_dump($data['locks']);exit;
//            var_dump($AA);exit;

            //验证器验证
//        dump($AA);exit();
            $validate = validate('Admin');  //助手函数

            if (!$validate->scene('edit')->check($AA)) {
//                dump($validate->getError());exit();
                return $this->error($validate->getError());
            }
            $password = input('password');
            //判断要不要修改密码

            if ($password != '') {
//            要修改密码；
                $data['password'] = md5($password);
            }


//        更新数据 --必须加where条件  如果参数里面有主建，默认主键为Where条件。
            $res = Db::name('manager')->update($AA);

//        dump($res);

//       必须加where条件  如果参数里面有主建，默认主键为Where条件。
//        $res= db::name('admin')->where(['id'=>$data['id']])->update($data);
            if ($res !== false) {
                return $this->success('修改成功', url('index'));
            } else {
                return $this->error('修改失败');
            }



        }
    }




    public function del()
    {

        $id = input('id');

        //删除管理员
        $res = Db::name('manager')->delete($id);

        //删除成功返回 受影响行数，失败返回false;

        if ($res) {
            return $this->success('删除成功', url('Admin/index'));
        } else {
            return $this->error('删除失败');
        }


    }
}