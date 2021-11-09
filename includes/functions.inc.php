<?php

    function emptyInputSignup($username, $email, $pwd, $pwdRepeat){
        $result;
        if(empty($username) || empty($email)|| empty($pwd) || empty($pwdRepeat) ){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function InvalidUserName($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
        
    }
    function InvalidEmail($email){
        $result;
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
        
    }
    function pwdMach($pwd, $pwdRepeat){
        $result;
            if($pwd !== $pwdRepeat){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
        
    }
    function usernameExists($conn, $username, $email){
       $result;
        $sql = "SELECT * FROM users where userName = ? Or userEmail = ?;";
       $stmt = mysqli_stmt_init($conn);
       if(!mysqli_stmt_prepare($stmt, $sql)){
        header('location: ../register.php?error=stmtfailed');
        exit();
       }
       mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row  = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result =false;
            return $result;
        }
        mysqli_stmt_close($stmt);
       
    }
    function createUser($conn, $username, $email, $pwd){
        $result;
         $sql = "INSERT INTO users(username, useremail, userpwd, accountBalance) Values (?,?,?,1000);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
         header('location: ../register.php?error=stmtfailed');
         exit();
        }

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $username,$email,$hashedPwd);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_close($stmt);
         header('location: ../login.html?error=none');
         exit();
         
     }


?>