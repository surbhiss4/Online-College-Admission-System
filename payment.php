<html>
<body>
<form method="post" action="payment.php">
<input type="submit" name="payment" value="CONFIRM PAYMENT"/>
</form>
</body>
</html>
<?php
if(isset($_POST["payment"]))
{
     require 'Untitled.php';
     $rank=$_COOKIE["rank"];
     $qry="SELECT allotment from alloted where rank='$rank'";
     $qry_result=mysqli_query($con,$qry);
     if(mysqli_num_rows($qry_result)>0)
     
     {
        $row=mysqli_fetch_array($qry_result);
        $admitted=$row['allotment'];
        
     }
     
     $insertQry="insert into admission values('$rank','$admitted')";
        $insertQry_result=@mysqli_query($con,$insertQry) or die(mysqli_error($con));
        echo"<script>alert('PAYMENT SUCCESSFUL')</script>";
        
        
        
}
?>