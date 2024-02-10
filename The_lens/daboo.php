<!DOCTYPE html>
<html lang="en">
    <head>

   
    <meta charset="UTF-8">
    <meta name="viewport" content=""width-device-width, initial-scale="1.0">
    <title>The Lens</title>
    <link rel="stylesheet" href = "style3.css">
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
                <img src="LOGO3.png" width="100px" >
                
            
            </div>
            <h4 face="lastica">
                THE LENS
            </h4>
        
            <nav>
                
                <ul id="MenuItems" >
                    <li><a href="homepage.php" >Home</a></li>
                    <li><a href="modelpage.php" >models</a></li>
                    <li><a href="photographerpage.php" >Photographers</a></li>
                    <!-- <li><a href="" >account</a></li> -->
                    <!-- <li><a href="" >login</a></li>
                    <li><a href="" >signup</a></li> -->
                     <!-- <li><a href=""><img src="picture\cart100.png" width="40px"height="40px" class="cart-icon" onclick="carttoggle()"></a></li> -->
                </ul> 
            </nav>
            <!-- <a href=""><img src="picture\images\cart.png" width="30px"height="30px" class="cart-icon" onclick="carttoggle()"></a> -->
            <img src="picture\3dot.png" class="menu-icon" width="10px"height="30px" onclick="menutoggle()">

        </div>

    </div>

        <div class="row">
            <div class="col">
                <img src="male_model_afterlogin\StarC3.png" height="650px" width="500px"></div>
                <div class="col">
                <h1>
                    DABOO RATNANI
                </h1>
                <p>Name:Daboo<br>Age:22year old<br>Email:Daboo365@gmail.com<br>Experience:Editorial Photography <br>Gender:Male<br> Location:Kolkata<br>Password:Avinash@123<br>Genre:Portrait photography <br>Camera:NikonD5600<br>Social Media:Plates</p>
                

                </div>
            
                
                
        </div>
    </div>
</div>

<div class="row1">
 <div class="container">
        <h3>GALLERY</h3>
            
    </div>
    <div class="photo-gallery">
        
        <div class="pic">
           <a href=""><img src="male_photographers\daboo\95829510_10157456073713869_136732824341315584ghvg0_n.jpg"></a>
        </div>
        <div class="pic1">
            <a href=""><img src="male_photographers\daboo\95829510_10157456073713869_1367328243413155840_n.png" alt=""></a>
        </div>
        <div class="pic2">
            <a href=""><img src="male_photographers\daboo\103903977_10157586223593869_2465951079065025257_n.png" alt=""></a>
        </div>
        <div class="pic3">
            <a href=""><img src="male_photographers\daboo\dabboo-ratnani_103_celebrity_01.png" alt=""></a>
        </div>
         <div class="pic2">
            <a href=""><img src="male_photographers\daboo\Kiara.png" alt=""></a>
        </div>
         <div class="pic2">
            <a href=""><img src="male_photographers\daboo\Ranbir.png"></a>
        </div>
    </div>
</div>
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