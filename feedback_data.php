<?php
    include("connection.php");
    $message = $_POST['message'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO feedback VALUES ('$message','$email');";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert(\"Your Feedback Has Been Added.\");</script>";
        header("location:index.php");
    }
?>