<?php
include('../database.php');
$tbl_name="user"; 

session_start();
{
    $user=$_POST['email'];
    $pass=$_POST['password'];
    $pdo = Database::connect();
    $query = $pdo->prepare("SELECT * FROM user WHERE 
                         email='$user' and password ='$pass'");
    $query->execute();
    $count = $query->fetch(PDO::FETCH_ASSOC);
    if($count!="")
    {
        $_SESSION['login_username']=$user;
           header("Location:../index.php"); 
        
    }
    else
    {
       header('Location:../login.php');
       
    }
}
?>