<!DOCTYPE>
<?php 
session_start(); 
?>
<html>
    <head>
        <title>adding_student_to_the_system</title>
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
            $stu_id = $_POST['stu_id'];
            $stu_name = $_POST['stu_name'];
            $stu_year_of_enrollment = $_POST['stu_year_of_enrollment'];
            $stu_major = $_POST['stu_major'];
            $CGPA = $_POST['CGPA'];
            $year_of_graduation = $_POST['year_of_graduation'];
            $stu_dept = $_POST['stu_dept'];
        ?>
        <?php
            $sql = "INSERT INTO student_tab (sid, stu_id, stu_name, stu_year_of_enrollment, stu_major, 
            CGPA, year_of_graduation, stu_dept) 
            VALUES (0, '$stu_id', '$stu_name', '$stu_year_of_enrollment', '$stu_major', '$CGPA', '$year_of_graduation', '$stu_dept' )";
            $result = $connect->query($sql);
            if ($result == FALSE)
            {
            echo "Error:( Please, try again. ";
            }

            echo "<h2>Confirmation message:</h2>";
            if($result){
            echo "We successfully stored your information in our database!!!";
            }else{
            echo "Sorry, an error occured, please enter the information again";
            } 
        ?>
        
    </body>
</html>