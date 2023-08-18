<?php

    if (isset($_POST['submit'])){
        $uname = $_POST['username'];
        $pwdlogin = $_POST['pwdlogin'];
       // $isCool = true;
    
        require_once 'dbh.php';
        require_once 'functions.inc.php';

        if (emptyInputLogin($uname, $pwdlogin) !== false){
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        loginUser($conn, $uname, $pwdlogin);

    }else{
        header("location: ../login.php");
        exit();
    }