<?php

namespace Admin\Model;

use Think\Model;

class UsersModel extends CommonModel
{
	protected $tableName = 'users';
	protected $fieldsName = array(
		'uid' => '用户编号',
		'username' => '用户名',
		'login_name' => '登录名',
		'role' => '角色',
		'password' => '密码',
		'email' => '邮箱',
		'last_login' => '最后登陆时间',
		'ip' => '登录ip',
		'if_blacklist' => '是否是黑名单用户',
		'if_delete' => '是否已删除'
	);

	/**
	 * 登录操作
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function login($data)
	{
		if($data['login_name'] == '' || $data['password'] == ''){
			return 0;
		}
		$condition = array('login_name' => $data['login_name']);
		$login = $this->getone($condition);
		if(!$login){
			return 1;
		}elseif($login['role'] != 1){
			return 2;
		}elseif($login['password'] != $data['password']){
			return 3;
		}
		//验证通过
		$data = array(
			'last_login' => date('Y-m-d H:i:s',time()),
			'ip' => get_client_ip(),
		);
		$condition = array('uid' => $login['uid']);
		$this->update($condition,$data);
		//验证写入session
		SESSION('uid',$login['uid']);
		SESSION('username',$login['username']);
		SESSION('login_name',$login['login_name']);
		SESSION('role',$login['role']);
		SESSION('last_login',date('Y-m-d H:i:s',$data['last_login']));
		SESSION('ip',$data['ip']);
		return 4;
	}

	public function getUsersNum()
	{
		$condition = array('if_delete' => 0,'if_blacklist' => 0);
		$ret = $this->where($condition)->count();
		return $ret;
	}
}