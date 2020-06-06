<?php

$a=$_POST["name"];
$b=$_POST["email"];
$c=$_POST["regno"];
$d=$_POST["phno"];
$e=$_POST["password"];

$con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");

$com=mysqli_query($con,"use sz1xIZ5GnC;");

$com=mysqli_query($con,"select * from isaccs where regno='$c' or mail='$b' or phno='$d';");

$count=mysqli_num_rows($com);

if($count==0)
{
	$com=mysqli_query($con,"insert into isaccs values('$a','$b','$c','$d','$e','0');");
	$com=mysqli_query($con,"insert into questions1 values('','','','','','$c',0);");
	$com=mysqli_query($con,"insert into questions2 values('','','','','','$c',0);");
	$com=mysqli_query($con,"insert into questions3 values('','','','','','$c',0);");
	$com=mysqli_query($con,"insert into questions4 values('','','','','','$c',0);");
	$com=mysqli_query($con,"insert into questions5 values('','','','','','$c',0);");
	$com=mysqli_query($con,"insert into questions6 values('','','','','','$c',0);");
	$com=mysqli_query($con,"insert into questions7 values('','','','','','$c',0);");
	
	echo "<script>alert('Account created successfully'); </script>";

	echo "<html><body><p><h1>Please wait for further updates...</h1> </p><br>
	
	<a href='pg2.html'>Click here to login</a>
	</body></html>";
	
}

else
{
	
	echo "<script>alert('Given user details already exists.'); </script>";

	echo "<!doctype html>

<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='pg1.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <title>ISA CCS</title>
	<script>
function func()
{
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var regno=document.getElementById('regno').value;
	var phone=document.getElementById('phone').value;
	
	var remail=/^[a-z0-9.]{6,40}@vitstudent.ac.in$/;
	var rregno=/^[0-9]{2}[A-Z]{3}[0-9]{4}$/;
	var rphone=/^[1-9]{1}[0-9]{9}$/;
	
	if(name=='')
	{
		alert('Please enter a valid name' );
		document.getElementById('name').focus();
		return false;
	}
	
	if(!remail.test(email))
	{
		alert('Please enter a valid Email ID' );
		document.getElementById('email').select();
		return false;
	}
	
	if(!rregno.test(regno))
	{
		alert('Please enter a valid Registration Number' );
		document.getElementById('regno').select();
		return false;
	}
	
	if(!rphone.test(phone))
	{
		alert('Please enter a valid Phone Number' );
		document.getElementById('phone').select();
		return false;
	}
	
	
	
	
}
</script>
 

</head>

<body>
  

<!-- multistep form -->
<form id='msform' action='page1.php' method='post'>
    <!-- fieldsets -->
    <fieldset>
      <h2 class='fs-title'>ISA CCS</h2>
      <h3 class='fs-subtitle'>Enter your details</h3>
      <input type='text' name='name' id='name' placeholder='Full Name' maxlength='40' value='$a'>
      <input type='email'  name='email' id='email'  placeholder='VIT Email ID' maxlength='57' value='$b'>
      <input type='text' name='regno' id='regno' placeholder='VIT Registration Number' maxlength='9' value='$c'>
      <input type='text' name='phno' id='phone' placeholder='Mobile Number' maxlength='10' value='$d'>
	  <input type='password' name='password' placeholder='Pick a password' value='$e'>
      <button type='submit' onclick='return func()' name='next' class='next action-button1'>Next</button>
      <a class='next action-button2' href='pg2.html'>Already Registered?</a>
    </fieldset>
    
  </form></body>
</html>

";
}

?>