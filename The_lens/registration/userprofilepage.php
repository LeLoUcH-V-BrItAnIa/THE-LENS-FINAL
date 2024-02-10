<?php
// include("connect.php");
// $query="select * from `models` ";
// $result= mysqli_query($con,$query);
// $row = mysqli_fetch_assoc($result);

// echo $row['name'];
?>
<?php
session_start(); 
$user = $_SESSION['email'];
include("connect.php");
$query = "select * from `user` where email='$user' ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$_SESSION['user_name'] = $row['name'];
$_SESSION['user_number'] = $row['phone'];
$_SESSION['user_email'] = $row['email'];
// echo $_SESSION['user_name'];
// echo $_SESSION['user_number'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="userprofile.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header"><img src="LOGO3.png" alt="self image">
    <h1>PROFILE</h1>
    <form action="userupdatefm.php">
        <a href="userupdatefm.php"><input type="button" value="Edit Profile" class="btn">
       
    </input></a>
    </form></div>
    
    <div class="details">
        
        <p>Name: <?php echo $_SESSION['user_name'];?></p>
        <p>Email: <?php echo $_SESSION['user_email'];?></p>
        <p>Contact Number: <?php echo $_SESSION['user_number'];?></p>
        
    </div>
    
</body>
</html>
