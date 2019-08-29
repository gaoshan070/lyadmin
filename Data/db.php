<?php
/**
 * database configuration
 */

// 开启开发部署模式
if (@$_SERVER[ENV_PRE.'DEV_MODE'] === 'true') {
    // 数据库配置
    return array(
        'DB_TYPE'   => $_SERVER[ENV_PRE.'DB_TYPE'] ? : 'mysql',       // 数据库类型
        'DB_HOST'   => $_SERVER[ENV_PRE.'DB_HOST'] ? : '172.17.0.1',       // 服务器地址
        'DB_NAME'   => $_SERVER[ENV_PRE.'DB_NAME'] ? : 'flexicon',       // 数据库名
        'DB_USER'   => $_SERVER[ENV_PRE.'DB_USER'] ? : 'root',       // 用户名
        'DB_PWD'    => $_SERVER[ENV_PRE.'DB_PWD']  ? : '123qwe',        // 密码
        'DB_PORT'   => $_SERVER[ENV_PRE.'DB_PORT'] ? : '3306',       // 端口
        'DB_PREFIX' => $_SERVER[ENV_PRE.'DB_PREFIX'] ? : 'ly_',   // 数据库表前缀
        'AUTH_KEY'  => '.u[Vh`]Aj)J!Z,w[lf{pnDmEp_Aw|r]HE<EUMlZjYtUYw-`DI}"_Wl:bo/>:~eN~', // 系统加密KEY，轻易不要修改此项，否则容易造成用户无法登录，如要修改，务必备份原key
    );
} else {
    // 数据库配置
    return array(
        'DB_TYPE'   => 'mysql',       // 数据库类型
        'DB_HOST'   => '172.17.0.1',       // 服务器地址
        'DB_NAME'   => 'flexicon',       // 数据库名
        'DB_USER'   => 'root',       // 用户名
        'DB_PWD'    => '123qwe',        // 密码
        'DB_PORT'   => '3306',       // 端口
        'DB_PREFIX' => 'ly_',     // 数据库表前缀
        'AUTH_KEY'  => '.u[Vh`]Aj)J!Z,w[lf{pnDmEp_Aw|r]HE<EUMlZjYtUYw-`DI}"_Wl:bo/>:~eN~', // 系统加密KEY，轻易不要修改此项，否则容易造成用户无法登录，如要修改，务必备份原key
    );
}



