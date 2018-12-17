<?php

    session_start();
    $link=mysqli_connect("localhost","shashanka","maarkandeya","Data_prj");

    
    if($_SESSION['username'] and $_SESSION['email'] and $_SESSION['username']!="lg")#lg for logout
    {
    
        if(isset($_GET["myb"]))
            {
            /*
                echo $_GET["myb"];
                echo $_SESSION["time"];
                echo $_SESSION['room'];
                
                */
                $_SESSION['rm']=$_GET["myb"];
                $query="UPDATE ".$_SESSION['day']." set Available=1
                WHERE Room=".$_GET["myb"]." and time='".$_SESSION["time"]."' and Block='".$_SESSION['room']."'"
                ;
                if($link->query($query)==TRUE)
                {
                    header("Location: conf.php");
                }
            }
        
        if($_POST)
        {
            
        
            if($_POST["radio-1"]==1)
            {
                $room="ADB";
            }
            
            if($_POST['radio-1']==2)
            {
                $room="AB1";
            }
            
            if($_POST['radio-1']==3)
            {
                $room="AB2";
            }
            
            
            $floor=$_POST['value']*100;
            $ffloor=$floor+100;
            
            $time=$_POST['from_t'];
            
            
            $from=$_POST['from'];
            $timestamp = strtotime($from);
            
            
            $day = strtolower(date('l', $timestamp));
            
            $query="select * from ".$day." where Block='".$room."' and time='".$time."' and Room>".$floor." and Available=0 and Room<".$ffloor;
                
            
            
            $_SESSION['room']=$room;
            $_SESSION['time']=$time;
            $_SESSION['day']=$day;
            
            
           $res=$link->query($query);
            
            if($res -> num_rows>0)
            {
                
                ?>

                <table border="2" align="center" cellpadding="5" cellspacing="5" style="position:absolute;top:1000px;left:600px;">

                <tr>
                
                    <th>Block</th>
                    <th>Room Number</th>
                    <th>Available</th>
                    <th>Book me</th>
                </tr>

                <?php
                while($row=$res->fetch_assoc())
                {
                    ?>
                    <form method="get">
                    <tr>
                        <td><?php echo $row["Block"];?></td>
                        <td><?php echo $row["Room"];?></td>
                        <td><?php echo "Yes";?></td>
                        <td>
                        <button id="roomb" value=<?php echo $row["Room"];?> name="myb">Click me to book</button>
                        </td>
                    </tr>
                    </form>                      
                                                    
                    
                    <?php
                    
                }
            }
        }
        
            
    }

    else
    {
        header("Location: /index.php");
    }
?>
</table>

<html>
    <head>
        
        
        <meta charset="utf-8">
  
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        
        <title>Vitali</title>
        
        <style>
        
            body{
                margin: 0 auto;
                padding-left: 200px;
                padding-right:200px;
                padding-top: 100px;
                background-color: #EBEDF3;
            }
            #ft{
            font-family:'Oswald', sans-serif;
            }
            #ft2{
                font-family: 'Josefin Sans', sans-serif;
            }
            .widget
            {
                padding-left:200px;
                padding-right:200px;
                border-color: black;
                border-style: hidden;
                padding-top: 40px;
            }
            #sp{
                position: absolute;
                right:400;
                left:auto;
                top:453px;
                font-family: 'Kanit', sans-serif;
            }
            #ft3{
                font-family: 'Acme', sans-serif;
            }
            #ft4{
                font-family: 'Poiret One', cursive;
            }
            
            button{
                font-family: 'Ubuntu', sans-serif;
                font-size: 150%;
            }
            
            
            
          
            #pos
            {
                position:absolute;
                right:0;
                left:auto;
                top:0;
            }
            
        </style>
    </head>

    <body>
        
        
        <h1 id="ft" style="font-size:250%">Choose a Perfect Room</h1>
       
        
        
        <div id="user">
        
            
            
        </div>
        
        <div class="widget">
         <form method="post"> 
            <h2 id="ft">Building</h2>
            
            <span id="ft4" style="position:absolute;left:500px; top:280px; font-size:70%"><i><b>Not Sure? Click me</b></i></span>
          
            
            
               <br> 
            <fieldset>
   
                <legend id="ft2">Select a building: </legend>
                <label for="radio-1" id="ft3">Admin Block</label>
                <input type="radio" name="radio-1" id="radio-1" checked value=1 class="chk">
                <label for="radio-2" id="ft3">AB1</label>
                <input type="radio" name="radio-1" id="radio-2" value=2 class="chk">
                <label for="radio-3" id="ft3">AB2</label>
                <input type="radio" name="radio-1" id="radio-3" value=3 class="chk">
           
            </fieldset>
 
            
            
            
            
            
    <h2 id="ft">Floor</h2>
        <fieldset>
            <legend id="ft2">Choose a floor</legend>
            <label for="spinner" id="ft3">Floor:</label>
            <input id="spinner" name="value">
        </fieldset>
            
            
    <h2 id="ft">Date</h2>
            <fieldset>
            
                <legend id="ft2">Select a date range</legend>
                <label for="from" id="ft3">From</label>
                <input type="text" id="from" name="from">
                
            </fieldset>
            
    <h2 id="ft">Time</h2>
            <span id="sp" style="position:absolute; top:723;"><i><u>24 hour format</i></u></span>
            <fieldset>
                <legend id="ft2">Insert hour</legend>        
                
                <label for="from_t" id="ft3">Start Hour</label>
                <input type="text" id="from_t" name="from_t">
                
                
            </fieldset>
        
    </div>
        <div id="dialog" title="Buildings">
          <div id="tabs">  
            <ul>
                <li><a href="#tabs-1">Admin Block</a></li>
                <li><a href="#tabs-2">AB1</a></li>
                <li><a href="#tabs-3">AB2</a></li>
            </ul>
            <div id="tabs-1">
                A
            </div>
            <div id="tabs-2">
                B
            </div>
            <div id="tabs-3">
                C
            </div>
        </div>
        
        </div>
        
        <button style="position:absolute; top:850px;left:400px" id="sub"><i>Submit</i></button>
        
</form> 
        
        <script>
        
           
            
            
            $( ".chk" ).checkboxradio();
                          
            
            $( "#dialog" ).dialog({
                            autoOpen: false,
                            show: {
                            effect: "blind",
                            duration: 1000
                          },
                          hide: {
                            effect: "explode",
                            duration: 1000
                          }
                        });

                $( "#ft4" ).on( "click", function() {
                          $( "#dialog" ).dialog( "open" );
                        $("#tabs").tabs();
                        });
                      
            function max()
            {
                if($("input[name='radio-1']:checked").val()==1)
                    {
                        return 6;
                    }
                if($("input[name='radio-1']:checked").val()==2)
                    {
                        return 8;
                    }
                if($("input[name='radio-1']:checked").val()==3)
                    {
                        return 6;
                    }
            }
            
            $( "#spinner" ).spinner({
      spin: function( event, ui ) {
        if ( ui.value > max() ) {
          $( this ).spinner( "value", 0 );
          return false;
        } else if ( ui.value < 0 ) {
            
            
          $( this ).spinner( "value", max() );
          return false;
        }
      }
    });
            var dateFormat = "mm/dd/yy",
      from = $( "#from" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 3,
            showButtonPanel: true
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#to" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 3,
          showButtonPanel: true
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }

           
    
            
        </script>
    </body>

</html>