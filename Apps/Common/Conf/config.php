<?php
return array(
	//数据库连接配置
	'DB_TYPE' => 'mysql',
	'DB_HOST' => '127.0.0.1',
	'DB_NAME' => 'blog',
	'DB_USER' => 'root',
	'DB_PWD' => 'root',
	'DB_PORT' => 3306,
	'DB_PREFIX' => '',
	'DB_CHARSET' => 'utf8',
	//开启调试
	'DB_BUG' => TRUE,

	'MODULE_ALLOW_LIST' => array('Home','admin'),
	'DEFAULT_MODULE' => 'Home',//默认模块
	'DEFAULT_ACTION' => 'index',//默认操作
	'URL_HTML_SUFFIX' => '',//开启伪静态,消除.html

	//模版文件
	'LAYOUT_ON' => TRUE,
	'LAYOUT_NAME' => 'layout',

	//邮件相关
	'MAIL_SMTP' => 'TRUE',
	'MAIL_HOST' => 'smtp.gmail.com',
	'MAIL_SMTPAUTH' => 'TRUE',
	'MAIL_SECURE' => 'tls',
	'MAIL_CHARSET' => 'utf-8',
	'MAIL_ACCOUNT' => 'companion',
	'MAIL_USERNAME' => '',
	'MAIL_PASSWORD' => '',
	'MAIL_ISHTML' => 'TRUE'
);
