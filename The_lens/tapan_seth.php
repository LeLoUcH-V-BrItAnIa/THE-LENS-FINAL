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
                <img src="male_photographers\8.png" height="650px" width="500px"></div>
                <div class="col">
                <h1>
                    TAPAN SETH
                </h1>
                <p>Name:Tapan Seth<br>Age:30year old<br>Email:Tapan573@gmail.com<br>Experience:Legislatuer Photography <br>Gender:Male<br> Location:Kolkata<br>Password:Tapan@657<br>Genre:Composition photography <br>Camera:Canon R5<br>Social Media:Facebook</p>  
                

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
           <a href=""><img src="male_photographers\Tapan seth\Tapan Sheth1.jpg"></a>
        </div>
        <div class="pic1">
            <a href=""><img src="male_photographers\Tapan seth\Tapan Sheth2.jpg" alt=""></a>
        </div>
        <div class="pic2">
            <a href=""><img src="male_photographers\Tapan seth\Tapan Sheth3.jpg" alt=""></a>
        </div>
        <div class="pic3">
            <a href=""><img src="male_photographers\Tapan seth\Tapan Sheth4.jpg" alt=""></a>
        </div>
         <div class="pic2">
            <a href=""><img src="male_photographers\Tapan seth\Tapan Sheth5.jpg" alt=""></a>
        </div>
         <div class="pic2">
            <a href=""><img src="male_photographers\Tapan seth\Tapan Sheth6.jpg"></a>
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