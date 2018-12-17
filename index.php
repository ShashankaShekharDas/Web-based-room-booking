<?php

    session_start();

     $link=mysqli_connect("localhost","shashanka","maarkandeya","Data_prj");

    if(mysqli_connect_error())
    {
        die("Error in connecting to database");
    }


    if($_POST)
    {
        $em=$_POST["email"];
        $pa=$_POST["passwd"];
    
            
    $query="SELECT * from user
            WHERE email='".mysqli_real_escape_string($link,$em)."'";
  

    $res=mysqli_query($link,$query);
    $res=mysqli_fetch_array($res);
    
       
        
    if($res["pass"]==$pa)
    {
        echo "<script>alert('Success')</script>;";
        $_SESSION['email']=$em;
        $_SESSION['username']=$res["name"];
        header("Location: mysql/session.php");
    }
        
    else
    {
        echo "<script>alert('Invalid Username-Password Combination')</script>;";
    }
        
    }
?>

<!DOCTYPE html>

<html>
<head>
    <title>Vitali</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <style>
    
    * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0;background-color: #282C34;}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}



/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
    
    
    
    
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}



.header {
  padding: 5px 16px;
  background: #3B5997;
  color: #f1f1f1;
}

 
    
.content {
  padding: 16px;
    
}




    a{
        text-decoration: none;
        color:white;
    }
    
    #th{
        width:150px;
        margin: 0 auto;
        color:#3B5998;
        background-color: #3B5998;
    }
    
    #ugh
    {
        background-color:  #3B5998;
    
    }
    
   #slide
    {
        height:500px;
        width:1000px;
        border-right: 1px solid grey;
        float:left;
    
    }
    
    
            #cl
    {
        clear:both;
    }
            
    label{
        float:left;
    }
    
    #err{
                position: relative;
                left:200px;
                color:red;
                font-size:50%;
            }
    
    #form_c{
        border-right: 1px solid grey;
    }
   
        #tabs{
            width:850px;
            position:relative;
            margin:0 auto;
            background-color: #282C34;
        }
        
</style>
    	<script src="jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
          <link rel="stylesheet" href="/resources/demos/style.css">
          <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
          <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    

<div class="header" id="myHeader">
    
    <pre><img src="logo1.png" height="40" width="150" style="padding:0;margin:0;"><a href="about.html">         About </a> | <a href=""> Contact Us </a>|                                                                                                                      Date:<a id="date" style="color:white"></a>     Time:<a id="time" style="color:white"></a></pre>

    </div>

<div class="content" id="slide">
  
                    <div class="slideshow-container">

                    <div class="mySlides fade">
                      <div class="numbertext">1 / 3</div>
                      <img src="https://i.ytimg.com/vi/iptapDakmeM/maxresdefault.jpg" height="450" style="width:100%">

                    </div>
                        
                        
                        <div class="mySlides fade">
                      <div class="numbertext">2 / 3</div>
                      <img src="http://chennai.vit.ac.in/images/discover/1.jpg"  height="450" aria-busy=""style="width:100%">

                    </div>

                    

                    <div class="mySlides fade">
                      <div class="numbertext">3 / 3</div>
                      <img src="https://img.collegepravesh.com/2015/12/VIT-Chennai.jpg" height="450" style="width:100%">

                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    </div>
                <br>

                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
    </div>
    
                

                <div id="form_c">

                <form method="post">
                    <br><br><br><br><br><br>
                    <p style="position:relative;left:215px;font-size: 200%;color:#61DAFB"><b> Login</b></p>
                    
                    <p  id="err"></p>
                    
                    <label for="email" style="padding-left: 100px;padding-right: 50px;color:white;"> Email</label>
                    <input type="text" name="email" id="email" placeholder="eg: yourname@gmail.com" style="padding-left:10px;padding-right:10px;">

                    <br><br>
                    <label for="pass" style="padding-left: 100px;padding-right: 20px;color:white;">Password</label>
                    <input type="password" name="passwd" id="pass" placeholder="Enter your password" style="padding-left: 20px">

                    <br><a href="" ><p style="color:#93b5ed;font-size:80%;position: relative; left: 100px">Forgot Password?</p></a>
                    
                    <button id="sub" style="position: relative;left:250px;">Login</button>
                    
                    </form>
                    
                </div>


        
           
    <div id="cl"></div>
    
    
    <br><br><br><br><br>
   <div id="tabs">
        
            <ul>
                <li><a href="#tabs-0">General</a></li>
                <li><a href="#tabs-1">Academic Block-1</a></li>
                <li><a href="#tabs-2">Academic Block-2</a></li>
                <li><a href="#tabs-3">Admin Block</a></li>
            </ul>
        
            
            <div id="tabs-0">
            
                
                <img src="https://img.collegepravesh.com/2015/12/VIT-Chennai.jpg" width="700"  style="position:relative;left:30px">
        <pre style="font-size: 130%;color:azure; ">
        
        <b>
    VIT Chennai provides three different buildings for the purpose of hosting events
                
