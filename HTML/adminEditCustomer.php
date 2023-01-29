<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../CSS/Customer._Register.css">
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
        <h3 class="d-title">Edit Customers Profile</h3>
        <br> <br> <br>
        <div class="container">
        <div class="card-details">

        <?php

        require("connection.php");
                $sql="SELECT * From registercustomer";
                if($result=$con->query($sql)){
                    if($result->num_rows>0){
                        while ($row=$result->fetch_assoc()) {

                        ?>

<form action="adminEditCustomercode.php" method="POST"> 
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
                <button style = "font-size:20px;width:100px; height: 50px; color : white; border-radius : 10px;  background-color: crimson; font-weight:bold; text-align:center;"> <a href = "adminCustomer.php"> Cancel </a></button>
                    <button name = "updte" type="submit" style = "font-size:20px;width:100px; height: 52px; color : white; border-radius : 10px;  background-color: crimson; text-align:center; font-weight:bold;"> UPDATE </button>
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
                <div class="adminlogoutb1"><a href="../HTML/adminDashboard.php" class="adlogoutcancel" >Cancel</a></div>
                <div class="adminlogoutb2"><a href="../HTML/AdminLogin.php" class="adlogoutout" id="adlogoutout" >Log Out</a></div>
            </div>
        </div>
    </div>
    <script src="../js/admin.js"></script> 
</body>
</html>