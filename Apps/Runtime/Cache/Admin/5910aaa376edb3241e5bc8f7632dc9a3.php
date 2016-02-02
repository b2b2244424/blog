<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh" class="app">
<head>  
  <meta charset="utf-8" />
  <title>管理后台</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="/Blog/Public/admin/js/jPlayer/jplayer.flat.css" type="text/css" />
  <link rel="stylesheet" href="/Blog/Public/admin/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/Blog/Public/admin/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="/Blog/Public/admin/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/Blog/Public/admin/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="/Blog/Public/admin/css/font.css" type="text/css" />
  <link rel="stylesheet" href="/Blog/Public/admin/css/app.css" type="text/css" />
  <link rel="stylesheet" href="/Blog/Public/css/sweetalert.css" type="text/css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/Blog/Public/admin/css/index.css">
  <link rel="shortcut icon" href="/Blog/Public/images/admin.ico" type="image/x-icon" />
  <script src="/Blog/Public/admin/js/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/Blog/Public/admin/js/ie/html5shiv.js"></script>
    <script src="/Blog/Public/admin/js/ie/respond.min.js"></script>
    <script src="/Blog/Public/admin/js/ie/excanvas.js"></script>
  <![endif]-->
  <script src="/Blog/Public/js/sweetalert.min.js"></script>
  <script src="/Blog/Public/js/angular.min.js"></script>
  <script src="/Blog/Public/js/angular-sanitize.js"></script>
  <script src="/Blog/Public/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
