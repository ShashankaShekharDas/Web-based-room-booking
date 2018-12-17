<?php

    session_start();
    if($_SESSION['username'] and $_SESSION['email'] and $_SESSION['username']!="lg")
    {
        if($_GET)
    {
    
        $subj="Event";
        $body="An Event has been organised on ".$_SESSION['room']." on room number ".$_SESSION['rm']." from time ".$_SESSION['time']." by ".$_GET['name']." due to reason : ".$_GET['reason'];
        $headers="From: dnr@dnr.com";
        
        mail($_GET['em1'],$subj,$body,$headers);
        mail($_GET['em2'],$subj,$body,$headers);
        mail($_GET['em3'],$subj,$body,$headers);
    }
    }
?>

<html>

    <head>
        <title> MAIL    </title>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        
        <style>
        
            body{
                margin:0 auto;
                background-color: yellow;
            }
            #form{
                background-color: aliceblue;
                height:400px;
                width:300px;
                margin:100 auto;
                padding:50px;
                padding-left:100px;
                border-radius: 10%;
                font-family: 'Josefin Sans', sans-serif;
                font-size:130%;
            }
            #but{
                font-family: 'Acme', sans-serif;
                font-size:130%;
            }
        </style>
    </head>

    <body>
    
        <form method="get">
            <div id="form">
                Name   <input type="text" name="name"><br><br>
                Reason<input type="text" name="reason">
                <br><br><br><br><br>
                Mention 3 email addresses to send this to
                <br><br><br>
                Email-1<input type="text" name="em1"><br><br>
                Email-2<input type="text" name="em2"><br><br>
                Email-3<input type="text" name="em3"><br><br>

                <br>
                <button id="but">Submit</button>
            </div>
        </form>
        
    </body>


</html>