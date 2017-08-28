<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
 $user_login->redirect('dashboard.php');
}

if(isset($_POST['btn-login']))
{
 $email = trim($_POST['username']);
 $upass = trim($_POST['password']);
 
 if($user_login->login($email,$upass))
 {
  $user_login->redirect('dashboard.php');
 }
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
    <title>TopStack-LearnCode</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css" title="mainStyle">

    <script src="js/modernizr.custom.32033.js"></script>
    <!-- Main Application backed logical Code !-->
    
</head>

<body>
    <!-- Wrap all page content here -->
    <div id="wrap">

        <!-- Fixed navbar -->
        <div class="navbar navbar-fixed-top" id="nav" role="navigation">
            <div class="theme-switcher">
                <div class="colors">
                    <a href="javascript:void(0)" class="blue"></a>
                    <a href="javascript:void(0)" class="orange"></a>
                    <a href="javascript:void(0)" class="red"></a>
                </div>
            <!--    <a href="javascript:void(0)" class="Switcher"><span class="fa fa-pencil fa-lg"></span></a>-->
            </div>
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                    <!--    <img src="img/logo.png" alt="">-->
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about">about</a></li>
                        <li><a href="index.php#services">services</a></li>
                        <li><a href="team.php">team</a></li>
                        <li><a href="index.php#ourwork">our work</a></li>
                        <li><a href="index.php#contact">contact</a></li>

                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training <b class="caret"></b></a>
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
                        <li><a href="login.php">Login</a></li>
                        <li class="social-nav">
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

        <section class="well well-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>TopStack Login </h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Login</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="cotainer">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                  <?php 
                   if(isset($_GET['inactive']))
                  {
                    ?>
                    <div class='alert alert-danger'>
                   <button class='close' data-dismiss='alert'>&times;</button>
                   <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
                   </div>
                  <?php
                }
                ?>
       
               <?php
                     if(isset($_GET['error']))
                        {
                    ?>
                      <div class='alert alert-danger'>
                    <button class='close' data-dismiss='alert'>&times;</button>
                    <strong>Wrong Details!</strong> 
                    </div>
                     <?php
                     }
                      ?>
                    </div>
                    <div class="col-md-3"></div>
                 </div>
               </div>
        </section>
        <section id="login_detils">
            <div class="container">
                <div class="row">
                    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

                    <div id="login-overlay" class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel">Login to TopStack India</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="well">
                                             <form id="loginForm" action="" method="post">
                                            <div class="form-group">
                                                <label for="username" class="control-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username"
                                                    placeholder="example@gmail.com">
                                                <span class="help-block"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="control-label">Password</label>
                                                <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                                <span class="help-block"></span>
                                            </div>
                                            <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                            <div class="checkbox">
                                                <label>
                                      <input type="checkbox" name="remember" id="remember"> Remember login
                                  </label>
                                                <p class="help-block">(if this is a private computer)</p>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block" id="btnLogin" name="btn-login">Login</button>
                                            <a href="fpass.php" class="btn btn-default btn-block" >Forget PassWord</a>
                                            <button id="btnLogout" class="btn btn-action hide">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <p class="lead">Register now for <span class="text-success">FREE</span></p>
                                        <ul class="list-unstyled" style="line-height: 2">
                                            <li><span class="fa fa-check text-success"></span> See all your progress</li>
                                            <li><span class="fa fa-check text-success"></span> Fast Learning Metial</li>
                                            <li><span class="fa fa-check text-success"></span> Save your time</li>
                                            <li><span class="fa fa-check text-success"></span> Free Source Code</li>
                                            <li><span class="fa fa-check text-success"></span> Get a gift for good performance</li>
                                            <!-- <li><a href="#"><u>Read more</u></a></li>-->
                                        </ul>
                                        </br>
                                        </br>
                                        <p><a href="Signup.php" target="_blank" class="btn btn-info btn-block">Yes please, Register Now!</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <h1 id="user_email"></h1>
        <section id="get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading">
                            <h1>Get in touch</h1>
                            <h4>Please Contact Us for further information!</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <div class="detail">
                                <h4>TopStack
                                    <span class="brandy">I</span>ndia</h4>
                                <p>Hooghly-Chinsurah ,West Bengal, India,712105</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>(+91) 8981426926 </p>
                                <p>(+91) 8658852591 </p>
                                <p>(+91) 8981426926 </p>
                            </div>
                            <div class="detail">
                                <h4>email us</h4>
                                <p>training.topstack@gmail.com</p>
                            </div>
                            <div class="detail">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube fa-2x"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-pinterest fa-2x"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group has-feedback left">
                                <input type="text" class="form-control" placeholder="NAME">
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback left">
                                <input type="email" class="form-control" placeholder="Email">
                                <i class="fa fa-envelope-o form-control-feedback"></i>
                            </div>
                            <div class="form-group has-feedback left">
                                <textarea class="form-control" rows="7" placeholder="MESSAGE"></textarea>
                                <i class="fa fa-pencil-square-o form-control-feedback"></i>
                            </div>
                            <button class="btn btn-primary btn-lg pull-right" type="submit">SUBMIT</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="map"></section>

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
                               <li><a color=white href="training_price.php">Training price</a>
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

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
  
   
    <script src="js/script.js"></script>
    <script>
        function my_availabe_soon() {
            alert("Hello! Registraion will availabe Soon!");
        }
        function forgot_pass_contact() {
            alert("If you forgot your screct password please contact our admin!");
        }
    </script>
   
</body>

</html>