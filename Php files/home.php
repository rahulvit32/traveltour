<?php

    if($_GET)
    {
        
        session_start();
        $_SESSION['dest']=$_GET["dest"];
        $_SESSION['min']=$_GET["min"];
        $_SESSION['max']=$_GET["max"];
        $_SESSION['pl']=$_GET["num"];
        header("Location: book.php");
    }

?>


<html>
    
    <head>
        
        <title>TravelTour - home</title>
        
        <link rel="icon" type="image/jpg" href="images/white.png" />
        
        <style>
            body
            {
                background-image:url(images/travel.jpg);
                margin:0;
            }
            #top
            {
                
                margin-top: 30px;
                height:60px;
                width:1366px;
                background-color:darkblue;
                opacity: 0;
            }
            #overlap
            {
                position:relative;
                bottom:60px;
            }
            #logo
            {
                height:30px;
                width:30px;
                padding-left:40px;
                padding-top:15px;
            }
            #name
            {
                font-family:monospace;
                font-size:24px;
                position:relative;
                bottom:6px;
                color:white;
            }
            #topbar
            {
                color:white;
                padding-left:550px;
                font-size:20px;
                position:relative;
                bottom:6px;
            }
            a
            {
                text-decoration:none;
                color:white;
            }
            a:hover
            {
                color: black;
            }
            
            #midsection
            {
                height:200px;
                width:600px;
                background-color:aqua;
                position:relative;
                top:30px;
                opacity:0;
            }
            #mid
            {
                font-size:60px;
                color:white;
                position:relative;
                bottom :150px;
                left:30px;
            }
            #dest
            {
                position:relative;
                left:60px;
                bottom:22px;
                color:white;
            }
            #dt
            {
                position:relative;
                width:100px;
                bottom:25px;
                left:60px;
            }
            #minprice
            {
                position: relative;
                left:70px;
                bottom:45px;
                color:white;
            }
            #min
            {
                position: relative;
                bottom:50px;
                left:170px;
            }
            #maxprice
            {
                position: relative;
                left:185px;
                bottom:68px;
                color:white;
            }
            #max
            {
                position: relative;
                bottom:72px;
                left:285px;
            }
            #people
            {
                position: relative;
                left:300px;
                bottom:93px;
                color:white;
            }
            #pl
            {
                position: relative;
                bottom:100px;
                left:405px;
                
            }
            
            #submit
            {
                position:relative;
                left:420px;
                bottom:98px;
                font-size:15px;
                width:50px;
                height:20px;
            }
        </style>
        
    </head>
    
    <body>
        
        <div id="top"></div>
        
        <div id="overlap">
            <img src="images/white.png" id="logo">&nbsp;&nbsp;&nbsp;
            <span id="name">TravelTour</span>
            <span id="topbar">
            <a href="home_0.html">Home</a>&nbsp;&nbsp;&nbsp;
            <a href="services.html">Services</a>&nbsp;&nbsp;&nbsp;
            <a href="about.html">About</a>&nbsp;&nbsp;&nbsp;
            <a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;
            <a href="yourguide.php">Cart</a>&nbsp;&nbsp;&nbsp;
            <a href="index.php">Logout</a>
            </span>
        </div>
        
        <div id="midsection"></div>
        
        <div id="mid">
            Travel operator <br/> just for you
        </div>
        
    <form method="get">
         
        <span id="dest">Destination:</span><br/>
            <select id="dt" name="dest" required>
                <option value="goa">Goa</option>
                <option value="mathura">Mathura</option>
                <option value="udaipur">Udaipur</option>
            </select>
        
        <span id="minprice">MinPrice:</span><br/>
        <input type="number" id="min" name="min" style="width:100px;" name="dest" required>
    
        <span id="maxprice">MaxPrice:</span><br/>
        <input type="number" id="max" name="max" style="width:100px;" name="dest" required>
        
        <span id="people">No. of People:</span><br/>
        <input type="number" id="pl" name="num" style="width:100px;" name="dest" required>
        
        <input type="submit"  id="submit" value="Find">
        
    </form>  
    <p style="margin-left:500px;color:white;">&copy; 2019 TravelTour | All rights reserved</p>
    </body>
    
</html>