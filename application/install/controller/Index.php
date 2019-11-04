<?php
// +----------------------------------------------------------------------
// | ExamSystem [ 培训考试管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.gzhujia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: LY-田 <guangzhouhujia@163.com> <QQ:1397646663>
// +----------------------------------------------------------------------


// +----------------------------------------------------------------------
// | 安装向导
// +----------------------------------------------------------------------
namespace app\install\controller;

use app\common\controller\WebBase;

class Index extends WebBase
{
    // 安装首页
    public function index()
    {
        if (file_exists(SITE_PATH . '/public/uploads/install.lock')) {
            $this->error('已经安装过，请删除uploads/install.lock再安装');
        }
        return $this->fetch();
    }
    
    // 安装完成
    public function complete()
    {
        $step = session('step');
        
        if (! $step) {
            $this->redirect('index');
        } elseif ($step != 3) {
            $this->redirect("Install/step{$step}");
        }
        
        // 写入安装锁定文件
        file_put_contents(SITE_PATH . '/public/uploads/install.lock', 'lock');
        if (! session('update')) {
            // 创建配置文件
            $this->assign('info', session('config_file'));
        }

        session('step', null);
        session('error', null);
        session('update', null);
        session('pbid',null);
        return $this->fetch();
    }
}
