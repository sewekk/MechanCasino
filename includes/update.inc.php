<?php
require_once("dbh.inc.php");
require_once("functions.inc.php");
session_start();
function updateUser($conn, $money, $username){
    $sql = "UPDATE users set accountBalance = '$money' where username = '$username';";
    mysqli_query($conn, $sql);
}
    if(isset($_POST['money'])){
        $money= $_POST['money'];
        updateUser($conn,$money,$_SESSION['username']);
     }

