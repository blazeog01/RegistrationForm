<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "student";
    
    $username = $_POST['user'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    
    $connection = mysqli_connect($host, $user, $password, $db);
    $sql = mysqli_query($connection, "select * from registration where username='$username'");


    if (empty($username) || empty($pass1) || empty($pass2)) {
        header("location:registration.html?msg=3");
    }
    elseif ($pass1 != $pass2) {
        header("location:registration.html?msg=4");
    }
    elseif (mysqli_num_rows($sql) > 0) {
        header("location:../Login/login.html?msg=5");
    }
    else {
        mysqli_query($connection, "insert into registration values('$username', '$pass1')");
        header("location:../Login/login.html?msg=4");
    }
exit();