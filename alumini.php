
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    

    <title>Orator-Alumini</title>
    <link type="image/png" href="assets/img/logo1.png" rel="icon">

    <!-- STYLES -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/alumini.css">
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
<style>
  .social{
    color:#202046;
    font-size:25px;
  }
  .social:hover{
    color:rgb(102, 59, 512);
    font-size:30px;
  }
.btw{
    position: absolute;
    top: 2%;
    left: 10px;
    padding: 2px 10px;
    border-radius: 5px;
    font-size: 20px;
    color: whitesmoke;
    background-color: black;
    text-align: center;
    font-weight: bold;
    text-decoration: none;
   box-shadow: rgba(0, 0, 0, 0.5) 0px 54px 55px, rgba(0, 0, 0, 0.3) 0px -12px 30px, rgba(0, 0, 0, 0.3) 0px 4px 6px, rgba(0, 0, 0, 0.4) 0px 12px 13px, rgba(0, 0, 0, 0.2) 0px -3px 5px;
}

.btw:hover{
background-color: white;
color:black;
text-decoration: none;

}
.btw:active{
background-color: white;
color:black;
text-decoration: none;

box-shadow: rgba(50, 50, 93, 0.5) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.55) 0px 18px 36px -18px inset;
}


</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
  </head>
  <body>
 
<center><p id="pi" >OUR&nbspALUMINI</p></center>
    <main>
 <a href="index.php" class="btw"><i class="fa fa-arrow-left"></i></a>
      <div class="slider">

        <div class="buttons">
          <div class="previous"></div>
          <div class="next"></div>
        </div>

        

       
<?php include 'admin/php/aladd.php';?>
      </div>
 
    </main>

   

    <script src="assets/js/alumini.js"></script>

  </body>
</html>