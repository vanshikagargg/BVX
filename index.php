<?php
session_start();

?>

<html>
<head>
    <title> login form </title>
    <link rel="stylesheet"href="style1.css">

</head>
<body>
   <div class="container">
          <div class="card">
            <div class="inner-box" id="card">
               

               <div class="card-front">
                 
                  <?php
                  
                  if(isset($_SESSION['status'] ))
                  {
                     echo  $_SESSION['status'];
                     unset($_SESSION['status']); 
                  }
                  ?>
               
                  

               <h2>Hey! User</h2>

               <form action="login.php" method="post">
                  
                  <input type="Email" class="input-box" placeholder="Your Email ID" name="EmailID">
                  <input type="password" class="input-box" placeholder="Password"name="Password">
                     <button type="submit"class="submit-btn">Login</button>
               </form>
               <button type="button"class="btn"onclick="openRegister()">REGISTER HERE</button>     
               <a href="forgotPassword.php">Forgot Password?</a>

                  </div>
               <div class="card-back">

                  

                  <h2>REGISTER</h2>
               <form action="connection.php" method="post">
                  <input type="text" class="input-box" placeholder="Your Name" name="Name">
                  <?php if(isset($name_error)): ?>
                     <span><?php echo $name_error; ?></span>
                  <?php endif ?>
                  <input type="text" class="input-box" placeholder="Your Contact" name="Contact">
                  <input type="Email" class="input-box" placeholder="Your Email ID" name="EmailID">
                  <input type="password" class="input-box" placeholder="Password" name="Password">
                     <button type="submit"class="submit-btn" name="submit">Submit</button>

               </form>
               <button type="button"class="btn"onclick="openHeyAdmin()">I have an account</button>    
               

               </div>
            </div>
          </div>
      </div>
      <script>
         var card=document.getElementById("card");
         function openRegister(){
            card.style.transform="rotateY(-180deg)";
         }
         function openHeyAdmin(){
            card.style.transform="rotateY(0deg)";
         }
</script>

</body>
</html> 

   
