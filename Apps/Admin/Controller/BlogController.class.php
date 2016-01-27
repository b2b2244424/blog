<?php

namespace Admin\Controller;

use Think\Controller;

class BlogController extends Controller{

	public function index()
	{
		$this->display();
	}

	public function create()
	{
		$this->display();
	}

    /**
     * 增加日志
     * @return array
     */
    public function addone()
    {
        $data['title'] = I('title');
        $data['content'] = I('content');
        $data['create_time'] = date('Y-m-d H:i:s',time());
        try{
            D('Blog')->addone($data);
            $this->success('添加成功','index',3);
        }catch(Exception $e){
            $this->error('添加失败','create',3);
        }
    }

    /**
     * 获取日志列表
     * @return [type] [description]
     */
    public function getlist()
    {
        $res = D('Blog')->getList();
        if($res){
            $this->ajaxReturn(array('code' => 1,'msg' => '获取列表成功','data' => $res));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '获取列表失败'));
        }
    }
}