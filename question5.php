<?php
    session_start();

    $answer = $_POST['answer'];
    
    $_SESSION['answer4'] = $answer;
    
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
            <h3>Вопрос №5</h3>
            <p>В каком году вышел первый релиз PHP:<p>
            <form action="question6.php" method="post">
                <label><input type="checkbox" id="checkbox1" onclick="uncheck23()" name="answer" value="1" /> 1987</label><br><br>
                <label><input type="checkbox" id="checkbox2" onclick="uncheck13()" name="answer" value="2" /> 1995</label><br><br>
                <label><input type="checkbox" id="checkbox3" onclick="uncheck12()" name="answer" value="3" /> 2001</label><br><br>
                
                <input class="send" type="submit" name="submit" value="Ответить">
                    
            </form>
        </div>

    </body>
    <script src="script.js">
    
    </script>
</html>
