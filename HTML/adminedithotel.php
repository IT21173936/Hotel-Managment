<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hotel</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/Hotel_Register.css">
    <link rel="stylesheet" href="../CSS/Style.css">

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
        <h3 class="d-title">Edit Hotels Profile</h3>
        <br> <br> <br>
        <div class="container">
        <div class="card-details">

        <?php

        require("connection.php");
                $sql="SELECT * From registerhotel";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>

<form action="adminedithotelcode.php" method="POST"> 
        <div class="card-box">
                            <input  name = "hid" type="text" value= "<?=$row['HID']?>" >
                            <div class="card-box">
                            <span class="details">Hotel Name</span>
                        <input  name = "hname" type="text" value= "<?=$row['Hname']?>" placeholder="Enter hotel name">
                    </div>
                    <div class="card-box">
                        <span class="details">Location</span>
                        <input  name = "hloc" type="text" value= "<?=$row['HLocation']?>" placeholder="Enter location">
                </div>
                <div class="card-box">
                    <span class="details">Contact Number</span>
                    <input   name = "hcon" type="text" value= "<?=$row['HContact']?>" placeholder="Enter contact number">
                </div>
                <div class="card-box">
                    <span class="details">Email</span>
                    <input  name = "hemail" type="text" value= "<?=$row['HEmail']?>" placeholder="Enter email">
                </div>
                <br><br>
                <div>
                <button style = "font-size:20px;width:100px; height: 50px; color : white; border-radius : 10px;  background-color: crimson; font-weight:bold;"> <a href = "adminHotel.php"> Cancel </a></button>
                    <button name = "updt" type="submit" style = "font-size:20px;width:100px; height: 50px; color : white; border-radius : 10px;  background-color: crimson; font-weight:bold;"> UPDATE </button>
            </div>
                        </form>
               
         <?php

}
}
                }

          
?>

       













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