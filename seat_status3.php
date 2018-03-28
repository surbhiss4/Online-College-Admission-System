<html>
<body>
<h1>SORRY,You are in waiting list......</h1>
<p>WAIT TILL ROUND 2 COUNSELLING
NAME :<?php  if(isset($_COOKIE["name"]))
{   echo $_COOKIE["name"];}?>&nbsp;&nbsp;
RANK :<?php if(isset($_COOKIE["rank"]))
{  echo $_COOKIE["rank"];}?>

</p>
<form method="post" action="seat_status3.php">
<input type="submit" name="upgrade" value="UPGRADE" />
<input type="submit" name="delete" value="DELETE" />
</form>
</body>
</html>
<?php
if(isset($_POST["upgrade"]))
{
    require 'Untitled.php';
    $rank=$_COOKIE['rank'];
    $qry="SELECT choice1,choice2 FROM choices where rank='$rank'";
    $qry_result=mysqli_query($con,$qry);
    if(mysqli_num_rows($qry_result)>0)
    {
      $row=mysqli_fetch_array($qry_result);
      $choice1=$row['choice1'];
      $choice2=$row['choice2'];  
    }
     $insertQry="insert into waiting2 values ('$rank' ,'$choice1' ,'$choice2')";
      @mysqli_query($con,$insertQry)or die(mysqli_error($con));
      echo "<script>alert ('POST succesfull !!!');</script>";
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