<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Error</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <link rel="icon" href="http://localhost/orator/assets/img/logo1.png">
   <link rel='stylesheet' type='text/css' href='error.css'>
</head>
<body>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lpu";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
         $names= $_POST["dname"];
  $sql = "SELECT id FROM events WHERE ename='$names'";
$result = $conn->query($sql);
$q = "DELETE FROM events WHERE ename='$names' ";
if ($result->num_rows > 0){
    mysqli_query($conn,$q);
  header("Location: delete.html");
exit;
} else {
   echo "<div class='container'>
      <img src='https://i.imgur.com/qIufhof.png' />

      <h1>
        <span>Error</span></h1> <br />
        <p style='color:red'>EVENT NOT FOUND</p><br/>

      <p><a href='http://localhost/orator/' class='home' style='font-size:100%;'>Back to Home Page</a></p>

    </div>";
}

$conn->close();



?>
</body>
</html>
