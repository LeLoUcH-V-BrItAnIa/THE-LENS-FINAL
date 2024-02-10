

<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="updatefm.css">
       
        </head>
        <body>
            <div id="container_1">
  
                <h1>
                    Update User's Profile
              </h1>
        
                
              </div>
              <div id="container_2">
               
             
                    <form method="POST" action="updateuser.php">
                        <label for="new_name">New Name:</label><br>
                        <input type="text" name="new_name" placeholder="<?php echo $_SESSION['user_name']; ?>" required>
                        <br>
                        <label for="new_number">New Phone Number</label><br>
                        <input type="text" name="new_number" placeholder="<?php echo $_SESSION['user_number']; ?>" required>
                        <br>
                        <label for="new_password">New Password</label><br>
                        <input type="text" name="new_password" placeholder="Enter New Password" required>
                        <br>
                    
                
                  <input type="submit" class="submit" name="submit" value="Submit">
                </form>
              </div>
              
        </body>
</html>