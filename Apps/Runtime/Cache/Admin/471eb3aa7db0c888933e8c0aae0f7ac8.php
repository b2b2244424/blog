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
    <!--[if lt IE 9]>
    <script src="/Blog/Public/admin/js/ie/html5shiv.js"></script>
    <script src="/Blog/Public/admin/js/ie/respond.min.js"></script>
    <script src="/Blog/Public/admin/js/ie/excanvas.js"></script>
  <![endif]-->
  <script type="text/javascript" src="/Blog/Public/js/angular.min.js"></script>
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
                      <a href="index.html">
                        <i class="icon-disc icon text-success"></i>
                        <span class="font-bold">发现</span>
                      </a>
                    </li>
                    <li>
                      <a href="genres.html">
                        <i class="icon-music-tone-alt icon text-info"></i>
                        <span class="font-bold">音乐</span>
                      </a>
                    </li>
                    <li>
                      <a href="events.html">
                        <i class="icon-drawer icon text-primary-lter"></i>
                        <b class="badge bg-primary pull-right">6</b>
                        <span class="font-bold">日志</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon-list icon  text-info-dker"></i>
                        <span class="font-bold">文章</span>
                      </a>
                    </li>
                    <li>
                      <a href="video.html" data-target="#content" data-el="#bjax-el" data-replace="true">
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
                        <span>Pages</span>
                      </a>
                      <ul class="nav dk text-sm">
                        <li >
                          <a href="profile.html" class="auto">                                                        
                            <i class="fa fa-angle-right text-xs"></i>

                            <span>Profile</span>
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
          <section class="vbox">
            <section class="scrollable wrapper-lg">
              <div class="row">
                <div class="col-sm-8">
                  <div class="panel">
                    <!-- video player -->
                    <div id="jp_container_1">
                      <div class="jp-type-single pos-rlt">
                        <div id="jplayer_1" class="jp-jplayer jp-video"></div>
                        <div class="jp-gui">
                          <div class="jp-video-play">
                            <a class="fa fa-5x text-white fa-play-circle"></a>
                          </div>
                          <div class="jp-interface bg-info padder">
                            <div class="jp-controls">
                              <div>
                                <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                                <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                              </div>
                              <div class="jp-progress">
                                <div class="jp-seek-bar dker">
                                  <div class="jp-play-bar dk">
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
                                <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                                <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="jp-no-solution hide">
                          <span>Update Required</span>
                          To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                        </div>
                      </div>
                    </div>
                    <!-- / video player -->
                    <div class="wrapper-lg">
                      <h2 class="m-t-none text-black">Big Buck Bunny Trailer</h2>
                      <div class="post-sum">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at pellentesque volutpat. 
                        <br><br>
                        Phasellus at ultricies neque, quis malesuada augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam lacus eu neque.</p>
                      </div>
                      <div class="line b-b"></div>
                      <div class="text-muted">
                        <i class="fa fa-user icon-muted"></i> by <a href="#" class="m-r-sm">Admin</a>
                        <i class="fa fa-clock-o icon-muted"></i> Feb 20, 2013
                        <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i> 3 comments</a>
                      </div>
                    </div>
                  </div>
                  <h4 class="m-t-lg m-b">3 Comments</h4>
                  <section class="comment-list block">
                    <article id="comment-id-1" class="comment-item">
                      <a class="pull-left thumb-sm">
                        <img src="/Blog/Public/admin/images/a0.png" class="img-circle">
                      </a>
                      <section class="comment-body m-b">
                        <header>
                          <a href="#"><strong>John smith</strong></a>
                          <label class="label bg-info m-l-xs">Editor</label> 
                          <span class="text-muted text-xs block m-t-xs">
                            24 minutes ago
                          </span>
                        </header>
                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum.</div>
                      </section>
                    </article>
                    <!-- .comment-reply -->
                    <article id="comment-id-2" class="comment-item comment-reply">
                      <a class="pull-left thumb-sm">
                        <img src="/Blog/Public/admin/images/a1.png" class="img-circle">
                      </a>
                      <section class="comment-body m-b">
                        <header>
                          <a href="#"><strong>John smith</strong></a>
                          <label class="label bg-dark m-l-xs">Admin</label> 
                          <span class="text-muted text-xs block m-t-xs">
                            26 minutes ago
                          </span>
                        </header>
                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
                      </section>
                    </article>
                    <!-- / .comment-reply -->
                    <article id="comment-id-2" class="comment-item">
                      <a class="pull-left thumb-sm">
                        <img src="/Blog/Public/admin/images/a2.png" class="img-circle">
                      </a>
                      <section class="comment-body m-b">
                        <header>
                          <a href="#"><strong>John smith</strong></a>
                          <label class="label bg-dark m-l-xs">Admin</label> 
                          <span class="text-muted text-xs block m-t-xs">
                            26 minutes ago
                          </span>
                        </header>
                        <blockquote class="m-t">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                          <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                        </blockquote>
                        <div class="m-t-sm">Lorem ipsum dolor sit amet, consecteter adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</div>
                      </section>
                    </article>
                  </section>
                  <h4 class="m-t-lg m-b">Leave a comment</h4>
                  <form>
                    <div class="form-group pull-in clearfix">
                      <div class="col-sm-6">
                        <label>Your name</label>
                        <input type="text" class="form-control" placeholder="Name">
                      </div>
                      <div class="col-sm-6">
                        <label >Email</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Comment</label>
                      <textarea class="form-control" rows="5" placeholder="Type your comment"></textarea>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success">Submit comment</button>
                    </div>
                  </form>
                </div>
                <div class="col-sm-4">
                  <div class="panel panel-default">
                    <div class="panel-heading">Suggestions</div>
                    <div class="panel-body">
                      <article class="media">
                        <a href="#" class="pull-left thumb-lg m-t-xs">
                          <img src="/Blog/Public/admin/images/m40.jpg">
                        </a>
                        <div class="media-body">                        
                          <a href="#" class="font-semibold">Bootstrap 3: What you need to know</a>
                          <div class="text-xs block m-t-xs"><a href="#">Travel</a> 2 minutes ago</div>
                        </div>
                      </article>
                      <article class="media">
                        <a href="#" class="pull-left thumb-lg m-t-xs">
                          <img src="/Blog/Public/admin/images/m41.jpg">
                        </a>
                        <div class="media-body">                        
                          <a href="#" class="font-semibold">Lorem ipsum dolor sit amet it.</a>
                          <div class="text-xs block m-t-xs"><a href="#">Design</a> 2 hours ago</div>
                        </div>
                      </article>
                      <article class="media">
                        <a href="#" class="pull-left thumb-lg m-t-xs">
                          <img src="/Blog/Public/admin/images/m42.jpg">
                        </a>
                        <div class="media-body">                        
                          <a href="#" class="font-semibold">Sed diam nonummy tincidunt ut laoreet</a>
                          <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                        </div>
                      </article>
                      <article class="media">
                        <a href="#" class="pull-left thumb-lg m-t-xs">
                          <img src="/Blog/Public/admin/images/m43.jpg">
                        </a>
                        <div class="media-body">                        
                          <a href="#" class="font-semibold">Lonummy nibh euismod sed laoreet</a>
                          <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                        </div>
                      </article>
                      <article class="media">
                        <a href="#" class="pull-left thumb-lg m-t-xs">
                          <img src="/Blog/Public/admin/images/m44.jpg">
                        </a>
                        <div class="media-body">                        
                          <a href="#" class="font-semibold">Mibh euismod tincidunt ut laoreet</a>
                          <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                        </div>
                      </article>
                      <article class="media">
                        <a href="#" class="pull-left thumb-lg m-t-xs">
                          <img src="/Blog/Public/admin/images/m45.jpg">
                        </a>
                        <div class="media-body">                        
                          <a href="#" class="font-semibold">Siam nonummy nibh oreet</a>
                          <div class="text-xs block m-t-xs"><a href="#">MFC</a> 1 week ago</div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </section>
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
  <script src="/Blog/Public/admin/js/app.plugin.js"></script>
  <script type="text/javascript" src="/Blog/Public/admin/js/jPlayer/jquery.jplayer.min.js"></script>
  <script type="text/javascript" src="/Blog/Public/admin/js/jPlayer/add-on/jplayer.playlist.min.js"></script>
  <script type="text/javascript" src="/Blog/Public/admin/js/jPlayer/demo.js"></script>
  <!--AngularJS-->
  <script type="text/javascript" src="/Blog/Public/js/angular.min.js"></script>
</body>
</html>