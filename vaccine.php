<?php
  $host="localhost";
  $username="root";
  $password="";
  $db="covidsupport";
  $conn= mysqli_connect($host,$username,$password,$db);
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $Name=$_POST["Name"];
  $Email=$_POST["Email"];
  $phno=$_POST["No"];
 $Hospital=$_POST["Names"];
  $State=$_POST["state"];
  $vaccine=$_POST['vaccine'];
  

  
  $sql="INSERT INTO vaccineregister (Name,Email,Phno,State,Hospital,Vaccine) VALUE('$Name','$Email','$phno','$State','$Hospital','$vaccine')";
  if (mysqli_query($conn, $sql)) {
  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
        <style>
            body{
                background-color: white
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
.header ul h2{
    font-family: Sofia, monospace;
}
.header ul h1{
    padding-top:5px;
    text-shadow:4px 4px 4px black;
    color:white;
   
    
}
            .header{
                background-color: #ff99cc;
                height:70px;
                width:100%;
            }
            h1{
                text-align: center;
                font-family: Audiowide;
            }
            tr td{
                border: 1px solid black;
            }
            table{
                width:100%;
                text-align: center;
                border: 2px dotted black;
                border-collapse: collapse;
                border: 1px solid black;
                
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
    background-color: white;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 70%; /* Could be more or less, depending on screen size */
  height:600px;
}
.close{
    cursor: pointer;
}
label{
    font-size: 30px;
    padding-left: 120px;
   text-transform: uppercase;
}
input[type=text]{
     border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:50%;
     
}
 
 
 
 input[type=email]{
    border-bottom: 2px solid black;
    border-right: none;
    border-left:none;
    border-top: none;
    width:50%;
     
}

 
input[type=submit]{
    background-color:#ff0000;
    border: 2px #66ccff solid;
    width:80%;
    height: 70px;
    margin-left:70px;
    border-radius: 10px;
   font-size: 40px;
   color:white;
}
        </style>
    </head>
    <body>
        <div class="header">
   <ul>
       
       
   
       
           <li class="loginb"><button type="button" class="btn btn-danger" onclick="document.getElementById('id01').style.display='block'" >Book Vaccine   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><i class="bi bi-person-circle"></i></button></li>
           <h1 style="font-family:Audiowide;"> Book Vaccine</h1>
   </ul>
 <div id="id01" class="modal">
    <div class="modal-content animate" >
    <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
    </div>
        <h1>BOOK VACCINE </h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return upload();">
         
              <label><b>USERNAME:</b></label>
              <input type="text" name="Name" required=""><br>
              <label><b>EMAIL ADDRESS:</b></label>
              <input type="email" name="Email" required=""><br>
            <label><b>Phone Number:</b></label>
            <input type="text" name="No" required=""><br>
              <label><b>LOCATION:</b></label>
              <select name="state" required="">
                  <option valUE="Andhra Pradesh">Andhra Pradesh</option>
                  <option valUE="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option valUE="Assam">Assam</option>
                  <option valUE="Bihar">Bihar</option>
                  <option valUE="Chhattisgarh">Chhattisgarh</option>
                  <option valUE="Goa">Goa</option>
                  <option valUE="Gujarat">Gujarat</option>
                  <option valUE="Haryana">Haryana</option>
                  <option valUE="Himachal Pradesh">Himachal Pradesh</option>
                  <option valUE="Jharkhand">Jharkhand</option>
                  <option valUE="Karnataka">Karnataka</option>
                  <option valUE="Kerala">Kerala</option>
                  <option valUE="Madhya Pradesh">Madhya Pradesh</option>
                  <option valUE="Maharashtra">Maharashtra</option>
                  <option valUE="Manipur">Manipur</option>
                  <option valUE="Meghalaya">Meghalayah</option>
                  <option valUE="Mizoram">Mizoram</option>
                  <option valUE="Nagaland">Nagaland</option>
                  <option valUE="Odisha">Odisha</option>
                  <option valUE="Punjab">Punjab</option>
                  <option valUE="Rajasthan">Rajasthan</option>
                  <option valUE="Sikkim">Sikkim</option>
                  <option valUE="Tamil Nadu">Tamil Nadu</option>
                  <option valUE="Telangana">Telangana</option>
                  <option valUE="Tripurah">Tripura</option>
                  <option valUE="Uttar Pradesh">Uttar Pradesh</option>
                  <option valUE="Uttarakhandh">Uttarakhand</option>
                  <option valUE="West Bengal">West Bengal</option>
                  
              </select><br><br>
              <label><b>Hospital Names</b></label>
              <select name="Names" required="">
                  <option valUE="AANANADAPURAM PHC CVC">ANANADAPURAM PHC CVC</option>
                  <option valUE="CHC BORDUMSA">CHC BORDUMSA</option>
                  <option valUE="ANCHALI MPHC">ANCHALI MPHC</option>
                  <option valUE="A N S HIGH SCHOOL BARH">A N S HIGH SCHOOL BARH</option>
                  <option valUE="BELADULA 18 PULS BILAIGARH">BELADULA 18 PULS BILAIGARH
</option>
                  <option valUE="CHC BICHOLIM">CHC BICHOLIM
</option>
                  <option valUE="ALAKHPURA PHC">ALAKHPURA PHC
</option>
                  <option valUE="CHC DHANDHUKA 1">CHC DHANDHUKA 1</option>
                  <option valUE="APOLLO CLINIC 1">APOLLO CLINIC 1</option>
                  <option valUE="DODDABALLAPURA UPHC COVAXIN">DODDABALLAPURA UPHC COVAXIN</option>
                  <option valUE="ANANTHAPURI HOSPITAL">ANANTHAPURI HOSPITAL
</option>
                  <option valUE="ACHALPUR GP BHAVAN">ACHALPUR GP BHAVAN
</option>
                  <option valUE="ADITYA NURSING HOME ANDHERI ">ADITYA NURSING HOME ANDHERI 
</option>
                  <option valUE="CHAKPIKARONG CHC">CHAKPIKARONG CHC
</option>
                  <option valUE="BATAW PHC">BATAW PHC
</option>
                  <option valUE="FARKAWN PHC SITE">FARKAWN PHC SITE
</option>
                  <option valUE="LONGLENG DH">LONGLENG DH
</option>
                  <option valUE="GEETANJALI MEDICINE STORE ">GEETANJALI MEDICINE STORE 
</option>
                  <option valUE="BAJAKHANA CHC">BAJAKHANA CHC
</option>
                  <option valUE="MP BIRLA HOSPITAL CHITTORGARH">MP BIRLA HOSPITAL CHITTORGARH
</option>
                  <option valUE="JORETHANG CHC">JORETHANG CHC
</option>
                  <option valUE="AGA-KHAN HEALTH CENTRE ">AGA-KHAN HEALTH CENTRE 
</option>
                  <option valUE="APOLLO CLINIC VALASARAVAKKAM">APOLLO CLINIC VALASARAVAKKAM
</option>
                  <option valUE="AGNIPASA HSC">AGNIPASA HSC
</option>
                  
                  <option valUE="AMETHI CHC 18 PLUS">AMETHI CHC 18 PLUS
</option>
                  <option valUE="APHC BANBASA 18 TO 44">APHC BANBASA 18 TO 44
</option>
                  <option valUE="AMRI DHAKURIA COVAXINl">AMRI DHAKURIA COVAXIN
</option>
                  
              </select><br><br>
              <label><b>Vaccine Name</b></label>
              <select name="vaccine">
                  <option valUE="Covaxin"> Covaxin </option>
                  <option valUE="CoviShield">CoviShield </option>
                  
                  
              </select><br><br>
              <input type="submit" value="SUBMIT">
          </form>


  </div>
    
</div>

</div>
        <div class="section">
            <table>
                <tr>
                   
                    <th>State</th>
                    <th>Total_People__Vaccinated</th>
                    <th>Total_Sessions_Conducted</th>
                    <th>Total_Covaxin_</th>
                    <th>Total_CoviShield_</th>
                    <th>Total_Doses_remaining</th>
                     <th>Hospital</th>
                    <th></th>
                    
                    
                </tr>
                 <?php 
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $state=$_POST['state'];
  }
                $selects = "SELECT * FROM vaccine";
                $results=mysqli_query($conn,$selects);
                while($rows=mysqli_fetch_array($results,MYSQLI_ASSOC)){
                    echo "<tr><td>";
                    echo $rows['State'];
                    echo "</td><td>";
                    echo $rows['Total_People__Vaccinated'];
                    echo "</td><td>";
                    echo $rows['Total_Sessions_Conducted'];
                    echo "</td><td>";
                    echo $rows['Total_Covaxin_'];
                    echo "</td><td>";
                    echo $rows['Total_CoviShield_'];
                    echo "</td><td>";
                    echo $rows['Total_Doses_remaining'];
                   echo "</td><td>";
                   echo $rows['Hospitals_'];
                }

            
            
            
            
            ?>
            </table>
        </div>
        <script>
            function upload(){
               alert("Thank you! You have successfully registered.Please login again!");
                
            }
            </script>
    </body>
</html>

