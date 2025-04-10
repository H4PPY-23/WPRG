<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie3</title>
</head>
<body>
  <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    function sequences_n($a1, $q, $n) {
        if(!is_string($a1) && !is_string($q) && !is_string($n)){
            if($n <=0 ){
                echo 'podaj N większe od zera<br>';
            }else{
                $n = ceil($n);
                $a = $a1;
                echo 'Arytmetyczny: '.$a1." ";
                for($i=0;$i<$n;$i++){
                    $a+=$q;
                    echo $a." ";
                }
                echo '<br>';
                $a = $a1;
                echo 'Geometryczny: '.$a1." ";
                for($i=0;$i<$n;$i++){
                    $a*=$q;
                    echo $a." ";
                }
                echo '<br><br>';
            }
        }else{
            echo 'podaj parametry numeryczne<br>';
        }
    }

    sequences_n(5, 2, 10);
    sequences_n(5, -2, 10);
    sequences_n(-5, 2, 10);
    sequences_n(5, 2.5, 10);
    sequences_n(5, 2.5, -10);
    sequences_n("start", 2, 10);
  ?>
</body>
</html>