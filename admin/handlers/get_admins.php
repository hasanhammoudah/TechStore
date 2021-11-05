<?php
$sql="SELECT * FROM admins";
$getAdminsQuery=mysqli_query($conn,$sql);
$admins=mysqli_fetch_all($getAdminsQuery);




//echo '<pre>';
//print_r($admins);
//echo '</pre>';
?>