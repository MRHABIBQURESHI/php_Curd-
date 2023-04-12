<?php

include("../config/db.php");

if($_POST['submit']){

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

        //echo $id,$name,$email,$phone;

    $update = $con->query("UPDATE `itsmedatabase` SET `name`='$name',`email`='$email',`phone`='$phone' WHERE `id` ='$id'");

    if($update){

        header("location:../index.php");
    }

}

?>