<?php
include('connect.php');


$query = "SELECT name, picture FROM photographers";
$result = mysqli_query($con, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
       
        $photoName = $row['name'];
        $photoImage = $row['picture'];

        
        echo "<h2> $photoName</h2>";
        echo "<img src='photodata/$photoImage' alt='Photo Image'><br>";
        
    }
} else {
    echo "Error fetching photographers: " . mysqli_error($con);
}

mysqli_close($con);
?>


