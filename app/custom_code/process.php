<?php
############ My Config ###########
$main_dp_url="";
session_start();
require_once '../class.user.php';
$user = new USER();
if($user->is_logged_in()!="")
{
  $stmt = $user->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
  $stmt->execute(array(":uid"=>$_SESSION['userSession']));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}else
{
  $user->redirect('login.php');
}




############ Configuration ##############
$config["generate_image_file"]			= true;
$config["generate_thumbnails"]			= true;
$config["image_max_size"] 				= 500; //Maximum image size (height and width)
$config["thumbnail_size"]  				= 200; //Thumbnails will be cropped to 200x200 pixels
$config["thumbnail_prefix"]				= "thumb_"; //Normal thumb Prefix
$config["destination_folder"]			= 'uploads/'; //upload directory ends with / (slash)
$config["thumbnail_destination_folder"]	= 'uploads/'; //upload directory ends with / (slash)
$config["upload_url"] 					= "http://www.topstackindia.com/custom_code/uploads/";       // TODO: change with prodction server url
$config["quality"] 						= 90; //jpeg quality
$config["random_file_name"]				= true; //randomize each file name


if(!isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	exit;  //try detect AJAX request, simply exist if no Ajax
}


//specify uploaded file variable
$config["file_data"] = $_FILES["__files"]; 


//include sanwebe impage resize class
include("resize.class.php"); 


//create class instance 
$im = new ImageResize($config); 


try{
	$responses = $im->resize(); //initiate image resize
	 //echo $responses;
	echo '<h3>Thumbnails</h3>';
	//output thumbnails
	foreach($responses["thumbs"] as $response){
		echo '<img src="'.$config["upload_url"].$response.'" class="thumbnails" title="'.$response.'" />';
		echo $config["upload_url"].$response;
       
       $main_dp_url=$config["upload_url"].$response;
		
	}
	
	echo '<h3>Images</h3>';
	//output images
	foreach($responses["images"] as $response){
		echo '<img src="'.$config["upload_url"].$response.'" class="images" title="'.$response.'" />';
	}

     $userid=$row['userID'];
    $user->update_profile_picture($main_dp_url,$userid);
	
}catch(Exception $e){
	echo '<div class="error">';
	echo $e->getMessage();
	echo '</div>';
}

		
?>