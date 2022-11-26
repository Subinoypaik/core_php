
<?php 
  include "db.php";
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


</head>
<body>
   
<div class="card mb-4">
<div class="card-header">

<i class="fas fa-table me-1"></i>

Category DataTable

</div>
<div class="card-body">
    <a href="index.php">ADD MORE</a>
<table id="datatablesSimple">
        <thead>
        <tr>
            <th>#</th>            

            <th>NAME</th>

            <th>#EMAIL</th>

            <th>#PHONE</th>

        </tr>
        </thead>
        <?php

                                    $result=mysqli_query($conn,"select * from form");
                                    $row=mysqli_num_rows($result);
                                    while ($row=mysqli_fetch_array($result)) {

                                   ?> 
                                            <tr>
                                                <td><?php  echo $row['name'];?></td>
                                                <td> <?php  echo $row['email'];?></td>
                                            <td> <?php  echo $row['phone'];?></td>
                                </tr>

                <?php 
                } ?>     

</tbody>

</table>



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



