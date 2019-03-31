<?php

    if($_GET)
    {
        session_start();
        $lg=$_GET["username"];
        $pw=$_GET["password"];
        
        $conn=new mysqli("localhost","root","","traveltour");
        $sql="SELECT * FROM `login` where username='$lg' and password='$pw'";
        
        $res=$conn->query($sql);
        if($res->num_rows>0)
        {
            $_SESSION["uss"]=$lg;
            header("Location: home_0.html");
            
        }
        else
        {
            echo "<script>alert('Invalid Username/Password combination');</script>";
        }
        
    }

?>

<html>
    <head>
    <title>TravelTour - log in </title>
        <link rel="icon" type="image/jpg" href="images/white.png" />
        <style>
            body 
            {
                background-image: url("images/bg.jpg");
            }
            #top
            {
                font-family:monospace;
                font-size: 30px;
                margin-top:80px;
                color:black;
            }
            #mid
            {
                margin-top: 40px;   
                height: 240px;
                width: 400px;
                background-color: black;
                border-radius: 10px;
                opacity:0.7;
            }
            input
            {
                border-radius:3px;
                height: 23px;
                border-style:solid;
                border-width:1px;
                padding-left: 10px;
            }
            #button 
            {
                background-color:dodgerblue; 
                border: none;
                height:26px;
                width: 347px;
                color: white;
                text-align: center;
                font-size: 16px;
                position:relative;
                bottom:50px;
            }
            a
            {
                text-decoration:none;
                color:white;
            }
            a:hover
            {
                color:gray;
            }
            #login
            {
                position:relative;
                bottom: 200px;
            }
            #fp
            {
                position:relative;
                right:100px;
            }
            #tc
            {
                position: relative;
                bottom:200px;
            }
        </style>
        
    </head>
    <body>
        <center>
            <div id="top">TravelTour - Log In</div>
        </center>
        
        <center>
            <div id="mid"></div>
            <form id="login" method="get"> 
                    
                    <input type="text" name="username" size="44" placeholder="Username"><br/><br/>
                    <input type="password" name="password" size="44" placeholder="Password"><br/>
                    <span id="fp"><a href="forgotpassword.php">Forgot Password?</a></span>
                    <br/><br/><br/><br/>
                    <input type="submit" id="button" name="submit" value="Log In"><br/>
                    <account style="position: relative;bottom:30;color:white;">Don't have an account?<a href="index.php">Sign Up</a></account>
            </form>
            <p id="tc">&copy; 2019 TravelTour Log In | All rights reserved</p>
        </center>
        
    </body>
</html>