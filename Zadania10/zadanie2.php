<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zadanie 2</title>
    </head>
    <body>
        <form method="POST">
            Co było pierwsze?
            <select name="wybor">
                <option>Kura</option>
                <option>Jajo</option>
            </select>
            <input type="submit" value="Potwierdź">
        </form>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            if(isset($_COOKIE['wybor'])){
                echo 'głos został już oddany';
            }else if(isset($_POST['wybor'])){
                setcookie('wybor',$_POST['wybor'],time()+30);
                echo 'dziękujemy za oddanie głosu';
            }
        ?>
    </body>
</html>