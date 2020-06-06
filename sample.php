<html>
<body>
<h2>

<?php

$con=new mysqli("localhost","root","","sample");

$com=mysqli_query($con,"select * from stable");

$row=mysqli_fetch_array($com);

echo $row['name'];

?>

HI

</h1>


<h2>


</body>
</html>