<?php
  $host="localhost";
  $username="root";
  $password="";
  $db="covidsupport";
  $conn= mysqli_connect($host,$username,$password,$db);
  ////// to check the connection
  
  $Namel=$_POST["name"];
  $Passwordl=$_POST["password"];
  $query="SELECT * FROM register WHERE Name='$Namel'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    if($row['Password']==$Passwordl){
         
    }else{
       header('location:index.php');
        
    
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Styleproject.css">
        <script src="Javascript.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <title>Covid Support</title>
        <style>
            body{
    background-color: white;
}

.header {
  width: 100%;
  height: 70px;
  background-color: #00ccff;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: infinite;

}

@keyframes example {
  0%   {background-color: 00ccff;}
  25%  {background-color: #66ff66;}
  50%  {background-color: #ff6600;}
  100% {background-color: #cc00cc;}
}

.header ul{
    list-style-type: none;
}
.header ul li{
    float:right;
    padding-left:40px;
    padding-right:20px;
    padding-top:15px;
}
.header ul li h3{
    font-family: Sofia;
    padding-top: 10px;
    font-size: 30px;
}
.header ul h2{
    font-family: Sofia, monospace;
}
.header ul h1{
    padding-top:5px;
    text-shadow:4px 4px 4px black;
    color:white;
   
    
}
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #ffcccc;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
  height:600px;
}
.close{
    cursor: pointer;
}
.login{
    padding-left: 20%;
}
h2{
    text-align: center;
}
.login label{
    font-size: 30px;
}
input[type=text]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-right: none;
}
.login input[type=text]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:200%;
    background-color: #ffcccc
}
.login input[type=password]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:200%;
     background-color: #ffcccc
}
.login input[type=submit]{
    background-color: #66ccff;
    border: 2px #66ccff solid;
    width:100%;
    height: 70px;
    margin-left:90px;
    border-radius: 10px;
   font-size: 40px;
   color:red;
}
.register input[type=text]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    background-color:#ccffcc;
    width:200%;
}
.register input[type=email]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:200%;
     background-color: #ccffcc
}

.register input[type=password]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:200%;
     background-color: #ccffcc
}
.register input[type=submit]{
    background-color:#ff0000;
    border: 2px #66ccff solid;
    width:100%;
    height: 70px;
    margin-left:90px;
    border-radius: 10px;
   font-size: 40px;
   color:white;
}
.register{
     padding-left: 20%;
}
.register label{
    font-size: 30px;
    
}
/*css responsive*/
@media screen and (max-width: 980px){
    body{
        background-color: orange;
    }
    .header{
        height: 100px
    }
    
    h1{
       padding-left: 10%;
       
    }
}
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
  color: blue;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: blue;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
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
  transition: background-color 60s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 60s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.section{
   
    height:500px;
    width:100%;
}
.article{
    background-color:white;
   
    width:100%;
}
#aboutus{
    background-color: grey;
    height:400px;
    width:100%;
}
.header ul li a{
    color:#ffffff;
}
.state{
    background-color: #ccccff;
          height:200px;
          border-bottom: 2px solid black;
        text-align:center;
      }
      .state h2{
          font-size: 40px;
          color:crimson;
          text-shadow:2px 2px 2px white;
          text-align: center;
          font-family:cursive;
      }
      .state p{
          color:#660066;
          font-family: Sofia;
          font-size: 50px;
          
      }
      .state p a{
          color:#ff0066;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .state p a:hover{
          color:#6600cc;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .hotel{
          background-color: #ffccff;
          height:200px;
          border-bottom: 2px solid black;
          text-align:center;
      }
      .hotel h2{
          font-size: 40px;
          color:red;
          text-shadow:2px 2px 2px white;
          text-align: center;
          font-family:cursive;
      }
      .hotel p{
          color:#ffff00;
          font-family: Sofia;
          font-size: 50px;
          
      }
      .hotel p a{
          color:#003333;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .hotel p a:hover{
          color:#000000;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .beds{
          background-color: #ffffcc;
          height:200px;
           border-bottom: 2px solid black;
          border-top: 2px solid black;
          text-align:center;
      }
      .beds h2{
          font-size: 40px;
          color:#ff0099;
          text-shadow:2px 2px 2px white;
          text-align: center;
          font-family:cursive;
      }
      .beds p{
          color:#cc0066;
          font-family: Sofia;
          font-size: 50px;
          padding-left: 70px;
      }
      .beds p a{
          color:#990099;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .beds p a:hover{
          color:white;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .vaccine{
          background-color: #ffcccc;
          height:200px;
           border-bottom: 2px solid black;
           text-align: center;
         
      }
      .vaccine h2{
          font-size: 40px;
        
          text-align: center;
          font-family:cursive;
          text-transform: uppercase;
          
          
          color:#6666ff;
          text-shadow:2px 2px 2px white;
        ;
         
      }
      .vaccine p{
          color:#336600;
          font-family: Sofia;
          font-size: 50px;
          
      }
      .vaccine p a{
          color:#003333;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .vaccine p a:hover{
          color:red;
          text-decoration: underline;
          font-family: Audiowide;
      }
       .doctor{
           background-color: #ccffcc;
          height:200px;
          border-bottom: 2px solid black;
          text-align: center;
      }
      .doctor h2{
          font-size: 40px;
          color:#ff0033;
          text-shadow:2px 2px 2px white;
          text-align: center;
          font-family:cursive;
          text-transform: uppercase;
      }
      .doctor p{
          color:#003333;
          font-family: Sofia;
          font-size: 50px;
          
      }
      .doctor p a{
          color:#3333ff;
          text-decoration: underline;
          font-family: Audiowide;
      }
      .doctor p a:hover{
          color:#006666;
          text-decoration: underline;
          font-family: Audiowide;
      }
      bi-envelope-fill{
          height:40px;
      }

#aboutus h3{
    text-align: center;
    font-size:40px;
    color:#660066;
    font-family: cursive;
    
}
.col-sm-8{
    border-right: 2px solid black;
}
.col-sm-8 p{
    font-size:30px;
    color:yellow;
}
.article p{
    
    text-shadow:2px 2px 2px black;
}
#aboutus .col-sm-4 {
    font-size:30px;
    color:white;
    text-shadow:2px 2px 2px black;
}
        </style>
    </head>
    <body>
     
        <div class="header">
   <ul>
       
      <li><button type="button" class="btn btn-success"><a href="index.php">Logout <i class="bi bi-box-arrow-right"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg></a></button></li>
   
       <li><button type="button" class="btn btn-primary"><a href="#aboutus">Contact  us <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg><i class="bi bi-telephone-fill"></i></a></button></li>
        <li><button type="button" class="btn btn-warning"><a href="#aboutus">About  us<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg><i class="bi bi-info-circle-fill"></i> </a></button></li>
