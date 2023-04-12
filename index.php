<?php

include("config/db.php");
$fetch = $con->query("SELECT * FROM `itsmedatabase`");


?>


<?php 

include("include/header.php")
?>






      
  <div class="container">

      <a style="float:right" class="btn btn-outline-info" href="create.php"> + Add Student</a>
  <h3 class="mt-3" >Student-Module</h3>
  <hr>
  <br>

  <table id="std" class="table table-striped table-bordered mt-3" style="width:100%">
      <thead class="thead-inverse">
          <tr>


          
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>phone</th>
              <th>picture</th>
              <th>Option</th>
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
                   <td>
                     <a class="btn btn-outline-success" href="edit.php?id=<?php echo $data['id'] ?>">Edit</a> 
                     <a class="btn btn-outline-danger" href="delete.php?id=<?php echo $data['id'] ?>">Delete</a>
                  </td>
              </tr>
             <?php
            
            }
          
            ?>
          </tbody>
  </table>
  
  


  </div>
  <?php 

include("include/footer.php")
?>
