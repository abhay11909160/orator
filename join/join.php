<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
   }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lpu";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
	echo "Connect";
}
if($_SERVER["REQUEST_METHOD"]=="POST")
  {
$names=test_input($_POST['fname']);
$emails=test_input($_POST['email']);
$phones=test_input($_POST['phone']);
$courses=test_input($_POST['course']);
$years=test_input($_POST['year']);
$genders=$_POST['gender'];
$regs=test_input($_POST['reg']);


$chk="";  
if(isset($_POST['sub']))  
{ 
$checkbox1=$_POST['techno'];  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
}
}
 $sql= "insert into form(name, email, phone, course, year, gender, field, reg) values ('".$names."','".$emails."','".$phones."','".$courses."','".$years."','".$genders."','".$chk."','".$regs."')";   

if ($conn->query($sql) === TRUE) {
  header("Location: success.html");
exit;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();


?>