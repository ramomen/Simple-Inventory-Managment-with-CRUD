
<?php
include('db.php');
/* connect to the database
$conn = mysqli_connect('localhost', 'sheepdat_birdadmin', 'CMQW9PrN2bv)', 'sheepdat_birdstock');
*/


// Adding Product start
$proname=$_POST['proname'];
$prices=$_POST['prices'];
$stock=$_POST['stock'];
$brandname=$_POST['brandname'];
$category=$_POST['category'];
$sold=$_POST['sold'];
$id=$_POST['id'];
$notes=$_POST['notes'];
$log= date('y/m/d')." ".date("h:i:sa");
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];	
$folder = "image/".$filename;

mysqli_query($db,"INSERT INTO products (id,productname, stock, brandname, category, prices ,sold, notes,log,photo) VALUES ('$id','$proname', '$stock','$brandname','$category','$prices','$sold','$notes','$log','$folder')");
move_uploaded_file($tempname, $folder);

$result = mysqli_query($db, "SELECT photo FROM products");

header("location:product.php");
?>




