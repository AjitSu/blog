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
    
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                  <div class="panel-heading panel-success">Blog </div>
                  <div class="panel-body">
                    
                    <?php 
                    $id=$_GET['id'];
                        $con=mysqli_connect("localhost","root","","test");
                        $sql="SELECT * FROM demo where id='$id'";
                        $result=mysqli_query($con,$sql);
                        while ($row=mysqli_fetch_assoc($result)) {
                           // print_r($row);
                            ?>

                        
                      <div class="row">
                            <div class="col-md-2">
                                <lable >Title of Blog</lable>
                            </div>
                            <form method="POST"enctype="multipart/form-data">
                            <div class="col-md-8">
                                <input type="text" name="title"placeholder="Enter title"class="form-control"value="<?php echo $row['Title']?>">
                            </div>
                        </div>
                        <br>
                            <div class="row">
                            <div class="col-md-2">
                                <lable >Image of cover</lable>
                            </div>
                            <div class="col-md-8">
                                <input type="file" class="form-control" name="uploadmain"value="<?php echo $row['image']?>"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <lable >Cover Description</lable>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" rows="6" name="main" id="main" value="<?php echo $row['data']?>"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <lable >Detail Blog info</lable>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" rows="15" name="blogdata" id="comment"value="<?php echo $row['data']?>"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <lable >Image for blog</lable>
                            </div>
                            <div class="col-md-8">
                                <input type="file" name="file" id="fileToUpload" onchange="setfilename(this.value);"/>
                                <input type="submit" name="image_upload" id="submit"class="btn btn-success" value="updata data">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                      </div>
                  </div>
                </div>
            </div>
            </form>
            <div class="col-md-2"></div>
        </div>
    
    </div>
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
    if(isset($_POST['image_upload']))
            {
                $id=$_GET['id'];
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
                $mainimage=$_FILES['uploadmain']['name'];
                $blogname=$_POST['title'];
                $maindata=$_POST['main'];
                $data=$_POST['blogdata'];
                $con=mysqli_connect("localhost","root","","test");
                $sql="UPDATE demo SET Title='$blogname', maindata='$maindata',data='$data' WHERE id='$id'";
               
                $result=mysqli_query($con,$sql);
                if($result)
                {
                    echo "<script>alert(' updated successfully!');</script>";
                }
                else
                {
                    echo "Error".mysqli_error($con);
                }
                            }


?>