<?php

include "database.php";


$uname=$_POST['user_name'];
$pwd=$_POST['password'];
$t=0;
session_start();
if (isset($_SESSION['k1'])) {
	



	
} 
$f=mysqli_query($conn,"select * from user1 where user_name='$uname'");
while ($p=mysqli_fetch_array($f)) {
	if ($uname==$p['user_name'] and $pwd==$p['password']) {
		$t=1;
		$h=$p['user_name'];
		$b=$p['password'];
	}
}
if ($t==1) {

//header("location:aadmin.php");
include"customers.php";
if (isset($_SESSION['k1'])) {
	
} 
$_SESSION['k1']=$h;
$_SESSION['k2']=$b;

}
else
{
	echo "<script>alert('username or password incorrect!')</script>";
 	echo "<script>location.href='login.php'</script>";
}









?>

