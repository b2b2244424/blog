<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" CONTENT="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="博客,唐春林,技术博客,唐春林技术博客">
    <link rel="shortcut icon" href="/Blog/Public//Blog/Public/images/favicon.ico">
    <link href="/Blog/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Blog/Public/css/style.css" rel="stylesheet">
    <!--<script src="/Blog/Public/js/require.js" data-main="/Blog/Public/js/main"></script>-->
    <!--JS-->
    <script src="/Blog/Public/js/jquery.min.js"></script>
    <script src="/Blog/Public/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <title>首页</title>
</head>
<body>
<!--head start-->
<nav class="navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false"
                    data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Companion</a>
        </div>
        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.html">首页</a></li>
                <li><a href="article.html">文章</a></li>
                <li><a href="works.html">作品</a></li>
                <li><a href="#">关于我</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a data-toggle="modal" data-target="#login" data-whatever="@mdo" href="javascript:;">登录</a></li>
                <li><a data-toggle="modal" data-target="#register" data-whatever="@fat" href="javascript:;">注册</a></li>
            </ul>
        </div>
    </div>
</nav>
<!--bshare-->
<!--<a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a>
<script type="text/javascript" charset="utf-8"
        src="http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=3&amp;fs=4&amp;textcolor=#fff&amp;bgcolor=#19D&amp;text=分享到"></script>-->
<!--main content-->
<div class="container" style="min-height: 900px;">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><article>
            <div class="left-content clearfix">
                <div class="article-title col-md-12 col-xs-12">
                    <div class="title-heavy"></div>
                    <h4><?php echo ($v["title"]); ?></h4>
                </div>
                <div class="article-content center-block">
                    <div class="col-md-4"><img src="/Blog/Public/images/class1.jpg" style="width:100%"></div>
                    <div class="col-md-8"><?php echo ($v["plaintxt"]); ?></div>
                </div>
                <div class="article-desc">
                    <div class="col-md-10">
                    <ul>
                        <li data-toggle="tooltip" data-placement="right" title="发布日期"><i
                                class="glyphicon glyphicon-time"></i>&nbsp;<?php echo ($v["create_time"]); ?>
                        </li>
                        <li data-toggle="tooltip" data-placement="right" title="标签"><i
                                class="glyphicon glyphicon-tag"></i>&nbsp;<?php echo ($v["cname"]["cname"]); ?>
                        </li>
                        <li data-toggle="tooltip" data-placement="right" title="浏览"><i
                                class="glyphicon glyphicon-eye-open"></i>&nbsp;<?php echo ($v["rnum"]); ?>
                        </li>
                    </ul>
                    </div>
                    <a href="#" class="col-md-2"><button class="btn btn-primary">查看全文</button></a>
                </div>
            </div>
        </article><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php echo ($page); ?>
        </div>
        <!-- <div class="col-md-4 col-xs-6">
            <div class="row">
                
            </div>
        </div> -->
    </div>
</div>
<!--sidebar-->
<div class="toolbar">
    <a href="javascript:;" class="toolbar-item">
        <span class="toolbar-btn">
            <i class="toolbar-icon icon-wechat"></i>
            <span class="toolbar-text">公众<br>账号</span>
        </span>
        <span class="toolbar-layer toolbar-layer-weixin"></span>
    </a>
    <a href="mailto:tangchunlinit@163.com" class="toolbar-item">
        <span class="toolbar-btn">
            <i class="toolbar-icon icon-mail"></i>
            <span class="toolbar-text">意见<br>反馈</span>
        </span>
    </a>
    <a id="backTop" href="javascript:;" class="toolbar-item">
        <span class="toolbar-btn">
            <i class="toolbar-icon icon-shift"></i>
            <span class="toolbar-text">返回<br>顶部</span>
        </span>
    </a>
</div>
<div class="container-fluid modal-footer">
    Copyright@companion.me 2015
</div>
</body>
</html>