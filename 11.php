<html>
	<head>
		<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<form method="POST">
		<div class="form-group">
  			<label for="comment">Comment:</label>
  			<textarea class="form-control" rows="5" id="comment" name="data"></textarea>
  			<input type="file" id="file" name="file" onchange="setfilename(this.value);"/>
  			<input type="submit" onclick="uploads" value="set image path" class="btn btn-success"name="submit">
  			<input type="submit" name="view" class="btn btn-primary" value="view data">
		</div>
		</form>
	</body>
	<script>
		function setfilename(val)
  		{
  			var info=document.getElementById('comment').value;
  			
    		var path = val.substr(val.lastIndexOf("\\")+1, val.length);
    		var fileName='<img src="'+path+'"  width=100% height=200px>';
    		var data=info+fileName;
			document.getElementById('comment').value= data;
		}
	</script>
</html>
<?php
	$con=mysqli_connect("localhost","root","","test");
	if(isset($_POST['submit']))
	{
		$comment=$_POST['data'];
		$sql="INSERT INTO demo(id,data) VALUES('','".$comment."')";
		$result=mysqli_query($con,$sql);
		if($result)
		{
			echo "<script>alert(' submitted successfully!');</script>";
		}
		else
        {
            echo "Error".mysqli_error($con);
        }
	}
?>
<?php
	$con=mysqli_connect("localhost","root","","test");
	if(isset($_POST["view"]))
	{
		$sql="SELECT * FROM demo";
		$result = mysqli_query ($con,$sql);
		while ($row = mysqli_fetch_assoc($result)) 
			{
				$aimage=$row['data'];
				?>
				<div>
				<?php echo $aimage ?></div>
				<?php
			}

	}
	?>