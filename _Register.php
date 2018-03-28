<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css1.css"/>
    </head>
<body>
	  <h1>REGISTRATION FORM</h1>
   
  
  <form action="Register.php" method="post" enctype="multipart/form-data">
	    <h1>Fill the requirements carefully :</h1>
	    
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="leftcontact">
			      <div class="form-group">
			        <p>Name<span>*</span></p>
			        <span class="icon-case"><i class="fa fa-male"></i></span>
				        <input type="text" name="name" required="required"/>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Father,s Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
				<input type="text" name="fname"  required="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>E-mail ID<span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="email" required="required"/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Address <span>*</span></p>
			<span class="icon-case"><i class="fa fa-home"></i></span>
				<input type="text" name="address" required="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Gender <span>*</span></p>
			<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
				<input type="text" name="gender" required="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Age <span>*</span></p>
			<span class="icon-case"><i class="fa fa-map-marker"></i></span>
				<input type="number" name="age" required="required"/>
                <div class="validation"></div>
			</div>	



	</div>

	<div class="rightcontact">	

			<div class="form-group">
			<p>Contact Number <span>*</span></p>
			<span class="icon-case"><i class="fa fa-building-o"></i></span>
				<input type="number" name="contact_number" required="required"/>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
			<p>Nationality <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-phone"></i></span>
				<input type="text" name="nationality" required="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Rank <span>*</span></p>
			<span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="number" name="rank" required="required"/>
                <div class="validation"></div>
			</div>

			<div class="form-group">
			<p>Password <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="password" name="pwd" required="required"/>
                <div class="validation"></div>
			</div>
		
			<div class="form-group">
			<p>Confirm Password <span>*</span></p>
			<span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <input type="password" name="c_pwd" required="required"/>
                <div class="validation"></div>
			</div>	
	</div>
	</div>
<input type="submit" name="btn_submit" value="SUBMIT"/>
	
</form>	

  

</body>
</html>
<?php
if(isset($_POST["btn_sumbit"]))
{require 'Untitled.php';
    $a1=$_POST["name"];
    $a2=$_POST["fname"];
    $a3=$_POST["address"];
    $a4=$_POST["gender"];
    $a5=$_POST["email"];
    $a6=$_POST["age"];
    $a7=$_POST["contact_number"];
    $a8=$_POST["nationality"];
    $a9=$_POST["rank"];
    $a10=$_POST["pwd"];
    $a11=$_POST["c_pwd"];
    $insertQry="insert into student_detail values ('$a1','$a2','$a3','$a4','$a5',$a6,$a7,'$a8',$a9,'$a10','$a11')";
    if(mysqli_query($, $sql)){

    echo "Records inserted successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
}
?>