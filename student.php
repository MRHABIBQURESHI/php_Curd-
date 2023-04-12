
      <?php

$con = mysqli_connect("localhost","root","","mrhabibphp");
$fetch = $con->query("SELECT * FROM `itsmedatabase`");


?>


<?php 

include("include/header.php")
?>






      
  <div class="container">
 
      <a style="float:right" class="btn btn-outline-info" href="index.php"> Back To Home</a>
  <h3 class="mt-3" >Student</h3>
  <hr>
  <br>

  <form action="php/addast.php" method="post">

  

  
  </form>
  <?php

include("config/db.php");
$fetch = $con->query("SELECT * FROM `itsmedatabase`");


?>
      
  <div class="container">


  <table id="std" class="table table-striped table-bordered mt-3" style="width:100%">
      <thead class="thead-inverse">
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>phone</th>
              <th>picture</th>
              

        
          </tr>
          </thead>
          <tbody> 

             <?php  foreach($fetch as $data){

             ?>
              <tr>
                  <td scope="row"><?php echo $data['id'] ?></td>
                  <td><?php echo $data['name'] ?></td>
                  <td><?php echo $data['email'] ?></td>
                  <td><?php echo $data['phone'] ?></td>
                  <td><img height="200"width="200" src="uploads/<?php echo $data['picture'] ?>" /> </td>
                  
              </tr>
             <?php } ?>
          </tbody>
  </table>
  
  


  </div>
  <?php 

include("include/footer.php")
?>

