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
		$currentpage = I('currentpage');
		$perpage = I('perpage');
		$fields = I('fields');
		$embed = !!I('embed');
		$order = I('order');
		if(empty($order)){
			$order = 'aid desc';
		}
		$condition = array('if_delete = 0');
		$cfield = array('cname');
		$ret = D('Article')->getList($condition,$fields,$currentpage,$perpage,$order,$embed);
		$i = 0;
		foreach ($ret['data'] as $k) {
			$k['cname'] = D('Category','Service')->getCateByid($k['cid'],$cfield);
			$ret['data'][$i++] = $k;
		}
		$this->ajaxReturn(
			array(
				'code' => 1,
				'msg' => '获取文章列表成功',
				'data' => $ret
			)
		);
	}
}