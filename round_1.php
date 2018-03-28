<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    </head>
<header>
	<h1>ROUND 1</h1>
</header>

<div id="form">
<form action="round_1.php" method="post" enctype="multipart/form-data">

<div class="formgroup" id="email-form">
    
    <input type="submit"  name="round_1" value="Start Round 1 Counselling" />
</div>
</form>

<form action="admin_login2.php" method="post" enctype="multipart/form-data">
<div class="formgroup" id="email-form">
    
    <input type="submit"  name="back" value="Back To Previous Page" />
</div>
</form>


</div>
</html>


<?php
if(isset($_POST["round_1"]))
{
    require 'Untitled.php';
    $qry1="SELECT * FROM seat";
    $qry1_result=mysqli_query($con,$qry1);
    
    if(mysqli_num_rows($qry1_result)>0)
    {
        $seat=mysqli_fetch_array($qry1_result);
       
    }
    else
    {
        echo "0 results";
    }
        $seat_science=3;
        $seat_commerce=3;
        $total_seat=$seat_science+$seat_commerce;
    $qry2="SELECT * FROM choices";
    $qry2_result=mysqli_query($con,$qry2);
    
    if(mysqli_num_rows($qry2_result)>0)
    {
        
    while($row = mysqli_fetch_assoc($qry2_result)) 
    {
        $rank=$row['rank'];
        $choice1=$row['choice1'];
        $choice2=$row['choice2'];
        if($total_seat>0)
        {
                if($choice1=="1" && $choice2=="0")
                {
                    if($seat_science>0)
                    {
                    $allot=1;
                    $insertQry="insert into alloted values ('$rank','$allot')";
                    @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                    $seat_science--;
                    }
                    else
                    {
                        $allot=0;;
                        $insertQry="insert into alloted values ('$rank','$allot')";
                        @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                        $seat_commerce--;
                    }
                    $total_seat--;
                }
                else if($choice1=="0" && $choice2=="1")
                {
                    if($seat_commerce>0)
                    {
                    $allot=0;
                    $insertQry="insert into alloted values ('$rank','$allot')";
                    @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                    $seat_commerce--;
                    }
                    else
                    {
                      $allot=1;
                      $insertQry="insert into alloted values ('$rank','$allot')";
                      @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                      $seat_science--;
                      
                    }
                    $total_seat--;
                }
                else
                {
                    echo 'error';
                }
                }
        
        else
        {
            echo " raunak";
         $insertQry2="insert into waiting values ('$rank' ,'$choice1' ,'$choice2' )";
         @mysqli_query($con,$insertQry2)or die(mysqli_errno($con));
        }
    }
        
    }

}
?>