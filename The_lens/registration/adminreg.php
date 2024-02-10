<?php 
include('connect.php');
include('checkemail.php');

$email= $_POST['email'];
$password= $_POST['password'];
$cpassword= $_POST['confirm_password'];




if($password!=$cpassword) {
    echo '<script>
    alert ("Password Do not match");
    window.location="../model.php;
    </script>';
 }
 else{
   
    $sql="insert into `admin` (email,password) 
    values ('$email','$password')";

    $result= mysqli_query($con,$sql);
 

     if($result){
         echo '<script>
    alert ("Registration Successfull");
    window.location="";
    </script>';
 
     }
     
 }
 ?>