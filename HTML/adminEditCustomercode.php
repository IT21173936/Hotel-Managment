
<?php
session_start();

$connection = mysqli_connect("localhost","root","","hotel");

require("connection.php");

if(isset($_POST["updte"])){

    $CID = $_POST["cid"];
    $firstname=$_POST["fname"];
    $lastname=$_POST["lname"];
    $Dob=$_POST["dob"];
    $address=$_POST["add"];
    $mobile=$_POST["mnum"];
    $email=$_POST["email"];
    

    
    $query="UPDATE registercustomer SET CFname = '$firstname', CLname = ' $lastname', 	CDOB = ' $Dob', CAddress = ' $address', CMobile = '  $mobile', CEmail = ' $email' WHERE cid = '$CID' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is updated";
        header('Location: adminCustomer.php');

    }
    else
    {
      $_SESSION['success'] = "Your data is not updated";
      header('Location: adminCustomer.php');

    }


}
?>