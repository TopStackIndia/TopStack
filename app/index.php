<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
 //$user_home->redirect('index.php');
   $menu_val="<a href='login.php'>Login</a>";

}else
{
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
    <link rel="shortcut icon" href="favicon.ico">

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

</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="img/logo-blue.png" class="animated fadeFFFown" alt="">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="go-down">
        <a href="#whoWeAre">
         
        
        <i class="fa fa-angle-down fa-3x faa-bounce animated"></i>
          
        </a>
    </div>
    <!-- Wrap all page content here -->
    <div id="wrap" class="home">
     
        <header class="masthead">
            <div class="slider-container" id="slider">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="img/dummy.png" data-lazyload="img/samples/slider-bk.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->



                                <div class="tp-caption italic large_white_light sft hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="-100" data-speed="700" data-start="1300" data-easing="Power4.easeOut">
                                    We Develop
                                </div>
                                <div class="tp-caption italic large_white_light sfl hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="-50" data-speed="700" data-start="1500" data-easing="Power4.easeOut">
                                    Strong .
                                </div>
                                <div class="tp-caption italic large_white_light sfb hidden-xs" data-x="left" data-y="center" data-hoffset="147" data-voffset="-50" data-speed="700" data-start="1700" data-easing="Power4.easeOut">
                                    Beautiful .
                                </div>
                                <div class="tp-caption italic large_white_light sfr hidden-xs" data-x="left" data-y="center" data-hoffset="335" data-voffset="-50" data-speed="700" data-start="1900" data-easing="Power4.easeOut">
                                    Functional
                                </div>
                                <div class="tp-caption lfb " data-x="left" data-y="center" data-hoffset="0" data-voffset="25" data-speed="2400" data-start="1900" data-easing="Power4.easeOut">
                                    <a href="##myhidden" class="btn btn-naked">Learn More About Us <span class="fa fa-angle-right"></span></a>
                                </div>

                            </li>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="img/dummy.png" data-lazyload="img/samples/slider-bk3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption sft fadeout" data-x="center" data-y="center" data-hoffset="0" data-voffset="0" data-speed="500" data-start="700" data-easing="Power4.easeOut">
                                    <img src="img/samples/macbook-bl.png" class="macbook-image" alt="">
                                </div>

                                <div class="tp-caption large_white_light italic sfb hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="0" data-speed="2400" data-start="1300" data-easing="Power4.easeOut">
                                    <a href="#portfolio" class="btn btn-naked">Check Our Work</a>
                                </div>
                                <div class="tp-caption italic large_white_light sft hidden-xs" data-x="right" data-y="center" data-hoffset="0" data-voffset="0" data-speed="2400" data-start="1300" data-easing="Power4.easeOut">
                                    <a href="#team" class="btn btn-naked">Meet The Team</a>
                                </div>
                            </li>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="img/dummy.png" data-lazyload="img/samples/slider-bk2.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption lfl fadeout" data-x="left" data-y="center" data-hoffset="0" data-voffset="0" data-speed="500" data-start="700" data-easing="Power4.easeOut">
                                    <img src="img/samples/iphone.png" alt="">
                                </div>
                                <div class="tp-caption large_white_bold sft" data-x="520" data-y="center" data-hoffset="0" data-voffset="-120" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                                    <h1>Welcome</h1>
                                </div>
                                <div class="tp-caption large_white_light sfb" data-x="520" data-y="center" data-hoffset="0" data-voffset="-40" data-speed="1000" data-start="1300" data-easing="Power4.easeOut">
                                    We Develop
                                </div>
                                <div class="tp-caption large_white_light sfb" data-x="520" data-y="center" data-hoffset="0" data-voffset="10" data-speed="1000" data-start="1300" data-easing="Power4.easeOut">
                                    Beautiful & Functional Applications
                                </div>
                                <div class="tp-caption large_white_light sfb" data-x="520" data-y="center" data-hoffset="0" data-voffset="60" data-speed="1000" data-start="1300" data-easing="Power4.easeOut">
                                    Websites, Bradings & Web Apps
                                </div>
                                <div class="tp-caption sfb hidden-xs" data-x="520" data-y="center" data-hoffset="0" data-voffset="150" data-speed="2400" data-start="1700" data-easing="Power4.easeOut">
                                    <a href="##myhidden" class="btn btn-primary btn-lg">LEARN MORE</a>
                                </div>
                            </li>

                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>

            </div>

            <!-- Fixed navbar -->
            <div class="navbar navbar-static-top" id="nav" role="navigation">
                <div class="theme-switcher">
                    <div class="colors">
                        <a href="javascript:void(0)" class="blue"></a>
                        <a href="javascript:void(0)" class="orange"></a>
                        <a href="javascript:void(0)" class="red"></a>
                    </div>
                    <a href="javascript:void(0)" class="Switcher"><span class="fa fa-pencil fa-lg"></span></a>
                </div>
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="img/logo-blue.png" alt="">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#slider">Home</a>
                            </li>
                            <li><a href="#about">about</a>
                            </li>
                            <li><a href="#services">services</a>
                            </li>
                            <li><a href="comming_soon\comming_soon.html">team</a>   <!-- original #team-->
                            </li>
                            <li><a href="comming_soon\comming_soon.html">our work</a>                      <!-- #portfollio -->
                            </li>
                            <li><a href="#get-in-touch">contact</a>
                            </li>
                            <li><a href="comming_soon\comming_soon.html">Education</a>
                            </li>
                            <li><a href="comming_soon\comming_soon.html">Careers</a>
                            </li>
                            

                            <!-- my Drop Down -->
                             <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training Details <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="php_training.php">PHP/MySQL Training</a>
                            </li>
                            <li>
                                <a href="android_training.php">Android Training</a>
                            </li>
                            <li>
                                <a href="others_training.php">Others Training</a>
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

        </header>

        <section id="whoWeAre">
        </br>
         </br>
         </br>
         </br>
         </br>
         </br>
         </br>
         </br>
         </br>
         <p></p>
         <p></p>
         <p></p>
         </br>
         
        

            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>We are TopStac<span>k</span>
                            </h1>
                            <h4>Founded in August,2017 topstack is a group of vibrant inquisitive mind ventured on the array of technical education and software
                                development to zero down the gap of academic education and industry needs. Our integrated in-house software development and
                                technical training programme is perfect model fit to equip resources with latest technology trends. Stepped out on the line
                                of project based learning our organizational motto is learn smart earn smarter. From spanish saying we are surely
                                “e pluribus unum”  but  “Al hombre osado la fortuna le da la mano”.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-bug  fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Web developemt & Responsive WebDesign</h4>
                                <p>We are Software Development & Training Firm.In these tough times, where it is hard to maintain the top line, we can help share the bottom-line for you.We will be happy to help execute SEO & Web Design and Development,Sofware Development
                                Projects at a much significantly lesser cost  than what you have in house -
                                <font color="#1fad1f"> No Compromise on quality! </font></p>
                            </div>
                        </div>
                        <div class="media scrollpoint sp-effect2">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-android fa-4x" ></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Android App Developemnt</h4>
                                <p>Android is growing rapidly, so there is always going to be a need for android developers.
                                    Learn the Android programming concepts and build a variety of apps.We also Develop Android App.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object fa fa-male fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">industrial training</h4>
                               <p>In this training, you’ll learn how to design and build beautiful websites.Because of it’s easy to learn and high demand in the industry it’s easy for WebDeveloper fresher to get job.You’ll learn HTML,HTML5 and CSS3,JavaScript,jQuery,which are the common code languages that all modern websites are built on. You will also learn modern Resposive WebDesign For mobile & desktop platform using <a href="http://getbootstrap.com/">Bootstrap</a> Framework and Serverside Development Using PHP</p>
                            </div>
                        </div>
                        <div class="media right scrollpoint sp-effect1">
                            <a class="pull-right" href="#">
                                <i class="media-object 	fa fa-mobile-phone fa-4x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">iOs Development</h4>
                                <p>To put your business on the iOS domain, you need to hire expert developers with the best exposure to various iOS development. TopStack proudly announces to serve you the best with the help of its experienced team of iOS developers..</p>
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--- My hidden section for set currect topstack postion by akash -->
       
        <section id="#myhidden">
            <div class ="container">
                    <div class="row">
                     <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                        </br>
                        </br>
                        </div>
                               
                    </div>
                  
                    </div>
            </div>
        </section>


        <section id="about">
         </br>
         </br>
         </br>
         </br>
         </br>
         
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>about TopStac<span>K</span> </h1>
                            <h4>We are Software Development & Training Firm.In these tough times, where it is hard to maintain the top line, we can help share the bottom-line for you.We will be happy to help execute SEO & Web Design and Development,Sofware Development Projects at a much significantly lesser cost! We never Compromise on Quality</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 scrollpoint sp-effect4">
                                <img src="img/samples/imac.png" class="img-responsive img-center" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-university fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Why TopStack</h4>
                                        <p>Charge very competitive price.Cover basic as well as advanced contents.Completely target-oriented training, students know what they are going to learn beforehand.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-user fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">what we do</h4>
                                        <p>Proper analysis of industry need before designing course.Impart training by highly qualified and experienced industry experts.At the end of course students are aligned with the live industrial projects.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-umbrella fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">our mission</h4>
                                        <p>To provide quality software products with emerging tools and technologies
                                           to satisfy client's need and deliver product in time with competitive price.
                                           To impart high quality technical training to under graduate and diploma students
                                           to bridge their curricular gap and
                                           to provide first hand industry exposure to the students.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="media vertical scrollpoint sp-effect5">
                                    <a href="#">
                                        <i class="media-object fa fa-taxi fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">our vision</h4>
                                        <p>To become a leading product developing and training company in the field of Information & Technology in tomorrow's market.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--
        <section id="highlights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <!--
                            <ol class="carousel-indicators vertical">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <!--
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/samples/600-300/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/samples/600-300/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img src="img/samples/600-300/1.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4>Company (TopStack HighLight) highlights</h4>
                        <h5>This is how we have aachieved the success!</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, nisi, debitis, quia molestiae ipsa dolores beatae eaque nulla tempora deserunt sunt suscipit quisquam laborum magnam aut reiciendis sed pariatur totam!</p>
                        <ul>
                            <li>Aenean sodales justo in neque adipiscing pulvinar.</li>
                            <li>Vivamus faucibus nisi et fermentum mattis.</li>
                            <li>Proin commodo lorem non gravida varius.</li>
                            <li>Proin condimentum lacus sed tristique lacinia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>-->
        <!--
        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 scrollpoint sp-effect1">
                        <img src="img/samples/ipad-bl.png" class="img-responsive ipad-image img-center" alt="">
                    </div>
                    <div class="col-md-7 scrollpoint sp-effect2">
                        <h1>.Core Features of bond<span>Y</span>
                        </h1>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Beautiful</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Powerful</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                        <div class="media media-circle">
                            <a class="pull-left" href="#">
                                <i class="media-object fa fa-angle-right fa-2x"></i>
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Responsive</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, eligendi ipsa repellendus aspernatur corrupti ex soluta vel ad quibusdam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section id="services">
        </br>
         </br>
         </br>
         </br>
         </br>
         </br>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>Services we offer</h1>
                            <h4>We provide Highy Quality WebDevelopent & Apllication Developemt Services.We also Design Application for Mobile and Embeded Systems & IoT(Internet of things) Services.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media media-services right scrollpoint sp-effect1">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-mobile fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Mobile app development</h4>
                                        <p>TopStack’s talent pool of mobile app developers includes highly-skilled analysts, UX experts and certified software engineers who are well-versed in building apps for all the major platforms — whether it’s iOS, Android, or both. Apps can be developed natively, or by using cross-platform frameworks like React Native and platforms such as PhoneGap or Xamarin.</p>
                                    </div>
                                </div>
                                <div class="media media-services right scrollpoint sp-effect2">
                                    <a class="pull-right" href="#">
                                        <i class="media-object  fa fa-globe fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Web Application</h4>
                                        <p>TopStack uses structured framework programming, coding guidelines and standards.
                                        As the technology advances and the programming landscape changes to accomodate the world's growing technological needs,TopStack constantly evaluates the latest trends in the development community. We improve ourselves to provide our clients the best possible development solutions.</p>
                                    </div>
                                </div>
                                <div class="media media-services right scrollpoint sp-effect1">
                                    <a class="pull-right" href="#">
                                        <i class="media-object fa fa-film fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Multimedia & Graphic Design.</h4>
                                        <p>We also provide professional multimedia services like video editing,animation,grphics design and logo design.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media media-services scrollpoint sp-effect2">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa fa-desktop fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Custom Software Development</h4>
                                        <p>Whether you are a start-up or an established business, we will be happy to assist you at any and every stage of the software development life cycle: from conceptualization, business analysis and prototyping to the development and deployment of a complete solution.</p>
                                    </div>
                                </div>
                                <div class="media media-services scrollpoint sp-effect1">
                                    <a class="pull-left" href="#">
                                        <i class="media-object"><i class="fa fa-cog fa-spin fa-2x"></i></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Internet of Things</h4>
                                        <p>TopStack Provide mobile-enabled Internet of Things (IoT) solutions for equipment and appliances controlled via mobile, including connected home solutions, real-time tracking and monitoring services, video surveillance, and many more.</p>
                                    </div>
                                </div>
                                <div class="media media-services scrollpoint sp-effect2">
                                    <a class="pull-left" href="#">
                                        <i class="media-object fa fa-mortar-board fa-2x"></i>
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Education</h4>
                                        <p>Getting good grades in academics is important to build up a successful career. Have guidance from reputed Tuition Centres and Coaching classes to do well in the final examination. Here we provide also Coaching Classes in Technical & Science Related Courses. Classes for all subjects and boards are available. Get course details, timing, tuition fees, location and contact details from our contact page.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- client testimonial -->
        <!--
        <section id="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <i class="fa fa-quote-left fa-4x"></i>
                            <h3>.Client's testimonials</h3>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="testimonials-carousel" class="carousel slide scrollpoint sp-effect3" data-ride="carousel">
                            <!Wrapper for slides -->
                            <!--
                            <div class="carousel-inner">
                                <div class="item active">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, cumque reprehenderit blanditiis consequatur magnam ipsa vitae deserunt odio nesciunt enim sint tempore magni sit alias illo quisquam unde. Laboriosam, minima!</p>
                                    <div class="row">
                                        <div class="col-md-4 col-md-push-5">
                                            <div class="author">
                                                <h5>Name dot name</h5>
                                                <p>Senior UI Developer - ScoopThemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, cumque reprehenderit blanditiis consequatur magnam ipsa vitae deserunt odio nesciunt enim sint tempore magni sit alias illo quisquam unde. Laboriosam.</p>
                                    <div class="row">
                                        <div class="col-md-4 col-md-push-5">
                                            <div class="author">
                                                <h5>Name dot name</h5>
                                                <p>Senior UI Developer - ScoopThemes</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

                            <!-- Controls -->
                            <!--
                            <a class="left carousel-control" href="#testimonials-carousel" data-slide="prev">
                                <i class="fa fa-angle-left fa-3x"></i>
                            </a>
                            <a class="right carousel-control" href="#testimonials-carousel" data-slide="next">
                                <i class="fa fa-angle-right fa-3x"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>-->
<!--
        <section id="buyNow">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 scrollpoint sp-effect2">
                        <img src="img/samples/macbook-bl.png" alt="" class="img-responsive macbook-image img-center">
                    </div>
                    <div class="col-md-5 scrollpoint sp-effect1">
                        <h1>.Buy bond<span>y</span>
                        </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis esse velit nesciunt. Eius, atque, animi quidem libero harum modi cumque similique eveniet consequuntur dignissimos beatae necessitatibus ipsum cum unde deleniti! animi quidem libero harum modi cumque similique eveniet consequuntur!</p>
                        <a href="#" class="btn btn-primary btn-lg">Buy now</a>
                    </div>
                </div>
            </div>
        </section>-->
    <!-- team
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.Meet the team</h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">
                                <div class="member-image">
                                    <img src="img/samples/team/1.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name">
                                    <h4>Sara jones</h4>
                                    <p>Art Director</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect3">
                                <div class="member-image">
                                    <img src="img/samples/team/2.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name member-odd">
                                    <h4>jon Doe</h4>
                                    <p>UI Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect5">
                                <div class="member-image">
                                    <img src="img/samples/team/3.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name">
                                    <h4>Sam jones</h4>
                                    <p>Design Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="row">
                            <div class="member scrollpoint sp-effect3">
                                <div class="member-image">
                                    <img src="img/samples/team/4.jpg" alt="" class="img-responsive img-center">
                                    <div class="member-details">
                                        <h4>Connect with me</h4>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, esse molestiae voluptates</p>
                                    </div>
                                </div>
                                <div class="member-name member-odd">
                                    <h4>Sofia jones</h4>
                                    <p>IT Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="skills">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h3>We got skills</h3>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="95">
                            <span>95%</span>
                        </div>
                        <h4 class="skill-detail">html/css</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="88">
                            <span>88%</span>
                        </div>
                        <h4 class="skill-detail">PHP/JSP/DataBase</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="85">
                            <span>85%</span>
                        </div>
                        <h4 class="skill-detail">Android & Java EE</h4>
                    </div>
                    <div class="col-md-3 col-sm-6 scrollpoint sp-effect6 text-center">
                        <div class="chart" data-percent="75">
                            <span>75%</span>
                        </div>
                        <h4 class="skill-detail">Python/Django</h4>
                    </div>

            </div>
            </div>
        </section>
      <!-- the work section
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>.the work</h1>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore reiciendis vel reprehenderit expedita cupiditate repellat debitis! Est qui quae consectetur.</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="filters" class="button-group">
                        <button data-filter="*" class="current">all items</button>
                        <button data-filter=".web-design">web design</button>
                        <button data-filter=".print">print</button>
                        <button data-filter=".mobile">mobile</button>
                        <button data-filter=".logo">logo</button>
                    </div>

                    <div id="container">
                        <div class="item col-md-3 col-sm-6 web-design">
                            <div class="details">
                                <img src="img/samples/portfolio/1.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-facebook"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 print">
                            <div class="details">
                                <img src="img/samples/portfolio/2.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-star-o"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Point Of Sale</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 mobile">
                            <div class="details">
                                <img src="img/samples/portfolio/6.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-star"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Web Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 logo">
                            <div class="details">
                                <img src="img/samples/portfolio/7.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-pinterest"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Logo Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 web-design">
                            <div class="details">
                                <img src="img/samples/portfolio/8.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Web Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 logo">
                            <div class="details">
                                <img src="img/samples/portfolio/3.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Logo Design</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 print">
                            <div class="details">
                                <img src="img/samples/portfolio/4.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Branding</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-6 mobile">
                            <div class="details">
                                <img src="img/samples/portfolio/5.jpg" alt="" class="img-responsive">
                                <div class="info-wrapper">
                                    <span class="heart"><i class="fa fa-heart"></i>
                                    </span>
                                    <div class="info">
                                        <div class="name-tag">
                                            <h5>Lorem ipsum dolor sit.</h5>
                                            <span class="divider"></span>
                                            <p>Mobile</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
       <!-- twitter section
        <section id="twitter">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading white scrollpoint sp-effect3">
                            <h1>TopStack<span>y</span>@ twitter</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="carousel-twitter" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!--
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-twitter" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-twitter" data-slide-to="1"></li>
                            <li data-target="#carousel-twitter" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <!--
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-8 col-md-push-2">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, eos, non ad molestiae obcaecate sapiente dolorem magnam quisquam maiores voluptatem sunt cumque iure illo a dicta? <a href="https://twitter.com/scoopthemes">https://twitter.com/scoopthemes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="follow">
                        <a href="#" class="btn btn-empty text-center">
                            <i class="fa fa-twitter"></i> Follow
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="get-in-touch">
        </br>
         </br>
         </br>
         </br>
         
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>get in touch</h1>
                            <h4>You Can Send Us Message or Follow our Facebook Page!</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <div class="detail">
                                 <h4>TopStacK
                                  </h4>
                                <p>Hooghly-Chinsurah ,West Bengal, India,712105</p>
                            </div>
                            <div class="detail">
                                <h4>call us</h4>
                                <p>(+91) 8961705845 </p>
                                <p>(+91) 8658852591 </p>
                                <p>(+91) 8981426926 </p>
                            </div>
                            <div class="detail">
                                <h4>email us</h4>
                                <p>training@topstackindia.com</p>
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
                                <input type="email" class="form-control" placeholder="EMAIL">
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

       <!-- <section id="map"></section>-->

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <span class="divider grey"></span>
                   <!-- <h4>TopStack<span class="brandy">2017</span> India.com.</h4>-->
                    <h4>Copyright <span class="brandy">&copy;2017</span> TopStackindia.com</h4>
                    
                    
                    <a href="#" class="scroll-top">
                        <img src="img/top.png" alt="" class="top">
                    </a>
                    
                </div>
                <a href="http://www.dmca.com/Protection/Status.aspx?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w200-5x1-09.png?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
            </div>
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

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
    <script src="js/script.js"></script>

    <script>
    $(document).ready(function() {
        appMaster.preLoader();
        appMaster.smoothScroll();
        appMaster.animateScript();
        appMaster.navSpy();
        appMaster.revSlider();
        appMaster.stellar();
        appMaster.skillsChart();
        appMaster.maps();
        appMaster.isoTop();
        appMaster.canvasHack();
    });
    </script>

</body>

</html>
