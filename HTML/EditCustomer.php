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
    <link rel="stylesheet" href="../CSS/Customer._Register.css">
    <link rel="stylesheet" href="../CSS/Style.css">

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
        <h3 class="d-title">Edit Customers Profile</h3>
        <br> <br> <br>
        <div class="container">
        <div class="card-details">

        <?php

        require("connection.php");
                $sql="SELECT * From registercustomer where CID='101' ";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>

<form action="EditCustomercode.php" method="POST"> 
        <div class="card-box">
                            <input  name = "cid" type="hidden" value= "<?=$row['CID']?>" >
                            <div class="card-box">
                            <span class="details">First Name</span>
                        <input  name = "fname" type="text" value= "<?=$row['CFname']?>" placeholder="Enter hotel name">
                    </div>
                    
                
						<div class="card-box">
							<span class="details">Last Name</span>
							<input type="text" name = "lname" value= "<?=$row['CLname']?>" placeholder="Enter your last name">
					</div>
					<div class="card-box">
						<span class="details">DOB</span>
						<input type="text" name = "dob" value= "<?=$row['CDOB']?>"  placeholder="Enter your date of birth">
					</div>
					<div class="card-box">
						<span class="details">Address</span>
						<input type="text" name = "add" value= "<?=$row['CAddress']?>" placeholder="Enter your address">
					</div>
					<div class="card-box">
						<span class="details">Mobile Number</span>
						<input type="text" name = "mnum"  value= "<?=$row['CMobile']?>" placeholder="Enter your mobile number">
					</div>
					<div class="card-box">
						<span class="details">Email</span>
						<input type="text" name = "email" value= "<?=$row['CEmail']?>" placeholder="Enter your email">
					</div>
                    <div class="circal-form">
						
					
                <br><br>
                <div>
                    
                    <button name = "updte" type="submit" class="dashdoccheck2"> UPDATE</button>

                    <button class="dashdoccheck2"> <a href = "cusProfile.php" style="color:crimson;"> Cancel </a></button>
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
                <div class="adminlogoutb2"><a href="LoginC.php" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script> 
</body>
</html>