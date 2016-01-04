<?php

namespace Home\Model;

use Think\Model\RelationModel;

class CommonModel extends RelationModel{
	//表名
	protected $tableName = "";
	//表字段
	protected $fieldsName = array();

	/**
	 * 创建实体
	 * @param [type] $data [description]
	 */
	public function addone($data)
	{
		$realdata = array();
		foreach ($data as $key => $value) {
			if(array_key_exists($key,$this->fieldsName)){
				$realdata[$key] = $value;
			}
		}
		$ret = $this->add($realdata);
	}

	/**
	 * 获取一个实体信息
	 * @param  [type] $condition [description]
	 * @param  array  $fields    [description]
	 * @return [type]            [description]
	 */
	public function getone($condition,$fields = array())
	{
		if($fields){
			$fields = array_intersect($fields, array_keys($this->fieldsName));
		}else{
			$fields = array_keys($this->fieldsName);
		}

		$ret = $this
		->field($fields)
		->where($condition)
		->find();
		return $ret;
	}

	/**
	 * 获取列表
	 * @param  [type]  $condition   [description]
	 * @param  array   $fields      [description]
	 * @param  integer $currentpage [description]
	 * @param  integer $perpage     [description]
	 * @param  [type]  $order       [description]
	 * @return [type]               [description]
	 */
	public function getList($condition,$fields = array(),$order)
	{
		if($fields){
			$fields = array_intersect($fields,array_keys($this->fieldsName));
		}else{
			$fields = array_keys($this->fieldsName);
		}

		$ret = $this
		->field($fields)
		->where($condition)
		->order($order)
		->select();

		$count = $this->where($condition)->count();

		return array(
			'count' => $count,
			'data' => $ret
		);
	}

	/**
	 * 逻辑删除
	 * @param  [type] $condition [description]
	 * @return [type]            [description]
	 */
	public function updelete($condition)
	{
		$data = array("if_delete" => 1);
		$res = $this->where($condition)->data($data)->save();
		return $res;
	}
	/**
	 * 物理删除操作
	 * @param  [type] $condition [description]
	 * @return [type]            [description]
	 */
	public function delete($condition)
	{
		$res = $this->where($condition)->delete();
		return $res;
	}

	/**
	 * 更新操作
	 * @param  [type] $condition [description]
	 * @param  [type] $data      [description]
	 * @return [type]            [description]
	 */
	public function update($condition,$data)
	{
		if(!$condition){
			return;
		}
		$res = $this->where($condition)->save($data);
		return $res;
	}
}