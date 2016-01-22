<?php

namespace Admin\Model;

use Think\Model;

class CoverImgModel extends CommonModel{

    protected $tableName = "coverimg";
    protected $fieldsName = array(
        'cid' => '图片编号',
        'path' => '路径',
        'aid' => '对应文章编号',
        'ext' =>'文件后缀',
        'size' =>'文件大小'
    );
}