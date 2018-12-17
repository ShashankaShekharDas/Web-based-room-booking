<?php

    session_start();
    
    if($_SESSION['username'] and $_SESSION['email'] and $_SESSION['username']!="lg")
    {
        ?>

            <style>

                #a{
                    background-color: #84AD5C;
                    border-width: 5px;
                    border-radius: 10%;
                    height: 100px;
                    width:600px;
                    margin: 100 auto;
                    font-size: 200%;
                }
                
                p{
                    padding:10px;
                }
                
                body{
                    background-color: azure;
                    
                }
                a{
                    text-decoration: none;
                }
                #b{
                    margin:0 auto;
                    padding-left:700px;
                }
            </style>

            <div id="a">
                <p>
                You have successfully booked Room <?php echo $_SESSION['rm'];?> in the block <?php echo $_SESSION['room']; ?>. Timing is from <?php echo $_SESSION["time"]; ?>:00 hrs.
                </p>
            </div>


            <div id="b">
                <p>
                
                <a href="mail.php"><b><u><i>Do you want to mail this?</i></u></b></a>
                    
                </p>
                    
                
            </div>

        <?php
        
    }

?>