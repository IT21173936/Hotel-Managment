<?php
require 'connection.php';
if(isset($_POST["feedback"])){

    $Fname=$_POST["name"];
    $Ftele=$_POST["tele"];
    $Femail=$_POST["email"];
    $Fsub=$_POST["sub"];
    $Fmsg=$_POST["msg"];
    
    
   $stmt = $con->prepare("insert into feedback(FName,FTelephone,Femail,FSubject,Message)values(?,?,?,?,?)");
   $stmt->bind_param("sssss", $Fname,$Ftele,$Femail,$Fsub,$Fmsg);

   $stmt->execute();

   header("Location:Feedback.php");


   $stmt->close();
   $con->close();

}
?>