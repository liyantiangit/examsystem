<?php
namespace app\admin\controller\user;

use app\common\controller\Backend;
use app\common\model\Group as GroupModel;

class Department extends Backend
{
    public function index()
    {
        $Group = new GroupModel;
        $data = $Group->select();
        
        $this->assign('data',$data);
        return $this->fetch();
    }
    
    //添加
    public function add()
    {
    
        $model = new GroupModel;
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
}