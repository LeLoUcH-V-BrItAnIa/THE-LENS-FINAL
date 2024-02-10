<?php
session_start(); 
$model = $_SESSION['email'];
include("connect.php");
$query = "select * from `models` where email='mo@gmail.com' ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);


$_SESSION['model_name'] = $row['picture'];
echo $_SESSION['model_name'];

?>