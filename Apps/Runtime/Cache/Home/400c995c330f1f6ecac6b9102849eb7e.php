<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" CONTENT="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="博客,唐春林,技术博客,唐春林技术博客">
    <link rel="shortcut icon" href="/Blog/Public/images/favicon.ico">
    <link href="/Blog/Public/admin/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/Blog/Public/admin/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/Blog/Public/admin/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="/Blog/Public/admin/css/font.css" type="text/css" />
    <link rel="stylesheet" href="/Blog/Public/admin/css/app.css" type="text/css" />
    <link href="/Blog/Public/css/default.css" rel="stylesheet">
    <link href="/Blog/Public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/Blog/Public/css/sweetalert.css" type="text/css" />
    <script src="/Blog/Public/js/require.js" data-main="/Blog/Public/js/main"></script>
    <!--JS-->
    <script src="/Blog/Public/js/jquery.min.js"></script>
    <script src="/Blog/Public/js/bootstrap.min.js"></script>
    <!--<script src="/Blog/Public/js/canvastimer.js"></script>-->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script src="/Blog/Public/js/sweetalert.min.js"></script>
    <script src="/Blog/Public/js/angular.min.js"></script>
    <script src="/Blog/Public/js/jquery.complexify.js"></script>
    <script src="/Blog/Public/js/jquery.placeholder.min.js"></script>
    <script src="/Blog/Public/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
    <script src="/Blog/Public/js/angular-sanitize.js"></script>
    <title>首页</title>
    <script>
        $(function(){
            $('#password input[placeholder]').placeholder();
            $("#password").complexify({}, function(valid, complexity){
                if (!valid) {
                    $('#complexity').animate({'width':complexity + '%'}).removeClass('valid').addClass('invalid');
                } else {
                    $('#complexity').animate({'width':complexity + '%'}).removeClass('invalid').addClass('valid');
                }
                $('#complexity').html(Math.round(complexity) + '%');
            });
        });
    </script>
</head>
<body>
<!--head start-->
<nav class="navbar navbar-inverse  navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false"
                    data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('/index');?>">Companion</a>
        </div>
        <div class="collapse navbar-collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
    <li><a href="<?php echo U('/index');?>">首页</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">文章<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo U('Article/index');?>?c=php">PHP</a></li>
            <li><a href="<?php echo U('Article/list');?>?c=js">JavaScript</a></li>
            <li><a href="<?php echo U('Article/list');?>?c=python">Python</a></li>
            <li><a href="<?php echo U('Article/list');?>?c=linux">Linux</a></li>
            <li><a href="<?php echo U('Article/list');?>?c=storage">存储</a></li>
        </ul>
    </li>
    <li><a href="<?php echo U('/Album');?>">相册</a></li>
    <li><a href="#">音乐</a></li>
    <li><a href="<?php echo U('/Message/index');?>">留言板</a></li>
    <li><a href="#">关于我</a></li>
</ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a data-toggle="modal" data-target="#login" data-whatever="@mdo" href="javascript:;">登录</a></li>
                <li><a data-toggle="modal" data-target="#register" data-whatever="@fat" href="javascript:;">注册</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="login" tableindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">登录</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">用户名</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">密&nbsp;&nbsp;&nbsp;码</label>
            <input type="password" class="form-control" id="message-text">
          </div>
        </form>
      </div>
      <div class="button-group">
        <div class="col-md-2">
            <div class="others-login"><span>第三方登录</span></div>
        </div>
        <div class="col-md-1">
            <div class="qqlogin"><i class="icon-qq"></i></div>
        </div>
        <div class="col-md-1">
           <div class="weibologin"><i class="icon-weibo"></i></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary">登录</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="register" tableindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">注册用户</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">用户名</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">邮&nbsp;&nbsp;&nbsp;箱</label>
            <input type="email" class="form-control" id="message-text">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">密&nbsp;&nbsp;&nbsp;码</label>
            <input type="password" placeholder="请输入密码" id="password" class="form-control">
          </div>
          <div class="form-group">
              <div id="complexitywrap">
                  <div id="complexity">0%</div>
              </div>
          </div>
        </form>
      </div>
      <div class="button-group">
        <div class="col-md-2">
            <div class="others-login"><span>第三方登录</span></div>
        </div>
        <div class="col-md-1">
            <div class="qqlogin"><i class="icon-qq"></i></div>
        </div>
        <div class="col-md-1">
           <div class="weibologin"><i class="icon-weibo"></i></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-success">注册</button>
      </div>
    </div>
  </div>
</div>
<!--bshare-->
<!--<a class="bshareDiv" href="http://www.bshare.cn/share">分享按钮</a>
<script type="text/javascript" charset="utf-8"
        src="http://static.bshare.cn/b/buttonLite.js#uuid=&amp;style=3&amp;fs=4&amp;textcolor=#fff&amp;bgcolor=#19D&amp;text=分享到">
</script>-->
<!--banner-->
<script src="/Blog/Public/home/index/app.js"></script>
<div class="page-container">
        <!-- 开始运行滑块 -->  
        <div class="fullwidthbanner-container slider-main">
            <div class="fullwidthabnner">
                <ul id="revolutionul" style="display:none;">            
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="300" data-delay="6400" >
                            <a href="#"> <img src="/Blog/Public/images/bg6.jpg" alt=""></a>   
                        </li>
                        <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-delay="6400" >
                            <a href="#"><img src="/Blog/Public/images/bg10.jpg" alt=""></a>
                        </li>
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="300" data-delay="6400" >
                            <a href="#"><img src="/Blog/Public/images/bg11.jpg" alt=""></a>
                        </li>  
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="300" data-delay="6400" >
                            <a href="#"><img src="/Blog/Public/images/bg12.jpg" alt=""></a>                        
                        </li>
                        <li data-transition="fade" data-slotamount="8" data-masterspeed="300" data-delay="6400" >
                            <a href="#"><img src="/Blog/Public/images/bg13.jpg" alt=""></a>                        
                        </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div><!--进度条-->
            </div>
        </div>
        <!-- END  运行滑块 -->
