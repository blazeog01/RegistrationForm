<?php
session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student";

    $connection = mysqli_connect($host, $user, $password, $db);

    $username = $_SESSION['username'];

    mysqli_query($connection, "delete from student_details where username = '$username'");
    header("location:../Home/home.html");
    exit();