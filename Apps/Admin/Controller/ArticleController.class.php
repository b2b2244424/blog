<?php

namespace Admin\Controller;

use Think\Controller;

class ArticleController extends CommonController
{
	public function index()
	{
		$this->display();
	}

	/**
	 * 文章列表
	 * @return [type] [description]
	 */
	public function getlist()
	{
		$fields = I('fields');
		$embed = !!I('embed');
		$order = I('order');
		if(empty($order)){
			$order = 'create_time desc';
		}
		$condition = array('if_delete = 0');
		$cfield = array('cname');
		$ret = D('Article')->getList($condition,$fields,$order,$embed);
		$i = 0;
		foreach ($ret['data'] as $k) {
			$k['cname'] = D('Category','Service')->getCateByid($k['cid'],$cfield);
			$ret['data'][$i++] = $k;
		}
		$this->ajaxReturn(
			array(
				'code' => 1,
				'msg' => '获取文章列表成功',
				'data' => $ret
			)
		);
	}

	/**
	 * 写文章页面
	 * @return [type] [description]
	 */
	public function create()
	{
		$category = D('Category')->getList();
		$this->assign('catelist',$category['data']);
		$this->display();
	}

	/**
	 * 创建文章
	 * @return [type] [description]
	 */
	public function addone()
	{
		$data['title'] = I('title');
		$data['cid'] = I('cid');
		$data['plaintxt'] = I('plaintxt');
		$data['content'] = I('content');
		$data['create_time'] = date('Y-m-d H:i:s',time());
		$data['update_time'] = date('Y-m-d H:i:s',time());
		$cover = I('cover');
		$ext = D('Common','Service')->getExt($cover);
		$coverinfo = array('path' => $cover,'ext' => $ext);
		try{
			$addcover = D('CoverImg')->addone($coverinfo);
			$data['coverid'] = $addcover;
			$res = D('Article')->addone($data);
			$condition = array('cid' => $addcover);
			$updata = array('aid' => $res);
			D('CoverImg')->update($condition,$updata);
			$this->success('添加成功','index',3);
		}catch(Exception $e){
			$this->error('添加失败','create',3);
		}
	}

	/**
	 * 修改文章页面
	 * @return [type] [description]
	 */
	public function edit()
	{
		$aid = intval($_GET['aid']);
		$condition = array('aid' => $aid);
		$ret = D('Article')->getone($condition);
		$this->assign('article',$ret);
		$this->display();
	}

	/*public function getone()
	{
		$aid = intval(I('aid'));
		$condition = array('aid' => $aid);
		$ret = D('Article')->getone($condition);
		$this->ajaxReturn(array('code' => 1,'msg' => '获取文章成功','data' => $ret));
	}*/

	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function updateone()
	{
		$aid = I('aid');
		if(empty($aid)){
			$this->ajaxReturn(array('code'=>-1,'msg'=>'para error'));
		}
		$condition = array('aid' => $aid);
		$data['title'] = I('title');
		$data['cid'] = I('cid');
		$data['content'] = I('content');
		$data['update_time'] = date('Y-m-d H:i:s',time());
		$ret = D('Article')->update($condition,$data);
		if($ret){
			$this->success('更新成功','index',3);
		}else{
			$this->error('更新失败');
		}
	}

	/**
	 * 删除操作
	 * @return [type] [description]
	 */
	public function delete()
	{
		$aid = intval(I('aid'));
		$condition = array('aid' => $aid);
		if(empty($aid)){
			$this->ajaxReturn(array('code' => -1,'msg' => 'para error'));
		}
		$ret = D('Article')->updelete($condition);
		if($ret){
			$this->ajaxReturn(array('code'=>1,'msg'=>'删除成功'));
		}else{
			$this->ajaxReturn(array('code'=>0,'msg'=>'删除失败'));
		}
	}
}