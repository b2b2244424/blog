<?php

namespace Admin\Model;

use Think\Model;

class BlogModel extends CommonModel
{
    protected $tableName = "blog";
    protected $fieldsName = array(
        'bid' => '日志编号',
        'title' => '标题'
        'content' => '内容',
        'create_time' => '创建时间'
    );
}