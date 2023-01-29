<?php
require 'connection.php';
if(isset($_POST["payment"])){

    $PRnumber=$_POST["reservationno"];
    $PDate=$_POST["date"];
    $PRfee=$_POST["fee"];
    $PMethod=$_POST["pay"];
    

   
   $stmt = $con->prepare("insert into payment(PRnumber,PDate,PRfee,PMethod)values(?,?,?,?)");
   $stmt->bind_param("ssss", $PRnumber,$PDate,$PRfee,$PMethod);

   $stmt->execute();

   header("Location:Home.php");


   $stmt->close();
   $con->close();

}
?>