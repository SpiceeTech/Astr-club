<?php

function isEmptyInput($fname, $lname, $uname, $rpwd, $pwd){
    if(empty($fname) || empty($lname) || empty($uname) || empty($rpwd) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function invalidUname($uname) {
    if (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function passwordmatch($pwd, $rpwd) {
    if ($pwd !== $rpwd) {
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function unameExist($conn, $uname){
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $uname);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        $result = true;
        mysqli_stmt_close($stmt);
        return $row;
    }else{
        mysqli_stmt_close($stmt);
        $result = false;
    }
    return $result;
}

function validPwd($pwd){
    if (strlen($pwd) >= 7){
        if (preg_match("/^[a-zA-Z0-9]*$/", $pwd)) {
            $result = true;
            return $result;
        }
    }
    return false;
}

function emptyInputLogin($uname, $pwd){
    if(empty($uname) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }

    return $result;
}

function loginUser($conn, $uname, $pwdlogin){
    $uidExists = unameExist($conn, $uname);

    if ($uidExists === false){
        header("location: ../login.php?error=wrongloginuname");
        exit();
    }

    $pwdHashed = $uidExists["password"];

    if (password_verify($pwdlogin, $pwdHashed)){
        session_start();
        $_SESSION["userid"] = $uidExists["u_id"];
        $_SESSION["useruid"] = $uidExists["username"];
        header("location: ../quiz/quizhome.php");
        exit();
    }else{
        header("location: ../login.php?error=wrongloginpwd");
        exit();
    }
}