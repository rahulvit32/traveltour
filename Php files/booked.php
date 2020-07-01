<?php

    session_start();
    $id= $_SESSION['iddd'];
    $conn= new mysqli("localhost","root","","traveltour");
    $sql="SELECT * FROM `guide` WHERE id=$id";
    $res=$conn->query($sql);
    $row=$res->fetch_assoc();
?>

<html>
    
    <head>
        
        <title>TravelTour - book</title>
        
        <link rel="icon" type="image/jpg" href="images/white.png" />
        
        <style>
            body
            {
                background-image:url(images/bg_6.jpg);
                margin:0;
                color: white;
            }
            a
            {
                color: white;
                text-decoration:none;
            }
        </style>
            
        
        <body>
            <p>Thanks for booking <?php echo $row['name']?>. Your guide will contact you ASAP.</p>
            <p><a href="home_0.html">Go to Home</a></p>        
        </body>
        
    </head>
    
</html>    


    