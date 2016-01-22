<?php

namespace Home\Model;

use Think\Model;

class QqUserModel extends CommonModel
{
	protected $tableName = 'qquser';
	protected $fieldsName = array(
		'qqid' => '编号',
		'qqname' => 'qq昵称',
		'qqimg' => 'qq头像',
		'qqnum' => '访问次数'
	);
}