<?php
//登录后台操作
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
	public function login()
	{
		$this->display();
	}

	//登录
	public function loginHandle()
	{
		$loginData = I('data');
		$verify = $loginData['verify'];
		$username = $loginData['username'];
		$password = md5($loginData['password']);
		$data = array('login_name' => $username,'password' => $password);
		$row = D('Users')->login($data);
		if(checkVerify($verify) == false){
			$this->ajaxReturn(array('code' => -1,'error' => '验证码错误'));
		}
		if($row == 4){
			$this->ajaxReturn(array('code' => 1,'msg' => '登录成功'));
		}elseif($row == 0){
			$this->ajaxReturn(array('code' => -1,'error' => '用户名或密码不能为空'));
		}elseif($row == 1){
			$this->ajaxReturn(array('code' => -1,'error' => '用户不存在'));
		}elseif($row == 2){
			$this->ajaxReturn(array('code' => -1,'error' => '您没有权限'));
		}
		$this->ajaxReturn(array('code' => -1,'error' => '用户名或密码错误'));
	}

	public function verify()
	{
		verify();
	}

	//登出
	public function logout()
	{
		session(null);
		$this->redirect('Login/login');
	}
}