</div>
<!--main content-->
<div class="container" style="min-height: 900px;" ng-app="IndexApp" ng-controller="IndexCrtl">
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <div class="newest-title">
                最新文章<span>New</span>
            </div>
        </div>
        <div class="col-md-4 col-xs-6">
            <div class="input-group">
                <input type="text" class="form-control" ng-model="search" ng-change="filter()" placeholder="关键字...">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="button">搜索</button>
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-xs-12">
            <article ng-repeat="article in filtered = (articles | filter:search | orderBy : predicate :reverse) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
            <div class="left-content clearfix">
                <div class="article-title col-md-12 col-xs-12">
                    <div class="title-heavy"></div>
                    <h4>{{article.title}}</h4>
                </div>
                <div class="article-content center-block">
                    <div class="col-md-4"><img src="{{article.path.path}}" style="width:100%;height:100px;"></div>
                    <div class="col-md-8">{{article.plaintxt}}</div>
                </div>
                <div class="article-desc">
                    <div class="col-md-10">
                    <ul>
                        <li data-toggle="tooltip" data-placement="right" title="发布日期"><i
                                class="glyphicon glyphicon-time"></i>&nbsp;{{article.create_time}}
                        </li>
                        <li data-toggle="tooltip" data-placement="right" title="标签"><i
                                class="glyphicon glyphicon-tag"></i>&nbsp;{{article.cname.cname}}
                        </li>
                        <li data-toggle="tooltip" data-placement="right" title="浏览"><i
                                class="glyphicon glyphicon-eye-open"></i>&nbsp;{{article.rnum}}
                        </li>
                    </ul>
                    </div>
                    <a href="article-{{article.aid}}" class="col-md-2"><button class="btn btn-primary">查看全文</button></a>
                </div>
            </div>
            </article>
            <div class="col-md-12" ng-show="filteredItems == 0">
                    <div class="col-md-12">
                        <p style="text-align: center;padding: 10px;font-size: 20px;color: #ccc"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;没有文章</p>
                    </div>
            </div>
            <div class="col-md-12" style="padding-left: 0" ng-show="filteredItems > 0">    
                <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
        </div>
        </div>
        <div class="col-md-4 col-xs-12">
            
            <div class="click-top">
                <div class="title-top">
                    <i class="glyphicon glyphicon-align-justify"></i>&nbsp;&nbsp;点击排行<!-- <span>Top</span> -->
                </div>
                <div class="click-top-list">
                    <p><i class="top-1">No.1</i><span>互联网创业潮流越来越猛互联网创业互联网联...<span></p>
                    <p><i class="top-2">No.2</i><span>互联网创业潮流越来越猛互联网创业互联网联...<span></p>
                    <p><i class="top-3">No.3</i><span>互联网创业潮流越来越猛互联网创业互联网联...<span></p>
                    <p><i class="top-4">No.4</i><span>互联网创业潮流越来越猛互联网创业互联网联...<span></p>
                    <p><i class="top-5">No.5</i><span>互联网创业潮流越来越猛互联网创业互联网联...<span></p>
                    <p><i class="top-6">No.6</i><span>互联网创业潮流越来越猛互联网创业互联网联...<span></p>
                    <p><i class="top-7">No.7</i><span>互联网创业潮流越来越猛互联网创业互联网联...<span></p>
                </div>
            </div>
            <!-- <div class="tools">
                <div class="online-tools">
                    <i class="glyphicon glyphicon-wrench"></i>&nbsp;&nbsp;在线工具
                </div>
                <div class="tools-list">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="tool-block"><a class="btn btn-default">MD5加密工具</a></div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="tool-block"><a class="btn btn-default">MD5加密工具</a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="tool-block"><a class="btn btn-default">MD5加密工具</a></div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="tool-block"><a class="btn btn-default">MD5加密工具</a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="tool-block"><a class="btn btn-default">MD5加密工具</a></div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="tool-block"><a class="btn btn-default">MD5加密工具</a></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="visitor">
                <div class="title-visitor">
                    <i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;最近访客
                </div>
                <div class="visitor-list">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                    <img data-toggle="tooltip" data-placement="top" title="唐春林" src="/Blog/Public/images/2.jpg">
                </div>
            </div>
            <div class="friend-link">
                <div class="title-friend-link">
                    <i class="glyphicon glyphicon-link"></i>&nbsp;&nbsp;友情链接
                </div>
                <div class="friend-link-list">
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--sidebar
<!--footer-->
<!-- <div class="toolbar">
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
</div> -->
<div class="container-fluid modal-footer">
    <ul class="nav pull-right">
        <li><a href="<?php echo U('/admin');?>">博客管理</a></li>
    </ul>
</div>
<script type="text/javascript" src="/Blog/Public/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="/Blog/Public/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="/Blog/Public/js/jquery.bxslider.min.js"></script>
    <script src="/Blog/Public/js/app.js"></script>
    <script src="/Blog/Public/js/index.js"></script> 
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });
    </script>
</body>
</html>