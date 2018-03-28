<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    </head>
<header>
	<h1>CHOICE FILLING</h1>
</header>

<div id="form">


<form action="" method="post" enctype="multipart/form-data">
<div class="formgroup" id="name-form">
    <p><b>*enter "1" for Science</b><br/><br/><b>*enter "2" for Commerce</b></p>
</div>

<div class="formgroup" id="name-form">
    <label for="name">CHOICE 1</label>
    <input type="text"  name="choice1" required="required" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">Choice 2</label>
    <input type="text"  name="choice2" required="required" />
</div>



	<input type="submit" name="btn_submit" value="CONFIRM" />
</form>
</div>
</html>
<?php

if(isset($_POST["btn_submit"]))
{
require 'Untitled.php';
$r=$_POST["rank"];
$ch1=$_POST["choice1"];
$ch2=$_POST["choice2"];
$insertQry="insert into choices values ('$r','$ch1','$ch2')";
@mysqli_query($con,$insertQry) or die(mysqli_error($con));
echo"<script>alert('CHOICE FILLED SUCCESSFULLY')</script>";
$displayTable="select *from choices";
 $row_connect=mysqli_query($con,$displayTable) or die(mysqli_error($con));
 echo'<table id="choice"><tr> <td> CHOICE1 </td> <td> CHOICE2 </td></tr>';
 
 while($row=$row_connect->fetch_assoc());
 {   
    echo "raunak";
 }
echo '</table>';
}
?>