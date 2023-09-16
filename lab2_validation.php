<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>lab 2</title>
  </head>
  <body>
    <?php 
    if(isset($_GET['submit'])){
      $email2 = $_GET['email2'];
      $emailRegex = "/[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/";
    if(preg_match($emailRegex, $email2)){
      echo"valid; signup completed ; Insert to db";

    }   else{
      echo "invalid email2";
    }
    }



    
    // client side validation using html like required and js validation using regex
    // server side validation preg_match through php
    
    ?>
    <form action="" method="get" onsubmit="return true">
      <div>signup</div>
      <div>username: <input type="text" required minlength="6" ></div>
      <div>password: <input type="password" required></div>
      <div>email1(html5 validation): <input type="email" name="email1" required></div>
      
      <div>email2(js validation): <input type="text" name="email2" id="email2"></div>
      <div id="emailerror"></div>
      <div><input type="submit" name="submit" value="submit"/></div>
    </form>
    <script>
      function validateForm(){
        var emailRegex = /[A-Za-z0-9]+@[A-Za-z0-9]+.[A-Za-z]{2,3}/;
        var email2 = document.getElementById('email2').value
        if(emailRegex.test(email2)){
              return true;
        }else{
          document.getElementById("emailerror").innerHTML =" INVALID EMAIL";
          return false;

        }

      }

    
    </script>
  </body>
</html>
