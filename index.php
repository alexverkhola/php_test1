<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      
        <?php
        if(isset($_GET['userName'])){
            $userName = $_GET['userName'];
            
            setcookie("userName", $userName);
            
            header("Location: question1.php");
        }
        
                
        if(!isset($_COOKIE['userName'])){
        echo '  <form action="index.php" method="get">
            <label>Представтесь пожалуйста</label>
            <input type="text" name="userName" placeholder="Имя" required="">
            <input type="email" name="userEmail" placeholder="Email" required="">
            <input type="submit" name="submit" value="Войти">
        </form>';
        }else{
            header("Location: question1.php");
        }
        
        
        
        
            
        ?>
    </body>
</html>
