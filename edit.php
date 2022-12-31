
<?php 
  include "db.php";
?>



<?php
   $userid=($_GET['id']);
if(isset($_POST['submit'])) {

  $name = ($_POST['name']);
  $email = ($_POST['email']);
  $phone = ($_POST['phone']);

  $imagename = $_FILES["images_banner"]["name"];
  $tempname = $_FILES["images_banner"]["tmp_name"];   
  $folder = "images/".$imagename;
  $image_move = move_uploaded_file($tempname, $folder);


  $query=mysqli_query($conn, "update  form set   name='$name',  email='$email', phone='$phone', images_banner='$imagename' where id ='$userid'");
 //$query = mysqli_query($conn,"insert into form( name,email,phone,images_banner,gender,fav_language,birth) values('$name','$email','$phone','$imagename','$gender','$fav_language','$dob')");



 if ( $query) {
 ?>
  <script>
       alert("data uploaded successfully");
  </script>

<?php

  }else{

    ?>
    <script>
         alert("Something went wrong . Please try again.");
    </script>
  
  <?php
   

  }


   header("Location: table.php");
  exit();

}

// data  fetch for input value // 
$userid = $_GET['id'];

$result=mysqli_query($conn,"select * from form where id ='$userid'");

$row = mysqli_fetch_array($result);


?>






 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>::Auntys-Kitchen ::</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Quickdev">
<meta http-equiv="Cache-Control" content="no-store" />
<link rel="canonical" href="https://example.com"/>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/aos.css"/>
<!-----Font ---->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/6.0.0/esm/ionicons.min.js" integrity="sha512-EmbXlzmS4lTfNxBz7xWacOcWYBw42KAzHTbtuVQvCPrR+fTeHHMB2dnxKqxhwqSqrK8foPW/LZOnHof4DCDHMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!----------owl----------->
<link href="css/owl.carousel.min.css" rel="stylesheet">
<!----ANIMATION CSS----->
<link href="wow/css/animate.css" rel="stylesheet">

 <script src="js/modernizr.js"></script>
 <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->
<!--- Custom ---->
<link href="css/scss/style.css" rel="stylesheet">
<style>
    .contact-form{
        height: auto;
        padding:50px
    }
    .contact-form .formpart form input[type="radio"]{
        width: auto !important;
        height: auto !important;
    }
</style>

</head>
<body>
   
<main>

<!-----contact form------>
<div class="contact-form benefit">
    <div class="container">
        <div class="row  ">
        
            <div class="col-lg-7 m-auto">
              
               <div class="formpart "> 
               <h5>Submit</h5>
                  
               <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" required  value="<?php  echo $row['name'];?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email id</label>
                        <input id="email" class="form-control" type="email" name="email"  value="<?php  echo $row['email'];?>">
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone no</label>
                        <input id="phone" class="form-control" type="text" name="phone"  value="<?php  echo $row['phone'];?>">
                    </div>
                    <div class="form-group">
                        <label>image</label> 
                        <input class="form-control" type="file" name="images_banner">  
                        <img src="images/<?php  echo $row['images_banner'];?>" width="100"/>
                    </div>
                
                    <div class="form-group">
                        <div class="submit mt-5">
                            <button class="btn btn-success w-100" href="#" name="submit">
                                <span>Submit</span>
                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
            </div>
        </div>
    </div>
</div>





<!---JS --->
<script src="js/jquery.slim.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!----wow ---->
<script src="wow/js/wow.js"></script>
<script src="wow/js/wow.min.js"></script>
<!---owl---->
<script src="js/owl.carousel.min.js"></script>
<!---font------->
<script src="js/ionicons.js"></script>
<!---aos---->
<script src="js/aos.js"></script>
<!----CUSTOM JS---->
<script src="js/custom.js"></script>




   
</body>
</html>