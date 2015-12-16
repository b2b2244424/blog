<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
	public function _initialize()
	{
		if(!isset($_SESSION['uid']))
		{
			echo "没有登录";
		}
	}
}