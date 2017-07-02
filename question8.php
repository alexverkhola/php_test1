<?php
    session_start();

    $answer = $_POST['answer'];
    
    $_SESSION['answer7'] = $answer;
    
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
            <h3>Вопрос №8</h3>
            <p>Какое значение запишется в переменную $x :<p>
            <form action="question9.php" method="post">
                <pre>
             $a = "1A";
             $b = "A1";
             $x = $a + $b;
                </pre>
                <br>
                <input type="text" name="answer" required="" style="margin-left: 25%;">
                <input class="send"type="submit" name="submit" value="Ответить">
                    
            </form>
        </div>

    </body>
</html>