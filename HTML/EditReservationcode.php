
<?php
session_start();

$connection = mysqli_connect("localhost","root","","hotel");

require("connection.php");

if(isset($_POST["updtw"])){

    $RID = $_POST["rid"];
    $Hname = $_POST["hname"];
    $Date=$_POST["date"];
    $Cname=$_POST["cname"];
    $contact=$_POST["con"];
    $email=$_POST["email"];
    $typew=$_POST["wed"];
    $serv=$_POST["ser"];
   

    
    $query="UPDATE reservation SET  Hname = '$Hname', RDate = '$Date', Cname = ' $Cname', Contact = '$contact', Email= ' $email', TypeWedding= '$typew', NoServings= '$serv' WHERE rid = '$RID' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is updated";
        header('Location: adminReservation.php');

    }
    else
    {
      $_SESSION['success'] = "Your data is not updated";
      header('Location: adminReservation.php');

    }


}
?>