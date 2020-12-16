<?php
session_start();
?>
<!DOCTYPE html>
 <html>
 <head><title>Storing in database</title>
 </head>
 <body>
 <?php
    
 $mail=$_POST["email"];
    $Pass=$_POST["password"];
     $uname=$_POST["name"];
    
    //create a connection
    $conn = new mysqli('localhost:3308', 'root','','Ghumo_Delhi');
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
echo "Connected successfully";
}
   
$sql="INSERT   INTO Users(Name,Email,Password) VALUES ('$uname','$mail','$Pass')";

if ($conn->query($sql)==TRUE) {
  echo "New record  created";
}

    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
     header('Location:index.html');

$conn->close();
    
?>

 </body>  
 </html> 
