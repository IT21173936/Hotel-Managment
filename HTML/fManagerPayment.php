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
            <h2 class="title">Financial Manager</h2><br><br>
        </div>
            
        <div class="items">
            <li><img src ="../images/dashboard.png"><a href="../HTML/FinancialDashboard.php" id="addashboard"  class="addashboard" >Dashboard</a></li><br>
            <li><img src ="../images/payment1.jpg"><a href="../HTML/fManagerPayment.php" class="adlogoutbutton" id="adlogoutbutton" >Payment</a></li><br>
           
            <li><img src ="../images/logout.png"><a href="../HTML/FinancialLogin.php" class="adlogoutbutton" id="adlogoutbutton" >Logout</a></li><br>
            
        </div>
    </section>


    <section id="iterface">

        <div class="navigation">
            <div>
              
              <button style=" background-color: white;" type="text" class="addpabtn" id="addpabtn"><a href="../HTML/FinancialCustomerRegister.php">Add Customers</a></button>
            </div>
            <div class="adminloggedin1">Welcome Financial Manager!</div>
            <div class="admintop">
            <img class="adminpic" src="../images/mainadmin.jpg">
            </div>
            </div>
        <h3 class="d-title">Customers</h3>
        <div class="board">
            <h3 class="sub-title">Financial Details</h3>
            <table width="100%">
                <thead>
                    <tr>
                        <td>Payment ID</td>
                        <td>Payment methord</td>
                        <td>Payment date</td>
                        <td>Payment receipt No</td>
                        <td>Payment amount</td>
                                              
                    </tr>
                </thead>
                <tbody>

                <?php
                require("connection.php");
                $sql="SELECT * From Payment";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>
                            <tr>
                                <td>
                                   
                                    <div class="appdetails">

                                        <h5><?=$row['Payment_ID'];?></h5>
                                    </div>
                                </td>


                                <td >
                                    <h5><?=$row['Payment_method'];?></h5>
                                </td>

                                <td >
                                    <h5><?=$row['Payment_date'];?></h5>
                                </td>


                                <td>
                                    <h5><?=$row['Payment_receiptNo'];?></h5>
                                </td>

                                
                                <td>
                                    <h5><?=$row['Payment_amount'];?></h5>
                                </td>                                                              
                             
                            </tr><?php
                        }
                    }
                }

?>

               

                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <div class="bg-modal">
        <div class="modal-content">
        <img src="../images/user.png" alt="" class="useravatar">
            <li class="adminlogout">Are you sure you want to log out?</li>
            <div class="adminlogoutb">
            <div class="adminlogoutb1"><a href="../HTML/FinancialDashboard.php">Cancel</a></div>
                <div class="adminlogoutb2"><a href="../HTML/FinancialLogin.php">Log Out</a></div>
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
        <script src="../js/financial.js"></script>
</body>
</html>