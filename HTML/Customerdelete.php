<?php
   $id=$_GET['id'];
   require("connection.php");
   echo $id;
   
    $sql="DELETE from registercustomer WHERE CID='$id'";
    $con->query($sql);
    if($con->query($sql)){
        echo"deleted";
        header("Location:cusProfile.php");

    }

    else
    {
        echo "error";
        header("Location:cusProfile.php");
    }

?>