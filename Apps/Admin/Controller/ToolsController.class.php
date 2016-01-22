<?php
/**
 * 工具箱
 */
namespace Admin\Controller;

use Think\Controller;

class ToolsController extends CommonController{

    /**
     * 图标库
     * @return [type] [description]
     */
    public function icons()
    {
        $this->display('Tools:icons');
    }

    /**
     * 按钮
     * @return [type] [description]
     */
    public function buttons()
    {
        $this->display('Tools:buttons');
    }

    /**
     * 静态图表
     * @return [type] [description]
     */
    public function staticChart()
    {
        $this->display('Tools:staticChart');
    }

    /**
     * 数据表
     * @return [type] [description]
     */
    public function dataChart()
    {
        $this->display('Tools:dataChart');
    }
}