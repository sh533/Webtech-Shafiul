<!DOCTYPE HTML>  
<html>
<head>
<style>
.error{
  color: red;
}
</style>
</head>
<body>  
  <?php
  // define variables and set to empty values

  $nameErr = $emailErr = $genderErr = $Date_of_birthErr = $degreeErr ="" ;
  $name = $email = $gender = $Date_of_birth = $degree ="" ;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["Date_of_birth"])) {
      $Date_of_birthErr = "B.date is required";
    } else {
      $wDate_of_birth = test_input($_POST["Date_of_birth"]);
      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
      if (!filter_var($Date_of_birth, FILTER_VALIDATE_URL)) {
        $Date_of_birthErr = "";
      }
    }

    if (empty($_POST["degree"])) {
      $degreeErr = "";
    } else {
      $degree = test_input($_POST["degree"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>




<fieldset>
<p><span class="error">* required field</span></p>
<fieldset>
  <legend>NAME</legend>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     Name: <input type="text" name="name">
     <?php 
      if (isset($nameErr)) {
        echo $nameErr; 
      }
      ?>
     
  </form>

  
  <span class="error">* <?php echo $nameErr;?></span>
   </fieldset>
  <br><br>
  


  <fieldset>
    <legend>EMAIL</legend>
  
     Email: <input type="text" name="email">
      <?php
      if (isset($emailErr)) {
        echo $emailErr; 
      }
      ?>
  </form>

  
  <span class="error">* <?php echo $nameErr;?></span>
  </fieldset>
  <br><br>

<fieldset>
    <legend>DATE OF BIRTH</legend>
  
  <input type="date" id="birthday" name="<?php echo $dateofbirth;?>"><br>
   <span class="error">* <?php echo $Date_of_birthErr;?></span>
    <?php
      if (isset($Date_of_birthErr)) {
        echo $Date_of_birthErr; 
      }
      ?>
  </fieldset>
  
  


<br>
<br>


  
  


  <fieldset>
  <legend>GENDER</legend>

  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>  value="other">Other
  <span class="error">*
    <?php 
      if (isset($genderErr)) {
        echo $genderErr; 
      }
      ?>
      </span>
</fieldset>

  <br>
  <br>


<fieldset>
  <legend>DEGREE</legend>
  <input type="checkbox" name="degree" value="SSC">SSC
  <input type="checkbox" name="degree" value="HSC">HSC
  <input type="checkbox" name="degree" value="BSc">BSc
  <input type="checkbox" name="degree" value="MSc">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
   <?php
      if (isset($degreeErr)) {
        echo $degreeErr; 
      }
      ?>

</fieldset>


<br>
<br>



<fieldset>
  <legend>BLOOD GROUP</legend>
  <select>
    <option >select</option>
  <option  value="A+">A+</option>
  <option   value="A-">A-</option>
  <option   value="B+">B+</option>
  <option  value="O+">O+</option>
  <option  value="O-">O-</option>
  <option  value="AB+">AB+</option>
  <option  value="AB-">AB-</option><br>
   <?php
      if (isset($blood_groupErr)) {
        echo $blood_groupErr; 
      }
      ?>
  <br>
  <input type="submit" name="submit" >
</select>
</fieldset>

  <br><br>






    
</form>


<br>
<br>

<br>
<br>
<br>

<?php 
  if (isset($_POST['submitButton'])) {
    echo "<h1>Your Input</h1>";

    echo $name . "<br>";
    echo $email . "<br>";
    echo $degree . "<br>";
    echo $Date_of_birth . "<br>";
    echo $gender . "<br>";
    echo $blood_group . "<br";
  }

   ?>
</body>
</html>
