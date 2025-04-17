<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>zad3</title>
    </head>
    <body>
        <?php 
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            function tablica($a,$b,$c,$d): array{
                if($b-$a>$d-$c){
                    echo "błąd";
                    return [];
                }else{
                    $tablica = [];
                    $wartosc = $c;
                    for($i=$a;$i<$b;$i++){
                        $tablica[$i]=$wartosc;
                        $wartosc++;
                    }
                    return $tablica;
                }
            }
            print_r(tablica(3,8,6,12))
        ?>
    </body>
</html>