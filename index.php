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


