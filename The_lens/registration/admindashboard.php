<?php
session_start(); 
$user = $_SESSION['email'];
include("connect.php");
$query = "select * from `admin` where email='$user' ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$_SESSION['user_email'] = $row['email'];
$_SESSION['user_pass'] = $row['password'];

// echo $_SESSION['user_email'];
// echo $_SESSION['user_pass'] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admindashboard.css">
    <title>Document</title>
</head>
<body>
   <p>Admin</p>
   
    <div class="sql">
        <h1>Details</h1>
    <form action="adminmodeltable.php"  >
        <input class="btn" type="submit"  value="models">
    </form>
    <form action="adminphotographers.php">
        <input class="btn" type="submit" value="photographers">
    </form>
    <form action="adminusertable.php">
        <input class="btn" type="submit" value="users">
    </form>
    </div>
    <h3>welcome   <?php echo $_SESSION['user_email'];?></h3><br>
    
    <!-- <div class="update">
    <h1>update</h1>
    <form action="mupdateform.php">
        <input class="btn" type="submit" value="models">
    </form>
    <form action="pupdateform.php">
        <input class="btn" type="submit" value="photographers">
    </form>
    <form action="uupdateform.php">
        <input class="btn" type="submit" value="users">
    </form>
    </div> -->

    <div class="delete">
        <h1>Delete</h1>
    <form action="adminmodeldeleteform.php">
        <input class="btn" type="submit" value="models">
    </form>
    <form action="adminphotodeleteform.php" method="post">
        <input class="btn" type="submit" value="photographers" name="email">
    </form>
    <form action="adminuserdeleteform.php">
        <input class="btn" type="submit" value="users">
    </form>
    </div>
    
</body>
</html>