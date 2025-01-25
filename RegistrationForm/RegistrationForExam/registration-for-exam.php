<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student";

    $connection = mysqli_connect($host, $user, $password, $db);

    $username = $_SESSION['username'];
    $name = $_POST['name'];
    $school_name = $_POST['school_name'];
    $year = $_POST['year'];
    $stream = $_POST['stream'];
    $roll = $_POST['roll'];
    $section = $_POST['section'];

    $sql = mysqli_query($connection, "select * from student_details where username='$username'");

    if (mysqli_num_rows($sql) > 0) {
        header("location:registration-for-exam.html?error=1");
    }
    elseif (empty($name) || empty($school_name) || empty($year) || empty($stream) || empty($roll) || empty($section)) {
        header("location:registration-for-exam.html?error=2");
    }
    else {
        mysqli_query($connection, "insert into student_details values('$username', '$name', '$school_name', '$year', '$stream', '$roll', '$section')");
        header("location:view.php");
    }
exit();