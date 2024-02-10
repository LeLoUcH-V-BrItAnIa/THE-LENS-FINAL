
<?php
session_start();
    
$user = $_SESSION['email'];
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $new_name = $_POST['new_name'];
    $new_number = $_POST['new_number'];
    $new_password = $_POST['new_password'];
    
    
    if(isset($user)){
        $sql = "UPDATE `user` SET `name`='$new_name ',`phone`=' $new_number',`password`='$new_password' WHERE `email`='$user'";
    $result = mysqli_query($con, $sql);
    }
    
    if ($result) {
        // echo '<script>
        // alert ("Profile Updated Successfully");
        // window.location="./.php;
        // </script>';
        
        // session_destroy();
        // session_unset();
        $_SESSION['user_name'] = $new_name;
        $_SESSION['user_number'] = $new_number;
        $_SESSION['user_password'] = $new_password;
        
        // echo "Update Successful";
        header("Location:../homepage.php");
        exit();
    } else {
        
        echo "Error updating photographer name: " . mysqli_error($con);
    } 
    
}








// session_start();

// if (!isset($_SESSION['email'])) {
    
//     header("Location: photologin.php"); 
//     exit();
// }

// include("connect.php");

// $user = $_SESSION['email'];

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//     $new_name = $_POST['new_name'];
//     $new_email = $_POST['new_email'];
//     $new_number = $_POST['new_number'];
//     $new_password = $_POST['new_password'];
    


    
//     $query = "UPDATE `user` SET name='$new_name',email='$new_email',phone='$new_number',password='$new_password' WHERE email='$user'";
//     $result = mysqli_query($con, $query);

//     if ($result) {
        
//         $_SESSION['photo_name'] = $new_name;
//         $_SESSION['photo_email'] = $new_email;
//         $_SESSION['photo_number'] = $new_number;
//         $_SESSION['photo_password'] = $new_password;

//         echo "Update Successful";
//          header("Location: photographerprofilepage.php");
//          exit();
//     } else {
        
//         echo "Error updating photographer name: " . mysqli_error($con);
//     }
// }
?>
