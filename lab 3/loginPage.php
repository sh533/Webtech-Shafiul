<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<fieldset>
<legend>LOGIN</legend>
<form action="<?php echo MY_URL;?>" id="login-form" class="smart-form client-form">
    <header></header>
    <fieldset>
        <section>
            <label class="label">User Name</label>
            <label class="input"> <i class="icon-append fa fa-user"></i>
            <input type="username" pattern= " [a-zA-Z0-9]"name="username">
            <b class="tooltip tooltip-top-right"><i class="txt-color"></i> Please enter username</b></label>
        </section>

        <section>
            <label class="label">Password</label>
            <label class="input"><i class="icon-append lock"></i>
            <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password">
            <b class="tooltip tooltip-top-right"><i class="txt-color"></i> Enter your password</b> </label>
            <div class="note">
                <a href="<?php echo MY_URL; ?>/forgotpassword.php">Forgot password?</a>
            </div>
        </section>

        <section>
            <label class="checkbox">
                <input type="checkbox"name="remember" checked="">
                <i></i>Stay signed in</label>
        </section>
    </fieldset>
    <footer>
      <br><br>
        <button type="submit" class="btn btn-primary">Sign in</button>

    </footer>
 </form >  
</body>
</html>