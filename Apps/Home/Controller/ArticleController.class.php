<?php
namespace Home\Controller;
use Think\Controller;

class ArticelController extends Controller
{
	public function index()
	{
		$this->display();
	}

    public function filter()
    {
        $cate = I('c');
        if($cate == 'php'){
            $cate = 1;
        }elseif($cate == 'js'){
            $cate = 2;
        }elseif($cate == 'python'){
            $cate = 3;
        }elseif($cate == 'storage'){
            $cate = 4;
        }elseif($cate == 'linux'){
            $cate = 5;
        }elseif($cate == 'css3'){
            $cate = 6;
        }else{
            $this->ajaxReturn(array('code' => -1,'para error'));
        }
        //数据过滤
        $fileds = "aid,title,plaintxt,create_time,cid,rnum";
        //排序
        $order = 'aid desc';
        $condition = array('if_delete = 0','cid' => $cate);
        $ret = D('Admin/Article')->getList($condition,$fileds,$order);
        $i = 0;
        foreach ($ret['data'] as $k) {
            $k['cname'] = D('Category','Service')->getCateByid($k['cid']);
            $k['path'] = D('CoverImg')->getone(array('aid' => $k['aid']));
            $ret['data'][$i++] = $k;
        }
        $this->ajaxReturn(array('code' => 1,'msg' => '获取成功','data' => $ret));
    }
}