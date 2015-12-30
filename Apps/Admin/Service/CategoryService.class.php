<?php

namespace Admin\Service;

class CategoryService{

	/**
	 * 获取指定的分类
	 * @param  [type] $cid [description]
	 * @return [type]      [description]
	 */
	public function getCateByid($cid,$fields)
	{
		$condition = array('cid' => $cid);
		$ret = D('Category')->getone($condition,$fields);
		return $ret;
	}
}