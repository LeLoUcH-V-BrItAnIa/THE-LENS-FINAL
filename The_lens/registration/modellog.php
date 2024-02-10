<?php

// $conn = new mysqli("localhost","root","","omprs");

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST["email"];
//     $password = $_POST["pass"];

//     $sql = "SELECT * FROM models WHERE email ='$email' and password ='$password'";
//     $result = $conn->query($sql);

//     if ($result->num_rows == 1) {
        
//         echo "Login successful!";
        
//         header("Location:photo.php");
//         exit();
//     } else {
        
//         echo "Login failed. Please check your email and password.";
//     }
// }
// $conn->close();
?>
<?php
$con=mysqli_connect("localhost","root","","omprs");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$email = $_GET['email'];
$pwd = $_GET['pass'];

$sql = "SELECT * FROM `models` where email='" . $email . "' and password='" . $pwd . "'";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

if($row==null)
{
  echo '<script>
  alert("invalid credentials");
  window.location="modellogin.php";
  </script>';
  
}
else
{
	session_start();
	$_SESSION['email'] = $row['email'];
  echo '<script>
	alert("Login successful");
	
	</script>';

	header( 'Location: modelprofilepage.php' ) ;
}
mysqli_close($con);
?>

