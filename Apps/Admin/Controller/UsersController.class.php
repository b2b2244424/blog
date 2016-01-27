<?php

namespace Admin\Controller;

use Think\Controller;

class UsersController extends CommonController
{
	public function index()
	{
		$this->display();
	}

	/**
	 * 获取系统用户列表
	 * @return [type] [description]
	 */
	public function getlist()
	{
		$condition = array('if_delete' => 0,'if_blacklist' => 0);
		$ret = D('Users')->getlist($condition);
		if($ret){
			$this->ajaxReturn(array('code' => 1,'msg' => '获取用户列表成功','data' => $ret));
		}else{
			$this->ajaxReturn(array('code' => -1,'error' => '获取用户列表失败'));
		}
	}

	/**
	 * 删除用户
	 * @return [type] [description]
	 */
	public function delete()
	{
		$uid = intval(I('uid'));
		$condition = array('uid' => $uid);
		if(empty($uid)){
			$this->ajaxReturn(array('code' => -1,'msg' => 'para error'));
		}
		$ret = D('Users')->updelete($condition);
		if($ret){
			$this->ajaxReturn(array('code'=>1,'msg'=>'删除成功'));
		}else{
			$this->ajaxReturn(array('code'=>0,'msg'=>'删除失败'));
		}
	}

	/**
	 * 拉黑操作
	 * @return [type] [description]
	 */
	public function doBlack()
	{
		$uid = intval(I('uid'));
		$condition = array('uid' => $uid);
		$data = array('if_blacklist' => 1);
		if(empty($uid)){
			$this->ajaxReturn(array('code' => -1,'msg' => 'para error'));
		}
		$ret = D('Users')->update($condition,$data);
		if($ret){
			$this->ajaxReturn(array('code'=>1,'msg'=>'拉黑成功'));
		}else{
			$this->ajaxReturn(array('code'=>0,'msg'=>'拉黑失败'));
		}
	}

	public function black()
	{
		$this->display();
	}

	/**
	 * 黑名单
	 * @return [type] [description]
	 */
	public function getblacklist()
	{
		$condition = array('if_delete' => 0,'if_blacklist' => 1);
		$ret = D('Users')->getlist($condition);
		if($ret){
			$this->ajaxReturn(array('code' => 1,'msg' => '获取黑名单列表成功','data' => $ret));
		}else{
			$this->ajaxReturn(array('code' => -1,'error' => '获取黑名单列表失败'));
		}
	}

	public function white()
	{
		$uid = intval(I('uid'));
		$condition = array('uid' => $uid);
		$data = array('if_blacklist' => 0);
		if(empty($uid)){
			$this->ajaxReturn(array('code' => -1,'msg' => 'para error'));
		}
		$ret = D('Users')->update($condition,$data);
		if($ret){
			$this->ajaxReturn(array('code'=>1,'msg'=>'操作成功'));
		}else{
			$this->ajaxReturn(array('code'=>0,'msg'=>'操作失败'));
		}
	}

	/**
	 * 修改编辑
	 * @return [type] [description]
	 */
	public function edit()
	{
		$uid = I('uid');
		$condition = array('uid' => $uid);
		$userinfo = D('Users')->getone($condition);
		$cond = array('rid' => $userinfo['role']);
		$role = D('Role')->getone($cond);
		$userinfo['rolename'] = $role['rolename'];
		$this->assign('userinfo',$userinfo);
		$this->display();
	}

	/**
	 * 更新用户信息
	 * @return [type] [description]
	 */
	public function updateone()
	{
		$uid = I('uid');
		$data['username'] = I('username');
		$data['gender'] = I('gender');
		$data['domain'] = I('domain');
		if(empty($uid)){
			$this->error('参数错误','index',2);
		}
		$condition = array('uid' => $uid);
		try {
			D('Users')->update($condition,$data);
			$this->success('修改成功','index',2);
		} catch (Exception $e) {
			$this->error('更新失败','index',2);
		}
	}

	/**
	 * 头像更改
	 * @return [type] [description]
	 */
	public function updateHead()
	{
		$data = $_POST;
		$data = $_FILES;
		var_dump($data);die;
	}
}