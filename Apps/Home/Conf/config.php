<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'                 =>2,    //2为去掉url中的index.php
    'URL_ROUTER_ON'             => true,  
    //路由规则
    'URL_ROUTE_RULES' => array(
    	'/^index$/' => 'Index/index',
        '/^article-(\d{1,5})$/' => 'Index/show?aid=:1',
    )
);