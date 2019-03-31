<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if($_GET)
    {
        
        $nm=$_GET['nm'];
        $em=$_GET['em'];
        $sb=$_GET['sb'];
        $msg=$_GET['msg'];
        
        //Load Composer's autoloader
        require 'C:/Users/pc/vendor/autoload.php';

        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'travel.tour9594@gmail.com';                 // SMTP username
            $mail->Password = 'Rahul@8428477804';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($em,$nm);
            $mail->addAddress('rahul.mahajan2017@vitstudent.ac.in', 'Rahul');     // Add a recipient
            $mail->addAddress('rahul.mahajan2017@vitstudent.ac.in');               // Name is optional
            $mail->addReplyTo($em,$nm);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $sb;
            $mail->Body    = $msg;
            $mail->send();
            header("Location: forgotpassword.php");
    }
            if($_POST)
            {
                header("Location: index.php");
            }
?>

<html>
    <head>
        <title>TravelTour - forgot_password</title>
        <link rel="icon" type="image/jpg" href="images/white.png" />
        <style>
            body
            {
                background-image:url(images/bg_5.jpg);
                margin:0;
;           }
            
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
                left:30px;
                
            }
            #right
            {
                background-color:black;
                height:380px;
                width:380px;
                position:absolute;
                left:800px;
                bottom:100px;
                opacity:0.5;
                border-radius:10px;
                
            }
            #my_cform
            {
                position:absolute;
                bottom:110px;
                left:835px;
            }
            #send
            {
                position:relative;
                right:130px;
            }
            input
            {
                height: 30px;
                
            }
            #back
            {
                position:relative;
                left:250px;
                top:118px;
            }
        </style>
    </head>
    <body>
        
        
        
        <div id="midsection"></div>
        <div id="mid">
            Don't worry, <br/> We will help &#9786;
        </div>
        
        <div id="right"></div>
        
        <div>
            <center>
                <form id="my_cform">
                    <input type="text" name="nm" placeholder="Your Name" size="40"><br/><br/>
                    <input type="email" name="em" placeholder="Your Email" size="40"><br/><br/>
                    <input type="text" name="sb" placeholder="Subject"size="40"><br/><br/>
                    <textarea rows="6" cols="36" name="msg" placeholder="Your message here..."></textarea><br/><br/>
                    <input type="submit" name="submit" value="Send" id="send">
                </form>
                <form method="post">
                    <input type="hidden" name="hid" value="hidden">
                    <input type="submit" name="back" value="Back" id="back">
                    
                </form>
            </center>
        </div>
         <p style="margin-left:500px;margin-top:215px; color:white;">&copy; 2019 TravelTour | All rights reserved</p>
    
    </body>
</html>