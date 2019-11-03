<?php
// +----------------------------------------------------------------------
// | ExamSystem [ 培训考试管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.gzhujia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: LY-田 <guangzhouhujia@163.com> <QQ:1397646663>
// +----------------------------------------------------------------------


// +----------------------------------------------------------------------
// | 登录控制器
// +----------------------------------------------------------------------
namespace app\home\controller;

use app\common\controller\WebBase;

class Login extends WebBase
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        return $this->fetch();
        
    }
    
    
    public function register()
    {
        return $this->fetch();
    }
    
    public function logout()
    {
        return $this->redirect('index/index', ['cate_id' => 2]);
    }
    
    
   
}
