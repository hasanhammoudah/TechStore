<?php
session_start();
include "connect.php";
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$type=$_POST['type'];
$status=$_POST['status'];
$sql="INSERT INTO admins(name,email,password,type,status) VALUES('$name','$email','$password','$type','$status')";
if(mysqli_query($conn,$sql)){
    $_SESSION['success']="Admin Added Successfully";
    header("location:../add_admin.php");
}

?>