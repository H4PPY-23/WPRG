<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie4</title>
</head>
<body>
  <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    function macierze($macierz1, $macierz2) {
        $macierz3 = [];
        if(count($macierz1[0]) == count($macierz2)) {
            for($i = 0; $i < count($macierz1); $i++) {
                echo '[ ';
                for($j = 0; $j < count($macierz2[0]); $j++) {
                    $suma = 0;
                    for($k = 0; $k < count($macierz1[0]); $k++) {
                        $suma += $macierz1[$i][$k] * $macierz2[$k][$j];
                    }
                    $macierz3[$i][$j] = $suma;
                    echo $suma . " ";
                }
                echo ']<br>';
            }
            echo'<br>';
        }else{
            echo "złe wymiary<br>";
        }
    }
    $macierz1 = [[1, 2, 3], [2,2,2]];
    $macierz2 = [[1,1,1],[2,2,2],[3,4,5]];

    macierze($macierz1, $macierz2);
    macierze($macierz2, $macierz2);
    macierze($macierz2, $macierz1);
  ?>
</body>
</html>