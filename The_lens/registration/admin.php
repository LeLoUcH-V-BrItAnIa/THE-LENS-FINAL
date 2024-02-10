<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="adminreg.css">
       
        
    </head>
        <body>
            <div id="container_1">
  
                <h1 id="title">
                CREATE ACCOUNT 
              </h1><!--title-->
              <p id="description">
                Enter the required data in the boxes.
              </p><!--description--->
                
              </div><!---container_1--->
              <div id="container_2">
               
                <form id="survey-form" action="adminreg.php" method="POST" enctype="multipart/form-data">
                  <label id="email-label">Email</label>
                    <input type="email" id="email" name="email" class="form" required placeholder="Insert your email" ><br><!---email-->
                  
                    <label id="name-label">password</label>
                    <input type="password" id="password" name="password" class="form"  placeholder="Enter your Password" minlength="4" maxlength="8" size="8" required><br>
                    <label id="name-label">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form"  placeholder="Confirm your Password" minlength="4" maxlength="8" size="8" required><br>
                  <!-- <label id="name-label">password</label>
                  <input type="password" placeholder="Password" name="name" id="password" class="form" required>
                  <label id="name-label">Confirm</label>
                  <input type="password" placeholder="Confirm Password" name="name"id="confirm_password"  class="form"required> -->
      
                    <!-- <label id="carrer">Carrer</label>
                  <select id="dropdown" name="role" required>
                    <option disabled selected value>
                      Select your carrer
                    </option>
                    <option value="model">
                      Model
                    </option>
                    <option value="photographer">
                      Photographer
                    </option>
                    <option value="user">
                      User
                    </option>
                    <option value="admib">
                      Admin
                    </option>
                  </select>dropdown- -->
                  <!---radioButtons
                  <p>What is your preferred mode of study?</p>
                  <label>
                    <input type="checkbox" name="mode" value="Online">Online
                  </label>
                  <label>
                    <input type="checkbox" name="mode" value="Hybrid">Hybrid
                  </label>
                  <label>
                    <input type="checkbox" name="mode" value="On site">On site
                  </label> -->
                    <input type="submit"  id="submit" name="submit" value="Submit">
                </form><!---survey-form--->
              </div><!--container_2--->
              
        </body>
        <script>
          var password = document.getElementById("password")
          , confirm_password = document.getElementById("confirm_password");
        
        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }
        
        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        </script>
    
</html>
