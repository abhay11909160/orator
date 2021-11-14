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
$sql='SELECT name, desg, ld, ing, image, email from member ORDER BY id';
$add=$conn->query($sql);
while($row=$add->fetch_assoc())
{
 
if($row['desg']=="Co-Chief Executive Officer1" || $row['desg']=="Co-Chief Executive Officer2" )
{
  $row['desg']="Co-Chief Executive Officer";
}

echo"  <div class='col-xl-4 col-lg-4 col-sm-6 col-md-6 col-xs-12 mt-10'>
        <div class='user-main'>

          <div class='user-img'><center>
            <img src='admin/php/member/mimages/".$row['image']."' style='width:120%;height:115% '>
</center>
          </div>

          <div class='user-name'>
            <div class='user-headline'>
              <h3>".$row['name']."</h3>
              <span class='user-designation'>".$row['desg']."</span>
              <div class='user_contact'>

                <span><i aria-hidden='true' class='fas fa-envelope'></i>".$row['email']."</span>
              </div>
            </div>
          </div>

          <div class='user_social ul-li-block'>
            <ul>
              
              <li><a href='".$row['ing']."'><i aria-hidden='true' class='fab fa-instagram ab'></i></a></li>
              <li><a href='".$row['ld']."'><i aria-hidden='true' class='fab fa-linkedin ab'></i></a></li>
              
            </ul>
            <div class='s2-share_btn text-center'><i class='fas fa-share-alt'></i></div>
          </div>
          

        </div>
      </div>


";
}
?>

