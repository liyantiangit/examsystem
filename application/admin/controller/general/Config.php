<?php
namespace app\admin\controller\general;

use app\common\controller\Backend;

class Config extends Backend
{
    public function index()
    {
        return $this->fetch();
    }
    
}