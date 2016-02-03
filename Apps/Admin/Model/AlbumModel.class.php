<?php
namespace Admin\Model;

use Think\Model;

class AlbumModel extends CommonModel{
    protected $tableName = "album";
    protected $fieldsName = array(
        'aid' => '相册编号',
        'aname' => '相册名',
        'content' => '文章内容',
        'pnum' => '照片数',
        'if_delete' => '是否已删除',
        'tags' => '标签',
        'coverpid' => '封面图编号',
        'create_time' => '创建时间',
        'update_time' => '更新时间',
    );
}