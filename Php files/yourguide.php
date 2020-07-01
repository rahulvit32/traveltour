<?php

    session_start();
    $conn=new mysqli("localhost","root","","traveltour");
    $nm=$_SESSION['uss'];
    $sql="SELECT * from `guide` where book_id='$nm'";
    $res=$conn->query($sql);
    if($res->num_rows==0)
    {
        echo "0";
    }
    else
    {
        while($rows=$res->fetch_assoc())
        {
            echo $rows["name"]."&nbsp;&nbsp;&nbsp;";
            echo $rows['gender']."&nbsp;&nbsp;&nbsp;";
            echo $rows['contact_no']."&nbsp;&nbsp;&nbsp;";
            echo $rows['price']."&nbsp;&nbsp;&nbsp;";
            echo '<br />';
            echo '<br />';
        }
    }

?>


<html>
    
    <head>
        
        <title>TravelTour - yourguide</title>
        
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
            <p>Thanks for booking. Your guide will contact you ASAP.</p>
            <p><a href="home_0.html">Go to Home</a></p>        
        </body>
        
    </head>
    
</html>    
