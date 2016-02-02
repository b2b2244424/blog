<?php

namespace Home\Controller;

use Think\Controller;

class MessageController extends CommonController
{
	public function index()
    {
        $this->display();
    }

    /**
     * 留言列表
     * @return [type] [description]
     */
    public function getlist()
    {
        $order = 'mid desc';
        $res = D('Message')->getList($condition,$field,$order);
        if($res){
            $this->ajaxReturn(array('code' => 1,'msg' => '获取留言列表成功','data' => $res));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '获取留言列表成功'));
        }
    }

    /**
     * 留言操作
     * @return [type] [description]
     */
    public function doMessage()
    {
        $data['content'] = I('content');
        $data['ctime'] = date('Y-m-d H:i:s',time());
        $data['uid'] = 2;
        if(empty($data)){
            $this->ajaxReturn(array('code' => -1,'msg' => '留言内容不能为空'));
        }
        $res = D('Message')->addone($data);
        if($res){
            $this->ajaxReturn(array('code' => 1,'msg' => '留言成功'));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '留言失败'));
        }
    }
}