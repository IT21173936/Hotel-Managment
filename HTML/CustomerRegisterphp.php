<?php
require_once 'connection.php';
if(isset($_POST["registerBtn"])){

    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $Dob=$_POST["dob"];
    $address=$_POST["add"];
    $mobile=$_POST["mnum"];
    $email=$_POST["email"];
    $username=$_POST["uname"];
    $password=$_POST["psd"];
    $gender=$_POST["gender"];

   $stmt = $con->prepare("insert into registercustomer (CFname,CLname,CDOB,CAddress,CMobile,CEmail,CUsername,CPassword,CGender)values(?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("sssssssss", $firstname,$lastname,$Dob,$address,$mobile,$email,$username,$password,$gender);
   $stmt->execute();
   echo "Registered Succesfully";

   header("Location:adminDashboard.php");

   $stmt->close();
   $con->close();

}
?>