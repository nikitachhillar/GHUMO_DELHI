<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<style>
	body{
	background-color: pink;
}
table,th,td{
	border: 2px solid black;
	width: 1100px;
	background-color: white;
}
.btn{
	width: 15%;
	height: 30%;
	font-size: 15px;
	padding: 5px;
}
	</style>
</head>
<body>
	<center>
		<h1>Search a record</h1>
		<h2>Search data </h2>
		<div class="container">
			<form action=""method="POST">
				<input type="text" name="Places" class="btn" placeholder="Enter a Place"/>
				<input type="submit" name="search" class="btn" value="Search"/>
			</form>
			<table>
							<tr>
								<th>S.No</th>
								<th>Places</th>
								<th>Location</th>
								<th>Tickets</th>
								<th>Timings</th>
								<th>Nearest Metro Station</th>
								<th>Contact</th>
								<th>Official Website</th>
							</tr> <br>
						<?php
						$connection = mysqli_connect("localhost:3308", "root","");
						$db = mysqli_select_db($connection, 'ghumo_delhi');

						if(isset($_POST['search']))
						{
							$Places = $_POST['Places'];
							$query = "SELECT * FROM locations WHERE Places='$Places'";
							$query_run = mysqli_query($connection, $query);	
							while($row = mysqli_fetch_array($query_run))
							{
								?>
								<tr>
									<td> <?php echo $row['S.No']; ?></td>
									<td> <?php echo $row['Places']; ?></td>
									<td> <?php echo $row['Location']; ?></td>
									<td> <?php echo $row['Tickets']; ?></td>
									<td> <?php echo $row['Timings']; ?></td>
									<td> <?php echo $row['Nearest Metro Station']; ?></td>
									<td> <?php echo $row['Contact']; ?></td>
									<td> <?php echo $row['Official Website']; ?></td>
								</tr>
								<?php
							}				
						 
						 }	
						?>
			</table>
		</div>
	</center>
</body>
</html>

