<?php
    session_start();

    $answer = $_POST['answer'];
    
    $_SESSION['answer1'] = $answer;
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style_1.css">
    </head>
    <body>
        <div class="question">
            <h3>Вопрос №2</h3>
            <p>Какое число будет в переменной $a:<p>
            <form action="question3.php" method="post">
                <code>$a = 2 + 3 * 3;</code>
                <input type="text" name="answer" required="">
                <input class="send"type="submit" name="submit" value="Ответить">
                    
            </form>
        </div>

    </body>
</html>
