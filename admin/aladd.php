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
$sql='SELECT name, desg, ld, fb, tw, image from alumini ORDER BY id';
$add=$conn->query($sql);
while($row=$add->fetch_assoc())
{
 


echo" <div class='slide'>
          <div class='testimonial' style='cursor:default;'>
            <blockquote>“".$row['tw']."”</blockquote>
            <p class='author'>".$row['name']."
              <span>".$row['desg'].", Orator</span>
            </p>
             <p>
<a href='".$row['ld']."'  target='_blank'><ion-icon name='logo-linkedin' class='social' ></ion-icon></a>
<a href='".$row['fb']."'  target='_blank'><ion-icon name='logo-facebook'class='social' ></ion-icon></a>

</p>
          </div>

          <div class='slider-img'>
            <img src='admin/php/alimages/".$row['image']."' alt='Author Image'>
          </div>

        </div>


";
}
?>

