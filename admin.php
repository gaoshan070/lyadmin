<?php
/**
 * Content-type configration
 */
header("Content-type: text/html; charset=utf-8");

/**
 * PHP version check
 */
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    die('require PHP > 5.4.0 !');
}

/**
 * PHP Error Configration
 */
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

/**
 * Dev environment prefix
 */
define('ENV_PRE', 'LY_');

/**
 * Admin system flag
 */
define('MODULE_MARK', 'Admin');

/**
 * Application directories
 * 安全期间，建议安装调试完成后移动到非WEB目录
 */
define('APP_PATH', './Application/');
define('APP_DIR', './Application/');
define('BUILDER_DIR', APP_DIR . 'Common/util/lyf/builder/');

/**
 * Cache directory
 * 此目录必须可写，建议移动到非WEB目录
 */
define('RUNTIME_PATH', './Runtime/');

/**
 * Static files directory
 * 此目录必须可写，建议移动到非WEB目录
 */
define('HTML_PATH', RUNTIME_PATH . 'Html/');

/**
 * 包含开发模式数据库连接配置
 */
if (@$_SERVER[ENV_PRE . 'DEV_MODE'] !== 'true') {
    @include './Data/dev.php';
}

/**
 * 系统调试设置, 项目正式部署后请设置为false
 */
if ($_SERVER[ENV_PRE . 'APP_DEBUG'] === 'false') {
    define('APP_DEBUG', false);
} elseif ($_SERVER[ENV_PRE . 'APP_DEBUG'] === 'true') {
    define('APP_DEBUG', true);
} else {
    define('APP_DEBUG', true);
}

/**
 * 系统安装及开发模式检测
 */
if (is_file('./Data/install.lock') === false && @$_SERVER[ENV_PRE . 'DEV_MODE'] !== 'true') {
    define('BIND_MODULE', 'Install');
}

/**
 * Composer
 */
if (is_file('./vendor/autoload.php')) {
    require './vendor/autoload.php';
}

/**
 * 引入核心入口
 */
require './Framework/Lingyun.php';
