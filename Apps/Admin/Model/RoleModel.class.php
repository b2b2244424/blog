<?php

namespace Admin\Model;

use Think\Model;

class RoleModel extends CommonModel{

    protected $tableName = "role";
    protected $fieldsName = array(
        'rid' => '角色编号',
        'rolename' => '角色名称'
    );
}