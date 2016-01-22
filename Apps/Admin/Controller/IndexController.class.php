<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends CommonController 
{
    public function index()
    {   
        $anum = D('Article')->getArticleNum();
        $unum = D('Users')->getUsersNum();
        $info = array(
            'anum' => $anum,
            'unum' => $unum
        );
        $this->assign('info',$info);
        $this->display();
    }
}