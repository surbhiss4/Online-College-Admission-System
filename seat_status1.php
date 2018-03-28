<html>                       
 <head>
    <link rel="stylesheet" type="text/css" href="css2.css"/>
    </head>
<header>
	<h1>CONGRATULATIONS</h1>
</header>
<body>

 <div id="form">
 
 <form action="" method="post" enctype="multipart/form-data">
<div class="formgroup" id="name-form">
    <label for="name">NAME:</label><?php  if(isset($_COOKIE["name"]))
{   echo $_COOKIE["name"];}?></div>&nbsp;&nbsp;
<div class="formgroup" id="name-form">
    <label for="rank">RANK:</label><?php if(isset($_COOKIE["rank"]))
{  echo $_COOKIE["rank"];}?></div>
<div class="formgroup" id="email-form">
    
    <input type="submit"  name="confirm" value="CONFIRM" />
</div>


<div class="formgroup" id="email-form">
    
    <input type="submit"  name="delete" value="DELETE" />
</div>
</form>
</div>

</body>

</html>
<?php
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
