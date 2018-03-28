<html>>
<body>
<h1>seat allocated :</h1>
Name :<?php if(isset($_COOKIE["name"]))
{echo $_COOKIE["name"];}
?><br />
Rank :<?php if(isset($_COOKIE["rank"]))
{echo $_COOKIE["rank"];}
?><br />
<form method="post" action="seat_status2.php">
<input type="submit" name="upgrade" value="UPGRADE" />
</form>
<form method="post" action="payment.php">
<input type="submit" name="confirm" value="CONFIRM" />
</form>
<form method="post" action="seat_status1.php">
<input type="submit" name="delete" value="DELETE" />
</form>
</body>

</html>
<?php
if (isset($_POST["upgrade"]))
{
    require 'Untitled.php';
    $rank=$_COOKIE['rank'];
    $fetchqry="SELECT choice1,choice2 from choices where rank='$rank'";
    $fetchqry_result=mysqli_query($con,$fetchqry);
    if(mysqli_num_rows($fetchqry_result)>0)
    {
        $row=mysqli_fetch_array($fetchqry_result);
        $choice1=$row['choice1'];
        $choice2=$row['choice2'];
    }
    $insertQry="insert into waiting2 values('$rank','$choice1','$choice2')";
    @mysqli_query($con,$insertQry) or mysqli_error($con);
}

if(isset($_POST["confirm"]))
{
    require 'Untitled.php';
    header("location:payment.php");
}
if(isset($_POST["delete"]))
{
    require 'Untitled.php';
    $rank=$_COOKIE['rank'];
    $qry="DELETE FROM alloted where rank='$rank'";
    mysqli_select_db($con,'mydb');
   $retval = mysqli_query( $con, $qry);
   if(! $retval ) {
      die('Could not delete data: ' . mysqli_error());
   }
   echo "Deleted data successfully\n";
 }  
?>