</head>
<body class="">
  <section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-info nav-xs">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
        <a href="<?php echo U('Admin/Index/index');?>" class="navbar-brand text-lt">
          <i class="icon-home"></i>
          <span class="hidden-nav-xs m-l-sm">Companion</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="icon-settings"></i>
        </a>
      </div>      <ul class="nav navbar-nav hidden-xs">
        <li>
          <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
            <i class="fa fa-indent text"></i>
            <i class="fa fa-dedent text-active"></i>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
            <input type="text" class="form-control input-sm no-border rounded" placeholder="搜索...">
          </div>
        </div>
      </form>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
          <li class="hidden-xs">
            <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="badge badge-sm up bg-danger count">0</span>
            </a>
            <section class="dropdown-menu aside-xl animated fadeInUp">
              <section class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>你有 <span class="count">0</span> 个处理消息</strong>
                </div>
                <div class="list-group list-group-alt">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="/Blog/Public/admin/images/a0.png" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">查看所有</a>
                </div>
              </section>
            </section>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="/Blog/Public/admin/images/a0.png" alt="...">
              </span>
              你好，<?php echo ($username); ?><b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">            
              <li>
                <span class="arrow top"></span>
                <a href="#">设置</a>
              </li>
              <li>
                <a href="profile.html">资料</a>
              </li>
              <li>
                <a href="#">
                  <span class="badge bg-danger pull-right">3</span>
                  提醒
                </a>
              </li>
              <li>
                <a href="docs.html">帮助</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="<?php echo U('Login/logout');?>" data-toggle="ajaxModal" >退出</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black dk nav-xs aside hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f-md scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <ul class="nav bg clearfix">
                    <li>
                      <a href="<?php echo U('Admin/Music/index');?>">
                        <i class="icon-music-tone-alt icon text-info"></i>
                        <span class="font-bold">音乐</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/Blog/index');?>">
                        <i class="icon-drawer icon text-primary-lter"></i>
                        <span class="font-bold">日志</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/Article/index');?>">
                        <i class="icon-list icon  text-info-dker"></i>
                        <span class="font-bold">文章</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/Message/index');?>">
                        <i class="icon-bubbles icon  text-success"></i>
                        <span class="font-bold">留言</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/Users/index');?>">
                        <i class="icon-users icon  text-primary"></i>
                        <span class="font-bold">用户</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/About');?>">
                        <i class="icon-user icon text-info"></i>
                        <span class="font-bold">关于我</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/Link/index');?>">
                        <i class="icon-link icon  text-info-dker"></i>
                        <span class="font-bold">链接管理</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/Permission/index');?>">
                        <i class="icon-wrench icon  text-danger"></i>
                        <span class="font-bold">权限管理</span>
                      </a>
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/System/index');?>">
                        <i class="icon-settings icon  text-warning"></i>
                        <span class="font-bold">系统设置</span>
                      </a>
                    </li>
                    <li class="m-b hidden-nav-xs"></li>
                  </ul>
                  <ul class="nav" data-ride="collapse">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      开发者
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="fa fa-angle-left text"></i>
                          <i class="fa fa-angle-down text-active"></i>
                        </span>
                        <i class="icon-screen-desktop icon">
                        </i>
                        <span>布局</span>
                      </a>
                      <ul class="nav dk text-sm">
                        <li >
                          <a href="layout-color.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>颜色选项</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-boxed.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>网格布局</span>
                          </a>
                        </li>
                        <li >
                          <a href="layout-fluid.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>流布局</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="fa fa-angle-left text"></i>
                          <i class="fa fa-angle-down text-active"></i>
                        </span>
                        <i class="icon-chemistry icon">
                        </i>
                        <span>UI工具箱</span>
                      </a>
                      <ul class="nav dk text-sm">
                        <li >
                          <a href="<?php echo U('Admin/Tools/buttons');?>" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>按钮</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo U('Admin/Tools/icons');?>" class="auto">                            
                            <b class="badge bg-info pull-right">369</b>                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>图标库</span>
                          </a>
                        </li><li >
                          <a href="http://www.weidea.net" class="auto">                            
                            <b class="badge bg-info pull-right">369</b>                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>更多</span>
                          </a>
                        </li>
                        <li >
                          <a href="grid.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>栅格</span>
                          </a>
                        </li>
                        <li >
                          <a href="widgets.html" class="auto">                            
                            <b class="badge bg-dark pull-right">8</b>                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>小工具</span>
                          </a>
                        </li>
                        <li >
                          <a href="components.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>组件</span>
                          </a>
                        </li>
                        <li >
                          <a href="list.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>List group</span>
                          </a>
                        </li>
                        <li >
                          <a href="#table" class="auto">                            
                            <span class="pull-right text-muted">
                              <i class="fa fa-angle-left text"></i>
                              <i class="fa fa-angle-down text-active"></i>
                            </span>                            
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>表格</span>
                          </a>
                          <ul class="nav dker">
                            <li >
                              <a href="<?php echo U('Admin/Tools/staticTable');?>">
                                <i class="fa fa-angle-right"></i>
                                <span>静态表格</span>
                              </a>
                            </li>
                            <li >
                              <a href="<?php echo U('Admin/Tools/dataTable');?>">
                                <i class="fa fa-angle-right"></i>
                                <span>数据表</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li >
                          <a href="#form" class="auto">                            
                            <span class="pull-right text-muted">
                              <i class="fa fa-angle-left text"></i>
                              <i class="fa fa-angle-down text-active"></i>
                            </span>                            
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>表单</span>
                          </a>
                          <ul class="nav dker">
                            <li >
                              <a href="form-elements.html">
                                <i class="fa fa-angle-right"></i>
                                <span>表单元素</span>
                              </a>
                            </li>
                            <li >
                              <a href="form-validation.html">
                                <i class="fa fa-angle-right"></i>
                                <span>表单约束</span>
                              </a>
                            </li>
                            <li >
                              <a href="form-wizard.html">
                                <i class="fa fa-angle-right"></i>
                                <span>表单向导</span>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li >
                          <a href="chart.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>表格</span>
                          </a>
                        </li>
                        <li >
                          <a href="portlet.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Portlet</span>
                          </a>
                        </li>
                        <li >
                          <a href="timeline.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Timeline</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#" class="auto">
                        <span class="pull-right text-muted">
                          <i class="fa fa-angle-left text"></i>
                          <i class="fa fa-angle-down text-active"></i>
                        </span>
                        <i class="icon-grid icon">
                        </i>
                        <span>页面</span>
                      </a>
                      <ul class="nav dk text-sm">
                        <li >
                          <a href="profile.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>个人资料</span>
                          </a>
                        </li>
                        <li >
                          <a href="blog.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Blog</span>
                          </a>
                        </li>
                        <li >
                          <a href="invoice.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Invoice</span>
                          </a>
                        </li>
                        <li >
                          <a href="gmap.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Google Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="jvectormap.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Vector Map</span>
                          </a>
                        </li>
                        <li >
                          <a href="signin.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Signin</span>
                          </a>
                        </li>
                        <li >
                          <a href="signup.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Signup</span>
                          </a>
                        </li>
                        <li >
                          <a href="404.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>404</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <div class="bg hidden-xs ">
                  <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">                        
                        <img src="/Blog/Public/admin/images/a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt"><?php echo ($username); ?></strong> 
                          <b class="caret"></b>
                        </span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight aside text-left">                      
                      <li>
                        <span class="arrow bottom hidden-nav-xs"></span>
                        <a href="#">设置</a>
                      </li>
                      <li>
                        <a href="profile.html">资料</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          提醒
                        </a>
                      </li>
                      <li>
                        <a href="docs.html">帮助</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="href="<?php echo U('Login/logout');?>"" data-toggle="ajaxModal" >退出</a>
                      </li>
                    </ul>
                  </div>
                </div>            
              </footer>
          </section>
        </aside>
