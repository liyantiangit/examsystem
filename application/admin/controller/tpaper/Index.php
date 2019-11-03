<?php
namespace app\admin\controller\tpaper;

use app\common\controller\Backend;
use app\common\model\Tpaper as TpaperModel;

class Index extends Backend
{
    public function index()
    {
        $Tpaper = new TpaperModel;
        $data = $Tpaper->select();
        
        $this->assign('data',$data);
        return $this->fetch();
    }
    
    //添加
    public function add()
    {
    
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
    //考试查询
    public function search()
    {
        return $this->fetch();
    }
    
}