<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    </head>
<header>
	<h1>Welcome User</h1>
</header>

<div id="form">
<form action="view_detail.php" method="post" enctype="multipart/form-data">

<div class="formgroup" id="email-form">
    
    <input type="submit"  name="detail" value="STUDENT'S DETAILS" />
</div>

</form>
<form action="choice_filling.php" method="post" enctype="multipart/form-data">
<div class="formgroup" id="email-form">
    
    <input type="submit"  name="choice_filling" value="CHOICE FILLING" />
</div>
</form>
<form method="post" enctype="multipart/form-data">
<div class="formgroup" id="email-form">
    
    <input type="submit"  name="seat_status" value="SEAT STATUS" />
</div>



	
</form>
</div>
</html>


<?php

if(isset($_POST["seat_status"]))
{
    
    
}

if(isset($_POST["seat_status"]))


if(isset($_POST["seat_status"]))
{   
    require 'Untitled.php';
    $rank=$_COOKIE['rank'];
    $qry="SELECT choice1,choice2 FROM choices where rank='$rank'";
    $qry_result=mysqli_query($con,$qry);
    
    if(mysqli_num_rows($qry_result)>0)
    {
        $row = mysqli_fetch_assoc($qry_result);
        $choice1=$row['choice1'];
        $choice2=$row['choice2'];
        
    }
    $qry2="SELECT allotment FROM alloted where rank='$rank'";
    $qry2_result=mysqli_query($con,$qry2);
    if(mysqli_num_rows($qry2_result)>0)
    {
        $row = mysqli_fetch_assoc($qry2_result);
        $allot=$row['allotment'];
        
    }
    if($allot==$choice1)
    {
         echo "<script>alert('succesful!')</script>";
          header("location:seat_status1.php");
    }
    else if($allot==$choice2)
    {
        echo "<script>alert('succesful!')</script>";
        header("location:seat_status2.php");
    }
    else{
        echo "<script>alert('succesful!')</script>";
        header("location:seat_status3.php");
    }
    
    
    
}

?>