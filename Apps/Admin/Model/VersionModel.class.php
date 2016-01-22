<?php

namespace Admin\Model;

use Think\Model;

class VersionModel extends Model
{
	protected $tableName = 'version';

	protected $fieldsName = array(
		'vid' => '版本编号',
		'title' => '操作说明',
		'content' => '操作性详情',
		'author' => '操作人',
		'time' => '操作时间',
		'ip' => 'IP地址',
		'version' => '版本号'
	);
	/**
	 * 获取最新版本号
	 * @return [type] [description]
	 */
	public function getLatestVersion()
	{
		$res = $this->limit(1,1)->order('time desc')->getField('version');
		return $res;
	}
}