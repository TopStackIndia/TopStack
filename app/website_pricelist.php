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

         <section id="webprice_detils">
          
     
         <div class="container">
                    <div class="row">
                    <h1>Web Design Prices</h1>
                    <p><a href="http://www.expertwebworld.com/free-website-quote"><img src="images/FREE-Quote.png" alt="Web Design Quote" class="pull-right myclass"></a>Let us build an online website for your business in very cheap price. Website price always depend on the business type, delivered lines of code, time spent on design and we get this idea in telephonic meeting or by emails with client. The cost of designing and developing a website is generally measured in terms of person months of effort spent in design and development. We always draw a demo structure of website design in a paper after getting the client requirement, and then we insert these into the website development plan and calculate the price of website. Price is mostly depends on the main home page design and its re-design. A website price is more if its contains lots of banners, image effect, functionality and forms on the home page as compare to insert simple content on the home page with navigation for simple website. We are showing approximate prices of website design and development below. Expert Web World provides free web hosting and domain registration for first year with every website design and development order.</p>
                         <div class="col-md-12 margin-bottom-40">
                         <div class="table-responsive">
 <table class="table table-bordered">
 <tbody><tr>
 <td>
    <div class="list-group text-center">
              <div class="list-group-item active">
                <h2 class="list-group-item-heading"><span class="seo">Services</span></h2>
              </div>
              <div class="list-group-item paragraph">
               <span class="list-group-item-text">Pages</span>
             </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">Custom Design</span>
            </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">Design Revisions</span>
              </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">Responsive Design</span>
              </div>
              <div class="list-group-item  paragraph">
                <span class="list-group-item-text">Logo</span>
              </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text ">Contact Us Form</span>
              </div>
			  <div class="list-group-item  paragraph">
                <span class="list-group-item-text">Image Gallery</span>
              </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">CMS / Dynamic </span>
              </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">Optimised coding</span>
              </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">W3C Validation</span>
              </div>
			    <div class="list-group-item  paragraph">
                <span class="list-group-item-text">Meta Tags Analytic</span>
              </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">Google Analytics</span>
              </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text"> Banner</span>
              </div>
			  <div class="list-group-item paragraph">
                <span class="list-group-item-text">Free Domain</span>
              </div>
              <div class="list-group-item  paragraph">
                <span class="list-group-item-text">Secure Web Hosting</span>
             </div>
              <div class="list-group-item paragraph">
                <span class="list-group-item-text">Free Email Accounts</span>
              </div>
              <div class="list-group-item  paragraph">
                <span class="list-group-item-text">SEO Submission</span>
             </div>
			  <div class="list-group-item">
                <span class="pricing mbt">USD</span>
              </div>
			    <div class="list-group-item">
				<span class="pricing mbt">INR</span>
             </div>
            </div>
    </td>
    <td>
    <div class="list-group text-center">
              <div class="list-group-item active">
                <h2 class="list-group-item-heading"><span class="seo">1-5 Page</span></h2>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">1-5</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Unlimited</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">3 Samples</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">Yes</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">Yes</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
             </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			    <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text"> 3</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
             </div>
              <div class="list-group-item">
                <span class="list-group-item-text">1 year free</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Basic</span>
              </div>
			  <div class="list-group-item">
                <span class="pricing mbt">$125</span>
              </div>
			    <div class="list-group-item">
				<span class="pricing mbt">₹6000</span>
              </div>
               <div class="list-group-item">
              <a href="pay-online.php" class="btn btn-success btn-lg btn-block" role="button">
                Buy Now
              </a>
              </div>
            </div>
  </td>
  <td>
    <div class="list-group text-center">
              <div class="list-group-item active">
                <h2 class="list-group-item-heading"><span class="seo">6-10 Page</span></h2>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">6-10</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Unlimited</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">3 Samples</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">Yes</span>
             </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">Yes</span>
            </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			    <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Max 5</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">1 year free</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Basic</span>
              </div>
			  <div class="list-group-item">
                <span class="pricing mbt">$200</span>
              </div>
			    <div class="list-group-item">
				<span class="pricing mbt">₹9500</span>
             </div>
             <div class="list-group-item">
              <a href="pay-online.php" class="btn btn-success btn-lg btn-block" role="button">
                Buy Now
              </a>
              </div>
            </div>
   </td>
   <td>
    <div class="list-group text-center">
              <div class="list-group-item active">
                <h2 class="list-group-item-heading"><span class="seo">11-15 Page</span></h2>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">11-15</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Unlimited</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">3 Samples</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
             </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">Yes</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			    <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
             </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Max 5</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">1 year free</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Basic</span>
             </div>
			  <div class="list-group-item">
                <span class="pricing mbt">$300</span>
              </div>
			    <div class="list-group-item">
				<span class="pricing mbt">₹12000</span>
              </div>
              <div class="list-group-item">
              <a href="pay-online.php" class="btn btn-success btn-lg btn-block" role="button">
               Buy Now
              </a>
              </div>
            </div>
    </td>
    <td>
    <div class="list-group text-center">
              <div class="list-group-item active">
                <h2 class="list-group-item-heading"><span class="seo">Unlimited</span></h2>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Unlimited Pages</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
             </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Unlimited</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">3 Samples</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			    <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Max 5</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text">1 year free</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">1 year free</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Advanced</span>
              </div>
			  <div class="list-group-item">
                <span class="pricing mbt">$500</span>
              </div>
			    <div class="list-group-item">
				<span class="pricing mbt">₹25000</span>
              </div>
              <div class="list-group-item">
              <a href="pay-online.php" class="btn btn-success btn-lg btn-block" role="button">
                Buy Now
              </a>
              </div>
            </div>
    </td>
    <td>
    <div class="list-group text-center">
              <div class="list-group-item active">
                <h2 class="list-group-item-heading"><span class="seo">Ecommerce</span></h2>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Unlimited</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Unlimited</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">3 Samples</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			   <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
			    <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">FREE</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Max 5</span>
              </div>
			  <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">1 year free</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text green">YES</span>
              </div>
              <div class="list-group-item">
                <span class="list-group-item-text">Advanced</span>
              </div>
			  <div class="list-group-item">
                <span class="pricing mbt">$600</span>
              </div>
			    <div class="list-group-item">
				<span class="pricing mbt">₹35000</span>
              </div>
               <div class="list-group-item">
              <a href="pay-online.php" class="btn btn-success btn-lg btn-block" role="button">
               Buy Now
              </a></div>
            </div>
   </td>
   </tr>
   </tbody></table>
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