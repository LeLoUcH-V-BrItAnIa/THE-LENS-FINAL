<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page | The Lense</title>
  <link rel="stylesheet" href="photologin.css">
</head>
<body>
    
    <div class="wrapper">
    <form action="photolog.php" method="GET">
      <h2>Photographer Login</h2>
        <div class="input-field">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="pass" required>
        <label>Enter your password</label>
      </div>
    
      <button type="submit"  id="submit" >Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="photo.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>