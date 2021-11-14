<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lpu";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql='SELECT image from gallery ORDER BY id';
$add=$conn->query($sql);
while($row=$add->fetch_assoc())
{


echo"  <div class='col-lg-4 col-md-6 col-xs-6 thumb'>
                <a href='http://localhost/orator/assets/img/wm18.jpg?auto=compress&cs=tinysrgb&h=650&w=940' class='fancybox' rel='ligthbox'>
                    <img style='box-shadow: 0px 8px 16px 0px rgba(0,0,0,1.2);'  src='admin/php/gallery/gimages/".$row['image']."' ?auto=compress&cs=tinysrgb&h=650&w=940' class='zoom img-fluid '  alt=''>

                </a>
            </div>

";
}
?>
