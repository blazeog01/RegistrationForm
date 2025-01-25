<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student";



    $username = $_SESSION['username'];
    $name = $_POST['name'];
    $school_name = $_POST['school_name'];
    $year = $_POST['year'];
    $stream = $_POST['stream'];
    $roll = $_POST['roll'];
    $section = $_POST['section'];

    $connection = mysqli_connect($host, $user, $password, $db);


    if (empty($name) || empty($school_name) || empty($year) || empty($stream) || empty($roll) || empty($section)) {
        header("location:edit.html?error=2");
    }
    else {
        mysqli_query($connection, "update student_details set name='$name', school_name='$school_name', year='$year', stream='$stream', roll='$roll', section='$section' where username='$username'");
        header("location:view.php");
    }
    exit();
