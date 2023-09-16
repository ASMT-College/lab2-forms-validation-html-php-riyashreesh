<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form</title>
  </head>
  <body>
    <!-- <?php 
    // echo "<h1 style='color:red'>My Form</h1>";
    // if(isset($_POST['submit'])){
    //     echo 'password is:'.$_POST['password']; 
    // }
    
    ?>
    <form action="" method="post">
       method -post chai url ma seen hunxa and get chai seen hunna 
      <fieldset>

        <label>User</label><br>
      <legend>Login:</legend>
        <input type="text" name="username" />
      
      <div>
        <label for="">password:</label><br>
        <input type="password" name="password" />
        </div>
        
      <input type="color" />
    
    
      <input type="date" />
  <div>
      <input type="submit" value="login" name="submit" />
</div>
      </fieldset>
      
    </form> -->

  
 <form action="/action_page.php" target="_blank" method="post">
   <fieldset> 
 <legend><b><U>PLEASE ENTER YOUR DETAILS</U></b></legend>

    <label for="username">First Name:</label><br><input type="text"><br>
    
    <label for="username">Last Name:</label><br>
    <input type="text"><br>
    <label for="email">Email:</label><br>
    <input type="email"><br>
   <label for="password">Password:</label><br><input type="password" name="password" placeholder="password"><br>
      <label for="phone number">Phone Number:</label><br><input type="number" name="phone number"><br>
      <input type="date">
<input type="color">   
    <br>
    <label for="">gender:</label>
    <input type="radio" name="gender">male
    <input type="radio" name="gender">female
    <input type="radio" name="gender">others
    <br>
    <label for="">choose country:</label>
    <select >
      
    <option value="counrty">Nepal</option>
    <option value="counrty">China</option>
    <option value="counrty">India</option>

  </select>
  <br>

  <label for="your interest">Your Interest:</label>
  <input type="checkbox">dancing
  <input type="checkbox">playing
  <input type="checkbox">singing
  <br>
  <label for="fill here">fill here:</label><br>
  <textarea name="textarea" id="text" cols="30" rows="10"></textarea><br>
  <label for="browser">Browser:</label>
  <input list="browsers">
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
      </datalist>
      <br>
      <button>submit</button>
</fieldset> 
</form>



  </body>
</html>
<!-- what are different form elements explain with examples -->