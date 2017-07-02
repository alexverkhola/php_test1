<?php
    session_start();

    $answer = $_POST['answer'];
    
    $_SESSION['answer9'] = $answer;
    
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
            <h3>Вопрос №10</h3>
            <p>Введите в текстовое поле символ логического "ИЛИ" :<p>
            <form action="result.php" method="post">
           
                <br>
                <input type="text" name="answer" required="" style="margin-left: 25%;">
                <input class="send"type="submit" name="submit" value="Ответить">
                    
            </form>
        </div>

    </body>
</html>