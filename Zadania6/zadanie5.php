<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie5</title>
</head>
<body>
  <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    
    function pangram($tekst) :void{
        $tekst = strtolower($tekst);
        $tablica_porownanie = range('a', 'z');
        foreach ($tablica_porownanie as $adoz) {
            if (strpos($tekst, $adoz) === false) {
                echo "nie jest pangramem<br>";
                return;
            }
        }
        echo 'jest pangramem<br>';
    }

    pangram("quick brown fox jumps over the lazy dog");
    pangram("qwertyuiopasdfghjklzxcvbnm");
    pangram("to nie jest pangram")
  ?>
</body>
</html>