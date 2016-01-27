<?php

namespace Admin\Controller;

use Think\Contrller;

class SystemController extends CommonController{

    /**
     * 系统信息面板
     * @return [type] [description]
     */
    public function index()
    {
        $system = M('System')->where('1')->find();
        $this->assign('system',$system);
        $this->display();
    }

    public function update()
    {
        $data = $_POST;
        $sid = $data['sid'];
        $condition = array('sid' => $sid);
        $res = D('System')->update($condition,$data);
        if($res){
            $this->success('修改成功','index',2);
        }
        $this->error('修改失败','index',2);
    }
}