<?php
   $id=$_GET['id'];
   require("connection.php");
   echo $id;
   
    $sql="DELETE from reservation WHERE RID='$id'";
    $con->query($sql);
    if($con->query($sql)){
        echo"deleted";
        header("Location:adminReservation.php");

    }

    else
    {
        echo "eroor";
        header("Location:adminReservation.php");
    }

?>