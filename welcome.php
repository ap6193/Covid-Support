<html>
<body>
<?php
  $host="localhost";
  $username="root";
  $password="";
  $db="covidsupport";
  $conn= mysqli_connect($host,$username,$password,$db);
  ////// to check the connection
  $Name=$_POST["Name"];
  $Email=$_POST["Email"];
  $Password1=$_POST["Password"];
  $State=$_POST["state"];

  
  $sql="INSERT INTO register (Name,Email,Password,State) VALUE('$Name','$Email','$Password1','$State')";
  if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
    <div>
        <h1></h1>
    </div>
</body>
</html>