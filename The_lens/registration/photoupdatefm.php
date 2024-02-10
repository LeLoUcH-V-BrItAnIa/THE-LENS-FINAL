<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="updatefm.css">

    <title>Update Photographer Profile</title>
</head>
<body>
    <h1>Update Photographer's Profile</h1>
    <form method="POST" action="updatephoto.php">
        <label for="new_name">New Name:</label>
        <input type="text" name="new_name" placeholder="<?php echo $_SESSION['photo_name']; ?>" required>
        <br>
        <label for="new_email">New Email:</label>
        <input type="text" name="new_email" placeholder="Put your new email here" required>
        <br>
        <label for="new_exp">New experience:</label>
        <input type="text" name="new_exp" placeholder="Put your new experience here" required>
        <br>
        <label for="new_password">New Password:</label>
        <input type="text" name="new_password" placeholder="Put your new password here" required>
        <br>
        
        <input type="submit" placeholder="Update Profile">
    </form>
</body>
</html>
 -->


 

<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="updatefm.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        </head>
        <body>
            <div id="container_1">
  
                <h1>
                    Update Photographer's Profile
              </h1>
        
                
              </div>
              <div id="container_2">
               
             
        <form method="POST" action="updatephoto.php">
        <label for="new_name">New Name:&nbsp;&nbsp;</label>
        <input type="text" name="new_name" placeholder="Put your new name here" required>
        <br>
        <!-- <label for="new_email">New Email:</label>
        <input type="text" name="new_email" placeholder="Put your new email here" required>
        <br> -->
        <label for="new_exp">New Experience:&nbsp;&nbsp;</label>
        <input type="text" name="new_exp" placeholder="Put your new experience here" required>
        <br>
        <label for="new_password">New Password:&nbsp;&nbsp;</label>
        <input type="text" name="new_password" placeholder="Put your new password here" required>
        <br>
        
        <input type="submit" class="submit" placeholder="Update Profile">
    </form>
              </div>
              
        </body>
</html>
