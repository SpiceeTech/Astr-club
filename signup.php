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

    <title>Sign Up</title>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>

    <br><br><br><br><br><br>

    <form action="includes/signup.inc.php" method="post">
    <?php
            if (isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                   echo '<div id="errorPopup" class="popup">
                    <div class="popup-content">
                        <span class="close-button" id="closeErrorButton">&times;</span>
                        <h2 style="color:red">Please fill in everything.</h2>
                    </div>
                    </div>';
                }
             else if($_GET["error"] == "invaliduname"){
                echo '<div id="errorPopup" class="popup">
                <div class="popup-content">
                    <span class="close-button" id="closeErrorButton">&times;</span>
                    <h2 style="color:red">Invalid username.</h2>
                </div>
                </div>';
             }
             else if($_GET["error"] == "pwdnomatch"){
                echo '<div id="errorPopup" class="popup">
                <div class="popup-content">
                    <span class="close-button" id="closeErrorButton">&times;</span>
                    <h2 style="color:red">Password does not match.</h2>
                </div>
                </div>';
                
             }
             else if($_GET["error"] == "unametaken"){
                echo '<div id="errorPopup" class="popup">
                <div class="popup-content">
                    <span class="close-button" id="closeErrorButton">&times;</span>
                    <h2 style="color:red">The username is taken.</h2>
                </div>
                </div>';
             }
             else if($_GET["error"] == "invalidpwd"){
                echo '<div id="errorPopup" class="popup">
                <div class="popup-content">
                    <span class="close-button" id="closeErrorButton">&times;</span>
                    <h2 style="color:red">Invalid password.</h2>
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
        <center><h1 style="margin-bottom: 20px;">Sign Up</h1></center>
        <input type="text" placeholder="Enter your first name..." name="fname"> <br>
        <input type="text" placeholder="Enter your surname..." name="lname"> <br>
        <input type="text" placeholder="Enter your username..." name="username"> <br>
        <input type="password" placeholder="Create your password..." name="pwd"> <br>
        <input type="password" placeholder="Repeat your password..." name="rpwd"> <br>
        <input type="submit" value="sign up" name="submit" id="subm">
        <p style="margin-top: 12px;">Already have an account? <a href="login.php">Login</a></p>
    </form>

    <br><br>

    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>