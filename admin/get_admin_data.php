<?php
require "handlers/connect.php";
$id=$_GET['id'];
$sql="SELECT id,name,email,status,type FROM admins where id=$id";
$query=mysqli_query($conn,$sql);
$adminData=mysqli_fetch_assoc($query);
//$data=array();
//$data['result']=$adminData;

echo json_encode($adminData);


?>