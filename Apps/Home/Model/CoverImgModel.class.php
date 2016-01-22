<?php
namespace Home\Model;

use Think\Model;

class CoverImgModel extends CommonModel{
    protected $tableName = "coverimg";
    protected $fieldsName = array(
        'cid' => '编号',
        'path' => '图片路径',
        'aid' => '文章id'
    );
}