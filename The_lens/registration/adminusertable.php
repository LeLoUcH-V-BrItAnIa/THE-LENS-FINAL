<?php
include("connect.php");
$query = "select * from `user`";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
if ($result = mysqli_query($con, $query)) {

    while ($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $password = $row["password"];
       ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="doc2.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <p>Name:<?php echo  $name?></p>
            <table border="2">
                
                <tr>
                   <td>Email</td>
                    <td>Phone</td>
                    <td>Password</td>
                    
                </tr>
                <tr>
                    
                   
                    <td><?php echo  $email?></td>
                    <td><?php echo  $phone?></td>
                    <td><?php echo  $password?></td>
                    
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


}

?>












