<?php

namespace Home\Model;

use Think\Model;

class NodeModel extends CommonModel
{
	protected $tableName = 'node';
	protected $fieldsName = array(
		'nid' => '节点编号',
		'n_name' => '节点名称',
		'n_open' => '打开方式',
		'n_sort' => '栏目排序',
		'n_remark' => '栏目描述',
		'n_view' => '栏目视图',
		'n_time' => '栏目添加时间'
	);
}