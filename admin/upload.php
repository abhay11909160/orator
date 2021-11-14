<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Error</title>
   <link rel="icon" href="http://localhost/orator/assets/img/logo1.png">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <link rel='stylesheet' type='text/css' href='error.css'>
</head>
<body>
<?php
      if(isset($_FILES['files'])){
            $target_dir = "images/";
$target_file = $target_dir . basename($_FILES["files"]["name"]);
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      $file_name = $_FILES['files']['name'];
      $file_size =$_FILES['files']['size'];
      $file_tmp =$_FILES['files']['tmp_name'];
     $errors=0;
     $errors1='';
      $errors2='';
      $expensions= array("jpeg","jpg","png");

      if(in_array($fileType,$expensions)=== false){
         $errors1="extension not allowed, please choose a define file format.";
         $errors+=1;
      }

      if($file_size > 1097152){
         $errors2='File size must be excately 1 MB';
         $errors+=1;
      }

      if($errors==0){
         move_uploaded_file($file_tmp,"images/".$file_name);
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
         $names= $_POST["ename"];
    $type=$_POST["etype"];
    $fut='';
    $chc = $_POST['fevent'];
    if(isset($chc)) {
        $fut='YES';
    }
    else{
        $fut='NO';
    }

  $sql = "insert into events(ename, type, future, image) VALUES ('".$names."','".$type."','".$fut."','".$file_name."')";
mysqli_query($conn,$sql);

                mysqli_close($conn);
          header("Location: success.html");
exit;


      }else{

        echo "<div class='container'>
      <img src='https://i.imgur.com/qIufhof.png' />

      <h1>
        <span>Error</span></h1> <br />
        <p style='color:red'>$errors1 <br/> $errors2</p><br/>

      <p><a href='http://localhost/orator/' class='home'>Back to Home Page</a></p>

    </div>";
      }
   }
?>

</body>
</html>
