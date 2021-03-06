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
<script type="text/javascript" src="/Blog/Public/admin/users/app.js"></script>
        <section id="content" ng-app="userApp" ng-controller="userCrtl">
          <section class="vbox">
            <section class="scrollable padder">
              <div class="m-b-md">
              </div>
              <section class="panel panel-default">
                <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                    <a href="<?php echo U('Admin/Users/create');?>"><button class="btn btn-sm btn-success">添加用户+</button></a>
                    <a href="<?php echo U('Admin/Users/black');?>"><button class="btn btn-sm btn-dark">查看黑名单</button></a>
                    <select class="input-sm form-control input-s-sm inline v-middle">
                      <option value="0">删除</option>
                    </select>
                    <button class="btn btn-sm btn-primary">操作</button>               
                  </div>
                  <div class="col-sm-3 m-b-xs">
                    <div class="btn-group" data-toggle="buttons">
                      <label class="btn btn-sm btn-default active">
                        <input type="radio" name="options"> 日
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options"> 星期
                      </label>
                      <label class="btn btn-sm btn-default">
                        <input type="radio" name="options"> 月
                      </label>
                    </div>
                    <!--<h5>Filtered {{ filtered.length }} of {{ totalItems}} total customers</h5>-->
                  </div>
                  <div class="col-sm-4">
                    <div class="input-group">
                      <input type="text"  ng-model="search" ng-change="filter()" class="input-sm form-control" placeholder="搜索">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" type="button">搜索</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <div class="col-md-12" ng-show="filteredItems > 0">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th style="width:20px;"><label class="checkbox m-n i-checks"><input type="checkbox"><i></i></label></th>
                        <th class="th-sortable" data-toggle="class">用户名</th>
                        <th class="th-sortable" data-toggle="class">登录名</th>
                        <th class="th-sortable" data-toggle="class">上次登录</th>
                        <th class="th-sortable" data-toggle="class">登录IP</th>
                        <th style="width:40px;border-right: 0px">操作</th>
                        <th style="width:40px;"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="user in filtered = (users | filter:search) | startFrom:(currentPage-1)*entryLimit | limitTo:entryLimit">
                        <td><label class="checkbox m-n i-checks"><input type="checkbox" name="post[]"><i></i></label></td>
                        <td><a href="#">{{user.username}}</a></td>
                        <td>{{user.login_name}}</td>
                        <td>{{user.last_login}}</td>
                        <td>{{user.ip}}</td>
                        <td ng-show="user.uid != 2">
                          <a href="<?php echo U('Admin/Users/edit');?>?uid={{user.uid}}"><i class="btn btn-default btn-success btn-sm">编辑</i></a>
                        </td>
                        <td ng-show="user.uid != 2">
                          <a ng-click="delete(user)" class="active" data-toggle="class"><i class="btn btn-default btn-danger btn-sm">删除</i></a>
                        </td>
                        <td ng-show="user.uid != 2">
                          <a ng-click="black(user)" class="active" data-toggle="class"><i class="btn btn-default btn-dark btn-sm">拉黑</i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-12" ng-show="filteredItems == 0">
                    <div class="col-md-12">
                        <p style="text-align: center;padding: 10px">没有成员</p>
                    </div>
                </div>
                </div>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4 hidden-xs">
                      <select ng-model="entryLimit" class="input-sm form-control input-s-sm inline v-middle">
                        <option>5</option>
                        <option>10</option>
                        <option>50</option>
                        <option>100</option>
                      </select>                
                    </div>
                    <div class="col-sm-4 text-right pull-right text-center-xs" ng-show="filteredItems > 0">    
                        <div pagination="" page="currentPage" on-select-page="setPage(page)" boundary-links="true" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
                  </div>
                  </div>
                </footer>
              </section>
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