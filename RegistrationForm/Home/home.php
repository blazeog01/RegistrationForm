<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student";

    $username = $_SESSION['username'];

    $connection = mysqli_connect($host, $user, $password, $db);
    $sql = mysqli_query($connection, "select * from student_details where username='$username'");

    $row = mysqli_num_rows($sql);

    if ($row > 0) {
        header("location:../View/view.php");
    }
    else {
        header("location:../RegistrationForExam/registration-for-exam.html");
    }