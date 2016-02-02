<?php

namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	$this->display();
    }

    public function getlist()
    {
    	//数据过滤
    	$fileds = "aid,title,plaintxt,create_time,cid,rnum";
    	//排序
		$order = 'aid desc';
		$condition = array('if_delete = 0');
		$ret = D('Admin/Article')->getList($condition,$fileds,$order);
		$i = 0;
		foreach ($ret['data'] as $k) {
			$k['cname'] = D('Category','Service')->getCateByid($k['cid']);
            $k['path'] = D('CoverImg')->getone(array('aid' => $k['aid']));
			$ret['data'][$i++] = $k;
		}
		$this->ajaxReturn(array('code' => 1,'msg' => '获取成功','data' => $ret));
    }

    /**
     * 获取某一片具体的文章
     * @return [type] [description]
     */
    /*public function detail()
    {
    	$aid = I('aid');
    	$condition = array('aid' => $aid);
    	$res = D('Admin/Article')->getone($condition);
    	if($res){
    		$this->ajaxReturn(array('code' => 1,'msg' => 'success','data' => $res));
    	}else{
    		$this->ajaxReturn(array('code' => 0,'msg' => 'error'));
    	}
    }*/
    public function show()
    {
    	$aid = I('get.aid');
    	$condition = array('aid' => $aid);
    	$data = D('Admin/Article')->getone($condition);
        $cate = D('Admin/Category')->getone(array('cid' => $data['cid']));
        $user = D('Admin/Users')->getone(array('uid' => $data['cuid']));
        $data['cname'] = $cate['cname'];
        $data['author'] = $user['username'];
    	$field = 'rnum';
    	D('Admin/Article')->plusHit($condition,$field);
    	$this->assign('data',$data);
    	$this->display();
    }
}
