<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phoneNumber=$_POST['phoneNumber'];
$password=$_POST['password'];

$conn =new msqli('localhost','root','','regestration');
    if ($conn->connect_error) {
        die('connection Failed:'.$conn->connect_error);
    } else {
      $stmt= $conn->prepare("insert into regestration(firstName, lastName, gender, email, password,phoneNumber)values(?,?,?,?,?,?)");
      $stmt->bind_param("sssssi",$firstName, $lastName, $gender, $email, $password, $phoneNumber);
      $stmt->execute();
      echo "PROFILE.PAGE,html";
      $stmt->close();
      $conn->close();
    }
    
?>