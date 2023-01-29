<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Dashboard</title>
    <link rel="stylesheet" href="../CSS/admin.css">

</head>
<body>
    <section id="menu">
        <div class="logo">
        <img src="../images/Dream new.png" alt="">
            <h2 s class="title">Administration</h2> <br><br>
        </div>
            
        <div class="items">
            <li><img src ="../images/dashboard.png"><a href="../HTML/adminDashboard.php" id="addashboard"  class="addashboard" >Dashboard</a></li><br>
            <li><img src ="../images/hotel.png"><a href="../HTML/adminHotel.php" id="adhotel"  class="adhotel" >Hotels</a></li><br>
            <li><img src ="../images/customer.png"><a href="../HTML/adminCustomer.php" id="adcustomer"  class="adcustomer" >Customers</a></li><br>
            <li><img src ="../images/reservation.jpg"><a href="../HTML/adminReservation.php" id="adreservation"  class="adreservation" >Reservations</a></li><br>
            <li><img src ="../images/logout.png"><a href="#" class="adlogoutbutton" id="adlogoutbutton" >Logout</a></li><br>
        </div>
    </section>

    <section id="iterface">
        <div class="navigation">
        <div class="adminloggedin">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../images/mainadmin.jpg">
            </div>
            </div>
            <br><br><br>
        <h3 class="d-title">Dashboard</h3>

        <div class="values">
            
            <div class="v-box">
                <img class="reser" src="../images/hotel.png">
                <div>
                    <h3>
                        <?php
                require("connection.php");
                $sql="SELECT * From registerhotel";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;

                        
                        
                    }
                }

?>
                    </h3>
                    <span>Hotels Count</span>

                </div>
            </div>
            <div class="v-box">
                <img class="reser" src="../images/customer.png">
                <div>
                    <h3><?php
                require("connection.php");
                $sql="SELECT * From registercustomer";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;

                        
                        
                    }
                }

?></h3>
                    <span>Customers Count</span>
                </div>
            </div>
            <div class="v-box">
                <img class="reser" src="../images/reservation.jpg">
                <div>
                    <h3><?php
                require("connection.php");
                $sql="SELECT * From reservation";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;

                        
                        
                    }
                }

?>
</h3>
                    <span style = "align:center;">Reservations Count</span>
                </div>
            </div>
           
        </div>
        </div>
    <div class="board">

    </div>
   
   
    <br><br><br><br><br>
    </section>


    <div class="bg-modal">
        <div class="modal-content">
            <img src="../images/user.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
                <div class="adminlogoutb1"><a href="#" class="adlogoutcancel" >Cancel</a></div>
                <div class="adminlogoutb2"><a href="AdminLogin.php" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script> 
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