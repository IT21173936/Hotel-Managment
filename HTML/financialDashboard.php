<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Manager-Dashboard</title>
    <link rel="stylesheet" href="../CSS/fManager.css">

</head>
<body>
    <section id="menu">
        <div class="logo">
        <img src="../images/Dream new.png" alt="">
            <h2 s class="title">Financial Manager</h2> <br><br>
        </div>
            
        <div class="items">
            <li><img src ="../images/dashboard.png"><a href="../HTML/FinancialDashboard.php" id="addashboard"  class="addashboard" >Dashboard</a></li><br>
            <li><img src ="../images/payment1.jpg"><a href="../HTML/fManagerPayment.php" class="adlogoutbutton" id="adlogoutbutton" >Payment</a></li><br>
            
            <li><img src ="../images/logout.png"><a href="../HTML/FinancialLogin.php" class="adlogoutbutton" id="adlogoutbutton" >Logout</a></li><br>
        </div>
    </section>

    <section id="iterface">
        <div class="navigation">
        <div class="adminloggedin">Welcome Financial Manager!</div>
            <div class="admintop">
            <img class="adminpic" src="../images/mainadmin.jpg">
            </div>
            </div>
            <br><br><br>
        <h3 class="d-title">Dashboard</h3>

        <div class="values">
            
           
   
    <br><br><br><br><br>
    </section>


    <div class="bg-modal">
        <div class="modal-content">
        <img src="../imagesuser.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
                <div class="adminlogoutb1"><a href="../HTML/FinancialDashboard.php">Cancel</a></div>
                <div class="adminlogoutb2"><a href="../HTML/FinancialLogin.php">Log Out</a></div>
            </div>
        </div>
    </div>
    <script src="../js/financial.js"></script> 
</body>
</html>

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
   echo "Registered Succesfully";



   $stmt->close();
   $con->close();

}
?>