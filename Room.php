<?php
  $host="localhost";
  $username="root";
  $password="";
  $db="hotelbooking";
  $conn= mysqli_connect($host,$username,$password,$db);
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  ////// to check the connection
  $Name=$_POST["Name"];
  $Email=$_POST["Email"];
  $Aadhar=$_POST["Aadhar"];
  $hotel=$_POST["hotel"];
  $Checkin=$_POST["checkin"];
  $Checkout=$_POST["checkout"];
  $Checkintime=$_POST["checkintime"];
  $Checkouttime=$_POST["checkintime"];
  $phone=$_POST["Phone"];
  $rooms=$_POST["rooms"];
  $sql="INSERT INTO hotel (Name,Email,Aadhar,HotelName,checkindate,checkoutdate,checkintime,checkouttime,PhoneNumber,NumberofRooms) 
  VALUE('$Name','$Email','$Aadhar','$hotel','$Checkout','$Checkout','$Checkintime','$Checkouttime','$phone','$rooms')";
  if (mysqli_query($conn, $sql)) {
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link href="room1.css" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
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
    font-family: 'Sofia';
}
.header h2{
    padding-top: 2%;
}
   .check
   {
       border: 2px solid lightgrey;
       
       margin-top: 2%;
       border-radius: 5px;
   }
   .check ul{
       list-style-type: none;
   }
   .roomdetails{
    border: 2px solid lightgrey;
       
       margin-top: 2%;
       border-radius: 5px;
   }
   input[type=submit]{
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
</style>
</head>
<body>
<div class="container-fluid header">
  <ul>
     
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="Room.php">Book Rooms</a></li></li>
      <li><a href="index.php">Home</a></li>
      <h2>Hotel Booking</h2>
  </ul>
  </div>
<div class="container-fluid" id="room">
  
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-3 check">
          <ul>
              <h3>City:-</h3>
              <li><input type="checkbox">Mumbai</li>
              <li><input type="checkbox">Banglore</li>
              <li><input type="checkbox">Chennai</li>
              <li><input type="checkbox">Hyderabad</li>
          </ul>
          <hr>
          <ul>
            <h3>Price:-</h3>
            <li><input type="checkbox">₹1000-₹5000</li>
            <li><input type="checkbox">₹5000-₹10000</li>
            <li><input type="checkbox">₹10000-₹15000</li>
            <li><input type="checkbox">₹15000-₹20000</li>
            <li><input type="checkbox">₹20000-₹25000</li>
            <li><input type="checkbox">₹25000-₹30000</li>
        </ul>
        <hr>
        <ul>
            <h3>Facilities :-</h3>
            <li><input type="checkbox">Garden</li>
            <li><input type="checkbox">City View</li>
            <li><input type="checkbox">Outdoor Pool</li>
            <li><input type="checkbox">BBQ</li>
            <li><input type="checkbox">Wifi</li>
        </ul>
        <hr>
        <ul>
            <h3>Additional Facilities:-</h3>
            <li><input type="checkbox">Free Cancellation</li>
            <li><input type="checkbox">Pay at hotel</li>
            
        </ul>
        <hr>
    </div>
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">
          
          <h2>Notel Hotel</h2>
          </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="col-sm-6 register">
      <div class="Register"> 
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return upload();">
          
              <label><b>USERNAME:</b></label>
              <input type="text" name="Name"><br>
              <label><b>EMAIL ADDRESS:</b></label>
              <input type="email" name="Email"><br>
              <label><b>Aadhar Number:</b></label>
              <input type="text" name="Aadhar"><br>
              <label><b>Hotel Name</b></label>
              <select name="hotel">
                  <option value="Novtel">Novtel</option>
              </select>
              <ul style="list-style-type:  none;">
                  <li style="float: left;"> <label><b>check in date:</b></label>
              <input type="text" name="checkin"><br></li>
              
              <li><label><b>check out date</b></label>
              <input type="text" name="checkout"><br></li>
              </ul>
              <ul style="list-style-type:  none;">
                  <li style="float: left;"> <label><b>check in time:</b></label>
              <input type="text" name="checkintime"><br></li>
              
              <li><label><b>check out time</b></label>
              <input type="text" name="checkouttime"><br></li>
              </ul>
              <label><b>Phone Number</b></label>
              <input type="text" name="Phone"><br>
              <label><b>Number of Rooms:</b></label>
              <input type="text" name="rooms"><br>
              <input type="submit" value="SUBMIT">
          </form>
          </div>
  
    
        </div>
       
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
            </div>
    <div class="col-sm-1">

    </div>
    <div class="col-sm-6 roomdetails">
        <div class="row">
            <div class="col-sm-6">
                <img src="novt.png" style="margin-top: 2%; border-radius: 5px;">
                <img src="cityview.png">
                <img src="garden.png">
            </div>
            <div class="col-sm-4">
                <h4>Novtel Hotel</h4>
                    
                <p>-Rajiv Gandhi Intl Airport, 500108 Hyderabad, India</p>
                <span class = "fa fa-star checked"></span>  
        <span class = "fa fa-star checked"></span>  
        <span class = "fa fa-star checked"></span>  
        <span class = "fa fa-star checked"></span>  <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Sign in/Login
                    
                   </button>
</div>
            <div class="col-sm-2">
                <h2>₹1000</h2>
            </div>
            
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-6">
                <img src="park.png" style="margin-top: 2%; border-radius: 5px;">
                <img src="pool.png">
               
            </div>
            <div class="col-sm-4">
                <h4>Park Hyatt Chennai</h4>
                    
                <p>39 Velachery Road, Near Raj Bhavan, Guindy, 600052 Chennai, India –</p>
                <span class = "fa fa-star checked"></span>  
        <span class = "fa fa-star checked"></span>  
        <span class = "fa fa-star checked"></span>  
          <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Sign in/Login
                   </button>
            </div>
            <div class="col-sm-2">
                <h2>₹10000</h2>
            </div>
            
          </div>
          <hr>
          <div class="row">
          <div class="col-sm-6">
              <img src="radission.png" style="margin-top: 2%; border-radius: 5px;">
              <img src="wifi.png">
                <img src="garden.png">
          </div>
          <div class="col-sm-4">
              <h4>Radisson Blu Plaza Hotel</h4>
                  
              <p>-1 MG Road,, 570010 Bangolre, India</p>
              <span class = "fa fa-star checked"></span>  
      <span class = "fa fa-star checked"></span>  
      <span class = "fa fa-star checked"></span>  
      <span class = "fa fa-star checked"></span>  <br>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Sign in/Login
                 </button>
          </div>
          <div class="col-sm-2">
              <h2>₹1000</h2>
          </div>
          
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-6">
            <img src="star.png" style="margin-top: 2%; border-radius: 5px;">
        </div>
        <div class="col-sm-4">
            <h4>Hotel Sahara Star-Mumbai Airport</h4>
                
            <p>-Opposite Domestic Airport, Vileparle, 400099 Mumbai, India</p>
            <span class = "fa fa-star checked"></span>  
    <span class = "fa fa-star checked"></span>  
    <span class = "fa fa-star checked"></span>  
    <span class = "fa fa-star checked"></span>  <br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Sign in/Login
               </button>
        </div>
        <div class="col-sm-2">
            <h2>₹1000</h2>
        </div>
        
      </div>
      <hr>
    </div>
  </div>
</div>
    
</body>
</html>
