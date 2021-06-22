<?php 

include('db_connect.php');

$sql = "SELECT * FROM profile WHERE id='1'";
$result = mysqli_query($conn, $sql);
$name = mysqli_fetch_assoc($result);
mysqli_free_result($result); 
mysqli_close($conn);

?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src='script.js'></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>GAURISH SAINI</title>
        <link rel="icon" href="https://coloredcow.com/wp-content/uploads/2017/03/favicon.png" sizes="32x32">
    </head>
    <body class="brown lighten-4">
        <div class="container">
            <div class="center-align">
                <div><img src="https://avatars.githubusercontent.com/u/58362095?v=4" height="150px" width="150px" class="circle responsive-img"></div>
                <div style="margin-top: 10px;"><img src="wave.gif" height="30px" width="30px"></div>
                <span>Hi, my name is <?php echo $name["profile_name"]; ?>.</span></br>
                <span>I build things for the web.</span></br></br>
                <p>Not from IIT's, NIT's or IIIT's.</p>
                <p>(Software Engineer Intern at <a class="black-text" href="https://coloredcow.com/"><u>ColoredCow</u></a>)</p>
            </div>
            <hr></br>
            <div class="center-align">
                <ul>
                    <li class="social"><a href="https://github.com/gaurish-saini"><img src="https://img.icons8.com/material-sharp/30/000000/github.png"/></a></li>
                    <li class="social"><a href="https://www.linkedin.com/in/gaurish-prakhar-saini-0a3ab6173/"><img src="https://img.icons8.com/metro/26/000000/linkedin.png"/></a></li>
                    <li class="social"><a href="mailto:gaurish.saini@coloredcow.in"><img src="https://img.icons8.com/material/24/000000/mail.png"/></a></li>
                    <li class="social"><a href="https://twitter.com/SainiGaurish"><img src="https://img.icons8.com/android/24/000000/twitter.png"/></a></li>
                    <li class="social"><a href="https://www.instagram.com/gaurish.saini/?hl=en"><img src="https://img.icons8.com/metro/26/000000/instagram-new.png"/></a></li>
                    <li class="social"><a href="https://www.facebook.com/profile.php?id=100011479098981"><img src="https://img.icons8.com/material-sharp/28/000000/facebook-new.png"/></a></li>                  
                </ul>
            </div>
        </div>
    </body>
</html>