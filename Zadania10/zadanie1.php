<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zadanie 2</title>
    </head>
    <body>
        <form method="POST">
            Podaj wartosc
            <input type="number" name="wartosc"><br>
            Reset
            <input type="checkbox" name="reset"><br>
            <input type="submit" value="Potwierdź">
        </form>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);  
            if(isset($_POST['reset'])){
                $reset = $_POST['reset'];
            }else{
                $reset = false;
            }
            if(isset($_COOKIE['odwiedziny']) && !($reset)){
                $liczba_odwiedzin = $_COOKIE['odwiedziny'];
            }else{
                $liczba_odwiedzin = 1;
            }
            setcookie('odwiedziny', $liczba_odwiedzin+1);

            if(isset($_POST['wartosc'])){
                $wartosc = $_POST['wartosc'];
            }else{
                $wartosc = 255;
            }

            echo 'liczba odwiedzin: '.$liczba_odwiedzin.'<br>';
            if($liczba_odwiedzin>=$wartosc){
                echo 'stosowna informacja'.'<br>';
            }

        ?>
    </body>
</html>