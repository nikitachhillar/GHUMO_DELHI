<?php
session_start();
?>
<!DOCTYPE html>
 <html>
 <head><title>Retreiving from  database</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="search.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet"> 
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet"> 
</head>

 <body>
<?php

    $conn=mysqli_connect('localhost:3308','root','','Ghumo_Delhi');
     
    
     $place=$_POST["search"];
    
     $_SESSION["search"]=$place; 
        
        $sql="select * from mytable where places='".$place."' ";
        
       $result1=mysqli_query($conn,$sql) or die(mysqli_error($conn));
 
    $row1=mysqli_fetch_row($result1);
     ?>
     
  
  
     <?php
     
        $sql1="select * from tbl_images where place='".$place."' ";
     $result2=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
 
    $row2=mysqli_fetch_row($result2);
        ?>
    <br>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="d-flex justify-content-center">
        <?php echo '<img class="center-block w-50" src="data:image/jpeg; base64,'.base64_encode( $row2[2] ).'"/>'?>
        </div>
    </div>
    <div class="carousel-item">
        <div class="d-flex justify-content-center">
      <?php echo '<img class="center-block w-50" src="data:image/jpeg;base64,'.base64_encode( $row2[3] ).'"/>'?>
        </div>
    </div>
    <div class="carousel-item">
        <div class="d-flex justify-content-center">
      <?php echo '<img class="center-block w-50" src="data:image/jpeg;base64,'.base64_encode( $row2[4] ).'"/>'?>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
        <br>
</div>
     <div class="card" style="width:1535px">
  <div class="card-body">
    <h4 class="card-title">Location: <?php echo $row1[1]; ?></h4><hr>
    <p class="card-text">About: <?php echo $row1[2]; ?></p>
    <p class="card-text">Address: <?php echo $row1[3]; ?></p>
      <p class="card-text">Tickets: <?php echo $row1[4]; ?></p>
      <p class="card-text">Timings: <?php echo $row1[5]; ?></p>
      <p class="card-text">Nearest Metro Station: <?php echo $row1[6]; ?></p>
      <p class="card-text">Contact: <?php echo $row1[7]; ?></p>
      <p class="card-text">Website: <a href="<?php echo $row1[8]; ?>"><?php echo $row1[8]; ?> </a></p>
      <p class="card-text">NearBy Places: <?php echo $row1[9]; ?></p>
    <a href="search1.html" class="btn btn-primary">BACK</a>
  </div>
</div>   
     
 </body>  
 </html>   