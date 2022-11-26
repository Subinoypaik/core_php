
<?php 
  include "db.php";
?>





<?php
 
if(isset($_POST['submit'])) {

  $name = ($_POST['name']);
      
         

  $email = ($_POST['email']);

  $phone = ($_POST['phone']);



 $query = mysqli_query($conn,"insert into form( name,email,phone) values('$name','$email','$phone')");



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

  

 }; 

 
 ?>
 <!-- <?php

	//$headers = "From: subinoy.swadesh@gmail.com";

	//$to = "subinoy.swadesh@gmail.com";
	//$subject = "Sending Emails From Localhost";
	//$message = "Sending emails from a localhost home server?\n\nEven send custom multi line emails? Tell me more!";

	//if ( //mail($to, $subject, $message, $headers) )
		//echo 'Success!';
//	else
		//echo 'UNSUCCESSFUL...';

?> -->


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
                  
                <form method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email id</label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone no</label>
                        <input id="phone" class="form-control" type="text" name="phone">
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



