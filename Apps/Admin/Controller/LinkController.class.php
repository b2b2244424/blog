<?php

namespace Admin\Controller;

use Think\Controller;

class LinkController extends CommonController{

    public function index()
    {
        $this->display();
    }

    /**
     * 链接列表
     * @return [type] [description]
     */
    public function getlist()
    {
        $res = D('Link')->getList();
        $this->ajaxReturn(array('code' => 1,'data' => $res));
    }

    public function open()
    {
        $lid = I('lid');
        $condtion = array('lid' => $lid);
        $data = array('stop' => 0);
        $res = D('Link')->update($condtion,$data);
        if($res){
            $this->ajaxReturn(array('code' => 1,'.msg' => '启用成功'));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '启用失败'));
        }
    }

    public function stop()
    {
        $lid = I('lid');
        $condtion = array('lid' => $lid);
        $data = array('stop' => 1);
        $res = D('Link')->update($condtion,$data);
        if($res){
            $this->ajaxReturn(array('code' => 1,'.msg' => '停用成功'));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '停用失败'));
        }
    }

}