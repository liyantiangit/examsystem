<?php
// +----------------------------------------------------------------------
// | ExamSystem [ 培训考试管理系统 ]
// +----------------------------------------------------------------------
// | Copyright (c) 2019 http://www.gzhujia.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: LY-田 <guangzhouhujia@163.com> <QQ:1397646663>
// +----------------------------------------------------------------------
define('DB_PREFIX', 'ex_');
return [
    // 数据库类型
    'type' => 'mysql',
    // 服务器地址
    'hostname' => 'localhost',
    // 数据库名
    'database' => 'examadmin123',
    // 用户名
    'username' => 'root',
    // 密码
    'password' => 'root',
    
    // 端口
    'hostport' => '3306',
    // 数据库连接参数
    'params' => [],
    // 数据库编码默认采用utf8
    'charset' => 'utf8mb4',
    // 数据库表前缀
    'prefix' => DB_PREFIX,
    // 数据库调试模式
    'debug' => true,

    // 是否严格检查字段是否存在
    'fields_strict' => false,
    // 数据集返回类型
    'resultset_type' => 'array',
    
    // 用户密码加密的KEY
    'data_auth_key' => 'OB}EX+a!A5tnL,ve`MucZ^1zqbs/6)Q:Gp.?<"$%'
];
