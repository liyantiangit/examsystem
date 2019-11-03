<?php
// +----------------------------------------------------------------------
// | ExamSystem [ 培训考试管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.gzhujia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: LY-田 <guangzhouhujia@163.com> <QQ:1397646663>
// +----------------------------------------------------------------------


// +----------------------------------------------------------------------
// | 题库设置
// +----------------------------------------------------------------------
namespace app\admin\controller\question;

use app\common\controller\Backend;
use app\common\model\Question as QuestionModel;

class Index extends Backend
{
    
    
    public function index()
    {
        $Question = new QuestionModel;
        $data = $Question->select();
        
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
    
}