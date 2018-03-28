<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    </head>
<header>
	<h1>ROUND 2</h1>
</header>

<div id="form">
<form action="round2.php" method="post" enctype="multipart/form-data">

<div class="formgroup" id="email-form">
    
    <input type="submit"  name="round_2" value="Start Round 2 Counselling" />
</div>
</form>

</div>
</html>
<?php
if(isset($_POST["round_2"]))
{
    require 'Untitled.php';
    $qry2="SELECT * FROM admission";
    $qry2_result=mysqli_query($con,$qry2);
    $rowcount=mysqli_num_rows($qry2_result);
    
    
    $qry1="SELECT * FROM waiting2";
    $qry1_result=mysqli_query($con,$qry1);
    if(mysqli_num_rows($qry1_result)>0)
    {
        while($row = mysqli_fetch_assoc($qry1_result)) 
        {
            $rank=$row['rank'];
            $choice1=$row['choice1'];
            $choice2=$row['choice2'];
        
    
    
    
        if($rowcount<6)
        {
            mysqli_query($con,"SELECT * FROM admission WHERE admitted='1'");
            
            $count_sc=mysqli_affected_rows($con);
            
            mysqli_query($con,"SELECT * FROM admission WHERE admitted='0'");
            
            $count_com=mysqli_affected_rows($con);
            
            
            if($choice1=="1" && $choice2=="0")
            {
                if($count_sc<3)
                {
                    $allot=1;
                    $insertQry="insert into admission values ('$rank','$allot')";
                    @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                }
                
                     else
                    {
                        if($count_com<3)
                        {
                        $allot=0;;
                        $insertQry="insert into alloted values ('$rank','$allot')";
                        @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                        }
                    }
            }
            else if($choice1=="0" && $choice2=="1")
                {
                    if($count_com<3)
                    {
                    $allot=0;
                    $insertQry="insert into admission values ('$rank','$allot')";
                    @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                    
                    }
                    else
                    {
                    if($count_sc<3)
                    {
                      $allot=1;
                      $insertQry="insert into admission values ('$rank','$allot')";
                      @mysqli_query($con,$insertQry)or die(mysqli_error($con));
                    }
                      
                    }
                
                }
                else
                {
                    echo "<script>alert('YOU HAVE NOT BEEN ALLOTTED ANY COURSE.......!')</script>";
                }
            
        }
    }
}
}
?>
