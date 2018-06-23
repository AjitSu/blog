<html>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
              <link href="css/font-awesome.css" rel="stylesheet"> 
                <link href="aos-master/aos/aos.css" rel="stylesheet">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
        <li><a href="#">Blog list</a></li>
        <li><a href="">LogIn</a>
    </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<!---Header-->
           
                    <div  class="header">
                    	<div class="image">
                        <img src="header.jpg"class="img-responsive" width="100%" height="565px">
                        
                          </div>
                    </div>
               
        <!--Close Header-->
        <br>
     
        <div class="container">
        	<div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" height="200px">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-responsive" src="c1.jpg" width="100%" height="70%">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-responsive" src="c2.jpeg" width="100%" height="70%" >
                                </div>
                                <div class="carousel-item">
                                    <img class="img-responsive" src="c3.jpeg" width="100%" height="70%">
                                </div>
                            </div>
                        </div>
                        <BR>
                        <h4 style=" background-color:white; text-align:center;font-family: Cambria;">RECENT POSTS</h4>
                        <br>


                           <div style="background-color: white; text-align:center;">
                        <?php
                         $con=mysqli_connect("localhost","root","","test");
                        $sql1="SELECT * from demo";
                        $result1=mysqli_query($con,$sql1);
                        while ($rows = mysqli_fetch_assoc($result1)) 
                        {
                        ?>
                        <p style="text-align: justify;font-family: Cambria;font-size:18px;">&ensp;<i class="fas fa-circle-notch fa-spin"></i> <b><a href="<?php echo $rows['id']?>"><?php echo $rows['Title']?></a></b></p>
                        <?php
                    }
                    ?>
                </div>
                        <img src="2.png" class="img-responsive" width="100%">
                        <br><br><br>
                        <img src="1.jpg" class="img-responsive"  width="100%">
                </div>

                   <?php
                   
        $con=mysqli_connect("localhost","root","","test");
        $sql="SELECT * from demo limit 2,2";
        $result=mysqli_query($con,$sql);
        while ($row = mysqli_fetch_assoc($result)) 
        {
            ?>
        		<div class="col-md-8">
                    <div data-aos="fade-left">
        			<section>
                   
                        <div style="background-color: white; padding:15px;">
                          <h2 style="font-family: Cambria;"><?php echo $row['Title'];?></h2>
                          <img src="<?php echo $row['image']?>" class="img-responsive" width="100%"> 
                          <p style="text-align: justify;font-family: Cambria;font-size:18px;"> 
                            <?php echo $row['maindata'];?>
                           
                        </p>
                        <!-- <button class="btn btn-primary">READ MORE</button> -->
                        <a href="blogs.php?id=<?php echo $row['id']?>"class="btn btn-info">READ MORE</a>
                        
                    </div>
              
                </section>
            </div>
                <br>
       
        		</div>
                <br>
                                   <?php
        }
        ?>
  <!--       		<nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li ><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav> -->
<div align="center">
             <?php  
        $conn=mysqli_connect("localhost","root","","test");

        $sql = "SELECT COUNT(id) FROM demo";  
        $rs_result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_row($rs_result);  
        $total_records = $row[0];  
        $total_pages = ceil($total_records / 2);  
        $pagLink = "<nav><ul class='pagination'>";  
        for ($i=1; $i<=$total_pages; $i++) {  
                     $pagLink .= "<li><a href='d2.php?page=".$i."'>".$i."</a></li>";  
        };  
        echo $pagLink . "</ul></nav>";  
        ?>
    </div>
        	</div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <footer class="footer">
                        We use cookies to ensure you receive the best experience on our site.  If you continue to use this site, you are agreeing to our terms and conditions.<button class="btn btn-danger">Accept</button>
                    </footer>
            </div>
        </div>
	</body>
    <script type="text/javascript">
            $(document).ready(function(){
            $('.pagination').pagination({
                    items: <?php echo $total_records;?>,
                    itemsOnPage: <?php echo $limit;?>,
                    cssStyle: 'light-theme',
                    currentPage : <?php echo $page;?>,
                    hrefTextPrefix : 'index.php?page='
                });
                });
            </script>
            <script src="aos-master/aos/aos.js">
          
          
        </script> 
        <script type="text/javascript">AOS.init(
      {duration:1200,});</script> 
</html>