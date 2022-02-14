<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save']))
{	 
	$brand = $_POST['brand'];
	$description = $_POST['description'];

	$output_dir = "upload/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
	    
		$sql = "INSERT INTO posts (brand,description, image)
	 VALUES ('$brand','$description', '$NewImageName')";
	 if (mysqli_query($conn, $sql)) {
		header('location: posts.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
	 



	 
// 	 $sql = "INSERT INTO posts (brand,description)
// 	 VALUES ('$brand','$description')";
// 	 if (mysqli_query($conn, $sql)) {
// 		header('location: posts.php');
// 	 } else {
// 		echo "Error: " . $sql . "
// " . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);

?>