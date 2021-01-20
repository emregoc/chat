<?php 
include('baglan.php');
$baglan1 = $_SESSION["baglan"];
if(isset($_COOKIE['guvenlik'])){}else{header('location:index.php');}

$ad=$_POST['ad'];
$soyad=$_POST['soyad'];
$mail=$_POST['mail'];
$sifre=$_POST['sifre'];
$cep=$_POST['cep'];
mysqli_query($baglan1,"insert into uyeler value('','$ad','$soyad','$mail','$sifre','$cep')");
header('location:index.php');
?>

