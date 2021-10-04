<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  </fieldset>
<br>
<br>








<fieldset>
  <legend>CHANGE PASSWORD</legend>

<p ><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
<form name="chngpwd" action="" method="post" onSubmit="return valid();">

<tr height="50" >
<td>Old Password :</td>
<td><input type="password" name="opwd" id="opwd"></td>
</tr>
<br>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<br>
<tr height="50" >
<td>Retype New Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<br>
<tr>

<td><input type="submit" name="Submit" value="Change Passowrd" /></td>
</tr>
<br>
</form>

</fieldset>
</body>
</html>