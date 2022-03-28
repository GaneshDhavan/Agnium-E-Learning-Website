<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/head_and_foot.css">
    <link rel="stylesheet" href="stylesheet/index.css">
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
            if(isset($_SESSION["username"])){
                $username = $_SESSION["username"];
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
        <label>Web Designing Courses</label>
        <div class="web_courses">
            <a href="signin.php" id="html" class="courses html">
                <div class="logo"><img src="img/html5logo.jpg" alt="HTML 5"></div>
                <p>HTML 5</p>
            </a>
            <a href="signin.php" id="css" class="courses css">
                <div class="logo"><img src="img/css3logo.jpg" alt="CSS 3"></div>
                <p>CSS 3</p>
            </a>
            <a href="signin.php" id="js" class="courses js">
                <div class="logo"><img src="img/jslogo.jpg" alt="JAVASCRIPT"></div>
                <p>JAVASCRIPT</p>
            </a>
            <a href="signin.php" id="php" class="courses php">
                <div class="logo"><img src="img/phplogo.png" alt="PHP"></div>
                <p>PHP</p>
            </a>
        </div>
        <div id="signbutton">
        <?php
        if(!isset($_SESSION["username"]))
            echo "<button class=\"signin\" onclick=\"location.href='signin.php'\">Sign Up!</button>";
        ?>
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
    <?php
        if(isset($_SESSION["username"])){
            echo "<script>
                document.getElementById(\"html\").href = \"course_html.php\";
                document.getElementById(\"css\").href = \"course_css.php\";
                document.getElementById(\"js\").href = \"course_js.php\";
                document.getElementById(\"php\").href = \"course_php.php\";
            </script>";
        }
    ?>
</body>
</html>