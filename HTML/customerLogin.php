<?php
 require 'connection.php';

if(isset($_POST["loginC"])){

    $username=$_POST["user"];
    $password=$_POST["psd"];
    
    $sql= "SELECT CUsername,CPassword FROM registercustomer ";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($_POST["user"]==$row['CUsername'] || $_POST["psd"]==$row['CPassword'])
                {
                //Valid user, so set the Session

                $_SESSION["CuserName"] = $_POST["user"];
                $_SESSION["Cpassword"] = $_POST["psd"];

                header("Location: Home.php");
                  
                }
                else{
                    echo "Error : User Not Exits";
                    header("Location: Home.php");
                    
                }
                
        }
    }
}
?>

<?php

 require 'connection.php';

if(isset($_POST["loginH"])){

    $username=$_POST["user"];
    $password=$_POST["psd"];
    
    $sql= "SELECT HUsername,HPassword FROM registerhotel ";
    $result = $con->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            if($_POST["user"]==$row['HUsername'] || $_POST["psd"]==$row['HPassword'])
                {
                //Valid user, so set the Session

                $_SESSION["HuserName"] = $_POST["user"];
                $_SESSION["Hpassword"] = $_POST["psd"];

                  
                header("Location: Home.php");
                }
                else{

                    echo "Error : User Not Exits";
                    header("Location: Home.php");
                }
                
        }
    }
}
?>


