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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content"><br/><br/><br/>
	<!--Put your page content here-->
   <div class="content-wrapper" style="margin-left: 0.5">
    <!-- Content Header (Page header) -->
    <section class="content">
   <h3>Choose the year and the click Generate Report Button</h3> 
                <div class="panel-body">
      <form method="post" action="annualReport.php" name="registration" class="form-horizontal">



<div class="form-group">
<label class="col-sm-2 control-label"> Year </label>
<div class="col-sm-8">
<select name="year" value="year" class="form-control" required="required">     
        <option selected>2019</option>
        <option>2020</option>
        <option>2021</option>
        <option>2022</option>
        <option>2023</option>
        <option>2024</option>
        <option>2025</option>
        <option>2026</option>
        <option>2027</option>
        <option>2028</option>
        <option>2029</option>
        <option>2030</option>
        <option>2031</option>
        <option>2032</option>
        <option>2033</option>
        <option>2034</option>
        <option>2035</option>
        <option>2036</option>
        <option>2037</option>
        <option>2038</option>
        <option>2039</option>
        <option>2040</option>
        <option>2041</option>
        <option>2042</option>
        <option>2043</option>
        <option>2044</option>
        <option>2045</option>
        <option>2046</option>
        <option>2047</option>
        <option>2048</option>
        <option>2049</option>
        <option >2050</option>

</select>
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>




<div class="col-sm-6 col-sm-offset-4">
<input type="reset" value="Cancel" class="btn btn-primary">

<input type="submit" name="generate" Value="Generate Report" class="btn btn-primary">
</div>
</form><br/><br/>


    <div>
      <?php
    if(isset($_POST['generate'])){
      
      //obtaining a year variable
       $yr=$_POST['year'];
    
   echo'<section class="content">';
//january Report
   echo"<h2>January ".$yr."</h2>";
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of January '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='01' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in January '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='01' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Borrowed books Records</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in January '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='01' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';


     //February 
        echo"<h2>February ".$yr."</h2>";
        echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of February '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='02' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in February '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='02' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in February '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='02' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

     //March
     echo"<h2>March ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of March'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='03' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in March '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='03' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in March '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='03' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';


//April
    echo"<h2>April ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of April'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='04' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in April '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='04' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in April '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='04' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

     //May
     echo"<h2>May ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of May'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='05' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in May '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';  
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='05' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in May '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='05' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

     //June
       echo"<h2>June ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of June'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='06' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in June '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='06' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in June'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='06' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//july
       echo"<h2>July ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of July'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='07' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in July '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='07' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book borrowed</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in July '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='07' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

     //August
      echo"<h2>August ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of August'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='08' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in August '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='08' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in August '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='08' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

     //september
       echo"<h2>September ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of September'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='09' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in September '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='09' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in September '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='09' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';


     //october
       echo"<h2>October ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of October'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='10' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in October'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='10' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in October'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='10' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//November

      echo"<h2>November ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of November'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='11' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in November '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='11' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in November '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='11' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

     //december

      echo"<h2>December ".$yr."</h2>";
     echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">

              <h1 class="box-title">Books Of December'  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
   $sel = mysqli_query($con,"select * from book where  MONTH(dateOfReceipt)='12' and YEAR(dateOfReceipt)='$yr'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
 echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>title</center> </th>";
  echo"<th><center>author</center></th>";
  echo"<th><center>publisher</center>  </th>";
  echo"<th><center>Edition</center>  </th>";
  echo"<th><center>Published On</center>  </th>";
  echo"<th><center>Received On</center>  </th>";
  echo"<th><center>status</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['title']."</center></td>";
  echo"<td><center>".$row['author']."</center></td>";
  echo"<td><center>".$row['publisher']."</center></td>";
  echo"<td><center>edition ".$row['edition']."</center></td>";
  echo"<td><center>".$row['dateOfPublish']."</center></td>";
  echo"<td><center>".$row['dateOfReceipt']."</center></td>";
  echo"<td><center>".$row['status']."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Book records Found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';

//borrowed books report

      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title">Books Borrowed in December '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkouts where  MONTH(dateOfLend)='12' and YEAR(dateOfLend)='$yr' and status='UnReturned'");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>bookId</center></th>"; 
  echo"<th> <center>lentId</center> </th>";
  echo"<th><center>Borrower Category</center></th>";
  echo"<th><center>ID</center>  </th>";
  echo"<th><center>dateOfLend</center>  </th>";
  echo"<th><center>dateOfReturn</center>  </th>";
  echo"<th><center>fine</center>  </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){
    echo"<tr>";
 echo"<td><center>".$row['bookId']."</center></td>"; 
  echo"<td><center>".$row['lentId']."</center></td>";
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['dateOfLend']."</center></td>";
  echo"<td><center>".$row['dateOfReturn']."</center></td>";
  echo"<td><center> Frw ".number_format($row['fine'])."</center></td>";
  echo"</tr>";    
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';



     //Returned Books Report
      echo'<section class="content">';

  //Put your page content here-->
   echo' <div class="col-md-8" style="width: 900px">
          <!--MAP & BOX PANE -->
          <div class="box box-success">
           <div class="box-header with-border">
              <h1 class="box-title"> Books Returned in December '  .$yr.'</h1>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

<div class="box-body no-padding">';
              
   require_once 'database.php';     
    
   $sel = mysqli_query($con,"select * from checkIns where MONTH(returnDate )='12' and YEAR(returnDate )='$yr' ");
   $num= mysqli_num_rows($sel);
   if($num >0){
  echo"<div class='box'>";
  echo"<div class='box-body'>";
  echo"<table  id='example1' class='table table-bordered table-striped'>";
  echo"<thead>";
  echo"<tr>";
  echo"<th> <center>ISBN/ISSN</center></th>"; 
  echo"<th> <center>Returned On</center> </th>";
  echo"<th> <center>Borrowed By</center> </th>";
  echo"<th> <center>Borrower ID</center> </th>";
  echo"<th> <center>Book ID</center> </th>";
  echo"</tr>";
  echo"</thead>";
  echo"<tbody>";
  while($row= mysqli_fetch_array($sel)){   
  echo"<tr>";  
  echo"<td><center>".$row['isbn']."</center></td>";
  echo"<td><center>".$row['returnDate']."</center></td>"; 
  echo"<td><center>".$row['borrowerCategory']."</center></td>";
  echo"<td><center>".$row['borrowerId']."</center></td>";
  echo"<td><center>".$row['bookId']."</center></td>";
  }
  echo"</tbody>";
  echo"<tfoot>";  
  
  echo"</tfoot>";
  
  echo"</table>";
  echo"</div>";
  echo"</div>";
   }else{
     echo"<center><h2>No Records found</h2></center>";
   }

  echo'
              <!-- /.row -->
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
       
          
          

    

    </section>
    <!-- /.content -->
     <!-- Main content -->';
   }
    
    ?>
     
    

  </div>
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
