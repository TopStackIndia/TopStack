<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
 //$user_home->redirect('login.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

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

    <link rel="stylesheet" type="text/css" href="custom_code/style.css">

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php#about">about</a></li>
                        <li><a href="index.php#services">services</a></li>
                        <li><a href="index.php#team">team</a></li>
                        <li><a href="index.php#ourwork">our work</a></li>
                        <li><a href="index.php#contact">contact</a></li>

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
                                <a href="others_training.php">OThers Training</a>
                            </li>

                        </ul>
                    </li>

                     <li> 
                          <a  href="dashboard.php" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i> <?php echo $row['userName']; ?>
                           <i class="caret"></i>
                          </a>
                         
                        <ul class="dropdown-menu">
                            <li>        <a href="dashboard.php">DashBoard</a>
                                        <a href="userdetails.php">Update Details</a>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                            </li>

                        </ul>
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
                        <h2>User Area</h2>
                    </div>
                    <div class="col-md-6">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">DashBoard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section id="dashboard_detils">
            <div class="container">

                <div class="col-md-12">
                   <!-- <div class="panel panel-info">
                    <div class="panel-heading"><h2><?php echo $row['userName']; ?></h2></div>
                    <div class="panel-body"><h3>Your Details</h3>
                    <h5>Email:<?php echo $row['userEmail']; ?></h5>
                    <h5>Phone:<?php echo $row['userPhone']; ?></h5>
                    <h5>User Role:<?php echo $row['userType']; ?></h5></div>
                    </div>
                </div>-->
                <?php 
                    $dp_url= $row['dp_url'];

                    if($dp_url=="")
                    {
                        $dp_url="http://www.topstackindia.com/custom_code/uploads/default.png";  // TODO: Change In Prodcution Server

                    }
                  
                  
                ?>
                <img src="<?php echo $dp_url;  ?>" class="img-rounded" alt="Cinque Terre" width="200" height="200">

                
                

                <h2><?php echo $row['userName'];?></h2>
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">Change</button>
                <div class="col-md-12">
                <!-- Testing For Image Upload -->
                  <div class="container">
                                 <!-- Modal -->
                                   <div class="modal fade" id="myModal" role="dialog">
                                     <div class="modal-dialog">
    
                                       <!-- Modal content-->
                                         <div class="modal-content">
                                         <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal" onclick="reFresh()">&times;</button>
                                           <h4 class="modal-title">Upload Your Profile Picture</h4>
                                         </div>
                                         <div class="modal-body">
                                            <div class="form-wrap">
                                                     <form action="custom_code/process.php" method="post" enctype="multipart/form-data" id="upload_form">
                                                         <input name="__files[]" type="file" multiple />
                                                         <input name="__submit__" type="submit" value="Upload"/>
                                                     </form>
                                                     <div id="progress-wrp"><div class="progress-bar"></div ><div class="status">0%</div></div>
                                                     <div id="output"><!-- error or success results --></div>
                                            </div>
                                                <script>
                                                 function reFresh() {
                                                     window.location.reload();
                                                 }
                                                 </script>

                                         </div>
                                         <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reFresh()">Close</button>
                                         </div>
                                         </div>
      
                                     </div>
                                   </div>
  
                  </div>


                  </div>
                    

                </div>
               
            </div>
        </section>
       <hr>
       
        <section id="get-in-touch">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading">
                        <!---
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
            </div>-->
        </section>

     <!--   <section id="map"></section>-->

        <footer id="site-footer">
            <div class="container">
                <div class="row">
                    <span class="divider grey"></span>
                   <!-- <h4>TopStack<span class="brandy">2017</span> India.com.</h4>-->
                    <h4>Copyright <span class="brandy">&copy;2017</span> TopStackindia.com</h4>
                    <!--<h5>by <a href="http://www.scoopthemes.com" target="_blank">ScoopThemes</a></h5>-->
                    <a href="#" class="scroll-top">
                        <img src="img/top.png" alt="" class="top">
                    </a>
                </div>
                <a href="http://www.dmca.com/Protection/Status.aspx?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca-badge-w200-5x1-09.png?ID=feaa580d-787a-41c7-97ae-5b6f4b40349a" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
            </div>
        </footer>
    </div>
    <!--/wrap-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
   
    <script src="js/script.js"></script>

    
