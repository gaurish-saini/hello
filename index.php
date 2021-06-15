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
            <span>Hello from <?php echo $name["profile_name"]; ?>!</span>
        </div>
    </div>
    </body>
</html>