<?php
$conn = mysqli_connect("localhost","root","","test");

	$id=$_REQUEST['id'];
  
$query = "DELETE FROM demo WHERE id=$id"; 
$result = mysqli_query($conn,$query);
//unlink("uploads/".$row['fileToUpload']);
if($result)
    {
     
  echo "<script>alert('delete successfully!');</script>";
    } //or die ( mysqli_error());
else
    {
      echo "Error".mysqli_error($conn);
    } 

//header("Location: index.php");

?>
