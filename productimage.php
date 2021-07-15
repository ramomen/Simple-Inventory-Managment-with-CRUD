<?php
error_reporting(0);
?>
<?php
include('db.php');
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$proid=$_POST['ITEM'];
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/". $proid . $filename;
	

		// Get all the submitted data from the form
		$sql = "UPDATE products SET photo='$folder'
WHERE id='$proid'";

		// Execute query
		mysqli_query($db, $sql);
		
		// Now let's move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
$result = mysqli_query($db, "SELECT image FROM products");
header("location: product.php");

?>
