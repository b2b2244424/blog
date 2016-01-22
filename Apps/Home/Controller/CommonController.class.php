<?php

namespace Home\Controller;

use Think\Controller;

use Org\ThinkSDK\ThinkOauth;

class CommonController extends Controller
{
	/**
	 * QQ登录
	 * @return [type] [description]
	 */
	public function loginQq()
	{
		$sdk = ThinkOauth::getInstance('qq');
		redirect($sdk->getRequestCodeURL());
	}

	/**
	 * QQ退出
	 * @return [type] [description]
	 */
	public function logoutQq()
	{
		session(null);
		$this->redirect('Index/index');
	}

	public function _initialize()
	{
		//判断是否QQ登录
		if(!session('qqname')){
			if($_GET['code']){
				$code = I('code');
				$sns = ThinkOauth::getInstance('QQ');
				$extends = null;
				$token = $sns->getAccessToken($code,$extends);
				$openid = $token['openid'];
				if(is_array($token)){
					$data = $sns->call('user/get_user_info');
					if($data['ret'] == 0){
						$userInfo['type'] = 'QQ';
						$userInfo['name'] = $data['nickname'];
						$userInfo['nick'] = $data['nickname'];
						$userInfo['head'] = $data['figureurl_qq_2'];
						$fields = 'qqnum';
						$condition = array('qqimg' => $data['head']);
						$res = D('QqUser')->getone($condition,$fields);
						if($res){
							$data = array('qqnum' => $res + 1,);
							D('QqUser')->updateEntity($condition,$data);
						}else{
							$data = array(
								'qqname' => $userInfo['name'],
								'qqimg' => $userInfo['head'],
								'qqnum' => 1,
							);
							D('QqUser')->addEntity($data);
						}
						/**
						 * 将最近访客存入系统
						 */
						SESSION('qqname',$userInfo['name']);
						SESSION('head',$userInfo['head']);
						$this->redirect('Index/index');
					}
				}
			}
		}
		//针对登录用户可以开放的导航栏目
		$condition = array('n_view' => 1);
		$order = 'n_sort';
		$this->pid = D('Node')->getList($condition,$fields,$order);
		//操作系统获取
		$this->Os = getOS();
		//网站系统参数获取
		$where = array('sid' => 1);
		$system = D('Admin/System')->getone($where);
		$this->web_title = $system['web_title'];
		$this->keyword = $system['web_keyword'];
		$this->description = $system['web_remark'];
		$this->site = C('SITE');
		//网站底部参数
		$footer = array(
			'name' => C('NAME'),
			'lang' => C('LANG'),
			'frame' => C('FRAME'),
			'charset' => C('CHARSET'),
			'author' => C('AUTHOR'),
			'version' => D('Admin/Version')->getLatestVersion(),
		);
		$this->assign('footer',$footer);
		//访客记录统计
		$field = 'web_hit';
		D('Admin/System')->plusHit($where,$field);
		$this->qqname = session('qqname');
	}
}