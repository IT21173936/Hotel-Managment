<?php
require 'connection.php';
if(isset($_POST["contact"])){

    $ConName=$_POST["name"];
    $ConEmail=$_POST["email"];
    $ConContactNo=$_POST["phone"];
    $ConMessage=$_POST["message"];

    
   
   $stmt = $con->prepare("insert into contactus(ConName,ConEmail,ConContactNo,ConMessage)values(?,?,?,?)");
   $stmt->bind_param("ssss", $ConName,$ConEmail,$ConContactNo,$ConMessage);
   $stmt->execute();
   echo "Data Successfully";

   $stmt->close();
   $con->close();

}
?>
