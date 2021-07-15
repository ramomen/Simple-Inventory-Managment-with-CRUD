<?php
include("db.php");
$proid=$_POST['ITEM'];
$itemprice=$_POST['itemprice'];
mysqli_query($db,"UPDATE products SET prices='$itemprice'
WHERE id='$proid'");
header("location: product.php");
?>