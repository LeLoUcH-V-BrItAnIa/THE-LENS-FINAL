<?php
include("connect.php");

if (isset($_GET['email'])) {
    $email = $_GET['email'];


    $query = "DELETE FROM photographers WHERE email = '$email'";

    if (mysqli_query($con, $query)) {

        // echo "Photographer's data has been deleted successfully.";
        header("Location:/admindashboard.php");

    } else {
        echo "Error: " . mysqli_error($con);
    }
} else {
    echo "Invalid request.";
}
?>