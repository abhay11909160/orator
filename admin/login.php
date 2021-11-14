<!DOCTYPE html>
<html>
<head>
  <title>
    Admin
  </title>
  <link rel="icon" href="http://localhost/orator/assets/img/logo1.png">
  <link rel='stylesheet'
href='https://fonts.googleapis.com/css?family=Open+Sans:600' />
<meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel='stylesheet' href='eba.css'>
  </head>
   <body>
    <?php
 //$c=convert_uuencode("orator@123");
 //echo $c;
 //*;W)A=&]R0#$R,P`` `
// Redirect browser
//header("Location: http://www.geeksforgeeks.org");
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
  	$names= test_input($_POST["fname"]);
  	$pass=convert_uuencode(test_input($_POST["pwd"]));
    $loc=$_POST['location'];
  }
  $sql = "SELECT userid, password FROM admin WHERE id='1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    if (convert_uuencode($row["password"]) == $pass && $row["userid"] == $names )
    {
if($loc=="event"){
      echo "  <div class='login-wrap'>
  <div class='login-html'>
    <input id='tab-1' type='radio' name='tab' class='sign-in' checked><label for='tab-1' class='tab'>ADD EVENT</label>
    <input id='tab-2' type='radio' name='tab' class='sign-up'><label for='tab-2' class='tab'>DELETE EVENT</label>
    <div class='login-form'>
      <div class='sign-in-htm'>
        <form action='upload.php' method='POST' enctype='multipart/form-data'>
        <div class='group'>
          <label for='user' class='label'>Name of Event (All in Caps)</label>
          <input id='user' type='text' class='input' name='ename' required='required'>
        </div>
        <div class='group'>
          <label for='pass' class='label'>Type of Event</label>
          <select name='etype' id='pass' class='input'>
  <option value='TECHNICAL' style='color:black;'>Technical Event</option>
  <option value='ENTERTAINMENT' style='color:black;'>Entertainment</option>
</select>
        </div>
        <div class='group'>
          <input id='check' type='checkbox' class='check' name='fevent' checked>
          <label for='check'><span class='icon'></span> Future Event</label>
        </div>
        <div class='group'>
          <label for='upload' class='label'>Uplaoad Image (Max. Size: 1MB)</label>
          <input id='user' type='file' class='input' name='files' required='required'>

        </div>
        <div class='group'>
          <input type='submit' class='button' value='ADD'>
        </div>
      </form>
        <div class='hr'></div>
        <div class='foot-lnk'>
          <label for='tab-2'>DELETE EVENTS</a>
        </div>
      </div>
      <div class='sign-up-htm'>
      <form action='delete.php' method='POST' enctype='multipart/form-data'>
        <div class='group'>
          <label for='user' class='label'>Name of Event (All in Caps)</label>
          <input id='user' type='text' class='input' name='dname' required='required'>
        </div>

        <div class='group'>
          <input type='submit' class='button' value='DELETE'>
        </div>
        </form>
        <div class='hr'></div>
        <div class='foot-lnk'>
          <label for='tab-1'>ADD EVENTS</a>
        </div>
      </div>
    </div>
  </div>
</div>";
}
else if($loc=='applicants'){
  $sql="SELECT name, email, phone, course, year, gender, field, reg FROM form ORDER BY id DESC";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <head>
    <style>
    td{
      padding:5px;
      }

    table{
      background: linear-gradient(-45deg,rgba( 255, 255, 255, 0.1 ),rgba( 255, 255, 255, 0.4 ));
box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
margin:0 auto 10px;

    }
     @media only screen and (max-width:525px)
    {
      table{

width:90%;
}
}
    @media only screen and (min-width:1200px)
    {
      table{
      display:inline-block;
margin:10px 0 10px 90px;
width:40%;
}
    }
    </style>
    </head>
    <body style='background-color:#B4AEE8;color:black;margin:8px'>
    <table>
    <tr>
<td>Name:</td>
<td class='data'>".$row["name"]."</td>
    </tr>
    <tr>
    <td>Email:</td>
    <td class='data'>".$row["email"]."</td>
    </tr>
    <tr>
    <td>Phone:</td>
    <td>".$row["phone"]."</td>
    </tr>
    <tr>
    <td>Registration No.:</td>
    <td>".$row["reg"]."</td>
    </tr>
    <tr>
    <td>Course:</td>
    <td>".$row["course"]."</td>
    </tr>
    <tr>
    <td>Year:</td>
    <td>".$row["year"]."</td>
    </tr>
    <tr>
    <td>Gender:</td>
    <td>".$row["gender"]."</td>
    </tr>
    <tr>
    <td>Field of Interest:</td>
    <td>".$row["field"]."</td>
    </tr>
    </table>

</body>


    ";
  }


}

