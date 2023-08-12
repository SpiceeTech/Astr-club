<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
     <!-- FONT AWESOME-->
     <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Document</title>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>

    <br><br><br><br><br><br>

    <form action="includes/dbh.php" method="post">
        <center><h1 style="margin-bottom: 20px;">Sign Up</h1></center>
        <input type="text" placeholder="Enter your first name..." name="fname"> <br>
        <input type="text" placeholder="Enter your surname..." name="lname"> <br>
        <input type="text" placeholder="Enter your username..." name="username"> <br>
        <input type="password" placeholder="Create your password..." name="pwd"> <br>
        <input type="password" placeholder="Repeat your password..." name="rpwd"> <br>
        <input type="submit" value="sign up" name="submit">

        <p style="margin-top: 12px;">Already have an account? <a href="login.php">Login</a></p>
    </form>

    <br><br>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>