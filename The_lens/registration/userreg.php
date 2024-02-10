<?php 
include('connect.php');
include('checkuseremail.php');
$username = $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$cpassword= $_POST['confirm_password'];
$phone= $_POST['number'];



if($password!=$cpassword) {
    echo '<script>
    alert ("Password Do not match");
    window.location="../model.php;
    </script>';
 }
 else{
   
    $sql="insert into `user` (name,email,phone,password) 
    values ('$username','$email','$phone','$password')";

    $result= mysqli_query($con,$sql);
 

     if($result){
         echo '<script>
    alert ("Registration Successfull");
    window.location="userlogin.php";
    </script>';
 
     }
     
 }
 ?>