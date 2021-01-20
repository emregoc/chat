<?php 
if(isset($_COOKIE['guvenlik'])){}else{header('location: index.php');}
setcookie("guvenlik","",time()-1);
header ("location:index.php");
?>