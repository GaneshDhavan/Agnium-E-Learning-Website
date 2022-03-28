<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/about.css">
    <link rel="stylesheet" href="stylesheet/head_and_foot.css">
    <link rel="shortcut icon" href="img/Agnium_logo.png" type="image">
    <title>Agnium | Online Learning Platform</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="head">
            <img src="img/Agnium.PNG"  alt="Logo">
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
        <h1 id="webite">Agnium</h1>
        <p>Agnium is an E-Learning Website, made by the below team. Agnium is an idea made by us, for students in the future. Agnium teaches you the basic web development. About how to build a web-site using HTML5, CSS3, JS and PHP. With the newer versions of HTML and CSS, it became easy for anyone to biuld a website. But still we need a guide to look out those features, reduce the number of lines by adapting different ideology. Agnium helps you in building your career.<br>Feel free to give us feedback. </p>

        <h1>Our College</h1>
        <h2>M.H. Saboo Siddik College of Engineering</h2>
        <section id="map"></section>
        <div class="wrapper">
            <h1>Our Team</h1>
            <div class="team">
                <div class="team_member">
                    <div class="team_img">
                        <img src="img/team1.png" alt="Team_image">
                    </div>
                    <h3>Ganesh Dhawan</h3>
                    <h4>6118010</h4>
                    <br>Follow Up <a target="_blank" href="https://www.instagram.com/ganesh_dhavan01" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>

                <div class="team_member">
                    <div class="team_img">
                        <img src="img/team2.png" alt="Team_image">
                    </div>
                    <h3>Nizaal Khot</h3>
                    <h4>6118021</h4>
                    <br>Follow Up <a target="_blank" href="https://www.instagram.com/nizaal._._" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>


                <div class="team_member">
                    <div class="team_img">
                        <img src="img/team3.png" alt="Team_image">
                    </div>
                    <h3>Mohammad Umair</h3>
                    <h4>6118028</h4>

                    <br>Follow Up <a target="_blank" href="https://www.instagram.com/umair_2206" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        </footer>
        <script>
            var map;
            var parks = [{
                "college": "M.H.S.S.C.E",
                "coords": [18.968542, 72.830911]
            }];

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: new google.maps.LatLng(18.968542, 72.830911),
                    mapTypeId: 'roadmap'
                });
                mashParks(parks);
            }

            function mashParks(results) {
                for (var i = 0; i < results.length; i++) {
                    var coords = results[i].coords;
                    var latLng = new google.maps.LatLng(coords[0], coords[1]);
                    var marker = new google.maps.Marker({
                        position: latLng,
                        map: map,
                        label: results[i].park
                    });
                }
            }
        </script>
        <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgknLHHWn5yyeGfw133GY8INk_kGnV_Bs&callback=initMap">
        </script>
</body>

</html>