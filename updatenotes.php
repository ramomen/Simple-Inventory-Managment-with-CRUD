<?php
include("db.php");
$proid=$_POST['ITEM'];
$notes=$_POST['notes'];
mysqli_query($db,"UPDATE products SET notes='$notes'
WHERE id='$proid'");
header("location: product.php");
?>