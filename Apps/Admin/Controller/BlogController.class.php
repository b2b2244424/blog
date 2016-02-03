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
        $data['content'] = htmlspecialchars_decode(I('content'));
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
        $order = 'create_time desc';
        $res = D('Blog')->getList($cond = '',$fields = '',$order);
        if($res){
            $this->ajaxReturn(array('code' => 1,'msg' => '获取列表成功','data' => $res));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '获取列表失败'));
        }
    }

    public function deleteone()
    {
        $bid = I('bid');
        $cond = array('bid' => $bid);
        $res = D('Blog')->deleteEntity($cond);
        if($res){
            $this->ajaxReturn(array('code' => 1,'msg' => '删除成功'));
        }
        $this->ajaxReturn(array('code' => 0,'msg' => '删除失败'));
    }
}