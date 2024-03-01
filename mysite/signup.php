
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Login Form | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <form action="signup_check.php" method="post">
      <h2>Login</h2>
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          
        <div class="input-field">
        
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      ><br>
          <?php }?>
          <label>Enter your name</label>
      </div>

      <div class="input-field">
         <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      ><br>
          <?php }?>
        <label>Enter your username</label>
      </div>

      <div class="input-field">
      <input type="password" 
                 name="password" 
                 ><br>

        <label>Password</label>
      </div>

      <div class="input-field">
      <input type="password" 
                 name="re_password" 
                 placeholder=""><br>
        <label>Re_Password</label>
      </div>

      
      <button name="submit">Sign Up</button>
      <div class="register">
        <p>Have an account? <a href="login.php">Log in</a></p>
      </div>
    </form>
  </div>
</body>
</html>