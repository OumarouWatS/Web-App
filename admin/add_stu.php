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

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Education Management System</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="add_stu.php" class="nav-item nav-link active">View Students</a>
                    <a href="add_stu.php" class="nav-item nav-link">View Faculty</a>
                    <a href="add_stu.php" class="nav-item nav-link">Add Student</a>
                    <a href="add_stu.php" class="nav-item nav-link">Add Faculty</a>
                    <a href="add_stu.php" class="nav-item nav-link">Add Department</a>
                    <a href="add_stu.php" class="nav-item nav-link">Add Course</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <form name="add_student" action="add_stu_process.php" method="POST">
            <div class="add_stu" id="add_stu" name="add_stu" >
                <h1>Adding A Student to the System:</h1>
                <table border="2" bgcolor="white" align="center" width="60%">
                    <tr>
                        <td><h2>Student ID number:</h2></td>
                        <td><input type="text" name="stu_id" id="stu_id" /></td>
                    </tr>
                    <tr>
                        <td><h2>Student name:</h2></td>
                        <td><input type="text" name="stu_name" id="stu_name" /></td>
                    </tr>
                    <tr>
                        <td><h2>Year of Enrollment:</h2></td>
                        <td><input type="year" name="stu_year_of_enrollment" id="stu_year_of_enrollment" /></td>
                    </tr>
                    <tr>
                        <td><h2>Major:</h2></td>
                        <td><input type="text" name="stu_major" id="stu_major" /></td>
                    </tr>
                    <tr>
                        <td><h2>Cummulative GPA:</h2></td>
                        <td><input type="text" name="CGPA" id="CGPA" /></td>
                    </tr>
                    <tr>
                        <td><h2>Year of Graduation:</h2></td>
                        <td><input type="year" name="year_of_graduation" id="year_of_graduation" /></td>
                    </tr>
                    <tr>
                        <td><h2>Department:</h2></td>
                        <td><input type="text" name="stu_dept" id="stu_dept" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><button name="add_stu" id="add_stu" value="Add Student" >Add Student</button></td>
                    </tr>
                </table>
            </div>
        </form>
        
    </body>
</html>
 