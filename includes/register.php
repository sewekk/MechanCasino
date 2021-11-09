<?php

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email= $_POST['e-mail'];
        $pwd = $_POST['password'];
        $pwdRepeat = $_POST['re-password'];

        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        if(emptyInputSignup($username, $email, $pwd, $pwdRepeat)!== false){
            header('location: ../register.php?error=emptyinput');
            exit();
        }
        if(InvalidUserName($username)!== false){
            header('location: ../register.php?error=invalidusername');
            exit();
        }
        if(InvalidEmail($email)!== false){
            header('location: ../register.php?error=invalidemail');
            exit();
        }
        if(pwdMach($pwd, $pwdRepeat)!== false){
            header('location: ../register.php?error=passworddontmach');
            exit();
        }
        if(usernameExists($conn, $username, $email)!== false){
            header('location: ../register.php?error=userexists');
            exit();
        }
        createUser($conn, $username, $email, $pwd);
    }

    else{
        header('location: ../register.html');
        exit();
    }

?>