<section id="content">
          <section class="vbox">
            <section class="scrollable wrapper">
              <h3 class="font-thin m-t-xs">简单图标</h3>
              <section class="row list-icon" id="classes">
                <div class="col-md-3 col-sm-4">
                    <i class="icon-user"></i>
                    icon-user
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-user-female"></i>
                    icon-user-female
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-users"></i>
                    icon-users
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-user-follow"></i>
                    icon-user-follow
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-user-following"></i>
                    icon-user-following
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-user-unfollow"></i>
                    icon-user-unfollow
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-trophy"></i>
                    icon-trophy
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-speedometer"></i>
                    icon-speedometer
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-social-youtube"></i>
                    icon-social-youtube
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-social-twitter"></i>
                    icon-social-twitter
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-social-tumblr"></i>
                    icon-social-tumblr
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-social-facebook"></i>
                    icon-social-facebook
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-social-dropbox"></i>
                    icon-social-dropbox
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-social-dribbble"></i>
                    icon-social-dribbble
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-shield"></i>
                    icon-shield
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-screen-tablet"></i>
                    icon-screen-tablet
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-screen-smartphone"></i>
                    icon-screen-smartphone
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-screen-desktop"></i>
                    icon-screen-desktop
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-plane"></i>
                    icon-plane
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-notebook"></i>
                    icon-notebook
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-moustache"></i>
                    icon-moustache
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-mouse"></i>
                    icon-mouse
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-magnet"></i>
                    icon-magnet
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-magic-wand"></i>
                    icon-magic-wand
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-hourglass"></i>
                    icon-hourglass
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-graduation"></i>
                    icon-graduation
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-ghost"></i>
                    icon-ghost
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-game-controller"></i>
                    icon-game-controller
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-fire"></i>
                    icon-fire
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-eyeglasses"></i>
                    icon-eyeglasses
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-envelope-open"></i>
                    icon-envelope-open
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-envelope-letter"></i>
                    icon-envelope-letter
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-energy"></i>
                    icon-energy
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-emoticon-smile"></i>
                    icon-emoticon-smile
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-disc"></i>
                    icon-disc
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-cursor-move"></i>
                    icon-cursor-move
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-crop"></i>
                    icon-crop
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-credit-card"></i>
                    icon-credit-card
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-chemistry"></i>
                    icon-chemistry
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-bell"></i>
                    icon-bell
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-badge"></i>
                    icon-badge
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-anchor"></i>
                    icon-anchor
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-action-redo"></i>
                    icon-action-redo
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-action-undo"></i>
                    icon-action-undo
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-bag"></i>
                    icon-bag
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-basket"></i>
                    icon-basket
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-basket-loaded"></i>
                    icon-basket-loaded
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-book-open"></i>
                    icon-book-open
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-briefcase"></i>
                    icon-briefcase
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-bubbles"></i>
                    icon-bubbles
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-calculator"></i>
                    icon-calculator
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-call-end"></i>
                    icon-call-end
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-call-in"></i>
                    icon-call-in
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-call-out"></i>
                    icon-call-out
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-compass"></i>
                    icon-compass
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-cup"></i>
                    icon-cup
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-diamond"></i>
                    icon-diamond
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-direction"></i>
                    icon-direction
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-directions"></i>
                    icon-directions
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-docs"></i>
                    icon-docs
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-drawer"></i>
                    icon-drawer
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-drop"></i>
                    icon-drop
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-earphones"></i>
                    icon-earphones
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-earphones-alt"></i>
                    icon-earphones-alt
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-feed"></i>
                    icon-feed
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-film"></i>
                    icon-film
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-folder-alt"></i>
                    icon-folder-alt
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-frame"></i>
                    icon-frame
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-globe"></i>
                    icon-globe
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-globe-alt"></i>
                    icon-globe-alt
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-handbag"></i>
                    icon-handbag
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-layers"></i>
                    icon-layers
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-map"></i>
                    icon-map
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-picture"></i>
                    icon-picture
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-pin"></i>
                    icon-pin
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-playlist"></i>
                    icon-playlist
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-present"></i>
                    icon-present
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-printer"></i>
                    icon-printer
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-puzzle"></i>
                    icon-puzzle
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-speech"></i>
                    icon-speech
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-vector"></i>
                    icon-vector
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-wallet"></i>
                    icon-wallet
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-arrow-down"></i>
                    icon-arrow-down
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-arrow-left"></i>
                    icon-arrow-left
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-arrow-right"></i>
                    icon-arrow-right
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-arrow-up"></i>
                    icon-arrow-up
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-bar-chart"></i>
                    icon-bar-chart
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-bulb"></i>
                    icon-bulb
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-calendar"></i>
                    icon-calendar
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-control-end"></i>
                    icon-control-end
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-control-forward"></i>
                    icon-control-forward
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-control-pause"></i>
                    icon-control-pause
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-control-play"></i>
                    icon-control-play
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-control-rewind"></i>
                    icon-control-rewind
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-control-start"></i>
                    icon-control-start
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-cursor"></i>
                    icon-cursor
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-dislike"></i>
                    icon-dislike
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-equalizer"></i>
                    icon-equalizer
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-graph"></i>
                    icon-graph
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-grid"></i>
                    icon-grid
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-home"></i>
                    icon-home
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-like"></i>
                    icon-like
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-list"></i>
                    icon-list
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-login"></i>
                    icon-login
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-logout"></i>
                    icon-logout
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-loop"></i>
                    icon-loop
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-microphone"></i>
                    icon-microphone
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-music-tone"></i>
                    icon-music-tone
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-music-tone-alt"></i>
                    icon-music-tone-alt
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-note"></i>
                    icon-note
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-pencil"></i>
                    icon-pencil
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-pie-chart"></i>
                    icon-pie-chart
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-question"></i>
                    icon-question
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-rocket"></i>
                    icon-rocket
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-share"></i>
                    icon-share
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-share-alt"></i>
                    icon-share-alt
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-shuffle"></i>
                    icon-shuffle
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-size-actual"></i>
                    icon-size-actual
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-size-fullscreen"></i>
                    icon-size-fullscreen
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-support"></i>
                    icon-support
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-tag"></i>
                    icon-tag
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-trash"></i>
                    icon-trash
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-umbrella"></i>
                    icon-umbrella
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-wrench"></i>
                    icon-wrench
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-ban"></i>
                    icon-ban
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-bubble"></i>
                    icon-bubble
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-camcorder"></i>
                    icon-camcorder
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-camera"></i>
                    icon-camera
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-check"></i>
                    icon-check
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-clock"></i>
                    icon-clock
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-close"></i>
                    icon-close
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-cloud-download"></i>
                    icon-cloud-download
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-cloud-upload"></i>
                    icon-cloud-upload
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-doc"></i>
                    icon-doc
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-envelope"></i>
                    icon-envelope
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-eye"></i>
                    icon-eye
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-flag"></i>
                    icon-flag
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-folder"></i>
                    icon-folder
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-heart"></i>
                    icon-heart
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-info"></i>
                    icon-info
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-key"></i>
                    icon-key
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-link"></i>
                    icon-link
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-lock"></i>
                    icon-lock
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-lock-open"></i>
                    icon-lock-open
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-magnifier"></i>
                    icon-magnifier
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-magnifier-add"></i>
                    icon-magnifier-add
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-magnifier-remove"></i>
                    icon-magnifier-remove
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-paper-clip"></i>
                    icon-paper-clip
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-paper-plane"></i>
                    icon-paper-plane
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-plus"></i>
                    icon-plus
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-pointer"></i>
                    icon-pointer
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-power"></i>
                    icon-power
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-refresh"></i>
                    icon-refresh
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-reload"></i>
                    icon-reload
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-settings"></i>
                    icon-settings
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-star"></i>
                    icon-star
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-symbol-female"></i>
                    icon-symbol-female
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-symbol-male"></i>
                    icon-symbol-male
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-target"></i>
                    icon-target
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-volume-1"></i>
                    icon-volume-1
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-volume-2"></i>
                    icon-volume-2
                </div>
                <div class="col-md-3 col-sm-4">
                    <i class="icon-volume-off"></i>
                    icon-volume-off
                </div>
              </section>
              <h3 class="font-thin">FontAwesome! <span class="label label-lg bg-info">4.0</span></h3>
              <div>
                <section id="web-application">
                  <h4 class="page-header">Web应用图标</h4>

                  <div class="row list-icon">                  
                      <div class="col-md-3 col-sm-4"><i class="fa fa-adjust"></i> fa-adjust</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-anchor"></i> fa-anchor</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-archive"></i> fa-archive</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-asterisk"></i> fa-asterisk</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ban"></i> fa-ban</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bar-chart-o"></i> fa-bar-chart-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-barcode"></i> fa-barcode</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bars"></i> fa-bars</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-beer"></i> fa-beer</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bell"></i> fa-bell</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bell-o"></i> fa-bell-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bolt"></i> fa-bolt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-book"></i> fa-book</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark"></i> fa-bookmark</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bookmark-o"></i> fa-bookmark-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-briefcase"></i> fa-briefcase</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bug"></i> fa-bug</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-building-o"></i> fa-building-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bullhorn"></i> fa-bullhorn</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bullseye"></i> fa-bullseye</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-calendar"></i> fa-calendar</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-calendar-o"></i> fa-calendar-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-camera"></i> fa-camera</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-camera-retro"></i> fa-camera-retro</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-certificate"></i> fa-certificate</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check"></i> fa-check</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle"></i> fa-check-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-circle-o"></i> fa-check-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-clock-o"></i> fa-clock-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cloud"></i> fa-cloud</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-download"></i> fa-cloud-download</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cloud-upload"></i> fa-cloud-upload</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-code"></i> fa-code</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-code-fork"></i> fa-code-fork</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-coffee"></i> fa-coffee</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cog"></i> fa-cog</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cogs"></i> fa-cogs</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comment"></i> fa-comment</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comment-o"></i> fa-comment-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comments"></i> fa-comments</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-comments-o"></i> fa-comments-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-compass"></i> fa-compass</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-credit-card"></i> fa-credit-card</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-crop"></i> fa-crop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-crosshairs"></i> fa-crosshairs</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cutlery"></i> fa-cutlery</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dashboard"></i> fa-dashboard <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-desktop"></i> fa-desktop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-download"></i> fa-download</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-edit"></i> fa-edit <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-h"></i> fa-ellipsis-h</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ellipsis-v"></i> fa-ellipsis-v</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-envelope"></i> fa-envelope</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-envelope-o"></i> fa-envelope-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exchange"></i> fa-exchange</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation"></i> fa-exclamation</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-circle"></i> fa-exclamation-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-exclamation-triangle"></i> fa-exclamation-triangle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-external-link"></i> fa-external-link</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-external-link-square"></i> fa-external-link-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eye"></i> fa-eye</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eye-slash"></i> fa-eye-slash</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-female"></i> fa-female</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fighter-jet"></i> fa-fighter-jet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-film"></i> fa-film</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-filter"></i> fa-filter</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fire"></i> fa-fire</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fire-extinguisher"></i> fa-fire-extinguisher</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flag"></i> fa-flag</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flag-checkered"></i> fa-flag-checkered</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flag-o"></i> fa-flag-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flash"></i> fa-flash <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flask"></i> fa-flask</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder"></i> fa-folder</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder-o"></i> fa-folder-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open"></i> fa-folder-open</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-folder-open-o"></i> fa-folder-open-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-frown-o"></i> fa-frown-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gamepad"></i> fa-gamepad</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gavel"></i> fa-gavel</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gear"></i> fa-gear <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gears"></i> fa-gears <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gift"></i> fa-gift</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-glass"></i> fa-glass</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-globe"></i> fa-globe</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-group"></i> fa-group <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hdd-o"></i> fa-hdd-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-headphones"></i> fa-headphones</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-heart"></i> fa-heart</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-heart-o"></i> fa-heart-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-home"></i> fa-home</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-inbox"></i> fa-inbox</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-info"></i> fa-info</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-info-circle"></i> fa-info-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-key"></i> fa-key</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-keyboard-o"></i> fa-keyboard-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-laptop"></i> fa-laptop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-leaf"></i> fa-leaf</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-legal"></i> fa-legal <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-lemon-o"></i> fa-lemon-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-level-down"></i> fa-level-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-level-up"></i> fa-level-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-lightbulb-o"></i> fa-lightbulb-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-location-arrow"></i> fa-location-arrow</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-lock"></i> fa-lock</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-magic"></i> fa-magic</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-magnet"></i> fa-magnet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mail-forward"></i> fa-mail-forward <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply"></i> fa-mail-reply <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mail-reply-all"></i> fa-mail-reply-all</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-male"></i> fa-male</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-map-marker"></i> fa-map-marker</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-meh-o"></i> fa-meh-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-microphone"></i> fa-microphone</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-microphone-slash"></i> fa-microphone-slash</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus"></i> fa-minus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-circle"></i> fa-minus-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mobile"></i> fa-mobile</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-mobile-phone"></i> fa-mobile-phone <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-moon-o"></i> fa-moon-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-music"></i> fa-music</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pencil"></i> fa-pencil</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square"></i> fa-pencil-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pencil-square-o"></i> fa-pencil-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-phone"></i> fa-phone</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-phone-square"></i> fa-phone-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-picture-o"></i> fa-picture-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plane"></i> fa-plane</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus"></i> fa-plus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-circle"></i> fa-plus-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-power-off"></i> fa-power-off</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-print"></i> fa-print</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-puzzle-piece"></i> fa-puzzle-piece</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-qrcode"></i> fa-qrcode</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-question"></i> fa-question</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-question-circle"></i> fa-question-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-quote-left"></i> fa-quote-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-quote-right"></i> fa-quote-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-random"></i> fa-random</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-refresh"></i> fa-refresh</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-reply"></i> fa-reply</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-reply-all"></i> fa-reply-all</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-retweet"></i> fa-retweet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-road"></i> fa-road</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rocket"></i> fa-rocket</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rss"></i> fa-rss</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rss-square"></i> fa-rss-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-search"></i> fa-search</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-search-minus"></i> fa-search-minus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-search-plus"></i> fa-search-plus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-share"></i> fa-share</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-share-square"></i> fa-share-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-share-square-o"></i> fa-share-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-shield"></i> fa-shield</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-shopping-cart"></i> fa-shopping-cart</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sign-in"></i> fa-sign-in</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sign-out"></i> fa-sign-out</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-signal"></i> fa-signal</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sitemap"></i> fa-sitemap</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-smile-o"></i> fa-smile-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort"></i> fa-sort</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-asc"></i> fa-sort-alpha-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-alpha-desc"></i> fa-sort-alpha-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-asc"></i> fa-sort-amount-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-amount-desc"></i> fa-sort-amount-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-asc"></i> fa-sort-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-desc"></i> fa-sort-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-down"></i> fa-sort-down <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-asc"></i> fa-sort-numeric-asc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-numeric-desc"></i> fa-sort-numeric-desc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sort-up"></i> fa-sort-up <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-spinner"></i> fa-spinner</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star"></i> fa-star</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half"></i> fa-star-half</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-empty"></i> fa-star-half-empty <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-full"></i> fa-star-half-full <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-half-o"></i> fa-star-half-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-star-o"></i> fa-star-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-subscript"></i> fa-subscript</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-suitcase"></i> fa-suitcase</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-sun-o"></i> fa-sun-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-superscript"></i> fa-superscript</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tablet"></i> fa-tablet</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tachometer"></i> fa-tachometer</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tag"></i> fa-tag</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tags"></i> fa-tags</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tasks"></i> fa-tasks</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-terminal"></i> fa-terminal</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumb-tack"></i> fa-thumb-tack</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-down"></i> fa-thumbs-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-down"></i> fa-thumbs-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-o-up"></i> fa-thumbs-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-thumbs-up"></i> fa-thumbs-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ticket"></i> fa-ticket</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-times"></i> fa-times</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle"></i> fa-times-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-times-circle-o"></i> fa-times-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tint"></i> fa-tint</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-trash-o"></i> fa-trash-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-trophy"></i> fa-trophy</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-truck"></i> fa-truck</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-umbrella"></i> fa-umbrella</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unlock"></i> fa-unlock</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unlock-alt"></i> fa-unlock-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unsorted"></i> fa-unsorted <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-upload"></i> fa-upload</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-user"></i> fa-user</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-users"></i> fa-users</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-video-camera"></i> fa-video-camera</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-volume-down"></i> fa-volume-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-volume-off"></i> fa-volume-off</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-volume-up"></i> fa-volume-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-warning"></i> fa-warning <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-wrench"></i> fa-wrench</div>
                    
                  </div>

                </section>

                <section id="form-control">
                  <h4 class="page-header">表单常用图标</h4>

                  <div class="row list-icon">
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square"></i> fa-check-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-check-square-o"></i> fa-check-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle"></i> fa-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-circle-o"></i> fa-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dot-circle-o"></i> fa-dot-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square"></i> fa-minus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-minus-square-o"></i> fa-minus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square-o"></i> fa-plus-square-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square"></i> fa-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-square-o"></i> fa-square-o</div>
                    
                  </div>

                </section>

                <section id="currency">
                  <h4 class="page-header">货币图标</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cny"></i> fa-cny <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dollar"></i> fa-dollar <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eur"></i> fa-eur</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-euro"></i> fa-euro <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gbp"></i> fa-gbp</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-inr"></i> fa-inr</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-jpy"></i> fa-jpy</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-krw"></i> fa-krw</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-money"></i> fa-money</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rmb"></i> fa-rmb <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rouble"></i> fa-rouble <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rub"></i> fa-rub</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ruble"></i> fa-ruble <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rupee"></i> fa-rupee <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-try"></i> fa-try</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-turkish-lira"></i> fa-turkish-lira <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-usd"></i> fa-usd</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-won"></i> fa-won <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-yen"></i> fa-yen <span class="text-muted">(alias)</span></div>
                    
                  </div>

                </section>

                <section id="text-editor">
                  <h4 class="page-header">文本编辑器图标</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-center"></i> fa-align-center</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-justify"></i> fa-align-justify</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-left"></i> fa-align-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-align-right"></i> fa-align-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bold"></i> fa-bold</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chain"></i> fa-chain <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chain-broken"></i> fa-chain-broken</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-clipboard"></i> fa-clipboard</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-columns"></i> fa-columns</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-copy"></i> fa-copy <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-cut"></i> fa-cut <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dedent"></i> fa-dedent <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eraser"></i> fa-eraser</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file"></i> fa-file</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file-o"></i> fa-file-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file-text"></i> fa-file-text</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-file-text-o"></i> fa-file-text-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-files-o"></i> fa-files-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-floppy-o"></i> fa-floppy-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-font"></i> fa-font</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-indent"></i> fa-indent</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-italic"></i> fa-italic</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-link"></i> fa-link</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list"></i> fa-list</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list-alt"></i> fa-list-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list-ol"></i> fa-list-ol</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-list-ul"></i> fa-list-ul</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-outdent"></i> fa-outdent</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-paperclip"></i> fa-paperclip</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-paste"></i> fa-paste <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-repeat"></i> fa-repeat</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-left"></i> fa-rotate-left <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-rotate-right"></i> fa-rotate-right <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-save"></i> fa-save <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-scissors"></i> fa-scissors</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-strikethrough"></i> fa-strikethrough</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-table"></i> fa-table</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-text-height"></i> fa-text-height</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-text-width"></i> fa-text-width</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-th"></i> fa-th</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-th-large"></i> fa-th-large</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-th-list"></i> fa-th-list</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-underline"></i> fa-underline</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-undo"></i> fa-undo</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-unlink"></i> fa-unlink <span class="text-muted">(alias)</span></div>
                    
                  </div>

                </section>

                <section id="directional">
                  <h4 class="page-header">方向性图标</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-down"></i> fa-angle-double-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-left"></i> fa-angle-double-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-right"></i> fa-angle-double-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-double-up"></i> fa-angle-double-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-down"></i> fa-angle-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-left"></i> fa-angle-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-right"></i> fa-angle-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-angle-up"></i> fa-angle-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-down"></i> fa-arrow-circle-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-left"></i> fa-arrow-circle-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-down"></i> fa-arrow-circle-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-left"></i> fa-arrow-circle-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-right"></i> fa-arrow-circle-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-o-up"></i> fa-arrow-circle-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-right"></i> fa-arrow-circle-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-circle-up"></i> fa-arrow-circle-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-down"></i> fa-arrow-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-left"></i> fa-arrow-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-right"></i> fa-arrow-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrow-up"></i> fa-arrow-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows"></i> fa-arrows</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-h"></i> fa-arrows-h</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-v"></i> fa-arrows-v</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-down"></i> fa-caret-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-left"></i> fa-caret-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-right"></i> fa-caret-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-down"></i> fa-caret-square-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-left"></i> fa-caret-square-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-right"></i> fa-caret-square-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-square-o-up"></i> fa-caret-square-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-caret-up"></i> fa-caret-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-down"></i> fa-chevron-circle-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-left"></i> fa-chevron-circle-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-right"></i> fa-chevron-circle-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-circle-up"></i> fa-chevron-circle-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-down"></i> fa-chevron-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-left"></i> fa-chevron-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-right"></i> fa-chevron-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-chevron-up"></i> fa-chevron-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-down"></i> fa-hand-o-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-left"></i> fa-hand-o-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-right"></i> fa-hand-o-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hand-o-up"></i> fa-hand-o-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-down"></i> fa-long-arrow-down</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-left"></i> fa-long-arrow-left</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-right"></i> fa-long-arrow-right</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-long-arrow-up"></i> fa-long-arrow-up</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-down"></i> fa-toggle-down <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-left"></i> fa-toggle-left <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-right"></i> fa-toggle-right <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-toggle-up"></i> fa-toggle-up <span class="text-muted">(alias)</span></div>
                    
                  </div>

                </section>

                <section id="video-player">
                  <h4 class="page-header">媒体图标</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-arrows-alt"></i> fa-arrows-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-backward"></i> fa-backward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-compress"></i> fa-compress</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-eject"></i> fa-eject</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-expand"></i> fa-expand</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fast-backward"></i> fa-fast-backward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-fast-forward"></i> fa-fast-forward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-forward"></i> fa-forward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pause"></i> fa-pause</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-play"></i> fa-play</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle"></i> fa-play-circle</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-play-circle-o"></i> fa-play-circle-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-step-backward"></i> fa-step-backward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-step-forward"></i> fa-step-forward</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stop"></i> fa-stop</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                    
                  </div>

                </section>

                <section id="brand">
                  <h4 class="page-header">商标</h4>

                  

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-adn"></i> fa-adn</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-android"></i> fa-android</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-apple"></i> fa-apple</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span></div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-btc"></i> fa-btc</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-css3"></i> fa-css3</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dribbble"></i> fa-dribbble</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-dropbox"></i> fa-dropbox</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-facebook"></i> fa-facebook</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-facebook-square"></i> fa-facebook-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-flickr"></i> fa-flickr</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-foursquare"></i> fa-foursquare</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-github"></i> fa-github</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-github-alt"></i> fa-github-alt</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-github-square"></i> fa-github-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-gittip"></i> fa-gittip</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus"></i> fa-google-plus</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-google-plus-square"></i> fa-google-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-html5"></i> fa-html5</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-instagram"></i> fa-instagram</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin"></i> fa-linkedin</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-linkedin-square"></i> fa-linkedin-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-linux"></i> fa-linux</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-maxcdn"></i> fa-maxcdn</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pagelines"></i> fa-pagelines</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest"></i> fa-pinterest</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-pinterest-square"></i> fa-pinterest-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-renren"></i> fa-renren</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-skype"></i> fa-skype</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stack-exchange"></i> fa-stack-exchange</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stack-overflow"></i> fa-stack-overflow</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-trello"></i> fa-trello</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr"></i> fa-tumblr</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-tumblr-square"></i> fa-tumblr-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-twitter"></i> fa-twitter</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-twitter-square"></i> fa-twitter-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-vimeo-square"></i> fa-vimeo-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-vk"></i> fa-vk</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-weibo"></i> fa-weibo</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-windows"></i> fa-windows</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-xing"></i> fa-xing</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-xing-square"></i> fa-xing-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube"></i> fa-youtube</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-play"></i> fa-youtube-play</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-youtube-square"></i> fa-youtube-square</div>
                    
                  </div>
                </section>

                <section id="medical">
                  <h4 class="page-header">医疗图标</h4>

                  <div class="row list-icon">
                    

                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-ambulance"></i> fa-ambulance</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-h-square"></i> fa-h-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-hospital-o"></i> fa-hospital-o</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-medkit"></i> fa-medkit</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-plus-square"></i> fa-plus-square</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-stethoscope"></i> fa-stethoscope</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-user-md"></i> fa-user-md</div>
                    
                      <div class="col-md-3 col-sm-4"><i class="fa fa-wheelchair"></i> fa-wheelchair</div>
                    
                  </div>

                </section>
              </div>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
