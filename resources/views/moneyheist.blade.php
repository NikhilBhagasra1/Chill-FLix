<!DOCTYPE html>
<html>
<head>
<html lang="en">

<head>
    <title>Money Heist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link href="src/carousel.css" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style type="text/css">
         .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
        }
        
        .a {
            font-family: Arial;
            color: white;
        }
        
        #one.jumbotron {
            background-size: 500%;
            background-repeat: no-repeat;
            color: white;
            background-attachment: fixed;
            background-size: cover;
            padding-top: 18%;
            padding-bottom: 18%;
        }
        
        .jumbotron {
            background-size: 500%;
            background-repeat: no-repeat;
            color: white;
            background-attachment: fixed;
            background-size: cover;
            background-color: #000000;
        }
        
        .col-sm-4 {
            border: 1px solid white;
            color: white;
        }
        
        .navbar {
            background-color: #000000;
        }
        
        #one.button {
            border-radius: 4px;
            background-color: red;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 15px;
            padding: 8px;
            width: 100px;
            margin: -20px 10px -90px 660px;
        }
        
        .button {
            border-radius: 4px;
            background-color: red;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 25px;
            padding: 10px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }
        
        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }
        
        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        
        .button:hover span {
            padding-right: 25px;
        }
        
        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        
        .footer {
            position: bottom;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 400px;
            color: white;
        }
        
        .footer .footer-bottom {
            background-color: darkslategrey;
            height: 50px;
            text-align: center;
            position: relative;
            bottom: 0px;
            left: 0px;
            padding-top: 20px;
            width: 100%;
        }

    ul {
   list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
      
    background-color: black;
    position: sticky;
    top: 0;
}
li {
    float: left;
    display: inline;
     color: #666;
}
li a {
    display: block;
    color: red;
    text-align: center;
    padding: 20px 16px;
    text-decoration: none;
    font-family: verdana;
}
img {
  float: right;
}

.sansserif {
  font-family: Arial, Helvetica, sans-serif;
}
.button1 {

  display: inline-block;
  padding: 10px 15px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#FF0000;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {background-color: #800000}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button1 {border-radius: 20px;}

.button1:add{

  background-image: play.png;
  height: 16px;
}
/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8;
  cursor: pointer;
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container (positioning is needed to position the close button and the text) */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
     </style>
     <script type="text/javascript">
       function myFunction(imgs) {
  // Get the expanded image
  var expandImg = document.getElementById("expandedImg");
  // Get the image text
  var imgText = document.getElementById("imgtext");
  // Use the same src in the expanded image as the image being clicked on from the grid
  expandImg.src = imgs.src;
  // Use the value of the alt attribute of the clickable image as text inside the expanded image
  imgText.innerHTML = imgs.alt;
  // Show the container element (hidden with CSS)
  expandImg.parentElement.style.display = "block";
}
     </script>
</head>
<body>
 <body style="background-image: url('/images/hero.jpg');  background-size: cover;">
            <div id ="container">
                <img src="/images/chillflix logo.jpg" height="60" width="200" style="float: left">
                <ul>
<li><a href="/mainpage">Home</a></li>
<li><a href="/tvprogrammes">TV Programmes</a></li>
  <li><a href="/movies">Movies</a></li>
   <li><a href="/animated">Animated</a></li>
  <li><a href="/trending">Trending</a></li>
 <li><a href="/signin"><button id="one"class="button">Log out</button></a></li>

</ul>
</div>
<br>
<br>
 <p style="color:white;" class="sansserif"><img src="/images/MV5BOTI5OTI0YTQtM2UxNC00MjMxLWE5NjQtZWIzNGRhZTlmMjdhXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg"style="width:300px;height:300px;margin:15px 200px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="fa fa-imdb" style="font-size:24px;color: red"></i>&emsp;8.5/10 | Hollywood | English
  <br>
  <h1 style="color:white"; class="sansserif" ><b>&emsp;&emsp;Money Heist</b></h1><br>
  <p style="color:white;" class="sansserif">A group of unique robbers assault the Factory of Moneda and Timbre to carry out the most perfect robbery in the history of Spain and take home 2.4 billion euros.

</p>
 </p>
 <br>
 <p  style="color:white;" class="sansserif">&emsp;&emsp;&emsp;&emsp;<b>Directors :</b>Álex Pina| <b>Cast :</b> Úrsula Corberó, Álvaro Morte, Itziar Ituño </p>
 <br>
 &emsp;&emsp;&emsp;&emsp;<button class="button1">&emsp;&emsp;WATCH NOW</button>
 <br>
<br><br><br><br><br>
<h1 style="color: white">&emsp;Screenshots</h1><br>
<!-- The grid: four columns -->
<div class="row">
  <div class="column">
    <img src="/images/a3TjegbA_o.jpg" style="width:390px; height:200px"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="/images/la-casa-de-papel-theme-bx15.jpg"style="width:390px; height:200px"  onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="/images/EFEJ1DOU8AA7Cs0.jpg"style="width:390px; height:200px" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="/images/702x400_Screenshot-2019-08-06-at-16.41.23-Kopie.png" style="width:390px; height:200px" onclick="myFunction(this);">
  </div>
</div>

<!-- The expanding image container -->
<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>
<div class="footer">
        <div class="footer-inner">
            <div class="jumbotron">
                <p>
                    Questions? Call 000-800-040-1843
                </p>
                <br>
                <table style="width:100%">
                    <tr>
                        <td><a href="/faq">FAQ</a></td>
                        <td><a href="/jobs">Jobs</a></td>
                        <td><a href="/termofuse">Term of Use</a></td>
                    </tr>
                    <tr>
                        <td><a href="/privacy">Privacy</a></td>
                        <td><a href="/corporateinfo">Corporate Information</a></td>
                        <td><a href="/contact">Contact Us</a></td>
                    </tr>
                    <tr>
                        <td><a href="www.fast.com">Speed Test</a></td>
                        <td><a href="/legal">Legal Notices</a></td>
                        <td><a href="/orignal">Chill-Flix Originals</a></td>
                    </tr>
                </table>
                <br>
            </div>
            <div class="footer-bottom">
                &copy; Chill-Flix India | Designed by The Chill Team
            </div>
        </div>
    </div>
</body>

</html>