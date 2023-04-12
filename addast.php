<?php

include("../config/db.php");

if($_POST['submit']){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];


    $picture_name = $_FILES['picture']['name'];

    $picture = $_FILES['picture']['tmp_name'];

    $targetfile="../uploads/$picture_name";

    move_uploaded_file($picture,$targetfile);

    // move_uplaoded_file($picture,$targetfile);

    
  

    $a = $con->query("INSERT INTO `itsmedatabase`(`name`, `email`, `phone`, `Picture`) VALUES ('$name','$email','$phone','$picture_name')");
    if($a){

        header("location:../index.php");
    }

}

?>