<!-- Profile Picture upload AJAX and JavaScript code  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
        //configuration
var max_file_size           = 2048576; //allowed file size. (1 MB = 1048576)
var allowed_file_types      = ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg']; //allowed file types
var result_output           = '#output'; //ID of an element for response output
var my_form_id              = '#upload_form'; //ID of an element for response output
var progress_bar_id         = '#progress-wrp'; //ID of an element for response output
var total_files_allowed     = 1; //Number files allowed to upload



//on form submit
$(my_form_id).on( "submit", function(event) { 
    event.preventDefault();
    var proceed = true; //set proceed flag
    var error = []; //errors
    var total_files_size = 0;
    
    //reset progressbar
    $(progress_bar_id +" .progress-bar").css("width", "0%");
    $(progress_bar_id + " .status").text("0%");
                            
    if(!window.File && window.FileReader && window.FileList && window.Blob){ //if browser doesn't supports File API
        error.push("Your browser does not support new File API! Please upgrade."); //push error text
    }else{
        var total_selected_files = this.elements['__files[]'].files.length; //number of files
        
        //limit number of files allowed
        if(total_selected_files > total_files_allowed){
            error.push( "You have selected "+total_selected_files+" file(s), " + total_files_allowed +" is maximum!"); //push error text
            proceed = false; //set proceed flag to false
        }
         //iterate files in file input field
        $(this.elements['__files[]'].files).each(function(i, ifile){
            if(ifile.value !== ""){ //continue only if file(s) are selected
                if(allowed_file_types.indexOf(ifile.type) === -1){ //check unsupported file
                    error.push( "<b>"+ ifile.name + "</b> is unsupported file type!"); //push error text
                    proceed = false; //set proceed flag to false
                }

                total_files_size = total_files_size + ifile.size; //add file size to total size
            }
        });
        
        //if total file size is greater than max file size
        if(total_files_size > max_file_size){ 
            error.push( "You have "+total_selected_files+" file(s) with total size "+total_files_size+", Allowed size is " + max_file_size +", Try smaller file!"); //push error text
            proceed = false; //set proceed flag to false
        }
        
        var submit_btn  = $(this).find("input[type=submit]"); //form submit button  
        
        //if everything looks good, proceed with jQuery Ajax
        if(proceed){
            //submit_btn.val("Please Wait...").prop( "disabled", true); //disable submit button
            var form_data = new FormData(this); //Creates new FormData object
            var post_url = $(this).attr("action"); //get action URL of form
            
            //jQuery Ajax to Post form data
$.ajax({
    url : post_url,
    type: "POST",
    data : form_data,
    contentType: false,
    cache: false,
    processData:false,
    xhr: function(){
        //upload Progress
        var xhr = $.ajaxSettings.xhr();
        if (xhr.upload) {
            xhr.upload.addEventListener('progress', function(event) {
                var percent = 0;
                var position = event.loaded || event.position;
                var total = event.total;
                if (event.lengthComputable) {
                    percent = Math.ceil(position / total * 100);
                }
                //update progressbar
                $(progress_bar_id +" .progress-bar").css("width", + percent +"%");
                $(progress_bar_id + " .status").text(percent +"%");
            }, true);
        }
        return xhr;
    },
    mimeType:"multipart/form-data"
}).done(function(res){ //
    $(my_form_id)[0].reset(); //reset form
    $(result_output).html(res); //output response from server
    submit_btn.val("Upload").prop( "disabled", false); //enable submit button once ajax is done
});
            
        }
    }
    
    $(result_output).html(""); //reset output 
    $(error).each(function(i){ //output any error to output element
        $(result_output).append('<div class="error">'+error[i]+"</div>");
    });
        
});
</script>




</body>

</html>
