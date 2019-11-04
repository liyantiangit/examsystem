<?php /*a:2:{s:62:"E:\www\thinkphp5.1\application\install\view\install\step2.html";i:1572835829;s:59:"E:\www\thinkphp5.1\application\install\view\index\base.html";i:1572834723;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ExamSystem 安装</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/assets/plugins/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/assets/install/css/install.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->
        <script src="/assets/plugins/jquery-1.10.2.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.js"></script>
    </head>

    <body data-spy="scroll" data-target=".bs-docs-sidebar">
        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="nav-collapse collapse">
                    	<p class="install_logo"><span><img width="50px;" src="/assets/install/images/install.png"/></span></p>
                    	<ul id="step" class="nav">
                    		
     <li class="done"><a href="javascript:;"><span>&nbsp;&nbsp;</span>安装协议</a></li>
    <li class="done"><a href="javascript:;"><span>&nbsp;&nbsp;</span>环境检测</a></li>
    <li  class="active"><a href="javascript:;"><span>3</span>创建数据库</a></li>
    <li><a href="javascript:;"><span>4</span><?php if(app('session')->get('update') == '1'): ?>升级<?php else: ?>安装<?php endif; ?></a></li>
    <li><a href="javascript:;"><span>5</span>完成</a></li>

                    	</ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="jumbotron masthead">
            <div class="container">
                
    <div class="notice">
    <?php
        defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_HOST_M', '127.0.0.1');
        defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_PORT', '3306');
    ?>
    <h1>创建数据库</h1>
    <form action="" method="post" target="_self">
        <div class="create-database">
            <div>
                <input type="text" name="db[]" value="<?php echo htmlentities($config['hostname']); ?>">
                <span>数据库服务器，数据库服务器IP，一般为127.0.0.1</span>
            </div>
            <div>
                <input type="text" name="db[]" value="<?php echo htmlentities($config['database']); ?>">
                <span>数据库名</span>
            </div>
            <div>
                <input type="text" name="db[]" value="<?php echo htmlentities($config['username']); ?>">
                <span>数据库用户名</span>
            </div>
            <div>
                <input type="password" name="db[]" value="">
                <span>数据库密码</span>
            </div>
            <div>
                <input type="text" name="db[]" value="<?php echo htmlentities($config['hostport']); ?>">
                <span>数据库端口，数据库服务连接端口，一般为3306</span>
            </div>
        </div>

        <div class="create-database">
            <h2>创始人帐号信息</h2>
            <div>
                <input type="text" name="admin[]" value="admin" required="required">
                <span>用户名</span>
            </div>
            <div>
                <input type="password" name="admin[]" value="" required="required">
                <span>密码</span>
            </div>
            <div>
                <input type="password" name="admin[]" value="" required="required">
                <span>确认密码</span>
            </div>
        </div>
    </form>
    </div>

            </div>
        </div>


        <!-- Footer
        ================================================== -->
        <footer class="footer">
            <div class="container">
                <div>
                	
    <a class="btn btn-success btn-large" href="<?php echo url('install/step1'); ?>">上一步</a>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <button id="submit" type="button" class="btn btn-primary btn-large" onclick="$('form').submit();return false;">下一步</button>

                </div>
            </div>
        </footer>
    </body>
</html>
