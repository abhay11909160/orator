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
$sql='SELECT ename, type, future, image from events ORDER BY id DESC';
$add=$conn->query($sql);
$ft='';
$ty='';
while($row1=$add->fetch_assoc())
{
 
 if($row1['type']=='TECHNICAL')
 {
 	$ty="filter-web";
 }
 else
 {
 	$ty="filter-card";
 }
if($row1['future']=='YES')
{
	$ft="filter-app";
}
else
{
	$ft='';
}

echo"<div class='col-lg-4 col-md-6 portfolio-item ".$ty." ".$ft." wow fadeInUp' data-wow-delay='0.2s' >
            <div class='portfolio-wrap'>
              <figure>
               
        
                <a href='admin/php/images/".$row1['image']."'  data-lightbox='portfolio' data-title='Technical' title='preview'>
<img src='admin/php/images/".$row1['image']."' alt='omegafest poster' class='img-fluid' ></a>
       
                
              </figure>

              <div class='portfolio-info'>
                <h4 style='color:black'>".$row1['ename']."</h4>
                <p>".$row1['type']."</p>
              </div>
            </div>
          </div>
";
}
?>

