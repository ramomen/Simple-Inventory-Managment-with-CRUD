<?php
include("db.php");
$proid=$_POST['ITEM'];
mysqli_query($db,"DELETE  from products WHERE id='$proid'");
header("location: product.php");
?>