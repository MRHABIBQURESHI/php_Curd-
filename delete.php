<?php
$con = mysqli_connect("localhost","root","","mrhabibphp");

if($_GET['id']){


  $id = $_GET['id'];  
  $fetch = $con->query("DELETE FROM `itsmedatabase` WHERE `id`='$id'");
    header("location:index.php");
}

?>

