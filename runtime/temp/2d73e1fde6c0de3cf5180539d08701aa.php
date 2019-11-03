<?php /*a:6:{s:67:"E:\www\thinkphp5.1\application\admin\view\general\config\index.html";i:1572768034;s:61:"E:\www\thinkphp5.1\application\admin\view\layout\default.html";i:1564739286;s:58:"E:\www\thinkphp5.1\application\admin\view\common\meta.html";i:1572513316;s:58:"E:\www\thinkphp5.1\application\admin\view\common\menu.html";i:1572764725;s:60:"E:\www\thinkphp5.1\application\admin\view\common\header.html";i:1572765996;s:60:"E:\www\thinkphp5.1\application\admin\view\common\script.html";i:1572513403;}*/ ?>
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
    <link href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/assets/plugins/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/assets/plugins/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="/assets/plugins/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/assets/plugins/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/assets/admin/css/custom.min.css" rel="stylesheet">
    
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
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li><a href="<?php echo url('dashboard/index'); ?>"><i class="fa fa-desktop"></i> 首页 <span></span></a>
                                  <li><a><i class="fa fa-table"></i> 系统配置 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo url('general/config'); ?>">基础配置</a></li>
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
                    <img src="__IMG__/img.jpg" alt="">admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo url('@admin/user/users/profile'); ?>"> 修改密码</a></li>
                    <li><a href="javascript:;">帮助</a></li>
                    <li><a href="<?php echo url('@home/login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> 退出</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>         
          
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
			            <div class="row">
              <div class="col-md-12">
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">


                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">网站设置</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">邮箱设置</a>
                        </li>
                         <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">短信设置</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">上传配置</a>
                        </li>
                      </ul>
                      <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                          <form class="form-horizontal form-label-left" lay-filter="form-config">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">网站名称</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="site_name" lay-verify="required" lay-reqtext="网站名称不能为空"
                                           placeholder="请输入网站名称" value="" class="form-control col-md-7 col-xs-12">
                                    <!--                                    <tip>填写自己部署网站的名称。</tip>-->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">网站域名</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="site_domain" lay-verify="url" lay-reqtext="网站域名不能为空"
                                           placeholder="请输入网站域名" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">网站邮箱</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="site_email" lay-verify="email" lay-reqtext="网站域名不能为空"
                                           placeholder="请输入网站域名" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">网站LOGO</label>
                                <input type="hidden" name="site_logo" id="logo">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="layui-upload">
                                        <button type="button" class="layui-btn layui-btn-primary" id="logoBtn"><i
                                                class="icon icon-upload3"></i>点击上传
                                        </button>
                                        <div class="layui-upload-list">
                                            <img class="layui-upload-img" id="site_logo">
                                            <p id="demoText"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group layui-form-text">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">首页标题</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="site_seo_title" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group layui-form-text">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">META关键词</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="site_seo_keywords" class="form-control"
                                              placeholder="多个关键词用英文状态 , 号分割"></textarea>
                                </div>
                            </div>
                            <div class="form-group layui-form-text">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">META描述</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="site_seo_desc" placeholder="建议200字以内"
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group layui-form-text">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">版权信息</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="site_copyright" class="form-control">© 2019 www.lemocms.com MIT license</textarea>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">提交</button>
                                    <button class="btn btn-primary" type="reset">重置</button>

                                </div>

                            </div>

                        </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                           <form class="form-horizontal form-label-left" lay-filter="form-config">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">邮箱服务器</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email_host" lay-verify="required" lay-reqtext="邮箱服务器地址不能为空"
                                           placeholder="请输入邮箱服务器" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">邮箱端口</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email_port" lay-verify="required" lay-reqtext="端口不能为空"
                                           placeholder="请输入邮箱端口" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">邮箱地址</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email_addr" lay-verify="required" lay-reqtext="邮箱地址不能为空"
                                           placeholder="请输入邮箱地址" value="" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">发件人邮箱</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email_id" placeholder="请输入邮箱用户名" value=""
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">邮箱密码</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email_pass" placeholder="请输入邮箱密码" value=""
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">邮箱协议</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email_secure" placeholder="请输入邮箱发送协议" value=""
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                           <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">提交</button>
                                    <button class="btn btn-primary" type="reset">重置</button>

                                </div>

                            </div>

                        </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <form class="form-horizontal form-label-left" lay-filter="form-config">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">阿里短信appid</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="sms_appid" lay-verify="required" placeholder="请输入阿里短信appid" value=""
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">阿里短信密钥</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="sms_secret" lay-verify="required" placeholder="请输入密钥" value=""
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">阿里短信产品名</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="sms_product" lay-verify="required" placeholder="请输入阿里短信产品名" value=""
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12 required">阿里短信模板id</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="sms_template" lay-verify="required" placeholder="请输入阿里短信模板id" value=""
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">提交</button>
                                    <button class="btn btn-primary" type="reset">重置</button>

                                </div>

                            </div>

                        </form>
                        </div>
                        
                          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                          		<form class="form-horizontal form-label-left" lay-filter="form-config">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">文件类型</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="upload_file_type"
                                           value="bmp|png|gif|jpg|jpeg|zip|rar|txt|ppt|xls|doc|mp3|mp4"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class=" col-md-3 col-sm-3 col-xs-12">最大文件</label>
                                <div class="col-md-7 col-xs-12-inline" style="width: 80px;">
                                    <input type="text" name="upload_file_max" lay-verify="number" value="2048"
                                           class="form-control col-md-7 col-xs-12">
                                </div>
                                <div class=" col-md-7 col-xs-12-inline form-control col-md-7 col-xs-12-company"><label class="control-label col-md-3 col-sm-3 col-xs-12">M</label></div>
                                <div class="layui-form-mid layui-word-aux">提示：1 M = 1024 KB</div>
                            </div>
							<div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">提交</button>
                                    <button class="btn btn-primary" type="reset">重置</button>

                                </div>

                            </div>

                        </form>
                          </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
       </div>
       </div>   
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
    <script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/assets/plugins/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/assets/plugins/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/assets/plugins/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/assets/plugins/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/assets/plugins/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/assets/plugins/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/assets/plugins/Flot/jquery.flot.js"></script>
    <script src="/assets/plugins/Flot/jquery.flot.pie.js"></script>
    <script src="/assets/plugins/Flot/jquery.flot.time.js"></script>
    <script src="/assets/plugins/Flot/jquery.flot.stack.js"></script>
    <script src="/assets/plugins/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/assets/plugins/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/assets/plugins/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/assets/plugins/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/assets/plugins/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/assets/plugins/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/assets/plugins/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/assets/plugins/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/assets/plugins/moment/min/moment.min.js"></script>
    <script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/assets/admin/js/custom.min.js"></script>
  </body>
</html>