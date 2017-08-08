<?php
session_start();
require_once 'class.user.php';
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

 /* Update or insert in the tbl_userdetails 

 TODO:// table_name:tbl_userdetails  */

 if(isset($_POST['btn-signup']))
 {
  /**************************/   
  $name = ($_POST['name']);
 //$email = $_POST['email'];
  $phone=trim($_POST['phone']);
  $cgpa=($_POST['cgpa']);
  $institute_name=($_POST['institute_name']);
  $qualification=($_POST['qualification']);
  $address=($_POST['address']);
  $dob=($_POST['DOB']);
  
  $userid=$row['userID'];
  
  if($user->update_details_std($name,$phone,$address,$cgpa,$institute_name,$qualification,$dob,$userid))
  {
    $msg=" <div class='alert alert-success'>
    
    <strong>Success!</strong>Go To Dashboard For Generating Invoice.
    <font color=#fffff> <a href=dashboard.php>Dashboard</a></font>
  </div>";

}
else
{
 echo "sorry , Query could no execute...";
} 
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>TopStack-billing Detils</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <p></p>
      <p></p>
      <p></p>
      <p></p>
      <?php if(isset($msg)) echo $msg;  ?>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h2>Billing Details</h2></div>

          <div class="panel-body">
            
           <div class="col-md-12">

            <form role="form" id="userdetils-form" autocomplete="off" method="post">
              <div class="form-group">
               <label for="email">Name:</label>
               <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $row['userName']; ?>" >
             </div>
             <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['userEmail']; ?>" disabled>
             </div>
             <div class="form-group">
               <label for="pwd">Phone:</label>
               <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo $row['userPhone']; ?>">
             </div>
             <div class="form-group">
               <label for="email">Current CGPA or Percentage of last appeared exam:</label>
               <input type="text" class="form-control" id="cgpa" placeholder="Enter cgpa" name="cgpa" value="<?php echo $row['cgpa']; ?>">
             </div>
             <div class="form-group">
               <label for="email">Intitute Name:</label>
               <input type="text" class="form-control" id="institute_name" placeholder="Enter Institute Name" name="institute_name" 
               value="<?php echo $row['institute_name']; ?>">
             </div>
             <div class="form-group">
               <label for="email">Qualification:</label>
               <input type="text" class="form-control" id="qualification" placeholder="Enter qualification" name="qualification" value="<?php 
               echo $row['qualification']; ?>" >
             </div>
             <div class="form-group">
               <label for="dob">Date of Birth:</label>
               <input type="text" class="form-control" id="DOB" placeholder="Enter qualification" name="DOB" value="<?php echo $row['DOB']; ?>">
             </div>
             <div class="form-group">
               <label for="email">Address:</label>
               <textarea class="form-control" id="address" placeholder="Enter Address" name="address"><?php echo $row['address']; ?></textarea>
             </div>
             
             <button type="submit" class="btn btn-success btn-lg" name="btn-signup">Update Details</button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
 

</body>
</html>