and <i>Extra Classes</i>, namely Academic Block 1, Academic Block 2 and Admin Block. 
                
Slide across the tabs to know more.</b></pre>
                
                
            </div>
       
            <div id="tabs-1">
            
                <img src="http://chennai.vit.ac.in/images/infra/infra1.jpg" width="700" style="position:relative;left:30px;">
            
                <pre style="font-size: 130%;position:relative;left:30px;color:azure;">
<h1><i>Academic Block 1</i></h1>                
The oldest and the biggest academic block present in VIT. 

Consisting of 8 floors, it consists of all facilities imaginable and required 

for holistic learning.


<b><u style="font-size: 130%">Facilities:</u>
<ul>
    <li>Halls/Auditoriums</li>
    <li>Photocopy</li>
    <li>Eateries</li>
    <li>And many more....</li>
</ul></b></pre>
            
            </div>
            <div id="tabs-2">
            
                <img src="http://chennai.vit.ac.in/images/infra/infra1.jpg" width="700" style="position:relative;left:30px;">

<pre style="font-size: 130%;position:relative;left:30px;color:azure;"><h1><i>Academic Block 2</i></h1>
If AB1 was signifies the old guard, AB2 will be the new age soldier.

Top notch lab equipments, beautiful and comfortable auditoriums,

modern day classrooms, and much more. These are what makes this

a great building to have fun with or without learning.



Overall a great building for any events, academic or co-curriculur.



An added advantage for this building is it being situated in 

close proximity to the hostel Blocks B and C along with the girls hostel.
                
    
</pre>
            </div>
            
            <div id="tabs-3">
            
<img src="http://chennai.vit.ac.in/images/infra/infra1.jpg" width="700" style="position:relative;left:30px;">
     
<pre style="font-size: 130%;position:relative;left:30px;color:azure;"><h1><i>Admin Block</i></h1>

The officials of VIT Chennai, the official building, the admins of VIT Chennai

are usually what are associated with the admin block. The name iteself is

enough to scare the weak hearted. Couple the name/tag with the securites

outside, it creates an atmosphere unseen in the entire VIT. If VIT is 

a democracy, admin block can be likened to Guantanamo Bay. 

Well thats all good and true (<i>With banter</i>)but the facilities linked 

with admin block is unparalled. Need a big hall, admin block, need extra classrooms,

admin block, need any other imaginable help, admin block is the place to be.

Close proximity to library and a xerox shop, only increases its effectiveness.
    
</pre>         
            
            
            </div>
        
        </div>
        
   
    
<script>
    
    //Display date
    
    n =  new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
    
    function updateClock() {
    var now = new Date(), // current date
        months = ['January', 'February', '...'];
        time = now.getHours() + ':' + now.getMinutes()+":"+now.getSeconds();


    document.getElementById('time').innerHTML = time;

    // call this function again in 1000ms
    setTimeout(updateClock, 1000);
    }
    updateClock(); // initial call
    
    
    
   
    
        //slide show
    
                    var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
              showSlides(slideIndex += n);
            }

            function currentSlide(n) {
              showSlides(slideIndex = n);
            }

            function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("mySlides");
              var dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
    
    function isEmail(email) {
                  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                  return regex.test(email);
                }
            
            var err="";
            
            $("#sub").click(function(){
               
                if(isEmail($("#email").val())==false)
                {
                    err="<p>*Email address is not valid</p>";
                }
            
                if($("#email").val()=="")
                {
                    err+="<p>*Email is missing</p>";
                }
		
            if($("#pass").val()=="")
                {
                    err+="<p>*Password is missing\n</p>";
                }
            
            
            if(err!="")
                {
                    $("#err").html(err);
                }
            
            
            
            });
    
    $("#tabs").tabs({
                
                event:"mouseover"
            });
</script>

</body>
</html>
