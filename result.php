<?php
   session_start();

    $answer = $_POST['answer'];
    
    $_SESSION['answer10'] = $answer;
    
    $rightAnswers = [
                "answer1" => 1,
                "answer2" => 11,
                "answer3" => 2,
                "answer4" => 2,
                "answer5" => 2,
                "answer6" => "HelloWorld",
                "answer7" => 3,
                "answer8" => 1,
                "answer9" => 2,
                "answer10" => "||"
    ];
    
    function calcResult($resultArray, $rightAnswers) {
        
        
        $totalResult = 0;
        
        foreach ($resultArray as $key => $value) {
            
            if($value == $rightAnswers[$key]){
                $totalResult++;
            }
        }
        return $totalResult;
       
    }
    
    
    
    
    $userResul = calcResult($_SESSION, $rightAnswers);
    ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <style>
         
            body{
               flex-direction: column;
               font-size: 22px;
               color: white;
            }
            h2{
                margin: auto;
            }
            p{
                margin: auto;
            }
        </style>
    </head>
    <body>
        <h2><?php echo $_COOKIE['userName']?></h2>
        <br>
        <p>Вы правильно ответили на <?php echo $userResul?>  из 10 вопросов</p>
        

    </body>
    <script src="script.js">
    
    </script>
</html>


