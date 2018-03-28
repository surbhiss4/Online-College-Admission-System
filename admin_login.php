<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    </head>
<header>
	<h1>Welcome Admin</h1>
</header>

<div id="form">


<form action="admin_login.php" method="post" enctype="multipart/form-data">

<div class="formgroup" id="name-form">
    <label for="name">USER ID</label>
    <input type="text"  name="user_id" required="required" />
</div>

<div class="formgroup" id="email-form">
    <label for="email">PASSWORD</label>
    <input type="password"  name="password" required="required" />
</div>



	<input type="submit" name="btn_submit" value="LOGIN" />
</form>
</div>
</html>
<?php
if(isset($_POST["btn_submit"]))
{
    require 'Untitled.php';
    $user_id=$_POST["user_id"];
    $_SESSION["admin"]=$user_id;
    $pass = $_POST["password"]; 
    $qry = "SELECT * FROM admin where password='$pass' AND user_id='$user_id' ";
    $qry2 = mysqli_query($con, $qry) or die (mysqli_error($con));
    if(mysqli_num_rows($qry2)>0)
    {
        
          echo "<script>alert('Logged In As Admin!')</script>";
          header("location:admin_login2.php");

          
    }
}
?>