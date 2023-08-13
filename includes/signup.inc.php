<?php

    if (isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['username'];
        $rpwd = $_POST['rpwd'];
        $pwd = $_POST['pwd'];
        $isCool = true;
    
        require_once 'dbh.php';
        require_once 'functions.inc.php';

        if (isEmptyInput($fname, $lname, $uname, $rpwd, $pwd) !== false){
            $isCool = false;
            header("location: ../signup.php?error=emptyinput");
            exit();
        }

        if (invalidUname($uname) !== false){
            $isCool = false;
            header("location: ../signup.php?error=invaliduname");
            exit();
        }

        if (passwordmatch($pwd, $rpwd) !== false){
            $isCool = false;
            header("location: ../signup.php?error=pwdnomatch");
            exit();
        }

        if (unameExist($conn, $uname) !== false){
            $isCool = false;
            header("location: ../signup.php?error=unametaken");
            exit();
        }

        if (validPwd($pwd) !== true){
            $isCool = false;
            header("location: ../signup.php?error=invalidpwd");
            exit();
        }

        if ($isCool){
            // SQL query to insert data
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO users (name, surname, username, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $fname, $lname, $uname, $hashedPwd);
            $stmt->execute();

            // Close the statement and connection
            $stmt->close();
            $conn->close();

            header("location: ../quiz/quizhome.php");
            
        }
    }else{
        header("location: ../signup.php?error=stmterror");
    }