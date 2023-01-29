<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/Hotel_Register.css">
    <link rel="stylesheet" href="../CSS/resevation.css">

</head>
<body>
    <section id="menu">
        <div class="logo">
        <img src="../images/Dream new.png" alt="">
            <h2 class="title">Administration</h2>
        </div>
            
        <div class="items">
            <li><img src ="../images/dashboard.png"><a href="../HTML/adminDashboard.php" id="addashboard"  class="addashboard" >Dashboard</a></li>
            <li><img src ="../images/hotel.png"><a href="../HTML/adminHotel.php" id="adhotel"  class="adhotel" >Hotels</a></li>
            <li><img src ="../images/customer.png"><a href="../HTML/adminCustomer.php" id="adcustomer"  class="adcustomer" >Customers</a></li>
            <li><img src ="../images/reservation.jpg"><a href="../HTML/adminReservation.php" id="adreservation"  class="adreservation" >Reservations</a></li>
            <li><img src ="../images/logout.png"><a href="#" class="adlogoutbutton" id="adlogoutbutton" >Logout</a></li>
        </div>
    </section>

    <section id="iterface">
        <div class="navigation">
        <div class="adminloggedin">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../images/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Edit Reservations</h3>
        <br> <br> <br>
        <div class="container">
        <div class="card-details">

        <?php

        require("connection.php");
                $sql="SELECT * From reservation";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>

<form action="adminEditReservationcode.php" method="POST"> 
        <div class="card-box">
                            <input  name = "rid" type="hidden" value= "<?=$row['RID']?>" >
                            <div class="card-box">
                        <span class="details">Hotel Name</span>
                        <input  name = "hname" type="text" value= "<?=$row['Hname']?>" >
                    </div>
                    <div class="card-box">
                        <span class="details">Date</span>
                        <input  name = "date" type="text" value= "<?=$row['RDate']?>" >
                </div>
                <div class="card-box">
                    <span class="details">Customer Name</span>
                    <input   name = "cname" type="text" value= "<?=$row['Cname']?>" >
                </div>
                <div class="card-box">
                    <span class="details">Contact Number</span>
                    <input  name = "con" type="text" value= "<?=$row['Contact']?>" >
                </div>
                <div class="card-box">
                    <span class="details">Email</span>
                    <input  name = "email" type="text" value= "<?=$row['Email']?>" >
                </div>
                <div class="card-box">
                    <span class="details">Type of Wedding Destination</span>
                    <input  name = "wed" type="text" value= "<?=$row['TypeWedding']?>" >
                </div> <div class="card-box">
                    <span class="details">No.of servings</span>
                    <input  name = "ser" type="text" value= "<?=$row['NoServings']?>" >
                </div>
               
                <br><br>
                <div>
                <button style = "font-size:20px;width:100px; height: 50px; color : white; border-radius : 10px;  background-color: crimson; font-weight:bold;"> <a href = "adminReservation.php"> Cancel </a></button>
                    <button name = "updtw" type="submit" style = "font-size:20px;width:100px; height: 50px; color : white; border-radius : 10px;  background-color: crimson; font-weight:bold;"> UPDATE </button>
            </div>
                        </form>
               
         <?php

}
}
                }

          
?>

       












<div class="bg-modal">
        <div class="modal-content">
        <img src="../imagesuser.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
                <div class="adminlogoutb1"><a href="#" class="adlogoutcancel" >Cancel</a></div>
                <div class="adminlogoutb2"><a href="#" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script> 
</body>
</html>