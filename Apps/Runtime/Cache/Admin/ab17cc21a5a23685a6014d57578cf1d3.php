<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>后台登录</title>
	<link rel="stylesheet" type="text/css" href="/Blog/Public/admin/css/default.css">
	<link rel="stylesheet" type="text/css" href="/Blog/Public/admin/css/styles.css">
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<article class="htmleaf-container">
		<header class="htmleaf-header">

			<div class="htmleaf-links">
			</div>
		</header>
		<form action="" method="post">
		<div class="panel-lite">
		  <div class="thumbur">
		    <div class="icon-lock"></div>
		  </div>
		  <h4>管理员登录</h4>
		  <div class="form-group">
		    <input required="required" name="username" class="form-control"/>
		    <label class="form-label">用户名    </label>
		  </div>
		  <div class="form-group">
		    <input type="password" name="password" required="required" class="form-control"/>
		    <label class="form-label">密　码</label>
		  </div><a href="#">忘记密码?</a>
		  <button type="submit" class="floating-btn"><i class="icon-arrow"></i></button>
		</div>
	    </form>
	</article>
</body>
</html>