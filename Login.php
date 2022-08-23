<?php
  $host="localhost";
  $username="root";
  $password="";
  $db="hotelbooking";
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
session_start();
if(isset($_SESSION['name']))
{
    if((time()-$_SESSION['last_time'])>60){
        header("location:index.php");
    }
    else{
        $_SESSION['last_time']=time();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Booking</title>
  <meta charset="utf-8">
  <link href="index.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      .header{
    background-color: rgb(190, 175, 175);
    height:90px;
    width:100%
}
.header ul{
    list-style-type: none;
}
.header li{
    padding-left: 5%;
    padding-right: 2%;
    padding-top: 2%;
   font-size: 20px;
    float:right;
}
.header li a{
    color:white;
    
}
.header h2{
    padding-top: 2%;
}
.header button{
    font: inherit; 
padding: 0.5rem 1.5rem; 
border: 1px solid #00eeff; 
border-radius: 4px; 
background: #00eeff; 
color: black; cursor: pointer; 
margin-right: 1rem; 
text-decoration: none; 
Display:
 inline-block;

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
   
}
.login input[type=password]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:200%;
     
}
.login input[type=submit]{
    background-color: #66ccff;
    border: 2px #66ccff solid;
    width:130%;
    height: 70px;
    margin-left:70px;
    border-radius: 10px;
   font-size: 40px;
   color:red;
}
.register input[type=text]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    
    width:200%;
}
.register input[type=email]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:200%;
    
}

.register input[type=password]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:200%;
     
}
.register input[type=submit]{
    background-color:#ff0000;
    border: 2px #66ccff solid;
    width:130%;
    height: 70px;
    margin-left:70px;
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
#contact{
       background-color: grey;
       height:500px;
       width:100%;
   }
   #contact div{
    width: 40%;
  height: 500px;
  
  margin-left: 90px;
  float: left;

  
}
#contact  input[type=text]{
    border:1px solid lightgray;
                margin-left:10% ;
                width:80%;
                margin-top: 5%;
                height: 40px;
                font-size: 30px;
            }
            #contact  input[type=email]{
               border:1px solid lightgray;
                margin-left:10% ;
                width:80%;
                margin-top: 5%;
                height: 40px;
                font-size: 30px;
            }
            #contact textarea{
                border:1px solid lightgray;
                margin-left:10% ;
               color:grey;
                margin-top: 5%;
                
                font-size: 30px;
            }

      </style>
</head>
<body>

<div class="container-fluid header">
  <ul>
  <li><a href="index.php">Logout </a></li>
      <li><h3><b><?php echo $Namel ?></b></h3></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="Room.php">Book Rooms</a></li></li>
      
      <h2>Hotel Booking</h2>
  </ul>
  </div>

<div class="container-fluid">
    <img src="bg-image.jpg" style="width: 100%;">
</div>
<div id="contact">
                <div>
                    <h2 style="color:rgb(58, 7, 27)">Say Hello!!</h2>
                   <input type="text" id="username" name="username" placeholder="Name"><br>
                     <input type="email" id="email" name="email" placeholder="EmailId"><br>
                   <textarea name="Message" rows="4" cols="28">Message</textarea>
                   <input type="submit" value="Send">
                </div>
                    <div>
                       <h2 style="color:rgb(58, 7, 27)">Contact Us</h2>
                       <h3> Queries concern doudts ? We're here to listen ! BookStore strives to offer the best possible service 
                       to every contact .Our Support team makes sure that you get the  est advice and guidance regarding we help you
                        out from very primary question to the most complex inquiries.
                       </h3>
                       <h2 style="color:rgb(58, 7, 27)">Contact with us</h2>
                       <h3>Email :- support@bookstore.com</h3>
                    </div>           
                   
               </div>
            </div>
            <script>
                const mytimeout=setTimeout(timeout,5000);
                function timeout(){
                    alert("session expired!");
                    location.replace('index.php');
                }
                </script>

</body>
</html>