<li><h3><b><?php echo $Namel ?></b></h3></li>
           <h1 style="font-family:Audiowide;"> COVID SUPPORT</h1>
   </ul>
 

</div>

        


        <div class="section">
            <div class="section">
            <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="vaccine.jpg" style="width:100%">
  <div class="text">Vaccine</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="doctor.jpg" style="width:100%">
  <div class="text">Doctor</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="state1.jpg" style="width:100%">
  <div class="text">State</div>
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
        </div>
        
         <div class="article">
            
            <div class="container-fluid">
  
  <div class="row ">
      <div class="col-sm-12 beds">
         <h2><b>BOOK HOSPITAL BEDS </b></h2>
         <p>To   book hospital beds in your locality<br>  click the link  <i class="bi bi-forward-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-forward-fill" viewBox="0 0 16 16">
  <path d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z"/>
  </svg><a href="bed.php">book beds </a></p>
      </div>
      <div class="col-sm-12 state">
           <h2><b>VIEW STATE WISE CASES  </b></h2>
                 <p>To view  state wise cases click <br>the link  <i class="bi bi-forward-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-forward-fill" viewBox="0 0 16 16">
  <path d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z"/>
</svg><a href="statewisecase.php">VIEW CASES </a></p>
      </div>
  
    <div class="col-sm-12 vaccine">
          <h2><b>BOOK VACCINE </b></h2>
          <p>To book vaccine in your locality   <br> click the link  <i class="bi bi-forward-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-forward-fill" viewBox="0 0 16 16">
  <path d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z"/>
</svg><a href="vaccine.php">book vaccine </a></p>
      </div>
        <div class="col-sm-12 doctor">
            <h2><b>VIEW DOCTORS ADVICE  </b></h2>
                 <p>To know doctor advice  click <br>the link  <i class="bi bi-forward-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-forward-fill" viewBox="0 0 16 16">
  <path d="m9.77 12.11 4.012-2.953a.647.647 0 0 0 0-1.114L9.771 5.09a.644.644 0 0 0-.971.557V6.65H2v3.9h6.8v1.003c0 .505.545.808.97.557z"/>
</svg><a href="statewisecase.php">view doctor's advice</a></p>
      </div>
    
      
  
  </div>
</div>
           
                  
        </div>
       
  <div id="aboutus">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-8">
                  <h3>ABOUT US </h3>
                  <p>Through this website, we plan to make an easy source for all covid related
issues, so that people don’t have to go through multiple websites or wait in
hospitals. This also will be very helpful for people who are trying to get the
vaccine. This website will come in handy if India has a third wave or even if it
moves to an endemic situation. People will also get advise from eminent
doctors on how to handle symptoms at home. We also intend to improve our
data science skills along with web development during this project.</p>
              </div>
              <div class="col-sm-4">
                  <h3>CONTACT US</h3>
                  <br><br>
                  <p><i class="fas fa-envelope fa-3x"></i>-covidsupport@gmail.com</p>
                  <p><i class="fas fa-phone fa-3x"></i>-2345690384</p>

              </div>
          </div> 
      </div>
        </div>
    





    </body>
    <script>
   $(document).ready(function(){
     $('.register').hide();
     $('.btnr').on('click',function(){
         $('.register').show();
         $('.login').hide();
         $('.modal-content').css('background-color','#ccffcc');
     });
     $('.btnl').on('click',function(){
         $('.register').hide();
         $('.login').show();
         $('.modal-content').css('background-color','#ffcccc');
     });
     /*
     $('.beds').on("mouseenter",function(){
          $('.beds').css('background-color','#da6970');
     });
     $('.beds').on("mouseleave",function(){
          $('.beds').css('background-color','coral');
     });
     $('.vaccine').on("mouseenter",function(){
          $('.vaccine').css('background-color','#da6970');
     });
     $('.vaccine').on("mouseleave",function(){
          $('.vaccine').css('background-color','lightblue');
     });
     $('.hotel').on("mouseenter",function(){
          $('.hotel').css('background-color','#da6970');
     });
     $('.hotel').on("mouseleave",function(){
          $('.hotel').css('background-color','#e8e266');
     });
     $('.satewisecases').on("mouseenter",function(){
          $('.satewisecases').css('background-color','#da6970');
     });
     $('.satewisecases').on("mouseleave",function(){
          $('.satewisecases').css('background-color','#e98acc');
     });
     $('.doctoradvise').on("mouseenter",function(){
          $('.doctoradvise').css('background-color','#da6970');
     });
     $('.doctoradvise').on("mouseleave",function(){
          $('.doctoradvise').css('background-color','#6ed88c');
     });
         * /
      */
   });
    

    </script>
</html>
