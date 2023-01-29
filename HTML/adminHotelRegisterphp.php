
<?php
require_once 'connection.php';
if(isset($_POST["hrbt"])){

    $Hname=$_POST["hname"];
    $Hlocation=$_POST["hloc"];
    $Hcontact=$_POST["hcontact"];
    $Hemail=$_POST["hemail"];
    $Huser=$_POST["huser"];
    $Hpassword=$_POST["hpsd"];
    

   $stmt = $con->prepare("insert into registerhotel (Hname,HLocation,HContact,HEmail,HUsername,HPassword)values(?,?,?,?,?,?)");
   $stmt->bind_param("ssssss", $Hname,$Hlocation,$Hcontact,$Hemail,$Huser,$Hpassword);
   $stmt->execute();
   header("Location:adminDashboard.php");



   $stmt->close();
   $con->close();

}
?>