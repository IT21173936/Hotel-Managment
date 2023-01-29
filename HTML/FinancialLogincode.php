<?php
 

 if(isset($_POST["logina"])){
     require 'connection.php';
     
     $username=$_POST["auser"];
     $password=$_POST["apsd"];
     
     $sql= "SELECT Ausername,Apasssword FROM adminlogin ";
     $result = $con->query($sql);
     
     if($result->num_rows > 0)
     {
         while($row = $result->fetch_assoc())
         {
         
             if($_POST["auser"]==$row['Ausername'] || $_POST["apsd"]==$row['Apasssword'])
             {
 
                     
               
 
                 $_SESSION["Ausername"] = $_POST['auser'];
                 $_SESSION["Apasssword"] = $_POST['apsd'];
 
                 header("location: FinancialDashboard.php?");
                   
                 }
                 else{
                     
                     header("location: FinancialLogin.php");
                 }
                 
         }
     }
 }
 ?>  