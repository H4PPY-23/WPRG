<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>zad3</title>
    <style>
        body{
            text-align: center;
            background-color: lavender;
        }
        input, select,div {
            background-color: ghostwhite;
            color: darkblue;
            border: 1px solid grey;
            border-radius: 5px;
            padding: 8px;
            margin-right: 5px;
            margin-top: 10px;
            font-size: 15px;
        }

        #a:hover{
            font-weight: 600;
            padding: 10px;
            margin-left: -6px;
            margin-top: -5px;
            margin-bottom: -5px;
        }
        div{
            width: max-content;
            margin: 20px auto;
            color: blueviolet;
            font-size: 20px;
        }
        div:hover{
            color: violet;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="tekst" placeholder="tekst do operacji">
        <select name="operacja">
            <option value="odwrocenie">Odwrócenie ciągu znaków</option>
            <option value="duze">Zamiana wszystkich liter na wielkie</option>
            <option value="male">Zamiana wszystkich liter na małe.</option>
            <option value="liczenie">Liczenie liczby znaków</option>
            <option value="usuwanie">Usuwanie białych znaków z początku i końca ciągu.</option>
        </select>
        <input id="a" type="submit" value="Wykonaj">
    </form>
    <?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if(isset($_POST["tekst"])){
            $tekst = $_POST["tekst"];
            if(strlen($tekst)>=1){
                $operacja = $_POST["operacja"];
                switch($operacja){
                    case "odwrocenie":
                        $tekst = strrev($tekst);
                        break;
                    case "duze":
                        $tekst = strtoupper($tekst);
                        break;
                    case "male":
                        $tekst = strtolower($tekst);
                        break;
                    case "liczenie":
                        $tekst = strlen($tekst);
                        break;
                    case "usuwanie":
                        $tekst = trim($tekst);
                        break;
                    case "default":
                        $tekst = "nieprawidłowe dane";
                }
            }else{
                $tekst = 'pusty tekst';
            }
            echo '<div>',$tekst,'</div>';
        }
    ?>
</body>
</html>