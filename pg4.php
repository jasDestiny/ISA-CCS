<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="pg4.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <title>ISA CCS</title>

 

</head>

<body>
  


    <div id="msform">
      <h2 class="fs-title">
	   <?php
	  
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE["regno"];
	  $b=$_COOKIE["cob"];
	  $com=mysqli_query($con,"select * from alltable where name='$b';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm["qno1"];
	  ?>
	  </h2>
      <textarea disabled rows="4" cols="50" >
	  
	  <?php
	  
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE["regno"];
	  $b=$_COOKIE["cob"];
	  $com=mysqli_query($con,"select * from questions".$b." where regno='$a';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm["qno1"];
	  ?>
        </textarea> 
    </div> 
    <div id="msform">
        <h2 class="fs-title">
		<?php
	  
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE["regno"];
	  $b=$_COOKIE["cob"];
	  $com=mysqli_query($con,"select * from alltable where name='$b';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm["qno2"];
	  ?></h2>
        <textarea disabled rows="4" cols="50" >
		<?php
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE['regno'];
	  $com=mysqli_query($con,"select * from questions".$b." where regno='$a';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm['qno2'];
	  ?>
          </textarea> 
      </div>  
      <div id="msform">
        <h2 class="fs-title"><?php
	  
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE["regno"];
	  $b=$_COOKIE["cob"];
	  $com=mysqli_query($con,"select * from alltable where name='$b';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm["qno3"];
	  ?></h2>
        <textarea disabled rows="4" cols="50" >
		
		<?php
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE['regno'];
	 $com=mysqli_query($con,"select * from questions".$b." where regno='$a';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm['qno3'];
	  ?>
          </textarea> 
      </div>  
      <div id="msform">
        <h2 class="fs-title"><?php
	  
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE["regno"];
	  $b=$_COOKIE["cob"];
	  $com=mysqli_query($con,"select * from alltable where name='$b';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm["qno4"];
	  ?></h2>
        <textarea disabled rows="4" cols="50" >
		<?php
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE['regno'];
	 $com=mysqli_query($con,"select * from questions".$b." where regno='$a';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm['qno4'];
	  ?>
          </textarea> 
      </div>  
      <div id="msform">
        <h2 class="fs-title">
		<?php
	  
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE["regno"];
	  $b=$_COOKIE["cob"];
	  $com=mysqli_query($con,"select * from alltable where name='$b';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm["qno5"];
	  ?>
		</h2>
        <textarea disabled rows="4" cols="50" >
		<?php
	  $con=new mysqli("remotemysql.com","sz1xIZ5GnC","d66XOa4odb","sz1xIZ5GnC");
	  $a=$_COOKIE['regno'];
	 $com=mysqli_query($con,"select * from questions".$b." where regno='$a';");
	  
	  $comm=mysqli_fetch_array($com);
	  
	  echo $comm['qno5'];
	  ?>
          </textarea> 
      </div>        
      
      
    </body>
</html>
