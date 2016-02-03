<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends CommonController 
{
    public function index()
    {   
        $a_cond = array('if_delete' => 0);
        $u_cond = array('if_delete' =>0,'if_blacklist' => 0);
        $l_cond = array('stop' => 0);
        $anum = D('Article')->getCount($a_cond);
        $unum = D('Users')->getCount($u_cond);
        $albumnum = D('Album')->getCount($a_cond);
        $mnum = D('Message')->getCount();
        $bnum = D('Blog')->getCount();
        $lnum = D('Link')->getCount($l_cond);
        $count = array(
            'anum' => $anum,
            'unum' => $unum,
            'albumnum' => $albumnum,
            'mnum' => $mnum,
            'bnum' => $bnum,
            'lnum' => $lnum
        );
        $this->assign('count',$count);
        $this->display();
    }
}