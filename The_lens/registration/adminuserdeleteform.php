<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="deletedata.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User Profile</title>
</head>
<body>
    <h1>Delete User Profile</h1>
    <form method="GET" action="adminuserdelete.php">
        <label for="email" class="DETAILS">Enter Email</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" class="btn" value="Delete Profile">
    </form>
</body>
</html>