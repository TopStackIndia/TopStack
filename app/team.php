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
                                <li><a href="#">team</a>
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
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!--/.container -->
                </div>
                <!--/.navbar -->

         <section id="team_detils">
          
          <!-- this section style-->
          <style>
          
          @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

body {
    font-family: 'Source Sans Pro', sans-serif;
    line-height: 1.5;
    color: #323232;
    font-size: 15px;
    font-weight: 400;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}
.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}

          
          
          </style>
         <div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h3 class="text-uppercase">Our professionals </h3>
                            <p class="p-top-30 half-txt">We enjoy teamwork and encourage ideas to emerge from all members of our team. It is a way to enhance our project through open discussion and encourage ideas. </p>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="img/profile/age.png" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hi There !</h4>
                                        <p>I'am Sushanta Sengupta , CEO of TopStack.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Sushanta Sengupta</h5>
                                <span> Cheief Executive Officer</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="img/profile/age.png" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hi There !</h4>
                                        <p>I love to introduce myself as a hardcore programmer & core library developer .</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Shibdas Bhattacharya</h5>
                                <span>Industry Principal</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="img/profile/rajdeep.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>Hi There !</h4>
                                        <p>I love to introduce myself as a hardcore fullstack web developer and Mobile app developer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Rajdeep Das</h5>
                                <span>Subject Matter Expert(SME)</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="img/profile/age.png" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>I love to develop</h4>
                                        <p>I love to introduce myself as a hardcore Java EE Developer.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Amarnath Chowdhury</h5>
                                <span>Cheief Technical Officer(CTO)</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="img/profile/age.png" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4>I love to design</h4>
                                        <p>I love to introduce myself as a hardcore Web Designer, design that touch your heart.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>Saswata Sarkar</h5>
                                <span>Lead designer</span>
                            </div>
                        </div>
                        

                    </div>

                </div>
         
         
         
         
         
         
         
         
         
         
         
         </section>







     
                <!-- Footer Style sheet -->
               
                
                <footer id="site-footer">
                <div class="container">
                    <div class="row">
                        <!--   <div class="col-md-12">-->

                        <div class="col-md-3" >
                          
                           <div class="headline" style="text-align:justify;" ;><h5>Useful Links</h5></div>
                             <ul class="list-unstyled link-list" style="text-align:justify;" ;>
                               <li><a href="">About us</a>
                              <li><a href="">Training Methodology</a>
                              <li><a href="">Infrastructure</a>
                              <li><a href="">Clients</a>
                            </ul>
                
                        </div>
                        <div class="col-md-3">
                           
                            <div class="headline" style="text-align:justify;" ;><h5>Latest post</div>
                             <ul class="list-unstyled link-list" style="text-align:justify;" ; >
                               <li><a href="">Current project</a>
                              <li><a href="">Current training</a>
                              <li><a href="">New services</a>
                              <li><a href="">Current courses</a>
                            </ul>
                           
                             
                           

                        </div>
                        <div class="col-md-3">
                        <div class="headline" style="text-align:justify;" ;><h5>Quick notification</div>
                             <ul class="list-unstyled link-list" style="text-align:justify;" ; >
                               <li><a color=white href="">Training price</a>
                              <li><a href="">Web development price</a>
                              <li><a href="">Course fees</a>
                             
                            </ul>
                            
                        </div>
                        <div class="col-md-3" style =" margin-top: 50px;">
                        <p style="font-size:30px;">TopStack</p>
                        <p>Excellence guaranteed</p>
                        </div>

                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <!--  <a href="http://www.dmca.com/Protection/Status.aspx?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w200-5x1-09.png?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>-->
                    </div>
                    <hr></hr>
                    <h6>Copyright <span>&copy;2017</span> TopStackindia.com</h6>
                    <a href="//www.dmca.com/Protection/Status.aspx?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w100-5x1-11.png?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                    <div>
                    
                </div>
                

                <!--    <a href="http://www.dmca.com/Protection/Status.aspx?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w200-5x1-09.png?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>-->
                <!-- </div>-->
                <!--
           <div class="col-md-4">
                           <span class="divider grey"></span>
                           
                            <h4>Copyright <span class="brandy">&copy;2017</span> TopStackindia.com</h4>
                    
                    
                            <a href="#" class="scroll-top">
                           
                            <i class="fa fa-angle-up fa-4x faa-bounce animated"></i>
                            </a>
                        </div>-->
            </footer>
        </div>
        <!--/wrap-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <script src="js/waypoints.min.js"></script>

        <!--  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>-->
        <script src="js/script.js"></script>
        
    </body>
</html>