<?php

include('connection.php');
    
    static $num = 1;
    $mydate = getdate(date("U"));
    $ID = $mydate['year'].$mydate['yday'].rand(1,9).rand(1,9);
    $num += 1;
    $ID = (int)$ID;

    $name = $_POST['firstname']." ".$_POST['lastname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $password = $_POST['password'];
    $pass = password_hash($password, PASSWORD_BCRYPT);

    $sql = "insert into registered values ('$ID','$name','$age','$email','$location','$pass');";
    if((mysqli_query($conn, $sql))){
        session_start();
        $_SESSION["username"] = $name;
        $_SESSION["email"] = $email;
        header("location:index.php");
    }
    else{
        echo '<p>Registration Unsuccessful</p>';
        header("location:signin.php");
    }
?>