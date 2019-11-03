<?php /*a:1:{s:57:"E:\www\thinkphp5.1\application\home\view\users\index.html";i:1572576899;}*/ ?>
	<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2019-04-04 16:55:45 +0200 -->
    <title>ExamSystem</title>
    <link rel="stylesheet" href="/assets/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/home/css/css.css">
    <script src="/assets/home/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="/assets/home/css/dashboard.css" rel="stylesheet" />
    <script src="/assets/home/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/assets/plugins/input-mask/plugin.js"></script>
    <!-- Datatables Plugin -->
    <script src="/assets/plugins/datatables/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="flex-fill">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="./index.html">
                <img src="/assets/home/images/logo.png" class="header-brand-img" alt="examadmin">
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="nav-item d-none d-md-flex">
                  <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">在线开发手册</a>
                </div>
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(/assets/home/images/img.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">ExamSystem</span>
                      <small class="text-muted d-block mt-1">管理员</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                   
                    <a class="dropdown-item" href="<?php echo url('/admin'); ?>">
                      <i class="dropdown-icon fe fe-help-circle"></i> 后台管理
                    </a>
                    <a class="dropdown-item" href="<?php echo url('login/index'); ?>">
                      <i class="dropdown-icon fe fe-log-out"></i> 登录
                    </a>
                    <a class="dropdown-item" href="#">
                      <i class="dropdown-icon fe fe-log-out"></i> 退出
                    </a>
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="<?php echo url('index/index'); ?>" class="nav-link active"><i class="fe fe-home"></i> 我的考试</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo url('exam/index'); ?>" class="nav-link"><i class="fe fe-box"></i> 做练习题</a>

                  </li>
                  <li class="nav-item dropdown">
                    <a href="<?php echo url('fraction/index'); ?>" class="nav-link"><i class="fe fe-calendar"></i> 成绩查询</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo url('users/index'); ?>" class="nav-link"><i class="fe fe-file-text"></i> 会员中心</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="container">
			<div class="page-header">
              <h1 class="page-title">
               	 自学考试
              </h1>
            </div>
            <div class="row">
              <div class="col-md-6 col-xl-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">会计类</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table card-table">
                    <tr>
                      <td>会计从业资格</td>
                      <td class="text-right">
                        <span class="badge badge-warning">开始考试</span>
                      </td>
                    </tr>
                    <tr>
                      <td>会计初级职称</td>
                      <td class="text-right">
                        <span class="badge badge-warning">开始考试</span>
                      </td>
                    </tr>
                    <tr>
                      <td>会计中级职称</td>
                      <td class="text-right">
                        <span class="badge badge-warning">开始考试</span>
                      </td>
                    </tr>
                   
                  </table>
                  </div>
                  
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">成人高考</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card">
                  <div class="card-status bg-blue"></div>
                  <div class="card-header">
                    <h3 class="card-title">英语类</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card">
                  <div class="card-status bg-green"></div>
                  <div class="card-header">
                    <h3 class="card-title">计算机类</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card">
                  <div class="card-status bg-orange"></div>
                  <div class="card-header">
                    <h3 class="card-title">专科</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="card">
                  <div class="card-status bg-red"></div>
                  <div class="card-header">
                    <h3 class="card-title">本科</h3>
                    <div class="card-options">
                      <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                  </div>
                  <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit velit vitae voluptatem. A consequuntur, deserunt eaque error nulla temporibus!
                  </div>
                </div>
              </div>


            </div>
            <div class="page-header">
              <h1 class="page-title">
                	考试练习
              </h1>
            </div>
            <div class="row row-cards">
              <div class="col-lg-3">
                <div class="row">
                  <div class="col-md-6 col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="mb-4 text-center">
                          <img src="/assets/home/images/exam.jpg" alt="Apple iPhone 7 128GB" class="img-fluid">
                        </div>
                        <h4 class="card-title"><a href="javascript:void(0)">Apple iPhone 7 Plus 256GB Red Special Edition</a></h4>
                        <div class="card-subtitle">
                          基于微信公众号的答题系统
                        </div>
                        <div class="mt-5 d-flex align-items-center">
     
                          <div class="ml-auto">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-plus"></i> 详细</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="mb-4 text-center">
                          <img src="/assets/home/images/aliyun.jpg" alt="Apple iPhone 7 128GB" class="img-fluid">
                        </div>
                        <h4 class="card-title"><a href="javascript:void(0)">GoPro HERO6 Black</a></h4>
                        <div class="card-subtitle">
                          GoPro
                        </div>
                        <div class="mt-5 d-flex align-items-center">
        
                          <div class="ml-auto">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-plus"></i> 立即领取</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <table class="table card-table table-vcenter">
                    <tr>
                      <td><img src="demo/products/apple-iphone7-special.jpg" alt="" class="h-8"></td>
                      <td>
                        Apple iPhone 7 Plus 256GB Red Special Edition
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">98 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">38 offers</td>
                      <td class="text-right">
                        <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="demo/products/apple-macbook-pro.jpg" alt="" class="h-8"></td>
                      <td>
                        Apple MacBook Pro i7 3,1GHz/16/512/Radeon 560 Space Gray
                        <div class="badge badge-default badge-md">New</div>
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">97 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">13 offers</td>
                      <td class="text-right">
                         <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="demo/products/apple-iphone7.jpg" alt="" class="h-8"></td>
                      <td>
                        Apple iPhone 7 32GB Jet Black
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">48 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">38 offers</td>
                      <td class="text-right">
                         <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="demo/products/gopro-hero.jpg" alt="" class="h-8"></td>
                      <td>
                        GoPro HERO6 Black
                        <div class="badge badge-default badge-md">New</div>
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">66 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">47 offers</td>
                      <td class="text-right">
                         <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="demo/products/samsung-galaxy.jpg" alt="" class="h-8"></td>
                      <td>
                        Samsung Galaxy A5 A520F 2017 LTE Black Sky
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">37 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">40 offers</td>
                      <td class="text-right">
                         <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="demo/products/samsung-galaxy.jpg" alt="" class="h-8"></td>
                      <td>
                        Samsung Galaxy A5 A520F 2017 LTE Black Sky
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">37 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">40 offers</td>
                      <td class="text-right">
                         <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                    
                    <tr>
                      <td><img src="demo/products/samsung-galaxy.jpg" alt="" class="h-8"></td>
                      <td>
                        Samsung Galaxy A5 A520F 2017 LTE Black Sky
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">37 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">40 offers</td>
                      <td class="text-right">
                         <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                    <tr>
                      <td><img src="demo/products/samsung-galaxy.jpg" alt="" class="h-8"></td>
                      <td>
                        Samsung Galaxy A5 A520F 2017 LTE Black Sky
                      </td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">37 reviews</td>
                      <td class="text-right text-muted d-none d-md-table-cell text-nowrap">40 offers</td>
                      <td class="text-right">
                         <span class="badge badge-success">开始练习</span>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
          <script>
            require(['jquery'], function () {
            	$(document).ready(function () {
            
            		function setCookie(name,value,days) {
            			var expires = "";
            			if (days) {
            				var date = new Date();
            				date.setTime(date.getTime() + (days*24*60*60*1000));
            				expires = "; expires=" + date.toUTCString();
            			}
            			document.cookie = name + "=" + (value || "")  + expires + "; path=/";
            		}
            
            		function getCookie(name) {
            			var nameEQ = name + "=";
            			var ca = document.cookie.split(';');
            			for(var i=0;i < ca.length;i++) {
            				var c = ca[i];
            				while (c.charAt(0)==' ') c = c.substring(1,c.length);
            				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            			}
            			return null;
            		}
            
            		if (!getCookie('bottombar-hidden')) {
            			$('.js-bottombar').show();
            		}
            
            		$('.js-bottombar-close').on('click', function (e) {
            			$('.js-bottombar').hide();
            			setCookie('bottombar-hidden', 1, 7);
            
            			e.preventDefault();
            			return false;
            		});
            	});
            });
          </script>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2019 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>