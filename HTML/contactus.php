<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactus</title>
    <link rel="stylesheet" href="../CSS/contactus.css">
    <!-- <link rel="stylesheet" href="../CSS/Style.css"> -->
    <!--<link rel="stylesheet" href="../CSS/Home.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Js/Home.js" defer></script>
</head>
<body style=" height: 100vh;
    background-image: url('../images/contactbackground9.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    margin-top: 0%;">
    <!-- This is header section -->
    <header>
        <div class="front-row">
        <div class="logo-section"><a href="../HTML/Home.php"><img src="../images/Dream new.png" style="width:425px; height: 140px; margin-top:-10px;"></a></div>
            <div class="login-section">
                <div class="btn-packs">
                    <div class="log">
                        <span ><a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="../HTML/Login.php">log-in</a></span>
                    </div>
                    <div class="log">
                        <span><a a style="color: black;text-align: center;
                            padding:8px 0 0 0;font-family: 'Koulen', cursive; font-size: 25px; font-weight: 30px;" href="../HTML/Register.php">register</a></span>
                    </div>
                    <div class="avatar">
                        
                        <i class="fa-solid fa-user-tie"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-section">
            <ul class="nav">
            <li><a href="../HTML/Home.php">Home</a></li>
                <li><a href="../HTML/TypesOfWeddings.php">Types Of Wedding</a></li>
                <li><a href="../HTML/hotel.php">Hotel</a></li>
                <li><a href="../HTML/aboutus.php">About us</a></li>
                <li class="bookNow"> <a href="../HTML/reservation.php">Make Reservations</a> </li>
            </ul>
        </div>
    </header>

    <div class="Bimage">
         <center><h1 class="Ttxtstyle">Contact us</h1></center>
       <div class="ContactUsBody">
        <section style="width:70%">
        <div id="formStyle1">
        <form action="" method="POST">
                <fieldset>
                   <br><br>
                   
               
                   <label>Name:</label>
                        <input name="name" type="text"  id="Address" placeholder="Enter name here...">
                        
                        <label>Email:</label>
                        <input  name="email" type="text" id="Address" placeholder="Enter email" >
                        
                        <!-- <label name="subject"for="Subject">Subject:</label>
                        <input type="text" name="subject" id="subject" placeholder="Enter subjec" required> -->
                                            
                        <label>ContactNo:</label>
                        <input name="phone" type="tel" id="phone" placeholder="Your phone number">
                        
                        <label>Message:</label><br>
                        <textarea name="message" id="message" placeholder="Your message here"></textarea>

                        <button name= "contact" value="submit" id="send"  type="submit" class="Btn1">Send</button>
                    
                </fieldset>
            </form>
        </div>
        </section>
        <section style="width:30%" >
        <div id="formStyle2">
            <form>
                <fieldset>
                    <center><h1 class="style2">Let us Call You</h1></center><br><br>
                    <p>Our well trained professional sales team is waiting to address your every question at your earliest convenience.</p> 
                    <img class="img1" src="../images/contact1.png">
                    <img class="img2" src="../images/contact2.png">
                </fieldset>
            </form>
        </div>
        </section>
    </div></div>
    
<!-- footer changes should made in here -->

        
<footer class="sticky-footer">
    <div class="txt-area">
        <p class="text-1"> <a style="color: rgb(7, 6, 6);
            font-size: 20px;
            font-weight: 800;
            margin: 0 -130px;
            position: relative;
        margin-left: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        height: 50px;
        width: 400px;letter-spacing: 3px;" href="../HTML/contactus.php">Contact US</a> </p>
        <p id="divider">|</p>
        <p class="text-1"><a style="color: rgb(7, 6, 6);
            font-size: 20px;
            font-weight: 800;
            margin: 0 10px;
           
            position: relative;
        margin-left: -130px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        height: 50px;
        width: 400px;letter-spacing: 3px;" href="../HTML/Feedback.php">Feedback</a></p>
    </div>
    <div class="social-icons">
        <div class="fb">
            <i class="fa-brands fa-facebook-square"></i>
        </div>
        <div class="twitter">
            <i class="fa-brands fa-twitter-square"></i>
        </div>
        <div class="insta">
            <i class="fa-brands fa-instagram-square"></i>
        </div>
        <div class="google">
            <i class="fa-brands fa-google-plus-square"></i>
        </div>
    </div>
</footer>
</body>
</html>


<?php
require 'connection.php';
if(isset($_POST["contact"])){

    $ConName=$_POST["name"];
    $ConEmail=$_POST["email"];
    $ConContactNo=$_POST["phone"];
    $ConMessage=$_POST["message"];

    
   
   $stmt = $con->prepare("insert into contactus(ConName,ConEmail,ConContactNo,ConMessage)values(?,?,?,?)");
   $stmt->bind_param("ssss", $ConName,$ConEmail,$ConContactNo,$ConMessage);
   $stmt->execute();
//    header("Location:../index.php");
//    echo "Data Successfully";

   $stmt->close();
   $con->close();

}
?>
