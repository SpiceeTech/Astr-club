<?php

    if (isset($_POST['submit'])){
        $uname = $_POST['username'];
        $pwd = $_POST['pwd'];
        $isCool = true;
    
        require_once 'dbh.php';
        require_once 'functions.inc.php';
    }else{
        header("location: ../login.php");
    }