<?php
session_start();
?>
<!DOCTYPE html>
 <html>
 <head><title>Storing in database</title>
 </head>
 <body>
 <?php session_start();?>
<?php
    $conn=mysqli_connect('localhost:3308','root','','Ghumo_Delhi');
     
    
     $mail=$_POST['email'];
     $pswd=$_POST['password'];
     $_SESSION["emailid"]=$mail; 
        
        $sql="select * from Users where Email='".$mail."' and Password='".$pswd."' limit 1 ";
        
        $result=mysqli_query($conn,$sql); 
        if(mysqli_num_rows($result)==1)
        {
             header('Location:search1.html');
            exit();
        }
        else
        {
           header('Location:index.html');
        }
     
?>

 </body>  
 </html>   