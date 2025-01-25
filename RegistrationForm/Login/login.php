<?php
    session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student";

    $connection = mysqli_connect($host, $user, $password, $db);

    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        $username = $_POST["user"];
        $password = $_POST['password'];

        $sql = mysqli_query($connection, "select * from registration where username='$username' and password='$password';");

        $row = mysqli_num_rows($sql);

        if ($row > 0) {
            $_SESSION['username'] = $username;
            header("location:../Home/home.html");
        }
        else {
            header("location:login.html?msg=1");
        }
    }
    elseif (empty($_POST['user']) || empty($_POST['password'])) {
        header("location:login.html?msg=2");
    }
exit();
