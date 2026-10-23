<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
<style>
        /* Reset some basic styling */
body, h1, form, input, select, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Background image styling */
.background-image {
    background-image: url('./applicationimg/loginbgimg2.jpg'); background-size: cover; background-position: center; display: flex; justify-content: center; align-items: center; height: 100vh;overflow: hidden;transition: 0s;
}

/* Overlay for better readability */
.overlay {
    background: rgba(6, 8, 8, 0.5);
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Container for the form */
.container {
    background: pink;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
    position:absolute;
    width: 100%;
    max-width: 500px;
}

/* Header styling */
h1 {
    margin-bottom: 1.5rem;
    text-align: center;
    color: #333;
}

/* Styling form groups */
.form-group {
    margin-bottom: 0.8rem;
}
/* first and last name */
.form-name{
display: flex;
align-items: center;
justify-content: space-between;
}
/* already have an account */
.loginalready{
    display: flex;
    justify-content: center;
    align-items: center;
}
.loginalready a{
    color:#0e1450;
    text-decoration: none;
    margin:4px;
    font-weight: 700;
}
.loginalready a:hover{
    color:rgb(98, 98, 146);
    text-decoration: none;
}
/* Label styling */
label {
    display: block;
    margin-bottom: 0.5rem;
    color: #110404;
    font-weight: 500;
}

/* Input and select styling */
input[type="text"],
input[type="email"],
input[type="password"],
select {
    width: 100%;
    padding: 0.7rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 0.9rem;
}
input:hover{
box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
}
select:hover{
    box-shadow:0 0 20px rgba(0, 0, 0, 0.2);
}

/* Button styling */
button {
    width: 100%;
    padding: 0.75rem;
    background-color: #1e3438;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
    border:2px solid black;
}


</style>
</head>
<body>

<?php
       include('connection.php');
?>

    <div class="background-image" >
        <div class="overlay">
            <div class="container" >
               
                <h1>Sign Up</h1>
                <p class="loginalready">If already have an account?<a href="login.php">Login</a></p>
                <form action="#" method="post">
                    <div class="form-name">
                    <div class="form-group">
                        <label for="fname">FirstName:</label>
                        <input type="text" id="fname" name="fname" placeholder="Enter Your First Name">
                    </div>
                    <div class="form-group">
                        <label for="lname">LastName:</label>
                        <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name">
                    </div>
                </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email-ID" required>
                    </div>
                    <div class="form-group">
                        <label for="username">UserName:</label>
                        <input type="text" id="username" name="username" placeholder="Enter Your Password" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter Your Password" required>
                    </div>
                   
                    <div class="form-group">
                        <a href="main.php"><button type="submit" name="save" id='save'>Sign Up</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>



<?php
if(isset($_POST['save'])){   
    $Customer_Fname=$_POST['fname'];
	$Customer_Lname=$_POST['lname'];
	$Customer_Emailid=$_POST['email'];
	$PassWord=$_POST['password'];
    $Username=$_POST['username'];
    


// validation for duplicate customer name and email
echo "<br>".$sqlvalidation = "select * from tblsignupform where email_id='".$Customer_Emailid."' and Password='".$PassWord."'" ;
$resvalidation=mysql_query($sqlvalidation);
echo "<br>Cnt---0".$Cnt=mysql_num_rows($resvalidation);

if($Cnt>0){
	echo"<script> alert('This EmailId is Already Exits....');window.location.assign('signup.php') </script>";
}
else{
// insert record
	echo "<br>". $SqlCustomer="insert into tblsignupform(Firstname,Lastname,email_id,Password,UserName) values('".$Customer_Fname."','".$Customer_Lname."','".$Customer_Emailid."','".$PassWord."','". $Username."')";
    $ResCustomer=mysql_query($SqlCustomer);
    $CustomerId=mysql_insert_id();
    $insloginsql="insert into tblloginform(UserName,PassWord,idcustomer) values('".$Username."','".$PassWord."','".$CustomerId."')";
    $reslogin=mysql_query($insloginsql);
    echo "<script> alert('Register Successfully');window.location.assign('main.php') </script>";
}

}
?>

</body>
</html>
