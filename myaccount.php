<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/head_and_foot.css">
    <link rel="stylesheet" href="stylesheet/myaccount.css">
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
        <button onclick="location.href='logout.php'">Log Out</button>
    </header>
    <div class="main_content">
        <div class="profile">
            <img src="img/ProfilePic.png" alt="Profile Picture">
            <h4>
                <?php
                    echo $_SESSION["username"];
                ?>
            </h4>
            <table>
            <tr>
                <td>Email:</td> 
                <td><?php
                        echo $_SESSION["email"];
                    ?>
                </td></tr>
            <tr>
                <td>Age: </td>
                <td><?php
                    include('connection.php');
                    $email = $_SESSION["email"];
                    $sql = "SELECT * FROM registered WHERE Email = '$email';";
                    $result = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_row($result);
                    echo $row[2];
                ?>
            </td></tr>
            <tr>
                <td>Location:</td>
                <td><?php
                    echo $row[4];
                ?></td>
            </tr>
            </table>
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