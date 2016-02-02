<?php

namespace Admin\Model;

use Think\Model;

class MessageModel extends CommonModel{

    protected $tableName = "message";
    protected $fieldsName = array(
        'mid' => '留言编号',
        'content' => '留言内容',
        'reply' => '回复内容',
        'ctime' => '留言时间',
        'rtime' => '回复时间',
        'uid' => '留言人编号',
        'rid' => '回复人编号'
    );
}