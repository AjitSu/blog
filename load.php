<html>
	<head>
		<meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			  <style>
                .content {
                            padding: 20px;
                        }
                    .footer {
                     grid-row-start: 2;
                    grid-row-end: 3;
                    }
                    .footer {
                        background: #424242;
                        color: white;
                        padding: 20px;
                        }
            .navbar li
            {
            	font-size: 20px;
            	font-style: bold;
            	color:white;
            }
            .header h1
            {
            	text-decoration-color: 	white;
            }
            .image 
            { 
			   position: relative; 
			   width: 100%; /* for IE 6 */
			}

			.image h2 h5
			{ 
			   position: absolute; 
			   top: 200px; 
			   left: 0; 
			   width: 100%; 
               padding-bottom: 2px;
			}
            body
            {
                background-color:#D8D8D8;
            }
			</style>
	</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top "style="background-color:#424242;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="logo.png"class="img-responsive"style="width:150px; height: 30px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Admin Panel</a></li>
    </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<!--     <div class="container-fluid"> -->
        <div class="row">
            <div class="col-md-12">
                <img src="head.png" class="img-responsive"style="width: 100%; height:200px;">
            </div>
        </div>
    <!-- </div> -->
    <br>

    <table class="table " width="600">
         <thead class="thead-dark">
        <tr>
        <th>ID</th>
        <th>Image Detials</th> 

        <th>Blog name</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
        <thead>


        






    <?php
$conn = mysqli_connect("localhost","root","","test");

    
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM demo";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr>";
echo "<td>" . $row['id']. "</td>";
echo "<td>" . $row['image']."</td>";
echo "<td>" . $row['Title']."</td>";
echo "<td><a href='update.php?id=".$row['id']."'>Edit</a></td>";
echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
echo "</tr>";
}
echo "</table>";
} 
$conn->close();

?>
</table>