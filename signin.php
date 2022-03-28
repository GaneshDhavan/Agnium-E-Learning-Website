<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/head_and_foot.css">
    <link rel="stylesheet" href="stylesheet/signin.css">
    <link rel="shortcut icon" href="img/Agnium_logo.png" type="image">
    <title>Agnium | Online Learning Platform</title>
</head>
<body>
    <header>
        <div class="head">
            <img src="img/Agnium.PNG" alt="Logo">
            <h2>Agnium</h2>
        </div>
        <nav>
            <a href="index.php">Course</a>
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
            <h3>Register</h3>
            <form action="register.php" method="POST">
                <label for="firstname">First name:</label>
                <input type="text" name="firstname" required>
                <label for="lastname">Last name:</label>
                <input type="text" name="lastname" required>
                <label for="age">Age:</label>
                <input type="number" name="age" min='5' max="90" required>
                <label for="email">Email ID:</label>
                <input type="email" name="email" required>
                <label for="location">Location:</label>
                <input type="text" name="location" list="countrylist" required>
                <datalist id="countrylist">
                    <option value="India">
                    <option value="Germany">
                    <option value="Japan">
                    <option value="Spain">
                    <option value="Washington DC">
                    <option value="China">
                </datalist>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <input type="submit" id="submit" value="Sign In">
            </form>
            <p>Already Signed in? <a href="login.php">Log In</a></p>
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