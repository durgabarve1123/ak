<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  
  </style>
</head>
<body>
<?php
include('connection.php');

?>
<div class="container" style="background-color:#ede9e9">
  <h2 class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center " style="border-bottom:1px solid gray;padding-bottom:10px">Student Registration Form <?php echo $_SESSION['UserName'];?></h2> 
  <form action="" method='post'>
    <div class='col-md-offset-1'> 
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-3 text-left " >
		  <label><b>Name</b></label> 
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 " style="margin-bottom:5px">	
		<div class='col-md-6'>
			<input type="text" class='form-control input-sm' placeholder="Enter Name...." 
			name="Name" id="Name" value="" tabindex="1" required style="border: 1px solid #68e136;" autofocus>
		</div>
	</div>
    </div>
	<div class='col-md-offset-1' > 
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left ">
		  <label><b>Address</b></label> 
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "  style="margin-bottom:5px">	
		<div class='col-md-6'>
			<textarea class="form-control input-sm" id="Address" name="Address" style="border: 1px solid #68e136;" tabindex="2" required></textarea>
		</div>
	</div>
    </div>
	<div class='col-md-offset-1' > 
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left ">
		  <label><b>Mobile Number</b></label> 
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "  style="margin-bottom:5px">	
		<div class='col-md-6'>
			<input type="text" class="form-control input-sm" id="MobileNo" name="MobileNo" placeholder="Enter Mobile Number" required  maxlength='10' pattern="[789][0-9]{9}"> 
		</div>
	</div>
    </div>
	<div class='col-md-offset-1' > 
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left ">
		  <label><b>Email</b></label> 
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "  style="margin-bottom:5px">	
		<div class='col-md-6'>
			<input type="email" class="form-control input-sm" maxlength='20' id="Email" name="Email" placeholder="Enter Email-Id"> 
		</div>
	</div>
    </div>
	<div class='col-md-offset-1' > 
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left ">
		  <label><b>User Name</b></label> 
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "  style="margin-bottom:5px">	
		<div class='col-md-6'>
			<input type="text" class="form-control input-sm" id="UserName" name="UserName" placeholder="Enter User Name" required> 
		</div>
	</div>
    </div>
	<div class='col-md-offset-1' > 
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left ">
		  <label><b>Password</b></label> 
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "  style="margin-bottom:5px">	
		<div class='col-md-6'>
			<input type="password" class="form-control input-sm" id="Password" name="Password" placeholder="Enter Password" required> 
		</div>
	</div>
    </div>
	
    <div class='col-md-offset-2' > 
    <div class='col-md-8 text-center' style="margin-top:20px"> 
    <button type="submit" id="Save" name="save" class="btn btn-success">Submit</button> 
    <button type="button" name="reset" class="btn btn-warning">Reset</button>
	 </div>
	 </div>
  </form>
</div>
<div class="container" style="margin-top:20px">
<?php
 
 if(isset($_POST['save'])) { //step 1
	
	//variable dcl and value assign /step 2
	$Name = $_POST['Name'];//abc
	$Address=$_POST['Address'];
	$MobileNo=$_POST['MobileNo'];
	$Email=$_POST['Email'];
	$UserName=$_POST['UserName'];
	$Password=$_POST['Password'];

		// step 3 record insert
			echo "<br>".$SqlStudent = "insert into tblstudent(Name,Qualification,Address,MobNumer,Email,Gender,Age) values ('".$StudentName."','".$CheckedQualification."','".$Address."','".$MobileNo."','".$Email."','".$Gender."','".$Age."')";
			$ResStudent = mysql_query($SqlStudent); 
			$StudentId = mysql_insert_id();//get last table record id +1 eg. $StudentId= 23+1=24
			
			// insert login record here 
			$InsLoginDtls ="insert into tbllogin(UserName,Password,StudentId) values('".$UserName."','".$Password."','".$StudentId."')";
			$resInsLoginDtls=mysql_query($InsLoginDtls);
			
			 echo "<script>alert('Register Successfully');window.location.assign('registration.php')</script>";	
	   
 
 ?>
 
 <table class="table table-bordered">
 <tr>
	<th>SrNo</th>
	<th>Name</th>
	<th>Address</th>
	<th>MobileNo</th>
	<th>Age</th>
	<th>Email</th>
	<th>Gender</th>
	<th>Qualifiaction</th>
	<th>UserName</th>
	<th>Password</th>
 </tr>
 <?php 
 $srno=1;
 $sqlshow="select s.*,l.* from tblstudent s
 join tbllogin l on l.StudentId=s.idStudent  ";
 $resshow=mysql_query($sqlshow);
 while($rowshow=mysql_fetch_array($resshow)){
 ?> 
 <tr>
	<td><?php echo $srno;?></td>
	<td><?php echo $rowshow['Name'];?></td>
	<td><?php echo $rowshow['Address'];?></td>
	<td><?php echo $rowshow['MobNumer'];?></td>
	<td><?php echo $rowshow['Age'];?></td>
	<td><?php echo $rowshow['Email'];?></td>
	<td><?php echo $rowshow['Gender'];?></td>
	<td><?php echo $rowshow['Qualification'];?></td>
	<td><?php echo $rowshow['UserName'];?></td>
	<td><?php echo $rowshow['Password'];?></td>
 </tr>
 <?php $srno++;} ?> 
 
 </table>
 
 
 
 </div>
</body>
</html>
