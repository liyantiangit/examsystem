<?php

namespace app\home\controller;

use app\common\controller\WebBase;

class Exam extends WebBase
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

    
}
