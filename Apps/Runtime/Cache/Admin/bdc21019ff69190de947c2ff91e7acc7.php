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
              </div>
            </section>
          </section>
        </aside>
<section id="content">
          <section class="vbox">
                <section class="scrollable padder">
                  <div class="row m-t">
                    <div class="col-md-6">
                      <h4 class="m-t-xs">Button options</h4>
                      <div class="doc-buttons">
                        <a href="#" class="btn btn-s-md btn-default">Default</a>                
                        <a href="#" class="btn btn-s-md btn-primary">Primary</a>
                        <a href="#" class="btn btn-s-md btn-success">Success</a>
                        <a href="#" class="btn btn-s-md btn-info">Info</a>
                        <a href="#" class="btn btn-s-md btn-warning">Warning</a>
                        <a href="#" class="btn btn-s-md btn-danger">Danger</a>
                        <a href="#" class="btn btn-s-md btn-dark">Dark</a>
                        <a href="#" class="btn btn-s-md btn-default disabled">Disabled</a>
                      </div>    
                      
                      <h4 class="m-t">Button size</h4>
                      <p>
                        <a href="#" class="btn btn-default btn-lg">Large button</a>
                      </p>
                      <p>
                        <a href="#" class="btn btn-default">Default button</a>
                      </p>
                      <p>
                        <a href="#" class="btn btn-default btn-sm">Small button</a>
                      </p>
                      <p>
                        <a href="#" class="btn btn-default btn-xs">Extra small button</a>
                      </p>
                 
                      <h4 class="m-t-lg">Button dropdowns</h4>
                      <p class="text-muted">Single button dropdowns</p>
                      <div class="m-b-sm">
                        <div class="btn-group">
                          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <div class="btn-group">
                          <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="m-b-sm">
                        <div class="btn-group">
                          <button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="m-b-sm">
                        <div class="btn-group">
                          <button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </div>
                      <p class="text-muted">Split button dropdowns & variation </p>
                      <div class="m-b-sm">
                        <div class="btn-group">
                          <button class="btn btn-default">Action</button>
                          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                        <div class="btn-group dropup">
                          <button class="btn btn-default">Action</button>
                          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </div>

                      <h4 class="m-t-lg">Button with icon</h4>
                      <p>
                        <a href="#" class="btn btn-default"><i class="fa fa-html5"></i> Html5</a>
                        <a href="#" class="btn btn-info"><i class="fa fa-css3"></i> CSS3</a>
                      </p>            
                      <p>
                        <a href="#" class="btn btn-default btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</a>
                      </p>
                      <p>
                        <a href="#" class="btn btn-default btn-block"><i class="fa fa-bars pull-left"></i> Block button with icon</a>
                      </p>
                      <h4 class="m-t-lg">
                        Button icon
                      </h4>
                      <p>
                        <a href="#" class="btn btn-sm btn-icon btn-info"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-sm btn-icon btn-danger"><i class="fa fa-google-plus"></i></a>
                      </p>
                      <h4 class="m-t-lg">
                        Button icon rounded
                      </h4>
                      <p>
                        <a href="#" class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-rounded btn-sm btn-icon btn-default"><i class="fa fa-google-plus"></i></a>
                      </p>       
                    </div>
                    <div class="col-md-6">
                      <h4 class="m-t-xs">Rounded button</h4>
                      <div class="doc-buttons">
                        <a href="#" class="btn btn-s-md btn-default btn-rounded">Default</a>
                        <a href="#" class="btn btn-s-md btn-primary btn-rounded">Primary</a>
                        <a href="#" class="btn btn-s-md btn-success btn-rounded">Success</a>
                        <a href="#" class="btn btn-s-md btn-info btn-rounded">Info</a>
                        <a href="#" class="btn btn-s-md btn-warning btn-rounded">Warning</a>
                        <a href="#" class="btn btn-s-md btn-danger btn-rounded">Danger</a>
                        <a href="#" class="btn btn-s-md btn-dark btn-rounded">Dark</a>
                        <a href="#" class="btn btn-s-md btn-default btn-rounded disabled">Disabled</a>
                      </div>

                      <h4 class="m-t-lg">Button groups</h4>
                      <div class="m-b-sm">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default">Left</button>
                          <button type="button" class="btn btn-default">Middle</button>
                          <button type="button" class="btn btn-default">Right</button>
                        </div>              
                      </div>
                      <p class="text-muted">Vertical button groups</p>
                      <div class="btn-group-vertical m-b-sm">
                        <button type="button" class="btn btn-default">Top</button>
                        <button type="button" class="btn btn-default">Middle</button>
                        <button type="button" class="btn btn-default">Bottom</button>
                      </div>
                      <p class="text-muted">Nested button groups</p>
                      <div class="btn-group m-b-sm">
                        <button type="button" class="btn btn-default">1</button>
                        <button type="button" class="btn btn-success">2</button>
                        <button type="button" class="btn btn-default">3</button>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            Dropdown
                            <span class="caret"></span>
                          </button>
                            <ul class="dropdown-menu">
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                            <li><a href="#">Dropdown link</a></li>
                          </ul>
                        </div>
                      </div>
                      <p class="text-muted">Justified button groups</p>
                      <div class="m-b-sm">
                        <div class="btn-group btn-group-justified">
                          <a href="#" class="btn btn-primary">Left</a>
                          <a href="#" class="btn btn-info">Middle</a>
                          <a href="#" class="btn btn-success">Right</a>
                        </div>
                      </div>
                      <p class="text-muted">Multiple button groups</p>
                      <div class="btn-toolbar">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default">1</button>
                          <button type="button" class="btn btn-default active">2</button>
                          <button type="button" class="btn btn-default">3</button>
                          <button type="button" class="btn btn-default">4</button>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default">5</button>
                          <button type="button" class="btn btn-default">6</button>
                          <button type="button" class="btn btn-default">7</button>
                        </div>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default">8</button>
                        </div>
                      </div>
                    
                      <h4 class="m-t-lg">Button components</h4>
                      <p class="text-muted">
                        <span>There are a few easy ways to quickly get started with Bootstrap, each one ...</span>
                        <span class="text-muted hide" id="moreless"> appealing to a different skill level and use case. Read through to see what suits your particular needs.</span>
                      </p>
                      <p>
                        <a href="#moreless" class="btn btn-sm btn-default" data-toggle="class:show">
                          <i class="fa fa-plus text"></i>
                          <span class="text">More</span>
                          <i class="fa fa-minus text-active"></i>
                          <span class="text-active">Less</span>
                        </a>
                      </p>
                      <p>
                        <a class="btn btn-default" id="btn-1" href="#btn-1" data-toggle="class:btn-success">
                          <i class="fa fa-cloud-upload text"></i>
                          <span class="text">Upload</span>
                          <i class="fa fa-check text-active"></i>
                          <span class="text-active">Success</span>
                        </a>
                        <a class="btn btn-default" data-toggle="button">
                          <i class="fa fa-heart-o text"></i>
                          <i class="fa fa-heart text-active text-danger"></i>
                        </a>
                        <a class="btn btn-default" data-toggle="button">
                          <span class="text">
                            <i class="fa fa-thumbs-up text-success"></i> 25
                          </span>
                          <span class="text-active">
                            <i class="fa fa-thumbs-down text-danger"></i> 10
                          </span>
                        </a>
                        <button class="btn btn-success" data-toggle="class:show inline" data-target="#spin" data-loading-text="Saving...">Save</button> <i class="fa fa-spin fa-spinner hide" id="spin"></i>
                      </p>
                      <div class="m-b-sm">
                        <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-sm btn-info active">
                            <input type="radio" name="options"><i class="fa fa-check text-active"></i> Male
                          </label>
                          <label class="btn btn-sm btn-success">
                            <input type="radio" name="options"><i class="fa fa-check text-active"></i> Female
                          </label>
                          <label class="btn btn-sm btn-primary">
                            <input type="radio" name="options"><i class="fa fa-check text-active"></i> N/A
                          </label>
                        </div>
                      </div>

                      <div class="m-b-sm">
                        <div class="btn-group" data-toggle="buttons">
                          <label class="btn btn-sm btn-default">
                            <input type="checkbox" name="options"> option1
                          </label>
                          <label class="btn btn-sm btn-default">
                            <input type="checkbox" name="options"> option2
                          </label>
                        </div>                
                      </div>

                      <h5 class="m-t-lg">Select Button</h5>
                      <div class="btn-group m-r">
                        <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                          <span class="dropdown-label">Option1</span> 
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-select">
                            <li class="active"><input type="radio" name="d-s-r" checked=""><a href="#">Option1</a></li>
                            <li><input type="radio" name="d-s-r"><a href="#">Option2</a></li>
                            <li><input type="radio" name="d-s-r"><a href="#">Option3</a></li>
                            <li class="disabled"><input type="radio" name="d-s-r" disabled=""><a href="#">I'm disabled</a></li>
                        </ul>
                      </div>

                      <h4 class="m-t-lg">
                        <a href="#" class="pull-right text-sm" data-toggle="class:btn-rounded" data-target="#social-buttons a">Toggle</a>
                        Social buttons
                      </h4>
                      <p id="social-buttons">
                        <a href="#" class="btn btn-rounded btn-sm btn-info"><i class="fa fa-fw fa-twitter"></i> Twitter</a>
                        <a href="#" class="btn btn-rounded btn-sm btn-primary"><i class="fa fa-fw fa-facebook"></i> Facebook</a>
                        <a href="#" class="btn btn-rounded btn-sm btn-danger"><i class="fa fa-fw fa-google-plus"></i> Google+</a>
                      </p>
                    </div>
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