<?php
    $uname="shafiul alam";
    $password="123456sha";

    session_start();
?>
<table width="85%" align="center" cellspacing="0" cellpadding="10" border="1">
    <tr>
        <td colspan="3" valign="middle" height="75">  
			<table width="100%">
                <tr>
                    <td>
                        <a href="PublicHome.php"><img height="60" src=".jpg"></a>
                    </td>
                    <td align="right">

                    Logged in as <a href="<?php if(isset($_SESSION['uname'])) {echo "Dashboard.php";} else { echo "Login.php";} ?>" ><?php echo $_SESSION["uname"]; ?></a>&nbsp;|
                        <a href="Logout.php">Logout</a>
                    </td>
                </tr>
			</table>
        </td>
    </tr>
    <tr>