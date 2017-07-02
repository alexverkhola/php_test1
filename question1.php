<?php
    
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
            <h3>Вопрос №1</h3>
            <p>PHP это:<p>
            <form action="question2.php" method="post">
                <label><input type="checkbox" id="checkbox1" onclick="uncheck23()" name="answer" value="1" />Язык программирования</label><br><br>
                <label><input type="checkbox" id="checkbox2" onclick="uncheck13()" name="answer" value="2" />Порода слона</label><br><br>
                <label><input type="checkbox" id="checkbox3" onclick="uncheck12()" name="answer" value="3" />Web сервер</label><br><br>
                
                <input class="send" id="submit" type="submit" name="submit" value="Ответить">
                    
            </form>
        </div>

    </body>
    <script src="script.js">
    
    </script>
</html>
