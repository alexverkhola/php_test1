<?php
    session_start();

    $answer = $_POST['answer'];
    
    $_SESSION['answer8'] = $answer;
    
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
            <h3>Вопрос №9</h3>
            <p>Как правильно звучит аббревиатура PHP<p>
            <form action="question10.php" method="post">
                <label><input type="checkbox" id="checkbox1" onclick="uncheck23()" name="answer" value="1" /> ер ен ер</label><br><br>
                <label><input type="checkbox" id="checkbox2" onclick="uncheck13()" name="answer" value="2" /> пи ейч пи</label><br><br>
                <label><input type="checkbox" id="checkbox3" onclick="uncheck12()" name="answer" value="3" /> пе хе пе</label><br><br>
                
                <input class="send" type="submit" name="submit" value="Ответить">
                    
            </form>
        </div>

    </body>
    <script src="script.js">
    
    </script>
</html>

