<?php

namespace Admin\Model;

use Think\Model;

class CategoryModel extends CommonModel{
	protected $tableName = "category";
	protected $fieldsName = array(
		'cid' => '分类编号',
		'cname' => '分类名',
		'created_at' => '创建时间',
		'updated_at' => '更新时间'
	);
}