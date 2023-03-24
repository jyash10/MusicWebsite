<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Display All all songs from database using php</title>
</head>
<body>

	<div class="container mt-3 mb-3">
		<h1><b>Display All Songs from database using php</b></h1>
		<hr/>
				<a href="upload.php" class="btn btn-primary mt-3">Upload a New Music</a>
				<hr/>
		<div class="row">
				<?php
				include("db.php");
					
				$q = "SELECT * FROM songs";

				$query = mysqli_query($con,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['songname'];
					$songfile=$row['songfile'];
					?>

					<div class="col-md-4">
						<audio controls>
<source src="<?php echo 'upload/'.$songfile;?>"> 
                </audio>
                <?php echo "<br>".$name; ?>
					</div>

				<?php }
?>
</div>
				</div>
</body>
</html>