<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/head_and_foot.css">
    <link rel="stylesheet" href="stylesheet/course.css">
    <link rel="shortcut icon" href="img/Agnium_logo.png" type="image">
    <title>Agnium | Online Learning Platform</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <header>
        <div class="head">
            <img src="img/Agnium_logo.png" alt="Logo">
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
                echo "<script type=\"text/javascript\" src=\"script/index.js\"></script>";
            }
            else{
                $username = "Sign In";
                $profile = "signin.php";
                echo "<button onclick=\"location.href='$profile'\">$username</button>";
            }
        ?>
    </header>
    <div id="content">
        <button id="slider" onclick="span()"><i id="icon" class="fa fa-chevron-right" aria-hidden="true"></i></button>
        <section id="side">
        </section>
        <section class="main">
            <div id="title"></div>
            <div id="info"></div>
            <div id="code_example"></div>
            <div id="example"></div>
            <code id="code_expln"></code>
        </section>
    </div>
    <footer id="footer"></footer>
    <script>
        var data_file = "php.json";
        var xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
            if(xhttp.readyState == 4 && xhttp.status == 200){
                var jsonObj = JSON.parse(xhttp.responseText);
                var x = topic = btn = "";
                for(x in jsonObj){
                    topic = jsonObj[x].title;
                    btn = btn + "<button onclick=\"loadInfo("+ x +")\">" + topic + "</button><br>";
                }
                document.getElementById("side").innerHTML = btn;

                document.getElementById("title").innerHTML = jsonObj["1"].title;
                document.getElementById("info").innerHTML = jsonObj["1"].info;
                if(jsonObj["1"].example != null){
                    document.getElementById("example").style.display = "block";
                    document.getElementById("example").innerHTML = jsonObj["1"].example;
                }
                else{
                    document.getElementById("example").style.display = "none";
                }
                if(jsonObj["1"].codeExample != null){
                    document.getElementById("code_example").style.display = "block";
                    document.getElementById("code_example").innerHTML = jsonObj["1"].codeExample;
                }
                else{
                    document.getElementById("code_example").style.display = "none";
                }
                if(jsonObj["1"].codeExpln != null){
                    document.getElementById("code_expln").style.display = "block";
                    document.getElementById("code_expln").innerHTML = jsonObj["1"].codeExpln;
                }
                else{
                    document.getElementById("code_expln").style.display = "none";
                }
            }
        }
        xhttp.open("POST", data_file, true);
        xhttp.send();

        function loadInfo(num){
            var data_file = "php.json";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function(){
                if(xhttp.readyState == 4 && xhttp.status == 200){
                    var jsonObj = JSON.parse(xhttp.responseText);
                    var x = "";
                    for(x in jsonObj){
                        if(num === parseInt(x)){
                            document.getElementById("title").innerHTML = jsonObj[x].title;
                            document.getElementById("info").innerHTML = jsonObj[x].info;
                            if(jsonObj[x].example != null){
                                document.getElementById("example").style.display = "block";
                                document.getElementById("example").innerHTML = jsonObj[x].example;
                            }
                            else{
                                document.getElementById("example").style.display = "none";
                            }
                            if(jsonObj[x].codeExample != null){
                                document.getElementById("code_example").style.display = "block";
                                document.getElementById("code_example").innerHTML = jsonObj[x].codeExample;
                            }
                            else{
                                document.getElementById("code_example").style.display = "none";
                            }
                            if(jsonObj[x].codeExpln != null){
                                document.getElementById("code_expln").style.display = "block";
                                document.getElementById("code_expln").innerHTML = jsonObj[x].codeExpln;
                            }
                            else{
                                document.getElementById("code_expln").style.display = "none";
                            }
                        }
                        else{
                            continue;
                        }
                    }
                }
            }
            xhttp.open("GET",data_file,true);
            xhttp.send();
        }
        
        function span(){
            if(document.getElementById("icon").className == "fa fa-chevron-right"){
                document.getElementById("icon").classList.toggle("fa-chevron-right");
                document.getElementById("icon").classList.toggle("fa-chevron-left");
                document.getElementById("side").style.transition = "0.5s";
                document.getElementById("side").style.left = "0px" ;
                document.getElementById("slider").style.left = "200px";
                document.getElementById("slider").style.transition = "0.5s";
            }
            else{
                document.getElementById("icon").classList.toggle("fa-chevron-left");
                document.getElementById("icon").classList.toggle("fa-chevron-right");
                document.getElementById("side").style.transition = "0.5s";
                document.getElementById("side").style.left = "-200px" ;
                document.getElementById("slider").style.left = "0px";
                document.getElementById("slider").style.transition = "0.5s";
            }
        }
    </script>
</body>
</html>