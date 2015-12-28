<?php

namespace Admin\Controller;

use Think\Controller;

class ArticleController extends Controller
{
	public function index()
	{
		$this->display();
	}

	public function getone()
	{
		$aid = intval(I('aid'));
		$condition = array('aid' => $aid);
		$ret = D('Article')->getOne($condition);
		$this->ajaxReturn(array('code' => 1,'msg' => '获取文章成功','data' => $ret));
	}

	public function getlist()
	{
		$currentpage = I('currentpage');
		$perpage = I('perpage');
		$fields = I('fields');
		$embed = !!I('embed');
		$order = I('order');
		if(empty($order)){
			$order = 'aid desc';
		}
		$condition = array('if_delete = 0');
		$cfield = array('cname');
		$ret = D('Article')->getList($condition,$fields,$currentpage,$perpage,$order,$embed);
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
		$this->display();
	}

	/**
	 * 创建文章
	 * @return [type] [description]
	 */
	public function add()
	{
		$data['title'] = I('atitle');
		$data['cid'] = I('cid');
		$data['content'] = I('contents');
		//$data['cuid'] = D('Login','Service')->getLoginUid();
		$data['create_time'] = date('Y-m-d H:i:s',time());
		$data['update_time'] = date('Y-m-d H:i:s',time());
		$res = D('Article')->add($data);
		var_dump($res);die;
		if($res){
			$this->ajaxReturn(array('code'=>1,'msg'=>'创建成功'));
		}else{
			$this->ajaxReturn(array('code'=>0,'msg'=>'创建失败'));
		}
	}

	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function update()
	{
		$aid = I('aid');
		if(empty($aid)){
			$this->ajaxReturn(array('code'=>-1,'msg'=>'para error'));
		}
		$condition = array('aid' => $aid);
		$data['title'] = I('atitle');
		$data['cid'] = I('cid');
		$data['content'] = I('contents');
		$data['update_time'] = date('Y-m-d H:i:s',time());
		$ret = D('Article')->update($condition,$data);
		if($ret){
			$this->ajaxReturn(array('code'=>1,'msg'=>'更新成功'));
		}else{
			$this->ajaxReturn(array('code'=>0,'msg'=>'更新失败'));
		}
	}

	/**
	 * 删除操作
	 * @return [type] [description]
	 */
	public function delete()
	{
		$arr = json_decode(file_get_contents("php://input"));
		$data = array();
		foreach ($arr as $key => $value) {
			$data[$key] = intval($value);
		}
		if(empty($data)){
			$this->ajaxReturn(array('code' => -1,'msg' => 'para error'));
		}
		$ret = D('Article')->updelete($data);
		if($ret){
			$this->ajaxReturn(array('code'=>1,'msg'=>'删除成功'));
		}else{
			$this->ajaxReturn(array('code'=>0,'msg'=>'删除失败'));
		}
	}
}