<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="quiz-includes/quiz.css">
    <title>Astro-Quiz</title>
</head>
<body>

    <?php
        include 'quiz-includes/quizheader.php';
    ?>

    <form action="quiz-includes/quiz.inc.php" method="get" style="margin-top: 200px;">
        <div>
            <input type="submit" value="Easy" name="submite"><br>
            <input type="submit" value="Medium" name="submitm"><br>
            <input type="submit" value="Hard" name="submith"><br>
        </div>
        <div>
            <?php

            ?>
        </div>
    </form>
    
</body>
</html>