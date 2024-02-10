<?php
$con=mysqli_connect("localhost","root","","omprs");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$email = $_GET['email'];
$pwd = $_GET['pass'];

$sql = "SELECT * FROM `admin` where email='" . $email . "' and password='" . $pwd . "'";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

if($row==null)
{
  echo '<script>
  alert("invalid credentials");
  window.location="adminlogin.php";
  </script>';

}
else
{
    session_start();
    $_SESSION['email'] = $row['email'];
  echo '<script>
    alert("Login successful");

    </script>';

    header( 'Location: admindashboard.php' ) ;
}
mysqli_close($con);
?>