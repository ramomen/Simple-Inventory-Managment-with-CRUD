<?php
include("db.php");
$proid=$_POST['ITEM'];
$itemnumber=$_POST['itemnumber'];
mysqli_query($db,"UPDATE products SET stock='$itemnumber'
WHERE id='$proid'");
header("location: product.php");
?>