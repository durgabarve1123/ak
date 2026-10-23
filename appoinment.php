<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment Form</title>
    <link rel="stylesheet" href="appoinmentform (3).css">

</head>

<body>
    <?php
    include('connection.php');    
     ?>

    <form method="post">
    <div class="container">
        <h1>Appoiment Form</h1>
        
        <div class="input-section">
            <label for="customerName">Customer Name:</label>
            <input type="text" id="customerName" name="Name" placeholder="Enter customer's name">
        </div>
        <div class="input-section">
            <label for="email">Email</label>
            <input type="email" id="email" name="Email" placeholder="abc@gmail.com">
        </div>
        
        <div class="input-section">
            <label for="serviceType">Service Type:</label>
            <select id="serviceType" name="serviceType">
                <option value="haircut">Haircut</option>
                <option value="manicure">Hairs Style</option>
                <option value="pedicure">Manicure</option>
                <option value="pedicure">Nail Art</option>
                <option value="pedicure">Makeup</option>
                <option value="pedicure">Pedicure</option>
                <!-- Add more service types as needed -->
            </select>
        </div>
        
        <div class="input-section">
            <label for="appointmentDate">Appointment Date:</label>
            <input type="date" id="appointmentDate" name="appointmentDate">
        </div>
        
        <div class="input-section">
            <label for="appointmentTime">Appointment Time:</label>
            <input type="time" id="appointmentTime" name="appointmentTime">
        </div>
        <div class="input-section">
            <label for="number" >Phone number</label>
            <input type="number" id="number" name="phonenumber" placeholder="##########">
        </div>
       
        
        <div class="input-section">
            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="4" placeholder="Enter any additional comment"></textarea>
        </div>
        
        <div class="button-section">
            <button onclick="bookAppointment()" type="submit" name="Appoinment">Book Appointment</button>
        </div>
        
    </div>
    </form>
    <?php 
    if(isset($_POST['Appoinment'])){
        $CustomerName=$_POST['Name'];
        $CustomerEmail=$_POST['Email'];
        $Customernumber=$_POST['phonenumber'];
        $Customerservicetype=$_POST['serviceType'];
        $CustomerDate=$_POST['appointmentDate'];
         $Customertime=$_POST['appointmentTime'];
        $customercomment=$_POST['comment'];
        
        $Insquery="insert into tblappointment(name,email,phoneno,service,appdate,apptime,Appcomment) 
       values('".$CustomerName."','".$CustomerEmail."','".$Customernumber."','".$Customerservicetype."',
       '".$CustomerDate."','".$Customertime."','".$customercomment."')";
        $resquery=mysql_query($Insquery);
        echo "<script> alert('Data Submitted Successfully');window.location.assign('appoinment.php')</script>";
     }
    ?>
  
</body>

</html>