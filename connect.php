<?php
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $message = $_POST['$message'];

 //Database Connection
$conn=new mysqli('localhost', 'root','','connect');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into connect(firstname, lastname, email, mobile, message)
     values(?, ?, ?, ?,?)");
     $stmt->bind_param("sssis",$firstname,$lastname,$gender,$email,$password,$number);
     $stmt->execyte();
     echo "Registration successfully..";
     $stmt->close();
     $conn->close();
}

?>