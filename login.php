<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
<style>
        /* Reset some basic styling */
        body{
          
        }
body, h1, form, input, select, button {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    

}

/* Background image styling */
.background-image {
    background-image: url('./applicationimg/loginbgimg2.jpg'); background-size: cover; background-position: center; display: flex; justify-content: center; align-items: center; height: 100vh;overflow: hidden;transition: 0s;
}
.welcome{
    display:flex;
    justify-content:center;
    align-items:center;
    font-weight:700;
    font-size:25px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.loginh{
    font-size:1.6rem;
    font-weight:500;
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
    width: 100%;
    max-width: 400px;
    position:absolute;
}

/* Header styling */
h1 {
    margin-bottom: 1.5rem;
    text-align: center;
    color: #333;
}

/* Styling form groups */
.form-group {
    margin-bottom: 1.5rem;
}
/* first and last name */
.form-name{
display: flex;
align-items: center;
justify-content: space-between;
}

/* Label styling */
label {
    display: block;
    margin-bottom: 0.5rem;
    color: #110404;
    font-weight: 500;
    font-size:1.6rem;
}

/* Input and select styling */
input[type="text"],
input[type="password"]
{
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1.5rem;
}
input:hover{
box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
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
       if(isset($_POST['UserLogin']))
       {
            $UserName = $_POST['user'];
            $PassWord = $_POST['upwd'];

            $sql = "select * from tblloginform where UserName = '".$UserName."' AND PassWord ='". $PassWord."' ";
            $res = mysql_query($sql);
            $rowcunt = mysql_num_rows($res);
            $row = mysql_fetch_array($res);
            $CustomerId = $row['idcustomer'];
            if($rowcunt > 0){

                $_SESSION['UserName'] =  $UserName;
                $_SESSION['PassWord'] =  $PassWord;
                
                echo "<script>alert('Login Successfully...');window.location.assign('main.php')</script>";
            }else{
                echo "<script>alert('Username and Password not matched!!');window.location.assign('login.php')</script>";
            }
        }
?>

    <div class="background-image">
        <div class="overlay">
            <div class="container" >
            <p class="welcome">Welcome Back!!</p>
                <h1 class="loginh">Login to continue</h1>
               
                <form action="#" method="post">
                
                    <div class="formname">
                            <div class="form-group">
                                <label for="username">User Name :</label>
                                <input type="text" class="form-control" id="username" name="user" placeholder="Enter your username" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password :</label>
                                <input type="password" class="form-control" id="password" name="upwd" placeholder="Enter your password" value="" required>
                            </div>
                            <button type="submit" name="UserLogin"class="btn btn-primary btn-block">Login</button>
                    </div>   
                </form>
            </div>
        </div>
    </div>





</body>
</html>
