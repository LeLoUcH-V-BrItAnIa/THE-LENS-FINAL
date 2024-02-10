<?php
include('connect.php');


$query = "SELECT name, picture FROM models";
$result = mysqli_query($con, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
       
        $modelName = $row['name'];
        $modelImage = $row['picture'];

    
        echo "<h2>$modelName</h2>";
        echo "<img src='database/$modelImage' alt='Model Image'><br>";
       
        
    }
} else {
    echo "Error fetching models: " . mysqli_error($con);
}

mysqli_close($con);
?>


