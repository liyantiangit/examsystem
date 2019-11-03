<?php
// +----------------------------------------------------------------------
// | ExamAdmin [ 培训考试管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.gzhujia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: LY-田 <guangzhouhujia@163.com> <QQ:1397646663>
// +----------------------------------------------------------------------


// +----------------------------------------------------------------------
// | 用户管理
// +----------------------------------------------------------------------
namespace app\admin\controller\user;

use app\common\controller\Backend;
use app\common\model\Users as UserModel;

class Users extends Backend
{
    public function index()
    {
        $users = new UserModel;
        $data = $users->select();
        
        $this->assign('data',$data);
        return $this->fetch();
    }
    
    //添加
    public function add()
    {
        
        $model = new UserModel;
        return $this->fetch();
    }
    
    public function edit()
    {
        
        return $this->fetch();
    }
    // 通用插件的删除模型
    public function del()
    {
        $ids = I('ids');
        $model = $this->getModel('award');
        return $this->fetch();
    }
    //修改密码
    public function profile() {
        
        return $this->fetch();
    }
}