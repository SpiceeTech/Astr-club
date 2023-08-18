<?php
    session_start();
?>

<header style="margin-bottom: 200px;">        
    <nav class="container">
        
        
        <a href="index.php" class="logo"><img src="../img/logo.png"></a>
        
        <div class="toggle" onclick="toggleMenu();"></div>
            
            <ul class="navigation">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Easy</a></li>
                <li><a href="gallery.html">Medium</a></li>
                <li><a href="login.php">Hard</a></li>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo '<li><a href="#">' . $_SESSION["useruid"] . '</a></li>';
                        echo '<li><a href="../includes/logout.inc.php">Logout</a></li>';
                    }
                
                ?>
            </ul>
          
        
        </div>
			 
	</nav>
    
</header>