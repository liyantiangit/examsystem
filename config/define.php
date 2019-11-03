<?php
define('SITE_PATH', dirname(dirname(__FILE__)));
define('_PHP_FILE_', rtrim($_SERVER['SCRIPT_NAME'], DIRECTORY_SEPARATOR));
$_root = dirname(_PHP_FILE_);
define('__ROOT__', (($_root == '/' || $_root == '\\' || $_root == '\/') ? '' : $_root));