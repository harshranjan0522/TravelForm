<?php
if(isset($_POST['name'])){
    $submit= false;
    $server= "localhost";
    $username= "root";
    $password= "";
    $database = "trip";
    $conn= mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        die("Connection failed - ".mysqli_connect_error());
    }
    $name= $_POST['name'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $email= $_POST['email'];
    $phone= $_POST['phone']; 
    $info= $_POST['info'];
    $sql= "INSERT INTO `trip_details`(`name`, `age`, `gender`, `email`, `phone`, `info`, `date`) VALUES ('$name','$age','$gender','$email','$phone','$info',current_timestamp());";
    
    if($conn->query($sql)==true){
        $submit=true;
        
    }  
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome To The Trip</h3>
        <p>Pack Set Go !!!</p>
        <p>Fill up the follwing details</p>
        <!--<?php 
            // if($submit==true){
            //     echo "<p >ThankYou For Submitting Your Form...We Would Surely Have A Boom On The Trip.</p>"; 
            // }
        ?> -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name...">
            <input type="text" name="age" id="age" placeholder="Enter Your Age...">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender...">
            <input type="email" name="email" id="email" placeholder="Enter Your Email Address...">
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Contact Number...">
            <textarea name="info" id="info" cols="30" rows="10" placeholder="Enter Any Suggestion For The Trip..."></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>

