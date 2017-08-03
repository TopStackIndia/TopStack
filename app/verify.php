<?php
require_once 'class.user.php';
$user = new USER();

if(empty($_GET['id']) && empty($_GET['code']))
{
 $user->redirect('index.php');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
 $id = base64_decode($_GET['id']);
 $code = $_GET['code'];
 
 $statusY = "Y";
 $statusN = "N";
 
 $stmt = $user->runQuery("SELECT userID,userStatus FROM tbl_users WHERE userID=:uID AND tokenCode=:code LIMIT 1");
 $stmt->execute(array(":uID"=>$id,":code"=>$code));
 $row=$stmt->fetch(PDO::FETCH_ASSOC);
 if($stmt->rowCount() > 0)
 {
  if($row['userStatus']==$statusN)
  {
   $stmt = $user->runQuery("UPDATE tbl_users SET userStatus=:status WHERE userID=:uID");
   $stmt->bindparam(":status",$statusY);
   $stmt->bindparam(":uID",$id);
   $stmt->execute(); 
   
   $msg = "
            
           <strong>WoW !</strong>  Your Account is Now Activated : <a href='index.php'>Login here</a>
        
          "; 
  }
  else
  {
   $msg = "
       
          <strong>Sorry !</strong>  Your Account is allready Activated : <a href='index.php'>Login here</a>
         
          ";
  }
 }
 else
 {
  $msg = "
        
      <strong>Sorry !</strong>  No Account Found : <a href='signup.php'>Signup here</a>
      
      ";
 } 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Topstack</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
       
        <h3 class="text-muted">TopStackIndia</h3>
      </div>

      <div class="jumbotron">
        
       <h2> <?php if(isset($msg)) { echo $msg; } ?></<h2>
      
      </div>

     
      </div>

      

    </div> <!-- /container -->
  </body>
</html>