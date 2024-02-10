<?php
include("connect.php");
$query = "select * from `photographers`";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if ($result = mysqli_query($con, $query)) {

    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $gender = $row["gender"];
        $age = $row["age"];
        $experience = $row["experience"];
        $location = $row["location"];
        $genre = $row["genre"];
        $camera = $row["camera"];
        $socialmedia = $row["social_media"];
        $picture = $row["picture"];
        
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="doc1.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <p>Name:<?php echo  $name?></p>
            <table border="2">
                
                <tr>
                    <td>Gender</td>
                    <td>Experience</td>
                    <td>Genre</td>
                    <td>Camera</td>
                    <td>Social Media</td>
                    <td>location</td>
                   
                </tr>
                <tr>
                    
                   
                    <td><?php echo  $gender?></td>
                    <td><?php echo  $experience?></td>
                    <td><?php echo  $genre?></td>
                    <td><?php echo  $camera?></td>
                    <td><?php echo  $socialmedia?></td>
                    <td><?php echo  $location?></td>
                   
                   
                </tr>
            </table>
        </body>
        </html>
        <?php
        // echo '<b>'.$name.$gender.'</b><br />';
        // echo $name.'<br />';
        // echo $height.'<br />';
        // echo $shoes;
        // echo $pictures;
    }

/*freeresultset*/
$result->free();
}
?>
