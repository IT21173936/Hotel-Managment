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
        <h3 class="d-title">Reservations</h3>

    <div>
        <button type="click" class="addreserbtn"><a href="ReservationRegister.php">Make Reservations!</a></button>
    </div>

        <div class="board">

            <h3 class="sub-title">Reservation Details</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Hotel Name</td>
                        <td>Date</td>
                        <td>Wedding Destination</td>
                        <td>No.Of Servings</td>
                    </tr>
                </thead>
                <tbody>
                <?php
                require("connection.php");
                $sql="SELECT * From reservation where Cname = '101' ";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>
                                   
                                    <div class="appdetails">

                                        <h5><?=$row['Hname'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5><?=$row['Date'];?></h5>
                                </td>
                                
                                <td>
                                    <h5><?=$row['TypeWedding'];?></h5>
                                </td>
                                <td>
                                    <h5><?=$row['NoServings'];?></h5>
                                </td>

                            </tr><?php
                        }
                    }
                }

?>
    
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