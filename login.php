<?php

include("./db.php");

?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Login</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
   <div class="bg-img">
      <div class="content">
         <header>Login</header>
         <form action="./actions/adminlogin_action.php" method="post">
            <div class="field">
               <span class="fa fa-user"></span>
               <input type="text" name="email_admin" required placeholder="Username">
            </div>
            <div class="field space">
               <span class="fa fa-lock"></span>
               <input type="password" name="password_admin" class="pass-key" required placeholder="Password">
               <span class="show">SHOW</span>
            </div>
            <div class="cmmon-elements" style="display: flex;
                  justify-content: space-between;
                  align-items: center;">
               <div class="pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <div class="pass">
                  <a href="./register.php">Register</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="LOGIN">
            </div>
         </form>

         <script>
            const pass_field = document.querySelector('.pass-key');
            const showBtn = document.querySelector('.show');
            showBtn.addEventListener('click', function() {
               if (pass_field.type === "password") {
                  pass_field.type = "text";
                  showBtn.textContent = "HIDE";
                  showBtn.style.color = "#3498db";
               } else {
                  pass_field.type = "password";
                  showBtn.textContent = "SHOW";
                  showBtn.style.color = "#222";
               }
            });
         </script>
</body>

</html>