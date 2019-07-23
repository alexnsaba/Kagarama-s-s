<?php
session_start();
      if(isset($_SESSION['email'])&& !empty($_SESSION['email'])){       
      }else{
       header("location:index.php");  
      }
      
 ?> 
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Kagarama s s Library | Kigali</title>
    <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="script.js"></script>  
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
  @media screen and (min-width:720px){
	td.h1{
	margin-left: 30%;	
	}
}
 @media screen and (min-width:720px){
	.box{
	
	}
}
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">


<div id='cssmenu'>
<ul>
   <li><a href='#'><span><i class='fa fa-users' style="font-size: 25px"></i>User Management</span></a>
 <ul>
         <li><a href='registerUser.php'><span>Register Staff Members</span></a>
		 <li class='last'><a href='registerStudent.php'><span>Register Students</span></a></li>
          <li class='last'><a href='verifyStudents.php'><span>Verify Users</span></a></li>   
  <li class='last'><a href='Users.php'><span>List of Users</span></a></li>
         
         </li>
       </ul>
   </li>
   <li><a href='#'><span><i class='fa fa-cart-arrow-down' style="font-size: 25px"></i>Checkin & Checkout</span></a>
      <ul>
         <li><a href='borrowBook.php'><span>Borrow Books</span></a>
            
         <li><a href='bookReturn.php'><span>Return Books</span></a></li>
         <li class='last'><a href='lentBooks.php'><span>List of Lent Books</span></a></li>
            
         </li>
         
      </ul>
   </li>
   <li><a href='#'><span> <i class='fa fa-book' style="font-size: 25px"></i>UPDATE BOOKS</span></a>
    <ul>
         <li><a href='newBook.php'><span>Add a new Book</span></a>
          <li class='last'><a href='books.php'><span>List of all Books</span></a></li>   
  
         <li><a href='bookEdit.php'><span>Edit Book Details</span></a></li>
         <li class='last'><a href='bookDel.php'><span>Delete  Book</span></a></li>
         </li>
       </ul>
   </li>
   <li class='last'><a href='#'><span> <i class='fa fa-line-chart' style="font-size: 25px"></i>Reports</span></a>
 <ul>
         <li><a href='dailyReport.php'><span>Daily Report</span></a>
          <li class='last'><a href='monthlyReport.php'><span>Monthly Report</span></a></li>   
          <li><a href='AnnualReport.php'><span>Annual Report</span></a></li>     
        
         </li>
       </ul>
   </li>
       <li class='last'><a href='#'><span> <i class='fa fa-search' style="font-size: 25px"></i>Search</span></a>
 <ul>
         <li><a href='bookSearch.php'><span>Search Books</span></a>
          <li class='last'><a href='staffSearch.php'><span>Search Staff</span></a></li>   
          <li><a href='studentSearch.php'><span>Search Students</span></a></li>     
        
         </li>
       </ul>
   </li>
      <li class='last'><a href='logout.php'><span><i class='fa fa-power-off' style="font-size: 25px"></i>logout</span></a></li>
      

</ul>

</div>
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0.5">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content"><br/><br/><br/><br/><br/>
	<!--Put your page content here-->
   <center>
    <div class="panel-body">
<form method="post" action="payment.php" enctype="multipart/form-data" name="registration" class="form-horizontal">                

 <div class="form-group">
<label class="col-sm-2 control-label"> Select LentId </label>
<div class="col-sm-8">
<select  name="cat" value="cat" id="cat" class="form-control"  required="required">
  <?php
  require_once'database.php';
  $selBook= mysqli_query($con,"select * from checkOuts where status='unReturned'");
  while($row=mysqli_fetch_array($selBook)){
    echo"<option>".$row['lentId']."</option>";
  }

  ?>
  
</select>
</div>
</div>



<div class="form-group">
<label class="col-sm-2 control-label">Telephone Number</label>
<div class="col-sm-8">
<input type="text" name="hPhone" id="mobile-number"  class="form-control" required="required" placeholder="This number should be registered on mobile money">
</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Amount</label>
<div class="col-sm-8">
<input type="number" name="bAmount" id="bAmount"  class="form-control" placeholder="booking should not be less than 200,000/=" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>



<div class="col-sm-6 col-sm-offset-4">
<input type="reset" value="Cancel" class="btn btn-primary">

<input type="submit" name="pay" Value="Pay Now" class="btn btn-danger">
</div>
</form><br/>
<div>
</div>
<?php
require_once'database.php';
if(isset($_POST['pay'])){
  //obtaining form values
  $lentId =$_POST['cat'];
  $hPhone =$_POST['hPhone'];
  $bAmount =$_POST['bAmount'];  
  $a= mysqli_query($con,"select ref from reference");
  $ro= mysqli_fetch_array($a);
  $refer=$ro['ref'] +1;
  if($bAmount >= 500){
    //using the api to pay
 $url = 'https://www.easypay.co.ug/api/'; 
 $payload = array( 'username' => '7d3aebb7215ee345', 
 'password' => '0a769e3809ff1552', 
 'action' => 'mmdeposit', 
 'amount' => $bAmount, 
 'phone'=>'$hPhone', 
 'currency'=>'UGX', 
 'reference'=>$refer, 
 'reason'=>'Fine' 
 ); 
  
 //open connection 
 $ch = curl_init(); 
  
 //set the url, number of POST vars, POST data 
 curl_setopt($ch,CURLOPT_URL, $url); 
 curl_setopt($ch,CURLOPT_POSTFIELDS, json_encode($payload)); 
 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
 curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,15); 
 curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
 //execute post 
 $result = curl_exec($ch);
 //detecting errors
if(curl_error($ch)){
  
  $error_mesg = curl_error($ch);
}
 
  
  
 //displaying error message
 if(isset($error_mesg)){
   $curl_err= curl_error($ch);
   echo"<br/><p> ".$curl_err."</p>";
 }
 //close connection 
 curl_close($ch);
// print_r(curl_getinfo($ch)); 
 //print_r(json_decode($result));
 $res= json_decode($result);
 print_r(json_decode($result)); 
 if($res->success==1){
     echo"<h2>You have successfully Paid the Fine</h2>";
     //updating the reference table
$updt= mysqli_query($con,"update reference set ref = '$refer' where id=1");

$upStatus = mysqli_query($con,"update book set status='Available' where bookId='$bid'");
  mysqli_query($con,"update checkOuts set status='Returned' where lentId='$lentId'");

  if($upStatus){
    mysqli_query($con,"insert into checkIns(returnDate,lentId) values('$today','$lentId')");
         echo"<h1 style='color:blue'><i class='fa fa-check'></i> Operation completed successfully. you can pick the book from the user</h1>";

  }else{
     echo"<h1 style='color:blue'><i class='fa fa-check'></i>Oops Operation Failed!. please try again</h1>";
  }
 } else{
   echo"<h2>Payment Failed. Please check your Balance and try Again</h2>";  
 }


  }else{
    echo"<br/><h2>Sorry.Transaction could not be processed. The amount should be greater than 500/= </h2>";
  }
}
?>
</div>
		
  <center>
    

    </section>
    <!-- /.content -->
    
  </div>
 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
        
    <!-- Default to the left -->
    <strong><center>Copyright &copy; 2019 Kagarama s s.</strong> All rights reserved.</center>
	</footer>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
