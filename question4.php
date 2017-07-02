<?php
    session_start();

    $answer = $_POST['answer'];
    
    $_SESSION['answer3'] = $answer;
    
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
            <h3>Вопрос №4</h3>
            <p>Какой результат вернёт функция:<p>
            <form action="question5.php" method="post">
                <pre>
          function foo($a = 5){
                return $a++;
          }
                    
          foo(2);              
                </pre>
                <br>
                <input type="text" name="answer" required="" style="margin-left: 25%;">
                <input class="send"type="submit" name="submit" value="Ответить">
                    
            </form>
        </div>

    </body>
</html>
