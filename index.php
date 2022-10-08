<?php

    session_start(); 
    include("connections.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<html lang="en">
    <head>
        <!--Required Meta Charts-->
        <meta charset="utf-8">
        <style>
          body{
    background-image: url('logo.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}


.inner-layer{

    margin: auto;
    margin-top: 6%;
    width: 40%;
    height: 70%;
    padding: 20px;
    text-align: center;
    background-color: rgba(0, 173, 115, 0.9);
}

.inner-layer  .title{ 
    font-style: italic; 
}
        </style>

    <title>Main page </title>

    </head>
    <body>
        <a href="logout.php">logout</a>
        <h1>This is the appointment page</h1>

         <center> <h2 style="color: white; font-size: 100px;"> Hello <i><?php echo $user_data['user_name']; ?></i>  </h2></center>
        
            
       
    </body>

    </footer>
</html>