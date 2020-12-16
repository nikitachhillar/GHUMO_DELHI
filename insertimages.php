<?php
	ini_set('mysqli.connect_timeout',300);
	ini_Set('default_socket_timeout',300);
?>


<html>
	<body>
		<form method="post" enctype="multipart/form-data">
		<br/>
			<input type="file" name="image"/>
			<br/><br/>
			<input type="submit" name="sumit" value="Upload"/>
		</form>
		<?php
			if(isset($_POST['sumit']))
			{
				if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
				{
					echo "Please select an image.";
				}
				else
				{
					$image= addslashes($_FILES['image']['tmp_name']);
					$name= addslashes($_FILES['image']['name']);
					$image= file_get_contents($image);
					$image= base64_encode($image);
					saveimage($name,$image);
				}
			}
			function saveimage($name,$image)
			{
				$con=mysqli_connect("localhost","root","");
				mysqli_select_db($con,"photos");
				$qry="insert into images (name,image) values ('$name','$image')";
				$result=mysqli_query($con,$qry);
				if($result)
				{
					echo "<br/>Image uploaded.";

				}
				else
				{
					echo "<br/>Image not uploaded.";

				}
			}
		?>
	</body>
</html>