  <?php 
  $msg = "";
  //if upload button is pressed
  if(isset($_POST['upload'])){
  //header('Location:'.$_SERVER['PHP_SELF']);
    $ext_errors= array();
    $target ="ebooks/".basename($_FILES['pdf']['name']);
    $target_img="ebook_images/".basename($_FILES['image']['name']);
  //connect to the databse
    $host_name="localhost";
    $db_pass="RajdeepDas0526";
    $db_name="id2195439_ebook_store";
    $db_user ="id2195439_rajdeep";

    //conection 
    $db = mysqli_connect("localhost",$db_user,$db_pass,$db_name);

  //Get all the Submitted data from the form
    $title = $_POST['title'];
    $catagory =$_POST['catagory'];
    $description=$_POST['description'];

  $pdf = $_FILES['pdf']['name'];     //this is the url in database
  $image =$_FILES['image']['name'];

  $file_type_pdf =$_FILES['pdf']['type'];
  $file_type_image=$_FILES['image']['type'];

  $tmp_1=explode('.',$_FILES['pdf']['name']);
  $tmp_2=explode('.',$_FILES['image']['name']);

  $pdf_ext=strtolower(end($tmp_1));
  $img_ext=strtolower(end($tmp_2));

  $expensions =array("jpeg","png","jpg");
  $expensions_pdf=array("pdf");

  if(in_array($img_ext,$expensions)=== false)
  {
    $ext_errors[]="Extension Not Alloed For image";
    echo '<div class="alert alert-danger">';
    echo '<strong>Extension Not Allowed!</strong> only PNG,JPEG,JPG for Image';
    echo '</div>';
  }
  if(in_array($pdf_ext, $expensions_pdf)=== false)
  {
    $ext_errors[]="Only Pdf Files Allowed";
    echo '<div class="alert alert-danger">';
    echo '<strong>Extension Not Allowed!</strong> Only PDF for Ebook';
    echo '</div>';
  }

  /*For Generating url for Download */
  $url = "http://rajdeep.online/ebooks/".$pdf;
  $img_url="http://rajdeep.online/ebook_images/".$image;
  $sql = "INSERT INTO ebooks_upload (title,catagory,description,image,url) VALUES ('$title','$catagory' ,'$description','$img_url','$url')";

  if(empty($ext_errors)==true)
  {
  mysqli_query($db,$sql);  //store the  data
  //Now let's move the uploaded image into the folder
  if((move_uploaded_file($_FILES['pdf']['tmp_name'], $target)) && (move_uploaded_file($_FILES['image']['tmp_name'], $target_img)))
  {
    $msg = "Image uploaded successfully";
    echo '<div class="alert alert-success">';
    echo '<strong>successfully Added!</strong>';
    echo '</div>';
   //unset($_POST);
  }else{
    $msg ="There was a problem uploading image";
  }

}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Admin Panel</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <h1 align="center">Book Details</h1>
    <!-- enctype="multipart/form-data" is important-->
    <form method="post" action="admin.php" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title" >Title:</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="form-group">
        <label for="catagory">Catagory:</label>
        <select class="form-control"  name="catagory">
          <option value="programming">Programming</option>
          <option value="computer_science">Computer Science</option>
          <option value="framework">FrameWork</option>
          <option value="datascience">DataScience</option>
          <option value="electronics">Electronics</option>
        </select>
      </div>
      <div class="form-group">
        <label for="pdf">Ebook File:</label>
        <input type="file" name="pdf">
      </div>
      <div>
        <label for="image">Book Image:</label>
        <input type="file" name="image">
      </div>

      <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" rows="5"  name="description"></textarea>
      </div>
      <input type="submit" name="upload" class="btn btn-info" value="Add to DataBase">
      &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"  class="btn btn-info" value="Clear">
    </form>


  </div>
  <div class="col-sm-3"></div>
</body>
</html>