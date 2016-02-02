<?php
//留言
namespace Admin\Controller;

use Think\Controller;

class MessageController extends CommonController{

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
        $list = D('Message')->getList();
        if($list){
            $i = 0;
            foreach ($list['data'] as $k) {
                $cond = array('uid' => $k['uid']);
                $user = D('Users')->getone($cond);
                $k['username'] = $user['username'];
                $list['data'][$i++] = $k;
            }
            $this->ajaxReturn(array('code' => 1,'msg' => '获取列表成功','data' => $list));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '获取失败'));
        }
    }

    public function reply()
    {
        $mid = I('mid');
        $cond = array('mid' => $mid);
        $message = D('Message')->getone($cond);
        $this->assign('message',$message);
        $this->display();
    }

    public function doReply()
    {
        $mid = I('mid');
        $data['rid'] = I('rid');
        $data['reply'] = I('reply');
        $cond = array('mid' => $mid);
        $res = D('Message')->update($cond,$data);
        if($res){
            $this->success('回复成功','index',2);
        }
        $this->error('回复失败','index',2);
    }

    public function delete()
    {
        $mid = I('mid');
        if(empty($mid)){
            $this->ajaxReturn(array('code' => -1,'para error'));
        }
        $condition = array('mid' => $mid);
        $res = D('Message')->deleteEntity($condition);
        if($res){
            $this->ajaxReturn(array('code' => 1,'msg' => '删除成功'));
        }else{
            $this->ajaxReturn(array('code' => 0,'msg' => '删除失败'));
        }
    }
}