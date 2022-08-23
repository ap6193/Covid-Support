<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
  $host="localhost";
  $username="root";
  $password="";
  $db="covidsupport";
  $conn= mysqli_connect($host,$username,$password,$db);
 

 
  
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <style>
            body{
                background-image: linear-gradient(to right,#99ff99,#ffcccc,#ccccff);
            }
             table {
  width: 80%;
  margin-left: 10%;
  border:2px dotted black;
   border-collapse: collapse;
   margin-top: 10px;
}

tr{
    border:2px dotted black;
    height:40px;
   
}
tr:nth-child(even){background-color: #ccccff;}
tr:nth-child(odd){background-color: white;}
.group2{
    width: 10%;
    margin-top: 30px;
    margin-left: 40px;
    text-transform: uppercase;
    font-family: cursive; 
}

.group1{
    width: 10%;
    margin-top: 30px;
     text-transform: uppercase;
     font-family: cursive;
     margin-left: 40px;
}
.group3{
    width: 10%;
    margin-top: 30px;
     text-transform: uppercase;
     font-family: cursive;
     color:white;
      margin-left: 40px;
}
.group4{
    width: 10%;
    margin-top: 30px;
     text-transform: uppercase;
     font-family: cursive;
     color:white;
     margin-left: 40px;
}
.group0{
    width: 10%;
    margin-top: 30px;
     margin-left: 0px;
     text-transform: uppercase;
     font-family: cursive;
     color:white;
      margin-left: 40px;
}
.state{
    margin-top:10px;
    height: 40px;
}
select{
    text-transform: uppercase;
}
.header{
    margin-top: 0;
    text-align: center;
    height:60px;
    width:100%;
   
}



            </style>
    </head>
    <body>
        <div class="container-fluid header">
            <h1>View State Wise Cases</h1>
        </div>
        
        <div class="container-fluid">
            
            
  
  

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="target">
      <select name="state">
          <option value="<?php echo $options;?>" hidden><?php echo $options;?></option>
          <option value="" disabled selected>Select your option</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
                 <option value"Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalayah</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripurah">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option valUE="Uttarakhandh">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <input type="submit" value="search" >
                  
      </select>
  </form>
 
</div>
        
        <div class="p6">
            
 
            <table>
          
                <tr>
                    <th>State</th>
                     <th>Confirmed_Cases</th>
                      <th>Active_Cases</th>
                      <th>CuredDischarged</th>
                       <th>Death</th>
                       <th>MODIFIED ON</th>
                       
                </tr>
                 <?php 
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $state=$_POST['state'];
  }
                $selects = "SELECT * FROM statewisecase WHERE State='$state'";
                $results=mysqli_query($conn,$selects);
                while($rows=mysqli_fetch_array($results,MYSQLI_ASSOC)){
                    echo "<tr><td>";
                    echo $rows['State'];
                    echo "</td><td>";
                    echo $rows['Confirmed_Cases'];
                    echo "</td><td>";
                    echo $rows['Active_Cases'];
                    echo "</td><td>";
                    echo $rows['CuredDischarged'];
                    echo "</td><td>";
                    echo $rows['Death'];
                    echo "</td><td>";
                    echo $rows['Date'];
                    echo "</td></tr>";
                    
                   
                }
                ?>
            </table>
            
        </div>

        <div class="p1" > 
       <table>
          
                <tr>
                    <th>State</th>
                     <th>Confirmed_Cases</th>
                      <th>Active_Cases</th>
                      <th>CuredDischarged</th>
                       <th>Death</th>
                       <th>MODIFIED ON</th>
                       
                </tr>
                <?php 
                $selectA = "SELECT * FROM statewisecase";
                $resulta=mysqli_query($conn,$selectA);
                while($rowa=mysqli_fetch_array($resulta,MYSQLI_ASSOC)){
                    echo "<tr><td>";
                    echo $rowa['State'];
                    echo "</td><td>";
                    echo $rowa['Confirmed_Cases'];
                    echo "</td><td>";
                    echo $rowa['Active_Cases'];
                    echo "</td><td>";
                    echo $rowa['CuredDischarged'];
                    echo "</td><td>";
                    echo $rowa['Death'];
                    echo "</td><td>";
                    echo $rowa['Date'];
                    echo "</td></tr>";
                    
                   
                }
                ?>
                
         </table>
         
 </div> 
      
         
  
        <script>
           $(document).ready(function(){
             
            
              
         
            });
          
            </script>
        
    </body>
</html>
