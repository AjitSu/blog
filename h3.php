<html>
	<head>
		<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
			<form method="POST"enctype="multipart/form-data">
			<input type="file" name="file" />
			<input type="submit" name="submit" value="submit">
		</form>





	</body>
	</html>
	<?php
			if(isset($_POST['submit']))
			{
				$name = $_FILES['file']['name'];
				

				$temp_name = $_FILES['file']['tmp_name']; // tmp_name

				if(isset($name)){
				if(!empty($name)){

				$location = 'image/';
				}
				if(move_uploaded_file($temp_name, $location.$name)){
				echo 'uploaded';
				}
				}  else {
				echo 'please uploaded';
				}
							}


	?>