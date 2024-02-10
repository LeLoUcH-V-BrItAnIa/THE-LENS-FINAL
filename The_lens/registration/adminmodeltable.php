<?php
include("connect.php");
$query = "select * from `models`";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if ($result = mysqli_query($con, $query)) {

    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $gender = $row["gender"];
        $height = $row["height"];
        $waist = $row["waist"];
        $chest = $row["chest"];
        $shirt = $row['shirt'];
        $hair = $row['hair'];
        $hips = $row['hips'];
        $shoes = $row['shoes'];
        $pictures = $row['picture'];
        
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="doc.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <p>Name:<?php echo  $name?></p>
            <table border="2">
                
                <tr>
                   <td>Gender</td>
                    <td>Height</td>
                    <td>waist</td>
                    <td>chest</td>
                    <td>shirt</td>
                    <td>hair</td>
                    <td>hips</td>
                    <td>shoes</td>
                </tr>
                <tr>
                    
                   
                    <td><?php echo  $gender?></td>
                    <td><?php echo  $height?></td>
                    <td><?php echo  $waist?></td>
                    <td><?php echo  $chest?></td>
                    <td><?php echo  $shirt?></td>
                    <td><?php echo  $hair?></td>
                    <td><?php echo  $hips?></td>
                    <td><?php echo  $shoes?></td>
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












