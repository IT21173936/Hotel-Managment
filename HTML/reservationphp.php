<?php
require 'connection.php';
if(isset($_POST["reservation"])){

    $Hname=$_POST["name"];
    $Date=$_POST["date"];
    $Cname=$_POST["Cname"];
    $Contact=$_POST["ContactNo"];
    $Email=$_POST["email"];
    $TypeWedding=$_POST["TOWD"];
    $NoServings=$_POST["NOS"];

   
   $stmt = $con->prepare("insert into reservation(Hname,RDate,Cname,Contact,Email,TypeWedding,NoServings)values(?,?,?,?,?,?,?)");
   $stmt->bind_param("sssssss", $Hname,$Date,$Cname,$Contact,$Email,$TypeWedding,$NoServings);

   $stmt->execute();

   header("Location:payment.php");


   $stmt->close();
   $con->close();

}
?>