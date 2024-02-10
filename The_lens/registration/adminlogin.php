<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>
    <div class="wrapper">
        <h2>Admin Login</h2>
        <form action="adminlog.php" >
            <div class="input-field">
               
                <input type="text" id="email" name="email"  required >
                <label>Enter your email</label>
            </div>
            <div class="input-field">
                
                <input type="password" id="password" name="pass" required>
                <label>Password</label>
            </div>
            
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>