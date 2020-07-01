<?php

    if($_GET)
    {
        
        $us=$_GET["username"];
        $em=$_GET["email"];
        $pw=$_GET["password"];
        $cpw=$_GET["confirm_password"];
        if(isset($_GET["agree"]))
        {
            if($pw!=$cpw)
            {
                echo "<script>alert('Passwords don't match');</script>";
            }
            else
            {
                if(strlen($pw)<6)
                {
                    echo "<script>alert('Password of length is less than 6');</script>";
                }
                else
                {
                    $vt="/^[a-zA-Z0-9_@]+$/";
                    if(preg_match($vt,$us))
                    {
                        $conn=new mysqli("localhost","root","","traveltour");
                        
                        $sql="INSERT INTO `login` (username,email,password) VALUES ('$us','$em','$pw')";
                        
                        
                        
                        if ($conn->query($sql) == TRUE) 
                        {
                            
                            header("Location: home_0.html");
            
                        } 
                        else 
                        {
                            echo "<script>alert('Username Already Exist')</script>";
                        }
                    }
                }
            }
        }
        else
        {
            echo "<script>alert('Please agree to T&C');</script>";
        }
    }
    

?>

<html>
    <head>
    <title>TravelTour - sign up</title>
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
                height: 330px;
                width: 400px;
                background-color:black;
                border-radius: 10px;
                opacity: 0.7;
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
            #tc
            {
                position:relative;
                left:-47px;
            }
            #agree
            {
                position:relative;
                bottom:6px;
                color:white;
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
            #signup
            {
                position:absolute;
                left:510px;
                bottom:135px;
            }
         



        </style>
        
    </head>
    <body>
        <center>
            <div id="top">
                TravelTour - Sign Up
            </div>
        </center>
        
        <center>
            <div id="mid">
                
            </div>
            <form id="signup" method="get"> 
                    <br/>
                    <input type="text" name="username" size="44" placeholder="Username"><br/><br/>
                    <input type="email" name="email" size="44" placeholder="Email"><br/><br/>
                    <input type="password" name="password" size="44" placeholder="Password"><br/><br/>    
                    <input type="password" name="confirm_password" size="44" placeholder="Confirm Password"><br/>
                    <p id="tc">
                    <input type="checkbox" name="agree" checked><span id="agree">&nbsp;I Agree To Terms &amp; Condition</span>
                    </p>
                    <br/><br/>
                    <input type="submit" id="button" name="submit" value="Sign Up">
                    <br/>
                    <account style="position:relative;bottom:40;color:white;">Already have an account?<a href="login.php">Sign In</a></account>
            </form>
            <p>&copy; 2019 TravelTour Sign up Form | All rights reserved</p>
        </center>
    </body>
</html>