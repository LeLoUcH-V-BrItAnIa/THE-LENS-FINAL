<?php
session_start();

if (!isset($_SESSION['email'])) {
    
    // header("Location: modellog.php"); 
    exit();
}

include("connect.php");

$model = $_SESSION['email'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $new_name = $_POST['new_name'];
    // $new_email = $_POST['new_email'];
    $new_experience = $_POST['new_exp'];
    $new_password = $_POST['new_password'];
    
    $query = "UPDATE `models` SET name='$new_name',experience='$new_experience',password='$new_password' WHERE email='$model'";
    $result = mysqli_query($con, $query);

    if ($result) {
        
        $_SESSION['model_name'] = $new_name;
        // $_SESSION['photo_email'] = $new_email;
        $_SESSION['photo_experience'] = $new_experience;
        $_SESSION['photo_password'] = $new_password;
        
        // echo "Update Successful";
         header("Location: modelprofilepage.php");
        exit();
    } else {
        
        echo "Error updating photographer name: " . mysqli_error($con);
    }
}
?>
