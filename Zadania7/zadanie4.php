<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>zad4</title>
    </head>
    <body>
        <form method="POST">
            Imię:<input type="text" name="imie"><br>
            Naziwsko:<input type="text" name="nazwisko"><br>
            Email:<input type="email" name="email"><br>
            Hasło:<input type="password" name="haslo"><br>
            Potwierdź hasło:<input type="password" name="haslo1"><br>
            Wiek:<input type="number" name="wiek"><br>
            <input type="submit">
        </form>
        <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            $tablica = array(
                "Imie"=>$_POST["imie"],
                "Nazwisko" => $_POST["nazwisko"],
                "Email" => $_POST["email"],
                "Hasło" => $_POST["haslo"],
                "Hasło1" => $_POST["haslo1"],
                "Wiek" => $_POST["wiek"],
            );
            print_r($tablica);
        ?>
    </body>
</html>