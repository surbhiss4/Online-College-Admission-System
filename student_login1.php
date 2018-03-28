<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    </head>
<header>
	<h1>Welcome User</h1>
</header>

<div id="form">


<form action="student_login1.php" method="post" enctype="multipart/form-data">

<div class="formgroup" id="name-form">
    <label for="name">RANK</label>
    <input type="text"  name="rank" required="required" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">PASSWORD</label>
    <input type="password"  name="pwd" required="required" />
</div>



	<input type="submit" name="btn_submit" value="LOGIN" />
</form>
</div>



<?php
if(isset($_POST["btn_sumbit"]))
{require 'Untitled.php';
    $a1=$_POST["rank"];
    $a2=$_POST["pwd"];
    setcookie("rank",$a1);
    
 $check_login = "SELECT * FROM student_detail WHERE rank='$a1' AND pwd='$a2'";
 $result_login=mysqli_query($con,$check_login) or die(mysqli_error($con));
 if(mysqli_num_rows($result_login)>0)
 {
    $row=mysqli_fetch_assoc($result_login);
    setcookie("name",$row["name"]);
    echo"<script>Logged in Successfully</script>";
    header("location:student_login2.php");
    
 }
 else
 {
    echo"<script>Error in either rank or password</script>";
 }
} 
?>
</html>