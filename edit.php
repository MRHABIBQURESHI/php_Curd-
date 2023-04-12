<?php



$con = mysqli_connect("localhost","root","","mrhabibphp");

if($_GET['id']){

        $id = $_GET['id'];
    
    $fetch = $con->query("SELECT * FROM `itsmedatabase` where id='$id' ");


    $data= mysqli_fetch_array($fetch);
}



?>


<?php 

include("include/header.php")
?>






      
  <div class="container">

      <a style="float:right" class="btn btn-outline-info" href="index.php"> Back To Home</a>
  <h3 class="mt-3" >Editing <?php echo $data['name'] ?></h3>
  <hr>
  <br>

  <form action="php/updatest.php" method="post">

  <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

  <div class="form-group">
    <label for="">Name</label>
    <input type="text"
      class="form-control" name="name"  value="<?php echo $data['name'] ?>" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email"
      class="form-control" name="email"  value="<?php echo $data['email'] ?>"  id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
  </div>
  <div class="form-group">
    <label for="">Phone</label>
    <input type="text"
      class="form-control" name="phone" value="<?php echo $data['phone'] ?>" id="" aria-describedby="helpId" placeholder="">
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
