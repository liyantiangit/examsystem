<?php
// +----------------------------------------------------------------------
// | ExamAdmin [ 培训考试管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.gzhujia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: LY-田 <guangzhouhujia@163.com> <QQ:1397646663>
// +----------------------------------------------------------------------
namespace app\admin\controller;

use app\common\controller\Backend;

class Dashboard extends Backend
{
    public function index()
    {
        return $this->fetch();
    }
}
