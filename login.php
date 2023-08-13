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

      <!-- LINK TO JAVASCRIPT -->
    <script src="main.js" defer></script>

    <title>Login</title>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>

    <br><br><br><br><br><br>

    <form action="includes/login.inc.php" method="post">
    <?php
            if (isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                   echo '<div id="errorPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-button" id="closeErrorButton">&times;</span>
                        <h2 style="color:red">Please provide all logging in details.</h2>
                    </div>
                    </div>';
                }
             else if($_GET["error"] == "stmterror"){
                echo '<div id="errorPopup" class="popup">
                <div class="popup-content">
                    <span class="close-button" id="closeErrorButton">&times;</span>
                    <h2 style="color:red">Something went wrong. Try again.</h2>
                </div>
                </div>';
             }
            } 
        ?>
        <center><h1 style="margin-bottom: 20px;">Login</h1></center>
        <input type="text" placeholder="Enter your username..." name="username"> <br>
        <input type="password" placeholder="Enter your password..." name="pwd"> <br>
        <input type="submit" value="Login" name="submit" id="subm">
        <p style="margin-top: 12px;">Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>

    <br><br>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>