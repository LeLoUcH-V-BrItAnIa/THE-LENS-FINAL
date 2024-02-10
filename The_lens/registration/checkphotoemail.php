<?php 
    // Connect to the database 
 include('connect.php');
 
    // Check the connection 
    
    // Get the email address from the user input 
    $email = $_POST['email']; 
 
    // Prepare the query 
    $query = "SELECT * FROM photographers WHERE email = '$email'"; 
 
    // Execute the query 
    $result = $con->query($query); 
 
    // Check if the email exists in the database 
    if ($result->num_rows > 0) { 
        echo '<script>
        alert ("Email already exist");
        window.location="photo.php";
        </script>'; 
    } else { 
        // echo "The email does not exist in the database."; 
    } 

 
    // Close the connection 
   
?> 