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
                    <a href="student.php" class="nav-item nav-link active">View Faculty</a>
                    <a href="student.php" class="nav-item nav-link">View Courses</a>
                    <a href="student.php" class="nav-item nav-link">Personal Details</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->
        <?php
            //viewing all the courses
            $sql="SELECT * FROM course_tab";
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
            echo "<br>"."<br>"."<br>";
        ?>

        <?php
        $uid = $_SESSION["uid"];
        // viewing faculty in the student dapartment
        $sql1="SELECT * FROM student_tab WHERE stu_id = '$uid'";
        $result1=$connect->query($sql1);
        $row1 = $result1->fetch_assoc();
        $department = $row1['stu_dept'];

        $count = 0;

        $sql2="SELECT * FROM faculty_tab WHERE department='$department'";
        $result2=$connect->query($sql2);
        while($row2 = $result2->fetch_assoc()){
            echo "<td>";
                echo "<img src= 'faculty/faculty_pics/".$row2['fac_pic']."' />";
                echo "<span>";
                echo $row2['fac_name'].", ";
                echo $row2['qualification'].", ";
                echo $row2['department']." ";
                echo "</span>";
            echo "</td>";

            $count++;

            if($count == 4){
                echo "</tr><tr>";
                $count = 0;
                echo "<br>";
            }
        }

        echo "<br>"."<br>"."<br>";

        //viewing student's personal details
        echo "<table>
        <tr>
            <th>Student Personal Information: </th>
        </tr>";
        echo "<tr>";
            echo "<td>"."Student name: ";
            echo "<td>".$row1['stu_name']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"."Bachelors in: ";
            echo "<td>".$row1['stu_major']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"."Year of enrollment: ";
            echo "<td>".$row1['stu_year_of_enrollment']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"."Cumulative GPA: ";
            echo "<td>".$row1['CGPA']."</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"."Year of Graduation: ";
            echo "<td>".$row1['year_of_graduation']."</td>";
        echo "</tr>";
        echo "</table>";
        ?>
    </body>
</html>
  