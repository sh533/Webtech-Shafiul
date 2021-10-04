<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
 <style>
.error{
  color: red;
}
</style>
</head>
<body>
  <fieldset>

  <legend>REGISTRATION</legend>

<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <hr>
  <br><br>
  Email: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <hr>

  <br><br>
  User Name: <input type="text" name="Username">
  <span class="error"><?php echo $UsernameErr;?></span>
  <hr>

  <br><br>
  Password:<input type="password" name="password">
  <span class="error"><?php echo $passwordErr;?></span>
  <hr>

  <br><br>

  Confirm Password:<input type="password" name="Confirmpassword">
  <span class="error"><?php echo $ConfirmpasswordErr;?></span>
  <hr>
  <fieldset>
  <legend>Gender</legend>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  </fieldset>
  <br><br>

  <fieldset>
    <legend>DATE OF BIRTH</legend>
  
  <input type="date" id="birthday" name="<?php echo $dateofbirth;?>"><br>
   <span class="error">* <?php echo $DOBErr;?></span>
  </fieldset>
  <br><br>
  <input type="submit" name="submit" value="Submit">  

</form>
</fieldset>
</body>
</html>