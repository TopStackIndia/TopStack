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
        <!--<link rel="stylesheet" href="css/hostinger.css">-->

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
                                            <a href="web_technology.php">Web Technology</a>
                                        </li>
                                        <li>
                                            <a href="mobile_technology.php">Mobile Technology</a>
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

         <section id="team_detils">
         
          

         <div class="container">
                    <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">
                    <div class=WordSection1>

<p class=MsoNormal><span lang=EN-IN>&nbsp;</span></p>

<table class=MsoTable15Grid4Accent1 border=1 cellspacing=0 cellpadding=0
 width=0 style='width:474.85pt;border-collapse:collapse;border:none'>
 <tr style='height:29.4pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #4F81BD 1.0pt;
  background:#4F81BD;padding:0in 5.4pt 0in 5.4pt;height:29.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN style='color:white'>Refer a friend who is in need
  of web site development and start to earn money now!</span></b></p>
  </td>
 </tr>
 <tr style='height:27.75pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;height:27.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>Wallet sharing:  20% for Websites.</span></b></p>
  </td>
 </tr>
 <tr style='height:29.4pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:29.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>20% for Customized
  Software.                                                         </span></b></p>
  </td>
 </tr>
 <tr style='height:27.75pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;height:27.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>Refer a friend who is in need of Industrial
  Training and start to earn money now!</span></b></p>
  </td>
 </tr>
 <tr style='height:29.4pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:29.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>Wallet sharing: 10% </span></b></p>
  </td>
 </tr>
 <tr style='height:27.75pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;height:27.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>Refer a friend who is in need of guidance for
  Final Year Projects and start to earn money now!</span></b></p>
  </td>
 </tr>
 <tr style='height:29.4pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:29.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>Wallet sharing 10% </span></b></p>
  </td>
 </tr>
 <tr style='height:29.4pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;background:#DBE5F1;padding:0in 5.4pt 0in 5.4pt;height:29.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>Refer a friend who is in need coaching and start
  to earn money now!</span></b></p>
  </td>
 </tr>
 <tr style='height:27.75pt'>
  <td width=633 valign=top style='width:474.85pt;border:solid #95B3D7 1.0pt;
  border-top:none;padding:0in 5.4pt 0in 5.4pt;height:27.75pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><b><span lang=EN-IN>Wallet sharing: 10% </span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b><span lang=EN-IN>&nbsp;</span></b></p>

<p class=MsoNormal><span lang=EN-IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-IN>&nbsp;</span></p>

<p class=MsoNormal><span lang=EN-IN>&nbsp;</span></p>

</div>

                   </div> </div>
         
         
         
         
         
         
         
         
         
         
         
         </section>
        </br>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
       
        
        





     
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