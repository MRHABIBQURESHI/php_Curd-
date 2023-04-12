<?php

$con = mysqli_connect("localhost","root","","mrhabibphp");
$fetch = $con->query("SELECT * FROM `itsmedatabase`");


?>


<?php 

include("include/header.php")
?>






      
  <div class="container">

      <a style="float:right" class="btn btn-outline-info" href="index.php"> Back To Home</a>
  <h3 class="mt-3" >ACCOUNTS</h3>
  <hr>
  <br>

  <form action="php/addast.php" method="post">

  <div class="form-group">
    <label for="">Name</label>
    <input type="text"
      class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email"
      class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
  <div class="form-group">
    <label for="">Phone</label>
    <input type="text"
      class="form-control" name="phone" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>


  <div >

  <input type="submit" name="submit" class="btn btn-info mt-2 float-right" value="Register Student">
  </div>

  </form>

  
  


  </div>
  <?php 

include("include/footer.php")
?>
