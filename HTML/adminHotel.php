
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Hotel Details</title>
    <link rel="stylesheet"  href="../CSS/admin.css">
    
</head>
    <body>
        <section id="menu">
            <div class="logo">
            <img src="../images/Dream new.png" alt="">
                <h2  class="title">Administration</h2><br><br>
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

                <div>
                   <!--  <a href="#" class="adddobtn" id="adddobtn" >Add Doctor</a>-->
                   <button type="click" class="adddobtn" id="adddobtn"><a href="../HTML/adminHotelRegister.php">Add Hotels</a></button>
                </div>
                <div class="adminloggedin1">Welcome Admin!</div>
            <div class="admintop">
            <img class="adminpic" src="../images/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Hotels</h3>

        <div class="board">
            <h3 class="sub-title">Available Hotels</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Hotel ID</td>
                        <td>Hotel Name</td>
                        <td>Hotel Location</td>
                        <td>Conatct Number</td>
                        <td>Hotel Email</td>
                         
                    </tr>
                </thead>
                <tbody>

                <?php
                require("connection.php");
                $sql="SELECT * From registerhotel";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                            <td>
                            <div class="appdetails">
                                        <h5><?=$row['HID'];?></h5>
                                    </div>
                                </td>

                                
                                <td>
                                    
                                    <div class="appdetails">
                                        <h5><?=$row['Hname'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5><?=$row['HLocation'];?></h5>
                                </td>

                                <td >
                                    <h5><?=$row['HContact'];?></h5>
                                </td>


                                <td>
                                    <h5><?=$row['HEmail'];?></h5>
                                </td>
                                
                                <form action="adminedithotel.php" method="post">

                                    <!-- <input type="hidden" name = "editid" value="<?php echo $row['hid']; ?>"> -->

                                    <td>
                                    <button style = "font-weight:bold; font-size:15px; color:crimson; " type = "submit" name="edit_btn" class="dashdoccheck2">Update</button>
                                    </td> 


                                    
                                    <td>
                                    <button  type = "submit" name="#" class="dashdoccheck2"> <a href="adminHoteldelete.php?id=<?=$row['HID'];?>">Delete</button>
                                    </td> 
                                    </form>

                            </tr><?php
                                                  }
                                                }
                                            }
                            
                            ?>

                       
               

                </tbody>
            </table>
        </div>
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
        <script src="../images/admin.js"></script>
</body>
</html>