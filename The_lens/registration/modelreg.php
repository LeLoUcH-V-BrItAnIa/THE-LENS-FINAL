<?php 
include('connect.php');
include('checkmodelemail.php');
$username = $_POST['name'];
$email= $_POST['email'];
$dob= $_POST['dob'];
$experience= $_POST['exp'];
$location= $_POST['loca'];
$password= $_POST['password'];
$cpassword= $_POST['confirm_password'];
// $carrer=$_POST['role'];
$sex= $_POST['genre'];
$height= $_POST['height'];
$waist= $_POST['waist'];
$chest= $_POST['chest'];
$hips= $_POST['hips'];
$shoes= $_POST['shoes'];
$hair= $_POST['hair'];
$shirt= $_POST['shirt'];
$phone= $_POST['phno'];
$image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];



if($password!=$cpassword) {
    echo '<script>
    alert ("Password Do not match");
    window.location="../model.php;
    </script>';
 }
 else{
    move_uploaded_file($tmp_name,"database/$image");
    $sql="insert into models (name,email,age,experience,location,password,gender,height,waist,chest,hips,shoes,hair,shirt,phn_no,picture) 
    values ('$username','$email','$dob','$experience','$location','$password','$sex','$height','$waist','$chest','$hips','$shoes','$hair','$shirt','$phone','$image')";

    $result= mysqli_query($con,$sql);
 

     if($result){
         echo '<script>
    alert ("Registration Successfull");
    window.location="modellogin.php";
    </script>';
 
     }
    
     
 }
 
 
    
   
 
 
 ?>