<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  /* Tooltip */
  .test + .tooltip > .tooltip-inner {
      background-color: yellow; 
      color: green; 
      border: 1px solid yellow; 
      padding: 15px;
      font-size: 50px;
      font-family: cursive;
  }
  /* Tooltip on top */
  .test + .tooltip.top > .tooltip-arrow {
      border-top: 5px solid green;
  }
  /* Tooltip on bottom */
  .test + .tooltip.bottom > .tooltip-arrow {
      border-bottom: 5px solid blue;
  }
  /* Tooltip on left */
  .test + .tooltip.left > .tooltip-arrow {
      border-left: 5px solid red;
  }
  /* Tooltip on right */
  .test + .tooltip.right > .tooltip-arrow {
      border-right: 5px solid black;
  }
  </style>
</style>
<body>

<div class="jumbotron text-center" style="padding-top: 159px;
    padding-bottom: 172px;background-image: url('images/academic.jpg');">
  <h1 style="    font-size: 83px;
    font-family: inherit;
    color: cornsilk;;">Sistem Informasi Akademik</h1>
  <h2 style="color: aliceblue;">SMA Negeri 69 Palembang</h2>
  <br><br>
  <a href="http://localhost/Pemanasan/index.php/Siswa/"  class="test" data-toggle="tooltip" data-placement="top" title="siswa"><img src="   images/student.jpg" style=" height: 224px; width:224px; border-radius: 17px"></a>
  &nbsp;&nbsp;&nbsp;
  <a href="http://localhost/Pemanasan/index.php/Guru/" class="test"  data-toggle="tooltip" data-placement="top" title="guru"><img src="images/teacher.jpg" style=" height: 224px; width:224px; border-radius: 17px"></a>
  &nbsp;&nbsp;&nbsp;
  <a href="http://localhost/Pemanasan/index.php/Wali/" class="test" data-toggle="tooltip" data-placement="top" title="wali"><img src="images/parents.jpg" style=" height: 224px; width:224px; border-radius: 17px"></a>
  &nbsp;&nbsp;&nbsp;

</div>

<div class="container" style="padding-left: 151px;">
  <div class="row">
    <div class="col-sm-12">
        <p></p>
    </div>
    <div class="col-sm-4">
       <a href="http://localhost/Pemanasan/index.php/Admin/"><img src="images/admin.jpg" alt="Admin" style="width: 194px;
    height: 153px;">
      <h3>Administrator</h3></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <a><img src="images/guidliness.png" alt="Gudliness" style="width: 159px;">
      <h3>Guidliness</h3></a>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <a><img src="images/contactus.png" alt="Contact us" style="width: 159px;">
      <h3>Contact us</h3></a>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>