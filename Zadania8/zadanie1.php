<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>zad1</title>
</head>
<body>
    <form method="post">
        <input type="text" name="tekst"><input type="submit">
    </form>
    <?php 
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        if(isset($_POST["tekst"])){
            $tekst = $_POST["tekst"];
            echo strtoupper($tekst),'<br>';
            echo strtolower($tekst),'<br>';
            echo ucfirst($tekst),'<br>';
            $arr_tekst = explode(" ",$tekst);
            foreach ($arr_tekst as $x) {
                echo ucfirst($x),' ';
            }
        }
    ?>
</body>
</html>