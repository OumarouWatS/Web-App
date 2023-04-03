<!DOCTYPE>
<html>
    <head>
        <style>
            <?php include "styles.php"?>
        </style>
    </head>
    <body>
        <?php
            include ("db_connection.php");
            //include ("header.php");
        ?>
        <form name="login" action="login_process.php" method="POST">
            <div class="signin" id="login_div" name="login_div" >
                <table>
                    <h1>Sign in Form</h1>
                    <table border="2" bgcolor="white" align="center" width="60%">
                    <tr>
                        <td><h2>Enter your user identification number:</h2></td>
                        <td><input type="text" name="userid" id="userid" /></td>
                    </tr>
                    <tr>
                        <td><h2>Enter your user password number:</h2></td>
                        <td><input type="password" name="password" id="pwd" /></td>
                    </tr>
                    <tr>
                        <td><h2>Captcha: <img src="captcha.php" /></h2></td>
                        <td><input type="text" name="captcha_txt" id="captcha_txt" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><button name="login" id="login" value="Login" >Login</button></td>
                    </tr>
                </table>
            </div>
        </form>
        
    </body>
</html>
 