</section>
</section>    
</section>
  <!-- Bootstrap -->
  <script src="/Blog/Public/admin/js/bootstrap.js"></script>
  <!-- App -->
  <script src="/Blog/Public/admin/js/app.js"></script>
  <script src="/Blog/Public/admin/js/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- file input -->  
  <script src="/Blog/Public/admin/js/file-input/bootstrap-filestyle.min.js"></script>
  <!-- Sparkline Chart -->
  <script src="/Blog/Public/admin/js/charts/sparkline/jquery.sparkline.min.js"></script>
  <!-- Easy Pie Chart -->
        <!-- Easy Pie Chart -->
  <script src="/Blog/Public/admin/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="/Blog/Public/admin/js/charts/flot/jquery.flot.min.js"></script>
  <script src="/Blog/Public/admin/js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="/Blog/Public/admin/js/charts/flot/jquery.flot.resize.js"></script>
  <script src="/Blog/Public/admin/js/charts/flot/jquery.flot.orderBars.js"></script>
  <script src="/Blog/Public/admin/js/charts/flot/jquery.flot.pie.min.js"></script>
  <script src="/Blog/Public/admin/js/charts/flot/jquery.flot.grow.js"></script>
  <script src="/Blog/Public/admin/js/charts/flot/demo.js"></script>
  <script src="/Blog/Public/admin/js/app.plugin.js"></script>
  <!-- parsley -->
  <script src="/Blog/Public/admin/js/parsley/parsley.min.js"></script>
  <script src="/Blog/Public/admin/js/parsley/parsley.extend.js"></script>
  <script src="/Blog/Public/admin/js/app.plugin.js"></script>
</body>
</html>