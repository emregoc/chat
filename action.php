<?php
if(isset($_COOKIE['guvenlik'])){}else{header('location: index.php');}
include('baglan.php');

$baglan1 = $_SESSION["baglan"];

$gelen=$_POST['action'];
if($gelen=='entrance'){
	$user=$_POST['mail'];
	$pass=$_POST['sifre'];
	$sorgu=mysqli_query($baglan1,"select * from uyeler where mail='$user' and sifre='$pass'");
	if(mysqli_num_rows($sorgu)){
		setcookie('guvenlik',$user);
		header("location: http://oylesin12345.atwebpages.com/");
		}else{
			header('location: 404.php');
            }
        }
?>