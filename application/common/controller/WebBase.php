<?php

// +----------------------------------------------------------------------
// | WeiPHP [ 公众号和小程序运营管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.weiphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 凡星 <weiphp@weiphp.cn> <QQ:203163051>
// +----------------------------------------------------------------------
namespace app\common\controller;

use think\Controller;
use think\facade\Log;

/**
 * PC运营管理端的控制器基类，实现PC版的初始化，权限控制和一些通用方法
 *
 * @author 凡星
 *
 */
class WebBase extends Controller
{

    protected $top_more_button = [];

    public function __construct()
    {
        header('Access-Control-Allow-Origin:*');
        // 响应类型
        header('Access-Control-Allow-Methods:*');
        // 响应头设置
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
        
        // WeiPHP常量定义
        defined('MODULE_NAME') or define('MODULE_NAME', request()->module());
        defined('CONTROLLER_NAME') or define('CONTROLLER_NAME', request()->controller());
        defined('ACTION_NAME') or define('ACTION_NAME', request()->action(true));
        
        
        defined('NOW_TIME') or define('NOW_TIME', $_SERVER['REQUEST_TIME']);
        defined('IS_GET') or define('IS_GET', request()->isGet());
        defined('IS_POST') or define('IS_POST', request()->isPost());
        defined('IS_AJAX') or define('IS_AJAX', request()->isAjax());
        
        $url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        defined('__SELF__') or define('__SELF__', strip_tags($url));
        
        $requestData = input();
        $requestData = empty($requestData) ? [] : $requestData;
        $_REQUEST = array_merge($_REQUEST, $requestData);
        //         add_debug_log($_REQUEST, 'testvistisf_'.get_mid());
        if (isset($_REQUEST['PHPSESSID']) && !empty($_REQUEST['PHPSESSID'])) {
            //             session_id($_REQUEST['PHPSESSID']);
        }
        //         add_debug_log($_SESSION, 'testvistisf11_'.get_mid());
        
        // 不用记录定时任务的日志
        if (ACTION_NAME != 'cron' && CONTROLLER_NAME != 'Canal' && CONTROLLER_NAME != 'Cron') {
            Log::key('allow_log');
        } else {
            Log::key('fobi_log');
        }
        // 解决TP框架中的GET不包含PHP_INFO里的参数的问题
        $route = input('route.');
        $_GET = array_merge($route, $_GET);
        
        
        $public_dir = parse_name(MODULE_NAME);
         
        if (!is_dir(SITE_PATH . '/public/assets/' . $public_dir)) {
            $public_dir = 'home';
        }
        


        
        parent::__construct();
    }

    function initialize()
    {
        parent::initialize();
    
        if (strtolower(MODULE_NAME) != 'install') {
    
        }
    }
    



    
}
