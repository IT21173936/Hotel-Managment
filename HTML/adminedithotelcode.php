
<?php
session_start();

$connection = mysqli_connect("localhost","root","","hotel");

require("connection.php");

if(isset($_POST["updt"])){

    $HID = $_POST["hid"];
    $Hname=$_POST["hname"];
    $Hlocation=$_POST["hloc"];
    $Hcontact=$_POST["hcon"];
    $Hemail=$_POST["hemail"];

    
    $query="UPDATE registerhotel SET Hname = '$Hname', HLocation = ' $Hlocation', HContact = ' $Hcontact', HEmail = ' $Hemail' WHERE hid = '$HID' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is updated";
        header('Location: adminHotel.php');

    }
    else
    {
      $_SESSION['success'] = "Your data is not updated";
      header('Location: adminHotel.php');

    }


}
?>