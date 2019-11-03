<?php /*a:6:{s:67:"E:\www\thinkphp5.1\application\admin\view\general\config\email.html";i:1565596843;s:61:"E:\www\thinkphp5.1\application\admin\view\layout\default.html";i:1564739286;s:58:"E:\www\thinkphp5.1\application\admin\view\common\meta.html";i:1564712717;s:58:"E:\www\thinkphp5.1\application\admin\view\common\menu.html";i:1567416147;s:60:"E:\www\thinkphp5.1\application\admin\view\common\header.html";i:1564725863;s:60:"E:\www\thinkphp5.1\application\admin\view\common\script.html";i:1564713114;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Examadmin管理平台</title>

    <!-- Bootstrap -->
    <link href="/thinkphp5.1/public/assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/thinkphp5.1/public/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/thinkphp5.1/public/assets/plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/thinkphp5.1/public/assets/plugins/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/thinkphp5.1/public/assets/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/thinkphp5.1/public/assets/plugins/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/thinkphp5.1/public/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/thinkphp5.1/public/assets/admin/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      
        <div class="col-md-3 left_col">
         <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>培训系统</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/thinkphp5.1/public/assets/admin/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>欢迎你,</span>
                <h2>admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a href="<?php echo url('dashboard/index'); ?>"><i class="fa fa-desktop"></i> 首页 <span></span></a>
                                  <li><a><i class="fa fa-table"></i> 系统配置 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo url('general/config'); ?>">基础配置</a></li>
                      <li><a href="<?php echo url('@admin/general/config/email'); ?>">邮件配置</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-home"></i> 人员管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo url('user/users'); ?>">人员信息</a></li>
                      <li><a href="<?php echo url('user/department'); ?>">部门管理</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo url('question/index'); ?>"><i class="fa fa-edit"></i> 题库管理 </a></li>
                  <li><a><i class="fa fa-desktop"></i> 考试管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo url('@admin/tpaper/index'); ?>">试卷管理</a></li>
                      <li><a href="<?php echo url('@admin/tpaper/index/search'); ?>">考试查询</a></li>
                      <li><a href="<?php echo url('@admin/tpaper/index/marking'); ?>">待评试卷</a></li>
                    </ul>
                  </li>               
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
          </div>

        </div>

        <!-- top navigation -->
        <div class="top_nav">
         <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/thinkphp5.1/public/assets/admin/images/img.jpg" alt="">admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> 修改密码</a></li>
                    <li><a href="javascript:;">帮助</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>         
          
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
			            <h3>邮件配置</h3>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           ExamAdmin by <a href="https://colorlib.com">2019</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	
	
	<!-- jQuery -->
    <script src="/thinkphp5.1/public/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/thinkphp5.1/public/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/thinkphp5.1/public/assets/plugins/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/thinkphp5.1/public/assets/plugins/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/thinkphp5.1/public/assets/plugins/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/thinkphp5.1/public/assets/plugins/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/thinkphp5.1/public/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/thinkphp5.1/public/assets/plugins/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/thinkphp5.1/public/assets/plugins/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/thinkphp5.1/public/assets/plugins/Flot/jquery.flot.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/Flot/jquery.flot.pie.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/Flot/jquery.flot.time.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/Flot/jquery.flot.stack.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/thinkphp5.1/public/assets/plugins/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/thinkphp5.1/public/assets/plugins/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/thinkphp5.1/public/assets/plugins/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/thinkphp5.1/public/assets/plugins/moment/min/moment.min.js"></script>
    <script src="/thinkphp5.1/public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/thinkphp5.1/public/assets/admin/js/custom.min.js"></script>
  </body>
</html>