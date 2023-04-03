<!DOCTYPE>
<?php 
session_start(); 
?>
<html>
    <head>
        <title>login_validation</title>
        <link rel="stylesheet" href="styles.php">
    </head>
    <style>
        <?php 
            //include ("header.php");
        ?>
    </style>
    <body>
        <?php
            include ("db_connection.php");
            //include ("header.php");
        ?>
        <?php
            $uid = $_POST['userid'];
            $password = $_POST['password'];
            $captcha = $_POST['captcha_txt'];
            if($_SESSION['vercode'] == $captcha)
            {
                //echo "Correct Captcha!";
                echo "<br>";
            }
            else
            {
                echo "Incorrect Captcha.";
            }
        ?>
        <?php
            $_SESSION["uid"] = $uid;
        ?>
        <?php
            
            $sql="SELECT * FROM users_tab WHERE userid='$uid' AND password='$password'";
            $result=$connect->query($sql);
            
            $row = $result->fetch_assoc();

            // taking students to their landing page
            if($row['role'] == "S"){
                include("student/student.php");
            }elseif($row['role'] == "F"){
                include("faculty/faculty.php");
            }elseif($row['role'] == "A"){
                include("admin/add_stu.php");
            }
        ?>
    </body>
</html>