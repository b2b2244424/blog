<?php

namespace Admin\Model;

use Think\Model;

class SystemModel extends CommonModel
{
	protected $tableName = 'system';
	protected $fieldsName = array(
		'sid' => '编号',
		'web_title' => '网站标题',
		'web_title_2' => '网站二级标题',
		'web_keyword' => '网站关键字',
		'web_remark' => '网站描述',
		'web_author' => '网站作者',
		'web_time' => '建站时间',
		'web_icp' => '备案号',
		'web_copy' => '版权',
		'web_hit' => '总访问量',
		'web_url' => '网站地址'
	);
}