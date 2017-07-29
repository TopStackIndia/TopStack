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

    <!-- Angular.js CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

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
                <a href="javascript:void(0)" class="Switcher"><span class="fa fa-pencil fa-lg"></span></a>
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
                        <img src="img/logo.png" alt="">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="index.html#about">about</a></li>
                        <li><a href="index.html#services">services</a></li>
                        <li><a href="index.html#team">team</a></li>
                        <li><a href="index.html#ourwork">our work</a></li>
                        <li><a href="index.html#contact">contact</a></li>
                       
                        <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training Details <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="php_training.html">PHP/MySQL Training</a>
                            </li>
                            <li>
                                <a href="#">Android Training</a>
                            </li>
                            <li>
                                <a href="others_training.php">Others Training</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="login.php">Login</a>
                        </li>
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
                        <h2>Training Details</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Professional Modern Technology Training</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section id="others_trainig">
            <div class="container">
                 <!-- Content Row -->
        <div class="row">
            <!-- Sidebar Column -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item" onclick="change_Angular()">Angular.JS</a>
                    <a href="#" class="list-group-item" onclick="change_Node()">Node.JS</a>
                    <a href="#" class="list-group-item" onclick="change_Python()">Python</a>
                    <a href="#" class="list-group-item" onclick="change_Javaee()">Java EE</a>
                    <a href="#" class="list-group-item" onclick="Change_csharp()">C# (Sharp) Training</a>
                    <!--<a href="#" class="list-group-item">2 Column Portfolio</a>
                    <a href="#" class="list-group-item">3 Column Portfolio</a>
                    <a href="#" class="list-group-item">4 Column Portfolio</a>
                    <a href="#" class="list-group-item">Single Portfolio Item</a>
                    <a href="#" class="list-group-item">Blog Home 1</a>
                    <a href="#" class="list-group-item">Blog Home 2</a>
                    <a href="#" class="list-group-item">Blog Post</a>
                    <a href="#" class="list-group-item">Full Width Page</a>
                    <a href="#" class="list-group-item active">Sidebar Page</a>
                    <a href="#" class="list-group-item">FAQ</a>
                    <a href="#" class="list-group-item">404</a>
                    <a href="#" class="list-group-item">Pricing Table</a>-->
                </div>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">
                 <h2 id="tech_heading">Angular JS Training</h2>
                  <p id="tech_paragraph">AngularJS is a structural framework for dynamic web apps. It lets you use HTML as your template language and lets you extend HTML's syntax to express your application's components clearly and succinctly. AngularJS's data binding and dependency injection eliminate much of the code you would otherwise have to write.</p>
                  <!--
                  <hr>
                  <h3>Example Try Yourself</h3>
                  <div ng-app="">
                    <p>Type something in the input box:</p>
                    <p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
                    <h4>Hello {{name}}</h4>
                  </div>-->
                 <!--- 
                <object id="tech_video" data="https://www.youtube.com/embed/WAZTZUgeLhQ?rel=0&amp;showinfo=0"
                  width="560" height="315" ></object>-->
                 <div class="embed-responsive embed-responsive-4by3">
                  <img id="tech_img" src="img/technology/AngularJS-large.png" width="100%" height="100%">
                </div>
                  
            </div>
        </div>
        <!-- /.row -->
          <hr>

            </div>
        </section>

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

        

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <span class="divider grey"></span>
                   <!-- <h4>TopStack<span class="brandy">2017</span> India.com.</h4>-->
                    <h4>Copyright <span class="brandy">&copy;2017</span> TopStackindia.com</h4>
                    <!--<h5>by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a>-->
                    </h5>
                    <a href="#" class="scroll-top">
                        <img src="img/top.png" alt="" class="top">
                    </a>
                </div>
            </div>
        </footer>
    </div>
    <!--/wrap-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    
    <script src="js/script.js"></script>
    <script type="text/javascript">
        function change_Angular() {
             document.getElementById("tech_heading").innerHTML = "Angular.JS Training";
             document.getElementById("tech_paragraph").innerHTML ="AngularJS is a structural framework for dynamic web apps. It lets you use HTML as your template language and lets you extend HTML's syntax to express your application's components clearly and succinctly. AngularJS's data binding and dependency injection eliminate much of the code you would otherwise have to write."

             var dat=document.getElementById("tech_img");
             //dat.data="http://www.youtube.com/embed/W7qWa52k-nE";
             dat.src="img/technology/AngularJS-large.png"

            // body...
        }
        function change_Node(){
            document.getElementById("tech_heading").innerHTML = "Node.JS Training";
            document.getElementById("tech_paragraph").innerHTML ="Node.js is a platform built on Chrome's JavaScript runtime for easily building fast, scalable network applications. Node.js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient, perfect for data-intensive real-time applications that run across distributed devices.";
             
            document.getElementById("tech_img").src="img/technology/nodejs.jpg";
             //var data= document.getElementById("tech_img");
            // dat.src="img/technology/nodejs.jpg"

        }

        function change_Python()
        {  document.getElementById("tech_heading").innerHTML = "Python Training";
           document.getElementById("tech_paragraph").innerHTML ="Python Training for Beginners - Learn Python in simple and easy steps starting from basic to advanced concepts with live project";
          document.getElementById("tech_img").src="img/technology/Python.png";
        }
        function change_Javaee()
        {
            document.getElementById("tech_heading").innerHTML = "Java Enterprise Edition Training";
            document.getElementById("tech_paragraph").innerHTML ="Java EE Training for Beginners - Learn Java EE in simple and easy steps starting from basic to advanced concepts with live project.";
           document.getElementById("tech_img").src="img/technology/javaee.png";

        }
        function Change_csharp()
        {
            document.getElementById("tech_heading").innerHTML = "C# Training";
            document.getElementById("tech_paragraph").innerHTML ="Microsoft C# Training. Learn C# in simple and easy steps starting from basic to advanced concepts with live project.";
           document.getElementById("tech_img").src="img/technology/csharp.png";

        }



    </script>

</body>

</html>