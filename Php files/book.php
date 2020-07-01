<?php

    session_start();
    if(isset($_SESSION['dest']))
    {
        $conn = new mysqli("localhost", "root", "", "traveltour");
        
        $dest=$_SESSION["dest"];
        $min=$_SESSION["min"];
        $max=$_SESSION["max"];
        $pl=$_SESSION["pl"];
        
        $sql="SELECT * FROM `guide` WHERE location='$dest' and price>$min and price<$max and available=1";
        
        $res=$conn->query($sql);
       
        
        if($res->num_rows>0)
        {
            $ct=0;
            
                ?>
            <center>
            <h1 id="mid">Welcome, select your tour guide person &#9786;</h1>
            </center>
                
                    <table border="2" id="main" align="center">
                        <tr>
                            <th>S. No.</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Contact Number</th>
                            <th>Price</th>
                            <th>Rating</th>
                            <th>Click me to Book</th>
                        </tr>
                        <?php
                    while($row=$res->fetch_assoc())
                {
                        $ct+=1;
                    ?>
                    <tr>
                        <form method="get">
                            <td><?php echo $ct?></td>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['gender']?></td>
                            <td><?php echo $row['contact_no']?></td>
                            <td><?php echo $row['price']?></td>
                            <td><?php 
                                if(!$row['rated'])
                                {
                                    echo "Unrated";
                                }
                                else
                                {
                                    $rating = $row['total']/$row['rated'];
                                    echo  number_format((float)$rating, 2, '.', '');
                                }
                                
                                ?></td>
                            <td><button id="bk" name="bk" value="<?php $val=$row['id']."|".$_SESSION['uss'];echo $val;?>">Press Me To Book</button></td>
                        </form>
                        
                        </tr>
                        <?php

                }
            
                        ?>
                </table>
                        
<?php
            
            
            
        }
        else
        {
            echo "No guides available based on given criteria";
        }
        if($_GET)
            
        {
            $all=explode("|",$_GET["bk"]);
            $iddd=$all[0];
            echo $all[1];
            $sql="UPDATE `guide` SET available=0 where id=$iddd";
            $conn->query($sql);
            
            $sql="UPDATE `guide` SET book_id='$all[1]' where id=$iddd";
            $conn->query($sql);
            
            $_SESSION['iddd']=$iddd;
            
            header("Location: booked.php");
        }
        
    }

?>


<html>
    
    <head>
        
        <title>TravelTour - book</title>
        
        <link rel="icon" type="image/jpg" href="images/white.png" />
        
        <style>
            
            body
            {
                background-image:url(images/bg_8.jpg);
                margin:0;
            }
            #mid
            {
                position: relative;
                top:80px;
            }
            #main
            {
                position:relative;
                top:200px;
                border-radius: 10px;
                border-spacing:5px;
                border-style: double;
                border-color: black;
            }
            #bk
            {
                background-color:#4985A1;
                border: none;
                color: black;
                padding: 5px 25px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size:15px;
            }
            
        </style>
        
        <body>
            
        </body>
        
    </head>
    
</html>    
