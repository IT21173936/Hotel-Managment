<?php

session_start();

$database='localhost';
$database_user='root';
$database_password='';
$database_name='hotel';

//connect to database

$con=mysqli_connect($database, $database_user, $database_password, $database_name);

if(mysqli_connect_error()){
    exit('failed to connect to the database: '.mysqli_connect_errno());
}

// prepare our SQL statement and prevent injection

if($stmt=$con->prepare('SELECT username, password FROM accounts WHERE username=?')){
    //now let we bind the parameters, so username is a string so we use "s"
    $stmt->bind_param('s',$_POST['username']);
    $stmt->execute();

    //now let we store the result so we can chek if the account exists
    $stmt->store_result();

    if($stmt->num_rows > 0){
        $stmt->bind_result($id,$password);
        $stmt->fetch();

        //so now we know the account exist let we now verify the password

        if($_POST['password'] === $password){
            //now the user should log in and we create a session so we know the user has logged in
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
        
            header('Location: cusDashboard.php');
        }else{
            //display a message for incorrect password
            echo('Incorrect Password!');
            header('refresh:2; url=Login.php');
        }
    }else{
        //display a message for incorrect username
        echo('Incorrect Username!');
        header('refresh:2; url=Login.php');
    }
    $stmt->close();
}