<?php
session_start();
?>
<html>
<head>
  <meta charset="uft-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>Kagalama s s Library</title>
  <style type="text/css">
    body{
         background :url(library.jpg);
        }
  </style>
</head>
<body type="#1abc9c">
  <center> <p><span style="background: white;font-size: 60px"><B>Kagarama Secondary School</B></span> </p><center>
  <center> <img src= "logoo.jpg" alt="school logo" height="160" width="200"><center>
 
	<div class="col-lg-6" style="position:fixed; top:40%; left:35%; width:33%;">
		<div class="well bs-component">
			<form class="form-horizontal" action="index.php" method="post">
  			<fieldset>
    			<legend style="text-align:center;">Enter Your Details to login</legend>
               	<div class="form-group" style="padding:0px; text-align:center;">
                  	
               	</div>
    			<div class="form-group">
	      			<label for="inputEmail"  class="col-lg-2 control-label">Email</label>
	      			<div class="col-lg-10">
	        			<input type="email" name="email" class="form-control" id="inputEmail" name="account" placeholder="Email" required="required">
	      			</div>
    			</div>
    			<div class="form-group">
      				<label for="inputPassword" class="col-lg-2 control-label">Password</label>
      				<div class="col-lg-10">
        				<input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required="required">
      				</div>
    			</div>
				
    			<div class="form-group">
      				<div class="col-lg-10 col-lg-offset-2">
        				
        				<button type="submit" name="login" class="btn btn-info" style="width:75%">Login</button>
      				</div>
    			</div>
  			</fieldset>
			</form>
       <?php       
       if(isset($_POST['login'])){
       $email = $_POST['email'];
       $password=$_POST['password'];
       require_once'database.php';
       $sel = mysqli_query($con,"select * from librarian where email ='$email' and password='$password'");
       $num = mysqli_num_rows($sel);
       if($num==1){
       $_SESSION['email'] = $email;
       $URL="verifyStudents.php";
       echo "<script>window.location.href = '{$URL}';</script>";
       echo'<META HTTP-EQUIV = "refresh" content="0;URL=' .$URL . ' ">';
       exit();
       }else{
       echo"<h3 style='color:red'>Either Email or Password is incorrect</h3>";
    }
     }
       ?>
		</div>
	</div>
  <div>
    
     
    
  </div>><
</body>
</html>