<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" CONTENT="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="博客,唐春林,技术博客,唐春林技术博客">
    <link rel="shortcut icon" href="/Blog/Public/images/favicon.ico">
    <link href="/Blog/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Blog/Public/css/default.css" rel="stylesheet">
    <link href="/Blog/Public/css/style.css" rel="stylesheet">
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
    <script src="/Blog/Public/js/angular.min.js"></script>
    <script src="/Blog/Public/js/jquery.complexify.js"></script>
    <script src="/Blog/Public/js/jquery.placeholder.min.js"></script>
    <script src="/Blog/Public/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
    <script src="/Blog/Public/js/angular-sanitize.js"></script>
    <script src="/Blog/Public/home/index/app.js"></script>
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
<nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
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
                        <li><a href="#">学习笔记</a></li>
                        <li><a href="#">闲言碎语</a></li>
                        <li><a href="#">热点分享</a></li>
                        <li><a href="#">博客相关</a></li>
                    </ul>
                </li>
                <li><a href="#">相册</a></li>
                <li><a href="#">留言板</a></li>
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