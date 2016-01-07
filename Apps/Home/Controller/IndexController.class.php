<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
    	//数据过滤
    	$fileds = "aid,title,plaintxt,create_time,cid,rnum";
    	//排序
		$order = 'aid asc';
		$condition = array('if_delete = 0');
		$count = M('Article')->where($condition)->count();
		$Page = new \Think\Page($count,5);
		$show = $Page->show();
		$cfield = array('cname');
		$ret = M('Article')->where($condition)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
		$i = 0;
		foreach ($ret as $k) {
			$k['cname'] = D('Category','Service')->getCateByid($k['cid'],$cfield);
			$ret[$i++] = $k;
		}
		$this->assign('articles',$ret);
		$this->assign('page',$show);
    	$this->display();
    }

    public function detail()
    {
    	$this->display();
    }
}