<?php

    if (isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $username = $_POST['username'];
        $rpwd = $_POST['rpwd'];
        $pwd = $_POST['pwd'];
    }

    require_once 'dbh.php';

     // SQL query to insert data
     $sql = "INSERT INTO users (fname, lname, username, pwd) VALUES (:name , :surname, :username, :password)";
     $stmt = $conn->prepare($sql);
     $stmt->bindParam(':name', $fname);
     $stmt->bindParam(':surname', $lname);
     $stmt->bindParam(':username', $username);
     $stmt->bindParam(':password', $pwd);
 
     $stmt->execute();
     echo "New record created successfully";