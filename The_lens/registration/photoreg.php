<?php 
include('connect.php');
include('checkphotoemail.php');
$username = $_POST['name'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$experience= $_POST['exp'];
$location= $_POST['loca'];
$password= $_POST['password'];
$cpassword= $_POST['confirm_password'];
// $carrer=$_POST['role'];
$gender= $_POST['sex'];
$genre= $_POST['genre'];
$camera= $_POST['camera'];
$socialmedia= $_POST['socialmedia'];
$image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];



if($password!=$cpassword) {
    echo '<script>
    alert ("Password Do not match");
    window.location="../photo.php;
    </script>';
 }
 else{
    move_uploaded_file($tmp_name,"photodata/$image");
    $sql="insert into `photographers` (name,email,age,experience,location,password,gender,genre,camera,social_media,picture) 
    values ('$username','$email','$dob','$experience','$location','$password','$gender','$genre','$camera','$socialmedia','$image')";

    $result= mysqli_query($con,$sql);
 

     if($result){
         echo '<script>
    alert ("Registration Successful");
    window.location="photologin.php";
    </script>';
 
     }
     
 }
 ?>