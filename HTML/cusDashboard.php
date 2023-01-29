<?php

session_start();

//let we check if the user logged in

if(!isset($_SESSION['loggedin'])){
    echo('You need to log in first!');
    header('refresh:2; url=LoginC.php');
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer-Dashboard</title>
    <link rel="stylesheet" href="../CSS/customer.css">

</head>
<body>
    <section id="menu">
        <div class="logo">
        <a href="Home.php"><img src="../images/Dream new.png" alt=""></a>
            <h2 class="title">Customer</h2>
        </div>
            
        <div class="items">
            <li><img src ="../images/dashboard.png"><a href="../HTML/cusDashboard.php" id="addashboard"  class="addashboard" >Dashboard</a></li>
            <li><img src ="../images/customer.png"><a href="../HTML/cusProfile.php" id="adcustomer"  class="adcustomer" >My Profile</a></li>
            <li><img src ="../images/reservation.jpg"><a href="../HTML/cusReservation.php" id="adreservation"  class="adreservation" >Reservations</a></li>
            <li><img src ="../images/logout.png"><a href="#" class="adlogoutbutton" id="adlogoutbutton" >Logout</a></li>
        </div>
    </section>

    <section id="iterface">
        <div class="navigation">
            <div class="adminloggedin">Welcome <?=$_SESSION['name']?>!</div>
        </div>
        <h3 class="d-title">Dashboard</h3>

        <div class="values">
            <div class="v-box">
                <img class="reser" src="../images/reservation.jpg">
                <div>
                    <h3><?php
                require("connection.php");
                $sql="SELECT * From reservation where Cname = 'Galadari' ";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;

                        
                        
                    }
                }

?>
</h3>
                    <span>Reservations</span>
                </div>
            </div>
            <br><br><br><br>
            <div class="v-box">
                <img class="reser" src="../images/payment.png">
                <div>
                    <h3>
                        <?php
                require("connection.php");
                $sql="SELECT * From payment where PID = '101'";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        
                        echo $result->num_rows;

                        
                        
                    }
                }

?>
                    </h3>
                    <span>Payments</span>

                </div>
            </div>
           
        </div>
        </div>
    <div class="board">

    </div>
   
    <!-- <div class="update">
                <form action="" method="POST">
        <label for="table">Choose a customer or hotel:</label>
        <select name="table">
            <option value="registercustomer">Customer</option>
            <option value="registerhotel">Hotel</option>
            
        </select>
        <br><br>
        <input type="submit" value="Submit">
        </form>
    </div> -->
    <br><br><br><br><br>
    </section>
    
    <div class="bg-modal">
        <div class="modal-content">
            <img src="../images/user.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
                <div class="adminlogoutb1"><a href="#" class="adlogoutcancel" >Cancel</a></div>
                <div class="adminlogoutb2"><a href="LoginC.php" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>

    <script src="../js/admin.js"></script> 
</body>
</html>