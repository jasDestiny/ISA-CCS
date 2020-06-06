<?php

$a=$_POST["d"];

//echo $a;

$cookie_name="cob";
$cookie_value=$a;

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$cookiename="qno";
$cookievalue=1;

setcookie($cookiename,$cookievalue,time()+(86400*30),"/");

$b=$_COOKIE['regno'];	

$con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");

$com=mysqli_query($con,"use sz1xIZ5GnC;");

$query="select * from questions".$a." where regno='$b' ;";

$com=mysqli_query($con,$query);

$result=mysqli_fetch_array($com);

//echo $result['q'];

if($result['q']=='0')
{
	$com=mysqli_query($con,"update questions".$a." set q='1' where regno='$b';");
	echo "<script>window.location.href ='qno1.php';</script>";
}


else
	echo "<script>window.location.href ='quizover.html';</script>";



?>