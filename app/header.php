<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if (!$user_home->is_logged_in()) {
 //$user_home->redirect('index.php');
    $menu_val="<a href='login.php'>Login</a>";
} else {
    $stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
    $stmt->execute(array(":uid"=>$_SESSION['userSession']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

//Custom 

    $username= $row['userName'];
    $menu_val="<a  href='dashboard.php'> <i class='fa fa-user'></i></a>";
}
?>




    <!doctype html>
    <!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
    <!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
    <!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
    <!--[if gt IE 8]><!-->
    <html lang="en" class="no-js">
    <!--<![endif]-->

    <head>
        <meta charset="UTF-8">
        <title>TopStack - Learn Code Today</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" href="img/favicon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/jquery.easy-pie-chart.css">
        <link rel="stylesheet" href="css/styles.css" title="mainStyle">

        <!-- REVOLUTION BANNER CSS SETTINGS -->
        <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

        <script src="js/modernizr.custom.32033.js"></script>

        <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!-- For Animation the Boostrap Icons -->
        <link rel="stylesheet" href="animation_css/font-awesome-animation.min.css">
        <!-- Referrence Library Use: http://l-lin.github.io/font-awesome-animation/-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">

    </head>
    <body>
   
      <!-- Fixed navbar -->
      <div class="navbar navbar-static-top" id="nav" role="navigation">
                    <div class="theme-switcher">
                        <div class="colors">
                            <a href="javascript:void(0)" class="blue"></a>
                            <a href="javascript:void(0)" class="orange"></a>
                            <a href="javascript:void(0)" class="red"></a>
                        </div>
                        <!--  <a href="javascript:void(0)" class="Switcher"><span class="fa fa-pencil fa-lg"></span></a>-->

                    </div>
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                            <a class="navbar-brand" href="#">
                                <img src="img/logo-blue.png" alt="" width=152 height=43.64 style=" vertical-align: middle;
                                                                                             margin-bottom: 0.80em;">
                            </a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a>
                                </li>
                                <li><a href="index.php#about">about</a>
                                </li>
                                <li><a href="index.php#services">services</a>
                                </li>
                                <li><a href="team.php">team</a>
                                    <!-- original #team-->
                                </li>
                                <li><a href="earn_with_us.php">Earn with us</a>
                                    <!-- #portfollio -->
                                </li>
                                <li><a href="index.php#get-in-touch">contact</a>
                                </li>
                                <!--    <li><a href="comming_soon\comming_soon.html">Education</a>
                            </li>-->
                                <!--  <li><a href="comming_soon\comming_soon.html">Careers</a>
                            </li>-->



                                <!-- my Drop Down -->
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="php_training.php">Web Technology</a>
                                        </li>
                                        <li>
                                            <a href="android_training.php">Mobile Technology</a>
                                        </li>
                                        <li>
                                            <a href="comming_soon\comming_soon.html">Desktop Application</a>
                                        </li>

                                    </ul>
                                </li>
                                <!--  <li><a href="login.php">Login</a>
                        </li>-->
                                <li>
                                <?php echo $menu_val; ?>
                                    <li>

                                        <!---<li><a href="blog-archive.html">blog</a>-->

                                        <li class="social-nav visible-lg">
                                        <a href="https://twitter.com/Topstack2" target="_blank" ><i class="fa fa-twitter"></i></a>
                                            <a href="https://www.facebook.com/topstackindia/" target="_blank"><i class="fa fa-facebook"></i></a>
                                            <a href="https://plus.google.com/u/0/117395637788190105861" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            <a href="https://www.linkedin.com/in/topstack-india-711998148/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                        </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.navbar -->
    