else {
  echo "<html><head>
<link rel='stylesheet' href='error.css'>
</head><body><div class='container'>
      <img src='https://i.imgur.com/qIufhof.png' />

      <h1>
        <span>Error</span></h1> <br />
        <p style='color:red'>NO DATA FOUND</p><br/>

      <p><a href='http://localhost/orator/' class='home' style='font-size:100%;'>Back to Home Page</a></p>

    </div></body></html>";
}


}
else if($loc=='member'){
echo"<div class='login-wrap'>
  <div class='login-html'>
    <input id='tab-1' type='radio' name='tab' class='sign-in' checked><label for='tab-1' class='tab'>ADD ALUMINI</label>
    <input id='tab-2' type='radio' name='tab' class='sign-up'><label for='tab-2' class='tab'>UPDATE MEMBER</label>
    <div class='login-form'>
      <div class='sign-in-htm'>
        <form action='alumini.php' method='POST' enctype='multipart/form-data'>
        <div class='group'>
          <label for='user' class='label'>Name of Alumini</label>
          <input id='user' type='text' class='input' name='aname' required='required'>
        </div>
        <div class='group'>
          <label for='user' class='label'>Former Designation</label>
          <input id='user' type='text' class='input' name='dname' required='required'>
        </div>
          <div class='group'>
          <label for='user' class='label'>Linkedln URL</label>
          <input id='user' type='url' class='input' name='lurl' >
        </div>
          <div class='group'>
          <label for='user' class='label'>Facebook URL</label>
          <input id='user' type='url' class='input' name='furl' >
        </div>
          <div class='group'>
          <label for='user' class='label'>Testimonial</label>
          <input id='user' type='text' class='input' name='test' >
        </div>
        <div class='group'>
          <label for='upload' class='label'>Uplaoad Image (Max. Size: 1MB and Resolution: 550*450 px)</label>
          <input id='user' type='file' class='input' name='files' required='required'>
        </div>
        <div class='group'>
          <input type='submit' class='button' value='ADD'>
        </div>
      </form>
    </div>

      <div class='sign-up-htm'>
        <form action='member/update.php' method='POST' enctype='multipart/form-data'>
        <div class='group'>
          <label for='user' class='label'>Name of Member</label>
          <input id='user' type='text' class='input' name='mname' required='required'>
        </div>
        <div class='group'>
          <label for='pass' class='label'>Designation</label>
          <select name='dtype' id='pass' class='input'>
  <option value='Chief Executive Officer' style='color:black;'>Chief Executive Officer</option>
  <option value='Co-Chief Executive Officer1' style='color:black;'>Co-Chief Executive Officer1</option>

  <option value='Co-Chief Executive Officer2' style='color:black;'>Co-Chief Executive Officer2</option>
   <option value='HR Manager' style='color:black;'>HR Manager</option>
  <option value='Assistant HR Manager' style='color:black;'>Assistant HR Manager</option>
  <option value='Event Manager' style='color:black;'>Event Manager</option>
  <option value='Assistant Event Manager' style='color:black;'>Assistant Event Manager</option>
  <option value='PR Manager' style='color:black;'>PR Manager</option>
  <option value='Project Manager' style='color:black;'>Project Manager</option>
  <option value='Marketing Manager' style='color:black;'>Marketing Manager</option>
  <option value='Database Manager' style='color:black;'>Database Manager</option>
  <option value='Technical Head' style='color:black;'>Technical Head</option>
  <option value='Administrative Manager' style='color:black;'>Administrative Manager</option>
  <option value='Strategy Manager' style='color:black;'>Strategy Manager</option>

</select>
        </div>
        <div class='group'>
          <label for='user' class='label'>Email</label>
          <input id='user' type='email' class='input' name='memail' >
        </div>
          <div class='group'>
          <label for='user' class='label'>Linkedln URL</label>
          <input id='user' type='url' class='input' name='tlfurl' >
        </div>
          <div class='group'>
          <label for='user' class='label'>Instagram URL</label>
          <input id='user' type='url' class='input' name='tiurl' >
        </div>
        <div class='group'>
          <label for='upload' class='label'>Uplaoad Image (Max. Size: 1MB and Resolution: 155*130 px)</label>
          <input id='user' type='file' class='input' name='files' required='required'>

        </div>
        <div class='group'>
          <input type='submit' class='button' value='UPDATE'>
        </div>
        </form>
    </div>
  </div>
</div>";
}
else if($loc=="gallery"){
echo"<div class='login-wrap' >
  <div class='login-html'>
    <input id='tab-1' type='radio' name='tab' class='sign-in' checked><label for='tab-1' class='tab'>ADD IMAGE</label>
    <input id='tab-2' type='radio' name='tab' class='sign-up' ><label for='tab-2' class='tab'style='display: none;'></label>
    <div class='login-form'>
      <div class='sign-in-htm'>
        <form action='gallery/gal.php' method='POST' enctype='multipart/form-data' >
        <div class='group'>
        <div class='group'>
          <label for='upload' class='label'>Uplaoad Image (MAX SIZE: 1MB)</label>
          <input id='user' type='file' class='input' name='files' required='required'>
        </div>

        <div class='group'>
          <input type='submit' class='button' value='ADD'>
        </div>
      </form>
    </div>


  </div>
</div>";

}
else{
$sql="DELETE FROM form";
mysqli_query($conn,$sql);
header("Location: del.html");
exit;

}

    }
    else{
    	header("Location: http://localhost/orator//404.html");
exit;
    }
  }
} else {
  echo "0 results";
}
$conn->close();
//exit;
?>
</body>
</html>
