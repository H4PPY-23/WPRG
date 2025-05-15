<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zadanie 4</title>
    </head>
    <body>
        <form method="POST">
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="haslo" placeholder="hasło"><br>
            <input type="submit" value="Potwierdź">
        </form>
        <a href="zadanie4.php" ><input type="button" value="Formularz rejrestracji"></a><br>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            if(isset($_POST['email']) && isset($_POST['haslo'])){
                $email = $_POST['email'];
                $haslo = $_POST['haslo'];
                if(preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9])/",$haslo) && strlen($haslo)>5){
                    $plik = fopen('dane.txt','r');
                    $dane = fread($plik, 30);
                    fclose($plik);
                    $tablica = explode(';',$dane);
                    if($tablica[2] == $email && $tablica[3] == $haslo){
                        echo 'Użytkownik: '.$tablica[0].' '.$tablica[1];
                    }else{
                        echo 'Błędne dane';
                    }
                }else{
                    echo 'Hasło powinno składać się z co najmniej 6 znaków, zawierać co najmniej 1 wielką literę, cyfrę oraz znak specjalny. ';
                }
            }
        ?>
    </body>
</html>