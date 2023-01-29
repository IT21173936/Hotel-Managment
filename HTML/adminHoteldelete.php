<?php
   $id=$_GET['id'];
   require("connection.php");
   echo $id;
   
    $sql="DELETE from registerhotel WHERE HID='$id'";
    $con->query($sql);
    if($con->query($sql)){
        echo"deleted";
        header("Location:adminHotel.php");

    }

    else
    {
        echo "eroor";
        header("Location:adminHotel.php");
    }

?>