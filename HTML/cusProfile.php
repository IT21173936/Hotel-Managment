<?php

session_start();

//let we check if the user logged in

if(!isset($_SESSION['loggedin'])){
    echo('You need to log in first!');
    header('refresh:2; url=LoginC
    .php');
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
            </div>
        <h3 class="d-title">Profile</h3>
        <div class="board">
            <h3 class="sub-title">Details</h3>
            <table width="100%">
                <tbody>

                <?php
                require("connection.php");
                $sql="SELECT * From registercustomer Where CID = '101' ";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>First Name</td>
                                <td>
                                   
                                    <div class="appdetails">

                                        <h5><?=$row['CFname'];?></h5>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Last Name</td>
                                <td >
                                    <h5><?=$row['CLname'];?></h5>
                                </td>
                            </tr>   
                            
                            <tr>
                                <td>Date Of Birth</td>
                                <td >
                                    <h5><?=$row['CDOB'];?></h5>
                                </td>
                            </tr>    

                            <tr>
                                <td>Address</td>
                                <td>
                                    <h5><?=$row['CAddress'];?></h5>
                                </td>
                            </tr>
                                
                            <tr>
                                <td>Mobile Number</td>
                                <td>
                                    <h5><?=$row['CMobile'];?></h5>
                                </td>
                            </tr>

                            <tr>
                                <td>Email</td>    
                                <td>
                                    <h5><?=$row['CEmail'];?></h5>
                                </td>
                            </tr>
                               
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <h5><?=$row['CGender'];?></h5>
                                </td>
                        </tr>    
                                 
                                

                            </tr><?php
                        }
                    }
                }

?>

               

                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <form action="EditCustomer.php" method="post">
            <input type="hidden" name = "editid" value="<?php echo $row['hid']; ?>">
                <button type = "submit" name="edit_btn" class="dashdoccheck2">Update My Details</button>
                <button type = "submit" name="#" class="dashdoccheck2"> <a href="Customerdelete.php">Delete My Account</a></button>
            </form>
        </div>

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

      <div class="addpatcontainer">
            <form method="post">
                <div class="adpatform-group">

                    <br><label for="addpatname" ><b>Enter Name</b></label>
                    <input type="text" placeholder="Enter Name" name="addpatname" id="addpatname" required>

                </div>
                <div class="adpatform-group">

                    <label for="addpatusername"><b>User Name</b></label>
                    <input type="text" placeholder="Enter User Name" name="addpatusername" id="addpatusername" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatloacation"><b>Location</b></label>
                    <input type="text" placeholder="Enter Location" name="addpatloacation" id="addpatloacation" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatdescription"><b>Special Note</b></label>
                    <input type="text" placeholder="Type something..." name="addpatdescription" id="addpatdescription" required>
                </div>

                                
                    <div class="adpatform-group">
                    <label for="addpatrole"><b>Role</b></label>
                    <input type="text" placeholder="Enter Role" name="addpatrole" id="addpatrole" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatemail"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="addpatemail" id="addpatemail" required>
                </div>

                    <div class="adpatform-group">
                    <label for="addpatvoice"><b>Phone Number</b></label>
                    <input type="tel" placeholder="Enter Email" name="addpatvoice" id="addpatvoice" required>
                </div>
                
                    <div class="adpatform-group">
                    <label for="addpatpsw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="addpatpsw" id="addpatpsw" required>
                </div>

                    <!--<div class="adpatform-group">
                    <label for="psw-repeat2"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="psw-repeat2" id="psw-repeat2" required>-->


                    <div class="adpatform-group">
                    <button type="submit" name="submit" class="adpatbtn">Add Patient</button>
                    <button type="text" class="adpatcancelbtn" id="adpatcancelbtn">Cancel</button>
                </div>
  
        
            </form>
        </div>
        <script src="../js/admin.js"></script>
</body>
</html>