
<?php 
  include "db.php";
?>
<?php 

if(isset($_GET['delid']))

{

    $rid=$_GET['delid'];
    $deletequrey = "delete from form where id='$rid'";

    $sql=mysqli_query($conn,$deletequrey);


    echo "<script>alert('Data deleted');</script>"; 

    echo "<script>window.location.href = 'table.php'</script>";     
  
};


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
  #datatablesSimple{
    width:100% !important;
  }
</style>
</head>
<body>
   
<div class="card mb-4">
<div class="card-header">

<i class="fas fa-table me-1"></i>

Category DataTable

</div>
<div class="card-body">
    <a href="index.php">ADD MORE</a>
<table id="datatablesSimple " class="w-100">
        <thead>
        <tr>
            <th>#</th>            

            <th calspan="3">NAME</th>

            <th calspan="3">EMAIL</th>

            <th calspan="3">PHONE</th>
            <th calspan="3">Image</th>
            <th calspan="3">Gender</th>
            <th calspan="3">Language</th>
            <th calspan="3">Birhday</th>
            <th calspan="3">Action</th>

        </tr>
        </thead>
        <?php

                                    $result=mysqli_query($conn,"select * from form");
                                    $cnt=0;
                                   
                                    $row=mysqli_num_rows($result);
                                   
                                      if( $row>0){

                                        while ($row=mysqli_fetch_array($result)) { 
                                   ?>  <?php  $cnt=$cnt+1;?>
                                            <tr>
                                               <td calspan="3"><?php  echo  $cnt;?></td>
                                                <td calspan="3"><?php  echo $row['name'];?></td>
                                                <td calspan="3"> <?php  echo $row['email'];?></td>
                                                 <td calspan="3"> <?php  echo $row['phone'];?></td>
                                                 <td calspan="3"> <img width="100" src="images/<?php  echo $row['images_banner'];?>"/></td>
                                                 <td calspan="3">  <?php  echo $row['gender'];?></td>
                                                 <td> <?php  echo $row['fav_language'];?></td>
                                                 <td> <?php  echo $row['birth'];?></td>
                                                 <td>  <a href="table.php?delid=<?php echo ($row['id']);?>" class="delete btn btn-success" title="Delete"  onclick="return confirm('Do you really want to Delete ?');">Delete</a>
</td>
                                           
                                             </tr>
                                            
                                   <?php 
                                    
                                   }} else{?>
                                    <tr><td>no record</td></tr>
                                   <?php } ?>     

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



