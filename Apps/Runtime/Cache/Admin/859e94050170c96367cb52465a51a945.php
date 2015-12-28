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
  <link rel="shortcut icon" href="/Blog/Public/images/admin.ico" type="image/x-icon" /
    <!--[if lt IE 9]>
    <script src="/Blog/Public/admin/js/ie/html5shiv.js"></script>
    <script src="/Blog/Public/admin/js/ie/respond.min.js"></script>
    <script src="/Blog/Public/admin/js/ie/excanvas.js"></script>
    <script src="/Blog/Public/js/sweetalert.min.js"></script>
  <![endif]-->
  
  <script src="/Blog/Public/js/angular.min.js"></script>
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
          <img src="/Blog/Public/admin//Blog/Public/admin/images/logo.png" alt="." class="hide">
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
              Admin<b class="caret"></b>
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
                <a href="modal.lockme.html" data-toggle="ajaxModal" >退出</a>
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
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      发现
                    </li>
                    <li>
                      <a href="<?php echo U('Admin/Index/index');?>">
                        <i class="icon-disc icon text-success"></i>
                        <span class="font-bold">发现</span>
                      </a>
                    </li>
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
                      <a href="<?php echo U('Admin/Video/index');?>" data-target="#content" data-el="#bjax-el" data-replace="true">
                        <i class="icon-social-youtube icon  text-primary"></i>
                        <span class="font-bold">视频</span>
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
                          <a href="buttons.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>按钮</span>
                          </a>
                        </li>
                        <li >
                          <a href="icons.html" class="auto">                            
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
                              <a href="table-static.html">
                                <i class="fa fa-angle-right"></i>
                                <span>静态表格</span>
                              </a>
                            </li>
                            <li >
                              <a href="table-datatable.html">
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
                  <ul class="nav text-sm">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      <span class="pull-right"><a href="#"><i class="icon-plus i-lg"></i></a></span>
                      播放列表
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon-music-tone icon"></i>
                        <span>Hip-Pop</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon-playlist icon text-success-lter"></i>
                        <b class="badge bg-success dker pull-right">9</b>
                        <span>Jazz</span>
                      </a>
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
                          <strong class="font-bold text-lt">John.Smith</strong> 
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Art Director</span>
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
                        <a href="modal.lockme.html" data-toggle="ajaxModal" >退出</a>
                      </li>
                    </ul>
                  </div>
                </div>            
              </footer>
          </section>
        </aside>
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target">
                  <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" ><i class="icon-refresh i-lg  inline" id="refresh"></i></a>
                  <h2 class="font-thin m-b">Discover <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
                    <span class="bar1 a1 bg-primary lter"></span>
                    <span class="bar2 a2 bg-info lt"></span>
                    <span class="bar3 a3 bg-success"></span>
                    <span class="bar4 a4 bg-warning dk"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span></h2>
                  <div class="row row-sm">
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="bottom">
                            <span class="badge bg-info m-l-sm m-b-sm">03:20</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p1.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Tempered Song</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Miaow</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black active">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#" data-toggle="class">
                                <i class="icon-control-play i-2x text"></i>
                                <i class="icon-control-pause i-2x text-active"></i>
                              </a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right active" data-toggle="class">
                                <i class="fa fa-heart-o text"></i>
                                <i class="fa fa-heart text-active text-danger"></i>
                              </a>
                              <a href="#" data-toggle="class">
                                <i class="fa fa-plus-circle text"></i>
                                <i class="fa fa-check-circle text-active text-info"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p2.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p3.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Morbi id neque quam liquam sollicitudin</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Allen JH</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="top">
                            <span class="pull-right m-t-n-xs m-r-sm text-white">
                              <i class="fa fa-bookmark i-lg"></i>
                            </span>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p4.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Tincidunt libero</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Amanda Conlan</a>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p5.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Fermentum diam</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Nisa Colen</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="top">
                            <span class="pull-right m-t-sm m-r-sm badge bg-info">6</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>                          
                          <a href="#"><img src="/Blog/Public/admin/images/p6.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Habitant</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Dan Doorack</a>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <div class="top">
                            <span class="pull-right m-t-sm m-r-sm badge bg-white">12</span>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p7.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Vivamus vel tincidunt libero</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Ligula H</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p8.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Aliquam sollicitudin venenati</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">James East</a>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p9.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Lementum ligula vitae</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Lauren Taylor</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay r r-2x bg-light dker active">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#" data-toggle="class" class="active">
                                <i class="icon-control-play i-2x text"></i>
                                <i class="icon-control-pause i-2x text-active"></i>
                              </a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right" data-toggle="class">
                                <i class="fa fa-heart-o text"></i>
                                <i class="fa fa-heart text-active text-danger"></i>
                              </a>
                              <a href="#" class="active" data-toggle="class">
                                <i class="fa fa-plus-circle text"></i>
                                <i class="fa fa-check-circle text-active text-info"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p10.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Egestas dui nec fermentum </a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Chris Fox</a>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix visible-xs"></div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p11.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Aliquam sollicitudin venenatis ipsum</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">Jack Jason</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star-o text-muted"></i>
                            </div>
                            <div class="center text-center m-t-n">
                              <a href="#"><i class="icon-control-play i-2x"></i></a>
                            </div>
                            <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div>
                          </div>
                          <a href="#"><img src="/Blog/Public/admin/images/p12.jpg" alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis">Vestibulum ullamcorper</a>
                          <a href="#" class="text-ellipsis text-xs text-muted">MM &amp; DD</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <footer class="footer bg-dark">
                  <div id="jp_container_N">
                    <div class="jp-type-playlist">
                      <div id="jplayer_N" class="jp-jplayer hide"></div>
                      <div class="jp-gui">
                        <div class="jp-video-play hide">
                          <a class="jp-video-play-icon">play</a>
                        </div>
                        <div class="jp-interface">
                          <div class="jp-controls">
                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                            <div>
                              <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                              <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                            </div>
                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                            <div class="jp-progress hidden-xs">
                              <div class="jp-seek-bar dk">
                                <div class="jp-play-bar bg-info">
                                </div>
                                <div class="jp-title text-lt">
                                  <ul>
                                    <li></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                            <div class="hidden-xs hidden-sm">
                              <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                              <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                            </div>
                            <div class="hidden-xs hidden-sm jp-volume">
                              <div class="jp-volume-bar dk">
                                <div class="jp-volume-bar-value lter"></div>
                              </div>
                            </div>
                            <div>
                              <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                              <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                            </div>
                            <div>
                              <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                              <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                            </div>
                            <div class="hide">
                              <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                              <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="jp-playlist dropup" id="playlist">
                        <ul class="dropdown-menu aside-xl dker">
                          <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                          <li class="list-group-item"></li>
                        </ul>
                      </div>
                      <div class="jp-no-solution hide">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                      </div>
                    </div>
                  </div>
                </footer>
              </section>
            </section>
            <!-- side content -->
            
            <!-- / side content -->
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
</section>
</section>    
</section>
  <script src="/Blog/Public/admin/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="/Blog/Public/admin/js/bootstrap.js"></script>
  <!-- wysiwyg -->
  <script src="/Blog/Public/admin/js/wysiwyg/jquery.hotkeys.js"></script>
  <script src="/Blog/Public/admin/js/wysiwyg/bootstrap-wysiwyg.js"></script>
  <script src="/Blog/Public/admin/js/wysiwyg/demo.js"></script>
  <!-- App -->
  <script src="/Blog/Public/admin/js/app.js"></script>
  <script src="/Blog/Public/admin/js/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- parsley -->
  <script src="/Blog/Public/admin/js/parsley/parsley.min.js"></script>
  <script src="/Blog/Public/admin/js/parsley/parsley.extend.js"></script>
  <script src="/Blog/Public/admin/js/app.plugin.js"></script>
  <!--jplayer-->
  <script type="text/javascript" src="/Blog/Public/admin/js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="/Blog/Public/admin/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="/Blog/Public/admin/js/jPlayer/demo.js"></script>
</body>
</html>