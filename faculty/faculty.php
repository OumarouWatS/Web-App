<!DOCTYPE>
<?php
    //session_start();
    ?>
<html>
    <head>
        <?php include "student/student_style.php"?>
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
                    <a href="faculty.php" class="nav-item nav-link active">View Taught Courses</a>
                    <a href="faculty.php" class="nav-item nav-link">Registered Students</a>
                    <a href="faculty.php" class="nav-item nav-link">Personal Details</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <?php
        $uid = $_SESSION["uid"];
        // viewing courses taught by self in a semester
        $sql="SELECT * FROM course_tab WHERE fac_id = '$uid'";
        $result=$connect->query($sql);
        
        echo "<table>
        <tr>
            <th>Course id</th>
            <th>Course name</th>
            <th>Offered in</th>
            <th>Pre Requesite</th>
            <th>Course Type</th>
        </tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo "<td>".$row['course_id']."</td>";
                echo "<td>".$row['course_name']."</td>";
                echo "<td>".$row['offered_in']."</td>";
                echo "<td>".$row['pre_req']."</td>";
                echo "<td>".$row['type']."</td>"."<br>";
            echo "</tr>";
        }
        echo "</table>";

        // viewing registered students for the faculty courses
        echo "<table>
        <tr>
            <th>Registered Students:</th>
            <th>Cumulative GPA:</th>
            <th>Bachelors in:</th>
            <th>Year of Enrollment:</th>
            <th>Year of Graduation</th>
        </tr>";

        $sql2="SELECT * FROM registration_tab WHERE fac_id = '$uid'";
        $result2=$connect->query($sql2);
        
        while($row2 = $result2->fetch_assoc()){
            $student_id = $row2['stu_id'];

            $sql3="SELECT * FROM student_tab WHERE stu_id = '$student_id' ";
            $result3=$connect->query($sql3);
            $row3 = $result3->fetch_assoc();
            echo "<tr>";
                echo "<td>".$row3['stu_name']."</td>";
                echo "<td>".$row3['CGPA']."</td>";
                echo "<td>".$row3['stu_major']."</td>";
                echo "<td>".$row3['stu_year_of_enrollment']."</td>";
                echo "<td>".$row3['year_of_graduation']."</td>"."<br>";
            echo "</tr>";
        }
        echo "</table>";

        echo "<br>"."<br>"."<br>";
        
        //viewing faculty's personal details
        $sql1="SELECT * FROM faculty_tab WHERE fac_id = '$uid'";
        $result1=$connect->query($sql1);
        $row1 = $result1->fetch_assoc();

        echo "<table>
        <tr>
            <th>Faculty Personal Information: </th>
        </tr>";
        echo "<tr>";
            echo "<td>"."Faculty Name: ";
            echo "<td>".$row1['fac_name']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"."Faculty Date of Joining: ";
            echo "<td>".$row1['fac_DOJ']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"."Qualification: ";
            echo "<td>".$row1['qualification']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"."Department: ";
            echo "<td>".$row1['department']."</td>";
        echo "</tr>";
        echo "</table>";
        ?>
    </body>
</html>
  