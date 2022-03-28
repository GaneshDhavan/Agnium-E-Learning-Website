<?php
    include('connection.php');

    //retrieve data from user
    $email = $_POST['email'];
    $passwd = $_POST["passwd"];
    $pass = password_hash($password, PASSWORD_BCRYPT);

    //validate if they have registered
    $sql = 'SELECT * FROM registered WHERE Email = $email;';
    $result = mysqli_query($conn,$sql);
    if((mysqli_num_rows($result)) === 1){
        $sql = 'select * from registered where Email = $email and Password = $pass;';
        $result = mysqli_query($conn,$sql);
        if((mysqli_num_rows($result)) === 1){
            echo "found";
        }
        else echo "Incorrect password";
    }
    else echo "Incorrect EmailID";
?>