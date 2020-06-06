<?php
$a=$_POST["regno"];
$b=$_POST["pass"];

$cookie_name="regno";
$cookie_value=$a;

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


$con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");

$com=mysqli_query($con,"use sz1xIZ5GnC;");

$com=mysqli_query($con,"select * from isaccs where regno='$a' and password='$b';");

$count=mysqli_num_rows($com);

if($count==1)
{
	echo "<script>alert('Welcome $a, logging in :)');</script>";

	echo "<script>window.location.href ='selectdomain.html';</script>";

}

else
{
	echo "<script>alert('Invalid login credentials :/');</script>";
	
	echo "<script>window.location.href ='pg2.html';</script>";
}



?>