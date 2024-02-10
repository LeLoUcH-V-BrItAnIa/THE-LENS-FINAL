<?php
// include("connect.php");
// $query="select * from `models` ";
// $result= mysqli_query($con,$query);
// $row = mysqli_fetch_assoc($result);

// echo $row['name'];
?>
<?php
session_start(); 
$model = $_SESSION['email'];
include("connect.php");
$query = "select * from `models` where email='$model' ";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);


$_SESSION['model_name'] = $row['name'];
$_SESSION['model_gender'] = $row['gender'];
$_SESSION['model_height'] = $row['height'];
$_SESSION['model_waist'] = $row['waist'];
$_SESSION['model_chest'] = $row['chest'];
$_SESSION['model_shirt'] = $row['shirt'];
$_SESSION['model_hair'] = $row['hair'];
$_SESSION['model_hips'] = $row['hips'];
$_SESSION['model_shoes'] = $row['shoes'];
$_SESSION['model_pic'] = $row['picture'];


// session_destroy();
// session_unset();
//echo"session destroyed";
?>
<!DOCTYPE html>
<html lang="en">
    <head>

   
    <meta charset="UTF-8">
    <meta name="viewport" content=""width-device-width, initial-scale="1.0">
    <title>The Lens</title>
    <link rel="stylesheet" href = "dashstyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;500;600;700&family=Bodoni+Moda:opsz,wght@6..96,400;6..96,500;6..96,600;6..96,700;6..96,800;6..96,900&family=Codystar&family=Julius+Sans+One&family=Kelly+Slab&family=Monoton&family=Montserrat:wght@300;400;600&family=Nixie+One&family=Pontano+Sans&family=Poppins:wght@400;600;700&family=Raleway:wght@400;600;700&family=Ramabhadra&family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<div class="header">
    <div class="container1">
        <div class = "navbar">
            <div class="logo">
                <img src="./LOGO3.png" width="100px" >
                
            
            </div>
            <h4 face="lastica">
                THE LENS
            </h4>
        
            <nav>
                
                <ul id="MenuItems" >
                    <a href="../index.php"><li>Home</li></a>
                    <a href="newmodelprofilepage.php"><li>Models</li></a>
                    <a href="newphotoprofilepage.php"><li>Photographers</li></a>
                    <a href="modelupdatefm.php"><li>Edit Profile</li></a>
                    <!-- <a href=""></a><a href="" >login</a></li>
                    <a href=""></a><a href="" >signup</a></li> -->
                     <!-- <a href=""></a><a href=""><img src="E:\project\onlinereg prototype\picture\cart100.png" width="40px"height="40px" class="cart-icon" onclick="carttoggle()"></a></li> -->
                </ul> 
            </nav>
            <!-- <a href=""><img src="E:\project\onlinereg prototype\picture\images\cart.png" width="30px"height="30px" class="cart-icon" onclick="carttoggle()"></a> -->
            <img src="E:\project\onlinereg prototype\picture\3dot.png" class="menu-icon" width="10px"height="30px" onclick="menutoggle()">

        </div>

    </div>

        <div class="row">
            <div class="col">
                <img src="./database/<?php echo $_SESSION['model_pic'] ?>" height="650px" width="500px"></div>
                <div class="col">
                <h1>
                <?php echo $_SESSION['model_name'] ?>     
                </h1>
                <p>Height: <?php echo $_SESSION['model_height'] ?><br>Waist: <?php echo $_SESSION['model_waist'] ?><br>Chest: <?php echo $_SESSION['model_chest'] ?><br>Hips: <?php echo $_SESSION['model_hips'] ?><br>Shoes: <?php echo $_SESSION['model_shoes'] ?><br>Hair: <?php echo $_SESSION['model_hair'] ?><br>Shirt: <?php echo $_SESSION['model_shirt'] ?></p>
                
                </div>
            
                
                
        </div>
    </div>
</div>

<!-- <div class="row1">
 <div class="container">
        <h3>GALLERY</h3>
            
    </div>
    <div class="photo-gallery">
        
        <div class="pic">
           <a href=""><img src="E:\project\onlinereg prototype\female_models_afterloginpage\emily\0f-2463cdd5-5350-40af-b57d-85cf123fbb94.png"></a>
        </div>
        <div class="pic1">
            <a href=""><img src="E:\project\onlinereg prototype\female_models_afterloginpage\emily\2.png" alt=""></a>
        </div>
        <div class="pic2">
            <a href=""><img src="E:\project\onlinereg prototype\female_models_afterloginpage\emily\3.png" alt=""></a>
        </div>
        <div class="pic3">
            <a href=""><img src="E:\project\onlinereg prototype\female_models_afterloginpage\emily\4.png" alt=""></a>
        </div>
         <div class="pic2">
            <a href=""><img src="E:\project\onlinereg prototype\female_models_afterloginpage\emily\5.png" alt=""></a>
        </div>
         <div class="pic2">
            <a href=""><img src="E:\project\onlinereg prototype\female_models_afterloginpage\emily\6.png" alt=""></a>
        </div>
    </div>
</div> -->


<!---------footer------------>

 <script>
    var MenuItems = document.getElementById("MenuItems")
    MenuItems.style.maxHeight = "0px"
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
 </script>
 <script>
    var MenuItems = document.getElementById("MenuItems")
    MenuItems.style.maxHeight = "0px"
    function carttoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
 </script>

</body>
</html>
