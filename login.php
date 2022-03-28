<?php
    session_start();
    if(isset($_POST["email"])){
        include("connection.php");
        $email = $_POST["email"];
        $password = $_POST["passwd"];
        $pass = stripslashes($password);
        $sql = "SELECT * FROM registered WHERE Email = '$email';";
        $result = mysqli_query($conn,$sql);
        if((mysqli_num_rows($result)) == 1){
            $result = mysqli_fetch_row($result);
            if(password_verify($pass,$result[5])){
                $_SESSION["username"] = $result[1];
                $_SESSION["email"] = $email;
                header("location:index.php");
            }
            else echo "<script>alert(\"Incorrect Password\");</script>";
        }
        else echo "<script>alert(\"Your E-mail is not registered\");</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/head_and_foot.css">
    <link rel="stylesheet" href="stylesheet/signin.css">
    <link rel="shortcut icon" href="img/Agnium_logo.png" type="image">
    <title>Agnium | Log In</title>
</head>
<body>
    <header>
        <div class="head">
            <img src="img/Agnium.PNG" alt="Logo">
            <h2>Agnium</h2>
        </div>
        <nav>
            <a href="index.php">Courses</a>
            <a href="about.php">About</a>
            <a href="feedback.php">Feedback</a>
        </nav>
        <?php
            if(isset($_SESSION['username'])){
                $username = $_SESSION['username'];
                $profile = "myaccount.php";
                echo "<button onclick=\"location.href='$profile'\">$username</button>";
            }
            else{
                $username = "Sign In";
                $profile = "signin.php";
                echo "<button onclick=\"location.href='$profile'\">$username</button>";
            }
        ?>
    </header>
    <div class="main_content">
        <div class="sign_up">
            <h3>Log In</h3>
            <form action="login.php" method="POST">
                <label for="email">Email ID:</label>
                <input type="email" name="email" required>
                <label for="password">Password:</label>
                <input type="password" name="passwd" required>
                <input type="submit" id="submit" value="Log In">
            </form>
        </div>
    </div>
    <footer>
        <div class="legal">
            <p>Copyright &copy; 2020. Terms and Condition Applied.<p>
            <p>All Rights Reserved</p>
        </div>
        <div class="contact">
            <p>Mobile: <a id="contacts" href="tel:+917387601776">+91 73876 01776</a></p>
            <p>Email ID: <a href="mailto:nijaal.6118021.it@mhssce.ac.in">nijaal.6118021.it@mhssce.ac.in</a></p>
            <p>Mobile: <a href="tel:+919969293410">+91 99692 93410</a></p>
            <p>Email ID: <a href="mailto:ganesh.6118010.it@mhssce.ac.in">ganesh.6118010.it@mhssce.ac.in</a></p>
            <p>Mobile: <a href="tel:+918097165044">+91 80971 65044</a></p>
            <p>Email ID: <a href="mailto:umair.6118028.it@mhssce.ac.in">umair.6118028.it@mhssce.ac.in</a></p>
        </div>
    </footer>
</body>
</html>