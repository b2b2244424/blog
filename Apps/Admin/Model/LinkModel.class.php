<?php

namespace Admin\Model;

use Think\Model;

class LinkModel extends CommonModel{

    protected $tableName = "link";
    protected $fieldsNamw = array(
        'lid' => 'No',
        'linkname' => '链接名称',
        'linkurl' => '链接地址',
        'linkuser' => '雇主',
        'stop' => '是否停运'
    );
}