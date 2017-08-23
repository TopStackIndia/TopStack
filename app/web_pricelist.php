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
                                <li><a href="comming_soon\comming_soon.html">Earn with us</a>
                                    <!-- #portfollio -->
                                </li>
                                <li><a href="index#get-in-touch">contact</a>
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
                                            <a href="others_training.php">Desktop Application</a>
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
    <!-- Style for price table basic -->
                <style>
                @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic);

body {
 


  -webkit-font-smoothing: antialiased;
  -webkit-backface-visibility: hidden;

}

.pricing {
	text-align: center;
	border: 1px solid #f0f0f0;
	color: #777;
    font-size: 16px;
	padding-left: 0;
	margin-top: 40px;
    margin-bottom: 25px;
  /*font-family: 'Lato';*/
}

.pricing li:first-child,
.pricing li:last-child {
	padding: 20px 13px;
}
.pricing li {
	list-style: none;
	padding: 13px;
}
.pricing li + li {
	border-top: 1px solid #f0f0f0;
}
.pricing big {
	font-size: 32px;
}
.pricing h3 {
	margin-bottom: 0;
  font-size: 36px;
}
.pricing span {
	font-size: 12px;
	color: #999;
	font-weight: normal;
}
.pricing li:nth-last-child(2) {
	padding: 30px 13px;
}
.pricing button {
	width: auto;
	margin: auto;
	font-size: 15px;
	font-weight: bold;
	border-radius: 50px;
	color: #fff;
	padding: 9px 24px;
	background: #aaa;
	opacity: 1;
	transition: opacity .2s ease;
  border: none;
  outline: none;
}
.pricing button:hover {
	opacity: .9;
}
.pricing button:active {
	box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.1);
}
/* pricing color */
.p-green big,
.p-green h3 {
	color: #4c7737;
}
.p-green button {
	background: #4c7737;
}
.p-yel big,
.p-yel h3 {
	color: #ffbb42;
}
.p-yel button {
	background: #ffbb42;
}
.p-red big,
.p-red h3 {
	color: #e13c4c;
}
.p-red button {
	background: #e13c4c;
}
.p-blue big,
.p-blue h3 {
	color: #3f4bb8;
}
.p-blue button {
	background: #3f4bb8;
}
h2{
    margin-top:25px;
    color: #3f4bb8;
    margin-bottom:0px;
    text-align:center;
    
}
p{
    margin-top: 25px;
    text-align:center;
    font-size:16px;
}
.block a{
    color:#FFFFFF;
}
</style>
<section id="price heading">
<div class="container">
  <div class="row">
  <div class="col-md-2">
 
  </div>
  <div class="col-md-8">
   
   <h2>TopStack Webdevelopment Price List</h2>
   <p>TopStack offers cost-effective packages for website design, logo and corporate identity design</br>
     SEO services, brochure design, custom software development and other exclusive services.</p>
 
  </div>
  <div class="col-md-2">
 
  </div>
  
  </div>
  
  </div>

</section>


<section class="mysection">
                <section class="container">
                 <div class="row white">
				<div class="block">
                
					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-green">
								<li>
									<img src="http://bread.pp.ua/n/settings_g.svg" alt="">
									<big>Starter</big>
								</li>
								<li>Responsive Design</li>
								<li>Color Customization</li>
								<li>HTML5 & CSS3</li>
								<li>Styled elements</li>
                                <li>Free 6 Months maintenance</li>
								<li>
									<h3> ₹ 5,500</h3>
									<span>* one time.</span>
								</li>
								<li>
									<button onclick="window.location.href='#'" >Join Now</button>
								</li>
							</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-yel">
								<li>
									<img src="http://bread.pp.ua/n/settings_y.svg" alt="">
									<big>Good</big>
								</li>
								<li>Responsive Design</li>
								<li>Color Customization</li>
								<li>HTML5 & CSS3</li>
								<li>Database Driven</li>
                                <li>Free 1 Year maintenance</li>
								<li>
									<h3> ₹ 10,500</h3>
									<span>* one time.</span>
								</li>
								<li>
									<button>Join Now</button>
								</li>
							</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-red">
								<li>
									<img src="http://bread.pp.ua/n/settings_r.svg" alt="">
									<big>Ultimate</big>
								</li>
								<li>Responsive Design</li>
								<li>Color Customization</li>
								<li>HTML5 & CSS3</li>
                                <li>Custom Web application</li>
                                <li>Free 1 Year maintenance</li>
								<li>
									<h3> ₹ 24,500</h3>
									<span>* one time.</span>
								</li>
								<li>
									<button><a href="login.php">Join Now</a></button>
								</li>
							</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
							<ul class="pricing p-blue">
								<li>
									<img src="http://bread.pp.ua/n/settings_b.svg" alt="">
									<big>Vip</big>
								</li>
								<li>Responsive Design</li>
								<li>Color Customization</li>
								<li>HTML5 & CSS3</li>
								<li>Premium advertising</li>
                                <li>Full business solution</li>
								<li>
									<h3> ₹ 55,999</h3>
									<span>* one time.</span>
								</li>
								<li>
									<button>Join Now</button>
								</li>
							</ul>
					</div>


				</div><!-- /block -->
			</div><!-- /row -->
  </section>


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