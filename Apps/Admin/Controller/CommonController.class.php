<?php

namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
	public function _initialize()
	{
		$this->_user = session('username');
		if(strtolower(CONTROLLER_NAME) != 'login' && strtolower(CONTROLLER_NAME) != 'public'){
			if(empty($this->_user)){
				$this->redirect('Login/login');
			}
			$this->assign('admin',$this->_user);

			$nownav['m'] = strtolower(CONTROLLER_NAME);
			$nownav['a'] = strtolower(ACTION_NAME);
			$this->assign('nownav',$nownav);
		}
		//检查session
		if(!isset($_SESSION['uid'])){
			//session不存在，跳回登录页面登录
			$this->redirect('Login/login');
		}

		$this->username = session('username');
		$this->loginname = session('login_name');
	}

  public function uploadImage()
  {
    $data = array(
        'success' => false,
        'msg' => '上传失败!',
        'file_path' => ''
    );

    if ($file = $_FILES['upload_file']){
      import("@.ORG.UploadFile");
      $upload = new \Think\Upload();// 实例化上传类
      $upload->maxSize   =     3145728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
      // 上传文件 
      $info   =   $upload->uploadOne($file);
      if($info){
        $data = array(
          'success' => true,
          'msg' => "上传成功",
          'file_path' => $upload->rootPath.$info['savepath'].$info['savename']
        );
        $data = json_encode($data);
      }
      $this->error($upload->getError());
    }
    return $data;
  }
}