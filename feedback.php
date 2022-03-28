<?php
if(isset($_POST["message"])){
    include("connection.php");
    $message = $_POST['message'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO feedback VALUES ('$message','$email');";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert(\"Your Feedback Has Been Added.\");
            window.location.replace(\"index.php\");
            </script>";
        header("location:index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF=8">
        <link rel="stylesheet" href="feedback.css">
        <link rel="shortcut icon" href="img/Agnium_logo.png" type="image">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <title>Agnium | Feedback</title>
    </head>
    <body>
        <div id="wrap">
            <h1>YOUR FEEDBACKS WOULD BE APPRECIATED</h1>
            <br><br><br>
            <div id="form-wrap">
                <form action="feedback.php" method="post">
                    <button id="close" onclick="location.href = 'index.php'"><i class="fa fa-times"></i></button>
                    <label for="email">YOUR MESSAGE:</label>
                    <textarea name="message" id="message" required id="name"></textarea>
                    <label for="email">Email:</label>
                    <input type="email" name="email">
                    <br><br><br><br>
                    <input type="submit" name="submit" value="Send">
                </form>
            </div>
        </div>
    </body>
</html>